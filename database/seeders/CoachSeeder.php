<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coach;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coaches = [
            [
                'first_name' => 'Vincenzo',
                'last_name' => 'Italiano',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1977-12-10',
                'description' => 'aaaaaaaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Davide',
                'last_name' => 'Nicola',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1973-03-05',
                'description' => 'aaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Cesc',
                'last_name' => 'Fàbregas',
                'nationality' => 'Spagnolo',
                'trophies' => 0,
                'date_of_birth' => '1987-05-04',
                'description' => 'aaaaaaaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Roberto',
                'last_name' => 'D\aversa',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1975-08-12',
                'description' => 'aaaaaaaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Raffaele',
                'last_name' => 'Palladino',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1984-04-17',
                'description' => 'aaaaaaaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Patrick',
                'last_name' => 'Vieira',
                'nationality' => 'Francese',
                'trophies' => 0,
                'date_of_birth' => '1976-06-23',
                'description' => 'aaaaaaaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Simone',
                'last_name' => 'Inzaghi',
                'nationality' => 'Italiano',
                'trophies' => 12,
                'date_of_birth' => '1976-04-05',
                'description' => 'aaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Thiago',
                'last_name' => 'Motta',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1982-08-28',
                'description' => 'aaaaaaaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Marco',
                'last_name' => 'Baroni',
                'nationality' => 'Italiano',
                'trophies' => 3,
                'date_of_birth' => '1963-09-11',
                'description' => 'aaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Sergio',
                'last_name' => 'Conceição',
                'nationality' => 'Portoghese',
                'trophies' => 12,
                'date_of_birth' => '1974-11-15',
                'description' => 'aaaaaaaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Antonio',
                'last_name' => 'Conte',
                'nationality' => 'Italiano',
                'trophies' => 9,
                'date_of_birth' => '1969-07-31',
                'description' => 'aaaaaaaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Eusebio',
                'last_name' => 'Di Francesco',
                'nationality' => 'Italiano',
                'trophies' => 1,
                'date_of_birth' => '1969-09-08',
                'description' => 'aaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Marco',
                'last_name' => 'Giampaolo',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1967-08-02',
                'description' => 'aaaaaaaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Alessandro',
                'last_name' => 'Nesta',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1976-03-19',
                'description' => 'aaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Fabio',
                'last_name' => 'Pecchia',
                'nationality' => 'Italiano',
                'trophies' => 2,
                'date_of_birth' => '1973-08-24',
                'description' => 'aaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Claudio',
                'last_name' => 'Ranieri',
                'nationality' => 'Italiano',
                'trophies' => 10,
                'date_of_birth' => '1951-10-20',
                'description' => 'aaaaaaaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Paolo',
                'last_name' => 'Vanoli',
                'nationality' => 'Italiano',
                'trophies' => 2,
                'date_of_birth' => '1972-08-12',
                'description' => 'aaaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Kosta',
                'last_name' => 'Runjaic\'',
                'nationality' => 'Austriaco',
                'trophies' => 3,
                'date_of_birth' => '1971-06-04',
                'description' => 'aaaaaaaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Paolo',
                'last_name' => 'Zanetti',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1982-12-16',
                'description' => 'aaaaaaaaaaaaaa',
                'img' => ''
            ],
            [
                'first_name' => 'Gian Piero',
                'last_name' => 'Gasperini',
                'nationality' => 'Italiano',
                'trophies' => 2,
                'date_of_birth' => '1958-01-26',
                'description' => 'aaaaaaaaaaaaaa',
                'img' => ''
            ],
        ];

        foreach ($coaches as $coach) {
            Coach::create($coach);
        }
    }
}
