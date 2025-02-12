<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stadium',
        'team_value',
        'foundation_year',
        'president',
        'palmares',
        'city',
        'main_sponsor'
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
