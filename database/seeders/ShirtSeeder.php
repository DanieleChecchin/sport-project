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
            ['img' => 'atalanta.png'],
            ['img' => 'bologna.png'],
            ['img' => 'cagliari.png'],
            ['img' => 'como.png'],
            ['img' => 'empoli.png'],
            ['img' => 'fiorentina.png'],
            ['img' => 'genoa.png'],
            ['img' => 'verona.png'],
            ['img' => 'inter.png'],
            ['img' => 'juventus.png'],
            ['img' => 'lazio.png'],
            ['img' => 'lecce.png'],
            ['img' => 'milan.png'],
            ['img' => 'monza.png'],
            ['img' => 'napoli.png'],
            ['img' => 'parma.png'],
            ['img' => 'roma.png'],
            ['img' => 'torino.png'],
            ['img' => 'udinese.png'],
            ['img' => 'venezia.png'],

        ];

        foreach ($shirts as $shirt) {
            Shirt::create($shirt);
        }
    }
}
