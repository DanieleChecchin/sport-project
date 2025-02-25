<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shirt;

class ShirtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shirts = [
            ['img' => '1atalanta-retro.png'],
            ['img' => 'bologna-retro.png'],
            ['img' => 'cagliari-retro.png'],
            ['img' => '1comoretro.png'],
            ['img' => 'empoli-retro.png'],
            ['img' => '1fiorentinaretro.png'],
            ['img' => 'genoa-retro.png'],
            ['img' => 'verona-retro.png'],
            ['img' => '1interretro.png'],
            ['img' => '1juveretro.png'],
            ['img' => 'lazio-retro.png'],
            ['img' => 'lecce-retro.png'],
            ['img' => '1milanretro.png'],
            ['img' => 'monza-retro.png'],
            ['img' => '1napoliretro.png'],
            ['img' => 'parma-retro.png'],
            ['img' => '1romaretro.png'],
            ['img' => 'torino-retro.png'],
            ['img' => 'udinese-retro.png'],
            ['img' => 'venezia-retro.png'],

        ];

        foreach ($shirts as $shirt) {
            Shirt::create($shirt);
        }
    }
}
