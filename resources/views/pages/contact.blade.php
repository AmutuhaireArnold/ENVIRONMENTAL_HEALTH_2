@extends('layouts.app')

@section('title', 'Contact — FEHSU')
@section('description', 'Get in touch with FEHSU — Uganda\'s national occupational health and safety association.')

@push('structured_data')
<script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "ContactPage",
        "url": "{{ url()->current() }}",
        "mainEntity": {
            "@type": "Organization",
            "name": "FEHSU",
            "email": "fehsuganda@gmail.com",
            "telephone": "+256777828818",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+256777828818",
                "contactType": "customer service",
                "email": "fehsuganda@gmail.com",
                "areaServed": "UG",
                "availableLanguage": "English"
            }
        }
    }
</script>
@endpush

@section('content')
<section class="page-hero has-photo">
    <div class="hero-photo" style="background-image:url('/images/5.jpeg')"></div>
    <div class="hero-overlay"></div>
    <div class="wrap">
        <span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>@content('contact.hero.eyebrow', 'GET IN TOUCH')</span>
        <h1 class="display">@content('contact.hero.title', 'Contact us')</h1>
        <p class="sub">@content('contact.hero.subtitle', "Questions about membership, events, or partnering with FEHSU — reach out and we'll respond promptly.")</p>
    </div>
</section>
<section class="sec">
    <div class="wrap">
        <div class="form-grid">
            <div class="contact-cta">
                <div class="icon-badge">✉️</div>
                <h3>@content('contact.form.heading', 'Send us a message')</h3>
                <p>@content('contact.form.body', 'We use a simple Google Form to collect enquiries , it takes less than a minute and reaches our team directly. Tell us about membership, events, partnerships, or anything else on your mind.')</p>
                <a class="cta-btn" href="@content('contact.form.url', 'https://docs.google.com/forms/d/e/1FAIpQLScKQnTTrGLCG2DprQje8NSjxFUcb6styyTLgYD5rFQ4ztcNCQ/viewform?usp=header')" target="_blank" rel="noopener">Open the contact form →</a>
                <p class="form-note">@content('contact.form.note', 'Prefer email or phone? Use the details alongside, we respond just as fast.')</p>
            </div>
            <div>
                <div class="contact-info-list">
                    <div class="item">
                        <h4>Location</h4>
                        <p>@content('contact.info.location', 'School of Public Health, Makerere University, Kampala, Uganda')</p>
                    </div>
                    <div class="item">
                        <h4>Phone</h4>
                        <p><a href="tel:@content('contact.info.phone_link', '+256777828818')">@content('contact.info.phone', '+256 777 828 818')</a></p>
                    </div>
                    <div class="item">
                        <h4>Email</h4>
                        <p><a href="mailto:@content('contact.info.email', 'fehsuganda@gmail.com')">@content('contact.info.email', 'fehsuganda@gmail.com')</a></p>
                    </div>
                    <div class="item">
                        <h4>Member registration</h4>
                        <p><a href="@content('contact.register.url', 'https://docs.google.com/forms/d/e/1FAIpQLScKxVos78HSmTmZiKxrgiQEYihKOeeTUKB9n-se3fgzOFSJmg/viewform?usp=header')">Google Form registration →</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec alt">
    <div class="wrap">
        <div class="sec-head">
            <span class="tag mono">FIND US</span>
            <h2 class="display">Makerere University, Kampala</h2>
            <p>FEHSU is rooted at School of Public Health, Makerere University, home to our founding chapter and much of our student membership.</p>
        </div>
        <div class="map-frame">
            <iframe src="https://www.google.com/maps?q=Makerere+University,+Kampala,+Uganda&output=embed" title="Live map of Makerere University, Kampala, Uganda" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen=""></iframe>
        </div>
        <div class="map-caption">
            <p>School of Public Health, Makerere University, University Road, Kampala, Uganda</p>
            <a href="https://www.google.com/maps/search/?api=1&query=Makerere+University+Kampala+Uganda" target="_blank" rel="noopener">Open in Google Maps →</a>
        </div>
    </div>
</section>
@endsection