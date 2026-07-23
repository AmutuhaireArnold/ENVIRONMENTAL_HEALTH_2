@extends('layouts.app')

@section('title', 'Articles and journals — FEHSU')
@section('description', 'Occupational health and safety articles and journals published by FEHSU.')

@section('content')
<section class="page-hero has-photo">
    <div class="hero-photo" style="background-image:url('/images/24.jpg')"></div>
    <div class="hero-overlay"></div>
    <div class="wrap">
        <span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>RESOURCES</span>
        <h1 class="display">Articles and journals</h1>
        <p class="sub">Evidence-based reading from FEHSU'S Body of Knowledge and partner publications.</p>
    </div>
</section>
<section class="sec">
    <div class="wrap">
        <div class="card-grid">
            @forelse ($posts as $post)
            <div class="info-card">
                <div class="tagrow"><span class="cat mono">ARTICLE</span></div>
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->excerpt }}</p>
                <span class="readmore condensed">Read more →</span>
            </div>
            @empty
            <p>No articles published yet — check back soon.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection