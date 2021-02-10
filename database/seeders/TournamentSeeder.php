<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tournament;
use Carbon\Carbon;
use App\Enums\TournamentCourtType;
use App\Enums\TournamentSpecialTraits;
use App\Enums\TournamentFormat;

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
            'court_type' => TournamentCourtType::hardcourt(),
            'format' => TournamentFormat::standard(),
            'special_traits_list' => [TournamentSpecialTraits::shorties(),TournamentSpecialTraits::glow()],
        ]);

        Tournament::create([
            'name' => 'Raising money for brittany\'s tesla',
            'description' => 'This is a tournament give us all your money',
            'facility_id' => '1',
            'owner_id' => null,
            'start_date' => Carbon::now(),
            'start_time' => Carbon::now(),
            'price' => '$1000000',
            'price_type' => 'Per Person',
            'court_type' => TournamentCourtType::grass(),
            'format' => TournamentFormat::standard(),
            'special_traits_list' => null,
        ]);
    }
}
