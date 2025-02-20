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
            ['team_name' => 'Napoli', 'played' => 25, 'wins' => 17, 'draws' => 5, 'losses' => 3, 'goals_for' => 50, 'goals_against' => 20, 'goal_difference' => 30, 'points' => 56],
            ['team_name' => 'Inter', 'played' => 25, 'wins' => 17, 'draws' => 3, 'losses' => 5, 'goals_for' => 48, 'goals_against' => 22, 'goal_difference' => 26, 'points' => 54],
            ['team_name' => 'Atalanta', 'played' => 25, 'wins' => 15, 'draws' => 5, 'losses' => 5, 'goals_for' => 45, 'goals_against' => 25, 'goal_difference' => 20, 'points' => 50],
            ['team_name' => 'Juventus', 'played' => 25, 'wins' => 14, 'draws' => 6, 'losses' => 5, 'goals_for' => 40, 'goals_against' => 22, 'goal_difference' => 18, 'points' => 48],
            ['team_name' => 'Lazio', 'played' => 25, 'wins' => 13, 'draws' => 7, 'losses' => 5, 'goals_for' => 38, 'goals_against' => 24, 'goal_difference' => 14, 'points' => 46],
            ['team_name' => 'Roma', 'played' => 25, 'wins' => 12, 'draws' => 8, 'losses' => 5, 'goals_for' => 36, 'goals_against' => 26, 'goal_difference' => 10, 'points' => 44],
            ['team_name' => 'Milan', 'played' => 25, 'wins' => 12, 'draws' => 6, 'losses' => 7, 'goals_for' => 35, 'goals_against' => 28, 'goal_difference' => 7, 'points' => 42],
            ['team_name' => 'Fiorentina', 'played' => 25, 'wins' => 10, 'draws' => 8, 'losses' => 7, 'goals_for' => 32, 'goals_against' => 30, 'goal_difference' => 2, 'points' => 38],
            ['team_name' => 'Torino', 'played' => 25, 'wins' => 9, 'draws' => 9, 'losses' => 7, 'goals_for' => 30, 'goals_against' => 28, 'goal_difference' => 2, 'points' => 36],
            ['team_name' => 'Como', 'played' => 25, 'wins' => 9, 'draws' => 7, 'losses' => 9, 'goals_for' => 31, 'goals_against' => 32, 'goal_difference' => -1, 'points' => 34],
            ['team_name' => 'Udinese', 'played' => 25, 'wins' => 8, 'draws' => 8, 'losses' => 9, 'goals_for' => 28, 'goals_against' => 30, 'goal_difference' => -2, 'points' => 32],
            ['team_name' => 'Bologna', 'played' => 25, 'wins' => 8, 'draws' => 7, 'losses' => 10, 'goals_for' => 27, 'goals_against' => 31, 'goal_difference' => -4, 'points' => 31],
            ['team_name' => 'Genoa', 'played' => 25, 'wins' => 7, 'draws' => 9, 'losses' => 9, 'goals_for' => 26, 'goals_against' => 30, 'goal_difference' => -4, 'points' => 30],
            ['team_name' => 'Parma', 'played' => 25, 'wins' => 7, 'draws' => 8, 'losses' => 10, 'goals_for' => 25, 'goals_against' => 32, 'goal_difference' => -7, 'points' => 29],
            ['team_name' => 'Cagliari', 'played' => 25, 'wins' => 6, 'draws' => 9, 'losses' => 10, 'goals_for' => 24, 'goals_against' => 33, 'goal_difference' => -9, 'points' => 27],
            ['team_name' => 'Verona', 'played' => 25, 'wins' => 6, 'draws' => 8, 'losses' => 11, 'goals_for' => 23, 'goals_against' => 34, 'goal_difference' => -11, 'points' => 26],
            ['team_name' => 'Empoli', 'played' => 25, 'wins' => 5, 'draws' => 9, 'losses' => 11, 'goals_for' => 22, 'goals_against' => 35, 'goal_difference' => -13, 'points' => 24],
            ['team_name' => 'Lecce', 'played' => 25, 'wins' => 5, 'draws' => 8, 'losses' => 12, 'goals_for' => 21, 'goals_against' => 36, 'goal_difference' => -15, 'points' => 23],
            ['team_name' => 'Venezia', 'played' => 25, 'wins' => 4, 'draws' => 9, 'losses' => 12, 'goals_for' => 20, 'goals_against' => 37, 'goal_difference' => -17, 'points' => 21],
            ['team_name' => 'Monza', 'played' => 25, 'wins' => 4, 'draws' => 9, 'losses' => 12, 'goals_for' => 20, 'goals_against' => 37, 'goal_difference' => -17, 'points' => 21],
        ];

        foreach ($classifics as $classific) {
            Classific::create($classific);
        }
    }
}


