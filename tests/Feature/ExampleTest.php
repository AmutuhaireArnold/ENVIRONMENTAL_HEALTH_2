<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_renders_live_upcoming_events_from_the_database(): void
    {
        Event::create([
            'title' => 'Community Safety Summit',
            'slug' => 'community-safety-summit',
            'type' => 'upcoming',
            'description' => 'A national safety forum for student leaders.',
            'starts_at' => now()->addDays(7),
            'ends_at' => now()->addDays(8),
            'location' => 'Kampala',
            'cover_image' => '/images/PHOTO.jpeg',
            'is_published' => true,
        ]);

        $response = $this->get('/');

        $response->assertOk();
        $response->assertSeeText('Community Safety Summit');
        $response->assertDontSee('Search the homepage');
    }

    public function test_homepage_shows_happening_today_events_even_when_their_start_date_is_in_the_past(): void
    {
        Event::create([
            'title' => 'World Environmental Health Day',
            'slug' => 'world-environmental-health-day',
            'type' => 'happening_today',
            'description' => 'A student awareness campaign for healthier communities.',
            'starts_at' => now()->subDay(),
            'ends_at' => now()->addDay(),
            'location' => 'Kampala',
            'cover_image' => 'events/world-health-day.jpg',
            'is_published' => true,
        ]);

        $response = $this->get('/');

        $response->assertOk();
        $response->assertSeeText('World Environmental Health Day');
        $response->assertSee('/storage/events/world-health-day.jpg', false);
    }

    public function test_homepage_section_is_for_current_and_upcoming_events(): void
    {
        Event::create([
            'title' => 'Community Safety Summit',
            'slug' => 'community-safety-summit',
            'type' => 'upcoming',
            'description' => 'A national safety forum for student leaders.',
            'starts_at' => now()->addDays(7),
            'ends_at' => now()->addDays(8),
            'location' => 'Kampala',
            'cover_image' => '/images/PHOTO.jpeg',
            'is_published' => true,
        ]);

        $response = $this->get('/');

        $response->assertOk();
        $response->assertSeeText('CURRENT & UPCOMING');
        $response->assertSeeText('What’s happening');
    }
}
