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
        ]);
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
