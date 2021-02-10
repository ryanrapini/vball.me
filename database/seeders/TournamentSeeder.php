<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tournament;
use Carbon\Carbon;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tournament::create([
        	'name' => 'Sixes',
        	'description' => '',
        	'facility_id' => '1',
        	'owner_id' => '1',
        	'start_date' => Carbon::now(),
        	'start_time' => Carbon::now(),
        	'price' => '$20',
        	'price_type' => 'Per Person',
        	'court_type_enum' => '1',
        	'format_enum' => '1',
        	'special_traits_list' => '',
        ]);
    }
}
