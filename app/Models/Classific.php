<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classific extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_name', 'points', 'played', 'wins', 'draws', 'losses', 
        'goals_for', 'goals_against', 'goal_difference', 'image'
    ];
}
