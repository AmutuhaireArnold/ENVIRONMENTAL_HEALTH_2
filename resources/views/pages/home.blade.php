@extends('layouts.app')

@section('title', 'Home — FEHSU')
@section('description', 'FEHSU is the national association for the occupational health and safety profession in Uganda.')

@section('content')
<section class="hero" id="home">
    <div class="hero-photo-band">
        <div class="slideshow-container">
            <div class="slide" data-caption="Photo moment With FEHSU President in the middle at School of Public Health Makerere University."><img alt="FEHSU members at a workplace safety training session" src="/images/11.jpg" /></div>
            <div class="slide" data-caption="On site with our members for MPC Community Outreach Cleanup Campaign."><img alt="FEHSU field visit to an industrial site" src="/images/17.jpg" /></div>
            <div class="slide" data-caption="FESHU members led by FEHSU President Launching FEHSU E-Waste Club."><img alt="FEHSU conference session" src="/images/24.jpg" /></div>
            <div class="slide" data-caption="FEHSU President at extreme left with FEHSU members."><img alt="FEHSU members networking" src="/images/27.jpg" style="width:100%; height:100%; object-fit:cover; object-position:center 10%; transform:none;" /></div>
            <div class="slide" data-caption="Members of FEHSU having a group Photo with the 92nd Guild President Makerere University."><img alt="FEHSU safety inspection activity" src="/images/5.jpeg" style="width:100%; height:100%; object-fit:cover; object-position:center 30%; transform:none;" /></div>
            <div class="slide" data-caption="FEHSU Projects Minister signs on the FEHSU E- Waste Club commitment Board."><img alt="FEHSU group photo" src="/images/01.jpg" /></div>
            <div class="slide" data-caption="Photo moment With FEHSU President in the at School of Public Health Makerere University."><img alt="FEHSU community outreach" src="/images/11.jpg" /></div>
        </div>
        <button type="button" class="hero-slide-nav prev" data-dir="-1" aria-label="Previous photo">‹</button>
        <button type="button" class="hero-slide-nav next" data-dir="1" aria-label="Next photo">›</button>
        <div class="overlay"></div>
        <div class="hero-card">
            <div class="hero-card-text" id="heroCardText">
                <p class="hero-caption-text" id="heroPhotoCaption"><span class="cap-text"></span></p>
                <div class="hero-ctas">
                    <a class="cta-btn" href="/member-options">Become a Member</a>
                    <a class="btn-outline" href="/history">Our Mission</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-stats-bar">
        <div class="wrap">
            <div class="hero-stats">
                <div>
                    <div class="num mono">2022</div>
                    <div class="lbl condensed">Founded by 11 EH Professionals</div>
                </div>
                <div>
                    <div class="num mono">11+</div>
                    <div class="lbl condensed">EH Associations represented</div>
                </div>
                <div>
                    <div class="num mono">5</div>
                    <div class="lbl condensed">Membership tiers open</div>
                </div>
                <div>
                    <div class="num mono">01</div>
                    <div class="lbl condensed">National federation</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-search-wrap">
    <div class="wrap">
        <div class="home-search-shell reveal-left">
            <div class="home-search-copy">
                <span class="tag mono">DISCOVER</span>
                <h2 class="display">Search the homepage</h2>
                <p>Jump quickly to membership, events, leadership, updates, and partner moments.</p>
            </div>
            <form class="home-search-form" id="homeSearchForm">
                <label class="sr-only" for="homeSearch">Search website</label>
                <input id="homeSearch" type="search" placeholder="Search the website: membership, events, resources, leadership..." aria-label="Search the website">
                <button type="submit" class="cta-btn">Search</button>
            </form>
            <div class="home-search-results" id="homeSearchResults" aria-live="polite"></div>
        </div>
    </div>
</section>

<!-- <section class="home-search-wrap">
    <div class="wrap">
        <div class="home-search-shell reveal-left">
            <div class="home-search-copy">
                <span class="tag mono">DISCOVER</span>
                <h2 class="display">Search the homepage</h2>
                <p>Jump quickly to membership, events, leadership, updates, and partner moments.</p>
            </div>
            <form class="home-search-form" id="homeSearchForm">
                <label class="sr-only" for="homeSearch">Search website</label>
                <input id="homeSearch" type="search" placeholder="Search the website: membership, events, resources, leadership..." aria-label="Search the website">
                <button type="submit" class="cta-btn">Search</button>
            </form>
            <div class="home-search-results" id="homeSearchResults" aria-live="polite"></div>
        </div>
    </div>
</section> 
-->

