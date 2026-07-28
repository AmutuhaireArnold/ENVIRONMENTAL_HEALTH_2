<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Document;
use App\Models\Event;
use App\Models\MediaItem;
use App\Models\Organization;
use App\Models\Post;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'videos' => MediaItem::where('type', 'youtube')->orderBy('sort_order')->limit(3)->get(),
            'upcoming' => Event::where('is_published', true)->where('type', 'upcoming')->orderBy('starts_at')->limit(3)->get(),
            'updates' => Post::where('is_published', true)->orderByDesc('published_at')->limit(3)->get(),
            'cecMembers' => Committee::where('slug', 'central-executive')->first()?->members ?? collect(),
        ]);
    }

    public function corporate()
    {
        return view('pages.corporate', [
            'cecMembers' => Committee::where('slug', 'central-executive')->first()?->members ?? collect(),
        ]);
    }

    public function associationsPage()
    {
        return view('pages.associations', [
            'advisoryMembers' => Committee::where('slug', 'advisory-board')->first()?->members ?? collect(),
        ]);
    }

    public function committeesPage()
    {
        $photoUrl = fn (?string $p) => $p
            ? (str_starts_with($p, '/') ? $p : '/storage/' . $p)
            : '/images/PHOTO.jpeg';

        $assocChart = Organization::where('type', 'sister_org')
            ->orderBy('sort_order')
            ->with('members')
            ->get()
            ->map(function (Organization $org) use ($photoUrl) {
                $people = $org->members->map(fn ($m) => [
                    'photo' => $photoUrl($m->photo),
                    'name' => $m->name,
                    'post' => strtoupper($m->role ?? 'MEMBER'),
                    'school' => (is_string($m->bio) && mb_strlen($m->bio) <= 60) ? $m->bio : $org->name,
                ])->values();

                return [
                    'id' => $org->slug,
                    'short' => $org->name,
                    'name' => $org->description ?: 'Member Association',
                    'logo' => $photoUrl($org->logo),
                    'president' => $people->first(),
                    'officers' => $people->slice(1)->values(),
                ];
            })
            ->filter(fn ($a) => $a['president'] !== null)
            ->values();

        return view('pages.committees', ['assocChart' => $assocChart]);
    }

    public function news()
    {
        return view('pages.news', [
            'posts' => Post::where('is_published', true)->where('type', 'news')->orderByDesc('published_at')->get(),
        ]);
    }

    public function articles()
    {
        return view('pages.articles-journals', [
            'posts' => Post::where('is_published', true)->where('type', 'article')->orderByDesc('published_at')->get(),
        ]);
    }

    public function pressReleases()
    {
        return view('pages.press-release', [
            'documents' => Document::where('category', 'press')->orderByDesc('published_at')->get(),
            'posts' => Post::where('is_published', true)->where('type', 'press_release')->orderByDesc('published_at')->get(),
        ]);
    }

    public function events()
    {
        return view('pages.events', [
            'allEvents' => Event::where('is_published', true)->orderByDesc('starts_at')->get(),
        ]);
    }

    public function programs()
    {
        return view('pages.programs', [
            'programs' => Event::where('is_published', true)->where('type', 'program')->orderByDesc('starts_at')->get(),
        ]);
    }

    public function standard()
    {
        return view('pages.standard', [
            'documents' => Document::where('category', 'standard')->orderByDesc('published_at')->get(),
        ]);
    }

    public function resources()
    {
        return view('pages.resources', [
            'latestPosts' => Post::where('is_published', true)->orderByDesc('published_at')->limit(4)->get(),
            'documents' => Document::where('category', 'resource')->orderByDesc('published_at')->get(),
        ]);
    }

    public function upcomingEvents()
    {
        return view('pages.upcoming-events', [
            'events' => Event::where('is_published', true)->where('type', 'upcoming')->orderBy('starts_at')->get(),
        ]);
    }

    public function media()
    {
        return view('pages.media', [
            'images' => MediaItem::where('type', 'image')->orderBy('sort_order')->get(),
            'videos' => MediaItem::where('type', 'youtube')->orderBy('sort_order')->get(),
        ]);
    }

    public function committee(string $slug)
    {
        $committee = Committee::where('slug', $slug)->with('members')->firstOrFail();

        return view('pages.committee-archive', [
            'committee' => $committee,
            'prev' => Committee::where('type', $committee->type)->where('sort_order', '<', $committee->sort_order)->orderByDesc('sort_order')->first(),
            'next' => Committee::where('type', $committee->type)->where('sort_order', '>', $committee->sort_order)->orderBy('sort_order')->first(),
        ]);
    }

    public function organization(string $slug)
    {
        return view('pages.organization', [
            'organization' => Organization::where('slug', $slug)->with('members')->firstOrFail(),
        ]);
    }
}
