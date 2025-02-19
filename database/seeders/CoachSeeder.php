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
                'description' => 'Vincenzo Italiano (Karlsruhe, 10 dicembre 1977) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico del Bologna. Ha vestito le maglie di Ribera, Partinicaudace, Trapani, Verona, Genoa, Chievo, Padova, Perugia e Lumezzane; del Verona e del Padova è stato anche capitano. Nel corso della sua carriera agonistica ha vinto due campionati italiani di Serie B: nel 1998-1999 con il Verona e nel 2007-2008 con il Chievo.',
                'img' => 'https://media.gettyimages.com/id/2167298128/it/foto/bologna-italy-vincenzo-italiano-head-coach-of-bologna-greets-his-fans-during-the-serie-a-match.jpg?s=612x612&w=0&k=20&c=UmezvBqv7JnX2VNILhENfiLSSwlKt21H2D9KxQ1sKbY='
            ],
            [
                'first_name' => 'Davide',
                'last_name' => 'Nicola',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1973-03-05',
                'description' => 'Davide Nicola (Luserna San Giovanni, 5 marzo 1973) è un allenatore di calcio ed ex calciatore italiano, di ruolo difensore, tecnico del Cagliari. Ha difeso per lungo tempo i colori del Genoa[3], prima di esordire in Serie A con il Siena.Consegue il patentino nel 2008, superando il corso FIGC per Allenatori Professionisti di 1ª Categoria UEFA PRO con la votazione di 110/110.',
                'img' => 'https://media.gettyimages.com/id/2147952887/it/foto/empoli-italy-davide-nicola-heand-coach-of-empoli-fc-looks-on-during-the-serie-a-tim-match.jpg?s=612x612&w=0&k=20&c=5Hi2NEZ87oPL0BknBCKiUqXJeG29_0kpC0Zvvsig0C0='
            ],
            [
                'first_name' => 'Cesc',
                'last_name' => 'Fàbregas',
                'nationality' => 'Spagnolo',
                'trophies' => 0,
                'date_of_birth' => '1987-05-04',
                'description' => 'Francesc Fàbregas Soler, detto Cesc (Arenys de Mar, 4 maggio 1987), è un allenatore di calcio ed ex calciatore spagnolo, di ruolo centrocampista, tecnico del Como. Nel corso della sua carriera ha vinto dodici titoli con i club, tra cui una Coppa del mondo per club con il Barcellona. Con la nazionale spagnola è stato campione d’Europa nel 2008 e nel 2012 e campione del mondo nel 2010.',
                'img' => 'https://media.gettyimages.com/id/2152444649/it/foto/como-italy-cesc-fabregas-of-como-calcio-looks-during-the-match-beteween-como-calcio-and.jpg?s=612x612&w=0&k=20&c=PxOLLZ5kueJJctorfGHzqhlK5oaTMuI-6jMk0SuDb0U='
            ],
            [
                'first_name' => 'Roberto',
                'last_name' => 'D’aversa',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1975-08-12',
                'description' => 'Roberto D’Aversa (Stoccarda, 12 agosto 1975) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico dell’ Empoli. Nato a Stoccarda, in Germania, da padre abruzzese di Città Sant’Angelo e madre pugliese di Monte Sant’Angelo, rientrati a Pescara nel 1978, inizia a giocare a calcio nel settore giovanile della Renato Curi, in cui era schierato come attaccante.',
                'img' => 'https://media.gettyimages.com/id/953344600/it/foto/parma-italy-roberto-daversa-head-coach-of-parma-calcio-looks-on-before-the-serie-b-match.jpg?s=612x612&w=0&k=20&c=YpZETOBFoC2Qf592pnA5ybiJ2qpr6Ymjhi6ZfDmVt1s='
            ],
            [
                'first_name' => 'Raffaele',
                'last_name' => 'Palladino',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1984-04-17',
                'description' => 'Raffaele Palladino (Mugnano di Napoli, 17 aprile 1984) è un allenatore di calcio ed ex calciatore italiano, di ruolo attaccante o centrocampista, tecnico della Fiorentina.Nato a Mugnano di Napoli, è il più piccolo di quattro fratelli. Anche il padre Guglielmo è stato calciatore, arrivando a giocare in Serie C con la Sambenedettese.',
                'img' => 'https://media.gettyimages.com/id/1713513387/it/foto/reggio-nellemilia-italy-raffaele-palladino-head-coach-of-monza-looks-on-prior-tothe-serie-a.jpg?s=612x612&w=0&k=20&c=9iYT6mcMglyubGjOQuCsWbZ828sspDajEfN8mGExP_w='
            ],
            [
                'first_name' => 'Patrick',
                'last_name' => 'Vieira',
                'nationality' => 'Francese',
                'trophies' => 0,
                'date_of_birth' => '1976-06-23',
                'description' => 'Patrick Donalé Vieira (Dakar, 23 giugno 1976) è un allenatore di calcio, dirigente sportivo ed ex calciatore senegalese naturalizzato francese, di ruolo centrocampista, tecnico del Genoa. In carriera si è aggiudicato quattro campionati italiani (1995-1996, 2006-2007, 2007-2008 e 2008-2009), tre campionati inglesi (1997-1998, 2001-2002 e 2003-2004), cinque Coppe d’Inghilterra (1997-1998, 2001-2002, 2002-2003, 2004-2005 e 2010-2011), quattro Community Shield (1998, 1999, 2002 e 2004) e due Supercoppe italiane (2006 e 2008)',
                'img' => 'https://media.gettyimages.com/id/1473827930/it/foto/brighton-england-manager-patrick-vieira-of-crystal-palace-during-the-premier-league-match.jpg?s=612x612&w=0&k=20&c=noQid4X-mx3ulifzvw7EVF7ERt3V1FzTAlEW27KcJk0='
            ],
            [
                'first_name' => 'Simone',
                'last_name' => 'Inzaghi',
                'nationality' => 'Italiano',
                'trophies' => 12,
                'date_of_birth' => '1976-04-05',
                'description' => 'Simone Inzaghi (Piacenza, 5 aprile 1976) è un allenatore di calcio ed ex calciatore italiano, di ruolo attaccante, tecnico dell’Inter. Nella Lazio ha iniziato anche la carriera da allenatore, divenendone il tecnico con più apparizioni. In cinque anni ha conquistato una Coppa Italia (2018-2019) e due Supercoppe italiane (2017 e 2019), diventando l’unico biancoceleste ad aver vinto entrambi i trofei nazionali sia da calciatore che da tecnico. Nel 2021 si è trasferito all’Inter, con cui ha vinto un campionato italiano (2023-2024), due Coppe Italia (2021-2022 e 2022-2023) e tre Supercoppe italiane (2021, 2022 e 2023), oltre ad aver raggiunto una finale di UEFA Champions League (2022-2023); con sei trofei vinti è tra gli allenatori più vincenti della storia dell’Inter, dietro solo a Helenio Herrera e Roberto Mancini (sette).',
                'img' => 'https://media.gettyimages.com/id/2182720359/it/foto/milan-italy-simone-inzaghi-head-coach-of-fc-internazionale-reacts-during-the-serie-a-match.jpg?s=612x612&w=0&k=20&c=l0Fo-CNGwuXsVRbdvEyPRbm81cvTXvIvVWcXbKk9f98='
            ],
            [
                'first_name' => 'Thiago',
                'last_name' => 'Motta',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1982-08-28',
                'description' => 'Thiago Motta (São Bernardo do Campo, 28 agosto 1982) è un allenatore di calcio ed ex calciatore italo-brasiliano, di ruolo centrocampista, tecnico della Juventus.Conclusa la carriera da calciatore, intraprende quella di tecnico. Dopo una breve esperienza con il Genoa (2019), nel 2021-22 allena lo Spezia, con cui ottiene una salvezza in massima serie. Nel 2022 assume l’incarico sulla panchina del Bologna, con cui nella stagione 2023-2024 raggiunge la qualificazione in Champions League, riportando i felsinei nella massima competizione europea per club dopo 60 anni. A fine stagione passa alla guida della Juventus.',
                'img' => 'https://media.gettyimages.com/id/2187742381/it/foto/lecce-italy-head-coach-of-juventus-thiago-motta-looks-on-during-the-serie-a-match-between.jpg?s=612x612&w=0&k=20&c=mBqF9hH71jBM-Ep2QCZ4FFz19QZgwbD4O_CNXAIHUbU='
            ],
            [
                'first_name' => 'Marco',
                'last_name' => 'Baroni',
                'nationality' => 'Italiano',
                'trophies' => 3,
                'date_of_birth' => '1963-09-11',
                'description' => 'Marco Baroni (Firenze, 11 settembre 1963) è un allenatore di calcio ed ex calciatore italiano, di ruolo difensore, tecnico della Lazio. Nello stesso giorno in cui il tecnico fiorentino lascia il Verona, viene annunciato il suo ingaggio da parte della Lazio.[33] Il 18 agosto 2024 debutta sulla panchina biancoceleste in Serie A nel match poi vinto in casa contro il Venezia per 3-1. Esordisce come allenatore nelle competizioni internazionali il 25 settembre successivo, nella partita di Europa League vinta per 3-0 in trasferta contro la Dinamo Kiev. Nonostante l’iniziale scettiscismo dell’ambiente biancoceleste, Baroni nei primi mesi sulla panchina della Lazio inanella una serie di risultati positivi, che gli consentono di ritrovarsi a fine ottobre al terzo posto in campionato, e addirittura al primo posto nella classifica unica di Europa League a punteggio pieno dopo 4 giornate. Tali risultati gli valgono il premio come allenatore del mese di ottobre della Serie A.',
                'img' => 'https://media.gettyimages.com/id/2191685923/it/foto/rome-italy-the-ss-lazio-head-coach-marco-baroni-looks-on-during-the-serie-a-match-between-ss.jpg?s=612x612&w=0&k=20&c=9BlzeXO7VZUQuuCCqUBZycGmh7ATJ8luOB8PlcECSNI='
            ],
            [
                'first_name' => 'Sergio',
                'last_name' => 'Conceição',
                'nationality' => 'Portoghese',
                'trophies' => 12,
                'date_of_birth' => '1974-11-15',
                'description' => 'Sérgio Paulo Marceneiro da Conceição (Coimbra, 15 novembre 1974) è un allenatore di calcio ed ex calciatore portoghese, di ruolo centrocampista, tecnico del Milan. Da giocatore, Sérgio Conceição è stato un centrocampista offensivo portoghese. Ha militato in club come il Porto, con cui ha vinto la Primeira Liga nel 1996-97, 1997-98 e 2003-04, e la Lazio, dove ha conquistato la Serie A nel 1999-2000, la Coppa Italia nello stesso anno e la Supercoppa UEFA nel 1999. Come allenatore, ha guidato il Porto alla vittoria della Primeira Liga nelle stagioni 2017-18, 2019-20 e 2021-22, oltre a diverse coppe nazionali. Nel dicembre 2024, è diventato l’allenatore del Milan. ',
                'img' => 'https://media.gettyimages.com/id/2079003729/it/foto/london-england-sergio-conceicao-head-coach-of-fc-porto-looks-on-prior-to-the-uefa-champions.jpg?s=612x612&w=0&k=20&c=qroYxxYQ7j-bcfpisFZFJuVY3oJhdzobvZ6cWbkt40I='
            ],
            [
                'first_name' => 'Antonio',
                'last_name' => 'Conte',
                'nationality' => 'Italiano',
                'trophies' => 9,
                'date_of_birth' => '1969-07-31',
                'description' => 'Antonio Conte (Lecce, 31 luglio 1969) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico del Napoli. Antonio Conte è stato un centrocampista italiano, noto per la sua lunga militanza nella Juventus dal 1991 al 2004, con cui ha vinto cinque Scudetti, una Champions League nel 1995-96 e una Coppa Intercontinentale nel 1996. Da allenatore, ha guidato la Juventus alla conquista di tre Scudetti consecutivi dal 2011 al 2014. Ha poi allenato la nazionale italiana e il Chelsea, con cui ha vinto la Premier League nel 2016-17 e la FA Cup nel 2017-18. Successivamente, ha condotto l’Inter alla vittoria della Serie A nel 2020-21.',
                'img' => 'https://media.gettyimages.com/id/1466076322/it/foto/milan-italy-antonio-conte-manager-of-tottenham-hotspur-looks-on-prior-to-the-uefa-champions.jpg?s=612x612&w=0&k=20&c=6Nxiv0OkIgCDRDlKS3jGUJrYnY1BYc5LodfOfGcjhDM='
            ],
            [
                'first_name' => 'Eusebio',
                'last_name' => 'Di Francesco',
                'nationality' => 'Italiano',
                'trophies' => 1,
                'date_of_birth' => '1969-09-08',
                'description' => 'Eusebio Di Francesco (Pescara, 8 settembre 1969) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico del Venezia. Centrocampista italiano, Eusebio Di Francesco ha giocato, tra le altre, nella Roma dal 1997 al 2001, vincendo lo Scudetto nella stagione 2000-01. Come allenatore, ha ottenuto successo con il Sassuolo, portando la squadra in Serie A e raggiungendo una storica qualificazione in Europa League nel 2016. Ha poi guidato la Roma fino alle semifinali di Champions League nella stagione 2017-18.',
                'img' => 'https://media.gettyimages.com/id/1655091552/it/foto/udine-italy-manager-of-frosinone-eusebio-di-francesco-looks-on-during-the-serie-a-tim-match.jpg?s=612x612&w=0&k=20&c=rva7MX7pE1JNab7OQoOLYR-euR6vu-U_pacte9UvBEY='
            ],
            [
                'first_name' => 'Marco',
                'last_name' => 'Giampaolo',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1967-08-02',
                'description' => 'Marco Giampaolo (Bellinzona, 2 agosto 1967) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico dell’Empoli. Marco Giampaolo ha avuto una carriera da calciatore come centrocampista in squadre di Serie C. Da allenatore, è noto per il suo lavoro con squadre come Empoli, Sampdoria e Milan, apprezzato per il suo approccio tattico e la valorizzazione dei giovani talenti.',
                'img' => 'https://media.gettyimages.com/id/946708524/it/foto/allianz-stadium-torino-italy-marco-giampaolo-head-coach-of-uc-sampdoria-looks-on-before-the.jpg?s=612x612&w=0&k=20&c=qC_rtl4DdhFKoT6x0n_987Tb775Im-4uTg9aLVJkArE='
            ],
            [
                'first_name' => 'Alessandro',
                'last_name' => 'Nesta',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1976-03-19',
                'description' => 'Alessandro Nesta (Roma, 19 marzo 1976) è un allenatore di calcio ed ex calciatore italiano, di ruolo difensore, tecnico del Monza. Difensore centrale italiano di fama mondiale, Alessandro Nesta ha giocato per la Lazio, vincendo lo Scudetto nel 1999-2000, e per il Milan, con cui ha conquistato due Champions League (2002-03, 2006-07) e due Scudetti (2003-04, 2010-11). Come allenatore, ha guidato squadre come il Miami FC negli Stati Uniti e il Frosinone in Italia, portando quest’ultimo ai playoff di Serie B.',
                'img' => 'https://media.gettyimages.com/id/1227767429/it/foto/frosinone-italy-frosinone-calcio-head-coach-alessandro-nesta-gestures-during-the-serie-b-match.jpg?s=612x612&w=0&k=20&c=esNsXxSgHA2Ss_YpjP9kfgXnanT_IEThfrHQFzbiqBs='
            ],
            [
                'first_name' => 'Fabio',
                'last_name' => 'Pecchia',
                'nationality' => 'Italiano',
                'trophies' => 2,
                'date_of_birth' => '1973-08-24',
                'description' => 'Fabio Pecchia (Cassino, 24 agosto 1973) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico del Parma. Centrocampista italiano, Fabio Pecchia ha giocato in diverse squadre di Serie A e B, tra cui Napoli e Juventus, con cui ha vinto una Supercoppa Italiana nel 1997. Da allenatore, ha guidato il Verona alla promozione in Serie A nella stagione 2016-17 e la Cremonese alla promozione nel 2021-22.',
                'img' => 'https://media.gettyimages.com/id/2194710454/it/foto/parma-italy-fabio-pecchia-head-coach-of-parma-calcio-looks-on-during-the-serie-a-match-between.jpg?s=612x612&w=0&k=20&c=8y5NQp6CIcfOa36CKOQFAGFMATs8wlN73ONvUxbe2-g='
            ],
            [
                'first_name' => 'Claudio',
                'last_name' => 'Ranieri',
                'nationality' => 'Italiano',
                'trophies' => 10,
                'date_of_birth' => '1951-10-20',
                'description' => 'Claudio Ranieri (Roma, 20 ottobre 1951) è un allenatore di calcio ed ex calciatore italiano, di ruolo difensore, tecnico della Roma. Difensore italiano, Claudio Ranieri ha giocato principalmente nel Catanzaro negli anni ’70 e ’80. Come allenatore, ha avuto una carriera internazionale di successo, vincendo la Premier League con il Leicester City nel 2015-16 in una delle più grandi sorprese della storia del calcio. Ha anche allenato squadre come Chelsea, Valencia, Juventus, Roma e Inter.',
                'img' => 'https://media.gettyimages.com/id/1787814703/it/foto/turin-italy-claudio-ranieri-head-coach-of-cagliari-calcio-during-the-serie-a-tim-match-between.jpg?s=612x612&w=0&k=20&c=tsvQNg4pts8wrhxzSWlKW0U1YifBNtO3fKGYkd70ljA='
            ],
            [
                'first_name' => 'Paolo',
                'last_name' => 'Vanoli',
                'nationality' => 'Italiano',
                'trophies' => 2,
                'date_of_birth' => '1972-08-12',
                'description' => 'Paolo Vanoli (Bergamo, 12 agosto 1972) è un allenatore di calcio ed ex calciatore italiano, di ruolo difensore, tecnico del Torino. Terzino sinistro italiano, Paolo Vanoli ha giocato per club come il Parma, con cui ha vinto la Coppa Italia e la Coppa UEFA nel 1998-99. Da allenatore, ha lavorato come assistente in diverse squadre e ha avuto esperienze come tecnico principale, tra cui lo Spartak Mosca nel 2021-22.',
                'img' => 'https://media.gettyimages.com/id/2167180558/it/foto/milan-italy-paolo-vanoli-head-coach-of-torino-gestures-during-the-serie-a-match-between-ac.jpg?s=612x612&w=0&k=20&c=W0u_p1MAchzkj6l2VDmTI1lmHtQWDSEU-duuJa4rjNU='
            ],
            [
                'first_name' => 'Kosta',
                'last_name' => 'Runjaić',
                'nationality' => 'Austriaco',
                'trophies' => 3,
                'date_of_birth' => '1971-06-04',
                'description' => 'Kosta Runjaić (Vienna, 4 giugno 1971) è un allenatore di calcio ed ex calciatore austriaco, di ruolo difensore, tecnico dell’Udinese. Kosta Runjaić è un allenatore tedesco di origini croate. Non avendo avuto una carriera di rilievo come calciatore, si è distinto come allenatore in club tedeschi come il Kaiserslautern e il Duisburg, e successivamente in Polonia con il Pogoń Szczecin.',
                'img' => 'https://media.gettyimages.com/id/2176918776/it/foto/udine-italy-manager-of-udinese-kosta-runjaic-during-the-serie-a-match-between-udinese-and.jpg?s=612x612&w=0&k=20&c=pYwHani3raU7BsgJrb_YdUeZap1ZEW5SPS7JmEFwtPw='
            ],
            [
                'first_name' => 'Paolo',
                'last_name' => 'Zanetti',
                'nationality' => 'Italiano',
                'trophies' => 0,
                'date_of_birth' => '1982-12-16',
                'description' => 'Paolo Zanetti (Brescia, 16 dicembre 1982) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico dell’ Verona. Centrocampista italiano, Paolo Zanetti ha giocato in squadre come l’Empoli e il Torino. Come allenatore, ha guidato il Venezia alla promozione in Serie A nella stagione 2020-21.',
                'img' => 'https://media.gettyimages.com/id/1643138759/it/foto/empoli-italy-paolo-zanetti-heand-coach-of-empoli-fc-looks-on-during-the-serie-a-tim-match.jpg?s=612x612&w=0&k=20&c=v3SVDo5FRhtLpyibC_adf_-6HwsaCi6d8E7Y27XvtTg='
            ],
            [
                'first_name' => 'Gian Piero',
                'last_name' => 'Gasperini',
                'nationality' => 'Italiano',
                'trophies' => 2,
                'date_of_birth' => '1958-01-26',
                'description' => 'Gian Piero Gasperini (Grugliasco, 26 gennaio 1958) è un allenatore di calcio ed ex calciatore italiano, di ruolo centrocampista, tecnico dell’Atalanta. Centrocampista italiano, Gian Piero Gasperini ha giocato principalmente nel Palermo negli anni ’70 e ’80. Da allenatore, è noto per il suo lavoro con l’Atalanta, trasformandola in una delle squadre più competitive della Serie A e raggiungendo i quarti di finale di Champions League nella stagione 2019-20. Questi allenatori hanno avuto carriere significative sia in campo che in panchina, contribuendo in modo rilevante al calcio italiano e internazionale.',
                'img' => 'https://media.gettyimages.com/id/2154748302/it/foto/bergamo-italy-gian-piero-gasperini-head-coach-of-atalanta-bc-looks-on-prior-to-the-serie-a-tim.jpg?s=612x612&w=0&k=20&c=1QGJItrRl_FxcZvAHhK4WbwSwvvuOB3dcZzfXv_8mCU='
            ],
        ];

        foreach ($coaches as $coach) {
            Coach::create($coach);
        }
    }
}
