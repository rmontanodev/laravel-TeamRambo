<?php

use Illuminate\Database\Seeder;

class CompetitionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ID of teams
        $uefa_teams = [1,2];
        $competitions = array (
            0 =>
                array (
                    'nombre' => 'EUROPA: Champions League - Clasificación - Cuartos de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            1 =>
                array (
                    'nombre' => 'EUROPA: Europa League - Clasificación - Cuartos de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            2 =>
                array (
                    'nombre' => 'ALEMANIA: 3. Liga - Jornada 3',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            3 =>
                array (
                    'nombre' => 'ALEMANIA: Regionalliga Norte - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            4 =>
                array (
                    'nombre' => 'ALEMANIA: Regionalliga Nordost - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            5 =>
                array (
                    'nombre' => 'ASIA: Copa AFC - Playoffs - 1/8 de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            6 =>
                array (
                    'nombre' => 'AUSTRALIA: FFA Cup - 1/16 de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            7 =>
                array (
                    'nombre' => 'BOLIVIA: División Profesional - Clausura - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            8 =>
                array (
                    'nombre' => 'BRASIL: Brasileirao Serie B - Jornada 13',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            9 =>
                array (
                    'nombre' => 'BRASIL: Copa Verde - 1/16 de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            10 =>
                array (
                    'nombre' => 'COLOMBIA: Copa Águila - Playoffs - 1/8 de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            11 =>
                array (
                    'nombre' => 'COREA DEL SUR: K League 1 - Jornada 23',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            12 =>
                array (
                    'nombre' => 'ECUADOR: Copa Ecuador - 1/8 de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            13 =>
                array (
                    'nombre' => 'INDONESIA: Liga 1 - Jornada 4',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            14 =>
                array (
                    'nombre' => 'ISRAEL: Toto Cup - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            15 =>
                array (
                    'nombre' => 'JAPÓN: J-League - Jornada 16',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            16 =>
                array (
                    'nombre' => 'JAPÓN: J-League Division 2 - Jornada 25',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            17 =>
                array (
                    'nombre' => 'MÉXICO: Copa MX',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            18 =>
                array (
                    'nombre' => 'MUNDIAL: Amistosos de Clubs',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            19 =>
                array (
                    'nombre' => 'MUNDIAL: Audi Cup - 3ª posición',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            20 =>
                array (
                    'nombre' => 'MUNDIAL: Audi Cup - Final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            21 =>
                array (
                    'nombre' => 'MUNDIAL: Amistosos de Clubs Femeninos',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            22 =>
                array (
                    'nombre' => 'MUNDIAL: Juegos Panamericanos Femenino',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            23 =>
                array (
                    'nombre' => 'MUNDIAL: COTIF L\'Alcúdia',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            24 =>
                array (
                    'nombre' => 'NORTE, CENTROAMÉRICA Y CARIBE: Liga CONCACAF - 1/16 de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            25 =>
                array (
                    'nombre' => 'SUDAMÉRICA: Copa Libertadores - Playoffs - 1/8 de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            26 =>
                array (
                    'nombre' => 'SUDAMÉRICA: Copa Sudamericana - 1/8 de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            27 =>
                array (
                    'nombre' => 'SUECIA: Superettan - Jornada 12',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            28 =>
                array (
                    'nombre' => 'TAILANDIA: Thai League 1 - Jornada 21',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            29 =>
                array (
                    'nombre' => 'UCRANIA: Premier League - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            30 =>
                array (
                    'nombre' => 'UZBEKISTÁN: Super League - Jornada 15',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            31 =>
                array (
                    'nombre' => 'ARGENTINA: Superliga - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            32 =>
                array (
                    'nombre' => 'BOLIVIA: División Profesional - Clausura - Jornada 4',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            33 =>
                array (
                    'nombre' => 'BRASIL: Brasileirao Serie A - Jornada 12',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            34 =>
                array (
                    'nombre' => 'ECUADOR: Liga Pro - Jornada 19',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            35 =>
                array (
                    'nombre' => 'INDONESIA: Liga 1 - Jornada 11',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            36 =>
                array (
                    'nombre' => 'MUNDIAL: Audi Cup - Semifinales',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            37 =>
                array (
                    'nombre' => 'MUNDIAL: Juegos Panamericanos',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            38 =>
                array (
                    'nombre' => 'MUNDIAL: CEE Cup - Playoffs - Final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            39 =>
                array (
                    'nombre' => 'SUIZA: Challenge League - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            40 =>
                array (
                    'nombre' => 'ÁFRICA: Campeonato Africano de Naciones - Clasificación - Semifinales',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            41 =>
                array (
                    'nombre' => 'ALEMANIA: 2. Bundesliga - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            42 =>
                array (
                    'nombre' => 'ALEMANIA: Regionalliga Sudwest - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            43 =>
                array (
                    'nombre' => 'BULGARIA: Parva Liga - Jornada 3',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            44 =>
                array (
                    'nombre' => 'CHILE: Primera División - Jornada 15',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            45 =>
                array (
                    'nombre' => 'COLOMBIA: Liga Águila - Clausura - Jornada 3',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            46 =>
                array (
                    'nombre' => 'COSTA RICA: Primera División - Apertura - Jornada 3',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            47 =>
                array (
                    'nombre' => 'DINAMARCA: Superliga - Jornada 3',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            48 =>
                array (
                    'nombre' => 'ECUADOR: Serie B - Jornada 20',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            49 =>
                array (
                    'nombre' => 'ESTADOS UNIDOS: USL Championship',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            50 =>
                array (
                    'nombre' => 'FRANCIA: Ligue 2 - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            51 =>
                array (
                    'nombre' => 'HONDURAS: Liga Nacional - Apertura - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            52 =>
                array (
                    'nombre' => 'IRLANDA: Premier Division - Jornada 21',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            53 =>
                array (
                    'nombre' => 'ISLANDIA: Pepsideild - Jornada 14',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            54 =>
                array (
                    'nombre' => 'MÉXICO: Liga MX - Apertura - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            55 =>
                array (
                    'nombre' => 'MUNDIAL: CEE Cup - Playoffs - 7ª posición',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            56 =>
                array (
                    'nombre' => 'MUNDIAL: CEE Cup - Playoffs - 3ª posición',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            57 =>
                array (
                    'nombre' => 'MUNDIAL: CEE Cup - Playoffs - 5ª posición',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            58 =>
                array (
                    'nombre' => 'NICARAGUA: Liga Primera - Apertura - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            59 =>
                array (
                    'nombre' => 'PARAGUAY: Primera División - Clausura - Jornada 3',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            60 =>
                array (
                    'nombre' => 'POLONIA: Ekstraklasa - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            61 =>
                array (
                    'nombre' => 'REPÚBLICA CHECA: 1. Liga - Jornada 3',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            62 =>
                array (
                    'nombre' => 'REPÚBLICA CHECA: FNL - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            63 =>
                array (
                    'nombre' => 'RUMANÍA: Liga 1 - Jornada 3',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            64 =>
                array (
                    'nombre' => 'RUSIA: Premier League - Jornada 3',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            65 =>
                array (
                    'nombre' => 'RUSIA: FNL - Jornada 5',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            66 =>
                array (
                    'nombre' => 'SUECIA: Allsvenskan - Jornada 17',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            67 =>
                array (
                    'nombre' => 'ÁFRICA: Campeonato Africano de Naciones - Clasificación - Cuartos de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            68 =>
                array (
                    'nombre' => 'ALEMANIA: 3. Liga - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            69 =>
                array (
                    'nombre' => 'ALEMANIA: Regionalliga Norte - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            70 =>
                array (
                    'nombre' => 'ALEMANIA: Regionalliga Nordost - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            71 =>
                array (
                    'nombre' => 'ALEMANIA: Regionalliga Oeste - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            72 =>
                array (
                    'nombre' => 'AUSTRIA: Tipico Bundesliga - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            73 =>
                array (
                    'nombre' => 'AUSTRIA: 2. Liga - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            74 =>
                array (
                    'nombre' => 'BÉLGICA: Jupiler Pro League - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            75 =>
                array (
                    'nombre' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            76 =>
                array (
                    'nombre' => 'BOSNIA Y HERZEGOVINA: Premier League - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            77 =>
                array (
                    'nombre' => 'BRASIL: Brasileirao Serie B - Jornada 12',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            78 =>
                array (
                    'nombre' => 'CANADÁ: Canadian Premier League - Fall Season',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            79 =>
                array (
                    'nombre' => 'CHINA: Superliga - Jornada 20',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            80 =>
                array (
                    'nombre' => 'COREA DEL SUR: K League 2 - Jornada 21',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            81 =>
                array (
                    'nombre' => 'CROACIA: 1. HNL - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            82 =>
                array (
                    'nombre' => 'DINAMARCA: 1.ª División - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            83 =>
                array (
                    'nombre' => 'EGIPTO: Premier League - Jornada 34',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            84 =>
                array (
                    'nombre' => 'ESCOCIA: League Cup',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            85 =>
                array (
                    'nombre' => 'ESLOVAQUIA: Fortuna liga - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            86 =>
                array (
                    'nombre' => 'ESLOVAQUIA: 2. liga - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            87 =>
                array (
                    'nombre' => 'ESLOVENIA: Prva Liga - Jornada 3',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            88 =>
                array (
                    'nombre' => 'ESTADOS UNIDOS: MLS',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            89 =>
                array (
                    'nombre' => 'ESTONIA: Meistriliiga - Jornada 21',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            90 =>
                array (
                    'nombre' => 'EUROPA: Emirates Cup - Final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            91 =>
                array (
                    'nombre' => 'EUROPA: Campeonato de Europa Femenino Sub-19 - Playoffs - Final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            92 =>
                array (
                    'nombre' => 'FILIPINAS: PFL',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            93 =>
                array (
                    'nombre' => 'FINLANDIA: Veikkausliiga - Jornada 17',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            94 =>
                array (
                    'nombre' => 'FINLANDIA: Veikkausliiga - Jornada 18',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            95 =>
                array (
                    'nombre' => 'GUATEMALA: Liga Nacional - Apertura - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            96 =>
                array (
                    'nombre' => 'IRLANDA: Premier Division - Jornada 27',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            97 =>
                array (
                    'nombre' => 'ISLAS FEROE: Effodeildin - Jornada 16',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            98 =>
                array (
                    'nombre' => 'ISRAEL: Toto Cup - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            99 =>
                array (
                    'nombre' => 'KAZAJISTÁN: Premier League - Jornada 20',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            100 =>
                array (
                    'nombre' => 'LETONIA: Optibet Virsliga - Jornada 23',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            101 =>
                array (
                    'nombre' => 'MUNDIAL: International Champions Cup',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            102 =>
                array (
                    'nombre' => 'NORUEGA: OBOS-ligaen - Jornada 15',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            103 =>
                array (
                    'nombre' => 'POLONIA: Division 2 - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            104 =>
                array (
                    'nombre' => 'PORTUGAL: Taça da Liga - Primera fase - Semifinales',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            105 =>
                array (
                    'nombre' => 'RUSIA: Copa - 1/128 de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            106 =>
                array (
                    'nombre' => 'RUSIA: Copa - 1/64 de final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            107 =>
                array (
                    'nombre' => 'SERBIA: Super Liga - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            108 =>
                array (
                    'nombre' => 'SINGAPUR: Premier League',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            109 =>
                array (
                    'nombre' => 'SUECIA: Superettan - Jornada 17',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            110 =>
                array (
                    'nombre' => 'SUIZA: Super League - Jornada 2',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            111 =>
                array (
                    'nombre' => 'TAILANDIA: Thai League 1 - Jornada 20',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            112 =>
                array (
                    'nombre' => 'TAIWÁN: Premier League',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            113 =>
                array (
                    'nombre' => 'UCRANIA: Supercopa - Final',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            114 =>
                array (
                    'nombre' => 'URUGUAY: Primera División - Torneo Intermedio - Jornada 3',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            115 =>
                array (
                    'nombre' => 'VENEZUELA: Primera División - Clausura - Jornada 1',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
            116 =>
                array (
                    'nombre' => 'VIETNAM: V.League 1 - Jornada 18',
                    'start_competition' => '01/01/2019',
                    'end_competition' => '03/08/2019',
                ),
        );
        foreach($competitions as $competition){
            DB::table('competitions')->insert([
                'name' => $competition['nombre'],
                'start_competition' => $competition['start_competition'],
                'end_competition' => $competition['end_competition'],
                'img' => ''
            ]);
        }
    }
}
