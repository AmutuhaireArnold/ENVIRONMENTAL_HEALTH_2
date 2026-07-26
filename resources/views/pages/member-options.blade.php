@extends('layouts.app')

@section('title', 'Membership options FEHSU')
@section('description', 'FEHSU membership tiers: Full Membership, Associate Membership, and Honorary Membership, with registration and annual fees.')

@section('content')
<section class="page-hero has-photo">
    <div class="hero-photo" style="background-image:url('/images/11.jpg')"></div>
    <div class="hero-overlay"></div>
    <div class="wrap">
        <span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>@content('options.hero.eyebrow', 'MEMBERSHIP · JOIN US')</span>
        <h1 class="display">@content('options.hero.title', 'Membership options')</h1>
        <p class="sub">@content('options.hero.subtitle', "If you're new to FEHSU, start your registration by choosing an option below.")</p>
    </div>
</section>
<section class="sec">
    <div class="wrap">
        <div class="pricing-grid">
            <div class="price-card">
                <h3>@content('options.tier1.title', 'Full Member')</h3>
                <p class="price-line">Registration Fee <b>@content('options.tier1.fee', 'UGX 20,000')</b></p>
                <div class="feature-rows">
                    <div class="frow"><span>@content('options.tier1.feature1', 'Any Environmental Health student from any institution')</span><span class="fcheck">✓</span></div>
                    <div class="frow"><span>@content('options.tier1.feature2', 'Institutions that have well established leadership structure such as associations')</span><span class="fcheck">✓</span></div>
                </div>
                <a class="cta-btn" href="@content('options.join.url', 'https://docs.google.com/forms/d/e/1FAIpQLScKxVos78HSmTmZiKxrgiQEYihKOeeTUKB9n-se3fgzOFSJmg/viewform?usp=header')">Join Now</a>
            </div>
            <div class="price-card featured">
                <h3>@content('options.tier2.title', 'Associate Member')</h3>
                <p class="price-line">Registration Fee <b>@content('options.tier2.fee', 'UGX 50,000')</b></p>
                <div class="feature-rows">
                    <div class="frow"><span>@content('options.tier2.feature1', 'Members who were once full members but are currently practicing in the field of Environmental Health')</span><span class="fcheck">✓</span></div>
                    <div class="frow"><span>@content('options.tier2.feature2', 'Those who are interested in Environmental Health issues, whom the Executive committee of any association may judge to have interest in the association at heart')</span><span class="fcheck">✓</span></div>
                </div>
                <a class="cta-btn" href="@content('options.join.url', 'https://docs.google.com/forms/d/e/1FAIpQLScKxVos78HSmTmZiKxrgiQEYihKOeeTUKB9n-se3fgzOFSJmg/viewform?usp=header')" target="_blank" rel="noopener">Join Now</a>
            </div>
            <div class="price-card">
                <h3>@content('options.tier3.title', 'Honorary Member')</h3>
                <p class="price-line">Registration Fee <b>@content('options.tier3.fee', 'UGX 100,000')</b></p>
                <div class="feature-rows">
                    <div class="frow"><span>@content('options.tier3.feature1', 'The association on recommendation by executive committee shall make the appointment.')</span><span class="fcheck">✓</span></div>
                    <div class="frow"><span>@content('options.tier3.feature2', 'Individuals who have particularly important services to the association shall be conferred upon the title "honorary member"')</span><span class="fcheck">✓</span></div>
                </div>
                <a class="cta-btn" href="@content('options.join.url', 'https://docs.google.com/forms/d/e/1FAIpQLScKxVos78HSmTmZiKxrgiQEYihKOeeTUKB9n-se3fgzOFSJmg/viewform?usp=header')">Join Now</a>
            </div>

        </div>
    </div>
</section>
@endsection