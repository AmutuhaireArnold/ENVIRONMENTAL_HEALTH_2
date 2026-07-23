@extends('layouts.app')

@section('title', 'Upcoming events — FEHSU')
@section('description', 'FEHSU\'s calendar of upcoming conferences, workshops, and networking events.')

@section('content')
<section class="page-hero has-photo">
    <div class="hero-photo" style="background-image:url('/images/5.jpeg')"></div>
    <div class="hero-overlay"></div>
    <div class="wrap">
        <span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>EVENTS</span>
        <h1 class="display">Upcoming events</h1>
        <p class="sub">Conferences, workshops, and networking sessions on the FEHSU calendar.</p>
    </div>
</section>
<section class="sec">
    <div class="wrap">
        <div class="card-grid">
            @forelse ($events as $event)
            <div class="info-card">
                <div class="tagrow"><span class="cat mono">EVENT</span><span class="date mono">{{ $event->starts_at ? strtoupper($event->starts_at->format('j M Y')) : '' }}</span></div>
                <h3>{{ $event->title }}</h3>
                <p>{{ $event->description }}</p>
                <span class="readmore condensed">{{ $event->location }} →</span>
            </div>
            @empty
            <p>No upcoming events on the calendar yet — check back soon.</p>
            @endforelse
        </div>
    </div>
</section>
<section class="cta-band">
    <div class="cta-band-inner">
        <h2 class="display">Reserve your seat at the next event.</h2>
        <a class="btn-dark" href="https://docs.google.com/forms/d/e/1FAIpQLSdkhaoqZIAssUbD_0fJ8dpNxYV09gVjO0gn3q6w-SiP5-FjUg/viewform?usp=publish-editor">Register now</a>
    </div>
</section>
@endsection