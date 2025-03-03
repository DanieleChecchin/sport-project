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
            ['team_name' => 'Napoli', 'image' => 'napoli-logo.png', 'points' => 56, 'played' => 25, 'wins' => 17, 'draws' => 5, 'losses' => 3, 'goals_for' => 50, 'goals_against' => 20, 'goal_difference' => 30],
            ['team_name' => 'Inter', 'image' => 'inter.webp', 'points' => 57, 'played' => 25, 'wins' => 17, 'draws' => 3, 'losses' => 5, 'goals_for' => 48, 'goals_against' => 22, 'goal_difference' => 26],
            ['team_name' => 'Atalanta', 'image' => 'atalanta.webp', 'points' => 54, 'played' => 25, 'wins' => 15, 'draws' => 5, 'losses' => 5, 'goals_for' => 45, 'goals_against' => 25, 'goal_difference' => 20],
            ['team_name' => 'Juventus', 'image' => 'juve.png', 'points' => 49, 'played' => 25, 'wins' => 14, 'draws' => 6, 'losses' => 5, 'goals_for' => 40, 'goals_against' => 22, 'goal_difference' => 18],
            ['team_name' => 'Lazio', 'image' => 'lazio.webp', 'points' => 47, 'played' => 25, 'wins' => 13, 'draws' => 7, 'losses' => 5, 'goals_for' => 38, 'goals_against' => 24, 'goal_difference' => 14],
            ['team_name' => 'Roma', 'image' => 'roma.webp', 'points' => 40, 'played' => 25, 'wins' => 12, 'draws' => 8, 'losses' => 5, 'goals_for' => 36, 'goals_against' => 26, 'goal_difference' => 10,],
            ['team_name' => 'Milan', 'image' => 'milan.webp', 'points' => 41, 'played' => 25, 'wins' => 12, 'draws' => 6, 'losses' => 7, 'goals_for' => 35, 'goals_against' => 28, 'goal_difference' => 7,],
            ['team_name' => 'Fiorentina', 'image' => 'fiorentina.webp', 'points' => 42, 'played' => 25, 'wins' => 10, 'draws' => 8, 'losses' => 7, 'goals_for' => 32, 'goals_against' => 30, 'goal_difference' => 2,],
            ['team_name' => 'Torino', 'image' => 'torino.webp', 'points' => 31, 'played' => 25, 'wins' => 9, 'draws' => 9, 'losses' => 7, 'goals_for' => 30, 'goals_against' => 28, 'goal_difference' => 2,],
            ['team_name' => 'Como', 'image' => 'como.webp', 'points' => 28, 'played' => 25, 'wins' => 9, 'draws' => 7, 'losses' => 9, 'goals_for' => 31, 'goals_against' => 32, 'goal_difference' => -1,],
            ['team_name' => 'Udinese', 'image' => 'udinese.webp', 'points' => 36, 'played' => 25, 'wins' => 8, 'draws' => 8, 'losses' => 9, 'goals_for' => 28, 'goals_against' => 30, 'goal_difference' => -2,],
            ['team_name' => 'Bologna', 'image' => 'bologna.webp', 'points' => 41, 'played' => 25, 'wins' => 8, 'draws' => 7, 'losses' => 10, 'goals_for' => 27, 'goals_against' => 31, 'goal_difference' => -4,],
            ['team_name' => 'Genoa', 'image' => 'GENOA-1.webp', 'points' => 30, 'played' => 25, 'wins' => 7, 'draws' => 9, 'losses' => 9, 'goals_for' => 26, 'goals_against' => 30, 'goal_difference' => -4,],
            ['team_name' => 'Parma', 'image' => 'parmalogo.webp', 'points' => 23, 'played' => 25, 'wins' => 7, 'draws' => 8, 'losses' => 10, 'goals_for' => 25, 'goals_against' => 32, 'goal_difference' => -7,],
            ['team_name' => 'Cagliari', 'image' => 'cagliari.webp', 'points' => 25, 'played' => 25, 'wins' => 6, 'draws' => 9, 'losses' => 10, 'goals_for' => 24, 'goals_against' => 33, 'goal_difference' => -9,],
            ['team_name' => 'Verona', 'image' => 'verona.webp', 'points' => 26, 'played' => 25, 'wins' => 6, 'draws' => 8, 'losses' => 11, 'goals_for' => 23, 'goals_against' => 34, 'goal_difference' => -11,],
            ['team_name' => 'Empoli', 'image' => 'empoli.webp', 'points' => 21, 'played' => 25, 'wins' => 5, 'draws' => 9, 'losses' => 11, 'goals_for' => 22, 'goals_against' => 35, 'goal_difference' => -13,],
            ['team_name' => 'Lecce', 'image' => 'lecce.webp', 'points' => 25, 'played' => 25, 'wins' => 5, 'draws' => 8, 'losses' => 12, 'goals_for' => 21, 'goals_against' => 36, 'goal_difference' => -15,],
            ['team_name' => 'Venezia', 'image' => 'Logo-Venezia.webp', 'points' => 17, 'played' => 25, 'wins' => 4, 'draws' => 9, 'losses' => 12, 'goals_for' => 20, 'goals_against' => 37, 'goal_difference' => -17,],
            ['team_name' => 'Monza', 'image' => 'monza.webp', 'points' => 14, 'played' => 25, 'wins' => 4, 'draws' => 9, 'losses' => 12, 'goals_for' => 20, 'goals_against' => 37, 'goal_difference' => -17,],
        ];

        foreach ($classifics as $classific) {
            Classific::create($classific);
        }
    }
}


