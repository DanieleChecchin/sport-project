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
                'description' => 'Nato a Karlsruhe il 10 dicembre 1977, ex centrocampista e ora tecnico del Bologna. Ha giocato in squadre come Verona, Genoa e Padova, di cui è stato capitano.',
                'img' => 'https://media.gettyimages.com/id/2167298128/it/foto/bologna-italy-vincenzo-italiano-head-coach-of-bologna-greets-his-fans-during-the-serie-a-match.jpg?s=612x612&w=0&k=20&c=UmezvBqv7JnX2VNILhENfiLSSwlKt21H2D9KxQ1sKbY=',
                'team' => 'Bologna'
            ],
            [
                'first_name' => 'Davide',
                'last_name' => 'Nicola',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1973-03-05',
                'description' => 'Nato a Luserna San Giovanni il 5 marzo 1973, ex difensore e ora tecnico del Cagliari. Ha giocato nel Genoa ed esordito in Serie A con il Siena.',
                'img' => 'https://media.gettyimages.com/id/2147952887/it/foto/empoli-italy-davide-nicola-heand-coach-of-empoli-fc-looks-on-during-the-serie-a-tim-match.jpg?s=612x612&w=0&k=20&c=5Hi2NEZ87oPL0BknBCKiUqXJeG29_0kpC0Zvvsig0C0=',
                'team' => 'Cagliari'
            ],
            [
                'first_name' => 'Cesc',
                'last_name' => 'Fàbregas',
                'nationality' => 'Spagnolo',
                'trophies' => 12,
                'date_of_birth' => '1987-05-04',
                'description' => 'Nato ad Arenys de Mar il 4 maggio 1987, ex centrocampista e ora tecnico del Como. Ha vinto una Coppa del Mondo per club col Barcellona e l’Europeo 2008 e 2012 con la Spagna.',
                'img' => 'https://media.gettyimages.com/id/2152444649/it/foto/como-italy-cesc-fabregas-of-como-calcio-looks-during-the-match-beteween-como-calcio-and.jpg?s=612x612&w=0&k=20&c=PxOLLZ5kueJJctorfGHzqhlK5oaTMuI-6jMk0SuDb0U=',
                'team' => 'Como'
            ],
            [
                'first_name' => 'Roberto',
                'last_name' => 'D’Aversa',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1975-08-12',
                'description' => 'Nato a Stoccarda il 12 agosto 1975, ex centrocampista e ora tecnico dell’Empoli. Cresciuto nelle giovanili della Renato Curi.',
                'img' => 'https://media.gettyimages.com/id/953344600/it/foto/parma-italy-roberto-daversa-head-coach-of-parma-calcio-looks-on-before-the-serie-b-match.jpg?s=612x612&w=0&k=20&c=YpZETOBFoC2Qf592pnA5ybiJ2qpr6Ymjhi6ZfDmVt1s=',
                'team' => 'Empoli'
            ],
            [
                'first_name' => 'Raffaele',
                'last_name' => 'Palladino',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1984-04-17',
                'description' => 'Nato a Mugnano di Napoli il 17 aprile 1984, ex attaccante e ora tecnico della Fiorentina. Suo padre Guglielmo ha giocato in Serie C.',
                'img' => 'https://media.gettyimages.com/id/1713513387/it/foto/reggio-nellemilia-italy-raffaele-palladino-head-coach-of-monza-looks-on-prior-tothe-serie-a.jpg?s=612x612&w=0&k=20&c=9iYT6mcMglyubGjOQuCsWbZ828sspDajEfN8mGExP_w=',
                'team' => 'Fiorentina'
            ],
            [
                'first_name' => 'Patrick',
                'last_name' => 'Vieira',
                'nationality' => 'Francese',
                'trophies' => 14,
                'date_of_birth' => '1976-06-23',
                'description' => 'Nato a Dakar il 23 giugno 1976, ex centrocampista e ora tecnico del Genoa. Ha vinto 3 Premier League, 4 Serie A e 5 FA Cup.',
                'img' => 'https://media.gettyimages.com/id/1473827930/it/foto/brighton-england-manager-patrick-vieira-of-crystal-palace-during-the-premier-league-match.jpg?s=612x612&w=0&k=20&c=noQid4X-mx3ulifzvw7EVF7ERt3V1FzTAlEW27KcJk0=',
                'team' => 'Genoa'
            ],
            [
                'first_name' => 'Simone',
                'last_name' => 'Inzaghi',
                'nationality' => 'Italiano',
                'trophies' => 12,
                'date_of_birth' => '1976-04-05',
                'description' => 'Nato a Piacenza il 5 aprile 1976, ex attaccante e ora tecnico dell’Inter. Ha vinto 1 Serie A, 2 Coppe Italia e 3 Supercoppe con l’Inter.',
                'img' => 'https://media.gettyimages.com/id/2182720359/it/foto/milan-italy-simone-inzaghi-head-coach-of-fc-internazionale-reacts-during-the-serie-a-match.jpg?s=612x612&w=0&k=20&c=l0Fo-CNGwuXsVRbdvEyPRbm81cvTXvIvVWcXbKk9f98=',
                'team' => 'Inter'
            ],
            [
                'first_name' => 'Thiago',
                'last_name' => 'Motta',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1982-08-28',
                'description' => 'Nato a São Bernardo do Campo il 28 agosto 1982, ex centrocampista e ora tecnico della Juventus. Ha riportato il Bologna in Champions dopo 60 anni.',
                'img' => 'https://media.gettyimages.com/id/2187742381/it/foto/lecce-italy-head-coach-of-juventus-thiago-motta-looks-on-during-the-serie-a-match-between.jpg?s=612x612&w=0&k=20&c=mBqF9hH71jBM-Ep2QCZ4FFz19QZgwbD4O_CNXAIHUbU=',
                'team' => 'Juventus'
            ],
            [
                'first_name' => 'Marco',
                'last_name' => 'Baroni',
                'nationality' => 'Italiano',
                'trophies' => 3,
                'date_of_birth' => '1963-09-11',
                'description' => 'Nato a Firenze l’11 settembre 1963, ex difensore e ora tecnico della Lazio. Ha esordito nelle competizioni europee con la Lazio nel 2024.',
                'img' => 'https://media.gettyimages.com/id/2191685923/it/foto/rome-italy-the-ss-lazio-head-coach-marco-baroni-looks-on-during-the-serie-a-match-between-ss.jpg?s=612x612&w=0&k=20&c=9BlzeXO7VZUQuuCCqUBZycGmh7ATJ8luOB8PlcECSNI=',
                'team' => 'Lazio'
            ],

            [
                'first_name' => 'Sergio',
                'last_name' => 'Conceição',
                'nationality' => 'Portoghese',
                'trophies' => 12,
                'date_of_birth' => '1974-11-15',
                'description' => 'Nato a Coimbra il 15 novembre 1974, è un allenatore di calcio ed ex calciatore portoghese, di ruolo centrocampista, tecnico del Milan. Da giocatore, Sérgio Conceição è stato un centrocampista offensivo portoghese. Ha militato in club come il Porto, con cui ha vinto la Primeira Liga nel 1996-97, 1997-98 e 2003-04, e la Lazio, dove ha conquistato la Serie A nel 1999-2000, la Coppa Italia nello stesso anno e la Supercoppa UEFA nel 1999. Come allenatore, ha guidato il Porto alla vittoria della Primeira Liga nelle stagioni 2017-18, 2019-20 e 2021-22, Nel dicembre 2024, è diventato l’allenatore del Milan. ',
                'img' => 'https://media.gettyimages.com/id/2079003729/it/foto/london-england-sergio-conceicao-head-coach-of-fc-porto-looks-on-prior-to-the-uefa-champions.jpg?s=612x612&w=0&k=20&c=qroYxxYQ7j-bcfpisFZFJuVY3oJhdzobvZ6cWbkt40I=',
                'team' => 'Milan'
            ],
            [
                'first_name' => 'Antonio',
                'last_name' => 'Conte',
                'nationality' => 'Italiano',
                'trophies' => 9,
                'date_of_birth' => '1969-07-31',
                'description' => 'Nato a Lecce il 31 luglio 1969, è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico del Napoli, è stato un centrocampista italiano, noto per la sua lunga militanza nella Juventus dal 1991 al 2004, con cui ha vinto cinque Scudetti, una Champions League nel 1995-96 e una Coppa Intercontinentale nel 1996. Da allenatore, ha guidato la Juventus alla conquista di tre Scudetti consecutivi dal 2011 al 2014. Ha poi allenato la nazionale italiana e il Chelsea, con cui ha vinto la Premier League nel 2016-17 e la FA Cup nel 2017-18.',
                'img' => 'https://media.gettyimages.com/id/1466076322/it/foto/milan-italy-antonio-conte-manager-of-tottenham-hotspur-looks-on-prior-to-the-uefa-champions.jpg?s=612x612&w=0&k=20&c=6Nxiv0OkIgCDRDlKS3jGUJrYnY1BYc5LodfOfGcjhDM=',
                'team' => 'Napoli'
            ],
            [
                'first_name' => 'Eusebio',
                'last_name' => 'Di Francesco',
                'nationality' => 'Italiano',
                'trophies' => 1,
                'date_of_birth' => '1969-09-08',
                'description' => 'Nato a Pescara il 8 settembre 1969, è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico del Venezia. Centrocampista italiano, Eusebio Di Francesco ha giocato, tra le altre, nella Roma dal 1997 al 2001, vincendo lo Scudetto nella stagione 2000-01. Come allenatore, ha ottenuto successo con il Sassuolo, portando la squadra in Serie A e raggiungendo una storica qualificazione in Europa League nel 2016. Ha poi guidato la Roma fino alle semifinali di Champions League nella stagione 2017-18.',
                'img' => 'https://media.gettyimages.com/id/1655091552/it/foto/udine-italy-manager-of-frosinone-eusebio-di-francesco-looks-on-during-the-serie-a-tim-match.jpg?s=612x612&w=0&k=20&c=rva7MX7pE1JNab7OQoOLYR-euR6vu-U_pacte9UvBEY=',
                'team' => 'Venezia'
            ],
            [
                'first_name' => 'Marco',
                'last_name' => 'Giampaolo',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1967-08-02',
                'description' => 'Nato a Bellinzona il 2 agosto 1967, è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico dell’Empoli. Marco Giampaolo ha avuto una carriera da calciatore come centrocampista in squadre di Serie C. Da allenatore, è noto per il suo lavoro con squadre come Empoli, Sampdoria e Milan, apprezzato per il suo approccio tattico e la valorizzazione dei giovani talenti.',
                'img' => 'https://media.gettyimages.com/id/946708524/it/foto/allianz-stadium-torino-italy-marco-giampaolo-head-coach-of-uc-sampdoria-looks-on-before-the.jpg?s=612x612&w=0&k=20&c=qC_rtl4DdhFKoT6x0n_987Tb775Im-4uTg9aLVJkArE=',
                'team' => 'Lecce'
            ],
            [
                'first_name' => 'Alessandro',
                'last_name' => 'Nesta',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1976-03-19',
                'description' => 'Nato a Roma il 19 marzo 1976, è un allenatore di calcio ed ex calciatore italiano, di ruolo difensore, tecnico del Monza. Difensore centrale italiano di fama mondiale, Alessandro Nesta ha giocato per la Lazio, vincendo lo Scudetto nel 1999-2000, e per il Milan, con cui ha conquistato due Champions League (2002-03, 2006-07) e due Scudetti (2003-04, 2010-11). Come allenatore, ha guidato squadre come il Miami FC negli Stati Uniti e il Frosinone in Italia, portando quest’ultimo ai playoff di Serie B.',
                'img' => 'https://media.gettyimages.com/id/1227767429/it/foto/frosinone-italy-frosinone-calcio-head-coach-alessandro-nesta-gestures-during-the-serie-b-match.jpg?s=612x612&w=0&k=20&c=esNsXxSgHA2Ss_YpjP9kfgXnanT_IEThfrHQFzbiqBs=',
                'team' => 'Monza'
            ],
            [
                'first_name' => 'Fabio',
                'last_name' => 'Pecchia',
                'nationality' => 'Italiano',
                'trophies' => 2,
                'date_of_birth' => '1973-08-24',
                'description' => 'Nato a Cassino il 24 agosto 1973, è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico del Parma. Centrocampista italiano, Fabio Pecchia ha giocato in diverse squadre di Serie A e B, tra cui Napoli e Juventus, con cui ha vinto una Supercoppa Italiana nel 1997. Da allenatore, ha guidato il Verona alla promozione in Serie A nella stagione 2016-17 e la Cremonese alla promozione nel 2021-22.',
                'img' => 'https://media.gettyimages.com/id/2194710454/it/foto/parma-italy-fabio-pecchia-head-coach-of-parma-calcio-looks-on-during-the-serie-a-match-between.jpg?s=612x612&w=0&k=20&c=8y5NQp6CIcfOa36CKOQFAGFMATs8wlN73ONvUxbe2-g=',
                'team' => 'Parma'
            ],
            [
                'first_name' => 'Claudio',
                'last_name' => 'Ranieri',
                'nationality' => 'Italiano',
                'trophies' => 10,
                'date_of_birth' => '1951-10-20',
                'description' => 'Nato a Roma il 20 ottobre 1951, è un allenatore di calcio ed ex calciatore italiano, di ruolo difensore, tecnico della Roma. Difensore italiano, Claudio Ranieri ha giocato principalmente nel Catanzaro negli anni ’70 e ’80. Come allenatore, ha avuto una carriera internazionale di successo, vincendo la Premier League con il Leicester City nel 2015-16 in una delle più grandi sorprese della storia del calcio.',
                'img' => 'https://media.gettyimages.com/id/1787814703/it/foto/turin-italy-claudio-ranieri-head-coach-of-cagliari-calcio-during-the-serie-a-tim-match-between.jpg?s=612x612&w=0&k=20&c=tsvQNg4pts8wrhxzSWlKW0U1YifBNtO3fKGYkd70ljA=',
                'team' => 'Roma'
            ],
            [
                'first_name' => 'Paolo',
                'last_name' => 'Vanoli',
                'nationality' => 'Italiano',
                'trophies' => 2,
                'date_of_birth' => '1972-08-12',
                'description' => 'Nato a Bergamo il 12 agosto 1972, è un allenatore di calcio ed ex calciatore italiano, di ruolo difensore, tecnico del Torino. Terzino sinistro italiano, Paolo Vanoli ha giocato per club come il Parma, con cui ha vinto la Coppa Italia e la Coppa UEFA nel 1998-99. Da allenatore, ha lavorato come assistente in diverse squadre e ha avuto esperienze come tecnico principale, tra cui lo Spartak Mosca nel 2021-22.',
                'img' => 'https://media.gettyimages.com/id/2167180558/it/foto/milan-italy-paolo-vanoli-head-coach-of-torino-gestures-during-the-serie-a-match-between-ac.jpg?s=612x612&w=0&k=20&c=W0u_p1MAchzkj6l2VDmTI1lmHtQWDSEU-duuJa4rjNU=',
                'team' => 'Torino'
            ],
            [
                'first_name' => 'Kosta',
                'last_name' => 'Runjaić',
                'nationality' => 'Austriaco',
                'trophies' => 3,
                'date_of_birth' => '1971-06-04',
                'description' => 'Nato a Vienna il 4 giugno 1971, è un allenatore di calcio ed ex calciatore austriaco, di ruolo difensore, tecnico dell’Udinese. Kosta Runjaić è un allenatore tedesco di origini croate. Non avendo avuto una carriera di rilievo come calciatore, si è distinto come allenatore in club tedeschi come il Kaiserslautern e il Duisburg, e successivamente in Polonia con il Pogoń Szczecin.',
                'img' => 'https://media.gettyimages.com/id/2176918776/it/foto/udine-italy-manager-of-udinese-kosta-runjaic-during-the-serie-a-match-between-udinese-and.jpg?s=612x612&w=0&k=20&c=pYwHani3raU7BsgJrb_YdUeZap1ZEW5SPS7JmEFwtPw=',
                'team' => 'Udinese'
            ],
            [
                'first_name' => 'Paolo',
                'last_name' => 'Zanetti',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1982-12-16',
                'description' => 'Nato a Brescia il 16 dicembre 1982, è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico dell’ Verona. Centrocampista italiano, Paolo Zanetti ha giocato in squadre come l’Empoli e il Torino. Come allenatore, ha guidato il Venezia alla promozione in Serie A nella stagione 2020-21.',
                'img' => 'https://media.gettyimages.com/id/1643138759/it/foto/empoli-italy-paolo-zanetti-heand-coach-of-empoli-fc-looks-on-during-the-serie-a-tim-match.jpg?s=612x612&w=0&k=20&c=v3SVDo5FRhtLpyibC_adf_-6HwsaCi6d8E7Y27XvtTg=',
                'team' => 'Hellas Verona'
            ],
            [
                'first_name' => 'Gian Piero',
                'last_name' => 'Gasperini',
                'nationality' => 'Italiano',
                'trophies' => 2,
                'date_of_birth' => '1958-01-26',
                'description' => 'Nato a Grugliasco, il 26 gennaio 1958, è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico dell’Atalanta. Centrocampista italiano, Gian Piero Gasperini ha giocato principalmente nel Palermo negli anni ’70 e ’80. Da allenatore, è noto per il suo lavoro con l’Atalanta, trasformandola in una delle squadre più competitive della Serie A e raggiungendo i quarti di finale di Champions League nella stagione 2019-20.',
                'img' => 'https://media.gettyimages.com/id/2154748302/it/foto/bergamo-italy-gian-piero-gasperini-head-coach-of-atalanta-bc-looks-on-prior-to-the-serie-a-tim.jpg?s=612x612&w=0&k=20&c=1QGJItrRl_FxcZvAHhK4WbwSwvvuOB3dcZzfXv_8mCU=',
                'team' => 'Atalanta'
            ],
        ];

        foreach ($coaches as $coach) {
            Coach::create($coach);
        }
    }
}
