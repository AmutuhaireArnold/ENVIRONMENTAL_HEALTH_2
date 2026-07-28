@extends('layouts.app')

@section('title', 'Resources — FEHSU')
@section('description', 'FEHSU resources including news, press releases, articles, journals, and standards for environmental health and safety.')

@section('content')
<section class="page-hero has-photo">
    <div class="hero-photo" style="background-image:url('/images/11.jpg')"></div>
    <div class="hero-overlay"></div>
    <div class="wrap">
        <span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>GET IN TOUCH</span>
        <h2>Knowledge &amp; <span>Information</span> Hub</h2>
        <p class="sub">Access the latest news, press releases, research articles, journals, and industry standards for environmental health and safety in Uganda.</p>
    </div>

</section>
<section class="sec" id="resources">
    <div class="wrap">
        <div class="sec-head">
            <span class="tag mono">01 — RESOURCE CATEGORIES</span>
            <h2 class="display" style="font-size:1.8rem;">What you'll find here</h2>
            <p style="max-width:650px; margin-top:8px; color:#666; font-size:0.95rem;">Stay updated with the latest developments, research, and standards in occupational health and safety.</p>
        </div>
        <div class="resources-grid">
            <div class="resource-card">
                <div class="resource-icon">📰</div>
                <h3>News</h3>
                <p>Latest updates, announcements, and developments from FEHSU and the environmental health sector.</p>
                <a class="resource-link" href="/news">Browse News →</a>
            </div>
            <div class="resource-card">
                <div class="resource-icon">📢</div>
                <h3>Press Releases</h3>
                <p>Official statements, announcements, and media communications from FEHSU on important matters.</p>
                <a class="resource-link" href="/press-release">View Press Releases →</a>
            </div>
            <div class="resource-card">
                <div class="resource-icon">📄</div>
                <h3>Articles &amp; Journals</h3>
                <p>Peer-reviewed articles, research papers, and journals covering occupational health and safety topics.</p>
                <a class="resource-link" href="/articles-journals">Read Articles →</a>
            </div>
            <div class="resource-card">
                <div class="resource-icon">📊</div>
                <h3>Standards</h3>
                <p>Comprehensive guidelines, standards, and best practices for health and safety in various industries.</p>
                <a class="resource-link" href="/standard">View Standards →</a>
            </div>
            <div class="resource-card">
                <div class="resource-icon">🎬</div>
                <h3>Media</h3>
                <p>Videos, podcasts, infographics, and other multimedia resources on environmental health and safety.</p>
                <a class="resource-link" href="/media">Explore Media →</a>
            </div>
            <div class="resource-card featured">
                <div class="resource-icon">📚</div>
                <h3>Knowledge Base</h3>
                <p>Comprehensive guides, FAQs, and educational materials for professionals and students in environmental health.</p>
                <a class="resource-link" href="/articles-journals">Explore Knowledge →</a>
            </div>
        </div>
    </div>
</section>
<section class="sec alt" id="latest">
    <div class="wrap">
        <div class="sec-head">
            <span class="tag mono"> 02 — LATEST RESOURCES</span>
            <h2 class="display" style="font-size:1.8rem;">Recent updates</h2>
        </div>
        <div class="latest-grid">
            @php($resBadges = ['news' => ['news', 'News', '/news'], 'press_release' => ['press', 'Press Release', '/press-release'], 'article' => ['article', 'Article', '/articles-journals']])
            @forelse ($latestPosts as $post)
            <div class="latest-item">
                <span class="badge {{ $resBadges[$post->type][0] }}">{{ $resBadges[$post->type][1] }}</span>
                <h3>{{ $post->title }}</h3>
                <p class="date">{{ $post->published_at?->format('F j, Y') }}</p>
                <p>{{ $post->excerpt }}</p>
                <a href="{{ $resBadges[$post->type][2] }}">Read more →</a>
            </div>
            @empty
            <p>No updates published yet — check back soon.</p>
            @endforelse
        </div>
        @if ($documents->isNotEmpty())
        <div class="card-grid" style="margin-top:34px;">
            @foreach ($documents as $doc)
            <div class="info-card">
                <div class="tagrow"><span class="cat mono">RESOURCE</span><span class="date mono">{{ $doc->published_at ? strtoupper($doc->published_at->format('j M Y')) : '' }}</span></div>
                <h3>{{ $doc->title }}</h3>
                <a class="readmore condensed" href="{{ str_starts_with($doc->file_path, '/') ? $doc->file_path : asset('storage/' . $doc->file_path) }}" target="_blank" rel="noopener">Download PDF →</a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
<section class="quick-access">
    <div class="wrap">
        <div class="quick-access-grid no-photo">
            <div class="quick-item">
                <div class="quick-icon">📰</div>
                <h3>News</h3>
                <p>Latest updates</p>
                <a class="btn-outline" href="/news">Visit</a>
            </div>
            <div class="quick-item">
                <div class="quick-icon">📢</div>
                <h3>Press</h3>
                <p>Official statements</p>
                <a class="btn-outline" href="/press-release">View</a>
            </div>
            <div class="quick-item">
                <div class="quick-icon">📄</div>
                <h3>Articles</h3>
                <p>Research &amp; journals</p>
                <a class="btn-outline" href="/articles-journals">Read</a>
            </div>
            <div class="quick-item">
                <div class="quick-icon">📊</div>
                <h3>Standards</h3>
                <p>Guidelines &amp; best practices</p>
                <a class="btn-outline" href="/standard">View</a>
            </div>
        </div>
    </div>
</section>
<section class="sec" id="stats" style="padding: 30px 32px;">
    <div class="wrap">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">20+</div>
                <div class="stat-label">News Articles</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">20+</div>
                <div class="stat-label">Press Releases</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">20+</div>
                <div class="stat-label">Research Articles</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">20+</div>
                <div class="stat-label">Industry Standards</div>
            </div>
        </div>
    </div>
</section>
<section class="cta-band" id="membership">
    <div class="cta-band-inner">
        <h2 class="display" style="font-size:1.6rem;">Stay informed with the latest resources.</h2>
        <p style="color:white; font-size:0.95rem; max-width:500px; margin: 6px auto 16px;">Subscribe to our newsletter and never miss an update.</p>
        <a class="btn-dark" href="/contact">Subscribe Now</a>
    </div>
</section>
@endsection