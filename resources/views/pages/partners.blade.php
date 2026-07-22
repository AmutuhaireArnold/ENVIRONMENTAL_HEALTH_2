@extends('layouts.app')

@section('title', 'Partners — FEHSU')
@section('description', 'Organizations and allied bodies partnering with FEHSU to advance occupational health and safety in Uganda.')

@section('content')
<section class="page-hero has-photo">
<div class="hero-photo" style="background-image:url('/images/5.jpeg')"></div>
<div class="hero-overlay"></div>
<div class="wrap">
<span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>MEMBER DIRECTORY</span>
<h1 class="display">Partners</h1>
<p class="sub">Organizations, sponsors and allied bodies who work with FEHSU to advance health and safety practice in Uganda.</p>
</div>
</section>
<section class="sec">
<div class="wrap">
<div class="callout" style="margin-bottom:40px;">
<span class="icon"></span>
<p>Below are partner organizations with whom FEHSU collaborates to promote health and safety standards in Uganda.</p>
</div>

<!--
  =========================================================================
  HOW TO ADD A PARTNER
  1. Duplicate one <div class="partner-card">…</div> block below.
  2. Swap the <img src="/images/partner-logo-placeholder.png"> for the partner's
     logo file (square or landscape logos both work — they are boxed to
     fit). Keep a short, descriptive alt tag.
  3. Replace the placeholder heading with the partner's name.
  4. Replace the paragraph with a 1–2 sentence description of the
     partnership (what they support, since when, etc).
  5. Optionally set the link on the "Visit website" button to the
     partner's site, or delete the button if not needed.
  =========================================================================
-->
<div class="partners-grid">

<div class="partner-card">
<div class="partner-logo-slot">
<img src="/images/ncosha.jpg" alt="Partner logo placeholder — replace with organization logo" onerror="this.parentElement.classList.add('empty')">
<span class="slot-label">Logo goes here</span>
</div>
<h3>NCOSHA (U) Ltd</h3>
<p>NCOSHA, founded in 2015 in Uganda, delivers occupational health, safety, environmental, and quality consultancy, training, and compliance services, ISO-certified, supplying PPE and specialized programs across diverse industries..</p>
<a class="btn-outline" href="https://www.ncoshaltd.com/?utm_source=copilot.com" style="margin-top:14px;">Visit website</a>
</div>

<div class="partner-card">
<div class="partner-logo-slot">
<img src="/images/ncosha.jp" alt="Partner logo placeholder — replace with organization logo" onerror="this.parentElement.classList.add('empty')">
<span class="slot-label">Logo goes here</span>
</div>
<h3>Partner name</h3>
<p>Short description of the partnership — what this organization supports and how they work with FEHSU.</p>
<a class="btn-outline" href="#" style="margin-top:14px;">Visit website</a>
</div>

<div class="partner-card">
<div class="partner-logo-slot">
<img src="/images/partner-logo-placeholder.png" alt="Partner logo placeholder — replace with organization logo" onerror="this.parentElement.classList.add('empty')">
<span class="slot-label">Logo goes here</span>
</div>
<h3>Partner name</h3>
<p>Short description of the partnership — what this organization supports and how they work with FEHSU.</p>
<a class="btn-outline" href="#" style="margin-top:14px;">Visit website</a>
</div>

<div class="partner-card">
<div class="partner-logo-slot">
<img src="/images/partner-logo-placeholder.png" alt="Partner logo placeholder — replace with organization logo" onerror="this.parentElement.classList.add('empty')">
<span class="slot-label">Logo goes here</span>
</div>
<h3>Partner name</h3>
<p>Short description of the partnership — what this organization supports and how they work with FEHSU.</p>
<a class="btn-outline" href="#" style="margin-top:14px;">Visit website</a>
</div>

<!-- Add another <div class="partner-card"> block here for each new partner -->

</div>
</div>
</section>
<section class="cta-band">
<div class="cta-band-inner">
<h2 class="display">Interested in partnering with FEHSU?</h2>
<a class="btn-dark" href="/contact">Get in touch</a>
</div>
</section>
@endsection
