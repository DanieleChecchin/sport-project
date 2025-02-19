<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'nationality',
        'nationality_logo',
        'trophies',
        'date_of_birth',
        'description',
        'img',
        'team',
        'team_logo'
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
