<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Enums\DivisionGenderRequirement;
use App\Enums\DivisionSkillLevel;

class Division extends Model
{
    use HasFactory;

    protected $casts = [
        'gender_requirement' => DivisionGenderRequirement::class,
        'skill_level' => DivisionSkillLevel::class,
    ];
}
