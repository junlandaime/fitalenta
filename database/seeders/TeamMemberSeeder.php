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
            ['name' => 'Agus Ismail S.T., M.B.A', 'position' => 'HR and Sales Expert', 'bio' => '-', 'image' => 'team-members/Agus Ismail.png', 'order' => 1, 'is_active' => true],

        ];

        foreach ($teams as $team) {
            TeamMember::create($team);
        }
    }
}
