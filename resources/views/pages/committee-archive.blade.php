@extends('layouts.app')

@section('title', $committee->name . ' — FEHSU')
@section('description', 'Archive listing for ' . $committee->name . ' (' . $committee->term_label . ').')

@section('content')
@php($hero = $committee->hero_image ? (str_starts_with($committee->hero_image, '/') ? $committee->hero_image : '/storage/' . $committee->hero_image) : '/images/5.jpeg')
<section class="page-hero has-photo">
<div class="hero-photo" style="background-image:url('{{ $hero }}')"></div>
<div class="hero-overlay"></div>
<div class="wrap">
<span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>COMMITTEE ARCHIVE · {{ $committee->term_label }}</span>
<h1 class="display">{{ $committee->name }}</h1>
<p class="sub">{{ $committee->description ?: 'The committee that served FEHSU, ' . $committee->term_label . '. Tap any photo to view their profile.' }}</p>
</div>
</section>
<section class="sec">
<div class="wrap">

<div class="callout" style="margin-bottom:40px;">
<span class="icon"></span>
<p>Archive listing for {{ $committee->name }} ({{ $committee->term_label }}). Tap or click a photo to zoom in and read a short bio.</p>
</div>

<div class="member-level">
<div class="member-level-head">
<div><span class="tag mono">ARCHIVE · {{ $committee->term_label }}</span><h2 class="display">{{ $committee->name }}</h2></div>
<p>The elected officers who ran FEHSU's day-to-day affairs during {{ $committee->term_label }}.</p>
</div>
@include('partials.member-marquee', ['members' => $committee->members, 'duration' => '170s'])
</div>

<div class="committee-archive">
<div class="committee-archive-head">
<span class="tag mono"> COMMITTEE ARCHIVE</span>
<h2 class="display">Browse other committees</h2>
<p>Step through the archive, or head back to the current Central Executive Committee.</p>
</div>
<div class="committee-pair-nav">
@if ($prev)
<a class="committee-arrow-card" href="/committees/{{ $prev->slug }}"><span class="arrow">←</span><div><span class="label">ARCHIVE</span><h4>{{ $prev->name }}</h4></div></a>
@else
<span></span>
@endif
<a class="committee-arrow-card" href="/corporate"><div><span class="label">CURRENT</span><h4>Back to Central Executive Committee</h4></div></a>
@if ($next)
<a class="committee-arrow-card" href="/committees/{{ $next->slug }}"><div><span class="label">ARCHIVE</span><h4>{{ $next->name }}</h4></div><span class="arrow">→</span></a>
@else
<span></span>
@endif
</div>
</div>

</div>
</section>
<section class="cta-band">
<div class="cta-band-inner">
<h2 class="display">Meet the current leadership.</h2>
<a class="btn-dark" href="/corporate">View the Corporate page</a>
</div>
</section>

@include('partials.photo-modal')
@endsection
