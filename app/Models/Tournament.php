<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\TournamentCourtType;
use App\Enums\TournamentSpecialTraits;

class Tournament extends Model
{
    use HasFactory;

    protected $casts = [
        'court_type' => TournamentCourtType::class,
        'special_traits_list' => TournamentSpecialTraits::class.':collection,nullable',
    ];

}
