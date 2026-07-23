<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  {{-- Primary SEO meta --}}
  <title>@yield('title', 'FEHSU — Federation of Environmental Health Students\' of Uganda')</title>
  <meta name="description" content="@yield('description', 'FEHSU is the national association for the occupational health and safety profession in Uganda — advancing environmental health, workplace safety, training, and professional standards.')">
  <meta name="keywords" content="@yield('keywords', 'FEHSU, occupational health and safety Uganda, environmental health Uganda, OHS, workplace safety, health and safety association, Kampala')">
  <meta name="author" content="FEHSU">
  <meta name="robots" content="@yield('robots', 'index, follow, max-image-preview:large, max-snippet:-1')">
  <link rel="canonical" href="@yield('canonical', url()->current())">
  <meta name="theme-color" content="#2f7a3d">

  {{-- Open Graph (Facebook, LinkedIn, WhatsApp) --}}
  <meta property="og:site_name" content="FEHSU">
  <meta property="og:locale" content="en_UG">
  <meta property="og:type" content="@yield('og_type', 'website')">
  <meta property="og:title" content="@yield('title', 'FEHSU — Federation of Environmental Health Students\' of Uganda')">
  <meta property="og:description" content="@yield('description', 'FEHSU is the national association for the occupational health and safety profession in Uganda.')">
  <meta property="og:url" content="@yield('canonical', url()->current())">
  <meta property="og:image" content="@yield('og_image', url('/images/PHOTO.jpeg'))">
  <meta property="og:image:alt" content="FEHSU logo">

  {{-- Twitter Card --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@fehsu256">
  <meta name="twitter:title" content="@yield('title', 'FEHSU')">
  <meta name="twitter:description" content="@yield('description', 'FEHSU is the national association for the occupational health and safety profession in Uganda.')">
  <meta name="twitter:image" content="@yield('og_image', url('/images/PHOTO.jpeg'))">

  <link rel="icon" href="/images/PHOTO.jpeg">
  <link rel="apple-touch-icon" href="/images/PHOTO.jpeg">
  <link rel="preconnect" href="https://img.youtube.com" crossorigin>
  <link rel="preconnect" href="https://www.youtube-nocookie.com" crossorigin>
  <link rel="stylesheet" href="/assets/style.css">

  {{-- Sitewide structured data: Organization + WebSite --}}
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Federation of Environmental Health Students' of Uganda",
    "alternateName": "FEHSU",
    "url": "{{ url('/') }}",
    "logo": "{{ url('/images/PHOTO.jpeg') }}",
    "email": "fehsuganda@gmail.com",
    "telephone": "+256777828818",
    "foundingDate": "2022",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Kampala",
      "addressCountry": "UG"
    },
    "sameAs": [
      "https://twitter.com/fehsu256",
      "https://www.linkedin.com/company/fehsu/",
      "https://www.instagram.com/fehsu_ug/",
      "https://www.youtube.com/@fehsu"
    ]
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "FEHSU",
    "url": "{{ url('/') }}"
  }
  </script>
  @stack('structured_data')
</head>

