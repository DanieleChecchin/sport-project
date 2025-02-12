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
        'trophies',
        'date_of_birth',
        'description',
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
