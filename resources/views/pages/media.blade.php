@extends('layouts.app')

@section('title', 'Media — FEHSU')
@section('description', 'Photo and video gallery from FEHSU events and activities.')

@section('content')
<section class="page-hero has-photo">
    <div class="hero-photo" style="background-image:url('/images/5.jpeg')"></div>
    <div class="hero-overlay"></div>
    <div class="wrap">
        <span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>RESOURCES</span>
        <h1 class="display">Media</h1>
        <p class="sub">Photos and videos from FEHSU events, workshops, and milestones.</p>
    </div>
</section>
<section class="sec">
    <div class="wrap">
        <div class="sec-head">
            <span class="tag mono">// GALLERY</span>
            <h2 class="display" style="font-size:1.6rem;">Moments from the field</h2>
            <p>A look at FEHSU's training sessions, site visits, conferences, and community engagements across Uganda.</p>
        </div>
        <div class="media-grid">
            @forelse ($images as $img)
            <div class="media-item"><img alt="{{ $img->title ?: 'FEHSU photo' }}" src="{{ str_starts_with($img->file_path, '/') ? $img->file_path : asset('storage/' . $img->file_path) }}" /><span class="cap">{{ $img->title ?: 'FEHSU members' }}</span></div>
            @empty
            <p>No photos in the gallery yet — check back soon.</p>
            @endforelse
        </div>
    </div>
</section>
<section class="sec alt">
    <div class="wrap">
        <div class="sec-head">
            <span class="tag mono"> VIDEOS</span>
            <h2 class="display" style="font-size:1.6rem;">Watch highlights</h2>
            <p>Tap any thumbnail to play. <strong>Sample placeholder videos shown</strong> — swap these for FEHSU's own event footage once it's recorded.</p>
        </div>
        <div class="video-grid">
            @forelse ($videos as $video)
            <div>
                <div class="video-embed" data-yt="{{ $video->youtube_id }}" data-title="{{ $video->title }}">
                    <img class="video-thumb" alt="{{ $video->title }}" src="https://img.youtube.com/vi/{{ $video->youtube_id }}/hqdefault.jpg">
                    <button type="button" class="video-play" aria-label="Play video"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z" />
                        </svg></button>
                </div>
                <p class="video-cap">{{ $video->title }}</p>
            </div>
            @empty
            <p>No videos yet — check back soon.</p>
            @endforelse
        </div>
    </div>
</section>
<section class="cta-band">
    <div class="cta-band-inner">
        <h2 class="display">Have footage or photos from a FEHSU event?</h2>
        <p>Send us your event photos and videos to be featured in the gallery.</p>
        <a class="btn-dark" href="/contact">Share with us</a>
    </div>
</section>
@endsection