<section class="quick-access on-home">
    <div class="wrap">
        <div class="quick-access-grid">

            <a class="quick-item reveal-left search-card" data-search="membership join now five tiers one federation" href="/member-options">
                <div class="quick-photo">
                    <img class="qslide show" src="/images/07.jpg" alt="">
                    <img class="qslide" src="/images/09.jpg" alt="">
                </div>
                <div class="quick-body">
                    <h3>Membership</h3>
                    <p>Five tiers, one federation</p>
                    <span class="btn-outline">Join now</span>
                </div>
            </a>

            <a class="quick-item reveal-left search-card" data-search="events conferences workshops see events upcoming" href="/upcoming-events" style="transition-delay:.08s">
                <div class="quick-photo">
                    <img class="qslide show" src="/images/23.jpg" alt="">
                    <img class="qslide" src="/images/24.jpg" alt="">
                </div>
                <div class="quick-body">
                    <h3>Events</h3>
                    <p>Conferences &amp; workshops</p>
                    <span class="btn-outline">See events</span>
                </div>
            </a>

            <a class="quick-item reveal-left search-card" data-search="resources standards news articles explore" href="/resources" style="transition-delay:.16s">
                <div class="quick-photo">
                    <img class="qslide show" src="/images/12.jpg" alt="">
                    <img class="qslide" src="/images/15.jpg" alt="">
                </div>
                <div class="quick-body">
                    <h3>Resources</h3>
                    <p>Standards, news &amp; articles</p>
                    <span class="btn-outline">Explore</span>
                </div>
            </a>

            <a class="quick-item reveal-left search-card" data-search="directory corporate committee members view directory" href="/corporate" style="transition-delay:.24s">
                <div class="quick-photo">
                    <img class="qslide show" src="/images/01.jpg" alt="">
                    <img class="qslide" src="/images/27.jpg" alt="">
                </div>
                <div class="quick-body">
                    <h3>Directory</h3>
                    <p>Corporate &amp; committee members</p>
                    <span class="btn-outline">View directory</span>
                </div>
            </a>

        </div>
    </div>
</section>

<section class="sec" id="mission">
    <div class="wrap">
        <div class="sec-head">
            <span class="tag mono"> 01 — MISSION, MOTO &amp; VISION</span>
            <h2 class="display">OUR MOTO</h2>
            <p>Promoting Preventive Health.</p>
        </div>
        <div class="mv-grid">
            <div class="mv-card">
                <span class="idx mono">Vision</span>
            
                <p>Healthy Environment,Healthy Communities,Empowered Professionals</p>
            </div>
            <div class="mv-card">
                <span class="idx mono">Mission</span>
               
                <p>A leading force in environmental health, insipring a movement of knowledgeable and proactive students who drive change and foster a sustaianble futre for Uganda.</p>
            </div>
        </div>
    </div>
</section>

