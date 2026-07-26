@extends('layouts.app')

@section('title', 'Standard — FEHSU')
@section('description', 'The code of ethics and professional standards FEHSU holds its members to.')

@section('content')
<section class="page-hero has-photo">
    <div class="hero-photo" style="background-image:url('/images/5.jpeg')"></div>
    <div class="hero-overlay"></div>
    <div class="wrap">
        <span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>RESOURCES</span>
        <h1 class="display">Standard</h1>
        <p class="sub">The frameworks and codes FEHSU holds its members and the profession to.</p>
    </div>
</section>
<section class="sec">
    <div class="wrap" style="max-width:820px;">
        <div class="numbered-list">
            <div class="numbered-item"><span class="n mono">01</span>
                <p><strong>Code of Ethics.</strong> A Code of Ethics and Standards of Professional Conduct maintained and enforced for all members.</p>
            </div>
            <div class="numbered-item"><span class="n mono">02</span>
                <p><strong>FEHSU Occupational Health and Safety Body of Knowledge.</strong> The evidence base FEHSU maintains and shares with the profession.</p>
            </div>
            <div class="numbered-item"><span class="n mono">03</span>
                <p><strong>International alignment.</strong> Practices are shaped to meet national and international occupational health and safety standards.</p>
            </div>
        </div>
    </div>
</section>
@if ($documents->isNotEmpty())
<section class="sec alt">
    <div class="wrap">
        <div class="sec-head">
            <span class="tag mono">DOWNLOADS</span>
            <h2 class="display">Standard documents</h2>
        </div>
        <div class="card-grid">
            @foreach ($documents as $doc)
            <div class="info-card">
                <div class="tagrow"><span class="cat mono">STANDARD</span><span class="date mono">{{ $doc->published_at ? strtoupper($doc->published_at->format('j M Y')) : '' }}</span></div>
                <h3>{{ $doc->title }}</h3>
                <a class="readmore condensed" href="{{ str_starts_with($doc->file_path, '/') ? $doc->file_path : asset('storage/' . $doc->file_path) }}" target="_blank" rel="noopener">Download PDF →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection