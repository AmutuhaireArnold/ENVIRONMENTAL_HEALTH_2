@extends('layouts.app')

@section('title', $organization->name . ' — National Executive Committee — FEHSU')
@section('description', 'Meet the National Executive Committee currently running ' . $organization->name . '.')

@push('structured_data')
@php
    $breadcrumbLd = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Associations', 'item' => url('/associations')],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $organization->name, 'item' => url()->current()],
        ],
    ];
@endphp
<script type="application/ld+json">{!! json_encode($breadcrumbLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
@endpush

@section('content')
@php($hero = $organization->hero_image ? (str_starts_with($organization->hero_image, '/') ? $organization->hero_image : '/storage/' . $organization->hero_image) : '/images/5.jpeg')
<section class="page-hero has-photo">
    <div class="hero-photo" style="background-image:url('{{ $hero }}')"></div>
    <div class="hero-overlay"></div>
    <div class="wrap">
        <span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>Member Association · NATIONAL EXECUTIVE COMMITTEE</span>
        <h1 class="display">{{ $organization->name }}</h1>
        <p class="sub">{{ $organization->description ?: 'Meet the National Executive Committee currently running ' . $organization->name . '. Tap any photo to view their profile.' }}</p>
    </div>
</section>
<section class="sec">
    <div class="wrap">

        <div class="callout" style="margin-bottom:40px;">
            <span class="icon">i</span>
            <p>Tap or click a photo to zoom in and read a short bio. Back to the full list of <a href="/corporate#sister-orgs">Member Associations</a>.</p>
        </div>

        <div class="member-level">
            <div class="member-level-head">
                <div><span class="tag mono"> CURRENT TERM</span>
                    <h2 class="display">National Executive Committee</h2>
                </div>
                <p>The elected officers currently running {{ $organization->name }}'s day-to-day affairs.</p>
            </div>
            @include('partials.member-marquee', ['members' => $organization->members, 'duration' => '150s'])
        </div>

    </div>
</section>
<section class="cta-band">
    <div class="cta-band-inner">
        <h2 class="display">Bring your organization into the fold.</h2>
        <a class="btn-dark" href="/member-options">Become a corporate member</a>
    </div>
</section>

@include('partials.photo-modal')
@endsection