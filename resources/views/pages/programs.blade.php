@extends('layouts.app')

@section('title', 'Programs — FEHSU')
@section('description', 'FEHSU\'s professional development programs: certification, mentoring, and short courses.')

@section('content')
<section class="page-hero has-photo">
<div class="hero-photo" style="background-image:url('/images/5.jpeg')"></div>
<div class="hero-overlay"></div>
<div class="wrap">
<span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>EVENTS</span>
<h1 class="display">Programs</h1>
<p class="sub">Ongoing professional development programs run by FEHSU for its members.</p>
</div>
</section>
<section class="sec">
<div class="wrap">
<div class="card-grid">
<div class="info-card">
<div class="avatar mono">01</div>
<h3>Health and Safety Profession Certification</h3>
<p>A structured certification pathway for practitioners advancing through Technical, Graduate, and Chartered levels.</p>
</div>
<div class="info-card">
<div class="avatar mono">02</div>
<h3>Mentoring Program</h3>
<p>Pairs newer practitioners with experienced Fellows and community leaders for guided professional growth.</p>
</div>
<div class="info-card">
<div class="avatar mono">03</div>
<h3>Short Courses &amp; Micro-credentials</h3>
<p>Focused, practical training on specific OHS topics — from industrial hygiene to incident investigation.</p>
</div>
</div>
</div>
</section>
@endsection
