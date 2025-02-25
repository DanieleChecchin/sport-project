<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shirt extends Model
{
    use HasFactory;

    protected $fillable = [
        'img'
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
