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
                "first_name" => "Marco",
                "last_name" => "Carnesecchi",
                "date_of_birth" => "2000-07-01",
                "role" => "Portiere",
                "nationality" => "Italia",
                "market_value" => "€20.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.91m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fc8/CRNMR1.png?webp&q=100&ch=840&size=609x-"

            ],
            [
                "first_name" => "Francesco",
                "last_name" => "Rossi",
                "date_of_birth" => "1991-04-27",
                "role" => "Portiere",
                "nationality" => "Italia",
                "market_value" => "€100k",
                "fav_foot" => "Destro",
                "heigth" => "1.85m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fbd/RSSFN.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Rafael",
                "last_name" => "Toloi",
                "date_of_birth" => "1990-10-10",
                "role" => "Difensore",
                "nationality" => "Italia",
                "market_value" => "€1.50m",
                "fav_foot" => "Destro",
                "heigth" => "1.85m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fca/BLLZX.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Raoul",
                "last_name" => "Bellanova",
                "date_of_birth" => "2000-05-17",
                "role" => "Difensore",
                "nationality" => "Italia",
                "market_value" => "€22.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fb4/BLLVRL.png?webp&q=100&ch=840&size=483x-+"
            ],
            [
                "first_name" => "Isak",
                "last_name" => "Hien",
                "date_of_birth" => "1999-01-13",
                "role" => "Difensore",
                "nationality" => "Svezia",
                "market_value" => "€30.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.91m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fae/HIENIS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Berat",
                "last_name" => "Djimsiti",
                "date_of_birth" => "1993-02-19",
                "role" => "Difensore",
                "nationality" => "Albania",
                "market_value" => "€8.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.90m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fe7/DJMBR.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Sead",
                "last_name" => "Kolasinac",
                "date_of_birth" => "1993-06-20",
                "role" => "Difensore",
                "nationality" => "Bosnia-Erzegovina",
                "market_value" => "€10.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fb1/HQZLT.png?webp&q=100&ch=840&size=499.5x-"
            ],
            [
                "first_name" => "Giorgio",
                "last_name" => "Scalvini",
                "date_of_birth" => "2003-12-11",
                "role" => "Difensore",
                "nationality" => "Italia",
                "market_value" => "€45.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.94m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fc2/SCLGRG.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Juan",
                "last_name" => "Cuadrado",
                "date_of_birth" => "1988-05-26",
                "role" => "Centrocampista",
                "nationality" => "Colombia",
                "market_value" => "€1.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.76m",
                "img" => "https://img.legaseriea.it/vimages/66db1bf7/CDRJN.png?webp&q=100&ch=840&size=481.5x-"
            ],
            [
                "first_name" => "Mario",
                "last_name" => "Pašalić",
                "date_of_birth" => "1995-02-09",
                "role" => "Centrocampista",
                "nationality" => "Croazia",
                "market_value" => "€13.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fda/PSLMR.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "José",
                "last_name" => "Ederson",
                "date_of_birth" => "1999-07-07",
                "role" => "Centrocampista",
                "nationality" => "Brasile",
                "market_value" => "€50.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fdf/EDERSO.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Marten",
                "last_name" => "De Roon",
                "date_of_birth" => "1991-03-29",
                "role" => "Centrocampista",
                "nationality" => "Olanda",
                "market_value" => "€7.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.85m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fcc/DRNMR.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Matteo",
                "last_name" => "Ruggeri",
                "date_of_birth" => "2002-07-11",
                "role" => "Centrocampista",
                "nationality" => "Italia",
                "market_value" => "€20.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.87m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fe1/RGGMTT.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Lazar",
                "last_name" => "Samardžić",
                "date_of_birth" => "2002-02-24",
                "role" => "Centrocampista",
                "nationality" => "Serbia",
                "market_value" => "€20.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.84m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fb1/SMRLZR.png?webp&q=100&ch=840&size=508.5x-"
            ],
            [
                "first_name" => "Marco",
                "last_name" => "Brescianini",
                "date_of_birth" => "2000-01-20",
                "role" => "Centrocampista",
                "nationality" => "Italia",
                "market_value" => "€8.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fc3/BRSMR1.png?webp&q=100&ch=840&size=520.5x-"
            ],
            [
                "first_name" => "Davide",
                "last_name" => "Zappacosta",
                "date_of_birth" => "1992-06-11",
                "role" => "Centrocampista",
                "nationality" => "Italia",
                "market_value" => "€6.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.82m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fd6/ZPPDV.png?webp&q=100&ch=840&size=529.5x-"
            ],
            [
                "first_name" => "Ademola",
                "last_name" => "Lookman",
                "date_of_birth" => "1997-10-20",
                "role" => "Attaccante",
                "nationality" => "Nigeria",
                "market_value" => "€55.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.74m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fd4/LKMDML.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Charles",
                "last_name" => "De Ketelaere",
                "date_of_birth" => "2001-03-10",
                "role" => "Attaccante",
                "nationality" => "Belgio",
                "market_value" => "€38.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.92m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fd4/DKTRLS.png?webp&q=100&ch=840&size=606x-"
            ],
            [
                "first_name" => "Mateo",
                "last_name" => "Retegui",
                "date_of_birth" => "1999-04-29",
                "role" => "Attaccante",
                "nationality" => "Italia",
                "market_value" => "€35.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fe0/RETEGU.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Lucasz",
                "last_name" => "Skorupski",
                "date_of_birth" => "1991-05-05",
                "role" => "Portiere",
                "nationality" => "Polonia",
                "market_value" => "€2.50m",
                "fav_foot" => "Destro",
                "heigth" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1bcc/SKRLZ.png?webp&q=100&ch=840&size=468x-"
            ],
            [
                "first_name" => "Emil",
                "last_name" => "Holm",
                "date_of_birth" => "2000-05-13",
                "role" => "Difensore",
                "nationality" => "Svezia",
                "market_value" => "€7.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.91m",
                "img" => "https://img.legaseriea.it/vimages/66cf4bd5/HOLMEM.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Charalampos",
                "last_name" => "Lykogiannis",
                "date_of_birth" => "1993-10-22",
                "role" => "Difensore",
                "nationality" => "Grecia",
                "market_value" => "€1.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.91m",
                "img" => "https://img.legaseriea.it/vimages/66cf4c0a/HMHNL.png?webp&q=100&ch=840&size=540x-"
            ],
            [
                "first_name" => "Tommaso",
                "last_name" => "Pobega",
                "date_of_birth" => "1999-07-15",
                "role" => "Centrocampista",
                "nationality" => "Italia",
                "market_value" => "€10.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1bdd/PBGMMS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Riccardo",
                "last_name" => "Orsolini",
                "date_of_birth" => "1997-01-24",
                "role" => "Attaccante",
                "nationality" => "Italia",
                "market_value" => "€16.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf4bdf/P-557.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Santiago",
                "last_name" => "Castro",
                "date_of_birth" => "2004-09-18",
                "role" => "Attaccante",
                "nationality" => "Argentina",
                "market_value" => "€25.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.79m",
                "img" => "https://img.legaseriea.it/vimages/66cf4be9/CSTNTG.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Elia",
                "last_name" => "Caprile",
                "date_of_birth" => "2001-08-25",
                "role" => "Portiere",
                "nationality" => "Italia",
                "market_value" => "€6.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.91m",
                "img" => "https://img.legaseriea.it/frontend/hwmsg-eb5732a25af49d052753f182cef4a38f50f171c0/public/images/placeholder/player_placeholder.png"
            ],
            [
                "first_name" => "Nadir",
                "last_name" => "Zortea",
                "date_of_birth" => "1999-06-19",
                "role" => "Difensore",
                "nationality" => "Italia",
                "market_value" => "€3.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.87m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a4d/ZRTNDR.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Razvan",
                "last_name" => "Marin",
                "date_of_birth" => "1996-05-23",
                "role" => "Centrocampista",
                "nationality" => "Romania",
                "market_value" => "€4.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.78m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a39/PWPZH.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Roberto",
                "last_name" => "Piccoli",
                "date_of_birth" => "2001-01-27",
                "role" => "Attaccante",
                "nationality" => "Italia",
                "market_value" => "€6.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.90m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a2e/PCCBRT.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Pepe",
                "last_name" => "Reina",
                "date_of_birth" => "1982-09-31",
                "role" => "Portiere",
                "nationality" => "Spagna",
                "market_value" => "€600mila",
                "fav_foot" => "Destro",
                "heigth" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1ca7/RNAJS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Alberto",
                "last_name" => "Dossena",
                "date_of_birth" => "1998-10-13",
                "role" => "Difensore",
                "nationality" => "Italia",
                "market_value" => "€7.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a83/P-527.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Nico",
                "last_name" => "Paz",
                "date_of_birth" => "2004-09-08",
                "role" => "Centrocampista",
                "nationality" => "Argentina",
                "market_value" => "€20.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/671915f1/PAZNIC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Patrick",
                "last_name" => "Cutrone",
                "date_of_birth" => "1998-01-03",
                "role" => "Attaccante",
                "nationality" => "Italia",
                "market_value" => "€7.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a9b/QBNBW.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "first_name" => "Devis",
                "last_name" => "Vaquez",
                "date_of_birth" => "1998-05-12",
                "role" => "Portiere",
                "nationality" => "Colombia",
                "market_value" => "€4.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66cf59ea/VSQDVS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Mattia",
                "last_name" => "De Sciglio",
                "date_of_birth" => "1992-10-28",
                "role" => "Difensore",
                "nationality" => "Italia",
                "market_value" => "€1.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66def3c6/DSCMT.png?webp&q=100&ch=840&size=457.5x-"
            ],
            [
                "first_name" => "Jacopo",
                "last_name" => "Fazzini",
                "date_of_birth" => "2003-03-16",
                "role" => "Centrocampista",
                "nationality" => "Italia",
                "market_value" => "€8.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.78m",
                "img" => "https://img.legaseriea.it/vimages/66cf59e9/FZZJCP.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Lorenzo",
                "last_name" => "Colombo",
                "date_of_birth" => "2002-03-08",
                "role" => "Attaccante",
                "nationality" => "Italia",
                "market_value" => "€6.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66cf5a14/CLMRN1.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "first_name" => "David",
                "last_name" => "De Gea",
                "date_of_birth" => "1990-11-7",
                "role" => "Portiere",
                "nationality" => "Spagna",
                "market_value" => "€5.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.92m",
                "img" => "https://img.legaseriea.it/vimages/671915c9/DGDVD.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Robin",
                "last_name" => "Gosens",
                "date_of_birth" => "1994-07-05",
                "role" => "Difensore",
                "nationality" => "Germania",
                "market_value" => "€8.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/671915dc/GSNRBN.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Edoardo",
                "last_name" => "Bove",
                "date_of_birth" => "2002-05-16",
                "role" => "Centrocampista",
                "nationality" => "Italia",
                "market_value" => "€14.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.81m",
                "img" => "https://img.legaseriea.it/vimages/66e2a1f7/BOVEED.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Moise",
                "last_name" => "Kean",
                "date_of_birth" => "2000-02-28",
                "role" => "Attaccante",
                "nationality" => "Italia",
                "market_value" => "€30.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66d05901/GQQMS.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "first_name" => "Nicola",
                "last_name" => "Leali",
                "date_of_birth" => "1993-02-17",
                "role" => "Portiere",
                "nationality" => "Italia",
                "market_value" => "€800mila",
                "fav_foot" => "Destro",
                "heigth" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66db1c55/LLNCL.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Aaron",
                "last_name" => "Martin",
                "date_of_birth" => "1997-04-22",
                "role" => "Difensore",
                "nationality" => "Spagna",
                "market_value" => "€5.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.78m",
                "img" => "https://img.legaseriea.it/vimages/66d05941/MRTNRN.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Ruslan",
                "last_name" => "Malinovskyi",
                "date_of_birth" => "1993-05-04",
                "role" => "Centrocampista",
                "nationality" => "Ucraina",
                "market_value" => "€3.50m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.81m",
                "img" => "https://img.legaseriea.it/vimages/66d05922/XKPXG.png?webp&q=100&ch=840&size=552x-"
            ],
            [
                "first_name" => "Andrea",
                "last_name" => "Pinamonti",
                "date_of_birth" => "1999-05-19",
                "role" => "Attaccante",
                "nationality" => "Italia",
                "market_value" => "€16.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.85m",
                "img" => "https://img.legaseriea.it/vimages/66d05952/QVBNF.png?webp&q=100&ch=840&size=453x-"
            ],
            // ----------
            [
                "first_name" => "Lorenzo",
                "last_name" => "Montipò",
                "date_of_birth" => "1996-02-20",
                "role" => "Portiere",
                "nationality" => "Italia",
                "market_value" => "€3.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.91m",
                "img" => "https://img.legaseriea.it/vimages/6749cabd/c7fky0h6gi7wmibnv2tzf6mz9.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Davide",
                "last_name" => "Faraoni",
                "date_of_birth" => "1991-10-25",
                "role" => "Difensore",
                "nationality" => "Italia",
                "market_value" => "€3.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.91m",
                "img" => "https://img.legaseriea.it/vimages/6749da90/68etig279gs3btjb7fv6rvfth.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Abdou",
                "last_name" => "Harroui",
                "date_of_birth" => "1998-01-13",
                "role" => "Centrocampista",
                "nationality" => "Marocco",
                "market_value" => "€2.50m",
                "fav_foot" => "Entrambi",
                "heigth" => "1.82m",
                "img" => "https://img.legaseriea.it/vimages/6749dc54/74o97lnqpku6m9svks66qbend.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Amin",
                "last_name" => "Sarr",
                "date_of_birth" => "2001-03-11",
                "role" => "Attaccante",
                "nationality" => "Svezia",
                "market_value" => "€4.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/6749e749/amvonu36at4dg7ksi1ioczi3u.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "first_name" => "Yann",
                "last_name" => "Sommer",
                "date_of_birth" => "1988-12-17",
                "role" => "Portiere",
                "nationality" => "Svizzera",
                "market_value" => "€4.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66db1c6c/SMMYN.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Federico",
                "last_name" => "Dimarco",
                "date_of_birth" => "1997-11-10",
                "role" => "Difensore",
                "nationality" => "Italia",
                "market_value" => "€60.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.75m",
                "img" => "https://img.legaseriea.it/vimages/66cf305e/NWFZS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Nicolò",
                "last_name" => "Barella",
                "date_of_birth" => "1997-02-07",
                "role" => "Centrocampista",
                "nationality" => "Italia",
                "market_value" => "€80.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.75m",
                "img" => "https://img.legaseriea.it/vimages/66cf3057/BRLNC.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Lautaro",
                "last_name" => "Martinez",
                "date_of_birth" => "1997-08-22",
                "role" => "Attaccante",
                "nationality" => "Argentina",
                "market_value" => "€100.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.74m",
                "img" => "https://img.legaseriea.it/vimages/66cf3058/MRTLTR.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "first_name" => "Michele",
                "last_name" => "Di Gregorio",
                "date_of_birth" => "1997-07-27",
                "role" => "Portiere",
                "nationality" => "Italia",
                "market_value" => "€18.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.87m",
                "img" => "https://img.legaseriea.it/vimages/66d05730/ZMPGT.png?webp&q=100&ch=840&size=528x-"
            ],
            [
                "first_name" => "Gleison",
                "last_name" => "Bremer",
                "date_of_birth" => "1997-03-18",
                "role" => "Difensore",
                "nationality" => "Brasile",
                "market_value" => "€60.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66d05708/BRMRX.png?webp&q=100&ch=840&size=-x396"
            ],
            [
                "first_name" => "Khephren",
                "last_name" => "Thuram",
                "date_of_birth" => "2001-03-26",
                "role" => "Centrocampista",
                "nationality" => "Francia",
                "market_value" => "€35.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.92m",
                "img" => "https://img.legaseriea.it/vimages/66d05721/THRHRN.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Kenan",
                "last_name" => "Yldiz",
                "date_of_birth" => "2005-05-04",
                "role" => "Attaccante",
                "nationality" => "Turchia",
                "market_value" => "€45.00m",
                "fav_foot" => "Entrambi",
                "heigth" => "1.87m",
                "img" => "https://img.legaseriea.it/vimages/66d0571b/YLDKNN.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "first_name" => "Ivan",
                "last_name" => "Provedel",
                "date_of_birth" => "1994-03-17",
                "role" => "Portiere",
                "nationality" => "Italia",
                "market_value" => "€14.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.94m",
                "img" => "https://img.legaseriea.it/vimages/66d057db/PRDVN.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Nuno",
                "last_name" => "Tavares",
                "date_of_birth" => "2000-01-26",
                "role" => "Difensore",
                "nationality" => "Portogallo",
                "market_value" => "€25.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66d05805/NNTVRS.png?webp&q=100&ch=840&size=628.5x-"
            ],
            [
                "first_name" => "Mattia",
                "last_name" => "Zaccagni",
                "date_of_birth" => "1995-06-16",
                "role" => "Centrocampista",
                "nationality" => "Italia",
                "market_value" => "€20.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.77m",
                "img" => "https://img.legaseriea.it/vimages/66d057cc/BTMNG.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Taty",
                "last_name" => "Castellanos",
                "date_of_birth" => "1998-10-03",
                "role" => "Attaccante",
                "nationality" => "Argentina",
                "market_value" => "€20.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.78m",
                "img" => "https://img.legaseriea.it/vimages/66d057ef/CSTTTY.png?webp&q=100&ch=840&size=591x-"
            ],
            // ----------
            [
                "first_name" => "Wladimiro",
                "last_name" => "Falcone",
                "date_of_birth" => "1995-04-12",
                "role" => "Portiere",
                "nationality" => "Italia",
                "market_value" => "€4.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.95m",
                "img" => "https://img.legaseriea.it/vimages/66d0589b/FLCWL.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Federico",
                "last_name" => "Baschirotto",
                "date_of_birth" => "1996-09-20",
                "role" => "Difensore",
                "nationality" => "Italia",
                "market_value" => "€5.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.87m",
                "img" => "https://img.legaseriea.it/vimages/66d0587c/BSCDRC.png?webp&q=100&ch=840&size=574.5x-"
            ],
            [
                "first_name" => "Lassana",
                "last_name" => "coulibaly",
                "date_of_birth" => "1996-04-10",
                "role" => "Centrocampista",
                "nationality" => "Mali",
                "market_value" => "€2.50m",
                "fav_foot" => "Destro",
                "heigth" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66d0586f/WXPLR.png?webp&q=100&ch=840&size=453x-"
            ],
            [
                "first_name" => "Nikola",
                "last_name" => "Krstović",
                "date_of_birth" => "2000-04-05",
                "role" => "Attaccante",
                "nationality" => "Montenegro",
                "market_value" => "€6.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.85m",
                "img" => "https://img.legaseriea.it/vimages/66d05884/KRSNKL.png?webp&q=100&ch=840&size=-x444"
            ],
            // ----------
            [
                "first_name" => "Mike",
                "last_name" => "Maignan",
                "date_of_birth" => "1995-07-03",
                "role" => "Portiere",
                "nationality" => "Francia",
                "market_value" => "€35.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.91m",
                "img" => "https://img.legaseriea.it/vimages/66cf21da/MGNMK.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Theo",
                "last_name" => "Hernández",
                "date_of_birth" => "1997-10-06",
                "role" => "Difensore",
                "nationality" => "Francia",
                "market_value" => "€50.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.84m",
                "img" => "https://img.legaseriea.it/vimages/67191596/HRNZTH.png?webp&q=100&ch=840&size=306x-"
            ],
            [
                "first_name" => "Tijjani",
                "last_name" => "Reijnders",
                "date_of_birth" => "1998-07-29",
                "role" => "Centrocampista",
                "nationality" => "Olanda",
                "market_value" => "€50.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.85m",
                "img" => "https://img.legaseriea.it/vimages/66cf21cb/RJNJJN.png?webp&q=100&ch=840&size=271.5x-"
            ],
            [
                "first_name" => "Rafael",
                "last_name" => "Leão",
                "date_of_birth" => "1999-06-10",
                "role" => "Attaccante",
                "nationality" => "Portogallo",
                "market_value" => "€75.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66cf21b3/LEAORA.png?webp&q=100&ch=840&size=-x265.5"
            ],
            // ----------
            [
                "first_name" => "Stefano",
                "last_name" => "Turati",
                "date_of_birth" => "2001-09-05",
                "role" => "Portiere",
                "nationality" => "Italia",
                "market_value" => "€7.50m",
                "fav_foot" => "Destro",
                "heigth" => "1.88m",
                "img" => "https://img.legaseriea.it/vimages/66cf300b/TRTTFN.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Luca",
                "last_name" => "Caldirola",
                "date_of_birth" => "1991-02-01",
                "role" => "Difensore",
                "nationality" => "Italia",
                "market_value" => "€1.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/66cf3005/CLDLC.png?webp&q=100&ch=840&size=294x-"
            ],
            [
                "first_name" => "Matteo",
                "last_name" => "Pessina",
                "date_of_birth" => "1997-04-21",
                "role" => "Centrocampista",
                "nationality" => "Italia",
                "market_value" => "€12.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.87m",
                "img" => "https://img.legaseriea.it/vimages/66cf2fed/CVGHT.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Dany",
                "last_name" => "Mota",
                "date_of_birth" => "1998-08-02",
                "role" => "Attaccante",
                "nationality" => "Portogallo",
                "market_value" => "€5.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.80m",
                "img" => "https://img.legaseriea.it/vimages/66cf3013/P-860.png?webp&q=100&ch=840&size=-x265.5"
            ],
            // ----------
            [
                "first_name" => "Alex",
                "last_name" => "Meret",
                "date_of_birth" => "1997-03-22",
                "role" => "Portiere",
                "nationality" => "Italia",
                "market_value" => "€12.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.90m",
                "img" => "https://img.legaseriea.it/vimages/66db1c0b/XXNLW.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Giovanni",
                "last_name" => "Di Lorenzo",
                "date_of_birth" => "1993-08-04",
                "role" => "Difensore",
                "nationality" => "Italia",
                "market_value" => "€15.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66d058a9/DLRG9.png?webp&q=100&ch=840&size=306x-"
            ],
            [
                "first_name" => "Stanislav",
                "last_name" => "Lobotka",
                "date_of_birth" => "1994-11-25",
                "role" => "Centrocampista",
                "nationality" => "Slovacchia",
                "market_value" => "€28.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.68m",
                "img" => "https://img.legaseriea.it/vimages/66d058c5/LBTST.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Romelu",
                "last_name" => "Lukaku",
                "date_of_birth" => "1993-05-13",
                "role" => "Attaccante",
                "nationality" => "Belgio",
                "market_value" => "€25.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.91m",
                "img" => "https://img.legaseriea.it/vimages/66db1c03/LKKRM.png?webp&q=100&ch=840&size=-x265.5"
            ],
            // ----------
            [
                "first_name" => "Edoardo",
                "last_name" => "Corvi",
                "date_of_birth" => "2001-03-23",
                "role" => "Portiere",
                "nationality" => "Italia",
                "market_value" => "€350mila",
                "fav_foot" => "Destro",
                "heigth" => "1.87m",
                "img" => "https://img.legaseriea.it/vimages/66d0578d/CRVDRD.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Enrico",
                "last_name" => "Delprato",
                "date_of_birth" => "1999-11-10",
                "role" => "Difensore",
                "nationality" => "Italia",
                "market_value" => "€6.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.83m",
                "img" => "https://img.legaseriea.it/vimages/66d057ca/DLPNRC.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Mateusz",
                "last_name" => "Kowalski",
                "date_of_birth" => "2005-07-21",
                "role" => "Centrocampista",
                "nationality" => "Polonia",
                "market_value" => "€300mila",
                "fav_foot" => "Destro",
                "heigth" => "1.97m",
                "img" => "https://img.legaseriea.it/vimages/66d491da/KWLTSZ.png?webp&q=100&ch=840&size=267x-"
            ],
            [
                "first_name" => "Ange-Yoan",
                "last_name" => "Bonny",
                "date_of_birth" => "2003-10-25",
                "role" => "Attaccante",
                "nationality" => "Francia",
                "market_value" => "€20.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.89m",
                "img" => "https://img.legaseriea.it/vimages/66d0578b/BNN-YN.png?webp&q=100&ch=840&size=-x265.5"
            ],
            // ----------
            [
                "first_name" => "Mile",
                "last_name" => "Svilar",
                "date_of_birth" => "1999-08-27",
                "role" => "Portiere",
                "nationality" => "Serbia",
                "market_value" => "€14.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.89m",
                "img" => "https://img.legaseriea.it/vimages/66cf21e4/SVLRML.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Gianluca",
                "last_name" => "Mancini",
                "date_of_birth" => "1996-04-17",
                "role" => "Difensore",
                "nationality" => "Italia",
                "market_value" => "€18.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.90m",
                "img" => "https://img.legaseriea.it/vimages/66cf21e2/MNCGW.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Lorenzo",
                "last_name" => "Pellegrini",
                "date_of_birth" => "1996-06-19",
                "role" => "Centrocampista",
                "nationality" => "Italia",
                "market_value" => "€14.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.86m",
                "img" => "https://img.legaseriea.it/vimages/66cf21f6/PGWCM.png?webp&q=100&ch=840&size=301.5x-"
            ],
            [
                "first_name" => "Paulo",
                "last_name" => "Dybala",
                "date_of_birth" => "1993-11-15",
                "role" => "Attaccante",
                "nationality" => "Argentina",
                "market_value" => "€8.00m",
                "fav_foot" => "Sinistro",
                "heigth" => "1.77m",
                "img" => "https://img.legaseriea.it/vimages/66cf2202/DBLPL.png?webp&q=100&ch=840&size=-x265.5"
            ],
            // ----------
            [
                "first_name" => "Vanja",
                "last_name" => "Milinković-Savić",
                "date_of_birth" => "1997-02-20",
                "role" => "Portiere",
                "nationality" => "Serbia",
                "market_value" => "€8.00m",
                "fav_foot" => "Destro",
                "heigth" => "2.02m",
                "img" => "https://img.legaseriea.it/vimages/66db1c87/MLNVNJ.png?webp&q=100&ch=840&size=471x-"
            ],
            [
                "first_name" => "Guillermo",
                "last_name" => "Maripán",
                "date_of_birth" => "1994-05-06",
                "role" => "Difensore",
                "nationality" => "Cile",
                "market_value" => "€4.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.93m",
                "img" => "https://img.legaseriea.it/vimages/66db1c78/MRPLRM.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Samuele",
                "last_name" => "Ricci",
                "date_of_birth" => "2001-08-21",
                "role" => "Centrocampista",
                "nationality" => "Italia",
                "market_value" => "€28.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.81m",
                "img" => "https://img.legaseriea.it/vimages/66d059c0/RCCSML.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Ché",
                "last_name" => "Adams",
                "date_of_birth" => "1996-07-13",
                "role" => "Attaccante",
                "nationality" => "Scozia",
                "market_value" => "€15.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.79m",
                "img" => "https://img.legaseriea.it/vimages/66d059d9/ADMCX.png?webp&q=100&ch=840&size=-x265.5"
            ],
            // ----------
            [
                "first_name" => "Maduka",
                "last_name" => "Okoye",
                "date_of_birth" => "1999-08-28",
                "role" => "Portiere",
                "nationality" => "Nigeria",
                "market_value" => "€7.50m",
                "fav_foot" => "Destro",
                "heigth" => "1.98m",
                "img" => "https://img.legaseriea.it/vimages/66d05974/OKOYEM.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Kingsley",
                "last_name" => "Ehizibue",
                "date_of_birth" => "1995-05-25",
                "role" => "Difensore",
                "nationality" => "Olanda",
                "market_value" => "€3.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.89m",
                "img" => "https://img.legaseriea.it/vimages/66d0597a/HZBSLY.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Sandi",
                "last_name" => "Lovrić",
                "date_of_birth" => "1998-03-28",
                "role" => "Centrocampista",
                "nationality" => "Slovenia",
                "market_value" => "€8.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.80m",
                "img" => "https://img.legaseriea.it/vimages/66d059a7/LVRSND.png?webp&q=100&ch=840&size=-x265.5"
            ],
            [
                "first_name" => "Lorenzo",
                "last_name" => "Lucca",
                "date_of_birth" => "2000-09-10",
                "role" => "Attaccante",
                "nationality" => "Italia",
                "market_value" => "€18.00m",
                "fav_foot" => "Destro",
                "heigth" => "2.01m",
                "img" => "https://img.legaseriea.it/vimages/66d059a0/LCCRN1.png?webp&q=100&ch=840&size=-x265.5"
            ],
            // ----------
            [
                "first_name" => "Jesse",
                "last_name" => "Joronen",
                "date_of_birth" => "1993-03-21",
                "role" => "Portiere",
                "nationality" => "Finlandia",
                "market_value" => "€1.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.97m",
                "img" => "https://img.legaseriea.it/vimages/66d0577e/JRNJSS.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Jay",
                "last_name" => "Idzes",
                "date_of_birth" => "2000-06-02",
                "role" => "Difensore",
                "nationality" => "Indonesia",
                "market_value" => "€3.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.90m",
                "img" => "https://img.legaseriea.it/vimages/66d05786/IDZESJ.png?webp&q=100&ch=840&size=-x444"
            ],
            [
                "first_name" => "Hans",
                "last_name" => "Nicolussi Caviglia",
                "date_of_birth" => "2000-06-18",
                "role" => "Centrocampista",
                "nationality" => "Italia",
                "market_value" => "€6.00m",
                "fav_foot" => "Destro",
                "heigth" => "1.84m",
                "img" => "https://img.legaseriea.it/vimages/67191580/NCLHNS.png?webp&q=100&ch=840&size=885x-"
            ],
            [
                "first_name" => "Christian",
                "last_name" => " Gytkjær",
                "date_of_birth" => "1990-05-06",
                "role" => "Attaccante",
                "nationality" => "Danimarca",
                "market_value" => "€700mila",
                "fav_foot" => "Destro",
                "heigth" => "1.85m",
                "img" => "https://img.legaseriea.it/vimages/66d05766/GYTSTN.png?webp&q=100&ch=840&size=459x-"
            ],
        ];
        foreach ($players as $player) {
            Player::create($player);
        }
    }
}
