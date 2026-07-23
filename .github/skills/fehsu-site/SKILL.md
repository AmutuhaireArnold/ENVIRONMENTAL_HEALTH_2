---
name: fehsu-site
description: Conventions and architecture for the FEHSU website — a Laravel 13 + Filament 5 app (converted from a static HTML site) for the Federation of Environmental Health Students' Association of Uganda. Use when creating/editing pages, Blade views, Filament resources, models, routes, seeders, styles, or JS behaviors in this workspace.
---

# FEHSU Laravel Site Skill

Laravel 13 (framework 13.21.1) + Filament v5.7 admin panel, at the repo root `c:\xampp\htdocs\isaac\ENVIRONMENTAL_HEALTH_2`. Converted from a static HTML site; the legacy site is kept untouched in `ENVIRONMENTAL HEALTH/` as visual reference. MySQL on 127.0.0.1:**3308**, database `laravel`. Dev server: `php artisan serve` → http://localhost:8000. Admin: `/admin` (Filament, user admin@fehsug.com).

## Golden rules

1. **Comment out removed code, don't delete it** — add `// CHANGED: <reason>` / `<!-- CHANGED: <reason> -->` markers (workspace collaborator convention). Exception: reverting your own edits.
2. All public styling lives in `public/assets/style.css` (CSS custom properties, copied verbatim from the legacy site). Frontend JS: `public/assets/lightbox.js`, `sliders.js`, `youtube-embed.js` — vanilla, loaded at end of body in that order by the layout. Page-specific JS (splash, menu toggle, hero slideshow, modals) is inline in `resources/views/layouts/app.blade.php` and page views.
3. The shared header/nav/ticker/footer exist ONCE in `resources/views/layouts/app.blade.php` — never duplicate them into page views.
4. No Vite/npm build for the public site — it uses plain CSS/JS from `public/assets/`. Filament assets are pre-published under `public/js/filament` etc.

## Structure

- `app/Models/` — Post, Event, TickerMessage, Committee, Member, Organization, Document, MediaItem, User. All have `$fillable`; datetime/bool casts via `casts()` method.
- `app/Http/Controllers/PageController.php` — all public pages (home, listings, dynamic committee/organization).
- `app/Filament/Resources/{Posts,Events,TickerMessages,Committees,Members,Organizations,Documents,MediaItems}/` — Filament v5 structure: `*Resource.php` + `Schemas/*Form.php` + `Tables/*Table.php` + `Pages/`.
- `resources/views/layouts/app.blade.php` — shared skeleton; ticker pulls active `TickerMessage` via inline `@php` query.
- `resources/views/pages/*.blade.php` — 21 views extending `layouts.app`, section `content`.
- `resources/views/partials/member-marquee.blade.php` (expects `$members` or `$chips`, `$duration`) and `photo-modal.blade.php`.
- `routes/web.php` — `Route::view` for static pages; PageController for DB-driven; dynamic `/committees/{slug}` and `/associations/{slug}`; 301 redirects for legacy `*.html` URLs.
- `database/migrations/2026_07_22_120000_create_content_tables.php` — all 8 content tables in one migration.
- `database/seeders/ContentSeeder.php` — idempotent (`firstOrCreate`) import of the original static content.
- `scripts/convert-static.php` — one-off converter used for the original migration (keep for reference).

## Content model

| Table | Key fields | Notes |
|---|---|---|
| posts | type enum(news, press_release, article), slug, excerpt, body, is_published, published_at | RichEditor body |
| events | type enum(event, program, upcoming), starts_at, location, is_published | upcoming-events + home teasers use type=upcoming |
| ticker_messages | message, is_active, sort_order | rendered twice in layout for seamless loop |
| committees | slug, type enum(central, national, other), term_label, sort_order | archive pages; prev/next nav by sort_order within type |
| organizations | slug, type enum(sister_org, partner, association), sort_order | sister-org-1..11 pages |
| members | committee_id / organization_id (nullable FKs), name, role, bio, photo, sort_order | one table for both parents |
| documents | file_path, category enum(press, standard, resource), published_at | PDFs; press-release page lists category=press |
| media_items | type enum(image, youtube), file_path / youtube_id, sort_order | media gallery + home/media video grids |

**Image/file path convention:** values starting with `/` are served from `public/` (seeded legacy files, e.g. `/images/5.jpeg`); anything else is a Filament upload on the public disk → render with `asset('storage/' . $path)`. Views use `str_starts_with($p, '/') ? $p : asset('storage/'.$p)`.

## Page inventory

- **DB-driven:** `/` (videos, upcoming teasers, updates), `/news`, `/articles-journals`, `/press-release` (documents), `/upcoming-events`, `/media`, `/committees/{slug}`, `/associations/{slug}`.
- **Static Blade (hardcoded by design):** history, objectives, member-value-benefits, member-options, corporate, committees (assoc chart JS), partners, associations, events, programs, standard, resources, contact.
- Legacy URLs: any `/{page}.html` 301-redirects to the new route (committee-*/other-committee-* → `/committees/{slug}`, sister-org-N → `/associations/sister-org-N`).

## Frontend JS hooks (unchanged from legacy)

- Marquees: `.marquee` > `.marquee-track` (inline `animation-duration`); member chips `.member-chip.tappable` with `data-photo/name/role/bio` → photo modal partial.
- Videos: `.video-embed` with `data-yt` + `data-title`, thumbnail `img.video-thumb`, `button.video-play` (lazy youtube-nocookie embeds).
- Lightbox auto-applies to content images; excludes `.slide img`, `.marquee-track img`, `.member-chip.tappable img`, `.logo-img`, `.video-embed img`.

## Design system (public/assets/style.css)

CSS vars: brand green `--clay #2f7a3d`, `--gold #7fc47a`, `--leaf #1f7a52`, navy `--navy #0e2233`, footer `--footer-bg #5b7893`, `--radius 12px`, `--header-h 62px`. Components: `.sec`/`.sec.alt`, `.page-hero.has-photo`, `.card-grid`, `.info-card`, `.update-card`, `.event-teaser`, `.cta-band`, text utils `.display/.condensed/.mono`. Breakpoints: 1080/992 (mobile nav)/760/600/480px.

## Workflows

- Migrate + seed fresh: `php artisan migrate:fresh --seed` (seeder is idempotent; admin user must be recreated after fresh: `php artisan make:filament-user`).
- New admin-managed content type: migration → model (fillable+casts) → `php artisan make:filament-resource X --generate` → customize Schemas/Tables → controller/view wiring.
- File uploads: Filament FileUpload → `disk('public')`, directory per type; `php artisan storage:link` already done.

## Known gotchas

- `.env` DB port is **3308** (not 3306). `DB_CONNECTION=mysql` must be set explicitly.
- PowerShell: `$home` is a read-only automatic variable — don't use it in verification scripts.
- Committee archive view requires `$prev`/`$next` from `PageController::committee()`.
- Seeded press documents point at legacy `/pdfs/*.pdf` names that don't exist — real PDFs come via admin upload (replacing file_path with a storage path).
- Much member/committee content is placeholder (generic names, photos `/images/1-8.jpeg`).
- Org name varies across pages ("Students' Association" vs "Health and Safety Association") — confirm wording before mass edits.
- Deploy notes: `APP_DEBUG=false`, point Apache docroot at `/public`, keep `.env` out of git.
