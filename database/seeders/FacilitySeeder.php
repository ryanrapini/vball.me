<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facility::create([
        	'name' => 'Force Sports',
        	'description' => '',
        	'address' => '',
        	'court_types_list' => '1,2',
        ]);
    }
}
