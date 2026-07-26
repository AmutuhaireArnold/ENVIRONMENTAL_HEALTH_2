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
                <h3>Health and Safety Profession Programs</h3>
                <p>A structured program pathway for practitioners advancing through Full Membership, Associate Membership, and Honorary Membership levels.</p>
            </div>
            <div class="info-card">
                <div class="avatar mono">02</div>
                <h3>Mentoring Program</h3>
                <p>Pairs newer practitioners with experienced Fellows and community leaders for guided professional growth.</p>
            </div>
            <div class="info-card">
                <div class="avatar mono">03</div>
                <h3>Seminars &amp; Workshops</h3>
                <p>Focused, practical training on specific OHS topics- From Environmental Health to Occupational Safety.</p>
            </div>
        </div>
    </div>
</section>
@if ($programs->isNotEmpty())
<section class="sec alt">
    <div class="wrap">
        <div class="sec-head">
            <span class="tag mono">CURRENT PROGRAMS</span>
            <h2 class="display">Running now</h2>
        </div>
        <div class="card-grid">
            @foreach ($programs as $program)
            <div class="info-card">
                <div class="tagrow"><span class="cat mono">PROGRAM</span><span class="date mono">{{ $program->starts_at ? strtoupper($program->starts_at->format('j M Y')) : '' }}</span></div>
                <h3>{{ $program->title }}</h3>
                <p>{{ $program->description }}</p>
                @if ($program->location)<span class="readmore condensed">{{ $program->location }} →</span>@endif
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection