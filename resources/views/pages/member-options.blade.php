@extends('layouts.app')

@section('title', 'Membership options  FEHSU')
@section('description', 'FEHSU membership tiers: Full Membership, Associate Membership, and Honorary Membership, with registration and annual fees.')

@section('content')
<section class="page-hero has-photo">
<div class="hero-photo" style="background-image:url('/images/11.jpg')"></div>
<div class="hero-overlay"></div>
<div class="wrap">
<span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>MEMBERSHIP · JOIN US</span>
<h1 class="display">Membership options</h1>
<p class="sub">If you're new to FEHSU, start your registration by choosing an option below.</p>
</div>
</section>
<section class="sec">
<div class="wrap">
<div class="pricing-grid">
<div class="price-card">
<h3>Full Member</h3>
<p class="price-line">Registration Fee <b>UGX 10,0000</b></p>
<div class="feature-rows">
<div class="frow"><span>Any Environmental Health student from any institution </span><span class="fcheck">✓</span></div>
<div class="frow"><span>Institutions that have well established leadership structure such as associations</span><span class="fcheck">✓</span></div>
</div>
<a class="cta-btn" href="https://docs.google.com/forms/d/e/1FAIpQLScKxVos78HSmTmZiKxrgiQEYihKOeeTUKB9n-se3fgzOFSJmg/viewform?usp=header">Join Now</a>
</div>
<div class="price-card featured">
<h3>Associate Member</h3>
<p class="price-line">Registration Fee <b>UGX 50,000</b></p>
<div class="feature-rows">
<div class="frow"><span></span>Members who were once full members but are currently practicing in the field of Environmental Health<span class="fcheck">✓</span></div>
<div class="frow"><span>Those who are interested in Environmental Health issues, whom the Executive committe of any association may judge to have interest in the association at heart</span><span class="fcheck">✓</span></div>
</div>
<a class="cta-btn" href="https://docs.google.com/forms/d/e/1FAIpQLScKxVos78HSmTmZiKxrgiQEYihKOeeTUKB9n-se3fgzOFSJmg/viewform?usp=header" target="_blank" rel="noopener">Join Now</a>
</div>
<div class="price-card">
<h3>Honarary Member</h3>
<p class="price-line">Registration Fee <b>UGX 100,000</b></p>
<div class="feature-rows">
<div class="frow"><span> The association on recommendation by executive committe shall make the appointment.</span><span class="fcheck">✓</span></div>
<div class="frow"><span>Individuals who have particularly important services to the association shall be conferred upon the title "honorary member"</span><span class="fcheck">✓</span></div>
</div>
<a class="cta-btn" href="https://docs.google.com/forms/d/e/1FAIpQLScKxVos78HSmTmZiKxrgiQEYihKOeeTUKB9n-se3fgzOFSJmg/viewform?usp=header">Join Now</a>
</div>

</div>
</div>
</section>
@endsection
