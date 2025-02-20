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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cfda28/colore=BLACK.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://www.seatsza.com/wp-content/uploads/2023/07/allianz-stadium-scaled.jpeg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef513/milan.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://cdn.corrieredellosport.it/images/2023/05/10/221619463-5c95c738-3334-442a-b422-ad039c4f50e3.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef496/inter.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://www.interclubcastellanza.it/public/news/09062023134934_ft_5427.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/6681d23a/Napoli.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/71/Stadio_Maradona_Serie_A.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cfd69d/atalanta.png?webp&q=70&size=-x39',
                'stadium_url' => 'https://img.legaseriea.it/vimages/6720e7c4/GewissStadium_0009.JPG'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cfd5ce/roma.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://imgresizer.eurosport.com/unsafe/2560x1440/filters:format(jpeg)/origin-imgresizer.eurosport.com/2021/09/23/3225103-66019328-2560-1440.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef3f6/bologna.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://www.1000cuorirossoblu.it/wp-content/uploads/2024/03/7ba02c1a89195b4584175d46af62e717.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef452/fiorentina.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://www.milannews24.com/wp-content/uploads/2023/03/Artemio_Franchi_TEO_2907-scaled.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62e28387/como.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://citynews-quicomo.stgy.ovh/~media/original-hi/34219775447990/Como-Stadio.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef5cb/torino.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://www.torinofc.it/sites/default/files/2023-04/Modalita%CC%80%20di%20accesso%201.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cfd202/cagliari.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://www.tuttostadi.com/wp-content/uploads/2019/12/Sardegna-Arena-di-Cagliari-1210x642.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cfe8b8/colore=BLUE.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://www.calciohellas.it/wp-content/uploads/2023/12/IPA_Agency_IPA42394539-1024x682.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62c6acbd/monza.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://newsmondo.it/wp-content/uploads/2022/09/IM_Stadio_Monza_Brianteo.jpg.webp'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef4f6/lecce.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://upload.wikimedia.org/wikipedia/commons/d/d7/Stadio_Via_del_Mare_-_Lecce.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef4d5/lazio.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://slyvi-hosting.slyvi.it/teampages/4001485534977/images/imported/wp-content/uploads/2023/03/IMG_20230320_110613.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef5e9/udinese.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://stadiumdb.com/pictures/stadiums/ita/dacia_arena/dacia_arena21.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/62cef42e/empoli.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://img.legaseriea.it/vimages/62d9626f/Stadio-Carlo-Castellani.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/632da7d1/parmalogo.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://parmawelcome.it/wp-content/uploads/2025/01/Stadio-Tardini.jpg'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/649e8a06/GENOA-1.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://www.cagliarinews24.com/wp-content/uploads/2024/04/Stadio-Luigi-Ferraris-Genoa.webp'
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
                'url_logo' => 'https://img.legaseriea.it/vimages/64c7b5fd/Logo-Venezia.png?webp&q=70&size=-x180',
                'stadium_url' => 'https://www.metropolitano.it/wp-content/uploads/2021/09/Lo-stadio-Penzo-dopo-il-restauro.jpg'
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}