@extends('layouts.app')

@section('title', 'Events — FEHSU')
@section('description', 'Conferences, workshops, and networking evenings hosted by FEHSU for Uganda\'s health and safety profession.')

@section('content')
<section class="page-hero has-photo">
    <div class="hero-photo" style="background-image:url('/images/5.jpeg')"></div>
    <div class="hero-overlay"></div>
    <div class="wrap">
        <span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>EVENTS</span>
        <h1 class="display">Events</h1>
        <p class="sub">Conferences, workshops, and networking evenings that bring Uganda's health and safety community together.</p>
    </div>
</section>
<section class="sec">
    <div class="wrap">
        <div class="sec-head">
            <span class="tag mono">THE EXPERIENCE</span>
            <h2 class="display">What a FEHSU event feels like</h2>
            <p>From studio broadcasts to campus conferences, every FEHSU gathering is built around one goal — putting practitioners, students, and experts in the same room.</p>
        </div>
        <div class="card-grid">
            <div class="info-card">
                <div class="avatar mono">01</div>
                <h3>Learn from experts</h3>
                <p>Guest speakers and health inspectors unpack real issues — from WASH compliance to climate change and workplace safety.</p>
            </div>
            <div class="info-card">
                <div class="avatar mono">02</div>
                <h3>Connect with peers</h3>
                <p>Meet fellow students and professionals from universities and industries across Uganda at every gathering.</p>
            </div>
            <div class="info-card">
                <div class="avatar mono">03</div>
                <h3>Grow your voice</h3>
                <p>From FEHSU Voices radio episodes to campus forums, members get platforms to be heard on environmental health issues.</p>
            </div>
        </div>
    </div>
</section>
<section class="sec alt">
    <div class="wrap">
        <div class="sec-head">
            <span class="tag mono">EVENT HIGHLIGHTS</span>
            <h2 class="display">Moments from recent gatherings</h2>
        </div>
        <div class="media-grid" style="grid-template-columns:repeat(3,1fr);">
            <div class="media-item"><img alt="FEHSU Voices radio show recording" src="/images/3.jpeg" /><span class="cap">FEHSU Voices — on air</span></div>
            <div class="media-item"><img alt="Members at a campus event" src="/images/5.jpeg" /><span class="cap">Campus networking</span></div>
            <div class="media-item"><img alt="FEHSU members handshake" src="/images/8.jpeg" /><span class="cap">Building partnerships</span></div>
            <div class="media-item"><img alt="FEHSU Voices radio show recording" src="/images/11.jpg" /><span class="cap">FEHSU Voices — on air</span></div>
            <div class="media-item"><img alt="Members at a campus event" src="/images/12.jpg" /><span class="cap">Campus networking</span></div>
            <div class="media-item"><img alt="FEHSU members handshake" src="/images/13.jpg" /><span class="cap">Building partnerships</span></div>
            <div class="media-item"><img alt="FEHSU Voices radio show recording" src="/images/14.jpg" /><span class="cap">FEHSU Voices — on air</span></div>
            <div class="media-item"><img alt="Members at a campus event" src="/images/15.jpg" /><span class="cap">Campus networking</span></div>
            <div class="media-item"><img alt="FEHSU members handshake" src="/images/16.jpg" /><span class="cap">Building partnerships</span></div>
            <div class="media-item"><img alt="FEHSU Voices radio show recording" src="/images/17.jpg" /><span class="cap">FEHSU Voices — on air</span></div>
            <div class="media-item"><img alt="Members at a campus event" src="/images/06.jpg" /><span class="cap">Campus networking</span></div>
            <div class="media-item"><img alt="FEHSU members handshake" src="/images/19.jpg" /><span class="cap">Building partnerships</span></div>
            <div class="media-item"><img alt="FEHSU Voices radio show recording" src="/images/01.jpg" /><span class="cap">FEHSU Voices — on air</span></div>
            <div class="media-item"><img alt="Members at a campus event" src="/images/05.jpg" /><span class="cap">Campus networking</span></div>
            <div class="media-item"><img alt="FEHSU members handshake" src="/images/08.jpg" /><span class="cap">Building partnerships</span></div>
        </div>
    </div>
</section>
@if ($allEvents->isNotEmpty())
<section class="sec">
    <div class="wrap">
        <div class="sec-head">
            <span class="tag mono">FROM THE CALENDAR</span>
            <h2 class="display">FEHSU events</h2>
        </div>
        <div class="card-grid">
            @foreach ($allEvents as $event)
            <div class="info-card">
                <div class="tagrow"><span class="cat mono">{{ strtoupper(str_replace('_', ' ', $event->type)) }}</span><span class="date mono">{{ $event->starts_at ? strtoupper($event->starts_at->format('j M Y')) : '' }}</span></div>
                <h3>{{ $event->title }}</h3>
                <p>{{ $event->description }}</p>
                @if ($event->location)<span class="readmore condensed">{{ $event->location }} →</span>@endif
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<section class="cta-band">
    <div class="cta-band-inner">
        <h2 class="display">Want to know what's next?</h2>
        <p style="margin-bottom:28px;">Check the calendar for upcoming dates, or reach out and we'll keep you posted on new events as they're announced.</p>
        <div style="display:flex; gap:14px; flex-wrap:wrap; justify-content:center;">
            <a class="btn-dark" href="/upcoming-events">View upcoming events</a>
            <a class="btn-outline" style="color:#fff; border-color:rgba(255,255,255,.4);" href="/contact">Get in touch</a>
        </div>
    </div>
</section>
@endsection