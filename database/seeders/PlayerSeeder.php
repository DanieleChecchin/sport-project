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
                "altezza" => "1.91m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fc8/CRNMR1.png?webp&q=100&ch=840&size=609x-"

            ],
            [
                "nome" => "Francesco",
                "cognome" => "Rossi",
                "data_di_nascita" => "1991-04-27",
                "ruolo" => "Portiere",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€100k",
                "piede_preferito" => "Destro",
                "altezza" => "1.85m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fbd/RSSFN.png?webp&q=100&ch=840&size=-x444"
            ],
        ];
        foreach ($players as $player) {
            Player::create($player);
        }
    }
}
