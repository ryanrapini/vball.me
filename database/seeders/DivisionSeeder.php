<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Division;

use App\Enums\DivisionGenderRequirement;
use App\Enums\DivisionSkillLevel;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::create([
        	'tournament_id' => '1',
        	'team_size_requirement' => '6',
        	'gender_requirement' => DivisionGenderRequirement::mens(),
        	'skill_level' => DivisionSkillLevel::c(),
        ]);
        Division::create([
        	'tournament_id' => '1',
        	'team_size_requirement' => '6',
        	'gender_requirement' => DivisionGenderRequirement::mens(),
        	'skill_level' => DivisionSkillLevel::b(),
        ]);
        Division::create([
        	'tournament_id' => '1',
        	'team_size_requirement' => '6',
        	'gender_requirement' => DivisionGenderRequirement::mens(),
        	'skill_level' => DivisionSkillLevel::a(),
        ]);
        Division::create([
        	'tournament_id' => '1',
        	'team_size_requirement' => '6',
        	'gender_requirement' => DivisionGenderRequirement::womens(),
        	'skill_level' => DivisionSkillLevel::c(),
        ]);
        Division::create([
        	'tournament_id' => '1',
        	'team_size_requirement' => '6',
        	'gender_requirement' => DivisionGenderRequirement::womens(),
        	'skill_level' => DivisionSkillLevel::b(),
        ]);
        Division::create([
        	'tournament_id' => '1',
        	'team_size_requirement' => '6',
        	'gender_requirement' => DivisionGenderRequirement::womens(),
        	'skill_level' => DivisionSkillLevel::a(),
        ]);


        Division::create([
        	'tournament_id' => '2',
        	'team_size_requirement' => '4',
        	'gender_requirement' => DivisionGenderRequirement::mens(),
        	'skill_level' => DivisionSkillLevel::open(),
        ]);
        Division::create([
        	'tournament_id' => '2',
        	'team_size_requirement' => '4',
        	'gender_requirement' => DivisionGenderRequirement::mens(),
        	'skill_level' => DivisionSkillLevel::aa(),
        ]);
        Division::create([
        	'tournament_id' => '2',
        	'team_size_requirement' => '4',
        	'gender_requirement' => DivisionGenderRequirement::mens(),
        	'skill_level' => DivisionSkillLevel::rec(),
        ]);
        Division::create([
        	'tournament_id' => '2',
        	'team_size_requirement' => '4',
        	'gender_requirement' => DivisionGenderRequirement::womens(),
        	'skill_level' => DivisionSkillLevel::open(),
        ]);
        Division::create([
        	'tournament_id' => '2',
        	'team_size_requirement' => '4',
        	'gender_requirement' => DivisionGenderRequirement::womens(),
        	'skill_level' => DivisionSkillLevel::bb(),
        ]);
        Division::create([
        	'tournament_id' => '2',
        	'team_size_requirement' => '4',
        	'gender_requirement' => DivisionGenderRequirement::womens(),
        	'skill_level' => DivisionSkillLevel::rec(),
        ]);
    }
}