<section class="sec alt" id="values">
    <div class="wrap">
        <div class="sec-head">
            <span class="tag mono">02 — CORE VALUES</span>
            <h2 class="display">What guides our work</h2>
        </div>
        <div class="values-grid">
            <div class="value-card search-card" data-search="integrity performance responsibility">
                <div class="vphoto"><img alt="FEHSU members conducting a safety inspection" src="/images/13.jpg"></div>
                <div class="vbody"><span class="vn mono">V.01</span>
                    <h3>Integrity</h3>
                    <p>A culture of performance and responsibility in everything we do.</p>
                </div>
            </div>
            <div class="value-card search-card" data-search="legacy safety culture lasts">
                <div class="vphoto"><img alt="FEHSU members at a legacy building event" src="/images/29.jpg"></div>
                <div class="vbody"><span class="vn mono">V.02</span>
                    <h3>Legacy</h3>
                    <p>Actively promoting and creating a safety culture that lasts.</p>
                </div>
            </div>
            <div class="value-card search-card" data-search="diversity perspectives across industries">
                <div class="vphoto"><img alt="Diverse group of FEHSU members" src="/images/27.jpg"></div>
                <div class="vbody"><span class="vn mono">V.03</span>
                    <h3>Diversity</h3>
                    <p>Respecting each other's diverse perspectives across industries.</p>
                </div>
            </div>
            <div class="value-card search-card" data-search="leadership serving change industries community">
                <div class="vphoto"><img alt="FEHSU leadership at a committee meeting" src="/images/23.jpg"></div>
                <div class="vbody"><span class="vn mono">V.04</span>
                    <h3>Leadership</h3>
                    <p>Leading by serving — driving positive change within industries, organizations, and our community.</p>
                </div>
            </div>
            <div class="value-card search-card" data-search="humanity care people community">
                <div class="vphoto"><img alt="FEHSU members community outreach" src="/images/22.jpg"></div>
                <div class="vbody"><span class="vn mono">V.05</span>
                    <h3>Humanity</h3>
                    <p>Committed to health and safety because we care about people and community.</p>
                </div>
            </div>
            <div class="value-card search-card" data-search="innovation ahead culture safety practices">
                <div class="vphoto"><img alt="FEHSU members reviewing innovative safety practices" src="/images/11.jpg"></div>
                <div class="vbody"><span class="vn mono">V.06</span>
                    <h3>Innovation</h3>
                    <p>Staying ahead in a culture of innovation to improve health and safety.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec" id="leadership">
    <div class="wrap">
        <div class="sec-head-row">
            <div class="sec-head" style="margin-bottom:0;">
                <span class="tag mono">03 — LEADERSHIP</span>
                <h2 class="display">Central Executive Committee</h2>
                <p>The elected officers currently running FEHSU's day-to-day affairs. Tap any photo for a short bio.</p>
            </div>
            <a class="sec-link" href="/corporate">View full Central Executive Committee →</a>
        </div>
        <div class="marquee home-exec-marquee">
            <div class="marquee-track" style="animation-duration:95s;">

                <button type="button" class="member-chip tappable" data-photo="/images/CEC/nico.jpg" data-name="President" data-role="Executive Committee" data-bio="President FEHSU and leads FEHSU's overall strategy and represents the federation at national and international forums.">
                    <div class="photo"><img alt="Chairperson" src="/images/CEC/nico.jpg" /></div>
                    <h4>Agumenawe Nichodemus</h4>
                    <p>President</p>
                </button>

                <button type="button" class="member-chip tappable" data-photo="/images/CEC/denise.jpg" data-name="Minister For External Affairs" data-role="Executive Committee" data-bio="Supports the President and steps in on their behalf when needed on external affairs Replace this placeholder with the Vice Chairperson's real biography.">
                    <div class="photo"><img alt="Vice Chairperson" src="/images/CEC/denise.jpg" /></div>
                    <h4>Kainomugisha Denise</h4>
                    <p>Minister For External Affairs</p>
                </button>

                <button type="button" class="member-chip tappable" data-photo="/images/CEC/JONA.jpg" data-name="General Secretary" data-role="Executive Committee" data-bio="Oversees FEHSU's Projects records and correspondence.">
                    <div class="photo"><img alt="Projects Minister" src="/images/CEC/JONA.jpg" /></div>
                    <h4>Magomu Jonah Cornelinus</h4>
                    <p>Projects Minister</p>
                </button>

                <button type="button" class="member-chip tappable" data-photo="/images/4.jpeg" data-name="Treasurer" data-role="Executive Committee" data-bio="Manages FEHSU's finances, budgets and financial reporting.">
                    <div class="photo"><img alt="Treasurer" src="/images/4.jpeg" /></div>
                    <h4>Treasurer</h4>
                    <p>Executive Committee</p>
                </button>
                <button type="button" class="member-chip tappable" data-photo="/images/CEC/Abdul.jpg" data-name="Minister For External Affairs" data-role="Executive Committee" data-bio="14th Deputy Guild Speaker SOH-MBALE,Internal Minister MSOHESHA,A rotaractor,A youth Leader under the NRM Secretariat in the District Level.">
                    <div class="photo"><img alt="Vice Chairperson" src="/images/CEC/Abdul.jpg" /></div>
                    <h4>Alafi Abdul Rahuman</h4>
                    <p> Internal Minister - MSOHESHA</p>
                </button>

                <button type="button" class="member-chip tappable" data-photo="/images/CEC/Joan.jpg" data-name="Executive Member" data-role="Executive Committee" data-bio="From Uganda Instituet of Allied Health Science Mulago,passionate about accountable leadership,financial stewardship and student empowerment.">
                    <div class="photo"><img alt="Executive Member" src="/images/CEC/Joan.jpg" /></div>
                    <h4>Auma Joan Angel</h4>
                    <p>Finance Minister</p>
                </button>

                <button type="button" class="member-chip tappable" data-photo="/images/5.jpeg" data-name="Publicity Secretary" data-role="Executive Committee" data-bio="Leads FEHSU's communications, media and public outreach.">
                    <div class="photo"><img alt="Publicity Secretary" src="/images/5.jpeg" /></div>
                    <h4>Publicity Secretary</h4>
                    <p>Executive Committee</p>
                </button>
                <button type="button" class="member-chip tappable" data-photo="/images/CEC/Edgar.jpg" data-name="General Secretary" data-role="Executive Committee" data-bio="Representative BEHSA, Is a dedicated Environmemtal Health Student witha apassion for Team work.">
                    <div class="photo"><img alt="Projects Minister" src="/images/CEC/Edgar.jpg" /></div>
                    <h4>Muhindo Edgar</h4>
                    <p>Internal Minister - BEHSA </p>
                </button>

                <button type="button" class="member-chip tappable" data-photo="/images/6.jpeg" data-name="Executive Member" data-role="Executive Committee" data-bio="Contributes to committee decisions and represents member interests.">
                    <div class="photo"><img alt="Executive Member" src="/images/6.jpeg" /></div>
                    <h4>Executive Member</h4>
                    <p>Executive Committee</p>
                </button>
                <button type="button" class="member-chip tappable" data-photo="/images/CEC/nampwera.jpg" data-name="General Secretary" data-role="Executive Committee" data-bio="Representative BEHSA, Is a dedicated Environmemtal Health Student witha apassion for Team work.">
                    <div class="photo"><img alt="Projects Minister" src="/images/CEC/nampwera.jpg" /></div>
                    <h4>Nampwera Rebecca</h4>
                    <p>Internal Affairs Minister - UIAHMS MULAGO </p>
                </button>

                <!-- Track repeats once more so the slow left-slide loops seamlessly -->
                <button type="button" class="member-chip tappable" data-photo="/images/CEC/nico.jpg" data-name="Chairperson" data-role="Executive Committee" data-bio="President FEHSU and leads FEHSU's overall strategy and represents the federation at national and international forums.">
                    <div class="photo"><img alt="Chairperson" src="/images/CEC/nico.jpg" /></div>
                    <h4>Agumenawe Nicodemus</h4>
                    <p>President/p>
                </button>
                <!-- Track repeats once more so the slow left-slide loops seamlessly -->
                <button type="button" class="member-chip tappable" data-photo="/images/CEC/nico.jpg" data-name="President" data-role="Executive Committee" data-bio="President FEHSU and leads FEHSU's overall strategy and represents the federation at national and international forums.">
                    <div class="photo"><img alt="Chairperson" src="/images/CEC/nico.jpg" /></div>
                    <h4>Agumenawe Nicodemus</h4>
                    <p>President</p>
                </button>

                <button type="button" class="member-chip tappable" data-photo="/images/CEC/denise.jpg" data-name="Minister For External Affairs" data-role="Executive Committee" data-bio="Supports the President and steps in on their behalf when needed on external affairs Replace this placeholder with the Vice Chairperson's real biography.">
                    <div class="photo"><img alt="Vice Chairperson" src="/images/CEC/denise.jpg" /></div>
                    <h4>Kainomugisha Denise</h4>
                    <p>Minister For External Affairs</p>
                </button>

                <button type="button" class="member-chip tappable" data-photo="/images/CEC/JONA.jpg" data-name="General Secretary" data-role="Executive Committee" data-bio="Oversees FEHSU's Projects records and correspondence.">
                    <div class="photo"><img alt="Projects Minister" src="/images/CEC/JONA.jpg" /></div>
                    <h4>Magomu Jonah Cornelinus</h4>
                    <p>Projects Minister</p>
                </button>

                <button type="button" class="member-chip tappable" data-photo="/images/4.jpeg" data-name="Treasurer" data-role="Executive Committee" data-bio="Manages FEHSU's finances, budgets and financial reporting">
                    <div class="photo"><img alt="Treasurer" src="/images/4.jpeg" /></div>
                    <h4>Treasurer</h4>
                    <p>Executive Committee</p>
                </button>
                <button type="button" class="member-chip tappable" data-photo="/images/CEC/Abdul.jpg" data-name="Minister For External Affairs" data-role="Executive Committee" data-bio="14th Deputy Guild Speaker SOH-MBALE,Internal Minister MSOHESHA,A rotaractor,A youth Leader under the NRM Secretariat in the District Level.">
                    <div class="photo"><img alt="Vice Chairperson" src="/images/CEC/Abdul.jpg" /></div>
                    <h4>Alafi Abdul Rahuman</h4>
                    <p> Internal Minister - MSOHESHA</p>
                </button>

                <button type="button" class="member-chip tappable" data-photo="/images/CEC/Joan.jpg" data-name="Executive Member" data-role="Executive Committee" data-bio="From Uganda Instituet of Allied Health Science Mulago,passionate about accountable leadership,financial stewardship and student empowerment.">
                    <div class="photo"><img alt="Executive Member" src="/images/CEC/Joan.jpg" /></div>
                    <h4>Auma Joan Angel</h4>
                    <p>Finance Minister</p>
                </button>

                <button type="button" class="member-chip tappable" data-photo="/images/5.jpeg" data-name="Publicity Secretary" data-role="Executive Committee" data-bio="Leads FEHSU's communications, media and public outreach">
                    <div class="photo"><img alt="Publicity Secretary" src="/images/5.jpeg" /></div>
                    <h4>Publicity Secretary</h4>
                    <p>Executive Committee</p>
                </button>
                <button type="button" class="member-chip tappable" data-photo="/images/CEC/Edgar.jpg" data-name="General Secretary" data-role="Executive Committee" data-bio="Representative BEHSA, Is a dedicated Environmemtal Health Student witha apassion for Team work.">
                    <div class="photo"><img alt="Projects Minister" src="/images/CEC/Edgar.jpg" /></div>
                    <h4>Muhindo Edgar</h4>
                    <p>Internal Minister - BEHSA </p>
                </button>

                <button type="button" class="member-chip tappable" data-photo="/images/6.jpeg" data-name="Executive Member" data-role="Executive Committee" data-bio="Contributes to committee decisions and represents member interests">
                    <div class="photo"><img alt="Executive Member" src="/images/6.jpeg" /></div>
                    <h4>Executive Member</h4>
                    <p>Executive Committee</p>
                </button>
                <button type="button" class="member-chip tappable" data-photo="/images/CEC/nampwera.jpg" data-name="General Secretary" data-role="Executive Committee" data-bio="Representative BEHSA, Is a dedicated Environmemtal Health Student witha apassion for Team work.">
                    <div class="photo"><img alt="Projects Minister" src="/images/CEC/nampwera.jpg" /></div>
                    <h4>Nampwera Rebecca</h4>
                    <p>Internal Affairs Minister - UIAHMS MULAGO </p>
                </button>

            </div>
        </div>
    </div>
