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
                'description' => 'Vincenzo Italiano (Karlsruhe, 10 dicembre 1977) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico del Bologna.',
                'img' => 'https://media.gettyimages.com/id/2167298128/it/foto/bologna-italy-vincenzo-italiano-head-coach-of-bologna-greets-his-fans-during-the-serie-a-match.jpg?s=612x612&w=0&k=20&c=UmezvBqv7JnX2VNILhENfiLSSwlKt21H2D9KxQ1sKbY='
            ],
            [
                'first_name' => 'Davide',
                'last_name' => 'Nicola',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1973-03-05',
                'description' => 'Davide Nicola (Luserna San Giovanni, 5 marzo 1973) è un allenatore di calcio ed ex calciatore italiano, di ruolo difensore, tecnico del Cagliari.',
                'img' => 'https://media.gettyimages.com/id/2147952887/it/foto/empoli-italy-davide-nicola-heand-coach-of-empoli-fc-looks-on-during-the-serie-a-tim-match.jpg?s=612x612&w=0&k=20&c=5Hi2NEZ87oPL0BknBCKiUqXJeG29_0kpC0Zvvsig0C0='
            ],
            [
                'first_name' => 'Cesc',
                'last_name' => 'Fàbregas',
                'nationality' => 'Spagnolo',
                'trophies' => 0,
                'date_of_birth' => '1987-05-04',
                'description' => 'Francesc Fàbregas Soler, detto Cesc (Arenys de Mar, 4 maggio 1987), è un allenatore di calcio ed ex calciatore spagnolo, di ruolo centrocampista, tecnico del Como.',
                'img' => 'https://media.gettyimages.com/id/2152444649/it/foto/como-italy-cesc-fabregas-of-como-calcio-looks-during-the-match-beteween-como-calcio-and.jpg?s=612x612&w=0&k=20&c=PxOLLZ5kueJJctorfGHzqhlK5oaTMuI-6jMk0SuDb0U='
            ],
            [
                'first_name' => 'Roberto',
                'last_name' => 'D\aversa',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1975-08-12',
                'description' => 'Roberto D"Aversa (Stoccarda, 12 agosto 1975) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico dell" Empoli.',
                'img' => 'https://media.gettyimages.com/id/953344600/it/foto/parma-italy-roberto-daversa-head-coach-of-parma-calcio-looks-on-before-the-serie-b-match.jpg?s=612x612&w=0&k=20&c=YpZETOBFoC2Qf592pnA5ybiJ2qpr6Ymjhi6ZfDmVt1s='
            ],
            [
                'first_name' => 'Raffaele',
                'last_name' => 'Palladino',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1984-04-17',
                'description' => 'Raffaele Palladino (Mugnano di Napoli, 17 aprile 1984) è un allenatore di calcio ed ex calciatore italiano, di ruolo attaccante o centrocampista, tecnico della Fiorentina.',
                'img' => 'https://media.gettyimages.com/id/1713513387/it/foto/reggio-nellemilia-italy-raffaele-palladino-head-coach-of-monza-looks-on-prior-tothe-serie-a.jpg?s=612x612&w=0&k=20&c=9iYT6mcMglyubGjOQuCsWbZ828sspDajEfN8mGExP_w='
            ],
            [
                'first_name' => 'Patrick',
                'last_name' => 'Vieira',
                'nationality' => 'Francese',
                'trophies' => 0,
                'date_of_birth' => '1976-06-23',
                'description' => 'Patrick Donalé Vieira (Dakar, 23 giugno 1976) è un allenatore di calcio, dirigente sportivo ed ex calciatore senegalese naturalizzato francese, di ruolo centrocampista, tecnico del Genoa.',
                'img' => 'https://media.gettyimages.com/id/1473827930/it/foto/brighton-england-manager-patrick-vieira-of-crystal-palace-during-the-premier-league-match.jpg?s=612x612&w=0&k=20&c=noQid4X-mx3ulifzvw7EVF7ERt3V1FzTAlEW27KcJk0='
            ],
            [
                'first_name' => 'Simone',
                'last_name' => 'Inzaghi',
                'nationality' => 'Italiano',
                'trophies' => 12,
                'date_of_birth' => '1976-04-05',
                'description' => 'Simone Inzaghi (Piacenza, 5 aprile 1976) è un allenatore di calcio ed ex calciatore italiano, di ruolo attaccante, tecnico dell" Inter.',
                'img' => 'https://media.gettyimages.com/id/2182720359/it/foto/milan-italy-simone-inzaghi-head-coach-of-fc-internazionale-reacts-during-the-serie-a-match.jpg?s=612x612&w=0&k=20&c=l0Fo-CNGwuXsVRbdvEyPRbm81cvTXvIvVWcXbKk9f98='
            ],
            [
                'first_name' => 'Thiago',
                'last_name' => 'Motta',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1982-08-28',
                'description' => 'Thiago Motta (São Bernardo do Campo, 28 agosto 1982) è un allenatore di calcio ed ex calciatore italo-brasiliano, di ruolo centrocampista, tecnico della Juventus.',
                'img' => 'https://media.gettyimages.com/id/2187742381/it/foto/lecce-italy-head-coach-of-juventus-thiago-motta-looks-on-during-the-serie-a-match-between.jpg?s=612x612&w=0&k=20&c=mBqF9hH71jBM-Ep2QCZ4FFz19QZgwbD4O_CNXAIHUbU='
            ],
            [
                'first_name' => 'Marco',
                'last_name' => 'Baroni',
                'nationality' => 'Italiano',
                'trophies' => 3,
                'date_of_birth' => '1963-09-11',
                'description' => 'Marco Baroni (Firenze, 11 settembre 1963) è un allenatore di calcio ed ex calciatore italiano, di ruolo difensore, tecnico della Lazio.',
                'img' => 'https://media.gettyimages.com/id/2191685923/it/foto/rome-italy-the-ss-lazio-head-coach-marco-baroni-looks-on-during-the-serie-a-match-between-ss.jpg?s=612x612&w=0&k=20&c=9BlzeXO7VZUQuuCCqUBZycGmh7ATJ8luOB8PlcECSNI='
            ],
            [
                'first_name' => 'Sergio',
                'last_name' => 'Conceição',
                'nationality' => 'Portoghese',
                'trophies' => 12,
                'date_of_birth' => '1974-11-15',
                'description' => 'Sérgio Paulo Marceneiro da Conceição (Coimbra, 15 novembre 1974) è un allenatore di calcio ed ex calciatore portoghese, di ruolo centrocampista, tecnico del Milan.',
                'img' => 'https://media.gettyimages.com/id/2079003729/it/foto/london-england-sergio-conceicao-head-coach-of-fc-porto-looks-on-prior-to-the-uefa-champions.jpg?s=612x612&w=0&k=20&c=qroYxxYQ7j-bcfpisFZFJuVY3oJhdzobvZ6cWbkt40I='
            ],
            [
                'first_name' => 'Antonio',
                'last_name' => 'Conte',
                'nationality' => 'Italiano',
                'trophies' => 9,
                'date_of_birth' => '1969-07-31',
                'description' => 'Antonio Conte (Lecce, 31 luglio 1969) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico del Napoli.',
                'img' => 'https://media.gettyimages.com/id/1466076322/it/foto/milan-italy-antonio-conte-manager-of-tottenham-hotspur-looks-on-prior-to-the-uefa-champions.jpg?s=612x612&w=0&k=20&c=6Nxiv0OkIgCDRDlKS3jGUJrYnY1BYc5LodfOfGcjhDM='
            ],
            [
                'first_name' => 'Eusebio',
                'last_name' => 'Di Francesco',
                'nationality' => 'Italiano',
                'trophies' => 1,
                'date_of_birth' => '1969-09-08',
                'description' => 'Eusebio Di Francesco (Pescara, 8 settembre 1969) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico del Venezia.',
                'img' => 'https://media.gettyimages.com/id/1655091552/it/foto/udine-italy-manager-of-frosinone-eusebio-di-francesco-looks-on-during-the-serie-a-tim-match.jpg?s=612x612&w=0&k=20&c=rva7MX7pE1JNab7OQoOLYR-euR6vu-U_pacte9UvBEY='
            ],
            [
                'first_name' => 'Marco',
                'last_name' => 'Giampaolo',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1967-08-02',
                'description' => 'Marco Giampaolo (Bellinzona, 2 agosto 1967) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico dell" Empoli.',
                'img' => 'https://media.gettyimages.com/id/946708524/it/foto/allianz-stadium-torino-italy-marco-giampaolo-head-coach-of-uc-sampdoria-looks-on-before-the.jpg?s=612x612&w=0&k=20&c=qC_rtl4DdhFKoT6x0n_987Tb775Im-4uTg9aLVJkArE='
            ],
            [
                'first_name' => 'Alessandro',
                'last_name' => 'Nesta',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1976-03-19',
                'description' => 'Alessandro Nesta (Roma, 19 marzo 1976) è un allenatore di calcio ed ex calciatore italiano, di ruolo difensore, tecnico del Monza.',
                'img' => 'https://media.gettyimages.com/id/1227767429/it/foto/frosinone-italy-frosinone-calcio-head-coach-alessandro-nesta-gestures-during-the-serie-b-match.jpg?s=612x612&w=0&k=20&c=esNsXxSgHA2Ss_YpjP9kfgXnanT_IEThfrHQFzbiqBs='
            ],
            [
                'first_name' => 'Fabio',
                'last_name' => 'Pecchia',
                'nationality' => 'Italiano',
                'trophies' => 2,
                'date_of_birth' => '1973-08-24',
                'description' => 'Fabio Pecchia (Cassino, 24 agosto 1973) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico del Parma.',
                'img' => 'https://media.gettyimages.com/id/2194710454/it/foto/parma-italy-fabio-pecchia-head-coach-of-parma-calcio-looks-on-during-the-serie-a-match-between.jpg?s=612x612&w=0&k=20&c=8y5NQp6CIcfOa36CKOQFAGFMATs8wlN73ONvUxbe2-g='
            ],
            [
                'first_name' => 'Claudio',
                'last_name' => 'Ranieri',
                'nationality' => 'Italiano',
                'trophies' => 10,
                'date_of_birth' => '1951-10-20',
                'description' => 'Claudio Ranieri (Roma, 20 ottobre 1951) è un allenatore di calcio ed ex calciatore italiano, di ruolo difensore, tecnico della Roma.',
                'img' => 'https://media.gettyimages.com/id/1787814703/it/foto/turin-italy-claudio-ranieri-head-coach-of-cagliari-calcio-during-the-serie-a-tim-match-between.jpg?s=612x612&w=0&k=20&c=tsvQNg4pts8wrhxzSWlKW0U1YifBNtO3fKGYkd70ljA='
            ],
            [
                'first_name' => 'Paolo',
                'last_name' => 'Vanoli',
                'nationality' => 'Italiano',
                'trophies' => 2,
                'date_of_birth' => '1972-08-12',
                'description' => 'Paolo Vanoli (Bergamo, 12 agosto 1972) è un allenatore di calcio ed ex calciatore italiano, di ruolo difensore, tecnico del Torino.',
                'img' => 'https://media.gettyimages.com/id/2167180558/it/foto/milan-italy-paolo-vanoli-head-coach-of-torino-gestures-during-the-serie-a-match-between-ac.jpg?s=612x612&w=0&k=20&c=W0u_p1MAchzkj6l2VDmTI1lmHtQWDSEU-duuJa4rjNU='
            ],
            [
                'first_name' => 'Kosta',
                'last_name' => 'Runjaić',
                'nationality' => 'Austriaco',
                'trophies' => 3,
                'date_of_birth' => '1971-06-04',
                'description' => 'Kosta Runjaić (Vienna, 4 giugno 1971) è un allenatore di calcio ed ex calciatore austriaco, di ruolo difensore, tecnico dell" Udinese.',
                'img' => 'https://media.gettyimages.com/id/2176918776/it/foto/udine-italy-manager-of-udinese-kosta-runjaic-during-the-serie-a-match-between-udinese-and.jpg?s=612x612&w=0&k=20&c=pYwHani3raU7BsgJrb_YdUeZap1ZEW5SPS7JmEFwtPw='
            ],
            [
                'first_name' => 'Paolo',
                'last_name' => 'Zanetti',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1982-12-16',
                'description' => 'Paolo Zanetti (Brescia, 16 dicembre 1982) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico dell" Verona.',
                'img' => 'https://media.gettyimages.com/id/1643138759/it/foto/empoli-italy-paolo-zanetti-heand-coach-of-empoli-fc-looks-on-during-the-serie-a-tim-match.jpg?s=612x612&w=0&k=20&c=v3SVDo5FRhtLpyibC_adf_-6HwsaCi6d8E7Y27XvtTg='
            ],
            [
                'first_name' => 'Gian Piero',
                'last_name' => 'Gasperini',
                'nationality' => 'Italiano',
                'trophies' => 2,
                'date_of_birth' => '1958-01-26',
                'description' => 'Gian Piero Gasperini (Grugliasco, 26 gennaio 1958) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico dell" Atalanta.',
                'img' => 'https://media.gettyimages.com/id/2154748302/it/foto/bergamo-italy-gian-piero-gasperini-head-coach-of-atalanta-bc-looks-on-prior-to-the-serie-a-tim.jpg?s=612x612&w=0&k=20&c=1QGJItrRl_FxcZvAHhK4WbwSwvvuOB3dcZzfXv_8mCU='
            ],
        ];

        foreach ($coaches as $coach) {
            Coach::create($coach);
        }
    }
}
