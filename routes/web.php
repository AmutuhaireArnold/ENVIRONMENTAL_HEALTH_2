<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// CHANGED: replaced the default welcome route with the full FEHSU site routes.
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home'])->name('home');

// SEO: XML sitemap for search engines
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Static content pages
Route::view('/history', 'pages.history')->name('history');
Route::view('/objectives', 'pages.objectives')->name('objectives');
Route::view('/member-value-benefits', 'pages.member-value-benefits')->name('member-value-benefits');
Route::view('/member-options', 'pages.member-options')->name('member-options');
Route::view('/corporate', 'pages.corporate')->name('corporate');
Route::view('/committees', 'pages.committees')->name('committees');
Route::view('/partners', 'pages.partners')->name('partners');
Route::view('/associations', 'pages.associations')->name('associations');
Route::view('/events', 'pages.events')->name('events');
Route::view('/programs', 'pages.programs')->name('programs');
Route::view('/standard', 'pages.standard')->name('standard');
Route::view('/resources', 'pages.resources')->name('resources');
Route::view('/contact', 'pages.contact')->name('contact');

// Database-driven pages
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/press-release', [PageController::class, 'pressReleases'])->name('press-release');
Route::get('/articles-journals', [PageController::class, 'articles'])->name('articles-journals');
Route::get('/upcoming-events', [PageController::class, 'upcomingEvents'])->name('upcoming-events');
Route::get('/media', [PageController::class, 'media'])->name('media');

// Dynamic archive/association pages
Route::get('/committees/{slug}', [PageController::class, 'committee'])->name('committee.show');
Route::get('/associations/{slug}', [PageController::class, 'organization'])->name('organization.show');

// Legacy static-site URLs (bookmark safety): *.html -> new routes
Route::get('/{page}.html', function (string $page) {
    if ($page === 'index') {
        return redirect('/', 301);
    }
    if (preg_match('/^(committee|other-committee)-\w+$/', $page)) {
        return redirect("/committees/{$page}", 301);
    }
    if (preg_match('/^sister-org-\d+$/', $page)) {
        return redirect("/associations/{$page}", 301);
    }

    return redirect('/' . $page, 301);
})->where('page', '[A-Za-z0-9\-]+');
