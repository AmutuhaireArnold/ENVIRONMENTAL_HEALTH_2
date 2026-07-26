<?php

namespace Database\Seeders;

use App\Models\Committee;
use App\Models\Member;
use App\Models\Organization;
use Illuminate\Database\Seeder;

/**
 * Migrates the leadership data that used to be hardcoded in the Blade views
 * (corporate page CEC, homepage leadership marquee, associations-page advisory
 * board, and the committees-page association chart JS array) into the database
 * so it is all manageable from the admin panel. Idempotent.
 */
class LeadershipSeeder extends Seeder
{
    public function run(): void
    {
        $this->centralExecutive();
        $this->advisoryBoard();
        $this->associationExecutives();
    }

    private function centralExecutive(): void
    {
        $cec = Committee::firstOrCreate(['slug' => 'central-executive'], [
            'name' => 'Central Executive Committee',
            'type' => 'central',
            'term_label' => 'Current Term',
            'description' => "The elected officers currently running FEHSU's day-to-day affairs.",
            'sort_order' => 0,
        ]);

        if ($cec->members()->count() > 0) {
            return;
        }

        $members = [
            ['Agumenawe Nichodemus', 'President -MakSPH', '/images/CEC/dama.jpg', "President of FEHSU — leads FEHSU's overall strategy and represents the federation at national and international forums."],
            ['Kainomugisha Denise', 'Minister For External Affairs -MakSPH', '/images/CEC/denise.jpg', 'Supports the President and steps in on their behalf when needed on external affairs.'],
            ['Magomu Jonah Cornelinus', 'Projects Minister -MakSPH', '/images/CEC/JONA.jpg', "Oversees FEHSU's projects, records and correspondence."],
            ['Alafi Abdul Rahuman', 'Internal Minister -MSOHESHA', '/images/CEC/Abdul.jpg', '14th Deputy Guild Speaker SOH-MBALE, Internal Minister MSOHESHA, a Rotaractor and youth leader.'],
            ['Auma Joan Angel', 'Finance Minister -UIAHMSM', '/images/CEC/Joan.jpg', 'From Uganda Institute of Allied Health Sciences Mulago — passionate about accountable leadership, financial stewardship and student empowerment.'],
            ['Muhindo Edgar', 'Internal Minister -BEHSA', '/images/CEC/Edgar.jpg', 'Representative BEHSA — a dedicated Environmental Health student with a passion for teamwork.'],
            ['Nampwera Rebecca', 'Internal Affairs Minister -UIAHMS MULAGO', '/images/CEC/nampwera.jpg', 'Internal Affairs Minister from UIAHMS Mulago.'],
            ['Namwanga Maria Assumpta', 'Internal Minister -MakSPH', '/images/CEC/assumpita.jpg', 'Contributes to committee decisions and represents member interests.'],
        ];

        foreach ($members as $i => [$name, $role, $photo, $bio]) {
            $cec->members()->create([
                'name' => $name,
                'role' => $role,
                'photo' => $photo,
                'bio' => $bio,
                'sort_order' => $i,
            ]);
        }
    }

    private function advisoryBoard(): void
    {
        $board = Committee::firstOrCreate(['slug' => 'advisory-board'], [
            'name' => 'Advisory Board',
            'type' => 'other',
            'term_label' => 'Standing',
            'description' => "Experienced professionals who guide FEHSU's strategy and represent the federation externally.",
            'sort_order' => 99,
        ]);

        if ($board->members()->count() > 0) {
            return;
        }

        foreach ([4, 5, 6, 7, 8, 1] as $i => $img) {
            $board->members()->create([
                'name' => 'Advisory Member',
                'role' => 'Advisory Board',
                'photo' => "/images/{$img}.jpeg",
                'bio' => "Guides FEHSU's strategy and represents the federation externally as part of the Advisory Board. Replace this placeholder with their real biography.",
                'sort_order' => $i,
            ]);
        }
    }

