<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [
            [
                "nome" => "Marco",
                "cognome" => "Carnesecchi",
                "data_di_nascita" => "2000-07-01",
                "ruolo" => "Portiere",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.91m"
            ],
        ];
        foreach ($players as $player) {
            Player::create($player);
        }
    }
}