<body>
  <div id="splashScreen" class="splash-screen" aria-hidden="true">
    <div class="splash-inner">
      <img src="/images/PHOTO.jpeg" alt="FEHSU logo" class="splash-logo">
      <h1 class="splash-title">FEHSU</h1>
      <p class="splash-sub condensed">Federation of Environmental Health Students' of Uganda</p>
      <div class="splash-bar">
        <div class="splash-bar-fill"></div>
      </div>
      <p class="splash-loading-text condensed">Loading<span class="dots"><span>.</span><span>.</span><span>.</span></span></p>
    </div>
  </div>
  <a class="skip-link" href="#main-content">Skip to main content</a>
  <header>
    <nav>
      <a href="/" class="logo">
        <img src="/images/PHOTO.jpeg" alt="FEHSU logo" class="logo-img">
        <span class="logo-text-wrap"><span class="logo-text">FEHSU</span><span class="logo-est">EST. 2022</span></span>
      </a>

      <button class="hamburger" id="hamburgerBtn" aria-label="Toggle navigation menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>

      <ul class="navlinks condensed" id="navLinks">
        <li><a href="/" class="active">Home</a></li>
        <li class="has-sub"><a href="javascript:void(0)" class="sub-toggle">About</a>
          <ul class="sub">
            <li><a href="/history">History</a></li>
            <li><a href="/objectives">Objectives</a></li>
          </ul>
        </li>
        <li class="has-sub"><a href="javascript:void(0)" class="sub-toggle">Membership</a>
          <ul class="sub">
            <li><a href="/member-value-benefits">Membership value and benefits</a></li>
            <li><a href="/member-options">Membership options</a></li>
          </ul>
        </li>
        <li class="has-sub"><a href="javascript:void(0)" class="sub-toggle">Member directory</a>
          <ul class="sub">
            <li><a href="/corporate">Central Executive Committee</a></li>
            <li><a href="/committees">National Executive Committee</a></li>
            <li><a href="/partners">Partners</a></li>
            <li><a href="/associations">Associations</a></li>
          </ul>
        </li>
        <li class="has-sub"><a href="javascript:void(0)" class="sub-toggle">Events</a>
          <ul class="sub">
            <li><a href="/upcoming-events">Upcoming events</a></li>
            <li><a href="/programs">Programs</a></li>
            <li><a href="/events">Events</a></li>
          </ul>
        </li>
        <li class="has-sub"><a href="javascript:void(0)" class="sub-toggle">Resources</a>
          <ul class="sub">
            <li><a href="/news">News</a></li>
            <li><a href="/press-release">Press release</a></li>
            <li><a href="/articles-journals">Articles and journals</a></li>
            <li><a href="/media">Media</a></li>
            <li><a href="/standard">Standard</a></li>
            <li><a href="/resources">Resources hub</a></li>
          </ul>
        </li>
        <li><a href="/contact" class="">Contact</a></li>
        <li class="mobile-join"><a href="/member-options" class="cta-btn">Join FEHSU</a></li>
      </ul>
      <a href="/member-options" class="cta-btn desktop-join">Join FEHSU</a>
    </nav>

    <div class="ticker" role="status" aria-label="Latest updates">
      <div class="ticker-label"><span class="live-dot"></span> Live Updates</div>
      <div class="ticker-track-wrap">
        @php($tickerMessages = \App\Models\TickerMessage::where('is_active', true)->orderBy('sort_order')->get())
        <div class="ticker-track">@foreach ($tickerMessages as $msg)<span>{{ $msg->message }}</span>@endforeach @foreach ($tickerMessages as $msg)<span>{{ $msg->message }}</span>@endforeach</div>
      </div>
    </div>
  </header>

  <main id="main-content">
    @yield('content')
  </main>
  <footer id="contact-footer">
    <div class="footer-grid">
      <div>
        <div class="logo" style="margin-bottom:18px;">
          <img src="/images/PHOTO.jpeg" alt="FEHSU logo" class="logo-img">
          <span class="display" style="font-size:1.1rem; color:#fff;">FEHSU</span>
        </div>
        <p>FEHSU is the Federation of Environmental Health Students' of Uganda, supporting the development of world-class health and safety practice and providing a collective voice for the profession.</p>
      </div>
      <div>
        <h4>Quick links</h4>
        <ul>
          <li><a href="/history">History</a></li>
          <li><a href="/objectives">Objectives</a></li>
          <li><a href="/member-options">Membership options</a></li>
          <li><a href="/corporate">Member directory</a></li>
        </ul>
      </div>
      <div>
        <h4>Resources</h4>
        <ul>
          <li><a href="/news">News</a></li>
          <li><a href="/press-release">Press release</a></li>
          <li><a href="/articles-journals">Articles &amp; journals</a></li>
          <li><a href="/standard">Standards</a></li>
          <li><a href="/resources">Resource hub</a></li>
        </ul>
      </div>

      <div>
        <h4>Get in touch</h4>
        <ul>
          <li><a href="/contact">Kampala, Uganda</a></li>
          <li><a href="tel:+256777828818">+256 777 828 818</a></li>
          <li><a href="mailto:fehsuganda@gmail.com">fehsuganda@gmail.com</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© {{ date('Y') }} FEHSU. All rights reserved.</span>
      <div class="socials">
        <a href="https://twitter.com/fehsu256" aria-label="Twitter / X" target="_blank"><img src="/images/X-Logo.png" alt="X (Twitter)" loading="lazy"></a>
        <a href="https://www.linkedin.com/company/fehsu/" aria-label="LinkedIn"><img src="/images/lik.jpg" alt="LinkedIn" loading="lazy"></a>
        <a href="https://www.instagram.com/fehsu_ug/" aria-label="Instagram"><img src="/images/ins.png" alt="Instagram" loading="lazy"></a>
        <a href="https://www.youtube.com/@fehsu" aria-label="YouTube"><img src="/images/you.png" alt="YouTube" loading="lazy"></a>
      </div>
    </div>
  </footer>

  <button id="backToTop" onclick="scrollToTop()" aria-label="Back to top">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
      <polyline points="18 15 12 9 6 15"></polyline>
    </svg>
    <span>Top</span>
  </button>

  <div id="mobileNavBar" class="mobile-nav-bar">
    <a href="/" class="nav-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
      <span>Home</span>
    </a>
    <a href="/member-options" class="nav-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
        <circle cx="9" cy="7" r="4" />
        <path d="M23 21v-2a4 4 0 00-3-3.87" />
        <path d="M16 3.13a4 4 0 010 7.75" />
      </svg>
      <span>Members</span>
    </a>
    <a href="/events" class="nav-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
        <line x1="16" y1="2" x2="16" y2="6" />
        <line x1="8" y1="2" x2="8" y2="6" />
        <line x1="3" y1="10" x2="21" y2="10" />
      </svg>
      <span>Events</span>
    </a>
    <a href="/resources" class="nav-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z" />
        <path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z" />
      </svg>
      <span>Resources</span>
    </a>
    <a href="/contact" class="nav-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
      </svg>
      <span>Contact</span>
    </a>
  </div>

  <a href="https://whatsapp.com/channel/0029Va9JuIhHQbSDhdHVjM0i" target="_blank" rel="noopener" class="whatsapp-float" aria-label="Join our WhatsApp channel">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="28" height="28" fill="#fff">
      <path d="M16.004 3C9.377 3 4 8.373 4 15c0 2.34.653 4.53 1.786 6.4L4 29l7.79-1.744A11.94 11.94 0 0 0 16.004 27C22.63 27 28 21.627 28 15S22.63 3 16.004 3zm0 21.6c-1.93 0-3.73-.55-5.256-1.5l-.377-.224-4.62 1.034 1.06-4.5-.246-.386A9.55 9.55 0 0 1 5.4 15c0-5.303 4.303-9.6 9.604-9.6 5.3 0 9.6 4.297 9.6 9.6 0 5.303-4.3 9.6-8.6 9.6zm5.28-7.19c-.29-.145-1.71-.844-1.975-.94-.265-.096-.458-.145-.65.145s-.746.94-.915 1.133c-.168.193-.337.217-.626.072-.29-.145-1.223-.45-2.33-1.44-.86-.767-1.442-1.715-1.61-2.005-.169-.29-.018-.446.127-.59.13-.13.29-.338.435-.507.145-.169.193-.29.29-.483.096-.193.048-.362-.024-.507-.072-.145-.65-1.566-.89-2.145-.234-.564-.472-.487-.65-.496l-.554-.01c-.193 0-.507.072-.772.362s-1.012.99-1.012 2.412 1.036 2.797 1.18 2.99c.145.193 2.038 3.11 4.937 4.362.69.298 1.228.476 1.647.61.692.22 1.322.19 1.82.115.555-.083 1.71-.699 1.951-1.373.242-.675.242-1.253.17-1.374-.073-.12-.266-.193-.556-.338z" />
    </svg>
  </a>

  <script>
    (function() {
      var splash = document.getElementById('splashScreen');
      if (!splash) return;
      if (sessionStorage.getItem('fehsuSplashShown')) {
        splash.style.display = 'none';
        return;
      }
      document.body.classList.add('splash-active');
      sessionStorage.setItem('fehsuSplashShown', '1');
      setTimeout(function() {
        splash.classList.add('hide');
        document.body.classList.remove('splash-active');
        setTimeout(function() {
          splash.style.display = 'none';
        }, 650);
      }, 5000);
    })();

    function toggleMenu() {
      var h = document.getElementById('hamburgerBtn'),
        n = document.getElementById('navLinks');
      if (h && n) {
        h.classList.toggle('active');
        n.classList.toggle('open');
        document.body.classList.toggle('menu-open');
        h.setAttribute('aria-expanded', h.classList.contains('active'));
      }
    }

    function closeMenu() {
      var h = document.getElementById('hamburgerBtn'),
        n = document.getElementById('navLinks');
      if (h && n) {
        h.classList.remove('active');
        n.classList.remove('open');
        document.body.classList.remove('menu-open');
        h.setAttribute('aria-expanded', 'false');
      }
    }
    document.addEventListener('DOMContentLoaded', function() {
      var h = document.getElementById('hamburgerBtn');
      if (h) h.addEventListener('click', function(e) {
        e.stopPropagation();
        toggleMenu();
      });

      var subToggles = document.querySelectorAll('.has-sub > a');
      subToggles.forEach(function(t) {
        t.addEventListener('click', function(e) {
          if (window.innerWidth <= 992) {
            e.preventDefault();
            var sub = this.parentElement.querySelector('.sub');
            var isOpen = sub && sub.classList.contains('open');
            document.querySelectorAll('.navlinks .sub.open').forEach(function(s) {
              s.classList.remove('open');
            });
            if (sub && !isOpen) sub.classList.add('open');
          }
        });
      });

      var navLinks = document.getElementById('navLinks');
      if (navLinks) {
        navLinks.querySelectorAll('a').forEach(function(a) {
          a.addEventListener('click', function() {
            var href = this.getAttribute('href');
            if (href === '#' || href === 'javascript:void(0)' || this.classList.contains('sub-toggle')) return;
            setTimeout(closeMenu, 150);
          });
        });
      }

      document.addEventListener('click', function(e) {
        var n = document.getElementById('navLinks'),
          h = document.getElementById('hamburgerBtn');
        if (n && n.classList.contains('open') && !n.contains(e.target) && !h.contains(e.target)) closeMenu();
      });

      window.addEventListener('resize', function() {
        if (window.innerWidth > 992) closeMenu();
      });

      // Active link highlight (path-based routes)
      var currentPath = window.location.pathname.replace(/\/$/, '') || '/';
      document.querySelectorAll('.navlinks > li > a:not(.sub-toggle)').forEach(function(a) {
        a.classList.remove('active');
        var href = (a.getAttribute('href') || '').replace(/\/$/, '') || '/';
        if (href === currentPath) a.classList.add('active');
      });
      document.querySelectorAll('.mobile-nav-bar .nav-item').forEach(function(a) {
        a.classList.remove('active');
        var href = (a.getAttribute('href') || '').replace(/\/$/, '') || '/';
        if (href === currentPath) a.classList.add('active');
      });

      // Hero slideshow
      var slides = document.querySelectorAll('.slide');
      if (slides.length) {
        var i = 0;
        slides[0].classList.add('show');
        var heroTimer;
        var cardTextEl = document.getElementById('heroCardText');
        var captionText = document.querySelector('#heroPhotoCaption .cap-text');

        function updateCaption() {
          if (!cardTextEl || !captionText) return;
          var text = slides[i].getAttribute('data-caption');
          cardTextEl.classList.remove('show');
          setTimeout(function() {
            if (text) {
              captionText.textContent = text;
              cardTextEl.classList.add('show');
            }
          }, 2000);
        }
        updateCaption();

        function showSlide(n) {
          var prevIdx = i;
          i = (n + slides.length) % slides.length;
          var prevEl = slides[prevIdx],
            nextEl = slides[i];
          prevEl.classList.remove('show');
          prevEl.classList.add('exit');
          nextEl.classList.add('show');
          updateCaption();
          setTimeout(function() {
            prevEl.classList.add('no-transition');
            prevEl.classList.remove('exit');
            void prevEl.offsetWidth;
            prevEl.classList.remove('no-transition');
          }, 1050);
        }

        function startHeroTimer() {
          heroTimer = setInterval(function() {
            showSlide(i + 1);
          }, 8000);
        }
        startHeroTimer();
        document.querySelectorAll('.hero-slide-nav').forEach(function(btn) {
          btn.addEventListener('click', function() {
            clearInterval(heroTimer);
            showSlide(i + parseInt(btn.getAttribute('data-dir'), 10));
            startHeroTimer();
          });
        });
      }

      // Quick-access card photo cross-fade
      document.querySelectorAll('.quick-photo').forEach(function(photo) {
        var imgs = photo.querySelectorAll('.qslide');
        if (imgs.length < 2) return;
        var qi = 0;
        setInterval(function() {
          imgs[qi].classList.remove('show');
          qi = (qi + 1) % imgs.length;
          imgs[qi].classList.add('show');
        }, 3200 + Math.random() * 600);
      });

      // Scroll reveal
      var revealEls = document.querySelectorAll('.reveal-left');
      if (revealEls.length) {
        if ('IntersectionObserver' in window) {
          var revealObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
              if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                revealObserver.unobserve(entry.target);
              }
            });
          }, {
            threshold: 0.2,
            rootMargin: '0px 0px -40px 0px'
          });
          revealEls.forEach(function(el) {
            revealObserver.observe(el);
          });
        } else {
          revealEls.forEach(function(el) {
            el.classList.add('in-view');
          });
        }
      }

      // Back to top
      function handleScroll() {
        var b = document.getElementById('backToTop');
        if (!b) return;
        if (window.scrollY > 400) b.classList.add('show');
        else b.classList.remove('show');
      }
      var ticking = false;
      document.addEventListener('scroll', function() {
        if (!ticking) {
          window.requestAnimationFrame(function() {
            handleScroll();
            ticking = false;
          });
          ticking = true;
        }
      });

      // Tap-to-zoom photo/bio modal
      var modal = document.getElementById('photoModal');
      if (modal) {
        var modalImg = document.getElementById('modalImg');
        var modalName = document.getElementById('modalName');
        var modalRole = document.getElementById('modalRole');
        var modalBio = document.getElementById('modalBio');
        var modalCount = document.getElementById('modalCount');
        var prevBtn = modal.querySelector('.photo-modal-nav.prev');
        var nextBtn = modal.querySelector('.photo-modal-nav.next');
        var lastFocused = null;
        var currentGroup = [];
        var currentIndex = 0;

        function chipKey(chip) {
          return (chip.getAttribute('data-name') || '') + '|' + (chip.getAttribute('data-photo') || '') + '|' + (chip.getAttribute('data-bio') || '');
        }

        function uniqueGroupFor(chip) {
          var scope = chip.closest('.marquee') || document;
          var all = Array.prototype.slice.call(scope.querySelectorAll('.member-chip.tappable'));
          var seen = {},
            unique = [];
          all.forEach(function(c) {
            var k = chipKey(c);
            if (!seen[k]) {
              seen[k] = true;
              unique.push(c);
            }
          });
          return unique;
        }

        function playZoom() {
          modal.classList.remove('zoom-in', 'zoom-out');
          if (!modal.dataset.effect || modal.dataset.effect === 'none') return;
          void modal.offsetWidth;
          modal.classList.add(modal.dataset.effect);
        }

        function renderCurrent() {
          var chip = currentGroup[currentIndex];
          if (!chip) return;
          modalImg.src = chip.getAttribute('data-photo');
          modalImg.alt = chip.getAttribute('data-name') || '';
          modalName.textContent = chip.getAttribute('data-name') || '';
          modalRole.textContent = chip.getAttribute('data-role') || '';
          modalBio.textContent = chip.getAttribute('data-bio') || '';
          if (modalCount) modalCount.textContent = (currentIndex + 1) + ' / ' + currentGroup.length;
          if (prevBtn) prevBtn.disabled = currentGroup.length < 2;
          if (nextBtn) nextBtn.disabled = currentGroup.length < 2;
        }

        function openModal(chip) {
          currentGroup = uniqueGroupFor(chip);
          var key = chipKey(chip);
          currentIndex = currentGroup.findIndex(function(c) {
            return chipKey(c) === key;
          });
          if (currentIndex < 0) currentIndex = 0;
          lastFocused = document.activeElement;
          playZoom();
          modal.classList.add('open');
          modal.setAttribute('aria-hidden', 'false');
          document.body.classList.add('modal-open');
          renderCurrent();
          modal.querySelector('.photo-modal-close').focus();
        }

        function step(dir) {
          if (currentGroup.length < 2) return;
          currentIndex = (currentIndex + dir + currentGroup.length) % currentGroup.length;
          playZoom();
          renderCurrent();
        }

        function closeModal() {
          modal.classList.remove('open');
          modal.setAttribute('aria-hidden', 'true');
          document.body.classList.remove('modal-open');
          if (lastFocused) lastFocused.focus();
        }
        document.querySelectorAll('.member-chip.tappable').forEach(function(chip) {
          chip.addEventListener('click', function() {
            openModal(chip);
          });
        });
        modal.querySelectorAll('[data-close]').forEach(function(el) {
          el.addEventListener('click', closeModal);
        });
        if (prevBtn) prevBtn.addEventListener('click', function() {
          step(-1);
        });
        if (nextBtn) nextBtn.addEventListener('click', function() {
          step(1);
        });
        document.addEventListener('keydown', function(e) {
          if (!modal.classList.contains('open')) return;
          if (e.key === 'Escape') closeModal();
          if (e.key === 'ArrowLeft') step(-1);
          if (e.key === 'ArrowRight') step(1);
        });
      }
    });

    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }
  </script>

  <script src="/assets/lightbox.js" defer></script>
  <script src="/assets/youtube-embed.js" defer></script>
  <script src="/assets/sliders.js" defer></script>
  @stack('scripts')
</body>

</html>