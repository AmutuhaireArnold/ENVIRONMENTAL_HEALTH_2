@extends('layouts.app')

@section('title', 'Press release — FEHSU')
@section('description', 'Official press releases and statements from FEHSU.')

@section('content')
<section class="page-hero has-photo">
    <div class="hero-photo" style="background-image:url('/images/5.jpeg')"></div>
    <div class="hero-overlay"></div>
    <div class="wrap">
        <span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>RESOURCES</span>
        <h1 class="display">Press release</h1>
        <p class="sub">Official statements and announcements from FEHSU.</p>
    </div>
</section>
<section class="sec">
    <div class="wrap">
        <div class="card-grid">
            @foreach ($posts as $post)
            <div class="info-card">
                <div class="tagrow"><span class="cat mono">PRESS RELEASE</span><span class="date mono">{{ $post->published_at ? strtoupper($post->published_at->format('j M Y')) : '' }}</span></div>
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->excerpt }}</p>
            </div>
            @endforeach
            @forelse ($documents as $doc)
            <div class="info-card">
                <div class="tagrow"><span class="cat mono">PRESS RELEASE</span><span class="date mono">{{ $doc->published_at ? strtoupper($doc->published_at->format('j M Y')) : '' }}</span></div>
                <h3>{{ $doc->title }}</h3>
                <p>Official statement from FEHSU's Executive Committee.</p>
                <a class="readmore condensed" href="{{ str_starts_with($doc->file_path, '/') ? $doc->file_path : asset('storage/' . $doc->file_path) }}" target="_blank" rel="noopener">Download PDF →</a>
            </div>
            @empty
            @if ($posts->isEmpty())
            <p>No press releases published yet — check back soon.</p>
            @endif
            @endforelse
        </div>
    </div>
</section>
@endsection