/* FEHSU — shared enhancements: numbered step badges, sliding footer
   carousels (Member Associations + Partners) and manual prev/next arrows
   on every auto-sliding row (marquees) across the site. */
(function(){

  function attachSlider(track, prevBtn, nextBtn, speed){
    if(!track) return;
    var autoTimer=null;
    var paused=false;
    speed = speed || 0.55;

    function tick(){
      if(paused) return;
      track.scrollLeft += speed;
      var half = track.scrollWidth / 2;
      if(track.scrollLeft >= half){ track.scrollLeft -= half; }
    }
    function start(){ if(!autoTimer) autoTimer=setInterval(tick, 30); }
    function stop(){ if(autoTimer){ clearInterval(autoTimer); autoTimer=null; } }

    if(!('IntersectionObserver' in window)){
      start();
    } else {
      var io=new IntersectionObserver(function(entries){
        entries.forEach(function(e){ if(e.isIntersecting) start(); else stop(); });
      }, { threshold:0.05 });
      io.observe(track);
    }

    track.addEventListener('mouseenter', function(){ paused=true; });
    track.addEventListener('mouseleave', function(){ paused=false; });
    track.addEventListener('touchstart', function(){ paused=true; }, {passive:true});
    track.addEventListener('touchend', function(){ setTimeout(function(){ paused=false; }, 2200); });

    function step(dir){
      paused=true;
      var amount = Math.max(240, track.clientWidth*0.7) * dir;
      track.scrollBy({ left:amount, behavior:'smooth' });
      setTimeout(function(){ paused=false; }, 2800);
    }
    if(prevBtn) prevBtn.addEventListener('click', function(){ step(-1); });
    if(nextBtn) nextBtn.addEventListener('click', function(){ step(1); });
  }

  function initFooterSliders(){
    document.querySelectorAll('.org-slider').forEach(function(wrap){
      var track = wrap.querySelector('.org-slider-track');
      var prev = wrap.querySelector('.org-slider-nav.prev');
      var next = wrap.querySelector('.org-slider-nav.next');
      attachSlider(track, prev, next, 0.5);
    });
  }

  function initMarqueeSliders(){
    document.querySelectorAll('.marquee').forEach(function(marquee){
      if(marquee.classList.contains('slider-ready')) return;
      var track = marquee.querySelector('.marquee-track');
      if(!track) return;
      marquee.classList.add('slider-ready');
      track.removeAttribute('style');
      track.classList.add('scroll-track');

      var wrap = document.createElement('div');
      wrap.className = 'marquee-wrap';
      marquee.parentNode.insertBefore(wrap, marquee);
      wrap.appendChild(marquee);

      var prev = document.createElement('button');
      prev.type='button'; prev.className='marquee-nav prev';
      prev.setAttribute('aria-label','Show previous'); prev.innerHTML='&#8249;';
      var next = document.createElement('button');
      next.type='button'; next.className='marquee-nav next';
      next.setAttribute('aria-label','Show next'); next.innerHTML='&#8250;';
      wrap.appendChild(prev);
      wrap.appendChild(next);

      attachSlider(track, prev, next, 0.6);
    });
  }

  function initStepBadges(){
    var palette = [
      ['#2f8fd6','#1c5fa8'],
      ['#39b96b','#1f8a4a'],
      ['#f0c231','#dd9f0d'],
      ['#f2903a','#d76d16'],
      ['#e3564f','#c3312c']
    ];
    document.querySelectorAll('.tag.mono').forEach(function(tag){
      if(tag.classList.contains('step-tag')) return;
      var text = tag.textContent.replace(/\s+/g,' ').trim();
      var m = text.match(/^(\d{2})\s*[—-]\s*(.+)$/);
      if(!m) return;
      var num = parseInt(m[1], 10);
      var c = palette[(num - 1) % palette.length];
      tag.classList.add('step-tag');
      tag.innerHTML =
        '<span class="step-num" style="background:linear-gradient(135deg,' + c[0] + ',' + c[1] + ')">' + m[1] + '</span>' +
        '<span class="step-bar" style="background:linear-gradient(90deg,' + c[0] + ',' + c[1] + ')">' + m[2] + '</span>';
    });
  }

  document.addEventListener('DOMContentLoaded', function(){
    initStepBadges();
    initFooterSliders();
    initMarqueeSliders();
  });
})();
