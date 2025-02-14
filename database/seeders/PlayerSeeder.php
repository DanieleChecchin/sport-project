<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [
            [
                "nome" => "Marco",
                "cognome" => "Carnesecchi",
                "data_di_nascita" => "2000-07-01",
                "ruolo" => "Portiere",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.91m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fc8/CRNMR1.png?webp&q=100&ch=840&size=609x-"

            ],
            [
                "nome" => "Francesco",
                "cognome" => "Rossi",
                "data_di_nascita" => "1991-04-27",
                "ruolo" => "Portiere",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€100k",
                "piede_preferito" => "Destro",
                "altezza" => "1.85m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fbd/RSSFN.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Rafael",
                "cognome" => "Toloi",
                "data_di_nascita" => "1990-10-10",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€1.50m",
                "piede_preferito" => "Destro",
                "altezza" => "1.85m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fca/BLLZX.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Raoul",
                "cognome" => "Bellanova",
                "data_di_nascita" => "2000-05-17",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€22.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fb4/BLLVRL.png?webp&q=100&ch=840&size=483x-+"
            ],
            [
                "nome" => "Isak",
                "cognome" => "Hien",
                "data_di_nascita" => "1999-01-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Svezia",
                "valore_di_mercato" => "€30.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.91m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fae/HIENIS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Berat",
                "cognome" => "Djimsiti",
                "data_di_nascita" => "1993-02-19",
                "ruolo" => "Difensore",
                "nazionalità" => "Albania",
                "valore_di_mercato" => "€8.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.90m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fe7/DJMBR.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Sead",
                "cognome" => "Kolasinac",
                "data_di_nascita" => "1993-06-20",
                "ruolo" => "Difensore",
                "nazionalità" => "Bosnia-Erzegovina",
                "valore_di_mercato" => "€10.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fb1/HQZLT.png?webp&q=100&ch=840&size=499.5x-"
            ],
            [
                "nome" => "Giorgio",
                "cognome" => "Scalvini",
                "data_di_nascita" => "2003-12-11",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€45.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.94m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fc2/SCLGRG.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Juan",
                "cognome" => "Cuadrado",
                "data_di_nascita" => "1988-05-26",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Colombia",
                "valore_di_mercato" => "€1.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.76m",
                "img" => "https://img.legaseriea.it/vimages/66db1bf7/CDRJN.png?webp&q=100&ch=840&size=481.5x-"
            ],
            [
                "nome" => "Mario",
                "cognome" => "Pašalić",
                "data_di_nascita" => "1995-02-09",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Croazia",
                "valore_di_mercato" => "€13.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fda/PSLMR.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "José",
                "cognome" => "Ederson",
                "data_di_nascita" => "1999-07-07",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Brasile",
                "valore_di_mercato" => "€50.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fdf/EDERSO.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Marten",
                "cognome" => "De Roon",
                "data_di_nascita" => "1991-03-29",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Olanda",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.85m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fcc/DRNMR.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Matteo",
                "cognome" => "Ruggeri",
                "data_di_nascita" => "2002-07-11",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.87m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fe1/RGGMTT.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Lazar",
                "cognome" => "Samardžić",
                "data_di_nascita" => "2002-02-24",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Serbia",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.84m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fb1/SMRLZR.png?webp&q=100&ch=840&size=508.5x-"
            ],
            [
                "nome" => "Marco",
                "cognome" => "Brescianini",
                "data_di_nascita" => "2000-01-20",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€8.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fc3/BRSMR1.png?webp&q=100&ch=840&size=520.5x-"
            ],
            [
                "nome" => "Davide",
                "cognome" => "Zappacosta",
                "data_di_nascita" => "1992-06-11",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€6.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.82m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fd6/ZPPDV.png?webp&q=100&ch=840&size=529.5x-"
            ],
            [
                "nome" => "Ademola",
                "cognome" => "Lookman",
                "data_di_nascita" => "1997-10-20",
                "ruolo" => "Attaccante",
                "nazionalità" => "Nigeria",
                "valore_di_mercato" => "€55.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.74m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fd4/LKMDML.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Charles",
                "cognome" => "De Ketelaere",
                "data_di_nascita" => "2001-03-10",
                "ruolo" => "Attaccante",
                "nazionalità" => "Belgio",
                "valore_di_mercato" => "€38.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.92m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fd4/DKTRLS.png?webp&q=100&ch=840&size=606x-"
            ],
            [
                "nome" => "Mateo",
                "cognome" => "Retegui",
                "data_di_nascita" => "1999-04-29",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€35.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fe0/RETEGU.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Lucasz",
                "cognome" => "Skorupski",
                "data_di_nascita" => "1991-05-05",
                "ruolo" => "Portiere",
                "nazionalità" => "Polonia",
                "valore_di_mercato" => "€2.50m",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1bcc/SKRLZ.png?webp&q=100&ch=840&size=468x-"
            ],
            [
                "nome" => "Emil",
                "cognome" => "Holm",
                "data_di_nascita" => "2000-05-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Svezia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.91m",
                "img" => "https://img.legaseriea.it/vimages/66cf4bd5/HOLMEM.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Charalampos",
                "cognome" => "Lykogiannis",
                "data_di_nascita" => "1993-10-22",
                "ruolo" => "Difensore",
                "nazionalità" => "Grecia",
                "valore_di_mercato" => "€1.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.91m",
                "img" => "https://img.legaseriea.it/vimages/66cf4c0a/HMHNL.png?webp&q=100&ch=840&size=540x-"
            ],
            [
                "nome" => "Tommaso",
                "cognome" => "Pobega",
                "data_di_nascita" => "1999-07-15",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€10.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1bdd/PBGMMS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Riccardo",
                "cognome" => "Orsolini",
                "data_di_nascita" => "1997-01-24",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€16.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf4bdf/P-557.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Santiago",
                "cognome" => "Castro",
                "data_di_nascita" => "2004-09-18",
                "ruolo" => "Attaccante",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€25.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.79m",
                "img" => "https://img.legaseriea.it/vimages/66cf4be9/CSTNTG.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Elia",
                "cognome" => "Caprile",
                "data_di_nascita" => "2001-08-25",
                "ruolo" => "Portiere",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€6.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.91m",
                "img" => "https://img.legaseriea.it/frontend/hwmsg-eb5732a25af49d052753f182cef4a38f50f171c0/public/images/placeholder/player_placeholder.png"
            ],
            [
                "nome" => "Nadir",
                "cognome" => "Zortea",
                "data_di_nascita" => "1999-06-19",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€3.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.87m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a4d/ZRTNDR.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Razvan",
                "cognome" => "Marin",
                "data_di_nascita" => "1996-05-23",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Romania",
                "valore_di_mercato" => "€4.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.78m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a39/PWPZH.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Roberto",
                "cognome" => "Piccoli",
                "data_di_nascita" => "2001-01-27",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€6.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.90m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a2e/PCCBRT.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "nome" => "Pepe",
                "cognome" => "Reina",
                "data_di_nascita" => "1982-09-31",
                "ruolo" => "Portiere",
                "nazionalità" => "Spagna",
                "valore_di_mercato" => "€600mila",
                "piede_preferito" => "Destro",
                "altezza" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Dossena",
                "data_di_nascita" => "1998-10-13",
                "ruolo" => "Difensore",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Nico",
                "cognome" => "Paz",
                "data_di_nascita" => "2004-09-08",
                "ruolo" => "Centrocampista",
                "nazionalità" => "Argentina",
                "valore_di_mercato" => "€20.00m",
                "piede_preferito" => "Sinistro",
                "altezza" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "nome" => "Patrick",
                "cognome" => "Cutrone",
                "data_di_nascita" => "1998-01-03",
                "ruolo" => "Attaccante",
                "nazionalità" => "Italia",
                "valore_di_mercato" => "€7.00m",
                "piede_preferito" => "Destro",
                "altezza" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
        ];
        foreach ($players as $player) {
            Player::create($player);
        }
    }
}
