@extends('layouts.app')

@section('title', 'News — FEHSU')
@section('description', 'News and updates from FEHSU, Uganda\'s national occupational health and safety association.')

@push('structured_data')
@php
$ld = [
'@context' => 'https://schema.org',
'@type' => 'CollectionPage',
'name' => 'FEHSU News',
'url' => url()->current(),
'mainEntity' => [
'@type' => 'ItemList',
'itemListElement' => $posts->values()->map(fn ($post, $i) => [
'@type' => 'ListItem',
'position' => $i + 1,
'name' => $post->title,
])->all(),
],
];
@endphp
<script type="application/ld+json">
    {
        !!json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!
    }
</script>
@endpush

@section('content')
<section class="page-hero has-photo">
    <div class="hero-photo" style="background-image:url('/images/5.jpeg')"></div>
    <div class="hero-overlay"></div>
    <div class="wrap">
        <span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>RESOURCES</span>
        <h1 class="display">News</h1>
        <p class="sub">The latest from FEHSU and the occupational health and safety profession in Uganda.</p>
    </div>
</section>
<section class="sec">
    <div class="wrap">
        <div class="filter-tabs condensed">
            <a class="active" href="#">All</a>
            <a href="#">Association</a>
            <a href="#">Industry</a>
            <a href="#">Membership</a>
        </div>
        <div class="card-grid">
            @forelse ($posts as $post)
            <div class="info-card">
                <div class="tagrow"><span class="cat mono">NEWS</span><span class="date mono">{{ $post->published_at ? strtoupper($post->published_at->format('j M Y')) : '' }}</span></div>
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->excerpt }}</p>
                <span class="readmore condensed">Read more →</span>
            </div>
            @empty
            <p>No news items yet — check back soon.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection