@extends('layouts.app')

@section('title', 'Central Executive Committee — FEHSU')
@section('description', 'Meet FEHSU\'s Central Executive Committee and browse the archive of previous committees.')

@section('content')
<section class="page-hero has-photo">
<div class="hero-photo" style="background-image:url('/images/11.jpg')"></div>
<div class="hero-overlay"></div>
<div class="wrap">
<span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>MEMBER DIRECTORY · CURRENT TERM</span>
<h1 class="display">Central Executive Committee</h1>
<p class="sub">Meet the Central Executive Committee currently running FEHSU's day-to-day affairs. Tap any photo to view their profile.</p>
</div>
</section>
<section class="sec">
<div class="wrap">

<div class="callout" style="margin-bottom:40px;">
<span class="icon"></span>
<p>Tap or click a photo to zoom in and read a short bio.</code></p>
</div>

<div class="member-level">
<div class="member-level-head">
<div><span class="tag mono"> CURRENT TERM</span><h2 class="display">Central Executive Committee</h2></div>
<p>The elected officers who run FEHSU's day-to-day affairs.</p>
</div>
{{-- CHANGED: CEC members now come from the database (Admin -> Members -> Central Executive Committee). --}}
@include('partials.member-marquee', ['members' => $cecMembers, 'duration' => '160s'])
</div>

<div class="sister-orgs" id="sister-orgs">
<div class="sister-orgs-head">
<span class="tag mono"> MEMBER ASSOCIATIONS</span>
<h2 class="display">Member associations</h2>
<p>FEHSU works alongside these Member Associations. Select a logo to view that Association's National Executive Committee.</p>
</div>
<div class="sister-orgs-slider">
<button type="button" class="sister-orgs-nav prev" id="sisterOrgsPrev" aria-label="Scroll Member Associations left">‹</button>
<div class="sister-orgs-track" id="sisterOrgsTrack">

<a class="sister-org-logo" href="/associations/sister-org-1">
<span class="sister-org-logo-box"><img src="/images/PHS.png" alt="Member Association 1 logo" onerror="this.parentElement.textContent='MA1'"></span>
<span class="sister-org-name">MMUPHSA</span>
</a>

<a class="sister-org-logo" href="/associations/sister-org-2">
<span class="sister-org-logo-box"><img src="/images/MUEHSA.png" alt="Member Association 2 logo" onerror="this.parentElement.textContent='MA2'"></span>
<span class="sister-org-name">MUEHSA</span>
</a>

<a class="sister-org-logo" href="/associations/sister-org-3">
<span class="sister-org-logo-box"><img src="/images/MEHSA.JPG" alt="Member Association 3 logo" onerror="this.parentElement.textContent='MA3'"></span>
<span class="sister-org-name">MUHSA</span>
</a>

<a class="sister-org-logo" href="/associations/sister-org-4">
<span class="sister-org-logo-box"><img src="/images/PHOTO.jpeg" alt="Member Association 4 logo" onerror="this.parentElement.textContent='MA4'"></span>
<span class="sister-org-name">FEHSU</span>
</a>

<a class="sister-org-logo" href="/associations/sister-org-5">
<span class="sister-org-logo-box"><img src="/images/partner-logo-placeholder.png" alt="Member Association 5 logo" onerror="this.parentElement.textContent='MA5'"></span>
<span class="sister-org-name">Member Association 5</span>
</a>

<a class="sister-org-logo" href="/associations/sister-org-6">
<span class="sister-org-logo-box"><img src="/images/partner-logo-placeholder.png" alt="Member Association 6 logo" onerror="this.parentElement.textContent='MA6'"></span>
<span class="sister-org-name">Member Association 6</span>
</a>

<a class="sister-org-logo" href="/associations/sister-org-7">
<span class="sister-org-logo-box"><img src="/images/partner-logo-placeholder.png" alt="Member Association 7 logo" onerror="this.parentElement.textContent='MA7'"></span>
<span class="sister-org-name">Member Association 7</span>
</a>

<a class="sister-org-logo" href="/associations/sister-org-8">
<span class="sister-org-logo-box"><img src="/images/partner-logo-placeholder.png" alt="Member Association 8 logo" onerror="this.parentElement.textContent='MA8'"></span>
<span class="sister-org-name">Member Association 8</span>
</a>

<a class="sister-org-logo" href="/associations/sister-org-9">
<span class="sister-org-logo-box"><img src="/images/partner-logo-placeholder.png" alt="Member Association 9 logo" onerror="this.parentElement.textContent='MA9'"></span>
<span class="sister-org-name">Member Association 9</span>
</a>

<a class="sister-org-logo" href="/associations/sister-org-10">
<span class="sister-org-logo-box"><img src="/images/partner-logo-placeholder.png" alt="Member Association 10 logo" onerror="this.parentElement.textContent='MA10'"></span>
<span class="sister-org-name">Member Association 10</span>
</a>

<a class="sister-org-logo" href="/associations/sister-org-11">
<span class="sister-org-logo-box"><img src="/images/partner-logo-placeholder.png" alt="Member Association 11 logo" onerror="this.parentElement.textContent='MA11'"></span>
<span class="sister-org-name">Member Association 11</span>
</a>
</div>
<button type="button" class="sister-orgs-nav next" id="sisterOrgsNext" aria-label="Scroll Member Associations right">›</button>
</div>
</div>

<div class="committee-archive">
<div class="committee-archive-head">
<span class="tag mono"> CENTRAL EXECUTIVE COMMITTEE ARCHIVE</span>
<h2 class="display">Previous committees</h2>
<p>Browse earlier Central Executive Committees. Each archive page uses the same tap-to-zoom photos and bios as this page.</p>
</div>
<div class="committee-archive-grid">
<a class="committee-arrow-card" href="/committees/committee-1st">
<div><span class="label">ARCHIVE</span><h4>1st Central Executive Committee</h4></div>
<span class="arrow">→</span>
</a>
<a class="committee-arrow-card" href="/committees/committee-2nd">
<div><span class="label">ARCHIVE</span><h4>2nd Central Executive Committee</h4></div>
<span class="arrow">→</span>
</a>
<a class="committee-arrow-card" href="/committees/committee-3rd">
<div><span class="label">ARCHIVE</span><h4>3rd Central Executive Committee</h4></div>
<span class="arrow">→</span>
</a>
</div>
</div>

</div>
</section>
<section class="cta-band">
<div class="cta-band-inner">
<h2 class="display">Bring your organization into the fold.</h2>
<a class="btn-dark" href="/member-options">Become a member</a>
</div>
</section>

<!-- Tap-to-zoom photo/bio modal -->
<div class="photo-modal zoom-in" id="photoModal" data-effect="zoom-in" aria-hidden="true">
<div class="photo-modal-backdrop" data-close></div>
<div class="photo-modal-panel" role="dialog" aria-modal="true" aria-labelledby="modalName">
<button type="button" class="photo-modal-close" data-close aria-label="Close">✕</button>
<div class="photo-modal-media">
<button type="button" class="photo-modal-nav prev" data-nav="prev" aria-label="Previous person">‹</button>
<img id="modalImg" src="" alt="">
<button type="button" class="photo-modal-nav next" data-nav="next" aria-label="Next person">›</button>
<span class="photo-modal-count" id="modalCount"></span>
</div>
<div class="photo-modal-info">
<h3 id="modalName"></h3>
<p class="role" id="modalRole"></p>
<p class="bio" id="modalBio"></p>
</div>
</div>
</div>
@endsection

@push('scripts')
<script>
(function(){
  var track = document.getElementById('sisterOrgsTrack');
  if(!track) return;
  var prevBtn = document.getElementById('sisterOrgsPrev');
  var nextBtn = document.getElementById('sisterOrgsNext');
  var autoTimer;

  function step(dir){
    var card = track.querySelector('.sister-org-logo');
    var gap = 30;
    var amount = (card ? card.offsetWidth : 136) + gap;
    track.scrollBy({ left: dir * amount, behavior: 'smooth' });
  }
  function autoSlide(){
    if(track.scrollLeft + track.clientWidth >= track.scrollWidth - 2){
      track.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
      track.scrollBy({ left: 1, behavior: 'auto' });
    }
  }
  function startAuto(){ stopAuto(); autoTimer = setInterval(autoSlide, 35); }
  function stopAuto(){ clearInterval(autoTimer); }

  if(prevBtn) prevBtn.addEventListener('click', function(){ step(-1); startAuto(); });
  if(nextBtn) nextBtn.addEventListener('click', function(){ step(1); startAuto(); });
  track.addEventListener('mouseenter', stopAuto);
  track.addEventListener('mouseleave', startAuto);
  track.addEventListener('touchstart', stopAuto, { passive:true });
  track.addEventListener('touchend', startAuto, { passive:true });

  if(!window.matchMedia('(prefers-reduced-motion: reduce)').matches){ startAuto(); }
})();
</script>
@endpush
