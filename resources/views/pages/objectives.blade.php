@extends('layouts.app')

@section('title', 'Objectives — FEHSU')
@section('description', 'FEHSU\'s nine core objectives for the occupational health and safety profession in Uganda.')

@section('content')
<section class="page-hero has-photo">
    <div class="hero-photo" style="background-image:url('/images/14.jpg')"></div>
    <div class="hero-overlay"></div>
    <div class="wrap">
        <span class="eyebrow mono" style="margin-bottom:8px;"><span class="dot"></span>@content('objectives.hero.eyebrow', "ABOUT · WHAT WE'RE HERE TO DO")</span>
        <h1 class="display">@content('objectives.hero.title', 'Our objectives')</h1>
        <p class="sub">@content('objectives.hero.subtitle', "Nine commitments that guide FEHSU's work on behalf of the health and safety profession.")</p>
    </div>
</section>
<section class="sec">
    <div class="wrap" style="max-width:820px;">
        <div class="numbered-list">
            <div class="numbered-item"><span class="n mono">01</span>
                <p>@content('objectives.item1', 'To Merge the interests of all Environmental Health students, practitioners and stakeholders, nationally and internationally')</p>
            </div>
            <div class="numbered-item"><span class="n mono">02</span>
                <p>@content('objectives.item2', 'To Sensitise the public on Environmental Health issues through seminars, debates and any other feasible ways')</p>
            </div>
            <div class="numbered-item"><span class="n mono">03</span>
                <p>@content('objectives.item3', 'To Emphasize the famous theme "Prevention is better than cure", hereby highlighting the fact that Environmental Health plays a key role in health, education and socioeconomic development of any community.')</p>
            </div>
            <div class="numbered-item"><span class="n mono">04</span>
                <p>@content('objectives.item4', 'To Act as channel through which suggestions and queries or complaints of Environmental Health Students and Environmental Health Science are communicated to the responsible authorities or bodies.')</p>
            </div>
            <div class="numbered-item"><span class="n mono">05</span>
                <p>@content('objectives.item5', 'To promote dignity and uphold Health Professional Ethics.')</p>
            </div>
            <div class="numbered-item"><span class="n mono">06</span>
                <p>@content('objectives.item6', 'To carry out projects and doing research on Environmental Health related issues')</p>
            </div>
        </div>
    </div>
</section>
@endsection