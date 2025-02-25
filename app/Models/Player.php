<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'role',
        'nationality',
        'market_value',
        'fav_foot',
        'height',
        'team_id',
        'coach_id',
        'shirt_id',
    ];

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
