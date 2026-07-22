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
<div class="latest-item">
<span class="badge news">News</span>
<h3>FEHSU Announces 2026 Annual Conference</h3>
<p class="date">March 15, 2026</p>
<p>Join us for the biggest environmental health and safety conference of the year.</p>
<a href="/news">Read more →</a>
</div>
<div class="latest-item">
<span class="badge press">Press Release</span>
<h3>New Safety Standards for Construction</h3>
<p class="date">March 10, 2026</p>
<p>FEHSU releases updated safety guidelines for the construction sector.</p>
<a href="/press-release">Read more →</a>
</div>
<div class="latest-item">
<span class="badge article">Article</span>
<h3>Future of Occupational Health in Uganda</h3>
<p class="date">March 5, 2026</p>
<p>Exploring emerging trends and opportunities in the occupational health profession.</p>
<a href="/articles-journals">Read more →</a>
</div>
<div class="latest-item">
<span class="badge standard">Standard</span>
<h3>Updated Environmental Health Guidelines</h3>
<p class="date">February 28, 2026</p>
<p>Revised standards incorporating the latest research and best practices.</p>
<a href="/standard">Read more →</a>
</div>
</div>
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
