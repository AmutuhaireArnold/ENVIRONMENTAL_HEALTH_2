@extends('layouts.app')

@section('title', 'Membership options — FEHSU')
@section('description', 'FEHSU membership tiers: Graduate, Chartered, Technical, Student, Corporate, and Honorary — with registration and annual fees.')

@section('content')
<section class="page-hero has-photo">
<div class="hero-photo" style="background-image:url('/images/04.jpg')"></div>
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
<p class="price-line">Registration Fee <b>UGX 50,000</b> &amp; Annual Fee <b>UGX 100,000</b></p>
<div class="feature-rows">
<div class="frow"><span>Any person possessing the health and safety certificate</span><span class="fcheck">✓</span></div>
<div class="frow"><span>Work experience of 2 years and below 3 years</span><span class="fcheck">✓</span></div>
</div>
<a class="cta-btn" href="https://docs.google.com/forms/d/e/1FAIpQLScKxVos78HSmTmZiKxrgiQEYihKOeeTUKB9n-se3fgzOFSJmg/viewform?usp=header">Join Now</a>
</div>
<div class="price-card featured">
<h3>Associate Member</h3>
<p class="price-line">Registration Fee <b>UGX 50,000</b> &amp; Annual Fee <b>UGX 150,000</b></p>
<div class="feature-rows">
<div class="frow"><span>OHS practitioners &amp; professionals</span><span class="fcheck">✓</span></div>
<div class="frow"><span>At least a health and safety related Degree or higher, or 5+ years' work experience</span><span class="fcheck">✓</span></div>
</div>
<a class="cta-btn" href="https://docs.google.com/forms/d/e/1FAIpQLScKxVos78HSmTmZiKxrgiQEYihKOeeTUKB9n-se3fgzOFSJmg/viewform?usp=header" target="_blank" rel="noopener">Join Now</a>
</div>
<div class="price-card">
<h3>Honarary Member</h3>
<p class="price-line">Registration Fee <b>UGX 50,000</b> &amp; Annual Fee <b>UGX 100,000</b></p>
<div class="feature-rows">
<div class="frow"><span>Any person possessing a health and safety related Diploma</span><span class="fcheck">✓</span></div>
<div class="frow"><span>Work experience of less than 2 years</span><span class="fcheck">✓</span></div>
</div>
<a class="cta-btn" href="https://docs.google.com/forms/d/e/1FAIpQLScKxVos78HSmTmZiKxrgiQEYihKOeeTUKB9n-se3fgzOFSJmg/viewform?usp=header">Join Now</a>
</div>

</div>
</div>
</section>
@endsection