</section>

<section class="sec alt" id="gallery">
    <div class="wrap">
        <div class="sec-head-row">
            <div class="sec-head" style="margin-bottom:0;">
                <span class="tag mono">04 — GALLERY</span>
                <h2 class="display">Moments from the field</h2>
                <p>Training sessions, site visits, and gatherings from across Uganda's health and safety community.</p>
            </div>
            <a class="sec-link" href="/media">View full gallery →</a>
        </div>
        <div class="gallery-grid">
            <div class="g-item"><img alt="FEHSU members moments after training session" src="/images/11.jpg"><span class="g-cap">FEHSU members moments after training session</span></div>
            <div class="g-item"><img alt="FEHSU field visit to an industrial site" src="/images/30.jpg"><span class="g-cap">FESHU Members in Training</span></div>
            <div class="g-item"><img alt="FEHSU workshop participants" src="/images/29.jpg"><span class="g-cap">some of FEHSU Members</span></div>
            <div class="g-item"><img alt="FEHSU conference session" src="/images/4.jpeg"><span class="g-cap">Annual conference</span></div>
            <div class="g-item"><img alt="FEHSU members networking" src="/images/5.jpeg"><span class="g-cap">Networking evening</span></div>
        </div>
    </div>
</section>

<section class="sec home-art-section" id="artpiece">
    <div class="wrap">
        <div class="sec-head-row">
            <div class="sec-head" style="margin-bottom:0;">
                <span class="tag mono">04 — ARTPIECE HIGHLIGHTS</span>
                <h2 class="display">A softer rhythm below the fold</h2>
                <p>Small motion-led story cards that echo the same visual language while keeping the homepage feeling clear and calm.</p>
            </div>
        </div>
        <div class="home-art-grid">
            <div class="home-art-card reveal-left search-card" data-search="safety in action training moves people field">
                <div class="home-art-media">
                    <img src="/images/24.jpg" alt="FEHSU leadership meeting" loading="lazy">
                    <span class="home-art-badge">FIELD</span>
                </div>
                <div class="home-art-copy">
                    <span class="tag mono">HEALTH IN ACTION</span>
                    <h3>Training that moves people</h3>
                    <p>From site visits to workshops, FEHSU keeps environmental health learning visible, practical, and community-led.</p>
                </div>
            </div>
            <div class="home-art-card reveal-left search-card" data-search="community leadership people partners" style="transition-delay:.08s">
                <div class="home-art-media">
                    <img src="/images/27.jpg" alt="FEHSU members networking" loading="lazy">
                    <span class="home-art-badge">COMMUNITY</span>
                </div>
                <div class="home-art-copy">
                    <span class="tag mono">PEOPLE &amp; PARTNERS</span>
                    <h3>Leadership with a shared purpose</h3>
                    <p>We connect students, professionals, and institutions through a common commitment to environmental health.</p>
                </div>
            </div>
            <div class="home-art-card reveal-left search-card" data-search="insight shaping tomorrow standards research" style="transition-delay:.16s">
                <div class="home-art-media">
                    <img src="/images/15.jpg" alt="FEHSU members in a training exercise" loading="lazy">
                    <span class="home-art-badge">INSIGHT</span>
                </div>
                <div class="home-art-copy">
                    <span class="tag mono">SHAPING TOMORROW</span>
                    <h3>Ideas that turn into standards</h3>
                    <p>Research, services, and movement-building all meet here — a quieter, motion-led extension of the homepage story.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec" id="videos">
    <div class="wrap">
        <div class="sec-head-row">
            <div class="sec-head" style="margin-bottom:0;">
                <span class="tag mono">05 — VIDEOS</span>
                <h2 class="display">Watch highlights</h2>
                <p>Tap any thumbnail to play.</p>
            </div>
            <a class="sec-link" href="/media">View all media →</a>
        </div>
        <div class="video-grid">
            @foreach ($videos as $video)
            <div>
                <div class="video-embed" data-yt="{{ $video->youtube_id }}" data-title="{{ $video->title }}">
                    <img class="video-thumb" alt="{{ $video->title }}" src="https://img.youtube.com/vi/{{ $video->youtube_id }}/hqdefault.jpg">
                    <button type="button" class="video-play" aria-label="Play video"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z" />
                        </svg></button>
                </div>
                <p class="video-cap">{{ $video->title }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="sec alt" id="upcoming">
    <div class="wrap">
        <div class="sec-head-row">
            <div class="sec-head" style="margin-bottom:0;">
                <span class="tag mono">06 — EVENTS COMING UP</span>
                <h2 class="display">What's next on the calendar</h2>
                <p>Conferences, workshops, and networking evenings happening across the federation.</p>
            </div>
            <a class="sec-link" href="/upcoming-events">View all events →</a>
        </div>
        <div class="event-teaser-grid">
            @foreach ($upcoming as $event)
            <div class="event-teaser search-card" data-search="events calendar workshops conferences">
                <div class="event-date-block"><span class="day mono">{{ $event->starts_at?->format('d') ?? '—' }}</span><span class="mon">{{ strtoupper($event->starts_at?->format('M') ?? '') }}</span></div>
                <div class="event-teaser-body">
                    <h3>{{ $event->title }}</h3>
                    <span class="loc">{{ strtoupper($event->location ?? '') }}</span>
                    <p>{{ $event->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="sec" id="updates">
    <div class="wrap">
        <div class="sec-head">
            <span class="tag mono">07 — NOTICES &amp; UPDATES</span>
            <h2 class="display">Latest from FEHSU</h2>
            <p>Live announcements, news, and events — the same feed scrolling in the bar at the top of every page.</p>
        </div>
        <div class="updates-grid">
            @php($badges = ['news' => ['news', 'News', '/news'], 'press_release' => ['press', 'Press release', '/press-release'], 'article' => ['news', 'Article', '/articles-journals']])
            @foreach ($updates as $post)
            <div class="update-card search-card" data-search="updates notices news press release articles">
                <span class="badge {{ $badges[$post->type][0] }}">{{ $badges[$post->type][1] }}</span>
                <h3>{{ $post->title }}</h3>
                <p class="date mono">{{ $post->published_at ? strtoupper($post->published_at->format('j M Y')) : '' }}</p>
                <p>{{ $post->excerpt }}</p>
                <a class="readmore" href="{{ $badges[$post->type][2] }}">Read more →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="sec alt" id="partners">
    <div class="wrap">
        <div class="sec-head" style="margin-bottom:20px;">
            <span class="tag mono">08 — PARTNERS</span>
            <h2 class="display">Sectors we work alongside</h2>
            <p>FEHSU's founding members and partners span these industries, sample sector categories shown below.</p>
        </div>
        <div class="partners-strip">
            <span class="ph">TELECOMMUNICATION</span>
            <span class="ph">MANUFACTURING</span>
            <span class="ph">OIL &amp; GAS</span>
            <span class="ph">MINING</span>
            <span class="ph">FINANCIAL SERVICES</span>
            <span class="ph">CONSTRUCTION</span>
        </div>
    </div>
</section>

<section class="newsletter-band" id="newsletter">
    <div class="newsletter-inner">
        <div class="newsletter-copy">
            <h2 class="display">Stay ahead of Environmental Health Students'news.</h2>
            <p>Subscribe to FEHSU's quarterly newsletter for updates on events, standards, and industry research , straight to your inbox.</p>
        </div>
        <div>
            <form class="newsletter-form" action="https://forms.gle/dfgx9befhiAgiwoq9" method="get" target="_blank">
                <input type="email" name="email" placeholder="Your email address" required aria-label="Email address">
                <button type="submit" class="cta-btn">Subscribe</button>
            </form>
            <p class="newsletter-note">We send roughly four newsletters a year. Unsubscribe anytime.</p>
        </div>
    </div>
</section>

<section class="sec org-showcase" id="network">
    <div class="wrap">
        <div class="sec-head" style="margin-bottom:26px;">
            <span class="tag mono">09 — NETWORK</span>
            <h2 class="display">Who we stand alongside</h2>
            <p>Our member associations and partners, all in one place.</p>
        </div>

        <div class="org-showcase-block">
            <h4>Member Associations</h4>
            <div class="org-slider">
                <button type="button" class="org-slider-nav prev" aria-label="Scroll Member Associations left">&#8249;</button>
                <div class="org-slider-track">
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA1'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/MUEHSA.png" alt="" loading="lazy" onerror="this.parentElement.textContent='MA2'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA3'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/MUEHSA.png" alt="" loading="lazy" onerror="this.parentElement.textContent='MA4'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA5'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/MUEHSA.pnpushag" alt="" loading="lazy" onerror="this.parentElement.textContent='MA6'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA7'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA8'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA9'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA10'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA11'"></div>
                    <!-- duplicate set so the auto-slide loop is seamless -->
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA1'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA2'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA3'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA4'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA5'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA6'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA7'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA8'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA9'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA10'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/PHOTO.jpeg" alt="" loading="lazy" onerror="this.parentElement.textContent='MA11'"></div>
                </div>
                <button type="button" class="org-slider-nav next" aria-label="Scroll Member Associations right">&#8250;</button>
            </div>
        </div>

        <div class="org-showcase-block">
            <h4>Partners</h4>
            <div class="org-slider">
                <button type="button" class="org-slider-nav prev" aria-label="Scroll partners left">&#8249;</button>
                <div class="org-slider-track">
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/ncosha.jpg" alt="" loading="lazy" onerror="this.parentElement.textContent='Construction'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/ACCM.png" alt="" loading="lazy" onerror="this.parentElement.textContent='Mining'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/MUK.png" alt="" loading="lazy" onerror="this.parentElement.textContent='Telecommunication'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/INNO.png" alt="" loading="lazy" onerror="this.parentElement.textContent='Manufacturing'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/ncosha.jpg" alt="" loading="lazy" onerror="this.parentElement.textContent='Oil &amp; Gas'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/MUK.png" alt="" loading="lazy" onerror="this.parentElement.textContent='Financial Services'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/INNO.png" alt="" loading="lazy" onerror="this.parentElement.textContent='Financial Services'"></div>
                    <!-- duplicate set so the auto-slide loop is seamless -->
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/ncosha.jpg" alt="" loading="lazy" onerror="this.parentElement.textContent='Construction'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/ACCM.png" alt="" loading="lazy" onerror="this.parentElement.textContent='Mining'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/MUK.png" alt="" loading="lazy" onerror="this.parentElement.textContent='Telecommunication'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/INNO.png" alt="" loading="lazy" onerror="this.parentElement.textContent='Manufacturing'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/ncosha.jpg" alt="" loading="lazy" onerror="this.parentElement.textContent='Oil &amp; Gas'"></div>
                    <div class="org-logo-box" aria-hidden="true"><img src="/images/ACCM.png" alt="" loading="lazy" onerror="this.parentElement.textContent='Financial Services'"></div>
                </div>
                <button type="button" class="org-slider-nav next" aria-label="Scroll partners right">&#8250;</button>
            </div>
        </div>

    </div>
</section>

@push('scripts')
<script>
    (function() {
        var form = document.getElementById('homeSearchForm');
        var input = document.getElementById('homeSearch');
        var resultsEl = document.getElementById('homeSearchResults');
        var cards = Array.prototype.slice.call(document.querySelectorAll('.search-card'));
        if (!form || !input || !resultsEl || !cards.length) return;

        var sitePages = [{
                title: 'Home',
                href: '/',
                keywords: 'homepage home landing membership events resources leadership updates partners network'
            },
            {
                title: 'History',
                href: '/history',
                keywords: 'history mission story founder background'
            },
            {
                title: 'Objectives',
                href: '/objectives',
                keywords: 'objectives goals mission vision aims'
            },
            {
                title: 'Member Value & Benefits',
                href: '/member-value-benefits',
                keywords: 'member value benefits membership tiers join'
            },
            {
                title: 'Member Options',
                href: '/member-options',
                keywords: 'membership options join member apply register'
            },
            {
                title: 'Corporate',
                href: '/corporate',
                keywords: 'corporate leadership central executive committee officers committee'
            },
            {
                title: 'Committees',
                href: '/committees',
                keywords: 'committees associations member associations national executive committee'
            },
            {
                title: 'Partners',
                href: '/partners',
                keywords: 'partners sectors industries sponsor collaborating organizations'
            },
            {
                title: 'Associations',
                href: '/associations',
                keywords: 'associations member associations directory'
            },
            {
                title: 'Events',
                href: '/events',
                keywords: 'events calendar workshops conference trainings gatherings'
            },
            {
                title: 'Programs',
                href: '/programs',
                keywords: 'programs activities initiatives education outreach'
            },
            {
                title: 'Standard',
                href: '/standard',
                keywords: 'standard guidelines standards health and safety requirements'
            },
            {
                title: 'Resources',
                href: '/resources',
                keywords: 'resources article journals papers standards library knowledge'
            },
            {
                title: 'Contact',
                href: '/contact',
                keywords: 'contact reach us email phone inquiry support'
            },
            {
                title: 'News',
                href: '/news',
                keywords: 'news updates press announcements announcements'
            },
            {
                title: 'Press Release',
                href: '/press-release',
                keywords: 'press release statement communication updates'
            },
            {
                title: 'Articles & Journals',
                href: '/articles-journals',
                keywords: 'articles journals publications research papers'
            },
            {
                title: 'Upcoming Events',
                href: '/upcoming-events',
                keywords: 'upcoming events calendar exhibition workshops schedule'
            },
            {
                title: 'Media',
                href: '/media',
                keywords: 'media gallery photos videos download'
            }
        ];

        function normalize(text) {
            return (text || '').toLowerCase().replace(/[^a-z0-9\s]/g, ' ').replace(/\s+/g, ' ').trim();
        }

        function renderResults(query) {
            var q = normalize(query);
            var matches = [];

            if (!q) {
                resultsEl.innerHTML = '<p class="home-search-hint">Type a keyword to search the site.</p>';
                return;
            }

            sitePages.forEach(function(page) {
                if (normalize(page.title + ' ' + page.keywords).indexOf(q) !== -1) {
                    matches.push(page);
                }
            });

            cards.forEach(function(card) {
                var hay = normalize(card.dataset.search || card.textContent);
                var match = hay.indexOf(q) !== -1;
                card.classList.toggle('is-hidden', !match && q.length > 0);
            });

            if (!matches.length) {
                resultsEl.innerHTML = '<p class="home-search-hint">No matching pages found. Try “events”, “resources”, “leadership”, or “membership”.</p>';
                return;
            }

            resultsEl.innerHTML = '<div class="home-search-results-list">' + matches.map(function(page) {
                return '<a class="home-search-result" href="' + page.href + '">' + page.title + '</a>';
            }).join('') + '</div>';
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            renderResults(input.value);
            input.blur();
        });

        input.addEventListener('input', function() {
            renderResults(input.value);
        });

        renderResults('');
    })();
</script>
@endpush

<section class="cta-band" id="membership">
    <div class="cta-band-inner">
        <h2 class="display">Join the Environmental Health Students' voice in Uganda.</h2>
        <p>Registration takes a few minutes , choose your membership tier and become part of the Federation of Environmental Health Students' of Uganda</p>
        <a class="btn-dark" href="https://docs.google.com/forms/d/e/1FAIpQLScKxVos78HSmTmZiKxrgiQEYihKOeeTUKB9n-se3fgzOFSJmg/viewform?usp=header">Register as a Member</a>
    </div>
</section>

<!-- Tap-to-zoom photo/bio modal for the Central Executive Committee showcase -->
<div class="photo-modal zoom-in" id="photoModal" data-effect="zoom-in" aria-hidden="true">
    <div class="photo-modal-backdrop" data-close></div>
    <div class="photo-modal-panel" role="dialog" aria-modal="true" aria-labelledby="modalName">
        <button type="button" class="photo-modal-close" data-close aria-label="Close">✕</button>
        <div class="photo-modal-media">
            <button type="button" class="photo-modal-nav prev" data-nav="prev" aria-label="Previous person">‹</button>
            <img id="modalImg" src="" alt="">
            <button type="button" class="photo-modal-nav next" data-nav="next" aria-label="Next person">›</button>
            <span class="photo-modal-count" id="modalCount"></span>
        </div>
        <div class="photo-modal-info">
            <h3 id="modalName"></h3>
            <p class="role" id="modalRole"></p>
            <p class="bio" id="modalBio"></p>
        </div>
    </div>
</div>
@endsection