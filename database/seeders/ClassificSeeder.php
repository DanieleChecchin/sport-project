<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classific;

class ClassificSeeder extends Seeder
{
    public function run()
    {
        $classifics = [
            ['team_name' => 'Napoli', 'image' => 'napoli-logo.png', 'points' => 57, 'played' => 27, 'wins' => 17, 'draws' => 6, 'losses' => 4, 'goals_for' => 43, 'goals_against' => 22, 'goal_difference' => 21],
            ['team_name' => 'Inter', 'image' => 'inter.webp', 'points' => 58, 'played' => 27, 'wins' => 17, 'draws' => 7, 'losses' => 3, 'goals_for' => 60, 'goals_against' => 25, 'goal_difference' => 35],
            ['team_name' => 'Atalanta', 'image' => 'atalanta.webp', 'points' => 55, 'played' => 27, 'wins' => 16, 'draws' => 7, 'losses' => 4, 'goals_for' => 59, 'goals_against' => 26, 'goal_difference' => 33],
            ['team_name' => 'Juventus', 'image' => 'juve.png', 'points' => 52, 'played' => 27, 'wins' => 13, 'draws' => 13, 'losses' => 1, 'goals_for' => 45, 'goals_against' => 21, 'goal_difference' => 24],
            ['team_name' => 'Lazio', 'image' => 'lazio.webp', 'points' => 50, 'played' => 27, 'wins' => 15, 'draws' => 5, 'losses' => 7, 'goals_for' => 49, 'goals_against' => 35, 'goal_difference' => 14],
            ['team_name' => 'Roma', 'image' => 'roma.webp', 'points' => 43, 'played' => 27, 'wins' => 12, 'draws' => 7, 'losses' => 8, 'goals_for' => 42, 'goals_against' => 30, 'goal_difference' => 12],
            ['team_name' => 'Milan', 'image' => 'milan.webp', 'points' => 41, 'played' => 27, 'wins' => 11, 'draws' => 8, 'losses' => 8, 'goals_for' => 39, 'goals_against' => 30, 'goal_difference' => 9],
            ['team_name' => 'Fiorentina', 'image' => 'fiorentina.webp', 'points' => 45, 'played' => 27, 'wins' => 13, 'draws' => 6, 'losses' => 8, 'goals_for' => 42, 'goals_against' => 28, 'goal_difference' => 14,],
            ['team_name' => 'Torino', 'image' => 'torino.webp', 'points' => 34, 'played' => 27, 'wins' => 8, 'draws' => 10, 'losses' => 9, 'goals_for' => 31, 'goals_against' => 32, 'goal_difference' => -1,],
            ['team_name' => 'Como', 'image' => 'como.webp', 'points' => 28, 'played' => 27, 'wins' => 7, 'draws' => 7, 'losses' => 13, 'goals_for' => 33, 'goals_against' => 43, 'goal_difference' => -10,],
            ['team_name' => 'Udinese', 'image' => 'udinese.webp', 'points' => 39, 'played' => 27, 'wins' => 11, 'draws' => 6, 'losses' => 10, 'goals_for' => 34, 'goals_against' => 37, 'goal_difference' => -3],
            ['team_name' => 'Bologna', 'image' => 'bologna.webp', 'points' => 47, 'played' => 27, 'wins' => 12, 'draws' => 11, 'losses' => 4, 'goals_for' => 42, 'goals_against' => 33, 'goal_difference' => 9],
            ['team_name' => 'Genoa', 'image' => 'GENOA-1.webp', 'points' => 31, 'played' => 27, 'wins' => 7, 'draws' => 10, 'losses' => 10, 'goals_for' => 25, 'goals_against' => 35, 'goal_difference' => -10],
            ['team_name' => 'Parma', 'image' => 'parmalogo.webp', 'points' => 23, 'played' => 27, 'wins' => 5, 'draws' => 8, 'losses' => 14, 'goals_for' => 32, 'goals_against' => 46, 'goal_difference' => -14],
            ['team_name' => 'Cagliari', 'image' => 'cagliari.webp', 'points' => 27, 'played' => 27, 'wins' => 6, 'draws' => 7, 'losses' => 14, 'goals_for' => 27, 'goals_against' => 42, 'goal_difference' => -15],
            ['team_name' => 'Verona', 'image' => 'verona.webp', 'points' => 26, 'played' => 27, 'wins' => 8, 'draws' => 2, 'losses' => 17, 'goals_for' => 27, 'goals_against' => 56, 'goal_difference' => -29],
            ['team_name' => 'Empoli', 'image' => 'empoli.webp', 'points' => 22, 'played' => 27, 'wins' => 4, 'draws' => 10, 'losses' => 13, 'goals_for' => 23, 'goals_against' => 44, 'goal_difference' => -21],
            ['team_name' => 'Lecce', 'image' => 'lecce.webp', 'points' => 27, 'played' => 27, 'wins' => 6, 'draws' => 7, 'losses' => 14, 'goals_for' => 18, 'goals_against' => 43, 'goal_difference' => -25],
            ['team_name' => 'Venezia', 'image' => 'Logo-Venezia.webp', 'points' => 18, 'played' => 27, 'wins' => 3, 'draws' => 9, 'losses' => 15, 'goals_for' => 22, 'goals_against' => 41, 'goal_difference' => -19],
            ['team_name' => 'Monza', 'image' => 'monza.webp', 'points' => 14, 'played' => 27, 'wins' => 2, 'draws' => 8, 'losses' => 17, 'goals_for' => 21, 'goals_against' => 45, 'goal_difference' => -24],
        ];

        foreach ($classifics as $classific) {
            Classific::create($classific);
        }
    }
}


