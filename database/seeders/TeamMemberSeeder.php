<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run()
    {
        // TeamMember::factory()->count(10)->create();

        $teams = [
            ['name' => 'Agus Ismail S.T., M.B.A', 'position' => 'HR and Sales Expert', 'bio' => '-', 'image' => 'team-members/Agus Ismail, S.T., MBA - HR and Sales Expert.png', 'order' => 1, 'is_active' => true],

            ['name' => 'Achmad Zakaria, S.Si', 'position' => 'Leadership Expert', 'bio' => '-', 'image' => 'team-members/Achmad Zakaria, S.Si - Leadership Expert.png', 'order' => 3, 'is_active' => true],
            ['name' => 'Anindya Wadhani, S.T. MBA', 'position' => 'Personal Branding Expert', 'bio' => '-', 'image' => 'team-members/Anindya K. Wardhani, S.T., MBA - Personal Branding Expert.png', 'order' => 4, 'is_active' => true],
            ['name' => 'Widyani Rochmatin', 'position' => 'Corporate Trainer and Consultant', 'bio' => '-', 'image' => 'team-members/foto_widyati_rochmatin-removebg-preview.png', 'order' => 5, 'is_active' => true],
            ['name' => 'Nano Sutrisno', 'position' => 'B2B Sales Expert', 'bio' => '-', 'image' => 'team-members/Nano Sutrisno - B2B Sales Expert.png', 'order' => 6, 'is_active' => true],
            ['name' => 'Rendra Arjakusumah', 'position' => 'Telemarketing Expert', 'bio' => '-', 'image' => 'team-members/pak_rendra_foto-removebg-preview.png', 'order' => 7, 'is_active' => true],
            ['name' => 'Trisna Hadi', 'position' => 'Digital Marketing Expert', 'bio' => '-', 'image' => 'team-members/trisna_hadi_foto-removebg-preview.png', 'order' => 8, 'is_active' => true],
            // ['name' => '', 'position' => '', 'bio' => '-', 'image' => 'team-members/', 'order' => 9, 'is_active' => true],
            // ['name' => '', 'position' => '', 'bio' => '-', 'image' => 'team-members/', 'order' => 10, 'is_active' => true],
            // ['name' => '', 'position' => '', 'bio' => '-', 'image' => 'team-members/', 'order' => 11, 'is_active' => true],
            // ['name' => '', 'position' => '', 'bio' => '-', 'image' => 'team-members/', 'order' => 12, 'is_active' => true],

        ];

        foreach ($teams as $team) {
            TeamMember::create($team);
        }
    }
}
