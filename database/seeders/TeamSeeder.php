<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Juventus',
                'stadium' => 'Allianz Stadium',
                'team_value' => 615,
                'foundation_year' => 1897,
                'president' => 'Gianluca Ferrero',
                'palmares' => 71,
                'city' => 'Torino',
                'main_sponsor' => 'Save the Children',
                'team_logo' => ''
            ],
            [
                'name' => 'Milan',
                'stadium' => 'San Siro',
                'team_value' => 533,
                'foundation_year' => 1899,
                'president' => 'Gerry Cardinale',
                'palmares' => 53,
                'city' => 'Milano',
                'main_sponsor' => 'Emirates',
                'team_logo' => ''
            ],
            [
                'name' => 'Inter',
                'stadium' => 'San Siro',
                'team_value' => 675,
                'foundation_year' => 1908,
                'president' => 'Steven Zhang',
                'palmares' => 46,
                'city' => 'Milano',
                'main_sponsor' => 'Betsson.sport',
                'team_logo' => ''
            ],
            [
                'name' => 'Napoli',
                'stadium' => 'Diego Armando Maradona',
                'team_value' => 432,
                'foundation_year' => 1926,
                'president' => 'Aurelio De Laurentiis',
                'palmares' => 14,
                'city' => 'Napoli',
                'main_sponsor' => 'MSC Crociere',
                'team_logo' => ''
            ],
            [
                'name' => 'Atalanta',
                'stadium' => 'Gewiss Stadium',
                'team_value' => 487,
                'foundation_year' => 1907,
                'president' => 'Stephen Pagliuca',
                'palmares' => 8,
                'city' => 'Bergamo',
                'main_sponsor' => 'Lete',
                'team_logo' => ''
            ],
            [
                'name' => 'Roma',
                'stadium' => 'Olimpico',
                'team_value' => 287,
                'foundation_year' => 1927,
                'president' => 'Dan Friedkin',
                'palmares' => 17,
                'city' => 'Roma',
                'main_sponsor' => 'Riyadh Season',
                'team_logo' => ''
            ],
            [
                'name' => 'Bologna',
                'stadium' => 'Dall\'Ara',
                'team_value' => 277,
                'foundation_year' => 1909,
                'president' => 'Joey Saputo',
                'palmares' => 16,
                'city' => 'Bologna',
                'main_sponsor' => 'Saputo Inc.',
                'team_logo' => ''
            ],
            [
                'name' => 'Fiorentina',
                'stadium' => 'Artemio Franchi',
                'team_value' => 279,
                'foundation_year' => 1926,
                'president' => 'Rocco Commisso',
                'palmares' => 13,
                'city' => 'Firenze',
                'main_sponsor' => 'Mediacom',
                'team_logo' => ''
            ],
            [
                'name' => 'Como',
                'stadium' => 'Giuseppe Sinigaglia',
                'team_value' => 99,
                'foundation_year' => 1907,
                'president' => 'Robert Budi e Michael Hartono',
                'palmares' => 5,
                'city' => 'Como',
                'main_sponsor' => 'Uber',
                'team_logo' => ''
            ],
            [
                'name' => 'Torino',
                'stadium' => 'Grande Torino',
                'team_value' => 164,
                'foundation_year' => 1906,
                'president' => 'Urbano Cairo',
                'palmares' => 13,
                'city' => 'Torino',
                'main_sponsor' => 'Suzuki',
                'team_logo' => ''
            ],
            [
                'name' => 'Cagliari',
                'stadium' => 'Unipol Domus',
                'team_value' => 69,
                'foundation_year' => 1920,
                'president' => 'Tommaso Giulini',
                'palmares' => 4,
                'city' => 'Cagliari',
                'main_sponsor' => 'Sardegna / AeroItalia',
                'team_logo' => ''
            ],
            [
                'name' => 'Hellas Verona',
                'stadium' => 'Marcantonio Bentegodi',
                'team_value' => 90,
                'foundation_year' => 1903,
                'president' => 'Maurizio Setti',
                'palmares' => 4,
                'city' => 'Verona',
                'main_sponsor' => '958 Santero',
                'team_logo' => ''
            ],
            [
                'name' => 'Monza',
                'stadium' => 'U-Power Stadium',
                'team_value' => 85,
                'foundation_year' => 1912,
                'president' => 'Pier Silvio e Marina Berlusconi',
                'palmares' => 7,
                'city' => 'Monza',
                'main_sponsor' => 'Motorola',
                'team_logo' => ''
            ],
            [
                'name' => 'Lecce',
                'stadium' => 'Via del Mare',
                'team_value' => 91,
                'foundation_year' => 1908,
                'president' => 'Saverio Sticchi Damiani',
                'palmares' => 4,
                'city' => 'Lecce',
                'main_sponsor' => 'DEGHI',
                'team_logo' => ''
            ],
            [
                'name' => 'Lazio',
                'stadium' => 'Olimpico',
                'team_value' => 272,
                'foundation_year' => 1900,
                'president' => 'Claudio Lotito',
                'palmares' => 17,
                'city' => 'Roma',
                'main_sponsor' => 'Nessuno',
                'team_logo' => ''
            ],
            [
                'name' => 'Udinese',
                'stadium' => 'Bluenergy Stadium',
                'team_value' => 131,
                'foundation_year' => 1896,
                'president' => 'Giampaolo Pozzo',
                'palmares' => 8,
                'city' => 'Udine',
                'main_sponsor' => 'Io sono Friuli-Venezia Giulia',
                'team_logo' => ''
            ],
            [
                'name' => 'Empoli',
                'stadium' => 'Carlo Castellani',
                'team_value' => 80,
                'foundation_year' => 1920,
                'president' => 'Fabrizio Corsi',
                'palmares' => 4,
                'city' => 'Empoli',
                'main_sponsor' => 'Computer Gross',
                'team_logo' => ''
            ],
            [
                'name' => 'Parma',
                'stadium' => 'Ennio Tardini',
                'team_value' => 135,
                'foundation_year' => 1913,
                'president' => 'Kyle Krause',
                'palmares' => 10,
                'city' => 'Parma',
                'main_sponsor' => 'Prometeon',
                'team_logo' => ''
            ],
            [
                'name' => 'Genoa',
                'stadium' => 'Luigi Ferraris',
                'team_value' => 144,
                'foundation_year' => 1893,
                'president' => '777 Partners',
                'palmares' => 13,
                'city' => 'Genova',
                'main_sponsor' => 'Pulsee Luce e Gas',
                'team_logo' => ''
            ],
            [
                'name' => 'Venezia',
                'stadium' => 'Pier Luigi Penzo',
                'team_value' => 66,
                'foundation_year' => 1907,
                'president' => 'Duncan Niederauer',
                'palmares' => 6,
                'city' => 'Venezia',
                'main_sponsor' => 'Cynar Spritz',
                'team_logo' => ''
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
