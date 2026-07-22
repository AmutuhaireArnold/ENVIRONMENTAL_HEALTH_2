---
name: fehsu-site
description: Conventions and architecture for the FEHSU static website (Federation of Environmental Health Students' Association of Uganda). Use when creating/editing pages, styles, sliders, lightboxes, video embeds, nav/footer, committee or sister-org pages in this workspace.
---

# FEHSU Static Site Skill

Static HTML site (no build step, no CMS, no framework). Served from XAMPP at `c:\xampp\htdocs\isaac\ENVIRONMENTAL_HEALTH_2`. 25 HTML pages, one stylesheet, three vanilla JS files.

## Golden rules

1. **Header, nav, ticker, footer, and fixed UI are copy-pasted into every page.** Any change to them must be replicated across ALL `.html` files (use search/replace across the workspace, verify count matches page count).
2. **Comment out removed code, don't delete it** — add `<!-- CHANGED: <reason> -->` / `// CHANGED: <reason>` markers (workspace collaborator convention).
3. All styling lives in `assets/style.css` (CSS custom properties). Never add new CSS files; extend variables/components in place.
4. JS is vanilla, loaded synchronously at end of `<body>` in this order: `lightbox.js`, `sliders.js`, `youtube-embed.js`. Page-specific behavior (splash, menu toggle, hero slideshow, bio modal, back-to-top, scroll reveal) is INLINE `<script>` in each page.

## Page template skeleton

```html
<!DOCTYPE html><html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Title — FEHSU</title>
  <meta name="description" content="...">
  <link rel="icon" href="PHOTO.jpeg">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <a class="skip-link" href="#main-content">Skip to main content</a>
  <header> <nav>…navlinks, hamburgerBtn…</nav> <div class="ticker">…</div> </header>
  <main id="main-content"> …page-hero / .sec sections… </main>
  <footer id="contact-footer">…4-col grid…</footer>
  <button id="backToTop">Top</button>
  <div id="mobileNavBar" class="mobile-nav-bar">…</div>
  <a class="whatsapp-float" …>WhatsApp</a>
  <script>/* inline: splash, toggleMenu, slideshow, modals */</script>
  <script src="assets/lightbox.js"></script>
  <script src="assets/sliders.js"></script>
  <script src="assets/youtube-embed.js"></script>
</body></html>
```

When creating a new page: copy an existing similar page (e.g. `history.html` for info pages, `sister-org-1.html` for member listings), replace `<main>` content, update `<title>`/description, and add the page to nav dropdowns + footer links on ALL pages if it should be reachable.

## Navigation structure

Top-level: Home | About (History, Objectives) | Membership (value/benefits, options) | Member Directory (corporate.html = Central Exec, committees.html = National Exec, partners, associations) | Events (upcoming-events, programs, events) | Resources (news, press-release, articles-journals, media, standard, resources) | Contact | "Join FEHSU" CTA → member-options.html.

Dropdown parents use `href="javascript:void(0)"`. Mobile drawer toggled by `#hamburgerBtn` + `toggleMenu()`; breakpoint 992px.

## CSS design system (assets/style.css)

Key variables:
- Text/BG: `--ink #171a1f`, `--paper #fff`, `--paper-2 #f4f6f7`, `--steel #4c5560`, `--line`
- Brand greens: `--clay #2f7a3d` (primary), `--clay-deep`, `--gold #7fc47a`, `--leaf #1f7a52`, `--leaf-light #e7f5ee`
- Navy: `--navy #0e2233`, `--navy-deep #081522`; footer: `--footer-bg #5b7893`
- Layout: `--header-h 62px` (56 mobile), `--radius 12px`, `--radius-sm 8px`, `--shadow-sm/md/lg`
- Fonts: `--font-display` / `--font-condensed` / `--font-body` (SF Pro stacks)

Components: `.cta-btn`, `.btn-outline`, `.btn-dark`; `.card`/`.info-card`/`.value-card`; `.hero`, `.page-hero(.has-photo)`, `.sec` + `.sec.alt`; `.card-grid` (3→2→1 cols), `.values-grid`, `.gallery-grid`; `.callout`, `.timeline`, `.badge.news/.event/.press`, `.tag.mono`; text utils `.display`, `.condensed`, `.mono`.

Breakpoints: 1080px (grids 2-col), 992px (mobile nav), 760px (1-col + mobile bottom bar), 600px, 480px.

## JS hooks

- **Lightbox** (`lightbox.js`): auto-applies to page images; EXCLUDES `.slide img`, `.marquee-track img`, `.member-chip.tappable img`, `.logo-img`, `.video-embed img`. Overlay classes: `.img-lightbox`, `.img-lightbox-frame`, `.img-lightbox-zoombar`.
- **Sliders** (`sliders.js`): `.marquee` (member carousels; inline `style="animation-duration:95s"` controls speed; JS injects `.marquee-wrap`, nav buttons) and `.org-slider` (logo strips). Class-based detection, no data attributes. IntersectionObserver pauses off-screen.
- **YouTube** (`youtube-embed.js`): lazy click-to-play:
  ```html
  <div class="video-embed" data-yt="VIDEO_ID" data-title="Title">
    <img class="video-thumb" src="…"><button class="video-play">▶</button>
  </div>
  ```
  Loads `youtube-nocookie.com` iframe on click.
- **Member bio modal**: chips inside marquees use
  `.member-chip.tappable` with `data-photo`, `data-name`, `data-role`, `data-bio`; inline script opens `.photo-modal` with prev/next browsing.

## Page families (template clones)

- `committee-1st/2nd/3rd.html` + `other-committee-1st/2nd/3rd.html`: committee archives — hero eyebrow "COMMITTEE ARCHIVE · [YEARS]" + `.marquee` of member chips. Only years, photos, labels differ.
- `sister-org-1.html … sister-org-11.html`: identical "Member Association N" template with placeholder chips (Chairperson, Vice Chair, Secretary, Treasurer, Publicity Secretary) and generic photos `1.jpeg`–`8.jpeg`. Editing one usually implies editing all 11.
- `corporate.html` = Central Executive Committee; `committees.html` = National Executive Committee — **different committees, don't confuse**.

## Known gotchas

- `pdfs/` folder is a placeholder — `press-release.html` links to PDF filenames that don't exist yet; real PDFs must match those names.
- Much content is placeholder (generic names/photos on committee & sister-org pages).
- Splash screen shows once per session via `sessionStorage`.
- Forms submit to external Google Forms (no on-page feedback).
- Marquee tracks duplicate items for seamless loop — keep duplicates in sync when editing members.
- Org name appears inconsistently across pages ("Students' Association" vs "Health and Safety Association") — confirm wording with user before mass-editing.
