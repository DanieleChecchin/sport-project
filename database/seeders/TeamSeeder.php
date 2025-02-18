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
                'foundation_year' => '1897-11-01',
                'president' => 'Gianluca Ferrero',
                'palmares' => 71,
                'city' => 'Torino',
                'main_sponsor' => 'Save the Children',
                'team_logo' => 'juve.png',
                'url_logo' => 'https://img.legaseriea.it/vimages/62cfda28/colore=BLACK.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Milan',
                'stadium' => 'San Siro',
                'team_value' => 533,
                'foundation_year' => '1899-12-16',
                'president' => 'Gerry Cardinale',
                'palmares' => 53,
                'city' => 'Milano',
                'main_sponsor' => 'Emirates',
                'team_logo' => 'milan.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef513/milan.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Inter',
                'stadium' => 'San Siro',
                'team_value' => 675,
                'foundation_year' => '1908-03-09',
                'president' => 'Steven Zhang',
                'palmares' => 46,
                'city' => 'Milano',
                'main_sponsor' => 'Betsson.sport',
                'team_logo' => 'inter.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef496/inter.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Napoli',
                'stadium' => 'Diego Armando Maradona',
                'team_value' => 432,
                'foundation_year' => '1926-08-01',
                'president' => 'Aurelio De Laurentiis',
                'palmares' => 14,
                'city' => 'Napoli',
                'main_sponsor' => 'MSC Crociere',
                'team_logo' => 'Napoli.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/6681d23a/Napoli.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Atalanta',
                'stadium' => 'Gewiss Stadium',
                'team_value' => 487,
                'foundation_year' => '1907-10-17',
                'president' => 'Stephen Pagliuca',
                'palmares' => 8,
                'city' => 'Bergamo',
                'main_sponsor' => 'Lete',
                'team_logo' => 'atalanta.webp',
                'url_logo' => 'https://cdn.discordapp.com/attachments/1314535509720301690/1341439136455983208/atalanta.png?ex=67b6000c&is=67b4ae8c&hm=708a3cdb77be05a1f859b49c18259928e0d71bc50462d6be29c93f16c9587c67&'
            ],
            [
                'name' => 'Roma',
                'stadium' => 'Olimpico',
                'team_value' => 287,
                'foundation_year' => '1927-07-22',
                'president' => 'Dan Friedkin',
                'palmares' => 17,
                'city' => 'Roma',
                'main_sponsor' => 'Riyadh Season',
                'team_logo' => 'roma.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62cfd5ce/roma.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Bologna',
                'stadium' => 'Dall\'Ara',
                'team_value' => 277,
                'foundation_year' => '1909-10-03',
                'president' => 'Joey Saputo',
                'palmares' => 16,
                'city' => 'Bologna',
                'main_sponsor' => 'Saputo Inc.',
                'team_logo' => 'bologna.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef3f6/bologna.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Fiorentina',
                'stadium' => 'Artemio Franchi',
                'team_value' => 279,
                'foundation_year' => '1926-10-29',
                'president' => 'Rocco Commisso',
                'palmares' => 13,
                'city' => 'Firenze',
                'main_sponsor' => 'Mediacom',
                'team_logo' => 'fiorentina.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef452/fiorentina.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Como',
                'stadium' => 'Giuseppe Sinigaglia',
                'team_value' => 99,
                'foundation_year' => '1907-05-25',
                'president' => 'Robert Budi e Michael Hartono',
                'palmares' => 5,
                'city' => 'Como',
                'main_sponsor' => 'Uber',
                'team_logo' => 'como.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62e28387/como.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Torino',
                'stadium' => 'Grande Torino',
                'team_value' => 164,
                'foundation_year' => '1906-12-03',
                'president' => 'Urbano Cairo',
                'palmares' => 13,
                'city' => 'Torino',
                'main_sponsor' => 'Suzuki',
                'team_logo' => 'torino.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef5cb/torino.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Cagliari',
                'stadium' => 'Unipol Domus',
                'team_value' => 69,
                'foundation_year' => '1920-05-30',
                'president' => 'Tommaso Giulini',
                'palmares' => 4,
                'city' => 'Cagliari',
                'main_sponsor' => 'Sardegna / AeroItalia',
                'team_logo' => 'cagliari.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62cfd202/cagliari.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Hellas Verona',
                'stadium' => 'Marcantonio Bentegodi',
                'team_value' => 90,
                'foundation_year' => '1903-11-28',
                'president' => 'Maurizio Setti',
                'palmares' => 4,
                'city' => 'Verona',
                'main_sponsor' => '958 Santero',
                'team_logo' => 'verona.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62cfe8b8/colore=BLUE.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Monza',
                'stadium' => 'U-Power Stadium',
                'team_value' => 85,
                'foundation_year' => '1912-09-01',
                'president' => 'Pier Silvio e Marina Berlusconi',
                'palmares' => 7,
                'city' => 'Monza',
                'main_sponsor' => 'Motorola',
                'team_logo' => 'monza.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62c6acbd/monza.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Lecce',
                'stadium' => 'Via del Mare',
                'team_value' => 91,
                'foundation_year' => '1908-03-15',
                'president' => 'Saverio Sticchi Damiani',
                'palmares' => 4,
                'city' => 'Lecce',
                'main_sponsor' => 'DEGHI',
                'team_logo' => 'lecce.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef4f6/lecce.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Lazio',
                'stadium' => 'Olimpico',
                'team_value' => 272,
                'foundation_year' => '1900-01-09',
                'president' => 'Claudio Lotito',
                'palmares' => 17,
                'city' => 'Roma',
                'main_sponsor' => 'Nessuno',
                'team_logo' => 'lazio.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef4d5/lazio.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Udinese',
                'stadium' => 'Bluenergy Stadium',
                'team_value' => 131,
                'foundation_year' => '1896-11-30',
                'president' => 'Giampaolo Pozzo',
                'palmares' => 8,
                'city' => 'Udine',
                'main_sponsor' => 'Io sono Friuli-Venezia Giulia',
                'team_logo' => 'udinese.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef5e9/udinese.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Empoli',
                'stadium' => 'Carlo Castellani',
                'team_value' => 80,
                'foundation_year' => '1920-08-15',
                'president' => 'Fabrizio Corsi',
                'palmares' => 4,
                'city' => 'Empoli',
                'main_sponsor' => 'Computer Gross',
                'team_logo' => 'empoli.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef42e/empoli.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Parma',
                'stadium' => 'Ennio Tardini',
                'team_value' => 135,
                'foundation_year' => '1913-12-16',
                'president' => 'Kyle Krause',
                'palmares' => 10,
                'city' => 'Parma',
                'main_sponsor' => 'Prometeon',
                'team_logo' => 'parmalogo.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/632da7d1/parmalogo.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Genoa',
                'stadium' => 'Luigi Ferraris',
                'team_value' => 144,
                'foundation_year' => '1893-09-07',
                'president' => '777 Partners',
                'palmares' => 13,
                'city' => 'Genova',
                'main_sponsor' => 'Pulsee Luce e Gas',
                'team_logo' => 'GENOA-1.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/649e8a06/GENOA-1.png?webp&q=70&size=-x180'
            ],
            [
                'name' => 'Venezia',
                'stadium' => 'Pier Luigi Penzo',
                'team_value' => 66,
                'foundation_year' => '1907-12-14',
                'president' => 'Duncan Niederauer',
                'palmares' => 6,
                'city' => 'Venezia',
                'main_sponsor' => 'Cynar Spritz',
                'team_logo' => 'Logo-Venezia.webp',
                'url_logo' => 'https://img.legaseriea.it/vimages/64c7b5fd/Logo-Venezia.png?webp&q=70&size=-x180'
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
