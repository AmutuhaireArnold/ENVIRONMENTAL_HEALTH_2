/* Click-to-zoom for ordinary photos across the site.
   Deliberately skips:
   - .slide img            (the hero slideshow — images fade in/out on their own)
   - .marquee-track img    (member photos sliding across the executive/committee marquees)
   - .member-chip.tappable img (these already open the fuller bio modal)
   - .logo-img              (site logo, not a "photo")
   - .video-embed img       (YouTube thumbnails — clicking these plays the video, not a zoom)
   - #modalImg              (the bio-modal's own image element)

   Once open, the photo can be zoomed in/out with the scroll wheel, the
   +/- buttons, double-click/double-tap, or pinch gestures on touch
   devices, and panned by dragging while zoomed in.
*/
(function () {
  var MIN_SCALE = 1;
  var MAX_SCALE = 4;
  var STEP = 0.5;

  function buildLightbox() {
    var overlay = document.createElement('div');
    overlay.className = 'img-lightbox';
    overlay.setAttribute('aria-hidden', 'true');
    overlay.innerHTML =
      '<div class="img-lightbox-backdrop"></div>' +
      '<div class="img-lightbox-media">' +
        '<button type="button" class="img-lightbox-close" aria-label="Close">&times;</button>' +
        '<div class="img-lightbox-frame">' +
          '<img alt="">' +
        '</div>' +
        '<div class="img-lightbox-zoombar">' +
          '<button type="button" class="img-lightbox-zoom-out" aria-label="Zoom out">&minus;</button>' +
          '<button type="button" class="img-lightbox-zoom-reset" aria-label="Reset zoom">1:1</button>' +
          '<button type="button" class="img-lightbox-zoom-in" aria-label="Zoom in">&plus;</button>' +
        '</div>' +
      '</div>';
    document.body.appendChild(overlay);
    return overlay;
  }

  document.addEventListener('DOMContentLoaded', function () {
    var overlay = buildLightbox();
    var frame = overlay.querySelector('.img-lightbox-frame');
    var imgEl = overlay.querySelector('.img-lightbox-frame img');
    var closeBtn = overlay.querySelector('.img-lightbox-close');
    var backdrop = overlay.querySelector('.img-lightbox-backdrop');
    var zoomInBtn = overlay.querySelector('.img-lightbox-zoom-in');
    var zoomOutBtn = overlay.querySelector('.img-lightbox-zoom-out');
    var zoomResetBtn = overlay.querySelector('.img-lightbox-zoom-reset');

    var scale = 1, panX = 0, panY = 0;
    var dragging = false, dragStartX = 0, dragStartY = 0, panStartX = 0, panStartY = 0;
    var pinchStartDist = 0, pinchStartScale = 1;

    function applyTransform() {
      imgEl.style.transform = 'translate(' + panX + 'px,' + panY + 'px) scale(' + scale + ')';
      frame.classList.toggle('zoomed-in', scale > 1);
    }

    function clampPan() {
      var maxPan = (scale - 1) * 260;
      if (maxPan < 0) maxPan = 0;
      panX = Math.max(-maxPan, Math.min(maxPan, panX));
      panY = Math.max(-maxPan, Math.min(maxPan, panY));
    }

    function setScale(newScale) {
      newScale = Math.max(MIN_SCALE, Math.min(MAX_SCALE, newScale));
      if (newScale === scale) return;
      scale = newScale;
      if (scale === MIN_SCALE) { panX = 0; panY = 0; }
      clampPan();
      applyTransform();
    }

    function resetZoom() {
      scale = 1; panX = 0; panY = 0;
      applyTransform();
    }

    function openLightbox(src, alt) {
      imgEl.src = src;
      imgEl.alt = alt || '';
      resetZoom();
      overlay.classList.add('open');
      overlay.setAttribute('aria-hidden', 'false');
      document.body.classList.add('lightbox-open');
    }
    function closeLightbox() {
      overlay.classList.remove('open');
      overlay.setAttribute('aria-hidden', 'true');
      document.body.classList.remove('lightbox-open');
      imgEl.src = '';
      resetZoom();
    }

    closeBtn.addEventListener('click', closeLightbox);
    backdrop.addEventListener('click', closeLightbox);
    document.addEventListener('keydown', function (e) {
      if (!overlay.classList.contains('open')) return;
      if (e.key === 'Escape') closeLightbox();
      if (e.key === '+' || e.key === '=') setScale(scale + STEP);
      if (e.key === '-' || e.key === '_') setScale(scale - STEP);
    });

    zoomInBtn.addEventListener('click', function () { setScale(scale + STEP); });
    zoomOutBtn.addEventListener('click', function () { setScale(scale - STEP); });
    zoomResetBtn.addEventListener('click', resetZoom);

    frame.addEventListener('wheel', function (e) {
      e.preventDefault();
      setScale(scale + (e.deltaY < 0 ? STEP : -STEP));
    }, { passive: false });

    imgEl.addEventListener('dblclick', function () {
      setScale(scale > 1 ? 1 : 2.5);
    });

    imgEl.addEventListener('mousedown', function (e) {
      if (scale <= 1) return;
      dragging = true;
      dragStartX = e.clientX; dragStartY = e.clientY;
      panStartX = panX; panStartY = panY;
      imgEl.classList.add('dragging');
      e.preventDefault();
    });
    window.addEventListener('mousemove', function (e) {
      if (!dragging) return;
      panX = panStartX + (e.clientX - dragStartX);
      panY = panStartY + (e.clientY - dragStartY);
      clampPan();
      applyTransform();
    });
    window.addEventListener('mouseup', function () {
      dragging = false;
      imgEl.classList.remove('dragging');
    });

    imgEl.addEventListener('touchstart', function (e) {
      if (e.touches.length === 2) {
        var dx = e.touches[0].clientX - e.touches[1].clientX;
        var dy = e.touches[0].clientY - e.touches[1].clientY;
        pinchStartDist = Math.hypot(dx, dy);
        pinchStartScale = scale;
      } else if (e.touches.length === 1 && scale > 1) {
        dragging = true;
        dragStartX = e.touches[0].clientX; dragStartY = e.touches[0].clientY;
        panStartX = panX; panStartY = panY;
      }
    }, { passive: true });
    imgEl.addEventListener('touchmove', function (e) {
      if (e.touches.length === 2) {
        e.preventDefault();
        var dx = e.touches[0].clientX - e.touches[1].clientX;
        var dy = e.touches[0].clientY - e.touches[1].clientY;
        var dist = Math.hypot(dx, dy);
        if (pinchStartDist > 0) setScale(pinchStartScale * (dist / pinchStartDist));
      } else if (e.touches.length === 1 && dragging) {
        panX = panStartX + (e.touches[0].clientX - dragStartX);
        panY = panStartY + (e.touches[0].clientY - dragStartY);
        clampPan();
        applyTransform();
      }
    }, { passive: false });
    imgEl.addEventListener('touchend', function () {
      dragging = false;
      pinchStartDist = 0;
    });

    var candidates = document.querySelectorAll('img');
    candidates.forEach(function (img) {
      if (img.closest('.slide')) return;
      if (img.closest('.marquee-track')) return;
      if (img.closest('.member-chip.tappable')) return;
      if (img.classList.contains('logo-img')) return;
      if (img.closest('.socials')) return;
      if (img.closest('.video-embed')) return;
      if (img.id === 'modalImg') return;

      img.classList.add('zoomable');
      img.setAttribute('tabindex', '0');
      img.setAttribute('role', 'button');
      img.setAttribute('aria-label', 'Zoom in on photo');
      img.addEventListener('click', function () {
        openLightbox(img.currentSrc || img.src, img.alt);
      });
      img.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          openLightbox(img.currentSrc || img.src, img.alt);
        }
      });
    });
  });
})();
