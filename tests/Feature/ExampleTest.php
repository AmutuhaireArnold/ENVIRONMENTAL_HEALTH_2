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
}