    private function associationExecutives(): void
    {
        // slug => [short name, logo, [members: name, role(post), photo, school]]
        // First member (sort 0) is the association president shown at the top of the chart.
        $associations = [
            'sister-org-1' => ['MMUPHSA', '/images/PHS.png', [
                ['Ahimbisibwe Edgar', 'President', '/images/CEC/edgar-moonZ.jpg', 'SPH-MMU'],
                ['Nakigozi Ester', 'Vice President', '/images/CEC/nakigozi-moons.jpg', 'SPH-MMU'],
                ['Ochela Bright', 'Academic Secretary', '/images/CEC/bright-moons.jpg', 'SPH-MMU'],
                ['Lubuulwa Latifu', 'Justice and Constitutional Affairs', '/images/CEC/latif-moons.jpg', 'SPH-MMU'],
                ['Uwimana Justine', 'Finance Secretary', '/images/CEC/just-moons.jpg', 'SPH-MMU'],
                ['Nalubega Kauthara', 'Events Coordinator', '/images/CEC/nalubega-moons.jpg', 'SPH-MMU'],
                ['Akandwanaho Raymond', 'General Secretary', '/images/CEC/raymond-moons.jpg', 'SPS-MMU'],
                ['Katungi Kenneth', "Postgraduate Students' Representative", '/images/CEC/keneth-moons.jpg', 'SPS-MMU'],
                ['Bukenya John', 'Publicity Secretary', '/images/PHOTO.jpeg', 'SPH-MMU'],
            ]],
            'sister-org-2' => ['MUEHSA', '/images/MUEHSA.png', [
                ['Agumenawe Nichodemus', 'President', '/images/CEC/dama.jpg', 'FEHSU -Makerere University'],
                ['Kainomugisha Denise', 'General Secretary', '/images/CEC/denise.jpg', 'FEHSU -Makerere University'],
                ['Auma Joan Angel', 'Finance Minister', '/images/CEC/Joan.jpg', 'FEHSU -Makerere University'],
                ['Alafi Abdul Rahuman', 'Minister for External Affairs', '/images/CEC/Abdul.jpg', 'FEHSU -Makerere University'],
                ['Muhindo Edgar', 'Publicity Minister', '/images/CEC/Edgar.jpg', 'FEHSU -Makerere University'],
                ['Magomu Jonah Cornelinus', 'Projects Minister', '/images/CEC/JONA.jpg', 'FEHSU -Makerere University'],
                ['Nampwera Rebecca', 'Internal Minister', '/images/CEC/nampwera.jpg', 'FEHSU -Makerere University'],
                ['Namwanga Maria Assumpta', 'Internal Minister', '/images/CEC/assumpita.jpg', 'FEHSU -Makerere University'],
            ]],
            'sister-org-3' => ['MEHSA', '/images/MEHSA.JPG', [
                ['Mujurizi Emmanuel', 'President', '/images/CEC/president-mehsa.jpg', 'MEHSA-UIAHMS-MULAGO'],
                ['Nalugwa Lynette Cate', 'Speaker', '/images/CEC/nalugwa.jpg', 'MEHSA-UIAHMS-MULAGO'],
                ['Auma Joan Angel', 'Finance Minister', '/images/CEC/Joan.jpg', 'MEHSA-UIAHMS-MULAGO'],
                ['Alafi Abdul Rahuman', 'Minister for External Affairs', '/images/CEC/Abdul.jpg', 'MEHSA-UIAHMS-MULAGO'],
                ['Muhindo Edgar', 'Publicity Minister', '/images/CEC/Edgar.jpg', 'MEHSA-UIAHMS-MULAGO'],
                ['Magomu Jonah Cornelinus', 'Projects Minister', '/images/CEC/JONA.jpg', 'MEHSA-UIAHMS-MULAGO'],
                ['Nampwera Rebecca', 'Internal Minister', '/images/CEC/nampwera.jpg', 'MEHSA-UIAHMS-MULAGO'],
            ]],
            'sister-org-4' => ['FEHSU', '/images/PHOTO.jpeg', [
                ['Agumenawe Nichodemus', 'President', '/images/CEC/dama.jpg', 'FEHSU -Makerere University'],
                ['Kainomugisha Denise', 'Minister for External Affairs', '/images/CEC/denise.jpg', 'FEHSU -Makerere University'],
                ['Auma Joan Angel', 'Finance Minister', '/images/CEC/Joan.jpg', 'UIAHMS-MULAGO'],
                ['Alafi Abdul Rahuman', 'Minister for External Affairs', '/images/CEC/Abdul.jpg', 'MSOHESHA'],
                ['Muhindo Edgar', 'Publicity Minister', '/images/CEC/Edgar.jpg', 'BEHSA'],
                ['Magomu Jonah Cornelinus', 'Projects Minister', '/images/CEC/JONA.jpg', 'FEHSU -Makerere University'],
                ['Nampwera Rebecca', 'Internal Minister', '/images/CEC/nampwera.jpg', 'UIAHMSM'],
                ['Namwanga Maria Assumpta', 'Internal Minister', '/images/CEC/assumpita.jpg', 'FEHSU -Makerere University'],
            ]],
            'sister-org-5' => ['BWERA', null, []],
        ];

        foreach ($associations as $slug => [$short, $logo, $members]) {
            $org = Organization::where('slug', $slug)->first();
            if (! $org) {
                continue;
            }

            // Only rename orgs still carrying the generic seeded name.
            if (str_starts_with($org->name, 'Member Association')) {
                $org->update([
                    'name' => $short,
                    'description' => $org->description ?: 'Member Association',
                    'logo' => $logo ?? $org->logo,
                ]);
            }

            if (empty($members)) {
                continue;
            }

            // Replace generic placeholder members with the real executives.
            $org->members()->where('bio', 'like', '%Replace this placeholder%')->delete();

            if ($org->members()->count() === 0) {
                foreach ($members as $i => [$name, $role, $photo, $school]) {
                    $org->members()->create([
                        'name' => $name,
                        'role' => $role,
                        'photo' => $photo,
                        'bio' => $school,
                        'sort_order' => $i,
                    ]);
                }
            }
        }
    }
}
