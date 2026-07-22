<?php

namespace Database\Seeders;

use App\Models\Committee;
use App\Models\Document;
use App\Models\Event;
use App\Models\MediaItem;
use App\Models\Organization;
use App\Models\Post;
use App\Models\TickerMessage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        $this->tickerMessages();
        $this->posts();
        $this->events();
        $this->documents();
        $this->mediaItems();
        $this->committees();
        $this->organizations();
    }

    private function tickerMessages(): void
    {
        $messages = [
            'FEHSU VOICES - Every Sunday',
            'AGM, 29th - August 2026',
            'EHS National Week of Service, 7th - 12th September 2026',
            'FEHSU 2026 membership registration is now open across all five tiers',
        ];

        foreach ($messages as $i => $message) {
            TickerMessage::firstOrCreate(['message' => $message], ['is_active' => true, 'sort_order' => $i]);
        }
    }

    private function posts(): void
    {
        $posts = [
            // News (from static news.html)
            ['news', 'FEHSU opens 2026 membership registration', 'The Association has opened registration across all five membership tiers for the new year.', '2026-01-14'],
            ['news', 'Quarterly OHS newsletter now available', 'The latest issue covers emerging workplace risks, regulatory updates, and member spotlights.', '2026-02-03'],
            ['news', 'FEHSU to host Annual OHS Conference in September', "Registration opens for the flagship gathering of Uganda's health and safety professionals.", '2026-03-20'],
            // Articles (from static articles-journals.html)
            ['article', 'Building a Safety Culture in Ugandan Manufacturing', 'A look at practical steps for embedding safety culture on the factory floor.', '2026-01-05'],
            ['article', "Incident Investigation: A Practitioner's Guide", 'Frameworks for root-cause analysis and corrective action planning.', '2026-02-10'],
            ['article', 'Occupational Health Trends in East Africa', 'Regional data on workplace injury rates and emerging risk categories.', '2026-03-15'],
        ];

        foreach ($posts as [$type, $title, $excerpt, $date]) {
            Post::firstOrCreate(['slug' => Str::slug($title)], [
                'title' => $title,
                'type' => $type,
                'excerpt' => $excerpt,
                'is_published' => true,
                'published_at' => $date,
            ]);
        }
    }

    private function events(): void
    {
        $events = [
            ['FEHSU VOICES Every Sunday', "FEHSU's flagship gathering of Environmental Students and professionals with panels on regulation, innovation, and industry case studies.", '2026-09-12', 'School of Public Health, Makerere University Kampala'],
            ['AGM, 29th August 2026', 'An evening of peer networking and knowledge sharing for members across all tiers.', '2026-08-29', 'Kampala'],
            ['EHS National Week of Service, 7th - 12th September 2026', 'A focused workshop on safety service standards and incident prevention in a safe environment.', '2026-09-07', 'Kampala'],
        ];

        foreach ($events as [$title, $description, $date, $location]) {
            Event::firstOrCreate(['slug' => Str::slug($title)], [
                'title' => $title,
                'type' => 'upcoming',
                'description' => $description,
                'starts_at' => $date,
                'location' => $location,
                'is_published' => true,
            ]);
        }
    }

    private function documents(): void
    {
        // Legacy PDF paths from the static press-release.html (files go in public/pdfs
        // or are replaced by admin uploads through Filament).
        $documents = [
            ['FEHSU statement on national workplace safety standards', '/pdfs/executive committee.pdf', '2026-01-05'],
            ['FEHSU welcomes new Executive Committee members', '/pdfs/new-executive-committee-members.pdf', '2026-02-18'],
            ['Joint statement with industry partners on construction safety', '/pdfs/construction-safety-joint-statement.pdf', '2026-04-09'],
        ];

        foreach ($documents as [$title, $path, $date]) {
            Document::firstOrCreate(['title' => $title], [
                'file_path' => $path,
                'category' => 'press',
                'published_at' => $date,
            ]);
        }
    }

    private function mediaItems(): void
    {
        $videos = [
            ['wVGPA0FJ9pU', 'Makerere function — Graduation Day 1'],
            ['047fQD9omfQ', 'Makerere function — Graduation Day 2'],
            ['IrOb6GacZqs', 'Makerere function — Graduation highlights'],
        ];

        foreach ($videos as $i => [$ytId, $title]) {
            MediaItem::firstOrCreate(['youtube_id' => $ytId], [
                'type' => 'youtube',
                'title' => $title,
                'sort_order' => $i,
            ]);
        }

        $images = [
            ['/images/1.jpeg', 'Safety training session'],
            ['/images/2.jpeg', 'Industrial site visit'],
            ['/images/3.jpeg', "Members' workshop"],
            ['/images/4.jpeg', 'Annual conference'],
            ['/images/5.jpeg', 'Networking evening'],
            ['/images/6.jpeg', 'Field inspection'],
            ['/images/7.jpeg', "Members' group photo"],
            ['/images/8.jpeg', 'Community outreach'],
        ];

        foreach (['01', '02', '03', '04', '05', '06', '07', '08', '09'] as $n) {
            $images[] = ["/images/{$n}.jpg", 'FEHSU members'];
        }
        $images[] = ['/images/10.JPG.jpeg', 'FEHSU members'];
        foreach (range(11, 30) as $n) {
            if ($n === 18) {
                continue; // 18.jpg does not exist in the legacy gallery
            }
            $images[] = ["/images/{$n}.jpg", 'FEHSU members'];
        }

        foreach ($images as $i => [$path, $title]) {
            MediaItem::firstOrCreate(['file_path' => $path], [
                'type' => 'image',
                'title' => $title,
                'sort_order' => 100 + $i,
            ]);
        }
    }

    private function committees(): void
    {
        $committees = [
            // slug => [name, type, term label]
            'committee-1st' => ['1st Previous Committee', 'central', '2022 – 2023'],
            'committee-2nd' => ['2nd Previous Committee', 'central', '2023 – 2024'],
            'committee-3rd' => ['3rd Previous Committee', 'central', '2024 – 2025'],
            'other-committee-1st' => ['1st Previous Committee', 'other', '2022 – 2023'],
            'other-committee-2nd' => ['2nd Previous Committee', 'other', '2023 – 2024'],
            'other-committee-3rd' => ['3rd Previous Committee', 'other', '2024 – 2025'],
        ];

        $roles = ['Chairperson', 'Vice Chairperson', 'General Secretary', 'Treasurer', 'Publicity Secretary', 'Committee Member', 'Committee Member', 'Committee Member'];

        $sort = 0;
        foreach ($committees as $slug => [$name, $type, $term]) {
            $committee = Committee::firstOrCreate(['slug' => $slug], [
                'name' => $name,
                'type' => $type,
                'term_label' => $term,
                'sort_order' => $sort++,
            ]);

            if ($committee->members()->count() === 0) {
                foreach ($roles as $i => $role) {
                    $committee->members()->create([
                        'name' => $role,
                        'role' => $name . ' · ' . $term,
                        'bio' => "Served FEHSU as {$role} during the {$term} term. Replace this placeholder with their real biography.",
                        'photo' => '/images/' . (($i % 8) + 1) . '.jpeg',
                        'sort_order' => $i,
                    ]);
                }
            }
        }
    }

    private function organizations(): void
    {
        $roles = ['Chairperson', 'Vice Chairperson', 'Secretary', 'Treasurer', 'Publicity Secretary'];

        foreach (range(1, 11) as $n) {
            $org = Organization::firstOrCreate(['slug' => "sister-org-{$n}"], [
                'name' => "Member Association {$n}",
                'type' => 'sister_org',
                'sort_order' => $n,
            ]);

            if ($org->members()->count() === 0) {
                foreach ($roles as $i => $role) {
                    $org->members()->create([
                        'name' => $role,
                        'role' => 'National Executive Committee',
                        'bio' => "Currently serves as {$role} on the National Executive Committee of Member Association {$n}. Replace this placeholder with their real biography.",
                        'photo' => '/images/' . (($i % 8) + 1) . '.jpeg',
                        'sort_order' => $i,
                    ]);
                }
            }
        }
    }
}
