<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Organization;
use App\Models\Post;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [];

        // Static + listing routes with a priority and change frequency.
        $staticRoutes = [
            ['/', '1.0', 'weekly'],
            ['/history', '0.6', 'yearly'],
            ['/objectives', '0.6', 'yearly'],
            ['/member-value-benefits', '0.7', 'monthly'],
            ['/member-options', '0.8', 'monthly'],
            ['/corporate', '0.7', 'monthly'],
            ['/committees', '0.7', 'monthly'],
            ['/partners', '0.6', 'monthly'],
            ['/associations', '0.7', 'monthly'],
            ['/events', '0.7', 'weekly'],
            ['/programs', '0.6', 'monthly'],
            ['/upcoming-events', '0.8', 'weekly'],
            ['/news', '0.9', 'weekly'],
            ['/press-release', '0.7', 'weekly'],
            ['/articles-journals', '0.7', 'weekly'],
            ['/media', '0.6', 'weekly'],
            ['/standard', '0.5', 'yearly'],
            ['/resources', '0.6', 'monthly'],
            ['/contact', '0.6', 'yearly'],
        ];

        foreach ($staticRoutes as [$path, $priority, $freq]) {
            $urls[] = [
                'loc' => url($path),
                'lastmod' => now()->toAtomString(),
                'changefreq' => $freq,
                'priority' => $priority,
            ];
        }

        // Dynamic committee archive pages.
        foreach (Committee::all() as $committee) {
            $urls[] = [
                'loc' => url('/committees/' . $committee->slug),
                'lastmod' => optional($committee->updated_at)->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ];
        }

        // Dynamic member-association pages.
        foreach (Organization::all() as $org) {
            $urls[] = [
                'loc' => url('/associations/' . $org->slug),
                'lastmod' => optional($org->updated_at)->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ];
        }

        // Most recent content drives the homepage lastmod signal.
        $latestPost = Post::where('is_published', true)->max('updated_at');
        if ($latestPost) {
            $urls[0]['lastmod'] = Carbon::parse($latestPost)->toAtomString();
        }

        return response()
            ->view('sitemap', ['urls' => $urls])
            ->header('Content-Type', 'application/xml');
    }
}
