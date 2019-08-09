<?php

use Illuminate\Database\Seeder;

class MatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$result = [ $team_id => n_goals , $other_team_id => n_goals]
        $equipos = array (
            0 =>
                array (
                    'equipo' => 'HJK (Fin)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lWDy3Yil-GKeEz1pf.png',
                    'stadium_id' => 2,
                ),
            1 =>
                array (
                    'equipo' => 'Estrella Roja (Srb)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AZ6dTVzS-02pMQZSB.png',
                    'stadium_id' => 2,
                ),
            2 =>
                array (
                    'equipo' => 'AIK (Swe)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pjQnmYWg-pOPEhzVb.png',
                    'stadium_id' => 1,
                ),
            3 =>
                array (
                    'equipo' => 'Maribor (Slo)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/v9py2TeM-2kXPb85r.png',
                    'stadium_id' => 1,
                ),
            4 =>
                array (
                    'equipo' => 'Qarabag (Aze)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ryebZ3Ar-bcf8qvlN.png',
                    'stadium_id' => 2,
                ),
            5 =>
                array (
                    'equipo' => 'Dundalk (Irl)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2gmPohEa-jH2DHOiE.png',
                    'stadium_id' => 2,
                ),
            6 =>
                array (
                    'equipo' => 'Rosenborg (Nor)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/44L9FIEG-fBpcfBk4.png',
                    'stadium_id' => 2,
                ),
            7 =>
                array (
                    'equipo' => 'BATE (Blr)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YoVN9IAr-IBflJG76.png',
                    'stadium_id' => 2,
                ),
            8 =>
                array (
                    'equipo' => 'Copenhague (Den)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dvE1YECa-4r1dCUha.png',
                    'stadium_id' => 1,
                ),
            9 =>
                array (
                    'equipo' => 'TNS (Wal)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pQcOYVAr-YF00gpN0.png',
                    'stadium_id' => 1,
                ),
            10 =>
                array (
                    'equipo' => 'Cukaricki (Srb)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8lrQgrXg-8Mzdq2N4.png',
                    'stadium_id' => 1,
                ),
            11 =>
                array (
                    'equipo' => 'Molde (Nor)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0rMLmLyS-WxJmaLcT.png',
                    'stadium_id' => 1,
                ),
            12 =>
                array (
                    'equipo' => '1860 Múnich',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bc5ve6e5-vNKxfWV1.png',
                    'stadium_id' => 2,
                ),
            13 =>
                array (
                    'equipo' => 'Zwickau',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SrpJ3zGG-vBSqmuO5.png',
                    'stadium_id' => 2,
                ),
            14 =>
                array (
                    'equipo' => 'Chemnitzer',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KY9gMKxS-jc2fqRKc.png',
                    'stadium_id' => 1,
                ),
            15 =>
                array (
                    'equipo' => 'Meppen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nTDB9O9r-EeLu1sTG.png',
                    'stadium_id' => 1,
                ),
            16 =>
                array (
                    'equipo' => 'Duisburgo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SA8VA2eM-8KLDrEjh.png',
                    'stadium_id' => 2,
                ),
            17 =>
                array (
                    'equipo' => 'Preussen Münster',
                    'img' => 'https://www.mismarcadores.com//res/image/data/88FnbHcM-8v02s5kA.png',
                    'stadium_id' => 2,
                ),
            18 =>
                array (
                    'equipo' => 'Magdeburgo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4E1l0ze5-fHLf2W7g.png',
                    'stadium_id' => 2,
                ),
            19 =>
                array (
                    'equipo' => 'Mannheim',
                    'img' => 'https://www.mismarcadores.com//res/image/data/z1xOIbhl-YLNkhM3S.png',
                    'stadium_id' => 2,
                ),
            20 =>
                array (
                    'equipo' => 'Viktoria Köln',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WQJEg1f5-tY9G2wz6.png',
                    'stadium_id' => 2,
                ),
            21 =>
                array (
                    'equipo' => 'Hallescher',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vB3zP4Ar-MLY0nDP0.png',
                    'stadium_id' => 2,
                ),
            22 =>
                array (
                    'equipo' => 'Altona',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AV5Iu9Ca-xtyO5Ly9.png',
                    'stadium_id' => 2,
                ),
            23 =>
                array (
                    'equipo' => 'Lubeck',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2oel6qBr-zRyL8YUP.png',
                    'stadium_id' => 2,
                ),
            24 =>
                array (
                    'equipo' => 'Drochtersen/Assel',
                    'img' => 'https://www.mismarcadores.com//res/image/data/O06N4pcM-Ymx2R2j1.png',
                    'stadium_id' => 2,
                ),
            25 =>
                array (
                    'equipo' => 'Havelse',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WIdtl9Ca-bX64ZLGh.png',
                    'stadium_id' => 2,
                ),
            26 =>
                array (
                    'equipo' => 'Hannoverscher SC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SCw7kkBr-pMnkvXX9.png',
                    'stadium_id' => 2,
                ),
            27 =>
                array (
                    'equipo' => 'SC Weiche-08',
                    'img' => 'https://www.mismarcadores.com//res/image/data/W2FWYMil-z5vcQKgE.png',
                    'stadium_id' => 2,
                ),
            28 =>
                array (
                    'equipo' => 'Heider SV',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0IkNtBBr-CUD34dwj.png',
                    'stadium_id' => 1,
                ),
            29 =>
                array (
                    'equipo' => 'Bremen II',
                    'img' => 'https://www.mismarcadores.com//res/image/data/buwBPLEG-xCH4M3Dp.png',
                    'stadium_id' => 1,
                ),
            30 =>
                array (
                    'equipo' => 'Jeddeloh',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OWniqrf5-48vQJVll.png',
                    'stadium_id' => 1,
                ),
            31 =>
                array (
                    'equipo' => 'Hannover II',
                    'img' => 'https://www.mismarcadores.com//res/image/data/n3lYzqFa-lMJJwwpj.png',
                    'stadium_id' => 1,
                ),
            32 =>
                array (
                    'equipo' => 'Kiel II',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OQ57tXCa-GK5lTBK2.png',
                    'stadium_id' => 2,
                ),
            33 =>
                array (
                    'equipo' => 'Oldenburg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8ILVGKeM-GxutJbKn.png',
                    'stadium_id' => 2,
                ),
            34 =>
                array (
                    'equipo' => 'Luneburger Hansa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dhHFAgDa-CzH4v7Eq.png',
                    'stadium_id' => 2,
                ),
            35 =>
                array (
                    'equipo' => 'Norderstedt',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vePzumZA-bysk9fr1.png',
                    'stadium_id' => 2,
                ),
            36 =>
                array (
                    'equipo' => 'St. Pauli II',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0d9JBTCr-IZbtfC9d.png',
                    'stadium_id' => 1,
                ),
            37 =>
                array (
                    'equipo' => 'Hamburgo II',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YajC1tzB-6LrtzNsp.png',
                    'stadium_id' => 1,
                ),
            38 =>
                array (
                    'equipo' => 'Wolfsburgo II',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QizfHzhl-pCspZtcj.png',
                    'stadium_id' => 1,
                ),
            39 =>
                array (
                    'equipo' => 'BSV Rehden',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8fN5JSZA-h0wpIIZh.png',
                    'stadium_id' => 1,
                ),
            40 =>
                array (
                    'equipo' => 'Chemie Leipzig',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xpUx2Ef5-lQifnTn6.png',
                    'stadium_id' => 1,
                ),
            41 =>
                array (
                    'equipo' => 'Viktoria Berlin',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6m4uMeEa-M1IpcrjG.png',
                    'stadium_id' => 1,
                ),
            42 =>
                array (
                    'equipo' => 'Furstenwalde',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fDAxchZg-ADZXO82q.png',
                    'stadium_id' => 2,
                ),
            43 =>
                array (
                    'equipo' => 'Berliner AK 07',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nP153cYA-K6TVdpkc.png',
                    'stadium_id' => 2,
                ),
            44 =>
                array (
                    'equipo' => 'Lichtenberg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KEpb1HBr-ttIVqAv9.png',
                    'stadium_id' => 1,
                ),
            45 =>
                array (
                    'equipo' => 'Rathenow',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jXikVoZA-dl6ja31f.png',
                    'stadium_id' => 1,
                ),
            46 =>
                array (
                    'equipo' => 'Bischofswerdaer',
                    'img' => 'https://www.mismarcadores.com//res/image/data/x0nNCdBr-4t46lBMr.png',
                    'stadium_id' => 1,
                ),
            47 =>
                array (
                    'equipo' => 'BFC Dynamo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YVQcK3f5-t4YJSaON.png',
                    'stadium_id' => 1,
                ),
            48 =>
                array (
                    'equipo' => 'Halberstadt',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AmW6Beg5-4nyqIKoI.png',
                    'stadium_id' => 1,
                ),
            49 =>
                array (
                    'equipo' => 'Meuselwitz',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6LU1UQCa-hnKq01rN.png',
                    'stadium_id' => 1,
                ),
            50 =>
                array (
                    'equipo' => 'Erfurt',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CI5d1IZA-C63jp75i.png',
                    'stadium_id' => 2,
                ),
            51 =>
                array (
                    'equipo' => 'Lokomotive Leipzig',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hQZV62Ar-2JWAsvzh.png',
                    'stadium_id' => 2,
                ),
            52 =>
                array (
                    'equipo' => 'Binh Duong (Vie)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8nurCNxS-YRQytORq.png',
                    'stadium_id' => 1,
                ),
            53 =>
                array (
                    'equipo' => 'Hanoi FC (Vie)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ShEcH3f5-CE93n20k.png',
                    'stadium_id' => 1,
                ),
            54 =>
                array (
                    'equipo' => 'Campbelltown City',
                    'img' => 'https://www.mismarcadores.com//res/image/data/632Ph0Ar-OpTy2f5S.png',
                    'stadium_id' => 2,
                ),
            55 =>
                array (
                    'equipo' => 'Melbourne City',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hIClxNAr-M5ti9ffl.png',
                    'stadium_id' => 2,
                ),
            56 =>
                array (
                    'equipo' => 'Cooma',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YV7eDSCa-fqhtjEtC.png',
                    'stadium_id' => 2,
                ),
            57 =>
                array (
                    'equipo' => 'Hume City',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jud5e6yS-EBLWPs15.png',
                    'stadium_id' => 2,
                ),
            58 =>
                array (
                    'equipo' => 'Maitland',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IZDhEkYg-AiffJlW3.png',
                    'stadium_id' => 1,
                ),
            59 =>
                array (
                    'equipo' => 'Central Coast Mariners',
                    'img' => 'https://www.mismarcadores.com//res/image/data/b7iAqkgl-YHiKyoxc.png',
                    'stadium_id' => 1,
                ),
            60 =>
                array (
                    'equipo' => 'South Hobart',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dSRX3GcM-vZWqlXgR.png',
                    'stadium_id' => 2,
                ),
            61 =>
                array (
                    'equipo' => 'Marconi',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xpdGfryS-OhgaBrnC.png',
                    'stadium_id' => 2,
                ),
            62 =>
                array (
                    'equipo' => 'St George Saints',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zZUbZaFa-tW060a0T.png',
                    'stadium_id' => 1,
                ),
            63 =>
                array (
                    'equipo' => 'Sydney Utd',
                    'img' => 'https://www.mismarcadores.com//res/image/data/n5MiXOZA-EctnCb4p.png',
                    'stadium_id' => 1,
                ),
            64 =>
                array (
                    'equipo' => 'Sport Boys',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OYewSiYg-zqJkB0CA.png',
                    'stadium_id' => 2,
                ),
            65 =>
                array (
                    'equipo' => 'Destroyers',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lUFU7Kh5-0tBQExpL.png',
                    'stadium_id' => 2,
                ),
            66 =>
                array (
                    'equipo' => 'Brasil de Pelotas',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0zgnuQyS-xC1IQdD8.png',
                    'stadium_id' => 2,
                ),
            67 =>
                array (
                    'equipo' => 'Vila Nova',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ttvNE0il-KAPnxsGE.png',
                    'stadium_id' => 2,
                ),
            68 =>
                array (
                    'equipo' => 'Figueirense',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UoIPgeyB-ImfBiJmb.png',
                    'stadium_id' => 1,
                ),
            69 =>
                array (
                    'equipo' => 'Vitória',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EglYBtxS-MusJKJ6N.png',
                    'stadium_id' => 1,
                ),
            70 =>
                array (
                    'equipo' => 'Londrina',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ADUlTugl-GnhLGXP2.png',
                    'stadium_id' => 2,
                ),
            71 =>
                array (
                    'equipo' => 'Paraná',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hb0keWjl-UZmeQNxn.png',
                    'stadium_id' => 2,
                ),
            72 =>
                array (
                    'equipo' => 'Atlético-GO',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WGHITlhl-jFgsoyw3.png',
                    'stadium_id' => 1,
                ),
            73 =>
                array (
                    'equipo' => 'Operario',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IBwiT7Da-h8orxayD.png',
                    'stadium_id' => 1,
                ),
            74 =>
                array (
                    'equipo' => 'CRB',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QuqDEgh5-lI3WtlHM.png',
                    'stadium_id' => 2,
                ),
            75 =>
                array (
                    'equipo' => 'Oeste',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QghKiTDa-KMiBP0xJ.png',
                    'stadium_id' => 2,
                ),
            76 =>
                array (
                    'equipo' => 'Ponte Preta',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UVeNVSBr-K8OxaI3U.png',
                    'stadium_id' => 1,
                ),
            77 =>
                array (
                    'equipo' => 'América-MG',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Eut0HLfM-xSynTMWM.png',
                    'stadium_id' => 1,
                ),
            78 =>
                array (
                    'equipo' => 'Sao Bento',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hMkERzDa-zTGiT5uL.png',
                    'stadium_id' => 2,
                ),
            79 =>
                array (
                    'equipo' => 'Criciúma',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rD23Eng5-WOFd8kH0.png',
                    'stadium_id' => 2,
                ),
            80 =>
                array (
                    'equipo' => 'Bragantino',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pnCbhOCa-jqkiR3Nu.png',
                    'stadium_id' => 2,
                ),
            81 =>
                array (
                    'equipo' => 'Cuiaba Esporte',
                    'img' => 'https://www.mismarcadores.com//res/image/data/COoi5ag5-C291Qktd.png',
                    'stadium_id' => 2,
                ),
            82 =>
                array (
                    'equipo' => 'Brasiliense',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bDwqmQxS-d2Jt1ZCp.png',
                    'stadium_id' => 1,
                ),
            83 =>
                array (
                    'equipo' => 'Vitoria ES',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6TftvFdM-lnmbDylA.png',
                    'stadium_id' => 1,
                ),
            84 =>
                array (
                    'equipo' => 'Ipora',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lUCUrmf5-x4NLqEDA.png',
                    'stadium_id' => 2,
                ),
            85 =>
                array (
                    'equipo' => 'Real Noroeste',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EyKkRxil-UZLqMb4F.png',
                    'stadium_id' => 2,
                ),
            86 =>
                array (
                    'equipo' => 'Rionegro Águilas',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4US0UECr-Uiu07YSa.png',
                    'stadium_id' => 1,
                ),
            87 =>
                array (
                    'equipo' => 'Pereira',
                    'img' => 'https://www.mismarcadores.com//res/image/data/M1G01gh5-8j0rFY2J.png',
                    'stadium_id' => 1,
                ),
            88 =>
                array (
                    'equipo' => 'Jeonbuk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lnjXzFzS-OpDpjXEl.png',
                    'stadium_id' => 1,
                ),
            89 =>
                array (
                    'equipo' => 'Jeju',
                    'img' => 'https://www.mismarcadores.com//res/image/data/E7LHWiHG-KGxDgzfP.png',
                    'stadium_id' => 1,
                ),
            90 =>
                array (
                    'equipo' => 'Gangwon',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6a5annZg-KGxDgzfP.png',
                    'stadium_id' => 2,
                ),
            91 =>
                array (
                    'equipo' => 'Pohang',
                    'img' => 'https://www.mismarcadores.com//res/image/data/S8Lo4nCr-KWr88VAM.png',
                    'stadium_id' => 2,
                ),
            92 =>
                array (
                    'equipo' => 'Aucas',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Cx1v3TYg-C4YPK6Bt.png',
                    'stadium_id' => 1,
                ),
            93 =>
                array (
                    'equipo' => 'Guayaquil City',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2XY26leM-CzmHJyq9.png',
                    'stadium_id' => 1,
                ),
            94 =>
                array (
                    'equipo' => 'Madura United',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8rLZRaFa-ljJKXNvO.png',
                    'stadium_id' => 2,
                ),
            95 =>
                array (
                    'equipo' => 'PSS Sleman',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Cxc4L2Cr-WjxyENTP.png',
                    'stadium_id' => 2,
                ),
            96 =>
                array (
                    'equipo' => 'H. Kfar Saba',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bR6sY8EG-ptJBJ8XT.png',
                    'stadium_id' => 2,
                ),
            97 =>
                array (
                    'equipo' => 'Hapoel Hadera',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4GrpPmEa-fDHAkMB9.png',
                    'stadium_id' => 2,
                ),
            98 =>
                array (
                    'equipo' => 'Shmona',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tWoInRZA-dbL6lxiS.png',
                    'stadium_id' => 2,
                ),
            99 =>
                array (
                    'equipo' => 'Netanya',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lKdmfUf5-O4FlBeR4.png',
                    'stadium_id' => 2,
                ),
            100 =>
                array (
                    'equipo' => 'H. Raanana',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0KUmb2Ca-h4y58LZJ.png',
                    'stadium_id' => 2,
                ),
            101 =>
                array (
                    'equipo' => 'B. Jerusalem',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QVqFCnDa-S0YwgY7G.png',
                    'stadium_id' => 2,
                ),
            102 =>
                array (
                    'equipo' => 'Hiroshima',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CWtDiFhl-6RDchEN9.png',
                    'stadium_id' => 2,
                ),
            103 =>
                array (
                    'equipo' => 'Kawasaki',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SnclEAg5-AgHoeGwi.png',
                    'stadium_id' => 2,
                ),
            104 =>
                array (
                    'equipo' => 'Urawa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2iJi3FWg-8zQFyFdi.png',
                    'stadium_id' => 1,
                ),
            105 =>
                array (
                    'equipo' => 'Kashima',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KzRTl7Ea-SzFggf83.png',
                    'stadium_id' => 1,
                ),
            106 =>
                array (
                    'equipo' => 'Gifu',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tdMTfog5-KxC08gBN.png',
                    'stadium_id' => 1,
                ),
            107 =>
                array (
                    'equipo' => 'Omiya Ardija',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WScijihl-EuaSg6sH.png',
                    'stadium_id' => 1,
                ),
            108 =>
                array (
                    'equipo' => 'Kanazawa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/naJjaZyS-rLl5l4mT.png',
                    'stadium_id' => 1,
                ),
            109 =>
                array (
                    'equipo' => 'Kyoto',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2kgCipHG-x0qIQzRi.png',
                    'stadium_id' => 1,
                ),
            110 =>
                array (
                    'equipo' => 'Machida',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zcqIEsil-d4lodx7K.png',
                    'stadium_id' => 2,
                ),
            111 =>
                array (
                    'equipo' => 'Albirex Niigata',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zNkNyczB-zk0OfnSA.png',
                    'stadium_id' => 2,
                ),
            112 =>
                array (
                    'equipo' => 'Mito',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vgVRLDhl-QgXwSVlU.png',
                    'stadium_id' => 2,
                ),
            113 =>
                array (
                    'equipo' => 'Kofu',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8n6oZCdM-lpGkfzgc.png',
                    'stadium_id' => 2,
                ),
            114 =>
                array (
                    'equipo' => 'Okayama',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rs6Zabe5-OMdCVMtg.png',
                    'stadium_id' => 1,
                ),
            115 =>
                array (
                    'equipo' => 'Kashiwa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ln1GwEYA-WMdzhpCT.png',
                    'stadium_id' => 1,
                ),
            116 =>
                array (
                    'equipo' => 'Ryukyu',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jubezWdM-YmYsUaaM.png',
                    'stadium_id' => 1,
                ),
            117 =>
                array (
                    'equipo' => 'Chiba',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8YOWGmdM-0xcW2XYp.png',
                    'stadium_id' => 1,
                ),
            118 =>
                array (
                    'equipo' => 'Tochigi',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EXfG16Ar-CQVWcWYc.png',
                    'stadium_id' => 1,
                ),
            119 =>
                array (
                    'equipo' => 'Verdy',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tnZwAnDr-hEtQOEe4.png',
                    'stadium_id' => 1,
                ),
            120 =>
                array (
                    'equipo' => 'Tokushima',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CW8x8EeM-jHUzcjl4.png',
                    'stadium_id' => 2,
                ),
            121 =>
                array (
                    'equipo' => 'Kagoshima Utd',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AJ3xyMf5-noJhEBl2.png',
                    'stadium_id' => 2,
                ),
            122 =>
                array (
                    'equipo' => 'V-Varen Nagasaki',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tSwLeJh5-nBfTAOtL.png',
                    'stadium_id' => 2,
                ),
            123 =>
                array (
                    'equipo' => 'Ehime',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YyO6tgzB-4vRtz8Pg.png',
                    'stadium_id' => 2,
                ),
            124 =>
                array (
                    'equipo' => 'Yamagata',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MPYWA9HG-pIC1iYxG.png',
                    'stadium_id' => 2,
                ),
            125 =>
                array (
                    'equipo' => 'Avispa Fukuoka',
                    'img' => 'https://www.mismarcadores.com//res/image/data/b50fCge5-hWcWhQdN.png',
                    'stadium_id' => 2,
                ),
            126 =>
                array (
                    'equipo' => 'Yokohama FC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2cNIqiYA-hEtQOEe4.png',
                    'stadium_id' => 1,
                ),
            127 =>
                array (
                    'equipo' => 'Renofa Yamaguchi',
                    'img' => 'https://www.mismarcadores.com//res/image/data/t4mm0KeM-rJaATdxh.png',
                    'stadium_id' => 1,
                ),
            128 =>
                array (
                    'equipo' => 'Santos Laguna',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ov1FIjAr-Knc3iIh6.png',
                    'stadium_id' => 2,
                ),
            129 =>
                array (
                    'equipo' => 'Correcaminos U.A.T.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hpAaJcyB-rwnhdxoB.png',
                    'stadium_id' => 2,
                ),
            130 =>
                array (
                    'equipo' => 'Venados',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2qXUp9f5-SOlpbbGb.png',
                    'stadium_id' => 2,
                ),
            131 =>
                array (
                    'equipo' => 'Atlante',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tjlI5lgl-pUKj2Z6O.png',
                    'stadium_id' => 2,
                ),
            132 =>
                array (
                    'equipo' => 'Tijuana',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dhGYoCh5-YZWSbCJi.png',
                    'stadium_id' => 1,
                ),
            133 =>
                array (
                    'equipo' => 'Querétaro',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fomLHLzB-M73aqXJ4.png',
                    'stadium_id' => 1,
                ),
            134 =>
                array (
                    'equipo' => 'Atlas',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OfIFJZYg-ncTYyUfs.png',
                    'stadium_id' => 2,
                ),
            135 =>
                array (
                    'equipo' => 'Pachuca',
                    'img' => 'https://www.mismarcadores.com//res/image/data/x4yMKjh5-WEpQ0fRT.png',
                    'stadium_id' => 2,
                ),
            136 =>
                array (
                    'equipo' => 'Tusker (Ken)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Gp2EZUjl-SfXL9AgA.png',
                    'stadium_id' => 1,
                ),
            137 =>
                array (
                    'equipo' => 'Ulinzi Stars (Ken)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bBQvGcYg-hYvxvITJ.png',
                    'stadium_id' => 1,
                ),
            138 =>
                array (
                    'equipo' => 'Lokomotiv Yerevan (Arm)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bwM7hXzB-8fSo4crs.png',
                    'stadium_id' => 1,
                ),
            139 =>
                array (
                    'equipo' => 'Aragats (Arm)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 1,
                ),
            140 =>
                array (
                    'equipo' => 'Baia Mare (Rou)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4nDkf6hl-bN9sxH2C.png',
                    'stadium_id' => 2,
                ),
            141 =>
                array (
                    'equipo' => 'Satu Mare (Rou)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nwAg2owS-ldYHv5t4.png',
                    'stadium_id' => 2,
                ),
            142 =>
                array (
                    'equipo' => 'Leganés (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/htTcG0il-IosBD5s5.png',
                    'stadium_id' => 2,
                ),
            143 =>
                array (
                    'equipo' => 'Alcorcón (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lvaUQuZg-O0ajUWwK.png',
                    'stadium_id' => 2,
                ),
            144 =>
                array (
                    'equipo' => 'Leganés B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rmz4WayS-I70OCpos.png',
                    'stadium_id' => 2,
                ),
            145 =>
                array (
                    'equipo' => 'Toledo (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EB3KO3ZA-xSiEBigD.png',
                    'stadium_id' => 2,
                ),
            146 =>
                array (
                    'equipo' => 'Lucko (Cro)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hAnLnrCr-lnoOh4I6.png',
                    'stadium_id' => 2,
                ),
            147 =>
                array (
                    'equipo' => 'Orijent (Cro)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0tF4NlWg-bTAktR9D.png',
                    'stadium_id' => 2,
                ),
            148 =>
                array (
                    'equipo' => 'Rapid Bucarest (Rou)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xGFfaiWg-SO6RlZHA.png',
                    'stadium_id' => 2,
                ),
            149 =>
                array (
                    'equipo' => 'Metalul Buzau (Rou)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GY29tTYA-IRWmVxQ8.png',
                    'stadium_id' => 2,
                ),
            150 =>
                array (
                    'equipo' => 'Pasaia (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QPL9xlzB-dvaWFIsG.png',
                    'stadium_id' => 1,
                ),
            151 =>
                array (
                    'equipo' => 'CD Vitoria (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ei9LPRzB-fehDHwME.png',
                    'stadium_id' => 1,
                ),
            152 =>
                array (
                    'equipo' => 'Amorebieta (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QapVjZBr-OtoaG7cn.png',
                    'stadium_id' => 2,
                ),
            153 =>
                array (
                    'equipo' => 'Durango (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Isf1bAf5-IqMJ1Da0.png',
                    'stadium_id' => 2,
                ),
            154 =>
                array (
                    'equipo' => 'Braga Sub-23 (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SlCIjXAr-8Mlzga6C.png',
                    'stadium_id' => 1,
                ),
            155 =>
                array (
                    'equipo' => 'Sao Martinho (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fNLdY2Ea-W0o55Ilp.png',
                    'stadium_id' => 1,
                ),
            156 =>
                array (
                    'equipo' => 'Real SC (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xrGbkwwS-hvQ0LgPG.png',
                    'stadium_id' => 2,
                ),
            157 =>
                array (
                    'equipo' => 'Montijo (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vmr2xGcM-Uo6SHoHS.png',
                    'stadium_id' => 2,
                ),
            158 =>
                array (
                    'equipo' => 'Arouca (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EkUliKf5-AJ413617.png',
                    'stadium_id' => 2,
                ),
            159 =>
                array (
                    'equipo' => 'Sp. Espinho (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OlIV4keM-88Raqlyq.png',
                    'stadium_id' => 2,
                ),
            160 =>
                array (
                    'equipo' => 'Beira Mar (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/f5PPMfjl-O6EG9sOt.png',
                    'stadium_id' => 1,
                ),
            161 =>
                array (
                    'equipo' => 'Lusitania FC (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dtTL5DfM-xjSCJza5.png',
                    'stadium_id' => 1,
                ),
            162 =>
                array (
                    'equipo' => 'Chaves (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fLiJovBr-4GIg5tS6.png',
                    'stadium_id' => 1,
                ),
            163 =>
                array (
                    'equipo' => 'Gil Vicente (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/G6WqpsWg-nHwHiAUE.png',
                    'stadium_id' => 1,
                ),
            164 =>
                array (
                    'equipo' => 'Chaves B (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/r9EJsFcM-2TuUqPp9.png',
                    'stadium_id' => 1,
                ),
            165 =>
                array (
                    'equipo' => 'V. Guimaraes B (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CzdhXxEa-lC8fXluc.png',
                    'stadium_id' => 1,
                ),
            166 =>
                array (
                    'equipo' => 'Oporto B (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MB8RHrdM-juLC852d.png',
                    'stadium_id' => 1,
                ),
            167 =>
                array (
                    'equipo' => 'Rio Ave (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xUzHRdeM-AcZlahAr.png',
                    'stadium_id' => 1,
                ),
            168 =>
                array (
                    'equipo' => 'Sanjoanense (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0fqGJ7g5-jTxE718f.png',
                    'stadium_id' => 1,
                ),
            169 =>
                array (
                    'equipo' => 'SC Braga B (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8z9g8QfM-Y9XG7vG6.png',
                    'stadium_id' => 1,
                ),
            170 =>
                array (
                    'equipo' => 'Malmö Sub-19 (Swe)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bsTQ3Whl-pYO8hW03.png',
                    'stadium_id' => 2,
                ),
            171 =>
                array (
                    'equipo' => 'Brondby Sub-19 (Den)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UFGIFsFG-xQQZl0ZE.png',
                    'stadium_id' => 2,
                ),
            172 =>
                array (
                    'equipo' => 'Anderlecht (Bel)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dnno08Yg-0Uhw7ZGJ.png',
                    'stadium_id' => 2,
                ),
            173 =>
                array (
                    'equipo' => 'Düsseldorf (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ph4pnOh5-K6FXwj5N.png',
                    'stadium_id' => 2,
                ),
            174 =>
                array (
                    'equipo' => 'Karagumruk (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8hAFmGGG-YwmxQARg.png',
                    'stadium_id' => 1,
                ),
            175 =>
                array (
                    'equipo' => 'Adanaspor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2HVdoCXg-nL3RaQYl.png',
                    'stadium_id' => 1,
                ),
            176 =>
                array (
                    'equipo' => 'Aluminium Arak (Irn)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GAyT71eM-2L9OyVg7.png',
                    'stadium_id' => 1,
                ),
            177 =>
                array (
                    'equipo' => 'Khoosheh Talai (Irn)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 1,
                ),
            178 =>
                array (
                    'equipo' => 'Ankaragucu (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2gHuVEXg-2FbJiYof.png',
                    'stadium_id' => 1,
                ),
            179 =>
                array (
                    'equipo' => 'Hatayspor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fXZXonFa-2Hm1We4O.png',
                    'stadium_id' => 1,
                ),
            180 =>
                array (
                    'equipo' => 'Giresunspor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hp9XR5Xg-pGB4ZQzf.png',
                    'stadium_id' => 1,
                ),
            181 =>
                array (
                    'equipo' => 'Karakopru (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/h85EUigl-YZOaRblP.png',
                    'stadium_id' => 1,
                ),
            182 =>
                array (
                    'equipo' => 'Benevento (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rm9NwUZA-8GZjrCQf.png',
                    'stadium_id' => 2,
                ),
            183 =>
                array (
                    'equipo' => 'Cittadella (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OlVbH3GG-vyWhBDBb.png',
                    'stadium_id' => 2,
                ),
            184 =>
                array (
                    'equipo' => 'Ostrowiec (Pol)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/n32DpAdM-IXqbh0zg.png',
                    'stadium_id' => 1,
                ),
            185 =>
                array (
                    'equipo' => 'Stal Krasnik (Pol)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QyKhZNkl-27UphTNJ.png',
                    'stadium_id' => 1,
                ),
            186 =>
                array (
                    'equipo' => 'Pergolettese (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/U9TcxNYA-bFT1FYrb.png',
                    'stadium_id' => 2,
                ),
            187 =>
                array (
                    'equipo' => 'Pro Sesto (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/t4OKnhZg-CGYMjSfN.png',
                    'stadium_id' => 2,
                ),
            188 =>
                array (
                    'equipo' => 'Sangiustese (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4SUaC7ZA-KU3cz0Pt.png',
                    'stadium_id' => 2,
                ),
            189 =>
                array (
                    'equipo' => 'Casarano (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WpswQddM-CnLHtULN.png',
                    'stadium_id' => 2,
                ),
            190 =>
                array (
                    'equipo' => 'Venezia (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/l4Dj9jeM-A3ASYdri.png',
                    'stadium_id' => 1,
                ),
            191 =>
                array (
                    'equipo' => 'Cjarlins Muzane (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I7SA93cM-QaCkfz1k.png',
                    'stadium_id' => 1,
                ),
            192 =>
                array (
                    'equipo' => 'Altay (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xGNTeNZA-r5jY3FO3.png',
                    'stadium_id' => 2,
                ),
            193 =>
                array (
                    'equipo' => 'Bursaspor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6skVT6Yg-x2IM0SUQ.png',
                    'stadium_id' => 2,
                ),
            194 =>
                array (
                    'equipo' => 'Labunishta (Mkd)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zBaxjRjl-6oCoVOHh.png',
                    'stadium_id' => 1,
                ),
            195 =>
                array (
                    'equipo' => 'Flamurtari (Kos)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0xGMrWBr-QF0cXmGI.png',
                    'stadium_id' => 1,
                ),
            196 =>
                array (
                    'equipo' => 'Orleta Radzyn (Pol)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xh8NQcGG-C6HVZeXK.png',
                    'stadium_id' => 1,
                ),
            197 =>
                array (
                    'equipo' => 'Sulejowek (Pol)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Q7FLMze5-YgP4kK6p.png',
                    'stadium_id' => 1,
                ),
            198 =>
                array (
                    'equipo' => 'Pelister (Mkd)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YobeKMFG-2qbFd588.png',
                    'stadium_id' => 2,
                ),
            199 =>
                array (
                    'equipo' => 'Pobeda (Mkd)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2PSno0YA-0MY4uHdQ.png',
                    'stadium_id' => 2,
                ),
            200 =>
                array (
                    'equipo' => 'Al Feiha (Sau)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YTSt4cf5-ba12XyqH.png',
                    'stadium_id' => 1,
                ),
            201 =>
                array (
                    'equipo' => 'Konyaspor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pOF8NYYA-8py6YCTl.png',
                    'stadium_id' => 1,
                ),
            202 =>
                array (
                    'equipo' => 'Bourges (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WSxSsfEa-tWCes85n.png',
                    'stadium_id' => 2,
                ),
            203 =>
                array (
                    'equipo' => 'Clermont (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/O6jfFPdM-jeonWzLj.png',
                    'stadium_id' => 2,
                ),
            204 =>
                array (
                    'equipo' => 'Hertha Berlín (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dQALRIjl-C6khRCLH.png',
                    'stadium_id' => 1,
                ),
            205 =>
                array (
                    'equipo' => 'West Ham (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Y3qglzf5-xGs8XYP0.png',
                    'stadium_id' => 1,
                ),
            206 =>
                array (
                    'equipo' => 'KF Gostivar (Mkd)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EH4nSsXg-MRcNuh1J.png',
                    'stadium_id' => 2,
                ),
            207 =>
                array (
                    'equipo' => 'Shkupi (Mkd)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zLPd4UZA-rZ5I03Jq.png',
                    'stadium_id' => 2,
                ),
            208 =>
                array (
                    'equipo' => 'Medjimurje (Cro)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KfqPUjil-2Dmo0MqU.png',
                    'stadium_id' => 1,
                ),
            209 =>
                array (
                    'equipo' => 'Dubrava (Cro)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QwWPhoil-Gpm5wfVr.png',
                    'stadium_id' => 1,
                ),
            210 =>
                array (
                    'equipo' => 'Metz (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4MoVp0h5-4pdbha5J.png',
                    'stadium_id' => 2,
                ),
            211 =>
                array (
                    'equipo' => 'Seraing (Bel)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EFWaAEeM-0UQjpYB9.png',
                    'stadium_id' => 2,
                ),
            212 =>
                array (
                    'equipo' => 'Sassuolo (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IFKEHRGG-hWBv29Yp.png',
                    'stadium_id' => 2,
                ),
            213 =>
                array (
                    'equipo' => 'Empoli (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/h6XeO4e5-QeS1qfqn.png',
                    'stadium_id' => 2,
                ),
            214 =>
                array (
                    'equipo' => 'Gondomar (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MLb4SKGG-vPVtQHAo.png',
                    'stadium_id' => 2,
                ),
            215 =>
                array (
                    'equipo' => 'Gersthofer (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zuKRZDzB-IoVMSk4p.png',
                    'stadium_id' => 1,
                ),
            216 =>
                array (
                    'equipo' => 'SV Donau (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6q67wqDr-jsQ62khK.png',
                    'stadium_id' => 1,
                ),
            217 =>
                array (
                    'equipo' => 'Stadlau (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/r7jzZJGG-YmrLe6Pm.png',
                    'stadium_id' => 2,
                ),
            218 =>
                array (
                    'equipo' => 'Favoritner (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xGaAWidM-4xbZUq1D.png',
                    'stadium_id' => 2,
                ),
            219 =>
                array (
                    'equipo' => 'UNFP (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8v6qf8YA-bPrGLMlM.png',
                    'stadium_id' => 1,
                ),
            220 =>
                array (
                    'equipo' => 'Montpellier (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QTr0lOBr-EkChIdLk.png',
                    'stadium_id' => 1,
                ),
            221 =>
                array (
                    'equipo' => 'Zagora (Cro)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SrMb97Xg-A5TYYMb3.png',
                    'stadium_id' => 2,
                ),
            222 =>
                array (
                    'equipo' => 'Sibenik (Cro)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MVDjZbYA-buJJesVf.png',
                    'stadium_id' => 2,
                ),
            223 =>
                array (
                    'equipo' => 'Amarante (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8008JLCa-CdOar9R4.png',
                    'stadium_id' => 2,
                ),
            224 =>
                array (
                    'equipo' => 'Famalicao Sub-23 (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/G4ycoHcM-69dphHyh.png',
                    'stadium_id' => 2,
                ),
            225 =>
                array (
                    'equipo' => 'Burgos (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0AalHeAr-tnizRbr6.png',
                    'stadium_id' => 2,
                ),
            226 =>
                array (
                    'equipo' => 'Real Burgos (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/za457rDa-UoC0mrTE.png',
                    'stadium_id' => 2,
                ),
            227 =>
                array (
                    'equipo' => 'Cartagena B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/p29zIiFa-z129fpi5.png',
                    'stadium_id' => 2,
                ),
            228 =>
                array (
                    'equipo' => 'UCAM Murcia (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/n7oAOkf5-C8Sj6gM4.png',
                    'stadium_id' => 2,
                ),
            229 =>
                array (
                    'equipo' => 'Celta de Vigo B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xtHHpSFG-plktcAwr.png',
                    'stadium_id' => 2,
                ),
            230 =>
                array (
                    'equipo' => 'Ourense CF (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2ozD1vCr-0OweApn3.png',
                    'stadium_id' => 2,
                ),
            231 =>
                array (
                    'equipo' => 'Eichgraben (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 2,
                ),
            232 =>
                array (
                    'equipo' => 'Post Wien (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 2,
                ),
            233 =>
                array (
                    'equipo' => 'Fafe (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lv2ztnGG-t6kydSe4.png',
                    'stadium_id' => 1,
                ),
            234 =>
                array (
                    'equipo' => 'Merelinense (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QJNJrBYA-You69Nwr.png',
                    'stadium_id' => 1,
                ),
            235 =>
                array (
                    'equipo' => 'Grossfeld (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hjpgyoXg-zcALQ7Sl.png',
                    'stadium_id' => 2,
                ),
            236 =>
                array (
                    'equipo' => 'Schwechat (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CjVqQK9r-QcN41efm.png',
                    'stadium_id' => 2,
                ),
            237 =>
                array (
                    'equipo' => 'La Nucía (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zZf7Zxe5-EL6qfSdb.png',
                    'stadium_id' => 1,
                ),
            238 =>
                array (
                    'equipo' => 'Jove (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bDvvoRCr-YR2E3OOf.png',
                    'stadium_id' => 1,
                ),
            239 =>
                array (
                    'equipo' => 'Levante B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SvGaggyS-8O1XAV26.png',
                    'stadium_id' => 2,
                ),
            240 =>
                array (
                    'equipo' => 'Al Arabi (Qat)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/d6tQJPFG-UBD4T6Mf.png',
                    'stadium_id' => 2,
                ),
            241 =>
                array (
                    'equipo' => 'Liverpool (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vwC9RGhl-2B0QucIK.png',
                    'stadium_id' => 2,
                ),
            242 =>
                array (
                    'equipo' => 'Lyon (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rytJfXyS-IRbzmzRB.png',
                    'stadium_id' => 2,
                ),
            243 =>
                array (
                    'equipo' => 'Real Sociedad (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/r7gpvheM-rkrFLaiH.png',
                    'stadium_id' => 2,
                ),
            244 =>
                array (
                    'equipo' => 'Alavés (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hrI86AzS-6eawNCFf.png',
                    'stadium_id' => 2,
                ),
            245 =>
                array (
                    'equipo' => 'Rouen (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CCHqA0Yg-b5tOQsjI.png',
                    'stadium_id' => 2,
                ),
            246 =>
                array (
                    'equipo' => 'Caennaise (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rmq41mil-fFnXxxz2.png',
                    'stadium_id' => 2,
                ),
            247 =>
                array (
                    'equipo' => 'Selección AFE (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jmBMdzYg-j9nNnrwL.png',
                    'stadium_id' => 2,
                ),
            248 =>
                array (
                    'equipo' => 'CF Intercity (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 2,
                ),
            249 =>
                array (
                    'equipo' => 'Stade Bordelais (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bPieLPZA-SG2uwd68.png',
                    'stadium_id' => 2,
                ),
            250 =>
                array (
                    'equipo' => 'Cognac (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 2,
                ),
            251 =>
                array (
                    'equipo' => 'SV Deutsch Goritz (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/f1aPYjwS-WdBqCKRP.png',
                    'stadium_id' => 2,
                ),
            252 =>
                array (
                    'equipo' => 'Pischelsdorf (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 2,
                ),
            253 =>
                array (
                    'equipo' => 'AEK (Gre)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vHCp8QeM-lKYCJNFO.png',
                    'stadium_id' => 2,
                ),
            254 =>
                array (
                    'equipo' => 'Basaksehir (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2qYOOtEa-GxF0wQtj.png',
                    'stadium_id' => 2,
                ),
            255 =>
                array (
                    'equipo' => 'Angers (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/t8LjlaWg-EorrQF3M.png',
                    'stadium_id' => 2,
                ),
            256 =>
                array (
                    'equipo' => 'Arsenal (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pfchdCg5-pU2IsJm8.png',
                    'stadium_id' => 2,
                ),
            257 =>
                array (
                    'equipo' => 'Atlético de Madrid B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xhUBM6Ar-vm6tmHaq.png',
                    'stadium_id' => 1,
                ),
            258 =>
                array (
                    'equipo' => 'Real Valladolid B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Gtp91cyS-0CFwMsZs.png',
                    'stadium_id' => 1,
                ),
            259 =>
                array (
                    'equipo' => 'Balmaseda (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MeSSD4Cr-dzLN0XE6.png',
                    'stadium_id' => 2,
                ),
            260 =>
                array (
                    'equipo' => 'Leioa (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fXSyTpZg-Cb9cHJmD.png',
                    'stadium_id' => 2,
                ),
            261 =>
                array (
                    'equipo' => 'Londerzeel (Bel)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/plUxCFyB-SI3CM0d8.png',
                    'stadium_id' => 1,
                ),
            262 =>
                array (
                    'equipo' => 'Tubize (Bel)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4f94TVwS-4dvcFJ81.png',
                    'stadium_id' => 1,
                ),
            263 =>
                array (
                    'equipo' => 'Lugo (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6w2wicCr-2N0c2pfT.png',
                    'stadium_id' => 2,
                ),
            264 =>
                array (
                    'equipo' => 'Real Oviedo (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/z16nhrjl-v1PVfDIE.png',
                    'stadium_id' => 2,
                ),
            265 =>
                array (
                    'equipo' => 'P. Ferreira (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4zJ1F1dM-YZQg6TYo.png',
                    'stadium_id' => 1,
                ),
            266 =>
                array (
                    'equipo' => 'Al Nasr Riyadh (Sau)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AJoLwKZA-0tJwWAQS.png',
                    'stadium_id' => 1,
                ),
            267 =>
                array (
                    'equipo' => 'Pontardawe (Wal)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fH6idJjl-ziXnEIKm.png',
                    'stadium_id' => 2,
                ),
            268 =>
                array (
                    'equipo' => 'Llanelli (Wal)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GSQNwvdM-C6a4h4x7.png',
                    'stadium_id' => 2,
                ),
            269 =>
                array (
                    'equipo' => 'TEC (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dEEKpuAr-QoTmRqW1.png',
                    'stadium_id' => 1,
                ),
            270 =>
                array (
                    'equipo' => 'Jong Nijmegen (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2XNTWUcM-QVQUWbFJ.png',
                    'stadium_id' => 1,
                ),
            271 =>
                array (
                    'equipo' => 'Trelissac (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xGAOXEGG-xbpFO82c.png',
                    'stadium_id' => 2,
                ),
            272 =>
                array (
                    'equipo' => 'Girondins II (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tCVcPACr-QwXIlnat.png',
                    'stadium_id' => 2,
                ),
            273 =>
                array (
                    'equipo' => 'Union Nettetal (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/phoFhSg5-d4ObDbKl.png',
                    'stadium_id' => 2,
                ),
            274 =>
                array (
                    'equipo' => 'Hurth (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/29l8QfFG-2DNavIXN.png',
                    'stadium_id' => 2,
                ),
            275 =>
                array (
                    'equipo' => 'Vardar (Mkd)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ClbJdgcM-MeeXvCTB.png',
                    'stadium_id' => 1,
                ),
            276 =>
                array (
                    'equipo' => 'Kasimpasa (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ys2kyFfM-vDNWt1Nm.png',
                    'stadium_id' => 1,
                ),
            277 =>
                array (
                    'equipo' => 'Villaverde San Andrés (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bs3m0SzB-tjV4UsVj.png',
                    'stadium_id' => 2,
                ),
            278 =>
                array (
                    'equipo' => 'Torrijos (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 2,
                ),
            279 =>
                array (
                    'equipo' => 'Albacete (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/buLqAVfM-SQ563C0E.png',
                    'stadium_id' => 2,
                ),
            280 =>
                array (
                    'equipo' => 'Getafe (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OjieMlGG-46ZOuRh1.png',
                    'stadium_id' => 2,
                ),
            281 =>
                array (
                    'equipo' => 'Cacereño (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xSDyvWg5-AXaW0Du9.png',
                    'stadium_id' => 2,
                ),
            282 =>
                array (
                    'equipo' => 'CD Badajoz (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tr1MYbDa-n7GEVq2c.png',
                    'stadium_id' => 2,
                ),
            283 =>
                array (
                    'equipo' => 'Algeciras (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Aw5o8FXg-U9vcgRFS.png',
                    'stadium_id' => 2,
                ),
            284 =>
                array (
                    'equipo' => 'Granada B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YXYm7dg5-fV8m6AF4.png',
                    'stadium_id' => 2,
                ),
            285 =>
                array (
                    'equipo' => 'Antoniano (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Qw0u7Iil-MovNnzR4.png',
                    'stadium_id' => 2,
                ),
            286 =>
                array (
                    'equipo' => 'Europa FC (Gib)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MJlK0dDa-h8DfVWYI.png',
                    'stadium_id' => 2,
                ),
            287 =>
                array (
                    'equipo' => 'Atl. Tordesillas (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2awAGpgl-E5pq3rcQ.png',
                    'stadium_id' => 2,
                ),
            288 =>
                array (
                    'equipo' => 'Cristo Atlético (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YyoY1qZA-Qe4wp3jl.png',
                    'stadium_id' => 2,
                ),
            289 =>
                array (
                    'equipo' => 'Cádiz (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0Q4qMJeM-tbeRSSTP.png',
                    'stadium_id' => 2,
                ),
            290 =>
                array (
                    'equipo' => 'Las Palmas (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/44xPoqHG-QeEhgiDp.png',
                    'stadium_id' => 2,
                ),
            291 =>
                array (
                    'equipo' => 'Calahorra (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KQOiRGEa-KpIN5239.png',
                    'stadium_id' => 1,
                ),
            292 =>
                array (
                    'equipo' => 'Real Zaragoza (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xAVdihZA-SEZX32yP.png',
                    'stadium_id' => 1,
                ),
            293 =>
                array (
                    'equipo' => 'L\'Hospitalet (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CWQZqhgl-S40ZNh0l.png',
                    'stadium_id' => 2,
                ),
            294 =>
                array (
                    'equipo' => 'Sabadell (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GpZsFGDa-jq1jgydj.png',
                    'stadium_id' => 2,
                ),
            295 =>
                array (
                    'equipo' => 'Orihuela (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4dhXnoyS-IVx9K4y6.png',
                    'stadium_id' => 1,
                ),
            296 =>
                array (
                    'equipo' => 'Cartagena (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EeqU2NCr-Shh7JX9e.png',
                    'stadium_id' => 1,
                ),
            297 =>
                array (
                    'equipo' => 'Salzburgo (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KAMLuseM-rXY0b1UG.png',
                    'stadium_id' => 2,
                ),
            298 =>
                array (
                    'equipo' => 'Chelsea (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GMmvDEdM-2B0QucIK.png',
                    'stadium_id' => 2,
                ),
            299 =>
                array (
                    'equipo' => 'Santa Ana (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KA4FMNyS-zwx6V3ye.png',
                    'stadium_id' => 1,
                ),
            300 =>
                array (
                    'equipo' => 'Carabanchel (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fskDpeil-OCP396o3.png',
                    'stadium_id' => 1,
                ),
            301 =>
                array (
                    'equipo' => 'Santa Marta Tormes (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WxyediYA-I1qxoYUl.png',
                    'stadium_id' => 1,
                ),
            302 =>
                array (
                    'equipo' => 'Guijuelo (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/C612kih5-KCpdgSx7.png',
                    'stadium_id' => 1,
                ),
            303 =>
                array (
                    'equipo' => 'Teruel (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tpWoC3Cr-Clv2t1GF.png',
                    'stadium_id' => 2,
                ),
            304 =>
                array (
                    'equipo' => 'Castellón (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lxWg57g5-jJugf70M.png',
                    'stadium_id' => 2,
                ),
            305 =>
                array (
                    'equipo' => 'Tienen (Bel)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Gnr9mjil-hvMLdXd9.png',
                    'stadium_id' => 1,
                ),
            306 =>
                array (
                    'equipo' => 'Heist (Bel)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KQPRzPXg-UicFNs1L.png',
                    'stadium_id' => 1,
                ),
            307 =>
                array (
                    'equipo' => 'Torrellano (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/thUycKfM-4MJ3kv5S.png',
                    'stadium_id' => 2,
                ),
            308 =>
                array (
                    'equipo' => 'Hércules (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MaR9iUWg-MBqlExYF.png',
                    'stadium_id' => 2,
                ),
            309 =>
                array (
                    'equipo' => 'Varea (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/23aLDWCr-S40jTtEr.png',
                    'stadium_id' => 1,
                ),
            310 =>
                array (
                    'equipo' => 'Haro Deportivo (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lM2UA7cM-vX9ta44I.png',
                    'stadium_id' => 1,
                ),
            311 =>
                array (
                    'equipo' => 'Prat (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bu2ONlyB-IPkURWds.png',
                    'stadium_id' => 2,
                ),
            312 =>
                array (
                    'equipo' => 'Espanyol B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CWPezaCa-UX2TBBm0.png',
                    'stadium_id' => 2,
                ),
            313 =>
                array (
                    'equipo' => 'Racing Ferrol (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/M3ahWICa-jXWhucDp.png',
                    'stadium_id' => 2,
                ),
            314 =>
                array (
                    'equipo' => 'Ponferradina (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Sz1QUTGG-pO7GfiyQ.png',
                    'stadium_id' => 2,
                ),
            315 =>
                array (
                    'equipo' => 'Alzira (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AV7KcSYg-8z0O6PTk.png',
                    'stadium_id' => 1,
                ),
            316 =>
                array (
                    'equipo' => 'Valencia B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lCb3w0Ea-nu4pYN55.png',
                    'stadium_id' => 1,
                ),
            317 =>
                array (
                    'equipo' => 'Bamber Bridge (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vFfMM6cM-bLEZUFg8.png',
                    'stadium_id' => 1,
                ),
            318 =>
                array (
                    'equipo' => 'Everton Sub-23 (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rFzRunh5-SpCJOwbc.png',
                    'stadium_id' => 1,
                ),
            319 =>
                array (
                    'equipo' => 'Banbridge (Nir)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hjNvx1g5-ELU06tK5.png',
                    'stadium_id' => 2,
                ),
            320 =>
                array (
                    'equipo' => 'Glenavon (Nir)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dxv8JXCr-b7N1MBl3.png',
                    'stadium_id' => 2,
                ),
            321 =>
                array (
                    'equipo' => 'Calamonte (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dvJy96cM-YqbHVyvC.png',
                    'stadium_id' => 1,
                ),
            322 =>
                array (
                    'equipo' => 'Villanovense (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MqNCg1GG-6Vejzpkc.png',
                    'stadium_id' => 1,
                ),
            323 =>
                array (
                    'equipo' => 'CF Talavera (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CbzgULFG-htc3Uw0N.png',
                    'stadium_id' => 1,
                ),
            324 =>
                array (
                    'equipo' => 'Getafe B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/U7KVisEa-G6YPa12N.png',
                    'stadium_id' => 1,
                ),
            325 =>
                array (
                    'equipo' => 'GD Joane (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nLjFa5Ar-jR7KzIPe.png',
                    'stadium_id' => 2,
                ),
            326 =>
                array (
                    'equipo' => 'Cacadores Taipas (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jgnCUnCa-fLHTibHh.png',
                    'stadium_id' => 2,
                ),
            327 =>
                array (
                    'equipo' => 'Perugia (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6BkUJqDa-80DjiSQM.png',
                    'stadium_id' => 1,
                ),
            328 =>
                array (
                    'equipo' => 'Roma (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Op2545Da-rawUVFkk.png',
                    'stadium_id' => 1,
                ),
            329 =>
                array (
                    'equipo' => 'Petrelense (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 1,
                ),
            330 =>
                array (
                    'equipo' => 'Eldense (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Gps25TXg-z7yDtRR6.png',
                    'stadium_id' => 1,
                ),
            331 =>
                array (
                    'equipo' => 'Trival Valderas (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/G6kADjHG-zyBgIaY6.png',
                    'stadium_id' => 1,
                ),
            332 =>
                array (
                    'equipo' => 'Illescas (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dK0VNaxS-tGvwa85T.png',
                    'stadium_id' => 1,
                ),
            333 =>
                array (
                    'equipo' => 'Curzon Ashton (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AP9c8OBr-dAXxjgkg.png',
                    'stadium_id' => 2,
                ),
            334 =>
                array (
                    'equipo' => 'Burnley Sub-23 (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/E1ibhtwS-pWLnVXqB.png',
                    'stadium_id' => 2,
                ),
            335 =>
                array (
                    'equipo' => 'Don Benito (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I3AZX9xS-xC15Ywfg.png',
                    'stadium_id' => 2,
                ),
            336 =>
                array (
                    'equipo' => 'Extremadura (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vaomGQFG-pWVCgPl3.png',
                    'stadium_id' => 2,
                ),
            337 =>
                array (
                    'equipo' => 'Eccleshall (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 1,
                ),
            338 =>
                array (
                    'equipo' => 'Newcastle Town (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I1SvwbDa-IZlm4QXB.png',
                    'stadium_id' => 1,
                ),
            339 =>
                array (
                    'equipo' => 'Grays (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UemDQzFa-v5m3gW8n.png',
                    'stadium_id' => 1,
                ),
            340 =>
                array (
                    'equipo' => 'Kingstonian (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/K6YeK1FG-Ek4s97wt.png',
                    'stadium_id' => 1,
                ),
            341 =>
                array (
                    'equipo' => 'El Palo (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4SRGKTjl-4W2ucUKE.png',
                    'stadium_id' => 1,
                ),
            342 =>
                array (
                    'equipo' => 'Malagueño (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EBGbydGG-lARQfK46.png',
                    'stadium_id' => 1,
                ),
            343 =>
                array (
                    'equipo' => 'Miajadas (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 2,
                ),
            344 =>
                array (
                    'equipo' => 'Mérida AD (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8EuV22Wg-2aMdmw0t.png',
                    'stadium_id' => 2,
                ),
            345 =>
                array (
                    'equipo' => 'Las Rozas (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/x2mRhrh5-K8QeNDNh.png',
                    'stadium_id' => 2,
                ),
            346 =>
                array (
                    'equipo' => 'Rayo Vallecano (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jqaha0f5-SCAy65MC.png',
                    'stadium_id' => 2,
                ),
            347 =>
                array (
                    'equipo' => 'Real Madrid',
                    'img' => 'https://www.mismarcadores.com//res/image/data/A7kHoxZA-2irdgP53.png',
                    'stadium_id' => 2,
                ),
            348 =>
                array (
                    'equipo' => 'Fenerbahce',
                    'img' => 'https://www.mismarcadores.com//res/image/data/r5GaGDil-hG3PU6yI.png',
                    'stadium_id' => 2,
                ),
            349 =>
                array (
                    'equipo' => 'Tottenham',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pjJVnSFG-bPr4YEAf.png',
                    'stadium_id' => 1,
                ),
            350 =>
                array (
                    'equipo' => 'Bayern Múnich',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2XitNyyB-AylzU6N3.png',
                    'stadium_id' => 1,
                ),
            351 =>
                array (
                    'equipo' => 'RSC Anderlecht F (Bel)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SQx2jtDr-h4iAuYE0.png',
                    'stadium_id' => 2,
                ),
            352 =>
                array (
                    'equipo' => 'Den Haag F (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/l8HWJICa-tdr4wctN.png',
                    'stadium_id' => 2,
                ),
            353 =>
                array (
                    'equipo' => 'Vålerenga F (Nor)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fmPZYRhl-Gj4BMau7.png',
                    'stadium_id' => 2,
                ),
            354 =>
                array (
                    'equipo' => 'Manchester Utd F (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4OKbjNXg-YmEgXtkK.png',
                    'stadium_id' => 2,
                ),
            355 =>
                array (
                    'equipo' => 'México F',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QT9nmGAr-MucVv9Hf.png',
                    'stadium_id' => 1,
                ),
            356 =>
                array (
                    'equipo' => 'Paraguay F',
                    'img' => 'https://www.mismarcadores.com//res/image/data/085CMdg5-MiT4TR5J.png',
                    'stadium_id' => 1,
                ),
            357 =>
                array (
                    'equipo' => 'Jamaica F',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2R3oy4fM-2u0cRSbR.png',
                    'stadium_id' => 2,
                ),
            358 =>
                array (
                    'equipo' => 'Colombia F',
                    'img' => 'https://www.mismarcadores.com//res/image/data/04s7uChl-6i34eJY7.png',
                    'stadium_id' => 2,
                ),
            359 =>
                array (
                    'equipo' => 'Mauritania Sub-20',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YVSNZ4FG-KdY9FPQn.png',
                    'stadium_id' => 1,
                ),
            360 =>
                array (
                    'equipo' => 'Argentina Sub-20',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bicvVcHG-hU6bI1cI.png',
                    'stadium_id' => 1,
                ),
            361 =>
                array (
                    'equipo' => 'Esteli',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KYUvApxS-MVXblrlQ.png',
                    'stadium_id' => 2,
                ),
            362 =>
                array (
                    'equipo' => 'Santa Tecla',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ual28Bg5-htsjLuQG.png',
                    'stadium_id' => 2,
                ),
            363 =>
                array (
                    'equipo' => 'Cruzeiro (Bra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QDS2MvBr-0rn95JMc.png',
                    'stadium_id' => 2,
                ),
            364 =>
                array (
                    'equipo' => 'River Plate (Arg)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ic4xH0Yg-48MRYCtA.png',
                    'stadium_id' => 2,
                ),
            365 =>
                array (
                    'equipo' => 'Olimpia (Par)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OEyQgGEa-rPbahbw0.png',
                    'stadium_id' => 2,
                ),
            366 =>
                array (
                    'equipo' => 'LDU Quito (Ecu)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AF7l7MZA-IyQXlc4B.png',
                    'stadium_id' => 2,
                ),
            367 =>
                array (
                    'equipo' => 'Palmeiras (Bra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xCtpyPHG-4WCh0hzo.png',
                    'stadium_id' => 2,
                ),
            368 =>
                array (
                    'equipo' => 'Godoy Cruz (Arg)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KnQeHYwS-G0TO8JNt.png',
                    'stadium_id' => 2,
                ),
            369 =>
                array (
                    'equipo' => 'Sporting Cristal (Per)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bT8P90Ar-lzgWcKK7.png',
                    'stadium_id' => 2,
                ),
            370 =>
                array (
                    'equipo' => 'Zulia (Ven)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8K9KIZAr-beXpWQwB.png',
                    'stadium_id' => 2,
                ),
            371 =>
                array (
                    'equipo' => 'Fluminense (Bra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WlxJgSdM-ptTI6fcH.png',
                    'stadium_id' => 1,
                ),
            372 =>
                array (
                    'equipo' => 'Peñarol (Uru)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8rkcbrGG-YuvUDB4p.png',
                    'stadium_id' => 1,
                ),
            373 =>
                array (
                    'equipo' => 'Syrianska',
                    'img' => 'https://www.mismarcadores.com//res/image/data/G24vt3wS-j3JKu987.png',
                    'stadium_id' => 1,
                ),
            374 =>
                array (
                    'equipo' => 'Östers',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MPSeq4FG-CCKGtkg1.png',
                    'stadium_id' => 1,
                ),
            375 =>
                array (
                    'equipo' => 'Muangthong',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6cCdwdyB-jeFCc2w4.png',
                    'stadium_id' => 2,
                ),
            376 =>
                array (
                    'equipo' => 'Chainat',
                    'img' => 'https://www.mismarcadores.com//res/image/data/29z4TteM-AgsGdozf.png',
                    'stadium_id' => 2,
                ),
            377 =>
                array (
                    'equipo' => 'Nakhon Ratchasima',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xUXLuGeM-0fAeGZJE.png',
                    'stadium_id' => 1,
                ),
            378 =>
                array (
                    'equipo' => 'Prachuap',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jqV58IzB-rqX0UGZF.png',
                    'stadium_id' => 1,
                ),
            379 =>
                array (
                    'equipo' => 'Chiangrai',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6akZ4HdM-EeHAJ4HK.png',
                    'stadium_id' => 1,
                ),
            380 =>
                array (
                    'equipo' => 'Buriram',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ADWWB6Br-zacEqxP5.png',
                    'stadium_id' => 1,
                ),
            381 =>
                array (
                    'equipo' => 'Chonburi',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6gdjL1Cr-C4G8brOc.png',
                    'stadium_id' => 2,
                ),
            382 =>
                array (
                    'equipo' => 'Bangkok Utd',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Y1NdwVVg-YPkaAerp.png',
                    'stadium_id' => 2,
                ),
            383 =>
                array (
                    'equipo' => 'Sukhothai',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hb7sL7Cr-jTnh20lF.png',
                    'stadium_id' => 1,
                ),
            384 =>
                array (
                    'equipo' => 'PTT Rayong',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UTLtGcXg-bwzeIOf4.png',
                    'stadium_id' => 1,
                ),
            385 =>
                array (
                    'equipo' => 'Ratchaburi',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vLmgPKeM-dOWe8Gbs.png',
                    'stadium_id' => 2,
                ),
            386 =>
                array (
                    'equipo' => 'Samut Prakan City',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lYS4vVil-l0Gu7u2o.png',
                    'stadium_id' => 2,
                ),
            387 =>
                array (
                    'equipo' => 'Trat FC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0Qvcrxjl-0G5TkdN0.png',
                    'stadium_id' => 1,
                ),
            388 =>
                array (
                    'equipo' => 'Port MTI FC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OQS0nRBr-2c58WvZb.png',
                    'stadium_id' => 1,
                ),
            389 =>
                array (
                    'equipo' => 'Dnipro-1',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vcTrjbEa-v7SWmP4S.png',
                    'stadium_id' => 2,
                ),
            390 =>
                array (
                    'equipo' => 'Olimpik Donetsk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I3IjcCXg-WAMhaoaH.png',
                    'stadium_id' => 2,
                ),
            391 =>
                array (
                    'equipo' => 'Oleksandriya',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IqBO4gil-ILyTGkYF.png',
                    'stadium_id' => 1,
                ),
            392 =>
                array (
                    'equipo' => 'Shakhtar',
                    'img' => 'https://www.mismarcadores.com//res/image/data/x2qCsFCr-xr4ldnwr.png',
                    'stadium_id' => 1,
                ),
            393 =>
                array (
                    'equipo' => 'Karpaty',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SG983Zkl-GY2he6hl.png',
                    'stadium_id' => 2,
                ),
            394 =>
                array (
                    'equipo' => 'Dinamo Kiev',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KG9zc9yB-GY2he6hl.png',
                    'stadium_id' => 2,
                ),
            395 =>
                array (
                    'equipo' => 'Bunyodkor',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ia08igf5-E1tELe3C.png',
                    'stadium_id' => 2,
                ),
            396 =>
                array (
                    'equipo' => 'Termez Surkhon',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MBX1cGZA-hhs01pCt.png',
                    'stadium_id' => 2,
                ),
            397 =>
                array (
                    'equipo' => 'AGMK',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bRmCDecM-hhuIKFII.png',
                    'stadium_id' => 2,
                ),
            398 =>
                array (
                    'equipo' => 'Andijan',
                    'img' => 'https://www.mismarcadores.com//res/image/data/l8lYvGzS-hY4b1siU.png',
                    'stadium_id' => 2,
                ),
            399 =>
                array (
                    'equipo' => 'Buxoro',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I367QPxS-COpbg9GE.png',
                    'stadium_id' => 2,
                ),
            400 =>
                array (
                    'equipo' => 'Navbahor Namangan',
                    'img' => 'https://www.mismarcadores.com//res/image/data/S8p6FCeM-QT9syy3a.png',
                    'stadium_id' => 2,
                ),
            401 =>
                array (
                    'equipo' => 'Nasaf Qarshi',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fyexKxDa-MB1x4UpC.png',
                    'stadium_id' => 2,
                ),
            402 =>
                array (
                    'equipo' => 'Met. Bekobod',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WxTgTkFa-Es6f2NyO.png',
                    'stadium_id' => 2,
                ),
            403 =>
                array (
                    'equipo' => 'APOEL (Cyp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/x2BrosXg-SM1DsDl1.png',
                    'stadium_id' => 2,
                ),
            404 =>
                array (
                    'equipo' => 'Sutjeska (Mne)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hKzHNQcM-EPYOcVw6.png',
                    'stadium_id' => 2,
                ),
            405 =>
                array (
                    'equipo' => 'M. Tel Aviv (Isr)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GGBSZmil-lOxUSB7S.png',
                    'stadium_id' => 1,
                ),
            406 =>
                array (
                    'equipo' => 'CFR Cluj (Rou)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/S6SYxvWg-YHwiLvfK.png',
                    'stadium_id' => 1,
                ),
            407 =>
                array (
                    'equipo' => 'Nomme Kalju (Est)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AgK0X9Xg-YgZbBIrn.png',
                    'stadium_id' => 2,
                ),
            408 =>
                array (
                    'equipo' => 'Celtic (Sco)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6BtM40Br-CzHZteGt.png',
                    'stadium_id' => 2,
                ),
            409 =>
                array (
                    'equipo' => 'Basilea (Sui)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zLR1KgYg-pd5ZYb52.png',
                    'stadium_id' => 2,
                ),
            410 =>
                array (
                    'equipo' => 'PSV (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rXofTCZA-bcEywAKT.png',
                    'stadium_id' => 2,
                ),
            411 =>
                array (
                    'equipo' => 'Dinamo Zagreb (Cro)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YktDsvYg-6Renvvr9.png',
                    'stadium_id' => 2,
                ),
            412 =>
                array (
                    'equipo' => 'Saburtalo Tbilisi (Geo)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bujrJCEa-2X1i3aoM.png',
                    'stadium_id' => 2,
                ),
            413 =>
                array (
                    'equipo' => 'Valletta (Mlt)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vqF6jcg5-r3s43qy3.png',
                    'stadium_id' => 1,
                ),
            414 =>
                array (
                    'equipo' => 'Ferencvaros (Hun)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OvQtjVhl-GhNTdor3.png',
                    'stadium_id' => 1,
                ),
            415 =>
                array (
                    'equipo' => 'Olympiacos (Gre)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/C6DyywyB-SI9UPajS.png',
                    'stadium_id' => 2,
                ),
            416 =>
                array (
                    'equipo' => 'Plzen (Cze)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UBo6ihh5-6sEsOLMh.png',
                    'stadium_id' => 2,
                ),
            417 =>
                array (
                    'equipo' => 'Lincoln (Gib)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KGFtXvwS-GrlegRvh.png',
                    'stadium_id' => 2,
                ),
            418 =>
                array (
                    'equipo' => 'Ararat-Armenia (Arm)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tWIIcrhl-vZWmVJKh.png',
                    'stadium_id' => 2,
                ),
            419 =>
                array (
                    'equipo' => 'Suduva (Ltu)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/A1ysJqyB-fqYOah4o.png',
                    'stadium_id' => 1,
                ),
            420 =>
                array (
                    'equipo' => 'Tre Penne (San)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ruY0fTCa-Uqgp2dbh.png',
                    'stadium_id' => 1,
                ),
            421 =>
                array (
                    'equipo' => 'Dudelange (Lux)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vRaZvZfM-jgft3xqn.png',
                    'stadium_id' => 2,
                ),
            422 =>
                array (
                    'equipo' => 'Shkëndija (Mkd)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Sp9Q7qe5-UHvCt4sd.png',
                    'stadium_id' => 2,
                ),
            423 =>
                array (
                    'equipo' => 'KF Feronikeli (Kos)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jNMkrodM-SnTd4DLN.png',
                    'stadium_id' => 2,
                ),
            424 =>
                array (
                    'equipo' => 'Slovan Bratislava (Svk)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nF96wcwS-UHEsuZpg.png',
                    'stadium_id' => 2,
                ),
            425 =>
                array (
                    'equipo' => 'Jena',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QFvxxFf5-Um1broz4.png',
                    'stadium_id' => 2,
                ),
            426 =>
                array (
                    'equipo' => 'Braunschweig',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jTPygLBr-SKpuGhom.png',
                    'stadium_id' => 2,
                ),
            427 =>
                array (
                    'equipo' => 'Kaiserslautern',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pAs4omCr-nLRsbtQR.png',
                    'stadium_id' => 2,
                ),
            428 =>
                array (
                    'equipo' => 'Ingolstadt',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4dq60IAr-K6FXwj5N.png',
                    'stadium_id' => 2,
                ),
            429 =>
                array (
                    'equipo' => 'Rostock',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4EFuKCZA-S82PeYBB.png',
                    'stadium_id' => 1,
                ),
            430 =>
                array (
                    'equipo' => 'Bayern Múnich II',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EN7EzVGG-pCspZtcj.png',
                    'stadium_id' => 1,
                ),
            431 =>
                array (
                    'equipo' => 'Uerdingen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bsZe8mAr-dfaaLbap.png',
                    'stadium_id' => 2,
                ),
            432 =>
                array (
                    'equipo' => 'Unterhaching',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zkutRtDr-zk8tJzWQ.png',
                    'stadium_id' => 2,
                ),
            433 =>
                array (
                    'equipo' => 'Würzburger Kickers',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hl2Y1JHG-jiP0452i.png',
                    'stadium_id' => 1,
                ),
            434 =>
                array (
                    'equipo' => 'Grossaspach',
                    'img' => 'https://www.mismarcadores.com//res/image/data/riTD45Ca-2u2iUVB0.png',
                    'stadium_id' => 1,
                ),
            435 =>
                array (
                    'equipo' => 'Altglienicke',
                    'img' => 'https://www.mismarcadores.com//res/image/data/l8kHiW9r-l4YyOSHk.png',
                    'stadium_id' => 2,
                ),
            436 =>
                array (
                    'equipo' => 'Auerbach',
                    'img' => 'https://www.mismarcadores.com//res/image/data/h8OMSweM-Ic7n0qnl.png',
                    'stadium_id' => 2,
                ),
            437 =>
                array (
                    'equipo' => 'Hertha Berlín II',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QgosQ1Ca-G6nOIenc.png',
                    'stadium_id' => 1,
                ),
            438 =>
                array (
                    'equipo' => 'Cottbus',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pfixGFFG-SAXCYARb.png',
                    'stadium_id' => 1,
                ),
            439 =>
                array (
                    'equipo' => 'Arsenal Sarandí',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nPXYHkh5-Q7p7NLM4.png',
                    'stadium_id' => 1,
                ),
            440 =>
                array (
                    'equipo' => 'Banfield',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UBFrXuDa-6F5VmgXG.png',
                    'stadium_id' => 1,
                ),
            441 =>
                array (
                    'equipo' => 'Atl. Tucumán',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0hFCl2f5-pKyJWknf.png',
                    'stadium_id' => 1,
                ),
            442 =>
                array (
                    'equipo' => 'Rosario Central',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nsZ9XOg5-IoJzkBC9.png',
                    'stadium_id' => 1,
                ),
            443 =>
                array (
                    'equipo' => 'Royal Pari',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IFErB3HG-AetXWB0b.png',
                    'stadium_id' => 1,
                ),
            444 =>
                array (
                    'equipo' => 'Blooming',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Y1JlKGdM-MNZDKaGs.png',
                    'stadium_id' => 1,
                ),
            445 =>
                array (
                    'equipo' => 'CSA',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UPX8Hag5-63NwBgzb.png',
                    'stadium_id' => 2,
                ),
            446 =>
                array (
                    'equipo' => 'Gremio',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QPdJscAr-4WCh0hzo.png',
                    'stadium_id' => 2,
                ),
            447 =>
                array (
                    'equipo' => 'Coritiba',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xKm8lie5-ziJpBiXs.png',
                    'stadium_id' => 2,
                ),
            448 =>
                array (
                    'equipo' => 'Botafogo SP',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lduff8Ca-pdepRDDN.png',
                    'stadium_id' => 2,
                ),
            449 =>
                array (
                    'equipo' => 'Sport Recife',
                    'img' => 'https://www.mismarcadores.com//res/image/data/O0aua6ZA-KAPnxsGE.png',
                    'stadium_id' => 1,
                ),
            450 =>
                array (
                    'equipo' => 'Guaraní',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nVW3uzAr-f9gRHS7H.png',
                    'stadium_id' => 1,
                ),
            451 =>
                array (
                    'equipo' => 'Daegu',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hxQYhHWg-0WTw39Yq.png',
                    'stadium_id' => 1,
                ),
            452 =>
                array (
                    'equipo' => 'Suwon',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OndahADa-UoSiXBtO.png',
                    'stadium_id' => 1,
                ),
            453 =>
                array (
                    'equipo' => 'Incheon',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KjixdedM-42iNWCnC.png',
                    'stadium_id' => 1,
                ),
            454 =>
                array (
                    'equipo' => 'Gyeongnam',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jDOGkmBr-42iNWCnC.png',
                    'stadium_id' => 1,
                ),
            455 =>
                array (
                    'equipo' => 'Seongnam',
                    'img' => 'https://www.mismarcadores.com//res/image/data/d2Gj9NDa-tYXlmjsE.png',
                    'stadium_id' => 1,
                ),
            456 =>
                array (
                    'equipo' => 'Sangju Sangmu',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bPfyFjjl-QBhJXhX5.png',
                    'stadium_id' => 1,
                ),
            457 =>
                array (
                    'equipo' => 'Ulsan Hyundai',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I9mJB4xS-Qg76KW62.png',
                    'stadium_id' => 1,
                ),
            458 =>
                array (
                    'equipo' => 'Seoul',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lYmWcCfM-KdOvkf2t.png',
                    'stadium_id' => 1,
                ),
            459 =>
                array (
                    'equipo' => 'America de Quito',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2siUn6g5-EVZKIlhD.png',
                    'stadium_id' => 1,
                ),
            460 =>
                array (
                    'equipo' => 'Dep. Cuenca',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tfVpg5YA-EZHnSJaK.png',
                    'stadium_id' => 1,
                ),
            461 =>
                array (
                    'equipo' => 'Persipura',
                    'img' => 'https://www.mismarcadores.com//res/image/data/K8b057f5-C4G8brOc.png',
                    'stadium_id' => 2,
                ),
            462 =>
                array (
                    'equipo' => 'Persija Jakarta',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2uyZBddM-hjC8KtQI.png',
                    'stadium_id' => 2,
                ),
            463 =>
                array (
                    'equipo' => 'Arema',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CnpWgcCa-Clh2l9jI.png',
                    'stadium_id' => 2,
                ),
            464 =>
                array (
                    'equipo' => 'Persib',
                    'img' => 'https://www.mismarcadores.com//res/image/data/G6HiiIg5-4v5X7OcA.png',
                    'stadium_id' => 2,
                ),
            465 =>
                array (
                    'equipo' => 'Ashdod',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ELGVYldM-db1KeSC4.png',
                    'stadium_id' => 1,
                ),
            466 =>
                array (
                    'equipo' => 'H. Tel-Aviv',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dYr5gCCr-YH51pF4r.png',
                    'stadium_id' => 1,
                ),
            467 =>
                array (
                    'equipo' => 'Azuqueca (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/d2JfboGG-MT46WF1f.png',
                    'stadium_id' => 1,
                ),
            468 =>
                array (
                    'equipo' => 'Alcorcón B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UDD3Srjl-fJxFO2u4.png',
                    'stadium_id' => 1,
                ),
            469 =>
                array (
                    'equipo' => 'Athletic Club B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/j52EfkHG-ULtrEX0S.png',
                    'stadium_id' => 2,
                ),
            470 =>
                array (
                    'equipo' => 'Arenas Club (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IHEfxQCa-EwpAabWA.png',
                    'stadium_id' => 2,
                ),
            471 =>
                array (
                    'equipo' => 'Maia (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jRN0uWjl-xQObftVC.png',
                    'stadium_id' => 2,
                ),
            472 =>
                array (
                    'equipo' => 'Vizela (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GYCwoNCr-IFUpPyQi.png',
                    'stadium_id' => 2,
                ),
            473 =>
                array (
                    'equipo' => 'Adelaide United (Aus)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bgPG26GG-QHNNZhR3.png',
                    'stadium_id' => 1,
                ),
            474 =>
                array (
                    'equipo' => 'Adelaide Raiders (Aus)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/naeXvqAr-EcITn9eh.png',
                    'stadium_id' => 1,
                ),
            475 =>
                array (
                    'equipo' => 'Sintrense (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nqkAILzS-Qu0v97WB.png',
                    'stadium_id' => 2,
                ),
            476 =>
                array (
                    'equipo' => 'V. Setúbal Sub-23 (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OxBJNrzB-jNRJtQ6o.png',
                    'stadium_id' => 2,
                ),
            477 =>
                array (
                    'equipo' => 'Erzurum BB (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SGSNqjzB-AXTpyfPt.png',
                    'stadium_id' => 1,
                ),
            478 =>
                array (
                    'equipo' => 'Adana Demirspor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xGflc2jl-4S4QMFkU.png',
                    'stadium_id' => 1,
                ),
            479 =>
                array (
                    'equipo' => 'Samsunspor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QTKd3FxS-tdOFEVzk.png',
                    'stadium_id' => 1,
                ),
            480 =>
                array (
                    'equipo' => 'Bayrampasa (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fPRvzNg5-6Tda7lVe.png',
                    'stadium_id' => 1,
                ),
            481 =>
                array (
                    'equipo' => 'Espanyol (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SObn7xDr-Eq7v4whI.png',
                    'stadium_id' => 1,
                ),
            482 =>
                array (
                    'equipo' => 'PSG (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EskJufg5-lIDJVsTo.png',
                    'stadium_id' => 1,
                ),
            483 =>
                array (
                    'equipo' => 'Sydney FC (Aus)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/40aWoCil-E7siXNRA.png',
                    'stadium_id' => 1,
                ),
            484 =>
                array (
                    'equipo' => 'Rizespor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GMx1mueM-zZwxlQkm.png',
                    'stadium_id' => 1,
                ),
            485 =>
                array (
                    'equipo' => 'Antalyaspor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/f1wRMdEG-GrC0hB6h.png',
                    'stadium_id' => 1,
                ),
            486 =>
                array (
                    'equipo' => 'Chippenham (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/f3Js8mhl-nJxHtCPN.png',
                    'stadium_id' => 1,
                ),
            487 =>
                array (
                    'equipo' => 'Newport (Wal)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tY1fkyYg-lO2WsPFm.png',
                    'stadium_id' => 1,
                ),
            488 =>
                array (
                    'equipo' => 'Menemen Belediye (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pAGib4eM-nkLVzxIi.png',
                    'stadium_id' => 2,
                ),
            489 =>
                array (
                    'equipo' => 'Balikesirspor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OxerKQEG-lKAvvmCA.png',
                    'stadium_id' => 2,
                ),
            490 =>
                array (
                    'equipo' => 'Radnicki Nis (Srb)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/feqtGbCa-YX17BcxG.png',
                    'stadium_id' => 1,
                ),
            491 =>
                array (
                    'equipo' => 'Radnik (Srb)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/08C5YOWg-YqOXGANg.png',
                    'stadium_id' => 1,
                ),
            492 =>
                array (
                    'equipo' => 'Elazigspor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QyllPcg5-6PC0z7Lm.png',
                    'stadium_id' => 1,
                ),
            493 =>
                array (
                    'equipo' => 'Spezia (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2yWnWaBr-pI6ga41n.png',
                    'stadium_id' => 2,
                ),
            494 =>
                array (
                    'equipo' => 'Fermana (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AZLizmFG-KYobvX0r.png',
                    'stadium_id' => 2,
                ),
            495 =>
                array (
                    'equipo' => 'Aerostar (Rou)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2y1eAQdM-zyym14wU.png',
                    'stadium_id' => 2,
                ),
            496 =>
                array (
                    'equipo' => 'Bucovina Radauti (Rou)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vgTvynFa-nZG2J2NH.png',
                    'stadium_id' => 2,
                ),
            497 =>
                array (
                    'equipo' => 'Cosenza (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Yc4PXijl-nJrPQuvg.png',
                    'stadium_id' => 1,
                ),
            498 =>
                array (
                    'equipo' => 'Monopoli (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EPZfn1yS-v76AUkwA.png',
                    'stadium_id' => 1,
                ),
            499 =>
                array (
                    'equipo' => 'FC Oss (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fHXqbhGG-CnLltYrI.png',
                    'stadium_id' => 2,
                ),
            500 =>
                array (
                    'equipo' => 'Umm-Salal (Qat)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ELyZwCYA-4tlzHqYP.png',
                    'stadium_id' => 2,
                ),
            501 =>
                array (
                    'equipo' => 'Xanthi (Gre)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Kj6PrDeM-29PmZVKD.png',
                    'stadium_id' => 2,
                ),
            502 =>
                array (
                    'equipo' => 'Nea Salamis (Cyp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pbkQnrCr-YqYJMygF.png',
                    'stadium_id' => 2,
                ),
            503 =>
                array (
                    'equipo' => 'Juve Stabia (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vgXiMjg5-8pcUOWub.png',
                    'stadium_id' => 2,
                ),
            504 =>
                array (
                    'equipo' => 'Campobasso (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tGiYSzDa-UumRDJbk.png',
                    'stadium_id' => 2,
                ),
            505 =>
                array (
                    'equipo' => 'Monza (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SUTtpvDa-foDUIoRj.png',
                    'stadium_id' => 2,
                ),
            506 =>
                array (
                    'equipo' => 'Frosinone (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MP0Dgnhl-jXzYs3WB.png',
                    'stadium_id' => 2,
                ),
            507 =>
                array (
                    'equipo' => 'Sandomierz (Pol)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dKR1Ssf5-EmPI8JYL.png',
                    'stadium_id' => 1,
                ),
            508 =>
                array (
                    'equipo' => 'Yehuda (Isr)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vZBQ4tcM-SbL3LU2H.png',
                    'stadium_id' => 1,
                ),
            509 =>
                array (
                    'equipo' => 'Al Wasl (Uae)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WSOq3hFG-SfNHZlc8.png',
                    'stadium_id' => 2,
                ),
            510 =>
                array (
                    'equipo' => 'Kayserispor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Mmg6GJxS-EePIZka0.png',
                    'stadium_id' => 2,
                ),
            511 =>
                array (
                    'equipo' => 'Næsby (Den)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AmCP2XxS-pjCSOnQ7.png',
                    'stadium_id' => 2,
                ),
            512 =>
                array (
                    'equipo' => 'Dalum IF (Den)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IqVdyLCa-84iWWLEM.png',
                    'stadium_id' => 2,
                ),
            513 =>
                array (
                    'equipo' => 'Rogaska (Slo)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UskMNgYg-6cGElX0a.png',
                    'stadium_id' => 1,
                ),
            514 =>
                array (
                    'equipo' => 'Al-Gharafa (Qat)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UNvmbNCa-jLE0Un7l.png',
                    'stadium_id' => 2,
                ),
            515 =>
                array (
                    'equipo' => 'Eindhoven (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IkVuO4jl-QJxl86B2.png',
                    'stadium_id' => 2,
                ),
            516 =>
                array (
                    'equipo' => 'ASWH (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4IP65ahl-Sd2DAxBb.png',
                    'stadium_id' => 2,
                ),
            517 =>
                array (
                    'equipo' => 'Dordrecht (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/j1GNXkhl-dldTmxQm.png',
                    'stadium_id' => 2,
                ),
            518 =>
                array (
                    'equipo' => 'De Treffers (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/K2aCvzeM-jczMEm0d.png',
                    'stadium_id' => 2,
                ),
            519 =>
                array (
                    'equipo' => 'Nijmegen (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4IGls6Fa-xUnkdXKi.png',
                    'stadium_id' => 2,
                ),
            520 =>
                array (
                    'equipo' => 'Den Bosch (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bPlRpaCa-WCiqpfPC.png',
                    'stadium_id' => 2,
                ),
            521 =>
                array (
                    'equipo' => 'Al-Taawon (Sau)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hrfMnkf5-6PUMl6VM.png',
                    'stadium_id' => 2,
                ),
            522 =>
                array (
                    'equipo' => 'Fuenlabrada (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ADgwMzDa-Gz4CED7Q.png',
                    'stadium_id' => 2,
                ),
            523 =>
                array (
                    'equipo' => 'Roda (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/l0yQEbhl-KEeKv8E8.png',
                    'stadium_id' => 2,
                ),
            524 =>
                array (
                    'equipo' => 'Gleinstatten (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fJvxL8yS-6JLTUHK1.png',
                    'stadium_id' => 2,
                ),
            525 =>
                array (
                    'equipo' => 'SV Wildon (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YycgrvZg-pY0N44YL.png',
                    'stadium_id' => 2,
                ),
            526 =>
                array (
                    'equipo' => 'Groene Ster (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Wb8ZUQXg-rZJFzVMF.png',
                    'stadium_id' => 1,
                ),
            527 =>
                array (
                    'equipo' => 'Roda (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6kiJzlil-8lF1ED0e.png',
                    'stadium_id' => 1,
                ),
            528 =>
                array (
                    'equipo' => 'Grossklein (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IcKp5re5-OIxhfKVg.png',
                    'stadium_id' => 2,
                ),
            529 =>
                array (
                    'equipo' => 'Grazer (Am) (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 2,
                ),
            530 =>
                array (
                    'equipo' => 'Herzogenburg (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 2,
                ),
            531 =>
                array (
                    'equipo' => 'Retz (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xlpuTDyB-KYPTwJ2I.png',
                    'stadium_id' => 2,
                ),
            532 =>
                array (
                    'equipo' => 'Kristiansund (Nor)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Cfe4YYyS-I7Mi5rH4.png',
                    'stadium_id' => 1,
                ),
            533 =>
                array (
                    'equipo' => 'Manchester Utd (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nwSRlyWg-rBodzytr.png',
                    'stadium_id' => 1,
                ),
            534 =>
                array (
                    'equipo' => 'Málaga (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WMMX2rZg-WvKb1jNa.png',
                    'stadium_id' => 1,
                ),
            535 =>
                array (
                    'equipo' => 'Córdoba (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SvAe0DxS-S6HqkbxH.png',
                    'stadium_id' => 1,
                ),
            536 =>
                array (
                    'equipo' => 'Micheldorf (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EitSJGWg-vNMnQjbl.png',
                    'stadium_id' => 2,
                ),
            537 =>
                array (
                    'equipo' => 'Parma (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YcrE7ae5-G8Rtggfp.png',
                    'stadium_id' => 2,
                ),
            538 =>
                array (
                    'equipo' => 'Nantes (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tvsQNgAr-GGPVSPvm.png',
                    'stadium_id' => 2,
                ),
            539 =>
                array (
                    'equipo' => 'Sporting de Gijón (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/n9PvyJhl-tMohf8N0.png',
                    'stadium_id' => 2,
                ),
            540 =>
                array (
                    'equipo' => 'Simmeringer (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GWV18Kil-Y7Anza6A.png',
                    'stadium_id' => 1,
                ),
            541 =>
                array (
                    'equipo' => 'Donaufeld Wien (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fXA16he5-MPrGrpdP.png',
                    'stadium_id' => 1,
                ),
            542 =>
                array (
                    'equipo' => 'Sint Niklaas (Bel)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8OZ2Xae5-prQbGIk6.png',
                    'stadium_id' => 1,
                ),
            543 =>
                array (
                    'equipo' => 'Lokeren (Bel)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rHs31jyB-jaoKbSYS.png',
                    'stadium_id' => 1,
                ),
            544 =>
                array (
                    'equipo' => 'Su Rebenland (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fZYxw5FG-AkBX1zGs.png',
                    'stadium_id' => 2,
                ),
            545 =>
                array (
                    'equipo' => 'AC Linden Leibnitz (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pEJBFLBr-CbBiFgN8.png',
                    'stadium_id' => 2,
                ),
            546 =>
                array (
                    'equipo' => 'Torhout (Bel)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/n5ALu7Ar-jJLlF06T.png',
                    'stadium_id' => 1,
                ),
            547 =>
                array (
                    'equipo' => 'Gullegem (Bel)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pvaUqNil-vu2c69Lb.png',
                    'stadium_id' => 1,
                ),
            548 =>
                array (
                    'equipo' => 'El San Martín (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OGQqaWXg-MXviBQWd.png',
                    'stadium_id' => 2,
                ),
            549 =>
                array (
                    'equipo' => 'Langreo (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Qw62JaXg-8IGh4TiE.png',
                    'stadium_id' => 2,
                ),
            550 =>
                array (
                    'equipo' => 'Graafschap (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/l04dpAfM-vFG942fq.png',
                    'stadium_id' => 2,
                ),
            551 =>
                array (
                    'equipo' => 'Lienden (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WzTu3DeM-QoX8574F.png',
                    'stadium_id' => 2,
                ),
            552 =>
                array (
                    'equipo' => 'Haninge (Swe)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ETVNQnBr-WYd11wuD.png',
                    'stadium_id' => 1,
                ),
            553 =>
                array (
                    'equipo' => 'Hanvikens SK (Swe)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 1,
                ),
            554 =>
                array (
                    'equipo' => 'Korneuburg (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zqrAXcFG-8t1Nn1XM.png',
                    'stadium_id' => 2,
                ),
            555 =>
                array (
                    'equipo' => 'Haitzendorf (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KQV5nGCr-QNY40XsE.png',
                    'stadium_id' => 2,
                ),
            556 =>
                array (
                    'equipo' => 'Meerbusch (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6soVtNYA-YcXrEGyj.png',
                    'stadium_id' => 2,
                ),
            557 =>
                array (
                    'equipo' => 'Sonsbeck (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/A77CKEhl-C69TMMgT.png',
                    'stadium_id' => 2,
                ),
            558 =>
                array (
                    'equipo' => 'Schermbeck (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8jN5JIyB-2BUXv9JE.png',
                    'stadium_id' => 2,
                ),
            559 =>
                array (
                    'equipo' => 'Kleve (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pGkcD6dM-0ONzvLZ5.png',
                    'stadium_id' => 2,
                ),
            560 =>
                array (
                    'equipo' => 'St. Gallen (Sui)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/v1klJ9Xg-2oT57Ma9.png',
                    'stadium_id' => 2,
                ),
            561 =>
                array (
                    'equipo' => 'Dortmund (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Yiq1eU9r-dhhpTYj5.png',
                    'stadium_id' => 2,
                ),
            562 =>
                array (
                    'equipo' => 'Telstar (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xOmxdgXg-j5OTOT7N.png',
                    'stadium_id' => 1,
                ),
            563 =>
                array (
                    'equipo' => 'Katwijk (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WQ9JtkFG-YoclIplL.png',
                    'stadium_id' => 1,
                ),
            564 =>
                array (
                    'equipo' => 'Undy (Wal)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2ZJv2eDa-6yPS6jzo.png',
                    'stadium_id' => 2,
                ),
            565 =>
                array (
                    'equipo' => 'Cinderford (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/naie6zgl-QXFegdg1.png',
                    'stadium_id' => 2,
                ),
            566 =>
                array (
                    'equipo' => 'VfB Huls (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rgmpF3cM-bF7O0H4I.png',
                    'stadium_id' => 2,
                ),
            567 =>
                array (
                    'equipo' => 'Westfalia Langenbochum (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 2,
                ),
            568 =>
                array (
                    'equipo' => 'Bembibre (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/voQxwtf5-K00ks1z7.png',
                    'stadium_id' => 2,
                ),
            569 =>
                array (
                    'equipo' => 'Cultural Leonesa (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UNSRimZg-OtR2F6xn.png',
                    'stadium_id' => 2,
                ),
            570 =>
                array (
                    'equipo' => 'Eastleigh (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IFUcnrCr-As9Jjemb.png',
                    'stadium_id' => 2,
                ),
            571 =>
                array (
                    'equipo' => 'Southampton Sub-23 (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bcRSiuYg-0t7ZKecM.png',
                    'stadium_id' => 2,
                ),
            572 =>
                array (
                    'equipo' => 'Genoa (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KKFT9LZA-ERLRjHRE.png',
                    'stadium_id' => 1,
                ),
            573 =>
                array (
                    'equipo' => 'Leca (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CnPj3wGG-fmtRDVaO.png',
                    'stadium_id' => 1,
                ),
            574 =>
                array (
                    'equipo' => 'Sao Pedro da Cova (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 1,
                ),
            575 =>
                array (
                    'equipo' => 'Muleño (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pWJNcZil-CUeOzGcN.png',
                    'stadium_id' => 2,
                ),
            576 =>
                array (
                    'equipo' => 'Real Murcia (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EX6tKhdM-CvqzGgWF.png',
                    'stadium_id' => 2,
                ),
            577 =>
                array (
                    'equipo' => 'Norwich (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CY8Xm4wS-bkEoMlFf.png',
                    'stadium_id' => 1,
                ),
            578 =>
                array (
                    'equipo' => 'Atalanta (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xASUZ6il-S82PeYBB.png',
                    'stadium_id' => 1,
                ),
            579 =>
                array (
                    'equipo' => 'St. Neots (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xhdIELEG-vqCL8Wzq.png',
                    'stadium_id' => 1,
                ),
            580 =>
                array (
                    'equipo' => 'MK Dons (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6FpRb0Wg-SbuNZ7qf.png',
                    'stadium_id' => 1,
                ),
            581 =>
                array (
                    'equipo' => 'Villanueva CF (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SSYnwcCr-QeYS5QYL.png',
                    'stadium_id' => 2,
                ),
            582 =>
                array (
                    'equipo' => 'Ebro (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dUtV0XFG-6oCZSssg.png',
                    'stadium_id' => 2,
                ),
            583 =>
                array (
                    'equipo' => 'Bath (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ui35wXAr-KSdpJKLk.png',
                    'stadium_id' => 2,
                ),
            584 =>
                array (
                    'equipo' => 'Bristol City Sub-23 (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ddnejHWg-IwkeDVlk.png',
                    'stadium_id' => 2,
                ),
            585 =>
                array (
                    'equipo' => 'Belper Town (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Y3DjMYAr-GWZEyOJh.png',
                    'stadium_id' => 2,
                ),
            586 =>
                array (
                    'equipo' => 'Mickleover (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rHe4l0wS-xA4EhD7f.png',
                    'stadium_id' => 2,
                ),
            587 =>
                array (
                    'equipo' => 'Bradford PA (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pCCxi9dM-fsTEgxAG.png',
                    'stadium_id' => 2,
                ),
            588 =>
                array (
                    'equipo' => 'Huddersfield Sub-23 (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8QIIlXh5-tYa7EY8i.png',
                    'stadium_id' => 2,
                ),
            589 =>
                array (
                    'equipo' => 'C. Rangers (Nir)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nJvUphjl-xbM5LV39.png',
                    'stadium_id' => 1,
                ),
            590 =>
                array (
                    'equipo' => 'Knockbreda (Nir)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zuAJ0rZA-t4IEH3hN.png',
                    'stadium_id' => 1,
                ),
            591 =>
                array (
                    'equipo' => 'Congleton (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Cf2LG7GG-0xoL9Hwr.png',
                    'stadium_id' => 1,
                ),
            592 =>
                array (
                    'equipo' => 'Leek (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MPew19HG-0AUDwmB6.png',
                    'stadium_id' => 1,
                ),
            593 =>
                array (
                    'equipo' => 'Coria C.F. (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zXnYTnHG-r7Nl2sOe.png',
                    'stadium_id' => 1,
                ),
            594 =>
                array (
                    'equipo' => 'Sevilla B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Sxpw4PWg-YuOZShOm.png',
                    'stadium_id' => 1,
                ),
            595 =>
                array (
                    'equipo' => 'Crumlin United (Nir)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MehMuNWg-EcpzVteo.png',
                    'stadium_id' => 2,
                ),
            596 =>
                array (
                    'equipo' => 'Cliftonville (Nir)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lUck8CyB-ILssfci6.png',
                    'stadium_id' => 2,
                ),
            597 =>
                array (
                    'equipo' => 'Dunston (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QLrvdTDa-QPem0toU.png',
                    'stadium_id' => 1,
                ),
            598 =>
                array (
                    'equipo' => 'Morpeth (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QBEyqFXg-AHTO8pK8.png',
                    'stadium_id' => 1,
                ),
            599 =>
                array (
                    'equipo' => 'East Belfast (Nir)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CSPt8KGG-GOwbOAml.png',
                    'stadium_id' => 2,
                ),
            600 =>
                array (
                    'equipo' => 'Harrow (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I3eo17jl-Ek4s97wt.png',
                    'stadium_id' => 1,
                ),
            601 =>
                array (
                    'equipo' => 'Potters Bar (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CzpQaCXg-Ol7Z4Czj.png',
                    'stadium_id' => 1,
                ),
            602 =>
                array (
                    'equipo' => 'Hebburn Town (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KlosBCcM-4IaNhJqF.png',
                    'stadium_id' => 2,
                ),
            603 =>
                array (
                    'equipo' => 'South Shields (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UHW7w0il-jHGZ8e4U.png',
                    'stadium_id' => 2,
                ),
            604 =>
                array (
                    'equipo' => 'Matlock (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2JLef9g5-zJmSmTWj.png',
                    'stadium_id' => 2,
                ),
            605 =>
                array (
                    'equipo' => 'Sheffield Utd Sub-23 (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CpeANgzB-Qmjehq2r.png',
                    'stadium_id' => 2,
                ),
            606 =>
                array (
                    'equipo' => 'Melksham (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OUZRDIjl-0ExQmKL7.png',
                    'stadium_id' => 1,
                ),
            607 =>
                array (
                    'equipo' => 'Swindon (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/614qaW9r-GzGhZJbs.png',
                    'stadium_id' => 1,
                ),
            608 =>
                array (
                    'equipo' => 'Pickering Town (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dv9nkmZg-GWwMvnmK.png',
                    'stadium_id' => 2,
                ),
            609 =>
                array (
                    'equipo' => 'York (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ii5cBIZA-IZS7ppud.png',
                    'stadium_id' => 2,
                ),
            610 =>
                array (
                    'equipo' => 'Skelmersdale (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8dvdrrWg-8KyUa0jj.png',
                    'stadium_id' => 2,
                ),
            611 =>
                array (
                    'equipo' => 'Prescot (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ya5vcGxS-fuOLx4HD.png',
                    'stadium_id' => 2,
                ),
            612 =>
                array (
                    'equipo' => 'Stone Old Alleynians (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zk8GmyZg-U9G2q7Ie.png',
                    'stadium_id' => 2,
                ),
            613 =>
                array (
                    'equipo' => 'Kidsgrove Athletic (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/E3rVXAzB-jeiLFEUJ.png',
                    'stadium_id' => 2,
                ),
            614 =>
                array (
                    'equipo' => 'Tavistock (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nPur3acM-pt1BX28E.png',
                    'stadium_id' => 1,
                ),
            615 =>
                array (
                    'equipo' => 'Plymouth (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/j9hjcFBr-MTfHh8a2.png',
                    'stadium_id' => 1,
                ),
            616 =>
                array (
                    'equipo' => 'West Auckland (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/b7tIiVCr-GElqrKAj.png',
                    'stadium_id' => 2,
                ),
            617 =>
                array (
                    'equipo' => 'Marske (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WYRJwOFG-tdQ8u2ks.png',
                    'stadium_id' => 2,
                ),
            618 =>
                array (
                    'equipo' => 'Ashton Town (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4Kn4yBXg-fLa4bjOg.png',
                    'stadium_id' => 2,
                ),
            619 =>
                array (
                    'equipo' => 'Widnes (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dfepEjEa-OWLak8Qb.png',
                    'stadium_id' => 2,
                ),
            620 =>
                array (
                    'equipo' => 'Bishop\'s Stortford (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/K4rzqyhl-YHHkfrFh.png',
                    'stadium_id' => 1,
                ),
            621 =>
                array (
                    'equipo' => 'Royston (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2FsKELHG-dQXznbmK.png',
                    'stadium_id' => 1,
                ),
            622 =>
                array (
                    'equipo' => 'Bromsgrove (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dYEPFqGG-SprJ7DB8.png',
                    'stadium_id' => 2,
                ),
            623 =>
                array (
                    'equipo' => 'Cheltenham (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fylq4GfM-Uioiyp8k.png',
                    'stadium_id' => 2,
                ),
            624 =>
                array (
                    'equipo' => 'Burnley (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lrUqOmDa-CKCXmfAs.png',
                    'stadium_id' => 2,
                ),
            625 =>
                array (
                    'equipo' => 'Niza (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/boyRUvyB-jiROSmFn.png',
                    'stadium_id' => 2,
                ),
            626 =>
                array (
                    'equipo' => 'Colwyn Bay (Wal)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dpGjnZyS-6ZgKDow6.png',
                    'stadium_id' => 1,
                ),
            627 =>
                array (
                    'equipo' => 'Crewe Sub-23 (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QeafTsDr-AuOE2o5q.png',
                    'stadium_id' => 1,
                ),
            628 =>
                array (
                    'equipo' => 'Eastbourne (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Cz5RRZdM-AJjyEksi.png',
                    'stadium_id' => 2,
                ),
            629 =>
                array (
                    'equipo' => 'Hastings (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EuKcWfe5-noac5Px5.png',
                    'stadium_id' => 2,
                ),
            630 =>
                array (
                    'equipo' => 'FC United (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ObeRKywS-fcXTbLHT.png',
                    'stadium_id' => 2,
                ),
            631 =>
                array (
                    'equipo' => 'Chester (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EHf94YBr-WrIJigNQ.png',
                    'stadium_id' => 2,
                ),
            632 =>
                array (
                    'equipo' => 'Halesowen (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SnYesPeM-08y2G0mm.png',
                    'stadium_id' => 1,
                ),
            633 =>
                array (
                    'equipo' => 'Alvechurch (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YJEFBLwS-KYLpWEd8.png',
                    'stadium_id' => 1,
                ),
            634 =>
                array (
                    'equipo' => 'Haywards (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zgKSXnCr-lneYg5y9.png',
                    'stadium_id' => 1,
                ),
            635 =>
                array (
                    'equipo' => 'Lewes (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dIXo3lYg-84mDIo4o.png',
                    'stadium_id' => 1,
                ),
            636 =>
                array (
                    'equipo' => 'Hibernian (Sco)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bgb702hl-Ye2KVwGH.png',
                    'stadium_id' => 2,
                ),
            637 =>
                array (
                    'equipo' => 'Newcastle (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fojwJwZA-KYq0Zfel.png',
                    'stadium_id' => 2,
                ),
            638 =>
                array (
                    'equipo' => 'Hornchurch (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IoOk9KyB-IgoxXHiD.png',
                    'stadium_id' => 2,
                ),
            639 =>
                array (
                    'equipo' => 'Billericay (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dnuP7DAr-QgwBVCU3.png',
                    'stadium_id' => 2,
                ),
            640 =>
                array (
                    'equipo' => 'Hyde (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KSnI3Ff5-vuUhfg5A.png',
                    'stadium_id' => 1,
                ),
            641 =>
                array (
                    'equipo' => 'Rochdale (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SKDrbiGG-6kvRYRb0.png',
                    'stadium_id' => 1,
                ),
            642 =>
                array (
                    'equipo' => 'Maldon & Tiptree (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IPWMcxGG-SGMFkRII.png',
                    'stadium_id' => 2,
                ),
            643 =>
                array (
                    'equipo' => 'Leiston (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Gn5aRbdM-noLDPejn.png',
                    'stadium_id' => 2,
                ),
            644 =>
                array (
                    'equipo' => 'Met. Police (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jVjT5dg5-QsDUJDbt.png',
                    'stadium_id' => 2,
                ),
            645 =>
                array (
                    'equipo' => 'Merstham (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SMhGFvCr-6meT8lJt.png',
                    'stadium_id' => 2,
                ),
            646 =>
                array (
                    'equipo' => 'Northwich Victoria (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vZCvpVwS-IoLu4nkh.png',
                    'stadium_id' => 1,
                ),
            647 =>
                array (
                    'equipo' => 'Buxton (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hETUvFyS-SryXUrgA.png',
                    'stadium_id' => 1,
                ),
            648 =>
                array (
                    'equipo' => 'Radcliffe (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MVzXR4Cr-Um3qrGMU.png',
                    'stadium_id' => 2,
                ),
            649 =>
                array (
                    'equipo' => 'Bury (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lYlCNvZA-GWBgKSq7.png',
                    'stadium_id' => 2,
                ),
            650 =>
                array (
                    'equipo' => 'Trafford (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/827e3jCa-CSEYatek.png',
                    'stadium_id' => 1,
                ),
            651 =>
                array (
                    'equipo' => 'Altrincham (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jFs6y4yB-IVSdgDKG.png',
                    'stadium_id' => 1,
                ),
            652 =>
                array (
                    'equipo' => 'Wimbledon (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8ziZJ2e5-6iHH0MVJ.png',
                    'stadium_id' => 1,
                ),
            653 =>
                array (
                    'equipo' => 'Crystal Palace (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AFNlsDzS-6sMoYuga.png',
                    'stadium_id' => 1,
                ),
            654 =>
                array (
                    'equipo' => 'Woking (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0G3s8yFG-AJfkxFpI.png',
                    'stadium_id' => 1,
                ),
            655 =>
                array (
                    'equipo' => 'Portsmouth (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rBGcCgeM-A72dXsHl.png',
                    'stadium_id' => 1,
                ),
            656 =>
                array (
                    'equipo' => 'Lebrijana (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rREv2odM-jgMGMTgG.png',
                    'stadium_id' => 2,
                ),
            657 =>
                array (
                    'equipo' => 'At. Sanluqueño (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rgmVqpEa-MBBnH6Pu.png',
                    'stadium_id' => 2,
                ),
            658 =>
                array (
                    'equipo' => 'Jamaica Sub-23',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jBN97Qil-AsRkChZD.png',
                    'stadium_id' => 2,
                ),
            659 =>
                array (
                    'equipo' => 'Honduras Sub-23',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WddBEMjl-jZBgjxbo.png',
                    'stadium_id' => 2,
                ),
            660 =>
                array (
                    'equipo' => 'Uruguay Sub-23',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4xaQ6fjl-WhgqdZDk.png',
                    'stadium_id' => 1,
                ),
            661 =>
                array (
                    'equipo' => 'Perú Sub-23',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I9ay7DxS-dYX0y8xh.png',
                    'stadium_id' => 1,
                ),
            662 =>
                array (
                    'equipo' => 'Eskilsminne F (Swe)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8C2fP5eM-bZ7IdHW8.png',
                    'stadium_id' => 1,
                ),
            663 =>
                array (
                    'equipo' => 'Borgeby F (Swe)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 1,
                ),
            664 =>
                array (
                    'equipo' => 'España Sub-20',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Kb3iKZg5-f7ltFEOn.png',
                    'stadium_id' => 2,
                ),
            665 =>
                array (
                    'equipo' => 'Rusia Sub-20',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rst9a5Ea-ULpa3nSF.png',
                    'stadium_id' => 2,
                ),
            666 =>
                array (
                    'equipo' => 'Sparta Praga Sub-19',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QZwBjVjl-YREQn8Wt.png',
                    'stadium_id' => 2,
                ),
            667 =>
                array (
                    'equipo' => 'Palmeiras Sub-19',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GnjNn6h5-biwrrKdJ.png',
                    'stadium_id' => 2,
                ),
            668 =>
                array (
                    'equipo' => 'Lausanne Ouchy',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lrAVyhCr-E94AKTGk.png',
                    'stadium_id' => 1,
                ),
            669 =>
                array (
                    'equipo' => 'Winterthur',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GtRWIrf5-2JU9Py1C.png',
                    'stadium_id' => 1,
                ),
            670 =>
                array (
                    'equipo' => 'Desna',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Cps4tjWg-bXp6iC9Q.png',
                    'stadium_id' => 2,
                ),
            671 =>
                array (
                    'equipo' => 'Lviv',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tKVoASh5-4dtbXLss.png',
                    'stadium_id' => 2,
                ),
            672 =>
                array (
                    'equipo' => 'Kolos Kovalyovka',
                    'img' => 'https://www.mismarcadores.com//res/image/data/06TUGqEa-UVs8GHIK.png',
                    'stadium_id' => 2,
                ),
            673 =>
                array (
                    'equipo' => 'Mariupol',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jyT7bRCr-8nr8nP2m.png',
                    'stadium_id' => 2,
                ),
            674 =>
                array (
                    'equipo' => 'Kokand 1912',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tK7NcIil-KpfV9Xdr.png',
                    'stadium_id' => 2,
                ),
            675 =>
                array (
                    'equipo' => 'Sogdiana',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zVa4YreM-p2A4YqJC.png',
                    'stadium_id' => 2,
                ),
            676 =>
                array (
                    'equipo' => 'Lok. Tashkent',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tArpsGYg-xUpWbUD3.png',
                    'stadium_id' => 2,
                ),
            677 =>
                array (
                    'equipo' => 'Din. Samarkand',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UmLj7mCr-Yi6ijiur.png',
                    'stadium_id' => 2,
                ),
            678 =>
                array (
                    'equipo' => 'Qizilqum',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WQtRWEil-4K8ozeI5.png',
                    'stadium_id' => 2,
                ),
            679 =>
                array (
                    'equipo' => 'Pakhtakor',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vwDodIWg-nwBwxHmg.png',
                    'stadium_id' => 2,
                ),
            680 =>
                array (
                    'equipo' => 'Mauricio',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hIn1yyDr-UaJCzV6T.png',
                    'stadium_id' => 2,
                ),
            681 =>
                array (
                    'equipo' => 'Zimbabue',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zeeP1ze5-QwFad6pm.png',
                    'stadium_id' => 2,
                ),
            682 =>
                array (
                    'equipo' => 'Bielefeld',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Umf4mzvS-8x5DHROH.png',
                    'stadium_id' => 2,
                ),
            683 =>
                array (
                    'equipo' => 'St. Pauli',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QZX02wCr-4W0TfhRH.png',
                    'stadium_id' => 2,
                ),
            684 =>
                array (
                    'equipo' => 'Offenbach',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OEEJi9Cr-8v02s5kA.png',
                    'stadium_id' => 1,
                ),
            685 =>
                array (
                    'equipo' => 'Ulm',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YLrf0ZwS-rw4jfLvp.png',
                    'stadium_id' => 1,
                ),
            686 =>
                array (
                    'equipo' => 'Boca Jrs.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/h4UwH8Cr-48MRYCtA.png',
                    'stadium_id' => 2,
                ),
            687 =>
                array (
                    'equipo' => 'Huracán',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vBUdlvf5-29sxNiEq.png',
                    'stadium_id' => 2,
                ),
            688 =>
                array (
                    'equipo' => 'Oriente Petrolero',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KpDU2SzS-OKJf1gMU.png',
                    'stadium_id' => 2,
                ),
            689 =>
                array (
                    'equipo' => 'Fortaleza',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ObufU2YA-6s0SpTJp.png',
                    'stadium_id' => 2,
                ),
            690 =>
                array (
                    'equipo' => 'Corinthians',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lY91WW9r-AkqTkErP.png',
                    'stadium_id' => 2,
                ),
            691 =>
                array (
                    'equipo' => 'Goiás',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xd3edbeM-WxRSQZME.png',
                    'stadium_id' => 1,
                ),
            692 =>
                array (
                    'equipo' => 'Atlético-MG',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WbSJHDh5-lWKKdTEe.png',
                    'stadium_id' => 1,
                ),
            693 =>
                array (
                    'equipo' => 'Levski',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MemHeQzS-OIKez4iR.png',
                    'stadium_id' => 2,
                ),
            694 =>
                array (
                    'equipo' => 'Botev Plovdiv',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ldRCVczB-QJxahtWJ.png',
                    'stadium_id' => 2,
                ),
            695 =>
                array (
                    'equipo' => 'Ludogorets',
                    'img' => 'https://www.mismarcadores.com//res/image/data/b71m7bEa-dMXZpGKS.png',
                    'stadium_id' => 2,
                ),
            696 =>
                array (
                    'equipo' => 'Bistritsa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YB5LMQdM-CrqZpKXd.png',
                    'stadium_id' => 2,
                ),
            697 =>
                array (
                    'equipo' => 'U. La Calera',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AJdiRXkl-A195eXeL.png',
                    'stadium_id' => 1,
                ),
            698 =>
                array (
                    'equipo' => 'Curicó Unido',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2Z9EJGWg-r9b4ROCj.png',
                    'stadium_id' => 1,
                ),
            699 =>
                array (
                    'equipo' => 'Jaguares de Córdoba',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SxX288Ar-00Lejg5E.png',
                    'stadium_id' => 1,
                ),
            700 =>
                array (
                    'equipo' => 'Atl. Nacional',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EVh8vJcM-tt49Qllj.png',
                    'stadium_id' => 1,
                ),
            701 =>
                array (
                    'equipo' => 'Ind. Santa Fe',
                    'img' => 'https://www.mismarcadores.com//res/image/data/foIzTxZg-APmauJpq.png',
                    'stadium_id' => 1,
                ),
            702 =>
                array (
                    'equipo' => 'Alianza Petrolera',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fHGh4Oil-GMSWYIqf.png',
                    'stadium_id' => 1,
                ),
            703 =>
                array (
                    'equipo' => 'Ind. Medellín',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lMyrsdhl-Iq8Nj2EO.png',
                    'stadium_id' => 1,
                ),
            704 =>
                array (
                    'equipo' => 'Junior',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Kz2UFMh5-WztODOh7.png',
                    'stadium_id' => 1,
                ),
            705 =>
                array (
                    'equipo' => 'Guadalupe',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YH64pvzB-AuIe1h23.png',
                    'stadium_id' => 2,
                ),
            706 =>
                array (
                    'equipo' => 'Pérez Zeledón',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Q5NPpfyB-Gntgbe8j.png',
                    'stadium_id' => 2,
                ),
            707 =>
                array (
                    'equipo' => 'Aalborg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EwBYzNCr-lpOPaq9l.png',
                    'stadium_id' => 2,
                ),
            708 =>
                array (
                    'equipo' => 'Silkeborg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rDbrZGYg-W2lVne2T.png',
                    'stadium_id' => 2,
                ),
            709 =>
                array (
                    'equipo' => 'Macará',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CEpkiHCa-UXOA197Q.png',
                    'stadium_id' => 1,
                ),
            710 =>
                array (
                    'equipo' => 'Olmedo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/65EHnTf5-pYY1rIxl.png',
                    'stadium_id' => 1,
                ),
            711 =>
                array (
                    'equipo' => 'Atl. Porteño',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MsvN2mWg-2alussKF.png',
                    'stadium_id' => 1,
                ),
            712 =>
                array (
                    'equipo' => 'Orense',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xxeJM5eM-ShvueU5r.png',
                    'stadium_id' => 1,
                ),
            713 =>
                array (
                    'equipo' => 'Loudoun',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hISNz7YA-QDmuoyvs.png',
                    'stadium_id' => 1,
                ),
            714 =>
                array (
                    'equipo' => 'Louisville City',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jTLaQaCa-G6UmALCs.png',
                    'stadium_id' => 1,
                ),
            715 =>
                array (
                    'equipo' => 'Portland 2',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fViKIzwS-ELYntsb1.png',
                    'stadium_id' => 1,
                ),
            716 =>
                array (
                    'equipo' => 'LA Galaxy 2',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dfExAvjl-K8CeCo3S.png',
                    'stadium_id' => 1,
                ),
            717 =>
                array (
                    'equipo' => 'Lorient',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lxyXOLFG-6knD5Jyp.png',
                    'stadium_id' => 1,
                ),
            718 =>
                array (
                    'equipo' => 'Paris FC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AmyHz4Xg-0OaQr5Q8.png',
                    'stadium_id' => 1,
                ),
            719 =>
                array (
                    'equipo' => 'Motagua',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vHU6f3il-CYPz6H7a.png',
                    'stadium_id' => 1,
                ),
            720 =>
                array (
                    'equipo' => 'Platense',
                    'img' => 'https://www.mismarcadores.com//res/image/data/A7aDwoWg-vg1IYs9d.png',
                    'stadium_id' => 1,
                ),
            721 =>
                array (
                    'equipo' => 'PSM Makassar',
                    'img' => 'https://www.mismarcadores.com//res/image/data/825RIjg5-vaKspLzr.png',
                    'stadium_id' => 2,
                ),
            722 =>
                array (
                    'equipo' => 'PSIS Semarang',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UXcAWwil-G6Y0N3cc.png',
                    'stadium_id' => 2,
                ),
            723 =>
                array (
                    'equipo' => 'Persela',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QDAfGLYA-Qm6T84r4.png',
                    'stadium_id' => 2,
                ),
            724 =>
                array (
                    'equipo' => 'Pusamania Borneo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xlWbT7f5-bD03z1x8.png',
                    'stadium_id' => 2,
                ),
            725 =>
                array (
                    'equipo' => 'Derry City',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CO3dmGyS-4rJIAvgH.png',
                    'stadium_id' => 2,
                ),
            726 =>
                array (
                    'equipo' => 'Waterford',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0WRfm0hl-MHtA3Bzo.png',
                    'stadium_id' => 2,
                ),
            727 =>
                array (
                    'equipo' => 'Kopavogur',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MeDUpKBr-x6vfzz3H.png',
                    'stadium_id' => 2,
                ),
            728 =>
                array (
                    'equipo' => 'Stjarnan',
                    'img' => 'https://www.mismarcadores.com//res/image/data/p2q9hEXg-hf6YdOtf.png',
                    'stadium_id' => 2,
                ),
            729 =>
                array (
                    'equipo' => 'Vikingur Reykjavik',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SzqHvzil-zeVnAOaf.png',
                    'stadium_id' => 2,
                ),
            730 =>
                array (
                    'equipo' => 'Breidablik',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4rkitkFG-2cDK81wm.png',
                    'stadium_id' => 2,
                ),
            731 =>
                array (
                    'equipo' => 'Atlético San Luis',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ttaXDaWg-tIcF9TJ0.png',
                    'stadium_id' => 1,
                ),
            732 =>
                array (
                    'equipo' => 'Monterrey',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nL0MOrAr-U122TbeH.png',
                    'stadium_id' => 1,
                ),
            733 =>
                array (
                    'equipo' => 'Juárez',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EyCbOdXg-tWfpTXPo.png',
                    'stadium_id' => 1,
                ),
            734 =>
                array (
                    'equipo' => 'Guadalajara',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ro844CyS-GQK0VqvP.png',
                    'stadium_id' => 2,
                ),
            735 =>
                array (
                    'equipo' => 'U.A.N.L.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Io5EvnDr-rFeOJfsp.png',
                    'stadium_id' => 2,
                ),
            736 =>
                array (
                    'equipo' => 'San Sebastián de los Reyes (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QybRn7EG-WvEP87xf.png',
                    'stadium_id' => 1,
                ),
            737 =>
                array (
                    'equipo' => 'At. Baleares (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vTwfOyxS-Wt1S1gQ2.png',
                    'stadium_id' => 1,
                ),
            738 =>
                array (
                    'equipo' => 'Ajax (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rmxNnFxS-0603YTSp.png',
                    'stadium_id' => 1,
                ),
            739 =>
                array (
                    'equipo' => 'Sivasspor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4IeFVHFG-2yGlZHsl.png',
                    'stadium_id' => 1,
                ),
            740 =>
                array (
                    'equipo' => 'Genclerbirligi (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bLnuvaAr-fZA4iVLb.png',
                    'stadium_id' => 2,
                ),
            741 =>
                array (
                    'equipo' => 'SumQayit (Aze)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pYqPzkWg-vulQ0fWe.png',
                    'stadium_id' => 2,
                ),
            742 =>
                array (
                    'equipo' => 'H. Ironi Rishon (Isr)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QVpI8OCr-2eEhAFtB.png',
                    'stadium_id' => 1,
                ),
            743 =>
                array (
                    'equipo' => 'H. Petah Tikva (Isr)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tWCvYIhl-vsD3F6Xp.png',
                    'stadium_id' => 1,
                ),
            744 =>
                array (
                    'equipo' => 'Crotone (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vTzgfkZA-h0o4CO4J.png',
                    'stadium_id' => 1,
                ),
            745 =>
                array (
                    'equipo' => 'Castrovillari (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/K8TydNzB-GAvNJUMi.png',
                    'stadium_id' => 1,
                ),
            746 =>
                array (
                    'equipo' => 'Ol. Nicosia (Cyp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OODoyXil-lMRKqDlH.png',
                    'stadium_id' => 1,
                ),
            747 =>
                array (
                    'equipo' => 'Drita (Kos)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KQqf4JdM-pQ6Br6X6.png',
                    'stadium_id' => 1,
                ),
            748 =>
                array (
                    'equipo' => 'Denizlispor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/d6Pf6EzB-nL3RaQYl.png',
                    'stadium_id' => 2,
                ),
            749 =>
                array (
                    'equipo' => 'Umraniyespor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hO1MkHBr-6Tda7lVe.png',
                    'stadium_id' => 2,
                ),
            750 =>
                array (
                    'equipo' => 'Besiktas (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YJhFX6il-Ug27OrDp.png',
                    'stadium_id' => 1,
                ),
            751 =>
                array (
                    'equipo' => 'Apollon Larissa (Gre)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YLf1KyEa-McQYxYcG.png',
                    'stadium_id' => 1,
                ),
            752 =>
                array (
                    'equipo' => 'Schalke (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/b1q14jZg-I1gtUEya.png',
                    'stadium_id' => 1,
                ),
            753 =>
                array (
                    'equipo' => 'Bolonia (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/j3Tyh1GG-bucnXust.png',
                    'stadium_id' => 1,
                ),
            754 =>
                array (
                    'equipo' => 'Sirens (Mlt)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OnaKehg5-A9kFZCBe.png',
                    'stadium_id' => 2,
                ),
            755 =>
                array (
                    'equipo' => 'Santa Lucia (Mlt)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xjkuzXDa-vcTelz0L.png',
                    'stadium_id' => 2,
                ),
            756 =>
                array (
                    'equipo' => 'Verona (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SKlYaQkl-dIT09itB.png',
                    'stadium_id' => 2,
                ),
            757 =>
                array (
                    'equipo' => 'Trabzonspor (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zFbppwhl-4hjJ5YiF.png',
                    'stadium_id' => 2,
                ),
            758 =>
                array (
                    'equipo' => 'FC Basara Mainz (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/plV8PKdM-GInuYGOf.png',
                    'stadium_id' => 1,
                ),
            759 =>
                array (
                    'equipo' => 'Schott Mainz (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0ERCJ8HG-zZo5b8hm.png',
                    'stadium_id' => 1,
                ),
            760 =>
                array (
                    'equipo' => 'Granada (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IB7INdf5-KzL8MCCa.png',
                    'stadium_id' => 1,
                ),
            761 =>
                array (
                    'equipo' => 'Almería (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/INYkS6YA-CG8Uy66t.png',
                    'stadium_id' => 1,
                ),
            762 =>
                array (
                    'equipo' => 'Al Khor (Qat)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fDOiZJXg-82C8SQy1.png',
                    'stadium_id' => 2,
                ),
            763 =>
                array (
                    'equipo' => 'Vasterhaninge IF (Swe)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 2,
                ),
            764 =>
                array (
                    'equipo' => 'Sodertalje FK (Swe)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GSYLYjil-SriHXjEC.png',
                    'stadium_id' => 2,
                ),
            765 =>
                array (
                    'equipo' => 'Breda (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WvyOBpCr-C0SKTTat.png',
                    'stadium_id' => 2,
                ),
            766 =>
                array (
                    'equipo' => 'Panathinaikos (Gre)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hfNwlAfM-ttfcacX0.png',
                    'stadium_id' => 2,
                ),
            767 =>
                array (
                    'equipo' => 'Deeping (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ALJoqsYg-bkxSL592.png',
                    'stadium_id' => 1,
                ),
            768 =>
                array (
                    'equipo' => 'Peterborough (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WIdkx9Br-zmDL10v2.png',
                    'stadium_id' => 1,
                ),
            769 =>
                array (
                    'equipo' => 'Dover (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/r1IUG3e5-ver2p0xO.png',
                    'stadium_id' => 1,
                ),
            770 =>
                array (
                    'equipo' => 'Millwall Sub-23 (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GbTywlhl-4vkai3Hl.png',
                    'stadium_id' => 1,
                ),
            771 =>
                array (
                    'equipo' => 'Lincoln (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6JLzdiZA-ddOTTXuo.png',
                    'stadium_id' => 1,
                ),
            772 =>
                array (
                    'equipo' => 'Nottingham Forest (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zomHgjGG-OrtfNNWj.png',
                    'stadium_id' => 1,
                ),
            773 =>
                array (
                    'equipo' => 'Nuneaton (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0doMkxyS-zDQ4iikT.png',
                    'stadium_id' => 1,
                ),
            774 =>
                array (
                    'equipo' => 'Burton (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dGOTeiBr-Ustnf0J9.png',
                    'stadium_id' => 1,
                ),
            775 =>
                array (
                    'equipo' => 'Welling (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AceCguFa-K0SHNFVO.png',
                    'stadium_id' => 2,
                ),
            776 =>
                array (
                    'equipo' => 'Gillingham FC (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YL1sire5-nPwfhvlM.png',
                    'stadium_id' => 2,
                ),
            777 =>
                array (
                    'equipo' => 'Beaconsfield Town (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AH6d4WEG-0Ix7wpkt.png',
                    'stadium_id' => 1,
                ),
            778 =>
                array (
                    'equipo' => 'Staines (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Yo7suocM-h87WTJji.png',
                    'stadium_id' => 1,
                ),
            779 =>
                array (
                    'equipo' => 'Carshalton (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/neYJjZEG-8WF0F14p.png',
                    'stadium_id' => 1,
                ),
            780 =>
                array (
                    'equipo' => 'Dulwich Hamlet (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lACvzOf5-CQoUDm57.png',
                    'stadium_id' => 1,
                ),
            781 =>
                array (
                    'equipo' => 'Panamá Sub-23',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0xSKdMcM-EV992yyM.png',
                    'stadium_id' => 1,
                ),
            782 =>
                array (
                    'equipo' => 'México Sub-23',
                    'img' => 'https://www.mismarcadores.com//res/image/data/44j9Orgl-Ewjq572B.png',
                    'stadium_id' => 1,
                ),
            783 =>
                array (
                    'equipo' => 'Ecuador Sub-23',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0AYVmJDa-KIZng9SK.png',
                    'stadium_id' => 1,
                ),
            784 =>
                array (
                    'equipo' => 'Argentina Sub-23',
                    'img' => 'https://www.mismarcadores.com//res/image/data/x21HfueM-4W49tRQn.png',
                    'stadium_id' => 1,
                ),
            785 =>
                array (
                    'equipo' => 'Panamá F',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fmckU3jl-SG4sVAa2.png',
                    'stadium_id' => 2,
                ),
            786 =>
                array (
                    'equipo' => 'Costa Rica F',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nTS6n7Da-0z6xbBZ4.png',
                    'stadium_id' => 2,
                ),
            787 =>
                array (
                    'equipo' => 'Argentina F',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ruNSBRhl-4dzSXtc5.png',
                    'stadium_id' => 1,
                ),
            788 =>
                array (
                    'equipo' => 'Perú F',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0dbd4UWg-Kna49KRo.png',
                    'stadium_id' => 1,
                ),
            789 =>
                array (
                    'equipo' => 'Bahréin Sub-20',
                    'img' => 'https://www.mismarcadores.com//res/image/data/v3rtZge5-l2H8YgRA.png',
                    'stadium_id' => 2,
                ),
            790 =>
                array (
                    'equipo' => 'Besiktas Sub-19',
                    'img' => 'https://www.mismarcadores.com//res/image/data/f73lQ7zB-nLLbrAgO.png',
                    'stadium_id' => 1,
                ),
            791 =>
                array (
                    'equipo' => 'Burnley Sub-19',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MkXVW8ZA-rTMNbdMa.png',
                    'stadium_id' => 1,
                ),
            792 =>
                array (
                    'equipo' => 'Dinamo Zagreb Sub-19',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WEooEhZA-raVjDt6C.png',
                    'stadium_id' => 1,
                ),
            793 =>
                array (
                    'equipo' => 'Slavia Praga Sub-19',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ig9w1mFa-zP0udUpS.png',
                    'stadium_id' => 1,
                ),
            794 =>
                array (
                    'equipo' => 'Shakhtar Sub-19',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nL2mUDBr-EyJnwJMC.png',
                    'stadium_id' => 2,
                ),
            795 =>
                array (
                    'equipo' => 'Altinordu Sub-19',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8Kbo7DBr-pQEucvp8.png',
                    'stadium_id' => 2,
                ),
            796 =>
                array (
                    'equipo' => 'Sabanas',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KYsgZkzB-t2mrDdFl.png',
                    'stadium_id' => 1,
                ),
            797 =>
                array (
                    'equipo' => 'Chinandega',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Oj5290Zg-WfnuetQk.png',
                    'stadium_id' => 1,
                ),
            798 =>
                array (
                    'equipo' => 'Managua FC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IZgQzChl-je19022S.png',
                    'stadium_id' => 1,
                ),
            799 =>
                array (
                    'equipo' => 'Juventus Managua',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CA8j5fAr-zywwXCDP.png',
                    'stadium_id' => 1,
                ),
            800 =>
                array (
                    'equipo' => 'San Lorenzo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OEgPhXYA-0vMIAud9.png',
                    'stadium_id' => 1,
                ),
            801 =>
                array (
                    'equipo' => 'Cerro Porteño',
                    'img' => 'https://www.mismarcadores.com//res/image/data/S2rav6HG-hKH4AQwA.png',
                    'stadium_id' => 1,
                ),
            802 =>
                array (
                    'equipo' => 'Sol de América',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nNN8rze5-S0CdwEdl.png',
                    'stadium_id' => 2,
                ),
            803 =>
                array (
                    'equipo' => 'Libertad',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I58gFDxS-4Kv64Pmh.png',
                    'stadium_id' => 2,
                ),
            804 =>
                array (
                    'equipo' => 'Pogon Szczecin',
                    'img' => 'https://www.mismarcadores.com//res/image/data/d6JEh8EG-tnVf7Ikj.png',
                    'stadium_id' => 1,
                ),
            805 =>
                array (
                    'equipo' => 'Arka',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tdEy0jBr-UNq1ErLD.png',
                    'stadium_id' => 1,
                ),
            806 =>
                array (
                    'equipo' => 'Ceske Budejovice',
                    'img' => 'https://www.mismarcadores.com//res/image/data/d662SkzB-8UIIJC0P.png',
                    'stadium_id' => 2,
                ),
            807 =>
                array (
                    'equipo' => 'Sparta Praga',
                    'img' => 'https://www.mismarcadores.com//res/image/data/f3ufAmXg-AcVzeTNO.png',
                    'stadium_id' => 2,
                ),
            808 =>
                array (
                    'equipo' => 'Hradec Kralove',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pMJtKyzB-YVdbVGED.png',
                    'stadium_id' => 1,
                ),
            809 =>
                array (
                    'equipo' => 'Dukla Praga',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hYqc3sBr-GlajXxp1.png',
                    'stadium_id' => 1,
                ),
            810 =>
                array (
                    'equipo' => 'FCSB',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pY1jOEZA-08eZZwuR.png',
                    'stadium_id' => 1,
                ),
            811 =>
                array (
                    'equipo' => 'Botosani',
                    'img' => 'https://www.mismarcadores.com//res/image/data/S2pBtCEa-IT3PvAhi.png',
                    'stadium_id' => 1,
                ),
            812 =>
                array (
                    'equipo' => 'Rubin Kazan',
                    'img' => 'https://www.mismarcadores.com//res/image/data/A7QaOL9r-O0RAJvtt.png',
                    'stadium_id' => 2,
                ),
            813 =>
                array (
                    'equipo' => 'Akhmat Grozny',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CAp5kGzB-Uc4jaTBc.png',
                    'stadium_id' => 2,
                ),
            814 =>
                array (
                    'equipo' => 'Armavir',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ShyEhucM-IHqsbiCa.png',
                    'stadium_id' => 2,
                ),
            815 =>
                array (
                    'equipo' => 'Spartak Moscú 2',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jeQ6h2ZA-KG0trTuq.png',
                    'stadium_id' => 2,
                ),
            816 =>
                array (
                    'equipo' => 'Elfsborg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EuHLJxzB-EXjj6gab.png',
                    'stadium_id' => 2,
                ),
            817 =>
                array (
                    'equipo' => 'Kalmar',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vqpzeof5-EVokFOHG.png',
                    'stadium_id' => 2,
                ),
            818 =>
                array (
                    'equipo' => 'Helsingborg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/W6XofgFa-tULA3Up8.png',
                    'stadium_id' => 1,
                ),
            819 =>
                array (
                    'equipo' => 'Örebro',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MLCkR9jl-YLLCsVwe.png',
                    'stadium_id' => 1,
                ),
            820 =>
                array (
                    'equipo' => 'Madagascar',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8jQH1hBr-SnufIVHC.png',
                    'stadium_id' => 2,
                ),
            821 =>
                array (
                    'equipo' => 'Mozambique',
                    'img' => 'https://www.mismarcadores.com//res/image/data/K4WcpCh5-ARdVQ24F.png',
                    'stadium_id' => 2,
                ),
            822 =>
                array (
                    'equipo' => 'Lesoto',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xYO30YeM-bDhQylMn.png',
                    'stadium_id' => 2,
                ),
            823 =>
                array (
                    'equipo' => 'Sudáfrica',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Kfq8aDCr-KnFE5hY6.png',
                    'stadium_id' => 2,
                ),
            824 =>
                array (
                    'equipo' => 'Eswatini',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AwLk22hl-nNjUhCMc.png',
                    'stadium_id' => 1,
                ),
            825 =>
                array (
                    'equipo' => 'Angola',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zw0aswEa-hbKCHwA4.png',
                    'stadium_id' => 1,
                ),
            826 =>
                array (
                    'equipo' => 'Tanzania',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8xZwopzB-j9K8yBiN.png',
                    'stadium_id' => 1,
                ),
            827 =>
                array (
                    'equipo' => 'Kenia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bJ7piXCa-44lxijiA.png',
                    'stadium_id' => 1,
                ),
            828 =>
                array (
                    'equipo' => 'Benín',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jwCGq0dM-8WiQgh7i.png',
                    'stadium_id' => 2,
                ),
            829 =>
                array (
                    'equipo' => 'Togo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/U3kFs1Ea-6g0b8ZWj.png',
                    'stadium_id' => 2,
                ),
            830 =>
                array (
                    'equipo' => 'Chad',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OYt9qICa-rHnpWxPc.png',
                    'stadium_id' => 1,
                ),
            831 =>
                array (
                    'equipo' => 'Guinea Ecuatorial',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GU4VIzhl-GfjYZRja.png',
                    'stadium_id' => 1,
                ),
            832 =>
                array (
                    'equipo' => 'República Centroafricana',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KUL6mqxS-jFPMkUKf.png',
                    'stadium_id' => 1,
                ),
            833 =>
                array (
                    'equipo' => 'Santo Tomé y Príncipe',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YaravAFG-6DI5lR5h.png',
                    'stadium_id' => 1,
                ),
            834 =>
                array (
                    'equipo' => 'Liberia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YgV6HUCr-4UD3eQag.png',
                    'stadium_id' => 2,
                ),
            835 =>
                array (
                    'equipo' => 'Senegal',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fPLyMNGG-658QCfNq.png',
                    'stadium_id' => 2,
                ),
            836 =>
                array (
                    'equipo' => 'Hamburgo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vy7iqCwS-Umm0PjjU.png',
                    'stadium_id' => 2,
                ),
            837 =>
                array (
                    'equipo' => 'Darmstadt',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lzTyrOAr-G2G8LNSj.png',
                    'stadium_id' => 2,
                ),
            838 =>
                array (
                    'equipo' => 'Fürth',
                    'img' => 'https://www.mismarcadores.com//res/image/data/b17q7fAr-4dnK4mIO.png',
                    'stadium_id' => 2,
                ),
            839 =>
                array (
                    'equipo' => 'Aue',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xxzUuixS-8KLDrEjh.png',
                    'stadium_id' => 2,
                ),
            840 =>
                array (
                    'equipo' => 'Regensburg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bHYS4sCa-nVb6tP4G.png',
                    'stadium_id' => 1,
                ),
            841 =>
                array (
                    'equipo' => 'Bochum',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nyouWtil-Ak3zFX7R.png',
                    'stadium_id' => 1,
                ),
            842 =>
                array (
                    'equipo' => 'Wehen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zNBt0YeM-4CdEv3ZS.png',
                    'stadium_id' => 2,
                ),
            843 =>
                array (
                    'equipo' => 'Karlsruher',
                    'img' => 'https://www.mismarcadores.com//res/image/data/69eisaGG-nBKHsY5b.png',
                    'stadium_id' => 2,
                ),
            844 =>
                array (
                    'equipo' => 'Babelsberg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QiI47Rkl-0nfyvWrI.png',
                    'stadium_id' => 1,
                ),
            845 =>
                array (
                    'equipo' => 'Lotte',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ttO0o8eM-WGVpEJL2.png',
                    'stadium_id' => 2,
                ),
            846 =>
                array (
                    'equipo' => 'TuS Haltern',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lE0sckyS-v9Vyr1uE.png',
                    'stadium_id' => 2,
                ),
            847 =>
                array (
                    'equipo' => 'Argentinos Jrs.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xplqslf5-IHcrNFsb.png',
                    'stadium_id' => 1,
                ),
            848 =>
                array (
                    'equipo' => 'River Plate',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ic4xH0Yg-48MRYCtA.png',
                    'stadium_id' => 1,
                ),
            849 =>
                array (
                    'equipo' => 'Estudiantes L.P.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I1h85xcM-IDoWSHJ3.png',
                    'stadium_id' => 2,
                ),
            850 =>
                array (
                    'equipo' => 'Aldosivi',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Slvb0Tkl-84NZpdPn.png',
                    'stadium_id' => 2,
                ),
            851 =>
                array (
                    'equipo' => 'Newell\'s',
                    'img' => 'https://www.mismarcadores.com//res/image/data/StG7Krf5-lvTZw0Jb.png',
                    'stadium_id' => 2,
                ),
            852 =>
                array (
                    'equipo' => 'Central Córdoba',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Awt3olyS-rD2ofJBe.png',
                    'stadium_id' => 2,
                ),
            853 =>
                array (
                    'equipo' => 'Talleres',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fH12n5jl-vavMNQR5.png',
                    'stadium_id' => 2,
                ),
            854 =>
                array (
                    'equipo' => 'Vélez',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8A5teNEG-raLVXWeG.png',
                    'stadium_id' => 2,
                ),
            855 =>
                array (
                    'equipo' => 'Defensa y Justicia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WbcBGVf5-CW4hp9jk.png',
                    'stadium_id' => 2,
                ),
            856 =>
                array (
                    'equipo' => 'Independiente',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MqbBGgxS-IHcrNFsb.png',
                    'stadium_id' => 2,
                ),
            857 =>
                array (
                    'equipo' => 'LASK Linz',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0jGJoJyS-fPPbcG9N.png',
                    'stadium_id' => 2,
                ),
            858 =>
                array (
                    'equipo' => 'Altach',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KhP5PswS-Obdk1J2l.png',
                    'stadium_id' => 2,
                ),
            859 =>
                array (
                    'equipo' => 'Mattersburg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4EUQffYA-OKBY7UJ3.png',
                    'stadium_id' => 1,
                ),
            860 =>
                array (
                    'equipo' => 'Hartberg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0CPiZWwS-bPUdlxnJ.png',
                    'stadium_id' => 1,
                ),
            861 =>
                array (
                    'equipo' => 'Sturm Graz',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zmbZjCzB-0I2T09Cj.png',
                    'stadium_id' => 1,
                ),
            862 =>
                array (
                    'equipo' => 'St. Polten',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hWr3OVyS-6kUE7zrB.png',
                    'stadium_id' => 1,
                ),
            863 =>
                array (
                    'equipo' => 'Floridsdorfer AC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AVuO6rh5-xt11L8RI.png',
                    'stadium_id' => 1,
                ),
            864 =>
                array (
                    'equipo' => 'Grazer',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ofc3ZzXg-nHyFaeyL.png',
                    'stadium_id' => 1,
                ),
            865 =>
                array (
                    'equipo' => 'Anderlecht',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dnno08Yg-0Uhw7ZGJ.png',
                    'stadium_id' => 2,
                ),
            866 =>
                array (
                    'equipo' => 'Oostende',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SEc4Zvf5-Q5ugGage.png',
                    'stadium_id' => 2,
                ),
            867 =>
                array (
                    'equipo' => 'Charleroi',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MVRqAyFa-4dvcFJ81.png',
                    'stadium_id' => 2,
                ),
            868 =>
                array (
                    'equipo' => 'Gent',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hbwxyyjl-tUw91Dvs.png',
                    'stadium_id' => 2,
                ),
            869 =>
                array (
                    'equipo' => 'Eupen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Wtl32vGG-2DZOsb2O.png',
                    'stadium_id' => 1,
                ),
            870 =>
                array (
                    'equipo' => 'Antwerp',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QmlqvQ9r-4jm5MuAF.png',
                    'stadium_id' => 1,
                ),
            871 =>
                array (
                    'equipo' => 'Baal',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Sfzig2Xg-n9Pzd0Eb.png',
                    'stadium_id' => 1,
                ),
            872 =>
                array (
                    'equipo' => 'Diest',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Gbyapahl-KhU0FCc2.png',
                    'stadium_id' => 1,
                ),
            873 =>
                array (
                    'equipo' => 'Eendracht Zele',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xrByUtzB-lGj7Qx63.png',
                    'stadium_id' => 1,
                ),
            874 =>
                array (
                    'equipo' => 'Ninove',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8MouV2Da-tQ3nA3US.png',
                    'stadium_id' => 1,
                ),
            875 =>
                array (
                    'equipo' => 'Adegem',
                    'img' => 'https://www.mismarcadores.com//res/image/data/juqWNjjl-Mmo5DOfD.png',
                    'stadium_id' => 1,
                ),
            876 =>
                array (
                    'equipo' => 'Excelsior Mariakerke',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lpxADixS-C6qKLsmA.png',
                    'stadium_id' => 1,
                ),
            877 =>
                array (
                    'equipo' => 'Aische',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ALMmpJdM-Mgj7Bqs4.png',
                    'stadium_id' => 1,
                ),
            878 =>
                array (
                    'equipo' => 'Jehaytois',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 1,
                ),
            879 =>
                array (
                    'equipo' => 'Anderlecht-Milan',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WUKc6DyB-Gzvjkcfp.png',
                    'stadium_id' => 2,
                ),
            880 =>
                array (
                    'equipo' => 'Berg-Op',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vixSPhXg-p286Fy0q.png',
                    'stadium_id' => 2,
                ),
            881 =>
                array (
                    'equipo' => 'Anderlues',
                    'img' => 'https://www.mismarcadores.com//res/image/data/d4LCRuZg-YPiHxRme.png',
                    'stadium_id' => 1,
                ),
            882 =>
                array (
                    'equipo' => 'Ixelles',
                    'img' => 'https://www.mismarcadores.com//res/image/data/McOYd0xS-dIecXOjQ.png',
                    'stadium_id' => 1,
                ),
            883 =>
                array (
                    'equipo' => 'Ardennen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Iyn5klAr-x2j54mfQ.png',
                    'stadium_id' => 1,
                ),
            884 =>
                array (
                    'equipo' => 'Jemappes',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jcvn8Jh5-8ONuNsD0.png',
                    'stadium_id' => 1,
                ),
            885 =>
                array (
                    'equipo' => 'Avanti',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WnbX6beM-Cp6oEcNi.png',
                    'stadium_id' => 1,
                ),
            886 =>
                array (
                    'equipo' => 'Hoboken',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KKteqhYA-lSliUBjC.png',
                    'stadium_id' => 1,
                ),
            887 =>
                array (
                    'equipo' => 'Aywaille',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KQzHolil-rqk1NIth.png',
                    'stadium_id' => 1,
                ),
            888 =>
                array (
                    'equipo' => 'Muno',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Wp1jKCYg-YZAc9YT3.png',
                    'stadium_id' => 1,
                ),
            889 =>
                array (
                    'equipo' => 'Bambrugge',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6DuK4rGG-bL87XcMg.png',
                    'stadium_id' => 2,
                ),
            890 =>
                array (
                    'equipo' => 'Dilbeek',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zco4ZAh5-pUMKoWCd.png',
                    'stadium_id' => 2,
                ),
            891 =>
                array (
                    'equipo' => 'Beloeil',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xpnwuwHG-OblOOOpP.png',
                    'stadium_id' => 2,
                ),
            892 =>
                array (
                    'equipo' => 'Ostiches',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bFAeiyZg-rspbDdJf.png',
                    'stadium_id' => 2,
                ),
            893 =>
                array (
                    'equipo' => 'Bercheux',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6yuCZug5-4zygmVPk.png',
                    'stadium_id' => 1,
                ),
            894 =>
                array (
                    'equipo' => 'Rocherath',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ac9MR0Ca-ADmfuSm1.png',
                    'stadium_id' => 1,
                ),
            895 =>
                array (
                    'equipo' => 'Betekom',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jcJlsPh5-C0tMmGRp.png',
                    'stadium_id' => 1,
                ),
            896 =>
                array (
                    'equipo' => 'Geetbets',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rVufC6fM-zLQdTRgD.png',
                    'stadium_id' => 1,
                ),
            897 =>
                array (
                    'equipo' => 'Boezinge',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OGUIlLxS-GvMsAHLM.png',
                    'stadium_id' => 2,
                ),
            898 =>
                array (
                    'equipo' => 'Nieuwkerke',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8UXka8eM-MaN8OngQ.png',
                    'stadium_id' => 2,
                ),
            899 =>
                array (
                    'equipo' => 'Bokrijk Sport',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fmIRo7yB-bT6OYTwo.png',
                    'stadium_id' => 2,
                ),
            900 =>
                array (
                    'equipo' => 'Eendracht Stevoort',
                    'img' => 'https://www.mismarcadores.com//res/image/data/z9dzhkZA-lSr3jai8.png',
                    'stadium_id' => 2,
                ),
            901 =>
                array (
                    'equipo' => 'Bornem',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hlMICBDa-p4iAW1y4.png',
                    'stadium_id' => 1,
                ),
            902 =>
                array (
                    'equipo' => 'Wintam Eikevliet',
                    'img' => 'https://www.mismarcadores.com//res/image/data/byqFUVXg-ABM3zcAo.png',
                    'stadium_id' => 1,
                ),
            903 =>
                array (
                    'equipo' => 'Bosquetia Frameries',
                    'img' => 'https://www.mismarcadores.com//res/image/data/C2DZarWg-COviQTxl.png',
                    'stadium_id' => 1,
                ),
            904 =>
                array (
                    'equipo' => 'Stade Brainois',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CnHNIDxS-QF472zrM.png',
                    'stadium_id' => 1,
                ),
            905 =>
                array (
                    'equipo' => 'Braine',
                    'img' => 'https://www.mismarcadores.com//res/image/data/K2uCquf5-IazQddhH.png',
                    'stadium_id' => 1,
                ),
            906 =>
                array (
                    'equipo' => 'Le Roeulx',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WAXwVHh5-OYGXb318.png',
                    'stadium_id' => 1,
                ),
            907 =>
                array (
                    'equipo' => 'Butgenbach',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ClQ2ckYg-8I2cBe7A.png',
                    'stadium_id' => 2,
                ),
            908 =>
                array (
                    'equipo' => 'Habay La Neuve',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rsAPK9HG-zoMojiz9.png',
                    'stadium_id' => 2,
                ),
            909 =>
                array (
                    'equipo' => 'Buzet',
                    'img' => 'https://www.mismarcadores.com//res/image/data/riYnzTh5-SO22SAai.png',
                    'stadium_id' => 1,
                ),
            910 =>
                array (
                    'equipo' => 'Etterbeek',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nwJqGKGG-8GcBXbrg.png',
                    'stadium_id' => 1,
                ),
            911 =>
                array (
                    'equipo' => 'd\'Ophain',
                    'img' => 'https://www.mismarcadores.com//res/image/data/t0nzZowS-Sbe4EmYa.png',
                    'stadium_id' => 1,
                ),
            912 =>
                array (
                    'equipo' => 'Greunsjotters Vossem',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QHg2vsBr-n9iZWuMM.png',
                    'stadium_id' => 1,
                ),
            913 =>
                array (
                    'equipo' => 'Eendracht A.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jqRE28jl-IaGLHkbO.png',
                    'stadium_id' => 1,
                ),
            914 =>
                array (
                    'equipo' => 'Lauwe',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Or5LkaYg-2qGQWeck.png',
                    'stadium_id' => 1,
                ),
            915 =>
                array (
                    'equipo' => 'Etoile de Faimes',
                    'img' => 'https://www.mismarcadores.com//res/image/data/x2f2Z8Yg-MD8jwgjS.png',
                    'stadium_id' => 1,
                ),
            916 =>
                array (
                    'equipo' => 'Eghezee',
                    'img' => 'https://www.mismarcadores.com//res/image/data/d0UHGJWg-xWgWqQB5.png',
                    'stadium_id' => 1,
                ),
            917 =>
                array (
                    'equipo' => 'Excelsior Bouwel',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Gbd7vrjl-hCH7Wwdp.png',
                    'stadium_id' => 2,
                ),
            918 =>
                array (
                    'equipo' => 'Stade Everois',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IFmRk1e5-6mqMp9Ml.png',
                    'stadium_id' => 2,
                ),
            919 =>
                array (
                    'equipo' => 'Herstal',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IuP3HqZA-rcGxL7mR.png',
                    'stadium_id' => 2,
                ),
            920 =>
                array (
                    'equipo' => 'Herderen-Millen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xtj6vjYA-0jO2OzTp.png',
                    'stadium_id' => 2,
                ),
            921 =>
                array (
                    'equipo' => 'Heur Tongeren',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xUYwlxZA-lYsJXrKs.png',
                    'stadium_id' => 2,
                ),
            922 =>
                array (
                    'equipo' => 'Sport Liege',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Srsy5xe5-rRJMClbI.png',
                    'stadium_id' => 2,
                ),
            923 =>
                array (
                    'equipo' => 'Heusden-Zolder',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dbciF7eM-byBVv4A7.png',
                    'stadium_id' => 1,
                ),
            924 =>
                array (
                    'equipo' => 'Breugel',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hY2k4GfM-pxNYQ1r2.png',
                    'stadium_id' => 1,
                ),
            925 =>
                array (
                    'equipo' => 'Horion',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dMTOcNfM-WhoDoSZm.png',
                    'stadium_id' => 1,
                ),
            926 =>
                array (
                    'equipo' => 'UCE Liege',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CxI6xXWg-2mnkfCk2.png',
                    'stadium_id' => 1,
                ),
            927 =>
                array (
                    'equipo' => 'Jeunesse Tavietoise',
                    'img' => 'https://www.mismarcadores.com//res/image/data/21XzYdcM-M7VriDrh.png',
                    'stadium_id' => 1,
                ),
            928 =>
                array (
                    'equipo' => 'Waltwilder',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WSxrl2il-08HQtJ3F.png',
                    'stadium_id' => 1,
                ),
            929 =>
                array (
                    'equipo' => 'Jodoigne',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vNWtZSCa-OIUIAWEQ.png',
                    'stadium_id' => 1,
                ),
            930 =>
                array (
                    'equipo' => 'Elsautoise',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CSZCt3yB-lx4da6f2.png',
                    'stadium_id' => 1,
                ),
            931 =>
                array (
                    'equipo' => 'Jong Zulte',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4lEBJeYg-2HJG3nLd.png',
                    'stadium_id' => 1,
                ),
            932 =>
                array (
                    'equipo' => 'Lembeke',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GpaVpDe5-I1LPye0n.png',
                    'stadium_id' => 1,
                ),
            933 =>
                array (
                    'equipo' => 'K. FC Turnhout',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rsTFm8Yg-vBCoDDzq.png',
                    'stadium_id' => 1,
                ),
            934 =>
                array (
                    'equipo' => 'Herk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lSkiQmBr-b7mIrqnh.png',
                    'stadium_id' => 1,
                ),
            935 =>
                array (
                    'equipo' => 'KSK Oostnieuwkerke',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GAP4fXYg-Q7zjKrgt.png',
                    'stadium_id' => 2,
                ),
            936 =>
                array (
                    'equipo' => 'Poperinge',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tzFQbeDa-d6wWlHDM.png',
                    'stadium_id' => 2,
                ),
            937 =>
                array (
                    'equipo' => 'La Hulpe',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zB1BVPDa-4v1XL2Xu.png',
                    'stadium_id' => 1,
                ),
            938 =>
                array (
                    'equipo' => 'Biesme',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IVE5oRFG-C4vZLj8f.png',
                    'stadium_id' => 1,
                ),
            939 =>
                array (
                    'equipo' => 'Lasne-Ohain',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KbymJPwS-tvysSvlJ.png',
                    'stadium_id' => 1,
                ),
            940 =>
                array (
                    'equipo' => 'Montignies',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pEgEF8eM-xUtU2r4D.png',
                    'stadium_id' => 1,
                ),
            941 =>
                array (
                    'equipo' => 'Leopoldsburg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/r5y23gHG-Kh4tO412.png',
                    'stadium_id' => 2,
                ),
            942 =>
                array (
                    'equipo' => 'Esperanza Pelt',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bs3WFSzB-2L124mgB.png',
                    'stadium_id' => 2,
                ),
            943 =>
                array (
                    'equipo' => 'Linden',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hr4aAbFG-vJQnXo9e.png',
                    'stadium_id' => 1,
                ),
            944 =>
                array (
                    'equipo' => 'Park Houthalen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OpBbQ6e5-WvhTkrt7.png',
                    'stadium_id' => 1,
                ),
            945 =>
                array (
                    'equipo' => 'Lochristi',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lvATxpFG-rXAB6VRA.png',
                    'stadium_id' => 1,
                ),
            946 =>
                array (
                    'equipo' => 'Dendermonde',
                    'img' => 'https://www.mismarcadores.com//res/image/data/U904Y1Fa-j7Ru3Swh.png',
                    'stadium_id' => 1,
                ),
            947 =>
                array (
                    'equipo' => 'Lyra-Lierse Berlaar',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tOQZjfEa-QgoA17AF.png',
                    'stadium_id' => 1,
                ),
            948 =>
                array (
                    'equipo' => 'Zandvliet Sport',
                    'img' => 'https://www.mismarcadores.com//res/image/data/foatOyZg-jDUYm3K7.png',
                    'stadium_id' => 1,
                ),
            949 =>
                array (
                    'equipo' => 'Malmundaria',
                    'img' => 'https://www.mismarcadores.com//res/image/data/f5e1nheM-Is9fo2ls.png',
                    'stadium_id' => 2,
                ),
            950 =>
                array (
                    'equipo' => 'Ethe Belmont',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I9MAHCEa-GUxJhjfa.png',
                    'stadium_id' => 2,
                ),
            951 =>
                array (
                    'equipo' => 'Meix-Devant-Virton',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rV6G7qCr-bwrQ3Ol7.png',
                    'stadium_id' => 1,
                ),
            952 =>
                array (
                    'equipo' => 'La Roche',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nclEhlAr-jqNuNvk9.png',
                    'stadium_id' => 1,
                ),
            953 =>
                array (
                    'equipo' => 'Melsele',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ict1KzZA-rJuAjPzK.png',
                    'stadium_id' => 2,
                ),
            954 =>
                array (
                    'equipo' => 'Vrasene',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AqOljYzB-UZyBYkcl.png',
                    'stadium_id' => 2,
                ),
            955 =>
                array (
                    'equipo' => 'Minderhout',
                    'img' => 'https://www.mismarcadores.com//res/image/data/255JzDjl-EBVoA4e3.png',
                    'stadium_id' => 1,
                ),
            956 =>
                array (
                    'equipo' => 'GBA Kontich',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nso03pjl-C4WoLvTm.png',
                    'stadium_id' => 1,
                ),
            957 =>
                array (
                    'equipo' => 'Molenbaix',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IoISdYBr-OU2b5Tw5.png',
                    'stadium_id' => 2,
                ),
            958 =>
                array (
                    'equipo' => 'SG-Tertre Hautrage II',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dnPqREf5-SvRkmPTj.png',
                    'stadium_id' => 2,
                ),
            959 =>
                array (
                    'equipo' => 'Naastois',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KCx33TBr-K2DFcjqJ.png',
                    'stadium_id' => 2,
                ),
            960 =>
                array (
                    'equipo' => 'Huizingen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hKx6tGg5-hb6bz4EB.png',
                    'stadium_id' => 2,
                ),
            961 =>
                array (
                    'equipo' => 'Nassogne',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pGMDz7wS-fLyNiA95.png',
                    'stadium_id' => 1,
                ),
            962 =>
                array (
                    'equipo' => 'Sprimont-Comblain',
                    'img' => 'https://www.mismarcadores.com//res/image/data/v5jNKVDa-6PS614Tc.png',
                    'stadium_id' => 1,
                ),
            963 =>
                array (
                    'equipo' => 'Nijlen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bZxQJmBr-Op7V86T1.png',
                    'stadium_id' => 2,
                ),
            964 =>
                array (
                    'equipo' => 'Kosova Schaerbeek',
                    'img' => 'https://www.mismarcadores.com//res/image/data/f7SrhpFa-2TqHSNU5.png',
                    'stadium_id' => 2,
                ),
            965 =>
                array (
                    'equipo' => 'Oostduinkerke',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bgLGE2Da-2a8vJQGm.png',
                    'stadium_id' => 1,
                ),
            966 =>
                array (
                    'equipo' => 'Blankenberge',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bwWssXFG-IazQddhH.png',
                    'stadium_id' => 1,
                ),
            967 =>
                array (
                    'equipo' => 'Paturages',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tj1ONbh5-IFvSkcbG.png',
                    'stadium_id' => 1,
                ),
            968 =>
                array (
                    'equipo' => 'Olsa Brakel',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hCQ0XkGG-hS7GAKEp.png',
                    'stadium_id' => 1,
                ),
            969 =>
                array (
                    'equipo' => 'Peruwelz FC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6BMUIRkl-Eo2bE2VI.png',
                    'stadium_id' => 2,
                ),
            970 =>
                array (
                    'equipo' => 'Vacresse',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6Jgz2oh5-zePn0oTD.png',
                    'stadium_id' => 2,
                ),
            971 =>
                array (
                    'equipo' => 'Racing Waregem',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SWygwaWg-CSMpGtiN.png',
                    'stadium_id' => 2,
                ),
            972 =>
                array (
                    'equipo' => 'Kortemark',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KCtEcNzB-2mxwTKYC.png',
                    'stadium_id' => 2,
                ),
            973 =>
                array (
                    'equipo' => 'Rapid Symphorinois',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lv9gwqeM-CjRMvtqC.png',
                    'stadium_id' => 2,
                ),
            974 =>
                array (
                    'equipo' => 'Hyon',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MPP736ZA-2PFybNGE.png',
                    'stadium_id' => 2,
                ),
            975 =>
                array (
                    'equipo' => 'RFC Raeren',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CCG7qTYA-dpzXTP0D.png',
                    'stadium_id' => 1,
                ),
            976 =>
                array (
                    'equipo' => 'Wanze',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bBvL94f5-EBkuf6dL.png',
                    'stadium_id' => 1,
                ),
            977 =>
                array (
                    'equipo' => 'Rhodienne-De Hoek',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xx7e39eM-0Mx0zhw6.png',
                    'stadium_id' => 1,
                ),
            978 =>
                array (
                    'equipo' => 'De Neffe',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IFS7MNzB-AJQUU7Y0.png',
                    'stadium_id' => 1,
                ),
            979 =>
                array (
                    'equipo' => 'Richelle Utd.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pS4KXKEG-MNPNdbZ1.png',
                    'stadium_id' => 1,
                ),
            980 =>
                array (
                    'equipo' => 'De Goe',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AVK8qxFa-4bXZm2gE.png',
                    'stadium_id' => 1,
                ),
            981 =>
                array (
                    'equipo' => 'Rochefort',
                    'img' => 'https://www.mismarcadores.com//res/image/data/z1skHBWg-jyuOQZ2j.png',
                    'stadium_id' => 2,
                ),
            982 =>
                array (
                    'equipo' => 'Vyle-Tharoul',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UHMeBheM-OSganJd5.png',
                    'stadium_id' => 2,
                ),
            983 =>
                array (
                    'equipo' => 'Royal Oupeye',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bHtoc2Ca-rNsF7wl4.png',
                    'stadium_id' => 2,
                ),
            984 =>
                array (
                    'equipo' => 'Warnant',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dhKHfOYg-80kMzKq2.png',
                    'stadium_id' => 2,
                ),
            985 =>
                array (
                    'equipo' => 'Schriek',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vHcfd8Cr-WvY4onMm.png',
                    'stadium_id' => 2,
                ),
            986 =>
                array (
                    'equipo' => 'Kesselt',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rNqjb4fM-rgdlWzR1.png',
                    'stadium_id' => 2,
                ),
            987 =>
                array (
                    'equipo' => 'SG-Tertre Hautrage',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I7SoMEEG-hK9i6Irc.png',
                    'stadium_id' => 1,
                ),
            988 =>
                array (
                    'equipo' => 'Trivieres',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AkNYhKCr-KjNpFslI.png',
                    'stadium_id' => 1,
                ),
            989 =>
                array (
                    'equipo' => 'Sint-Job',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lGgHBrZA-UZLqMb4F.png',
                    'stadium_id' => 1,
                ),
            990 =>
                array (
                    'equipo' => 'Schaerbeek-Evere',
                    'img' => 'https://www.mismarcadores.com//res/image/data/U9PpV4zB-6Ro0YCCm.png',
                    'stadium_id' => 1,
                ),
            991 =>
                array (
                    'equipo' => 'Spy',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hrglCsWg-d0EboAA7.png',
                    'stadium_id' => 1,
                ),
            992 =>
                array (
                    'equipo' => 'Rhisnois',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GneiMJ9r-YPiHxRme.png',
                    'stadium_id' => 1,
                ),
            993 =>
                array (
                    'equipo' => 'St-Joris Sleidinge',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Yi8llDhl-CU1JH01n.png',
                    'stadium_id' => 2,
                ),
            994 =>
                array (
                    'equipo' => 'Drongen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EXUWacCr-n911AFMG.png',
                    'stadium_id' => 2,
                ),
            995 =>
                array (
                    'equipo' => 'Ster-Francorchamps',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MaWxxDdM-SUyBb8AE.png',
                    'stadium_id' => 1,
                ),
            996 =>
                array (
                    'equipo' => 'Florenvillois',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2w1NqDdM-bNZaSmr2.png',
                    'stadium_id' => 1,
                ),
            997 =>
                array (
                    'equipo' => 'Stockel',
                    'img' => 'https://www.mismarcadores.com//res/image/data/j3mErVh5-vDTH2KFS.png',
                    'stadium_id' => 1,
                ),
            998 =>
                array (
                    'equipo' => 'Entite Manageoise',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ptdblTkl-lx4da6f2.png',
                    'stadium_id' => 1,
                ),
            999 =>
                array (
                    'equipo' => 'Templiers Nandrin',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fynew7cM-tEV5thDq.png',
                    'stadium_id' => 2,
                ),
            1000 =>
                array (
                    'equipo' => 'Loyers',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Y1Oii8HG-4S6QrDHD.png',
                    'stadium_id' => 2,
                ),
            1001 =>
                array (
                    'equipo' => 'Ternesse',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hdYNLyil-KxQMmVAM.png',
                    'stadium_id' => 1,
                ),
            1002 =>
                array (
                    'equipo' => 'Eppegem',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UkztAGwS-YaSIuMT5.png',
                    'stadium_id' => 1,
                ),
            1003 =>
                array (
                    'equipo' => 'Tervuren-Duisburg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IRpU0khl-4nP7KuHS.png',
                    'stadium_id' => 2,
                ),
            1004 =>
                array (
                    'equipo' => 'Bertem-Leefdaal',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OvbJDbCa-Em5I4kYJ.png',
                    'stadium_id' => 2,
                ),
            1005 =>
                array (
                    'equipo' => 'Tollembeek',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WK3wNxFG-Odmoehzd.png',
                    'stadium_id' => 1,
                ),
            1006 =>
                array (
                    'equipo' => 'Neufvilles',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MchhZ0FG-fmYk1p28.png',
                    'stadium_id' => 1,
                ),
            1007 =>
                array (
                    'equipo' => 'Torhout',
                    'img' => 'https://www.mismarcadores.com//res/image/data/n5ALu7Ar-jJLlF06T.png',
                    'stadium_id' => 1,
                ),
            1008 =>
                array (
                    'equipo' => 'Kleit Maldegem',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zsjT9GzB-zVDjBzz8.png',
                    'stadium_id' => 1,
                ),
            1009 =>
                array (
                    'equipo' => 'Torpedo Hasselt',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AXwf77HG-427B9IRF.png',
                    'stadium_id' => 2,
                ),
            1010 =>
                array (
                    'equipo' => 'Eendr. Termien',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Qm1sL0Yg-Ao5h0nud.png',
                    'stadium_id' => 2,
                ),
            1011 =>
                array (
                    'equipo' => 'Tournai',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ObETCgWg-lQPI912D.png',
                    'stadium_id' => 2,
                ),
            1012 =>
                array (
                    'equipo' => 'Maarkedal',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SKpCllcM-rBZs8wy1.png',
                    'stadium_id' => 2,
                ),
            1013 =>
                array (
                    'equipo' => 'Vaux',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6wgwD5Wg-KSKUvziH.png',
                    'stadium_id' => 2,
                ),
            1014 =>
                array (
                    'equipo' => 'Saint Leger',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GCFcv6GG-ppBeDtg7.png',
                    'stadium_id' => 2,
                ),
            1015 =>
                array (
                    'equipo' => 'Veltem',
                    'img' => 'https://www.mismarcadores.com//res/image/data/80sLxMxS-Mqm94e36.png',
                    'stadium_id' => 1,
                ),
            1016 =>
                array (
                    'equipo' => 'City Pirates',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jcszMrhl-ny2x1LhI.png',
                    'stadium_id' => 1,
                ),
            1017 =>
                array (
                    'equipo' => 'Villers-La-Ville',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jaLsZVf5-YFUnFDRR.png',
                    'stadium_id' => 1,
                ),
            1018 =>
                array (
                    'equipo' => 'Molignee',
                    'img' => 'https://www.mismarcadores.com//res/image/data/C6eYFPg5-fVrbmDVE.png',
                    'stadium_id' => 1,
                ),
            1019 =>
                array (
                    'equipo' => 'Vlamertinge',
                    'img' => 'https://www.mismarcadores.com//res/image/data/M7Ymh7Cr-MNPNdbZ1.png',
                    'stadium_id' => 1,
                ),
            1020 =>
                array (
                    'equipo' => 'Dottignies',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KWk5nCil-h47p28Aq.png',
                    'stadium_id' => 1,
                ),
            1021 =>
                array (
                    'equipo' => 'Vliermaal',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WMIjU8jl-MukDVWxQ.png',
                    'stadium_id' => 1,
                ),
            1022 =>
                array (
                    'equipo' => 'Huvo Jeuk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hA4ziMEa-YaSIuMT5.png',
                    'stadium_id' => 1,
                ),
            1023 =>
                array (
                    'equipo' => 'Voorde Appelterre',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pvb8zzZA-pr0GLdkE.png',
                    'stadium_id' => 1,
                ),
            1024 =>
                array (
                    'equipo' => 'Wetteren',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6Bi4KTeM-6iaCVYB8.png',
                    'stadium_id' => 1,
                ),
            1025 =>
                array (
                    'equipo' => 'Wallonia Libin',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0bd7DQ9r-KhITr87Q.png',
                    'stadium_id' => 1,
                ),
            1026 =>
                array (
                    'equipo' => 'Wallonne Ciney',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Qc6EFK9r-GG7bE49b.png',
                    'stadium_id' => 1,
                ),
            1027 =>
                array (
                    'equipo' => 'Ways Genappe',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IJWWnwil-S8bmAwhQ.png',
                    'stadium_id' => 1,
                ),
            1028 =>
                array (
                    'equipo' => 'Overijse',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KtmPMae5-0pNTEsc7.png',
                    'stadium_id' => 1,
                ),
            1029 =>
                array (
                    'equipo' => 'Weerstand Koersel',
                    'img' => 'https://www.mismarcadores.com//res/image/data/W03zZQkl-nHoE14Bp.png',
                    'stadium_id' => 2,
                ),
            1030 =>
                array (
                    'equipo' => 'Vrij Houtem',
                    'img' => 'https://www.mismarcadores.com//res/image/data/x6hTveg5-xUCr24Qn.png',
                    'stadium_id' => 2,
                ),
            1031 =>
                array (
                    'equipo' => 'Wellen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8noxXNeM-Y1o122oa.png',
                    'stadium_id' => 2,
                ),
            1032 =>
                array (
                    'equipo' => 'FC Eupen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/W6GFoZYg-48fRPh1E.png',
                    'stadium_id' => 2,
                ),
            1033 =>
                array (
                    'equipo' => 'Wepion',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WvJ2uEYA-bZF4T89h.png',
                    'stadium_id' => 1,
                ),
            1034 =>
                array (
                    'equipo' => 'Wavre',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6Rw2qXzS-WdDQ7VJ1.png',
                    'stadium_id' => 1,
                ),
            1035 =>
                array (
                    'equipo' => 'Wingene',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vcf4EpeM-W2KdlKhp.png',
                    'stadium_id' => 1,
                ),
            1036 =>
                array (
                    'equipo' => 'KE Wervik',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pMZ9N8Cr-Ao5h0nud.png',
                    'stadium_id' => 1,
                ),
            1037 =>
                array (
                    'equipo' => 'Witgoor Sport',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rPR9EQkl-rXQJcvKe.png',
                    'stadium_id' => 2,
                ),
            1038 =>
                array (
                    'equipo' => 'Sport Koersel',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Wtu7Pre5-QXuwMmAk.png',
                    'stadium_id' => 2,
                ),
            1039 =>
                array (
                    'equipo' => 'Woluwe Zaventem',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UuUicHeM-p4iAW1y4.png',
                    'stadium_id' => 2,
                ),
            1040 =>
                array (
                    'equipo' => 'Lenaarts',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ULqmGBdM-no9IpZn1.png',
                    'stadium_id' => 2,
                ),
            1041 =>
                array (
                    'equipo' => 'Wolvertem Merchtem',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nRYYAKYg-vkJiB4Qg.png',
                    'stadium_id' => 2,
                ),
            1042 =>
                array (
                    'equipo' => 'Meldert',
                    'img' => 'https://www.mismarcadores.com//res/image/data/plCJQwyB-8fbnmBOc.png',
                    'stadium_id' => 2,
                ),
            1043 =>
                array (
                    'equipo' => 'Wortel',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lYNfi4jl-zgEc5N1e.png',
                    'stadium_id' => 2,
                ),
            1044 =>
                array (
                    'equipo' => 'Jette',
                    'img' => 'https://www.mismarcadores.com//res/image/data/G4stPYg5-p6vVUt40.png',
                    'stadium_id' => 2,
                ),
            1045 =>
                array (
                    'equipo' => 'Zaffelare',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OGgygK9r-W8F4ypr7.png',
                    'stadium_id' => 1,
                ),
            1046 =>
                array (
                    'equipo' => 'FC Lebbeke',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UmzAOGg5-hM6NzPJQ.png',
                    'stadium_id' => 1,
                ),
            1047 =>
                array (
                    'equipo' => 'Zandhovense',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tG8keJjl-xbI70k1e.png',
                    'stadium_id' => 2,
                ),
            1048 =>
                array (
                    'equipo' => 'KRC Mechelen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WIVoFJil-OfjEVLjA.png',
                    'stadium_id' => 2,
                ),
            1049 =>
                array (
                    'equipo' => 'Zelzate',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CxLwkQil-jqq90tGB.png',
                    'stadium_id' => 1,
                ),
            1050 =>
                array (
                    'equipo' => 'Edeboys',
                    'img' => 'https://www.mismarcadores.com//res/image/data/t0MiWFBr-IoT0RXN1.png',
                    'stadium_id' => 1,
                ),
            1051 =>
                array (
                    'equipo' => 'Zuun',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2BIShDZA-IuQxos9h.png',
                    'stadium_id' => 2,
                ),
            1052 =>
                array (
                    'equipo' => 'Hornu',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Wjwrgihl-fZhDw7Yl.png',
                    'stadium_id' => 2,
                ),
            1053 =>
                array (
                    'equipo' => 'Zwarte Leeuw',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Y7qSV3GG-b5CZG3e8.png',
                    'stadium_id' => 2,
                ),
            1054 =>
                array (
                    'equipo' => 'Putte SK',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2kJLB9Br-ImCXrdXp.png',
                    'stadium_id' => 2,
                ),
            1055 =>
                array (
                    'equipo' => 'Helchteren',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2kYXdWEa-rPpI5pKf.png',
                    'stadium_id' => 1,
                ),
            1056 =>
                array (
                    'equipo' => 'Kabouters Opglabbeek',
                    'img' => 'https://www.mismarcadores.com//res/image/data/S2Xcfejl-CKlOjMLG.png',
                    'stadium_id' => 1,
                ),
            1057 =>
                array (
                    'equipo' => 'Kalken',
                    'img' => 'https://www.mismarcadores.com//res/image/data/C2BlSteM-W0wadmnM.png',
                    'stadium_id' => 2,
                ),
            1058 =>
                array (
                    'equipo' => 'Jong Lede',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hdr7KXCr-h4LBJVMH.png',
                    'stadium_id' => 2,
                ),
            1059 =>
                array (
                    'equipo' => 'Floreffe',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fN57XQWg-O2nKIeXA.png',
                    'stadium_id' => 1,
                ),
            1060 =>
                array (
                    'equipo' => 'R. Leopold',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xluOI3Da-SldlFm64.png',
                    'stadium_id' => 1,
                ),
            1061 =>
                array (
                    'equipo' => 'Mormont II',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OGmRY5yS-riaSFsqq.png',
                    'stadium_id' => 2,
                ),
            1062 =>
                array (
                    'equipo' => 'Andennais',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fgDSm4Wg-Yg7sFw8o.png',
                    'stadium_id' => 2,
                ),
            1063 =>
                array (
                    'equipo' => 'Nacional Potosí',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KK8ewbFG-dA9mPgGq.png',
                    'stadium_id' => 1,
                ),
            1064 =>
                array (
                    'equipo' => 'Aurora',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8AKCO7f5-hrWFm11o.png',
                    'stadium_id' => 1,
                ),
            1065 =>
                array (
                    'equipo' => 'San José',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SUTvO7Wg-r5OuOJ4q.png',
                    'stadium_id' => 1,
                ),
            1066 =>
                array (
                    'equipo' => 'Bolívar',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GENsXszB-IsyCssPs.png',
                    'stadium_id' => 2,
                ),
            1067 =>
                array (
                    'equipo' => 'Real Potosí',
                    'img' => 'https://www.mismarcadores.com//res/image/data/27j5hlzB-S0hNDLkm.png',
                    'stadium_id' => 2,
                ),
            1068 =>
                array (
                    'equipo' => 'J. Wilstermann',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QF9HGLGG-4Kv64Pmh.png',
                    'stadium_id' => 1,
                ),
            1069 =>
                array (
                    'equipo' => 'Always Ready',
                    'img' => 'https://www.mismarcadores.com//res/image/data/h2zsNpg5-YypDY6ar.png',
                    'stadium_id' => 1,
                ),
            1070 =>
                array (
                    'equipo' => 'Zrinjski',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4Qe3YdwS-SdfciDLI.png',
                    'stadium_id' => 1,
                ),
            1071 =>
                array (
                    'equipo' => 'Velez Mostar',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fo1CybFG-OOX5sxhf.png',
                    'stadium_id' => 1,
                ),
            1072 =>
                array (
                    'equipo' => 'Celik Zenica',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8lRLxtWg-nFtkHuvk.png',
                    'stadium_id' => 1,
                ),
            1073 =>
                array (
                    'equipo' => 'Sarajevo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/t4x5ulAr-nFtkHuvk.png',
                    'stadium_id' => 1,
                ),
            1074 =>
                array (
                    'equipo' => 'Cruzeiro',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QDS2MvBr-0rn95JMc.png',
                    'stadium_id' => 1,
                ),
            1075 =>
                array (
                    'equipo' => 'Athletico-PR',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Wxsf2fFG-MmF0u4dj.png',
                    'stadium_id' => 1,
                ),
            1076 =>
                array (
                    'equipo' => 'Fluminense',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WlxJgSdM-ptTI6fcH.png',
                    'stadium_id' => 1,
                ),
            1077 =>
                array (
                    'equipo' => 'Sao Paulo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YgK3qNCa-AFr3Lqct.png',
                    'stadium_id' => 1,
                ),
            1078 =>
                array (
                    'equipo' => 'Internacional',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4EdoEoil-vRbvOeSi.png',
                    'stadium_id' => 2,
                ),
            1079 =>
                array (
                    'equipo' => 'Ceará',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lO0NK6f5-06d3guJo.png',
                    'stadium_id' => 2,
                ),
            1080 =>
                array (
                    'equipo' => 'Chapecoense',
                    'img' => 'https://www.mismarcadores.com//res/image/data/v9EKoUeM-t25AHKOe.png',
                    'stadium_id' => 1,
                ),
            1081 =>
                array (
                    'equipo' => 'Bahia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/f5V5z1Cr-vce7haYi.png',
                    'stadium_id' => 1,
                ),
            1082 =>
                array (
                    'equipo' => 'Flamengo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ADvIaiZA-APZOwWl9.png',
                    'stadium_id' => 1,
                ),
            1083 =>
                array (
                    'equipo' => 'Botafogo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MHO33ugl-AuMGc9ak.png',
                    'stadium_id' => 1,
                ),
            1084 =>
                array (
                    'equipo' => 'Santos',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rJGaKUhl-2NQQ4YRT.png',
                    'stadium_id' => 2,
                ),
            1085 =>
                array (
                    'equipo' => 'Avaí',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tGpYsdYg-zZehn0YA.png',
                    'stadium_id' => 2,
                ),
            1086 =>
                array (
                    'equipo' => 'Botev Vratsa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/v7ApS0HG-8CeixGDE.png',
                    'stadium_id' => 1,
                ),
            1087 =>
                array (
                    'equipo' => 'Lok. Plovdiv',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GxcHMNh5-zViJkcIA.png',
                    'stadium_id' => 1,
                ),
            1088 =>
                array (
                    'equipo' => 'Slavia Sofia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QLxL3wHG-4Aq8nXHJ.png',
                    'stadium_id' => 1,
                ),
            1089 =>
                array (
                    'equipo' => 'CSKA Sofia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tjphW8il-INSlETRO.png',
                    'stadium_id' => 1,
                ),
            1090 =>
                array (
                    'equipo' => 'Edmonton',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0rpPHMGG-88XRzQRr.png',
                    'stadium_id' => 2,
                ),
            1091 =>
                array (
                    'equipo' => 'Forge',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Eqq8fSwS-SAkfqcoD.png',
                    'stadium_id' => 2,
                ),
            1092 =>
                array (
                    'equipo' => 'A. Italiano',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fZSe86hl-dKpJ4jiP.png',
                    'stadium_id' => 2,
                ),
            1093 =>
                array (
                    'equipo' => 'Deportes Iquique',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YRB3d7hl-nBnzqfBn.png',
                    'stadium_id' => 2,
                ),
            1094 =>
                array (
                    'equipo' => 'O\'Higgins',
                    'img' => 'https://www.mismarcadores.com//res/image/data/f1MK7GzS-UFuhZm57.png',
                    'stadium_id' => 1,
                ),
            1095 =>
                array (
                    'equipo' => 'Antofagasta',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AFqCZgcM-txIRvqh0.png',
                    'stadium_id' => 1,
                ),
            1096 =>
                array (
                    'equipo' => 'Huachipato',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0I0iteZg-tYsrwxJb.png',
                    'stadium_id' => 2,
                ),
            1097 =>
                array (
                    'equipo' => 'U. Católica',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OvyAhfyB-6wMn3FiI.png',
                    'stadium_id' => 2,
                ),
            1098 =>
                array (
                    'equipo' => 'Colo Colo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CMCTeMxS-2k55RUYq.png',
                    'stadium_id' => 1,
                ),
            1099 =>
                array (
                    'equipo' => 'Everton',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EJdSA4Ca-4n5A8hHH.png',
                    'stadium_id' => 1,
                ),
            1100 =>
                array (
                    'equipo' => 'Guangzhou Evergrande',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vVCjzzFG-SAkSlKaK.png',
                    'stadium_id' => 2,
                ),
            1101 =>
                array (
                    'equipo' => 'Beijing Renhe',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dSyLvpGG-UctPL03e.png',
                    'stadium_id' => 2,
                ),
            1102 =>
                array (
                    'equipo' => 'Jiangsu Suning',
                    'img' => 'https://www.mismarcadores.com//res/image/data/M70mshf5-8luTKKI1.png',
                    'stadium_id' => 1,
                ),
            1103 =>
                array (
                    'equipo' => 'Shenzhen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/re0lGHWg-O4uDBYcn.png',
                    'stadium_id' => 1,
                ),
            1104 =>
                array (
                    'equipo' => 'Tianjin Tianhai',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tQqzgJf5-noFp2l21.png',
                    'stadium_id' => 2,
                ),
            1105 =>
                array (
                    'equipo' => 'Tianjin Teda',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CC0jGOil-Y55YSxw1.png',
                    'stadium_id' => 2,
                ),
            1106 =>
                array (
                    'equipo' => 'Wuhan Zall',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ng43EcEa-h2tf18rb.png',
                    'stadium_id' => 2,
                ),
            1107 =>
                array (
                    'equipo' => 'Shanghai SIPG',
                    'img' => 'https://www.mismarcadores.com//res/image/data/M3Kbw1g5-6BieVCdR.png',
                    'stadium_id' => 2,
                ),
            1108 =>
                array (
                    'equipo' => 'Atl. Bucaramanga',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Eovph8GG-GbG1sM2j.png',
                    'stadium_id' => 1,
                ),
            1109 =>
                array (
                    'equipo' => 'Millonarios',
                    'img' => 'https://www.mismarcadores.com//res/image/data/COAjhCg5-pxV4gPo9.png',
                    'stadium_id' => 1,
                ),
            1110 =>
                array (
                    'equipo' => 'La Equidad',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jRH9PPzB-GArubhDE.png',
                    'stadium_id' => 1,
                ),
            1111 =>
                array (
                    'equipo' => 'U. Magdalena',
                    'img' => 'https://www.mismarcadores.com//res/image/data/f5xfvkg5-IgilJKb3.png',
                    'stadium_id' => 1,
                ),
            1112 =>
                array (
                    'equipo' => 'Once Caldas',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2JsUqijl-I32DP83d.png',
                    'stadium_id' => 2,
                ),
            1113 =>
                array (
                    'equipo' => 'Dep. Pasto',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EDB1W0zB-zkIQ1zbN.png',
                    'stadium_id' => 2,
                ),
            1114 =>
                array (
                    'equipo' => 'Atl. Huila',
                    'img' => 'https://www.mismarcadores.com//res/image/data/z7L6gTwS-8jQ26taJ.png',
                    'stadium_id' => 1,
                ),
            1115 =>
                array (
                    'equipo' => 'Deportivo Cali',
                    'img' => 'https://www.mismarcadores.com//res/image/data/O2O10jHG-recfzg3L.png',
                    'stadium_id' => 1,
                ),
            1116 =>
                array (
                    'equipo' => 'Anyang',
                    'img' => 'https://www.mismarcadores.com//res/image/data/O2H46zAr-l2N3c6VH.png',
                    'stadium_id' => 1,
                ),
            1117 =>
                array (
                    'equipo' => 'Bucheon',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QPh9CreM-Ak9piZdm.png',
                    'stadium_id' => 1,
                ),
            1118 =>
                array (
                    'equipo' => 'Jeonnam',
                    'img' => 'https://www.mismarcadores.com//res/image/data/40TKlhf5-ttp49BeG.png',
                    'stadium_id' => 2,
                ),
            1119 =>
                array (
                    'equipo' => 'Seoul E.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dS3GwrBr-EkKLQKqN.png',
                    'stadium_id' => 2,
                ),
            1120 =>
                array (
                    'equipo' => 'Alajuelense',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0QS6MSh5-INS6xhFs.png',
                    'stadium_id' => 1,
                ),
            1121 =>
                array (
                    'equipo' => 'Herediano',
                    'img' => 'https://www.mismarcadores.com//res/image/data/v3pLgYDa-vkmhBSTl.png',
                    'stadium_id' => 1,
                ),
            1122 =>
                array (
                    'equipo' => 'Grecia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hnudESYg-CGWgRdq0.png',
                    'stadium_id' => 2,
                ),
            1123 =>
                array (
                    'equipo' => 'Limón',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IVC1Dbh5-xIdY5nAa.png',
                    'stadium_id' => 2,
                ),
            1124 =>
                array (
                    'equipo' => 'Cartaginés',
                    'img' => 'https://www.mismarcadores.com//res/image/data/65IfkeDa-G8ex56P5.png',
                    'stadium_id' => 1,
                ),
            1125 =>
                array (
                    'equipo' => 'San Carlos',
                    'img' => 'https://www.mismarcadores.com//res/image/data/folL86Da-0KXXeC6Q.png',
                    'stadium_id' => 1,
                ),
            1126 =>
                array (
                    'equipo' => 'ADR Jicaral',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AL7DYyCa-OblqEuBo.png',
                    'stadium_id' => 2,
                ),
            1127 =>
                array (
                    'equipo' => 'U.C.R.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zwkg01yB-C8M25oFt.png',
                    'stadium_id' => 2,
                ),
            1128 =>
                array (
                    'equipo' => 'Santos DG',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ljtSYuCr-S8W1Wu2S.png',
                    'stadium_id' => 2,
                ),
            1129 =>
                array (
                    'equipo' => 'Saprissa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tpNjAOYg-tt49Qllj.png',
                    'stadium_id' => 2,
                ),
            1130 =>
                array (
                    'equipo' => 'Gorica',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CQ0e4MHG-by3SdJ96.png',
                    'stadium_id' => 2,
                ),
            1131 =>
                array (
                    'equipo' => 'Osijek',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nNYioZhl-jeyDb3Qo.png',
                    'stadium_id' => 2,
                ),
            1132 =>
                array (
                    'equipo' => 'Varazdin',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I3Ae1kZA-4EmGnEqL.png',
                    'stadium_id' => 2,
                ),
            1133 =>
                array (
                    'equipo' => 'Hajduk Split',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KhiiTqGG-6Renvvr9.png',
                    'stadium_id' => 2,
                ),
            1134 =>
                array (
                    'equipo' => 'Hobro',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4S4U6WGG-pCwtHA2M.png',
                    'stadium_id' => 1,
                ),
            1135 =>
                array (
                    'equipo' => 'Randers',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0bHG3BXg-MPb4A8NB.png',
                    'stadium_id' => 1,
                ),
            1136 =>
                array (
                    'equipo' => 'Nordsjaelland',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nuSqtrjl-rkK0wP93.png',
                    'stadium_id' => 1,
                ),
            1137 =>
                array (
                    'equipo' => 'Esbjerg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zwC9qZhl-Q5k5siAp.png',
                    'stadium_id' => 1,
                ),
            1138 =>
                array (
                    'equipo' => 'Aarhus',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MyPsdDHG-tlABTC0F.png',
                    'stadium_id' => 2,
                ),
            1139 =>
                array (
                    'equipo' => 'Midtjylland',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OC7ufJyB-AZY0sZPj.png',
                    'stadium_id' => 2,
                ),
            1140 =>
                array (
                    'equipo' => 'Brondby',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Yq6zQNkl-AZY0sZPj.png',
                    'stadium_id' => 2,
                ),
            1141 =>
                array (
                    'equipo' => 'Odense',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lSmok9yS-rZa0Bl85.png',
                    'stadium_id' => 2,
                ),
            1142 =>
                array (
                    'equipo' => 'Fredericia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tIV7OzBr-S8EKQ8ee.png',
                    'stadium_id' => 2,
                ),
            1143 =>
                array (
                    'equipo' => 'Vendsyssel',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jPJEUVil-hOaS0EAS.png',
                    'stadium_id' => 2,
                ),
            1144 =>
                array (
                    'equipo' => 'Nykobing',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tnKgLlZA-W4k1qNnK.png',
                    'stadium_id' => 2,
                ),
            1145 =>
                array (
                    'equipo' => 'Koge',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hn7bG1zB-4bBqnsgI.png',
                    'stadium_id' => 2,
                ),
            1146 =>
                array (
                    'equipo' => 'Kolding',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tWv8eeyB-Y1scVbp6.png',
                    'stadium_id' => 2,
                ),
            1147 =>
                array (
                    'equipo' => 'Hvidovre',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rwd1C1Ar-CIZQcW62.png',
                    'stadium_id' => 2,
                ),
            1148 =>
                array (
                    'equipo' => 'Skive',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zqiM19EG-dl6NSWQ7.png',
                    'stadium_id' => 1,
                ),
            1149 =>
                array (
                    'equipo' => 'Naestved',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vsTcBye5-CAPLkco8.png',
                    'stadium_id' => 1,
                ),
            1150 =>
                array (
                    'equipo' => 'El Nacional',
                    'img' => 'https://www.mismarcadores.com//res/image/data/86vzXYxS-pYY1rIxl.png',
                    'stadium_id' => 1,
                ),
            1151 =>
                array (
                    'equipo' => 'Mushuc Runa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/thDPcfWg-h8HPHgkT.png',
                    'stadium_id' => 1,
                ),
            1152 =>
                array (
                    'equipo' => 'Tecnico U.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MV2aZLg5-OUKWsnnA.png',
                    'stadium_id' => 1,
                ),
            1153 =>
                array (
                    'equipo' => 'Emelec',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QVDf3rjl-A7jXRs8L.png',
                    'stadium_id' => 1,
                ),
            1154 =>
                array (
                    'equipo' => 'Fuerza A.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2DGtL6yB-dQuBi73B.png',
                    'stadium_id' => 2,
                ),
            1155 =>
                array (
                    'equipo' => 'Barcelona SC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ryxDYXh5-WpFjgiv0.png',
                    'stadium_id' => 2,
                ),
            1156 =>
                array (
                    'equipo' => 'Ind. del Valle',
                    'img' => 'https://www.mismarcadores.com//res/image/data/t8nwTpe5-xCV04G7D.png',
                    'stadium_id' => 2,
                ),
            1157 =>
                array (
                    'equipo' => 'LDU Portoviejo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hjSlDdYg-zkEJBAKm.png',
                    'stadium_id' => 1,
                ),
            1158 =>
                array (
                    'equipo' => 'LDU Loja',
                    'img' => 'https://www.mismarcadores.com//res/image/data/On3em6Xg-UF3vCOdO.png',
                    'stadium_id' => 1,
                ),
            1159 =>
                array (
                    'equipo' => 'Gualaceo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Iyjjlggl-WE0TQerr.png',
                    'stadium_id' => 2,
                ),
            1160 =>
                array (
                    'equipo' => 'Manta',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QscFDvEa-6szbqbNs.png',
                    'stadium_id' => 2,
                ),
            1161 =>
                array (
                    'equipo' => 'Al Ahly',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bRWF8Vh5-MkKZWjBM.png',
                    'stadium_id' => 2,
                ),
            1162 =>
                array (
                    'equipo' => 'Zamalek',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nPDlV2Xg-ITaeDsXL.png',
                    'stadium_id' => 2,
                ),
            1163 =>
                array (
                    'equipo' => 'Queen\'s Park',
                    'img' => 'https://www.mismarcadores.com//res/image/data/resQwNAr-reixY1Rl.png',
                    'stadium_id' => 1,
                ),
            1164 =>
                array (
                    'equipo' => 'Clyde',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8UEMekCa-YgXoX9j8.png',
                    'stadium_id' => 1,
                ),
            1165 =>
                array (
                    'equipo' => 'Dundee FC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nPKUKGYg-xM0r5Dqi.png',
                    'stadium_id' => 2,
                ),
            1166 =>
                array (
                    'equipo' => 'Inverness',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QibHRMf5-IundAnqe.png',
                    'stadium_id' => 2,
                ),
            1167 =>
                array (
                    'equipo' => 'Dun. Streda',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8xYLxczB-S0MlLKxO.png',
                    'stadium_id' => 1,
                ),
            1168 =>
                array (
                    'equipo' => 'Pohronie',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IFRolBg5-KMLxGY7I.png',
                    'stadium_id' => 1,
                ),
            1169 =>
                array (
                    'equipo' => 'Zilina',
                    'img' => 'https://www.mismarcadores.com//res/image/data/40RplbCa-QkBgxXUB.png',
                    'stadium_id' => 1,
                ),
            1170 =>
                array (
                    'equipo' => 'Trnava',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GrnQn1h5-fgHMEzwd.png',
                    'stadium_id' => 1,
                ),
            1171 =>
                array (
                    'equipo' => 'Ruzomberok B',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OMog1pwS-zPYJuLgf.png',
                    'stadium_id' => 2,
                ),
            1172 =>
                array (
                    'equipo' => 'Komarno',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WxnOKTzS-UNsO0lw7.png',
                    'stadium_id' => 2,
                ),
            1173 =>
                array (
                    'equipo' => 'S. Bratislava B',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nR3tTjWg-UJcXX2Zt.png',
                    'stadium_id' => 2,
                ),
            1174 =>
                array (
                    'equipo' => 'Skalica',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nk0Bg4Yg-O4L0hMU0.png',
                    'stadium_id' => 2,
                ),
            1175 =>
                array (
                    'equipo' => 'Zilina B',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Qo4NMpg5-bPzI1NXA.png',
                    'stadium_id' => 1,
                ),
            1176 =>
                array (
                    'equipo' => 'Dubnica',
                    'img' => 'https://www.mismarcadores.com//res/image/data/40GoRDWg-jZHumAG2.png',
                    'stadium_id' => 1,
                ),
            1177 =>
                array (
                    'equipo' => 'Bravo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/StfW46Fa-lUHXWKyj.png',
                    'stadium_id' => 1,
                ),
            1178 =>
                array (
                    'equipo' => 'Tabor Sezana',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AmugcQBr-GK9luD4j.png',
                    'stadium_id' => 1,
                ),
            1179 =>
                array (
                    'equipo' => 'Maribor',
                    'img' => 'https://www.mismarcadores.com//res/image/data/v9py2TeM-2kXPb85r.png',
                    'stadium_id' => 2,
                ),
            1180 =>
                array (
                    'equipo' => 'O. Ljubljana',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WErkkqxS-bHxgSFIu.png',
                    'stadium_id' => 2,
                ),
            1181 =>
                array (
                    'equipo' => 'New England Revolution',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lG7apoDa-8h16SIAN.png',
                    'stadium_id' => 1,
                ),
            1182 =>
                array (
                    'equipo' => 'Orlando City',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MNMDp5cM-QRfm7pVR.png',
                    'stadium_id' => 1,
                ),
            1183 =>
                array (
                    'equipo' => 'New York Red Bulls',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jLCdXBZA-lYLqVj23.png',
                    'stadium_id' => 2,
                ),
            1184 =>
                array (
                    'equipo' => 'Columbus Crew',
                    'img' => 'https://www.mismarcadores.com//res/image/data/42Yo8dyS-C2kd9CmM.png',
                    'stadium_id' => 2,
                ),
            1185 =>
                array (
                    'equipo' => 'Chicago Fire',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WGZ00rBr-zshn7Zqh.png',
                    'stadium_id' => 1,
                ),
            1186 =>
                array (
                    'equipo' => 'DC United',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MuhwhtwS-pAQrZVvN.png',
                    'stadium_id' => 1,
                ),
            1187 =>
                array (
                    'equipo' => 'FC Dallas',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IPVa0Qhl-bRcU6Sfg.png',
                    'stadium_id' => 2,
                ),
            1188 =>
                array (
                    'equipo' => 'Real Salt Lake',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OxGZ7ve5-0YAAdGyH.png',
                    'stadium_id' => 2,
                ),
            1189 =>
                array (
                    'equipo' => 'Houston Dynamo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vuQjzPCr-StS6fd0n.png',
                    'stadium_id' => 2,
                ),
            1190 =>
                array (
                    'equipo' => 'Seattle Sounders',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IJPa6fHG-6iHH0MVJ.png',
                    'stadium_id' => 2,
                ),
            1191 =>
                array (
                    'equipo' => 'Minnesota United',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fXYygQfM-IgwRNS93.png',
                    'stadium_id' => 1,
                ),
            1192 =>
                array (
                    'equipo' => 'Vancouver Whitecaps',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nXTMece5-lz724ho8.png',
                    'stadium_id' => 1,
                ),
            1193 =>
                array (
                    'equipo' => 'Montreal Impact',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6gpLUVzS-6XQAgGFh.png',
                    'stadium_id' => 1,
                ),
            1194 =>
                array (
                    'equipo' => 'Philadelphia Union',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fsqHkFdM-K6ymRmQq.png',
                    'stadium_id' => 1,
                ),
            1195 =>
                array (
                    'equipo' => 'Toronto FC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/S0szFuXg-Gzjelhtc.png',
                    'stadium_id' => 2,
                ),
            1196 =>
                array (
                    'equipo' => 'Cincinnati',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nqEwF6GG-YaAei40r.png',
                    'stadium_id' => 2,
                ),
            1197 =>
                array (
                    'equipo' => 'San Jose Earthquakes',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6Fh3DODa-YHL5ueor.png',
                    'stadium_id' => 1,
                ),
            1198 =>
                array (
                    'equipo' => 'Colorado Rapids',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OOiHXVAr-2RllC8Er.png',
                    'stadium_id' => 1,
                ),
            1199 =>
                array (
                    'equipo' => 'Portland Timbers',
                    'img' => 'https://www.mismarcadores.com//res/image/data/44WrYxeM-0puB5IbJ.png',
                    'stadium_id' => 2,
                ),
            1200 =>
                array (
                    'equipo' => 'Los Angeles Galaxy',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lCJPumFa-CWxYCVJj.png',
                    'stadium_id' => 2,
                ),
            1201 =>
                array (
                    'equipo' => 'North Carolina',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AVEUqfDa-xEzFBxyN.png',
                    'stadium_id' => 1,
                ),
            1202 =>
                array (
                    'equipo' => 'Atlanta United 2',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2m2vU5Yg-KQ7ph0mj.png',
                    'stadium_id' => 1,
                ),
            1203 =>
                array (
                    'equipo' => 'Birmingham',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YTgA7vHG-6XxXI3xb.png',
                    'stadium_id' => 2,
                ),
            1204 =>
                array (
                    'equipo' => 'Charlotte Independ.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/trETblg5-jVP36wC6.png',
                    'stadium_id' => 2,
                ),
            1205 =>
                array (
                    'equipo' => 'Nashville SC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Y7Y3g4Da-r3c7qG24.png',
                    'stadium_id' => 2,
                ),
            1206 =>
                array (
                    'equipo' => 'Indy Eleven',
                    'img' => 'https://www.mismarcadores.com//res/image/data/42hnDFHG-C6TSx8Ms.png',
                    'stadium_id' => 2,
                ),
            1207 =>
                array (
                    'equipo' => 'Swope Park',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lha8xGh5-Gl5oEiwc.png',
                    'stadium_id' => 2,
                ),
            1208 =>
                array (
                    'equipo' => 'Charleston',
                    'img' => 'https://www.mismarcadores.com//res/image/data/URWmTRWg-buVOzuFs.png',
                    'stadium_id' => 2,
                ),
            1209 =>
                array (
                    'equipo' => 'Austin Bold',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MyJ4lphl-MJNAJLAI.png',
                    'stadium_id' => 1,
                ),
            1210 =>
                array (
                    'equipo' => 'Fresno',
                    'img' => 'https://www.mismarcadores.com//res/image/data/06vsC3xS-4AoDA83H.png',
                    'stadium_id' => 1,
                ),
            1211 =>
                array (
                    'equipo' => 'Memphis',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8jIhwFCa-MBNK205q.png',
                    'stadium_id' => 1,
                ),
            1212 =>
                array (
                    'equipo' => 'Ottawa Fury',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2JRItogl-63L5ipSK.png',
                    'stadium_id' => 1,
                ),
            1213 =>
                array (
                    'equipo' => 'Saint Louis FC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jJQ2qfyS-CvRa7Jd0.png',
                    'stadium_id' => 1,
                ),
            1214 =>
                array (
                    'equipo' => 'Bethlehem',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WrfFKgdM-xbCnNZMs.png',
                    'stadium_id' => 1,
                ),
            1215 =>
                array (
                    'equipo' => 'San Antonio',
                    'img' => 'https://www.mismarcadores.com//res/image/data/S8Tf7cYg-dzVY9HFD.png',
                    'stadium_id' => 1,
                ),
            1216 =>
                array (
                    'equipo' => 'Real Monarchs',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GhO9CRCr-bqoEGNZD.png',
                    'stadium_id' => 1,
                ),
            1217 =>
                array (
                    'equipo' => 'Tulsa Roughnecks',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ClJahbjl-KOduzx9h.png',
                    'stadium_id' => 2,
                ),
            1218 =>
                array (
                    'equipo' => 'Phoenix Rising',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vRmecnzB-z94Ig9WC.png',
                    'stadium_id' => 2,
                ),
            1219 =>
                array (
                    'equipo' => 'Orange County SC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6m8aiFxS-WEOIm0x7.png',
                    'stadium_id' => 2,
                ),
            1220 =>
                array (
                    'equipo' => 'Sacramento Republic',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CWDWbvCa-GxypOtEJ.png',
                    'stadium_id' => 2,
                ),
            1221 =>
                array (
                    'equipo' => 'Tacoma Defiance',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zuJHnbwS-zXQo73P5.png',
                    'stadium_id' => 2,
                ),
            1222 =>
                array (
                    'equipo' => 'Oklahoma City Energy',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jo1so6Cr-vFlb0wMC.png',
                    'stadium_id' => 2,
                ),
            1223 =>
                array (
                    'equipo' => 'Las Vegas Lights',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vDgIw0eM-dQDbZXJC.png',
                    'stadium_id' => 2,
                ),
            1224 =>
                array (
                    'equipo' => 'Rio Grande',
                    'img' => 'https://www.mismarcadores.com//res/image/data/judgopcM-zP4w3jjG.png',
                    'stadium_id' => 2,
                ),
            1225 =>
                array (
                    'equipo' => 'Reno',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UkyMCthl-Ea3MhToJ.png',
                    'stadium_id' => 1,
                ),
            1226 =>
                array (
                    'equipo' => 'Colorado Springs',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YXWLzwZg-UZJx345E.png',
                    'stadium_id' => 1,
                ),
            1227 =>
                array (
                    'equipo' => 'Tulevik',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WYPfBqjl-fLkp0Sq0.png',
                    'stadium_id' => 2,
                ),
            1228 =>
                array (
                    'equipo' => 'Levadia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lE0eh6h5-2RtBgZU5.png',
                    'stadium_id' => 2,
                ),
            1229 =>
                array (
                    'equipo' => 'Arsenal',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pfchdCg5-pU2IsJm8.png',
                    'stadium_id' => 1,
                ),
            1230 =>
                array (
                    'equipo' => 'Lyon',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rytJfXyS-IRbzmzRB.png',
                    'stadium_id' => 1,
                ),
            1231 =>
                array (
                    'equipo' => 'Francia Sub-19 F',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dQyvqDfM-K67WKkF1.png',
                    'stadium_id' => 1,
                ),
            1232 =>
                array (
                    'equipo' => 'Alemania Sub-19 F',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4UsHs2Da-Q9iMFoVq.png',
                    'stadium_id' => 1,
                ),
            1233 =>
                array (
                    'equipo' => 'Stallion',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IaZfgvgl-vm6tmHaq.png',
                    'stadium_id' => 1,
                ),
            1234 =>
                array (
                    'equipo' => 'Green Archers',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CMj9R7zB-xnnFdfgI.png',
                    'stadium_id' => 1,
                ),
            1235 =>
                array (
                    'equipo' => 'KPV',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xAt7fFwS-Ox3KDZUC.png',
                    'stadium_id' => 1,
                ),
            1236 =>
                array (
                    'equipo' => 'KuPS',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rF2aUqBr-GKeEz1pf.png',
                    'stadium_id' => 1,
                ),
            1237 =>
                array (
                    'equipo' => 'Mariehamn',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0WOF9zAr-GWJuiKMj.png',
                    'stadium_id' => 1,
                ),
            1238 =>
                array (
                    'equipo' => 'HIFK',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IPyrQkZA-00k6ywNJ.png',
                    'stadium_id' => 1,
                ),
            1239 =>
                array (
                    'equipo' => 'Rovaniemi',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rRZF6jeM-GCaBtV3N.png',
                    'stadium_id' => 2,
                ),
            1240 =>
                array (
                    'equipo' => 'Inter Turku',
                    'img' => 'https://www.mismarcadores.com//res/image/data/25XF6X9r-tEsP4vnr.png',
                    'stadium_id' => 2,
                ),
            1241 =>
                array (
                    'equipo' => 'Comunicaciones',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WzUyiQZA-vkmhBSTl.png',
                    'stadium_id' => 1,
                ),
            1242 =>
                array (
                    'equipo' => 'Cobán Imperial',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nuDm0RWg-lOp7Wlnp.png',
                    'stadium_id' => 1,
                ),
            1243 =>
                array (
                    'equipo' => 'Xelajú',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tMWOTFYg-rBwA3q3b.png',
                    'stadium_id' => 1,
                ),
            1244 =>
                array (
                    'equipo' => 'Municipal',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MZYiJsf5-xUfBkdNI.png',
                    'stadium_id' => 1,
                ),
            1245 =>
                array (
                    'equipo' => 'Antigua',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SONchlgl-prdlt3gn.png',
                    'stadium_id' => 2,
                ),
            1246 =>
                array (
                    'equipo' => 'Malacateco',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hto3r9g5-WlySUX4B.png',
                    'stadium_id' => 2,
                ),
            1247 =>
                array (
                    'equipo' => 'Santa Lucia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WxXUT2jl-W66k23rR.png',
                    'stadium_id' => 2,
                ),
            1248 =>
                array (
                    'equipo' => 'Sanarate',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xnRDkbyB-IRUXe8li.png',
                    'stadium_id' => 2,
                ),
            1249 =>
                array (
                    'equipo' => 'Guastatoya',
                    'img' => 'https://www.mismarcadores.com//res/image/data/x0zXxfyB-Kt04eJsQ.png',
                    'stadium_id' => 2,
                ),
            1250 =>
                array (
                    'equipo' => 'Iztapa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/U9ZpvoBr-0vf6H7b3.png',
                    'stadium_id' => 2,
                ),
            1251 =>
                array (
                    'equipo' => 'Vida',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ji6WCQhl-MB3Az4vp.png',
                    'stadium_id' => 1,
                ),
            1252 =>
                array (
                    'equipo' => 'UPNFM',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UqMp0Wh5-ri1ZTLcj.png',
                    'stadium_id' => 1,
                ),
            1253 =>
                array (
                    'equipo' => 'Real Sociedad',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UDoI6Kg5-bJqtKnKk.png',
                    'stadium_id' => 1,
                ),
            1254 =>
                array (
                    'equipo' => 'Real España',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QPHZHyg5-0I2MGl6R.png',
                    'stadium_id' => 1,
                ),
            1255 =>
                array (
                    'equipo' => 'Padang',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GCMr4XCr-KfHhOOQg.png',
                    'stadium_id' => 2,
                ),
            1256 =>
                array (
                    'equipo' => 'Persebaya',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AHGxaNwS-SEce4uOF.png',
                    'stadium_id' => 2,
                ),
            1257 =>
                array (
                    'equipo' => 'Cork City',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0ENE5W9r-YHXL4Skn.png',
                    'stadium_id' => 2,
                ),
            1258 =>
                array (
                    'equipo' => 'Shamrock Rovers',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fFf7ApCr-Od3wnX1T.png',
                    'stadium_id' => 2,
                ),
            1259 =>
                array (
                    'equipo' => 'Grindavik',
                    'img' => 'https://www.mismarcadores.com//res/image/data/n5LZzaYA-h2OhQNid.png',
                    'stadium_id' => 1,
                ),
            1260 =>
                array (
                    'equipo' => 'Vestmannaeyjar',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bLpEo3jl-2DRm8Vdr.png',
                    'stadium_id' => 1,
                ),
            1261 =>
                array (
                    'equipo' => 'Akureyri',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WxFKbFAr-QkT10FGe.png',
                    'stadium_id' => 1,
                ),
            1262 =>
                array (
                    'equipo' => 'Hafnarfjordur',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nTa7axf5-CITj9rF0.png',
                    'stadium_id' => 1,
                ),
            1263 =>
                array (
                    'equipo' => 'Akranes',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YwuwqLh5-IXk9bIsa.png',
                    'stadium_id' => 1,
                ),
            1264 =>
                array (
                    'equipo' => 'Valur',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GttxF9YA-zD8QbpCs.png',
                    'stadium_id' => 1,
                ),
            1265 =>
                array (
                    'equipo' => 'Fylkir',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KnsmlsAr-jD8yC319.png',
                    'stadium_id' => 1,
                ),
            1266 =>
                array (
                    'equipo' => 'KR Reykjavik',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AkXowoHG-Y3zSPydQ.png',
                    'stadium_id' => 1,
                ),
            1267 =>
                array (
                    'equipo' => 'B36 Torshavn',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6XekPLwS-EPrpwul2.png',
                    'stadium_id' => 1,
                ),
            1268 =>
                array (
                    'equipo' => 'Vikingur',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4QT5iwAr-rTG1pTaf.png',
                    'stadium_id' => 1,
                ),
            1269 =>
                array (
                    'equipo' => 'Nes Tziona',
                    'img' => 'https://www.mismarcadores.com//res/image/data/M9JEr8fM-pv0U2x44.png',
                    'stadium_id' => 2,
                ),
            1270 =>
                array (
                    'equipo' => 'Astana',
                    'img' => 'https://www.mismarcadores.com//res/image/data/b5FoJ2wS-48nguKbG.png',
                    'stadium_id' => 1,
                ),
            1271 =>
                array (
                    'equipo' => 'Taraz',
                    'img' => 'https://www.mismarcadores.com//res/image/data/v1TfzdDa-nqEmwA3l.png',
                    'stadium_id' => 1,
                ),
            1272 =>
                array (
                    'equipo' => 'Tobol',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2TwNgjxS-QZCixUIf.png',
                    'stadium_id' => 2,
                ),
            1273 =>
                array (
                    'equipo' => 'Kaisar',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vXhpV5yB-nT9RhmTq.png',
                    'stadium_id' => 2,
                ),
            1274 =>
                array (
                    'equipo' => 'Ordabasy',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pdvdOHcM-EgAv9EUh.png',
                    'stadium_id' => 1,
                ),
            1275 =>
                array (
                    'equipo' => 'Ertis Pavlodar',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bqISFpCa-Sdz6EVqe.png',
                    'stadium_id' => 1,
                ),
            1276 =>
                array (
                    'equipo' => 'Metta/LU',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pAXYJ2Wg-hl3yPnbL.png',
                    'stadium_id' => 2,
                ),
            1277 =>
                array (
                    'equipo' => 'FK Liepaja',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fXKTrpXg-8lgNlIz9.png',
                    'stadium_id' => 2,
                ),
            1278 =>
                array (
                    'equipo' => 'Ventspils',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CSpI3K9r-bw6sMZPR.png',
                    'stadium_id' => 2,
                ),
            1279 =>
                array (
                    'equipo' => 'BFC Daugavpils',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vHb4EJZA-KI9dmVb7.png',
                    'stadium_id' => 2,
                ),
            1280 =>
                array (
                    'equipo' => 'RFS',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OUNqzpXg-r5QtZPe2.png',
                    'stadium_id' => 1,
                ),
            1281 =>
                array (
                    'equipo' => 'Valmiera',
                    'img' => 'https://www.mismarcadores.com//res/image/data/r5XasqYg-bFowtqns.png',
                    'stadium_id' => 1,
                ),
            1282 =>
                array (
                    'equipo' => 'León',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pz5VhoAr-dfDfv5tR.png',
                    'stadium_id' => 2,
                ),
            1283 =>
                array (
                    'equipo' => 'Club América',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xKIBpcEG-EkffKDRG.png',
                    'stadium_id' => 2,
                ),
            1284 =>
                array (
                    'equipo' => 'Cruz Azul',
                    'img' => 'https://www.mismarcadores.com//res/image/data/juUdUvvS-zaejLgCA.png',
                    'stadium_id' => 1,
                ),
            1285 =>
                array (
                    'equipo' => 'Toluca',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GAodfoZA-0zOaESk5.png',
                    'stadium_id' => 1,
                ),
            1286 =>
                array (
                    'equipo' => 'U.N.A.M.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2mlyLKEG-GEtusY6Q.png',
                    'stadium_id' => 2,
                ),
            1287 =>
                array (
                    'equipo' => 'Necaxa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pdhMDRXg-Qs1ifK8m.png',
                    'stadium_id' => 2,
                ),
            1288 =>
                array (
                    'equipo' => 'Golden Arrows (Rsa)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ji3YCQFG-tWfupjVk.png',
                    'stadium_id' => 2,
                ),
            1289 =>
                array (
                    'equipo' => 'Uthongathi (Rsa)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/d4OXYNyS-rPOePRPF.png',
                    'stadium_id' => 2,
                ),
            1290 =>
                array (
                    'equipo' => 'Pyunik (Arm)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pKkY2dGG-SKr8mIAb.png',
                    'stadium_id' => 2,
                ),
            1291 =>
                array (
                    'equipo' => 'FC Van (Arm)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ptHBB8eM-b7RsXBLt.png',
                    'stadium_id' => 2,
                ),
            1292 =>
                array (
                    'equipo' => 'Navalcarnero (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IDrMxaYA-6yg7Quw7.png',
                    'stadium_id' => 1,
                ),
            1293 =>
                array (
                    'equipo' => 'Rayo Majadahonda (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/61cN6tWg-lOvIA0RO.png',
                    'stadium_id' => 1,
                ),
            1294 =>
                array (
                    'equipo' => 'AD Torrejon (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6ZBIaIzB-dlIoDahI.png',
                    'stadium_id' => 2,
                ),
            1295 =>
                array (
                    'equipo' => 'Slavia Praga B (Cze)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vVY3uoCr-2VfY2NuM.png',
                    'stadium_id' => 2,
                ),
            1296 =>
                array (
                    'equipo' => 'Stechovice (Cze)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KlyHSXGG-nkejXUBr.png',
                    'stadium_id' => 2,
                ),
            1297 =>
                array (
                    'equipo' => 'Werder Bremen (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lEp5rDFG-C6khRCLH.png',
                    'stadium_id' => 2,
                ),
            1298 =>
                array (
                    'equipo' => 'Eibar (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CvetxaAr-M9doLjp7.png',
                    'stadium_id' => 2,
                ),
            1299 =>
                array (
                    'equipo' => 'Eggendorf (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xCVYoGYg-fJtOb5z8.png',
                    'stadium_id' => 1,
                ),
            1300 =>
                array (
                    'equipo' => 'Wiener Linien (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0lEAvbwS-O4X73ytb.png',
                    'stadium_id' => 1,
                ),
            1301 =>
                array (
                    'equipo' => 'Boavista (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2eSLVLh5-EcjMjsDD.png',
                    'stadium_id' => 1,
                ),
            1302 =>
                array (
                    'equipo' => 'Tondela (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xQuc8ZYg-YFbBO9dT.png',
                    'stadium_id' => 1,
                ),
            1303 =>
                array (
                    'equipo' => 'FC Alverca (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GAAM0VyS-dppfnV4c.png',
                    'stadium_id' => 2,
                ),
            1304 =>
                array (
                    'equipo' => '1º Dezembro (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xlGn7eFa-UgQ9Zm2G.png',
                    'stadium_id' => 2,
                ),
            1305 =>
                array (
                    'equipo' => 'Feyenoord (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hxdMgrGG-nuE5DXF1.png',
                    'stadium_id' => 2,
                ),
            1306 =>
                array (
                    'equipo' => 'Southampton (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fmA9gnyB-Ozt88U7U.png',
                    'stadium_id' => 2,
                ),
            1307 =>
                array (
                    'equipo' => 'Baumberg (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pr52Ynh5-2LHA8MWj.png',
                    'stadium_id' => 1,
                ),
            1308 =>
                array (
                    'equipo' => 'Friesdorf (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tKw4k4YA-YXoSaBr3.png',
                    'stadium_id' => 1,
                ),
            1309 =>
                array (
                    'equipo' => 'Bayer Leverkusen (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OWpaDOYA-YFjlSh6B.png',
                    'stadium_id' => 2,
                ),
            1310 =>
                array (
                    'equipo' => 'Heracles (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0KH1euzB-nydYNje4.png',
                    'stadium_id' => 2,
                ),
            1311 =>
                array (
                    'equipo' => 'Germania Ratingen (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4KXW4nYg-8Ihnoxye.png',
                    'stadium_id' => 1,
                ),
            1312 =>
                array (
                    'equipo' => 'Hennef (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hlbsIse5-t46qXtt6.png',
                    'stadium_id' => 1,
                ),
            1313 =>
                array (
                    'equipo' => 'SpVgg Sterkrade-Nord (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Moykc6ZA-YJSyEJ0M.png',
                    'stadium_id' => 1,
                ),
            1314 =>
                array (
                    'equipo' => 'Remscheid (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jmWD5XAr-GYQS6bNC.png',
                    'stadium_id' => 1,
                ),
            1315 =>
                array (
                    'equipo' => 'Twente (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/n9hVHBcM-xUnkdXKi.png',
                    'stadium_id' => 2,
                ),
            1316 =>
                array (
                    'equipo' => 'KSV Roeselare (Bel)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WIkw5nf5-t4YStIHU.png',
                    'stadium_id' => 1,
                ),
            1317 =>
                array (
                    'equipo' => 'Saint Eloois (Bel)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rmOm90Ar-4EgPd7o6.png',
                    'stadium_id' => 1,
                ),
            1318 =>
                array (
                    'equipo' => 'Middlesbrough (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ongu1qAr-rBodzytr.png',
                    'stadium_id' => 2,
                ),
            1319 =>
                array (
                    'equipo' => 'Saint-Étienne (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ImkZgXYA-Qk1sBuEM.png',
                    'stadium_id' => 2,
                ),
            1320 =>
                array (
                    'equipo' => 'Mönchengladbach (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rDRx1VXg-xQEMKj97.png',
                    'stadium_id' => 1,
                ),
            1321 =>
                array (
                    'equipo' => 'Athletic Club (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/E9o4aVEa-xGwCks5S.png',
                    'stadium_id' => 1,
                ),
            1322 =>
                array (
                    'equipo' => 'Stoke (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/W4N0OQZA-jPU1meWN.png',
                    'stadium_id' => 2,
                ),
            1323 =>
                array (
                    'equipo' => 'Rangers (Sco)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/A7Ntv6g5-ARU7oy8P.png',
                    'stadium_id' => 1,
                ),
            1324 =>
                array (
                    'equipo' => 'Derby (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QsZBqwZA-xhVV52PM.png',
                    'stadium_id' => 1,
                ),
            1325 =>
                array (
                    'equipo' => 'Reading (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hfyXOnyB-6P8qohf0.png',
                    'stadium_id' => 1,
                ),
            1326 =>
                array (
                    'equipo' => 'Sheffield Wed (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6w7bTmyB-dlIB2tc0.png',
                    'stadium_id' => 2,
                ),
            1327 =>
                array (
                    'equipo' => 'Girondins (Fra)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jXauMLBr-UH4VDsU3.png',
                    'stadium_id' => 1,
                ),
            1328 =>
                array (
                    'equipo' => 'Galatasaray (Tur)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ziy5KsdM-ITBNFtL3.png',
                    'stadium_id' => 1,
                ),
            1329 =>
                array (
                    'equipo' => 'Vitesse (Ned)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xh7ZyoBr-nydYNje4.png',
                    'stadium_id' => 2,
                ),
            1330 =>
                array (
                    'equipo' => 'Trento (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SxJt85cM-x2zStCjd.png',
                    'stadium_id' => 1,
                ),
            1331 =>
                array (
                    'equipo' => 'Hapoel Azor (Isr)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/W8kVtzDr-6acNMbx8.png',
                    'stadium_id' => 1,
                ),
            1332 =>
                array (
                    'equipo' => 'Beitar Yavne (Isr)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'stadium_id' => 1,
                ),
            1333 =>
                array (
                    'equipo' => 'Padova (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QRjZtVeM-MyFMnRPS.png',
                    'stadium_id' => 2,
                ),
            1334 =>
                array (
                    'equipo' => 'Virtus Verona (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vBR3yayB-tvFu1WNf.png',
                    'stadium_id' => 2,
                ),
            1335 =>
                array (
                    'equipo' => 'Piacenza (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IHR3AdwS-pI6ga41n.png',
                    'stadium_id' => 2,
                ),
            1336 =>
                array (
                    'equipo' => 'Pianese (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/K6ofJVh5-GjrLcLu5.png',
                    'stadium_id' => 2,
                ),
            1337 =>
                array (
                    'equipo' => 'Follonica Gavorrano (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OGPDn5GG-6onMeSVh.png',
                    'stadium_id' => 2,
                ),
            1338 =>
                array (
                    'equipo' => 'Renova (Mkd)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Kvzox3yS-MTdUWGit.png',
                    'stadium_id' => 2,
                ),
            1339 =>
                array (
                    'equipo' => 'Gjilani (Kos)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MudRlvcM-nFQkmu3d.png',
                    'stadium_id' => 2,
                ),
            1340 =>
                array (
                    'equipo' => 'Santa Clara (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I1LuKXXg-fynuQmWN.png',
                    'stadium_id' => 2,
                ),
            1341 =>
                array (
                    'equipo' => 'SC Praiense (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dtB3zOWg-vFrgEwW7.png',
                    'stadium_id' => 2,
                ),
            1342 =>
                array (
                    'equipo' => 'Din. Vranje (Srb)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pMaWz9YA-2LyMyzzG.png',
                    'stadium_id' => 1,
                ),
            1343 =>
                array (
                    'equipo' => 'Radnicki Pirot (Srb)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nqeJZojl-fizDLkFE.png',
                    'stadium_id' => 1,
                ),
            1344 =>
                array (
                    'equipo' => 'Novara (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dETX4AzS-MgYpDZtn.png',
                    'stadium_id' => 2,
                ),
            1345 =>
                array (
                    'equipo' => 'Arconatese (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bgl0i2Wg-YDXa4KOd.png',
                    'stadium_id' => 2,
                ),
            1346 =>
                array (
                    'equipo' => 'Pro Vercelli (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/APvp4VxS-O8XFapMt.png',
                    'stadium_id' => 1,
                ),
            1347 =>
                array (
                    'equipo' => 'Casale (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IVrR4XzB-pOcufAsp.png',
                    'stadium_id' => 1,
                ),
            1348 =>
                array (
                    'equipo' => 'Salernitana (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/K8hPw2h5-rXWCsqZ6.png',
                    'stadium_id' => 2,
                ),
            1349 =>
                array (
                    'equipo' => 'Picerno (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SzAHHpeM-tWSDHoo0.png',
                    'stadium_id' => 2,
                ),
            1350 =>
                array (
                    'equipo' => 'Ajka (Hun)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zVMN5Y9r-OGwWdjcs.png',
                    'stadium_id' => 2,
                ),
            1351 =>
                array (
                    'equipo' => 'Szentlorinc (Hun)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fgnvMSfM-t6LUaioP.png',
                    'stadium_id' => 2,
                ),
            1352 =>
                array (
                    'equipo' => 'Albacete B (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fX5P3qDa-vkDLBPuI.png',
                    'stadium_id' => 1,
                ),
            1353 =>
                array (
                    'equipo' => 'Gubbio (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Gxavh0yB-dIT09itB.png',
                    'stadium_id' => 1,
                ),
            1354 =>
                array (
                    'equipo' => 'Livorno (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CUHg6YzS-YuS48BeH.png',
                    'stadium_id' => 1,
                ),
            1355 =>
                array (
                    'equipo' => 'Nápoles (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lhPsgJWg-zyNNicC8.png',
                    'stadium_id' => 2,
                ),
            1356 =>
                array (
                    'equipo' => 'Heviz (Hun)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/prm46TYA-vHJLw6aC.png',
                    'stadium_id' => 1,
                ),
            1357 =>
                array (
                    'equipo' => 'Ciliverghe Mazzano (Ita)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/46eUKVYg-tj5Tt6bh.png',
                    'stadium_id' => 1,
                ),
            1358 =>
                array (
                    'equipo' => 'Wels (Aut)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/v3jGJpyS-zsrztrT2.png',
                    'stadium_id' => 1,
                ),
            1359 =>
                array (
                    'equipo' => 'Eintracht Frankfurt (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/f9dVVYCa-h85SGgwF.png',
                    'stadium_id' => 1,
                ),
            1360 =>
                array (
                    'equipo' => 'Zarkovo (Srb)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pltV28hl-QuE2XQrG.png',
                    'stadium_id' => 2,
                ),
            1361 =>
                array (
                    'equipo' => 'Sindjelic Beograd (Srb)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rZbYT5h5-Obx6G9TF.png',
                    'stadium_id' => 2,
                ),
            1362 =>
                array (
                    'equipo' => 'Colonia (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8hxnRHEa-Umm0PjjU.png',
                    'stadium_id' => 1,
                ),
            1363 =>
                array (
                    'equipo' => 'Villarreal (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/65Z85Uh5-noNk3ENb.png',
                    'stadium_id' => 1,
                ),
            1364 =>
                array (
                    'equipo' => 'Al-Ettifaq (Sau)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ED6MVdBr-ShOyhf7H.png',
                    'stadium_id' => 2,
                ),
            1365 =>
                array (
                    'equipo' => 'Mallorca (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pSBNl3eM-llYeq24I.png',
                    'stadium_id' => 1,
                ),
            1366 =>
                array (
                    'equipo' => 'Poblense (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nqk1I3Ea-K2mhzmOF.png',
                    'stadium_id' => 1,
                ),
            1367 =>
                array (
                    'equipo' => 'Sporting CP (Por)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OWbPc9il-WYr1gV4A.png',
                    'stadium_id' => 2,
                ),
            1368 =>
                array (
                    'equipo' => 'Valencia (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/O2FpIYg5-KYu4i3zG.png',
                    'stadium_id' => 2,
                ),
            1369 =>
                array (
                    'equipo' => 'Pozoblanco (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YDTSu2Yg-QFbU0qg7.png',
                    'stadium_id' => 2,
                ),
            1370 =>
                array (
                    'equipo' => 'Puebla (Mex)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EkptxjDa-jsxeldjR.png',
                    'stadium_id' => 1,
                ),
            1371 =>
                array (
                    'equipo' => 'Real Betis (Esp)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hvyaw5HG-lUcXmrQf.png',
                    'stadium_id' => 1,
                ),
            1372 =>
                array (
                    'equipo' => 'AC Milan',
                    'img' => 'https://www.mismarcadores.com//res/image/data/htYjIjFa-bDzxUgK1.png',
                    'stadium_id' => 2,
                ),
            1373 =>
                array (
                    'equipo' => 'Benfica',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AZHdTBf5-APs5hkKG.png',
                    'stadium_id' => 2,
                ),
            1374 =>
                array (
                    'equipo' => 'Hoffenheim F (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0G073zcM-hUrEBrXB.png',
                    'stadium_id' => 1,
                ),
            1375 =>
                array (
                    'equipo' => 'Frankfurt F (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pEGuoxxS-KQ3AjsTj.png',
                    'stadium_id' => 1,
                ),
            1376 =>
                array (
                    'equipo' => 'Arsenal F (Eng)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WbvWGBEG-KObIcgKK.png',
                    'stadium_id' => 2,
                ),
            1377 =>
                array (
                    'equipo' => 'Bayern Múnich F (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GzHM82h5-YudTYrip.png',
                    'stadium_id' => 2,
                ),
            1378 =>
                array (
                    'equipo' => 'Sand F (Ger)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lOwkncWg-06KvUw1d.png',
                    'stadium_id' => 2,
                ),
            1379 =>
                array (
                    'equipo' => 'Young Boys F (Sui)',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Yo3mQzhl-zmksvUZp.png',
                    'stadium_id' => 2,
                ),
            1380 =>
                array (
                    'equipo' => 'Diriangen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IsQcY3Ea-EX251rmM.png',
                    'stadium_id' => 2,
                ),
            1381 =>
                array (
                    'equipo' => 'Ocotal',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rRfnyBYA-Aooqf0ud.png',
                    'stadium_id' => 2,
                ),
            1382 =>
                array (
                    'equipo' => 'Real Madriz',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YRHyf6HG-h4mydMAq.png',
                    'stadium_id' => 1,
                ),
            1383 =>
                array (
                    'equipo' => 'Jalapa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8xYWI9dM-EX251rmM.png',
                    'stadium_id' => 2,
                ),
            1384 =>
                array (
                    'equipo' => 'Ferretti',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xdEkYhZg-jDhNFiF4.png',
                    'stadium_id' => 2,
                ),
            1385 =>
                array (
                    'equipo' => 'Tromsdalen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Y5sRHacM-pMQnflYM.png',
                    'stadium_id' => 1,
                ),
            1386 =>
                array (
                    'equipo' => 'Strømmen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zLlNakCr-fqYOah4o.png',
                    'stadium_id' => 1,
                ),
            1387 =>
                array (
                    'equipo' => 'Aalesund',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IJrLVeZA-4dl9tBPj.png',
                    'stadium_id' => 1,
                ),
            1388 =>
                array (
                    'equipo' => 'Nest-Sotra',
                    'img' => 'https://www.mismarcadores.com//res/image/data/plJGFwdM-d2ZV9IL5.png',
                    'stadium_id' => 1,
                ),
            1389 =>
                array (
                    'equipo' => 'Ham-Kam',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jcde7KFG-GQK0VqvP.png',
                    'stadium_id' => 1,
                ),
            1390 =>
                array (
                    'equipo' => 'Sandefjord',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EeabMpDa-f3bFukJT.png',
                    'stadium_id' => 1,
                ),
            1391 =>
                array (
                    'equipo' => 'Jerv',
                    'img' => 'https://www.mismarcadores.com//res/image/data/88zynmil-CIVWWa8J.png',
                    'stadium_id' => 1,
                ),
            1392 =>
                array (
                    'equipo' => 'Sogndal',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4fiiiOzS-CEDhSJRF.png',
                    'stadium_id' => 1,
                ),
            1393 =>
                array (
                    'equipo' => 'KFUM Oslo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MX4Zzug5-buRK1HZL.png',
                    'stadium_id' => 2,
                ),
            1394 =>
                array (
                    'equipo' => 'Raufoss',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xO3Qolh5-vk17sBlH.png',
                    'stadium_id' => 2,
                ),
            1395 =>
                array (
                    'equipo' => 'Kongsvinger',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0hHN7CYA-E7wKWgza.png',
                    'stadium_id' => 2,
                ),
            1396 =>
                array (
                    'equipo' => 'Skeid',
                    'img' => 'https://www.mismarcadores.com//res/image/data/C8AEDbcM-8vhGADCQ.png',
                    'stadium_id' => 2,
                ),
            1397 =>
                array (
                    'equipo' => 'Notodden',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CQHbn1cM-4p6AJjM8.png',
                    'stadium_id' => 1,
                ),
            1398 =>
                array (
                    'equipo' => 'Sandnes',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jR9d2gGG-d0GpUuc3.png',
                    'stadium_id' => 1,
                ),
            1399 =>
                array (
                    'equipo' => 'Ull/Kisa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8GNrusyS-6aLAdKmo.png',
                    'stadium_id' => 1,
                ),
            1400 =>
                array (
                    'equipo' => 'Start',
                    'img' => 'https://www.mismarcadores.com//res/image/data/j35EsFDa-W4cSLH4q.png',
                    'stadium_id' => 1,
                ),
            1401 =>
                array (
                    'equipo' => 'Olimpia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OEyQgGEa-rPbahbw0.png',
                    'stadium_id' => 2,
                ),
            1402 =>
                array (
                    'equipo' => 'Sp. Luqueño',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6BPq9VdM-xd3hL2WB.png',
                    'stadium_id' => 2,
                ),
            1403 =>
                array (
                    'equipo' => 'Korona',
                    'img' => 'https://www.mismarcadores.com//res/image/data/x49GE6zB-4W2GFfCf.png',
                    'stadium_id' => 2,
                ),
            1404 =>
                array (
                    'equipo' => 'Legia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IwZu7MEa-fmx2YDXT.png',
                    'stadium_id' => 2,
                ),
            1405 =>
                array (
                    'equipo' => 'Lechia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ey5lk3e5-b750pWw8.png',
                    'stadium_id' => 1,
                ),
            1406 =>
                array (
                    'equipo' => 'Wisla',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ddQ6Z8wS-UZu9gWa2.png',
                    'stadium_id' => 1,
                ),
            1407 =>
                array (
                    'equipo' => 'Slask',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bcCeeCCr-MBNlZnaS.png',
                    'stadium_id' => 1,
                ),
            1408 =>
                array (
                    'equipo' => 'Piast',
                    'img' => 'https://www.mismarcadores.com//res/image/data/440nnhEa-hjKHUCzS.png',
                    'stadium_id' => 1,
                ),
            1409 =>
                array (
                    'equipo' => 'Katowice',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Mo29kDXg-rqRy9QHu.png',
                    'stadium_id' => 2,
                ),
            1410 =>
                array (
                    'equipo' => 'Pruszkow',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tAoyjEzS-Io78bXak.png',
                    'stadium_id' => 2,
                ),
            1411 =>
                array (
                    'equipo' => 'Elblag',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rZeGmdZg-6ZafdLOS.png',
                    'stadium_id' => 1,
                ),
            1412 =>
                array (
                    'equipo' => 'Lech 2',
                    'img' => 'https://www.mismarcadores.com//res/image/data/pO0TSDBr-zcOKgKul.png',
                    'stadium_id' => 1,
                ),
            1413 =>
                array (
                    'equipo' => 'Casa Pia',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xdnK4myB-AR2WAT1a.png',
                    'stadium_id' => 1,
                ),
            1414 =>
                array (
                    'equipo' => 'Vilafranquense',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0CZa1JxS-djBCLTH3.png',
                    'stadium_id' => 1,
                ),
            1415 =>
                array (
                    'equipo' => 'Leixoes',
                    'img' => 'https://www.mismarcadores.com//res/image/data/O4X4T8Wg-CQLKWvI8.png',
                    'stadium_id' => 2,
                ),
            1416 =>
                array (
                    'equipo' => 'CD Cova da Piedade',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I70uhndM-d6TlOeub.png',
                    'stadium_id' => 2,
                ),
            1417 =>
                array (
                    'equipo' => 'Oliveirense',
                    'img' => 'https://www.mismarcadores.com//res/image/data/d0xDuzFa-2eWj8bzp.png',
                    'stadium_id' => 2,
                ),
            1418 =>
                array (
                    'equipo' => 'Mafra',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bgDNH4Ea-xYSqniSu.png',
                    'stadium_id' => 2,
                ),
            1419 =>
                array (
                    'equipo' => 'Penafiel',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OxHRsTDa-Sveivxfl.png',
                    'stadium_id' => 1,
                ),
            1420 =>
                array (
                    'equipo' => 'Academico Viseu',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SOcAaAdM-84VuT51k.png',
                    'stadium_id' => 1,
                ),
            1421 =>
                array (
                    'equipo' => 'Covilha',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ERP6Wuhl-d29W5aN5.png',
                    'stadium_id' => 2,
                ),
            1422 =>
                array (
                    'equipo' => 'Varzim',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8MOnrFYg-IFUpPyQi.png',
                    'stadium_id' => 2,
                ),
            1423 =>
                array (
                    'equipo' => 'Jablonec',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2XWlXVil-W2ptf0iE.png',
                    'stadium_id' => 1,
                ),
            1424 =>
                array (
                    'equipo' => 'Slovacko',
                    'img' => 'https://www.mismarcadores.com//res/image/data/l8kSO0Ca-MuNUeh1k.png',
                    'stadium_id' => 1,
                ),
            1425 =>
                array (
                    'equipo' => 'Mlada Boleslav',
                    'img' => 'https://www.mismarcadores.com//res/image/data/raddYQYg-MqPVD7XT.png',
                    'stadium_id' => 2,
                ),
            1426 =>
                array (
                    'equipo' => 'Opava',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ptvbnJyS-vLwnmmkq.png',
                    'stadium_id' => 2,
                ),
            1427 =>
                array (
                    'equipo' => 'Slavia Praga',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vJ0yQjf5-jsEBEawr.png',
                    'stadium_id' => 1,
                ),
            1428 =>
                array (
                    'equipo' => 'Sigma Olomouc',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SnkRvZil-8ErAVuD4.png',
                    'stadium_id' => 1,
                ),
            1429 =>
                array (
                    'equipo' => 'Zizkov',
                    'img' => 'https://www.mismarcadores.com//res/image/data/23FeecXg-xf8KIF82.png',
                    'stadium_id' => 1,
                ),
            1430 =>
                array (
                    'equipo' => 'Sokolov',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ddutCidM-Gp7OHZN8.png',
                    'stadium_id' => 1,
                ),
            1431 =>
                array (
                    'equipo' => 'Varnsdorf',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xnqvBIfM-WUAbrirl.png',
                    'stadium_id' => 1,
                ),
            1432 =>
                array (
                    'equipo' => 'Trinec',
                    'img' => 'https://www.mismarcadores.com//res/image/data/O8rDflHG-KrHEMCve.png',
                    'stadium_id' => 1,
                ),
            1433 =>
                array (
                    'equipo' => 'Vysehrad',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AXBODLXg-b77bxetJ.png',
                    'stadium_id' => 1,
                ),
            1434 =>
                array (
                    'equipo' => 'Usti n. L.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GMrv6pWg-ddC2bDqb.png',
                    'stadium_id' => 1,
                ),
            1435 =>
                array (
                    'equipo' => 'Univ. Craiova',
                    'img' => 'https://www.mismarcadores.com//res/image/data/r5wfQT9r-0SBybEQf.png',
                    'stadium_id' => 2,
                ),
            1436 =>
                array (
                    'equipo' => 'Chindia Targoviste',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vgHusaZA-tdv06ygt.png',
                    'stadium_id' => 2,
                ),
            1437 =>
                array (
                    'equipo' => 'Viitorul Constanta',
                    'img' => 'https://www.mismarcadores.com//res/image/data/viSJ4qyS-nJIHxwPP.png',
                    'stadium_id' => 2,
                ),
            1438 =>
                array (
                    'equipo' => 'FC Hermannstadt',
                    'img' => 'https://www.mismarcadores.com//res/image/data/p8lElnyS-bXzj14hj.png',
                    'stadium_id' => 2,
                ),
            1439 =>
                array (
                    'equipo' => 'Orenburg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SGQbHBAr-OElIeDr5.png',
                    'stadium_id' => 1,
                ),
            1440 =>
                array (
                    'equipo' => 'Zenit SPb',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vwx9ckCa-6a5BpM1s.png',
                    'stadium_id' => 1,
                ),
            1441 =>
                array (
                    'equipo' => 'Arsenal Tula',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6LihxQWg-nRAIBAta.png',
                    'stadium_id' => 1,
                ),
            1442 =>
                array (
                    'equipo' => 'Rostov',
                    'img' => 'https://www.mismarcadores.com//res/image/data/j3v69SwS-hM45Xf08.png',
                    'stadium_id' => 1,
                ),
            1443 =>
                array (
                    'equipo' => 'CSKA Moscú',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OhjmaZkl-xbblt7Ae.png',
                    'stadium_id' => 2,
                ),
            1444 =>
                array (
                    'equipo' => 'Lokomotiv Moscú',
                    'img' => 'https://www.mismarcadores.com//res/image/data/4dVn6ugl-hQ4TiqhA.png',
                    'stadium_id' => 2,
                ),
            1445 =>
                array (
                    'equipo' => 'Luch',
                    'img' => 'https://www.mismarcadores.com//res/image/data/x6kmSPzS-0lVSPdik.png',
                    'stadium_id' => 1,
                ),
            1446 =>
                array (
                    'equipo' => 'Yaroslavl',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IFabsmYg-WbMUDdnf.png',
                    'stadium_id' => 1,
                ),
            1447 =>
                array (
                    'equipo' => 'SKA Khabarovsk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6ehBz3f5-SWItBfWC.png',
                    'stadium_id' => 1,
                ),
            1448 =>
                array (
                    'equipo' => 'F. Voronezh',
                    'img' => 'https://www.mismarcadores.com//res/image/data/IicwHeg5-YL9CYl39.png',
                    'stadium_id' => 1,
                ),
            1449 =>
                array (
                    'equipo' => 'Yenisey',
                    'img' => 'https://www.mismarcadores.com//res/image/data/21fg8uEa-Umo4hjjD.png',
                    'stadium_id' => 1,
                ),
            1450 =>
                array (
                    'equipo' => 'Krasnodar 2',
                    'img' => 'https://www.mismarcadores.com//res/image/data/W82o7eCa-zuywICo4.png',
                    'stadium_id' => 1,
                ),
            1451 =>
                array (
                    'equipo' => 'Tom Tomsk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rssdm4Wg-ltKxCzH6.png',
                    'stadium_id' => 1,
                ),
            1452 =>
                array (
                    'equipo' => 'Tekstilshtik',
                    'img' => 'https://www.mismarcadores.com//res/image/data/00hrksDr-6Bou8T9j.png',
                    'stadium_id' => 1,
                ),
            1453 =>
                array (
                    'equipo' => 'M. Saransk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WAIU2Hh5-Uo69I79B.png',
                    'stadium_id' => 2,
                ),
            1454 =>
                array (
                    'equipo' => 'FK Chayka',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ATfW0CCr-SOSy3oNS.png',
                    'stadium_id' => 2,
                ),
            1455 =>
                array (
                    'equipo' => 'Nizhny Novgorod',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dU6JGFBr-Ii0xjOW6.png',
                    'stadium_id' => 1,
                ),
            1456 =>
                array (
                    'equipo' => 'Torpedo Moscú',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bg1rryhl-4YRRnODj.png',
                    'stadium_id' => 1,
                ),
            1457 =>
                array (
                    'equipo' => 'Baltika',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xAd6j3Da-SCWjDngP.png',
                    'stadium_id' => 1,
                ),
            1458 =>
                array (
                    'equipo' => 'Chertanovo M.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/reWngHxS-6B7wqJCc.png',
                    'stadium_id' => 1,
                ),
            1459 =>
                array (
                    'equipo' => 'Kursk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6mhDztg5-WG9MaRts.png',
                    'stadium_id' => 1,
                ),
            1460 =>
                array (
                    'equipo' => 'Neftekhimik',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KdsmlqwS-EeD0EAdd.png',
                    'stadium_id' => 1,
                ),
            1461 =>
                array (
                    'equipo' => 'R. Volgograd',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YNewEqhl-hvxDyMis.png',
                    'stadium_id' => 2,
                ),
            1462 =>
                array (
                    'equipo' => 'Khimki',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0jVBI0il-ltKxCzH6.png',
                    'stadium_id' => 2,
                ),
            1463 =>
                array (
                    'equipo' => 'Ulyanovsk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/p8rKGPjl-84qTGdXO.png',
                    'stadium_id' => 2,
                ),
            1464 =>
                array (
                    'equipo' => 'Khimik Avgust',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xK9d96wS-IJhnxAm2.png',
                    'stadium_id' => 2,
                ),
            1465 =>
                array (
                    'equipo' => 'Zenit Irkutsk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/r9Rx7KdM-tru88L8h.png',
                    'stadium_id' => 2,
                ),
            1466 =>
                array (
                    'equipo' => 'Chita',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2aBj1cCr-6NHpAEoJ.png',
                    'stadium_id' => 2,
                ),
            1467 =>
                array (
                    'equipo' => 'Ararat Moscow',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ymhh5dEG-rPxy2vRj.png',
                    'stadium_id' => 2,
                ),
            1468 =>
                array (
                    'equipo' => 'Kolomna',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xzR8Hnil-vXVynjXm.png',
                    'stadium_id' => 2,
                ),
            1469 =>
                array (
                    'equipo' => 'Dolgoprudny',
                    'img' => 'https://www.mismarcadores.com//res/image/data/MsyFGOBr-Sn9suX6D.png',
                    'stadium_id' => 1,
                ),
            1470 =>
                array (
                    'equipo' => 'Krasnogorsk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/YR9piQcM-KE5W5aVc.png',
                    'stadium_id' => 1,
                ),
            1471 =>
                array (
                    'equipo' => 'Dynamo Barnaul',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nXp9Nih5-ptFHsWRI.png',
                    'stadium_id' => 1,
                ),
            1472 =>
                array (
                    'equipo' => 'FK Novosibirsk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Y7WI3qCr-vHTF4Zw9.png',
                    'stadium_id' => 1,
                ),
            1473 =>
                array (
                    'equipo' => 'Chelyabinsk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/z3jg1VYA-fVKKnHq8.png',
                    'stadium_id' => 2,
                ),
            1474 =>
                array (
                    'equipo' => 'Tyumen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ARHB4pXg-M3smXNCO.png',
                    'stadium_id' => 2,
                ),
            1475 =>
                array (
                    'equipo' => 'FC Zvezda Perm',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KGvn6cf5-2ssWJao7.png',
                    'stadium_id' => 1,
                ),
            1476 =>
                array (
                    'equipo' => 'Zenit-Izhevsk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0GYNZJFG-IJWqiw08.png',
                    'stadium_id' => 1,
                ),
            1477 =>
                array (
                    'equipo' => 'Magnitogorsk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nutSrNhl-bNk7TKta.png',
                    'stadium_id' => 2,
                ),
            1478 =>
                array (
                    'equipo' => 'Nosta',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rDaObqDr-dtpIOD0C.png',
                    'stadium_id' => 2,
                ),
            1479 =>
                array (
                    'equipo' => 'Delin Izhevsk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QFWctFEa-8h5eq9KN.png',
                    'stadium_id' => 1,
                ),
            1480 =>
                array (
                    'equipo' => 'Kamaz',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jHNOiMBr-8pRT5K9U.png',
                    'stadium_id' => 1,
                ),
            1481 =>
                array (
                    'equipo' => 'Krasnyy SGAFKST',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WEn8jodM-lUwXIffj.png',
                    'stadium_id' => 2,
                ),
            1482 =>
                array (
                    'equipo' => 'Zvezda St. Peterburg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vLICFLEa-06pF651b.png',
                    'stadium_id' => 2,
                ),
            1483 =>
                array (
                    'equipo' => 'Mashuk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Sp5temyB-GOwGqFjq.png',
                    'stadium_id' => 2,
                ),
            1484 =>
                array (
                    'equipo' => 'Inter Cherkessk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/As3GDLHG-hpqWakMS.png',
                    'stadium_id' => 2,
                ),
            1485 =>
                array (
                    'equipo' => 'Pskov',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xEolXvHG-f5LEHx9k.png',
                    'stadium_id' => 1,
                ),
            1486 =>
                array (
                    'equipo' => 'Luki-Energiya',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ENIspgFG-8Y0FRw8n.png',
                    'stadium_id' => 1,
                ),
            1487 =>
                array (
                    'equipo' => 'Rodina Moscow',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lOAzsQfM-YwHhK1WK.png',
                    'stadium_id' => 2,
                ),
            1488 =>
                array (
                    'equipo' => 'Veles Moscow',
                    'img' => 'https://www.mismarcadores.com//res/image/data/trGHFiwS-2kHr5uPK.png',
                    'stadium_id' => 2,
                ),
            1489 =>
                array (
                    'equipo' => 'Ryazan',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lf8Ykuf5-nefBYWY1.png',
                    'stadium_id' => 1,
                ),
            1490 =>
                array (
                    'equipo' => 'Znamya Truda',
                    'img' => 'https://www.mismarcadores.com//res/image/data/CvxAVfwS-vHZ1C4Qn.png',
                    'stadium_id' => 1,
                ),
            1491 =>
                array (
                    'equipo' => 'Salyut-Belgorod',
                    'img' => 'https://www.mismarcadores.com//res/image/data/biVH3kGG-8Q0AjBYb.png',
                    'stadium_id' => 2,
                ),
            1492 =>
                array (
                    'equipo' => 'M. Lipetsk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WjLNcSZA-Kltgpnsf.png',
                    'stadium_id' => 2,
                ),
            1493 =>
                array (
                    'equipo' => 'Akron Tolyatti',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tbiBYgdM-IXoxQ9qD.png',
                    'stadium_id' => 2,
                ),
            1494 =>
                array (
                    'equipo' => 'Saratov',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dt5SYOf5-xWw1rQB6.png',
                    'stadium_id' => 2,
                ),
            1495 =>
                array (
                    'equipo' => 'Alania Vladikavkaz',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dCIsPTBr-WdwozkZi.png',
                    'stadium_id' => 1,
                ),
            1496 =>
                array (
                    'equipo' => 'Anzhi',
                    'img' => 'https://www.mismarcadores.com//res/image/data/0GjrVrYg-zq7Lg5Nc.png',
                    'stadium_id' => 1,
                ),
            1497 =>
                array (
                    'equipo' => 'Biolog',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jJv2aCDa-lpSvJhlP.png',
                    'stadium_id' => 1,
                ),
            1498 =>
                array (
                    'equipo' => 'Kholding',
                    'img' => 'https://www.mismarcadores.com//res/image/data/b96Ql0wS-2iS3uCvO.png',
                    'stadium_id' => 1,
                ),
            1499 =>
                array (
                    'equipo' => 'D. Bryansk',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SSmdSXEG-rRkbTyns.png',
                    'stadium_id' => 2,
                ),
            1500 =>
                array (
                    'equipo' => 'Kaluga',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tdDlDMil-488Q9lBB.png',
                    'stadium_id' => 2,
                ),
            1501 =>
                array (
                    'equipo' => 'Electron VN',
                    'img' => 'https://www.mismarcadores.com//res/image/data/C44JF0Ca-f5a7wwqL.png',
                    'stadium_id' => 2,
                ),
            1502 =>
                array (
                    'equipo' => 'Leningradets',
                    'img' => 'https://www.mismarcadores.com//res/image/data/fybqK9e5-SxYIRqIJ.png',
                    'stadium_id' => 2,
                ),
            1503 =>
                array (
                    'equipo' => 'Vladimir',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dtRajSYA-4nZfN5tR.png',
                    'stadium_id' => 2,
                ),
            1504 =>
                array (
                    'equipo' => 'Murom',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vuw7dcEa-ObIv6L9E.png',
                    'stadium_id' => 2,
                ),
            1505 =>
                array (
                    'equipo' => 'Volgar-Astrakhan',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bV39aeYg-WSgeTyBI.png',
                    'stadium_id' => 2,
                ),
            1506 =>
                array (
                    'equipo' => 'Legion Dynamo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ya374HYg-x2OGmdeg.png',
                    'stadium_id' => 2,
                ),
            1507 =>
                array (
                    'equipo' => 'Maykop',
                    'img' => 'https://www.mismarcadores.com//res/image/data/tKHWX0f5-OfdxrIsC.png',
                    'stadium_id' => 2,
                ),
            1508 =>
                array (
                    'equipo' => 'Chornomorets',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vTUGHrxS-SOS4xbqG.png',
                    'stadium_id' => 2,
                ),
            1509 =>
                array (
                    'equipo' => 'Napredak',
                    'img' => 'https://www.mismarcadores.com//res/image/data/txliqHyS-0I6w63XE.png',
                    'stadium_id' => 2,
                ),
            1510 =>
                array (
                    'equipo' => 'Vojvodina',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8GnmShXg-2ZOmSM7d.png',
                    'stadium_id' => 2,
                ),
            1511 =>
                array (
                    'equipo' => 'Young Lions',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nJVOFtyB-nuvXJvY7.png',
                    'stadium_id' => 2,
                ),
            1512 =>
                array (
                    'equipo' => 'Balestier Khalsa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/026hcgYA-fBdzwkJI.png',
                    'stadium_id' => 2,
                ),
            1513 =>
                array (
                    'equipo' => 'Djurgarden',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WvY9pWzB-KzaQ78um.png',
                    'stadium_id' => 1,
                ),
            1514 =>
                array (
                    'equipo' => 'Häcken',
                    'img' => 'https://www.mismarcadores.com//res/image/data/zmbB6GfM-MFgaAfjn.png',
                    'stadium_id' => 1,
                ),
            1515 =>
                array (
                    'equipo' => 'Östersunds',
                    'img' => 'https://www.mismarcadores.com//res/image/data/K44g7CDa-tve8fVd9.png',
                    'stadium_id' => 2,
                ),
            1516 =>
                array (
                    'equipo' => 'Malmö',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8O8M1JzS-KKKE2l0E.png',
                    'stadium_id' => 2,
                ),
            1517 =>
                array (
                    'equipo' => 'Göteborg',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WzUHAuCr-hMpgErXM.png',
                    'stadium_id' => 2,
                ),
            1518 =>
                array (
                    'equipo' => 'Norrköping',
                    'img' => 'https://www.mismarcadores.com//res/image/data/dbojRyCr-tp0M8lQt.png',
                    'stadium_id' => 2,
                ),
            1519 =>
                array (
                    'equipo' => 'Västerås SK',
                    'img' => 'https://www.mismarcadores.com//res/image/data/EoKG3N9r-lz724ho8.png',
                    'stadium_id' => 2,
                ),
            1520 =>
                array (
                    'equipo' => 'Dalkurd',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UTpcLOzB-2Vnlel8f.png',
                    'stadium_id' => 2,
                ),
            1521 =>
                array (
                    'equipo' => 'Varbergs',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ei9AiMHG-2qhVJn3o.png',
                    'stadium_id' => 2,
                ),
            1522 =>
                array (
                    'equipo' => 'Orgryte',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GKupH1dM-tzHYMPGi.png',
                    'stadium_id' => 2,
                ),
            1523 =>
                array (
                    'equipo' => 'Lugano',
                    'img' => 'https://www.mismarcadores.com//res/image/data/xvrILYCa-MofbbJoN.png',
                    'stadium_id' => 2,
                ),
            1524 =>
                array (
                    'equipo' => 'Thun',
                    'img' => 'https://www.mismarcadores.com//res/image/data/A7C06hf5-IsZb3YW3.png',
                    'stadium_id' => 2,
                ),
            1525 =>
                array (
                    'equipo' => 'Luzern',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WbYaVJEa-2qhVJn3o.png',
                    'stadium_id' => 1,
                ),
            1526 =>
                array (
                    'equipo' => 'Zúrich',
                    'img' => 'https://www.mismarcadores.com//res/image/data/v166ejgl-25PBFBLr.png',
                    'stadium_id' => 1,
                ),
            1527 =>
                array (
                    'equipo' => 'Xamax',
                    'img' => 'https://www.mismarcadores.com//res/image/data/QDmBcVXg-803zseRm.png',
                    'stadium_id' => 2,
                ),
            1528 =>
                array (
                    'equipo' => 'Young Boys',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GEt3dqh5-lY7NkF24.png',
                    'stadium_id' => 2,
                ),
            1529 =>
                array (
                    'equipo' => 'Vaduz',
                    'img' => 'https://www.mismarcadores.com//res/image/data/OvIm7Ig5-pbnoY8mF.png',
                    'stadium_id' => 2,
                ),
            1530 =>
                array (
                    'equipo' => 'Schaffhausen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GMmq8IwS-lfPiRlAU.png',
                    'stadium_id' => 2,
                ),
            1531 =>
                array (
                    'equipo' => 'Chiangmai FC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hxB21WEG-vXs19sKj.png',
                    'stadium_id' => 1,
                ),
            1532 =>
                array (
                    'equipo' => 'Taichung',
                    'img' => 'https://www.mismarcadores.com//res/image/data/ppT1TudM-0K94GRhR.png',
                    'stadium_id' => 1,
                ),
            1533 =>
                array (
                    'equipo' => 'Taipower',
                    'img' => 'https://www.mismarcadores.com//res/image/data/nZOadZVg-vRbxTK4F.png',
                    'stadium_id' => 1,
                ),
            1534 =>
                array (
                    'equipo' => 'Taipei Tatung',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jyyin1wS-G0JAniqF.png',
                    'stadium_id' => 1,
                ),
            1535 =>
                array (
                    'equipo' => 'Ntupes',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SUa1MvDr-6uotHSJI.png',
                    'stadium_id' => 1,
                ),
            1536 =>
                array (
                    'equipo' => 'Hang Yuen',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6kIzQgxS-hfrzaav6.png',
                    'stadium_id' => 1,
                ),
            1537 =>
                array (
                    'equipo' => 'Ming Chuan University',
                    'img' => 'https://www.mismarcadores.com//res/image/data/vFIMqbEa-IVnx04J7.png',
                    'stadium_id' => 1,
                ),
            1538 =>
                array (
                    'equipo' => 'Taicheng Lions',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bayhg7yS-6gjNuRE9.png',
                    'stadium_id' => 1,
                ),
            1539 =>
                array (
                    'equipo' => 'Tainan City',
                    'img' => 'https://www.mismarcadores.com//res/image/data/jDW8RMzB-MNi17VE4.png',
                    'stadium_id' => 1,
                ),
            1540 =>
                array (
                    'equipo' => 'Vorskla',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WhyjiSdM-GdwbZgIN.png',
                    'stadium_id' => 2,
                ),
            1541 =>
                array (
                    'equipo' => 'Zorya',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SEpGLyg5-YF00gpN0.png',
                    'stadium_id' => 2,
                ),
            1542 =>
                array (
                    'equipo' => 'Nacional',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2oWy7BEG-M9nhV48M.png',
                    'stadium_id' => 2,
                ),
            1543 =>
                array (
                    'equipo' => 'Progreso',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Ywxr8RFG-v3lmVcA0.png',
                    'stadium_id' => 2,
                ),
            1544 =>
                array (
                    'equipo' => 'Cerro CA',
                    'img' => 'https://www.mismarcadores.com//res/image/data/8MMCZtGG-C04Sr50s.png',
                    'stadium_id' => 2,
                ),
            1545 =>
                array (
                    'equipo' => 'Racing Montevideo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/v12aAjil-6FmvzVq7.png',
                    'stadium_id' => 2,
                ),
            1546 =>
                array (
                    'equipo' => 'Fénix',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KKQwAiYA-QTuGp3Xa.png',
                    'stadium_id' => 2,
                ),
            1547 =>
                array (
                    'equipo' => 'Wanderers',
                    'img' => 'https://www.mismarcadores.com//res/image/data/WCc1ByCa-ITFzYPmf.png',
                    'stadium_id' => 2,
                ),
            1548 =>
                array (
                    'equipo' => 'Juventud',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6XyukXjl-Wvlp50Wp.png',
                    'stadium_id' => 2,
                ),
            1549 =>
                array (
                    'equipo' => 'Boston River',
                    'img' => 'https://www.mismarcadores.com//res/image/data/lvnKywHG-QcDw1XjE.png',
                    'stadium_id' => 2,
                ),
            1550 =>
                array (
                    'equipo' => 'Cerro Largo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bmaSNUil-0xNMjEaB.png',
                    'stadium_id' => 2,
                ),
            1551 =>
                array (
                    'equipo' => 'Liverpool M.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/b5m6bjf5-YuvUDB4p.png',
                    'stadium_id' => 2,
                ),
            1552 =>
                array (
                    'equipo' => 'Atl. Venezuela',
                    'img' => 'https://www.mismarcadores.com//res/image/data/GMLNnwBr-C6mdfCL0.png',
                    'stadium_id' => 2,
                ),
            1553 =>
                array (
                    'equipo' => 'Carabobo',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UV5XOiAr-8EYcSwHg.png',
                    'stadium_id' => 2,
                ),
            1554 =>
                array (
                    'equipo' => 'Estudiantes M.',
                    'img' => 'https://www.mismarcadores.com//res/image/data/AmhR6GWg-6qZxby6o.png',
                    'stadium_id' => 1,
                ),
            1555 =>
                array (
                    'equipo' => 'Llaneros',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rX4XoGEa-pKZfPvGm.png',
                    'stadium_id' => 1,
                ),
            1556 =>
                array (
                    'equipo' => 'Mineros',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Gd36ZMYA-zczrTE24.png',
                    'stadium_id' => 2,
                ),
            1557 =>
                array (
                    'equipo' => 'AC Lala FC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Wd06t0HG-hhgOy67O.png',
                    'stadium_id' => 2,
                ),
            1558 =>
                array (
                    'equipo' => 'Puerto Cabello',
                    'img' => 'https://www.mismarcadores.com//res/image/data/KOAaYLwS-tChPwKDr.png',
                    'stadium_id' => 1,
                ),
            1559 =>
                array (
                    'equipo' => 'Aragua',
                    'img' => 'https://www.mismarcadores.com//res/image/data/UNqPErWg-Mgt76bqD.png',
                    'stadium_id' => 1,
                ),
            1560 =>
                array (
                    'equipo' => 'Trujillanos',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SpOlkHjl-A7nmBMUs.png',
                    'stadium_id' => 1,
                ),
            1561 =>
                array (
                    'equipo' => 'Dep. Táchira',
                    'img' => 'https://www.mismarcadores.com//res/image/data/bcTCzcAr-4MFjxWYd.png',
                    'stadium_id' => 1,
                ),
            1562 =>
                array (
                    'equipo' => 'Caracas',
                    'img' => 'https://www.mismarcadores.com//res/image/data/hIuNHZFG-zT0R3GJn.png',
                    'stadium_id' => 2,
                ),
            1563 =>
                array (
                    'equipo' => 'Lara',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Yy3vL2h5-6kS8Dndd.png',
                    'stadium_id' => 2,
                ),
            1564 =>
                array (
                    'equipo' => 'Da Nang',
                    'img' => 'https://www.mismarcadores.com//res/image/data/I75Jl4yB-zorbm6Z9.png',
                    'stadium_id' => 2,
                ),
            1565 =>
                array (
                    'equipo' => 'Sai Gon FC',
                    'img' => 'https://www.mismarcadores.com//res/image/data/2wA6F6fM-OEvUUzg1.png',
                    'stadium_id' => 2,
                ),
            1566 =>
                array (
                    'equipo' => 'Nam Dinh',
                    'img' => 'https://www.mismarcadores.com//res/image/data/6oSz1BdM-OMCPl5Gg.png',
                    'stadium_id' => 1,
                ),
            1567 =>
                array (
                    'equipo' => 'Song Lam Nghe An',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SjfvgTDa-WIvAp4JS.png',
                    'stadium_id' => 1,
                ),
            1568 =>
                array (
                    'equipo' => 'Thanh Hoa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/SOm1XQAr-fg7sKWVs.png',
                    'stadium_id' => 1,
                ),
            1569 =>
                array (
                    'equipo' => 'Gia Lai',
                    'img' => 'https://www.mismarcadores.com//res/image/data/x00zIWh5-Eys2nQlG.png',
                    'stadium_id' => 1,
                ),
            1570 =>
                array (
                    'equipo' => 'Khanh Hoa',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Iq1yUPYg-CIPuursj.png',
                    'stadium_id' => 2,
                ),
            1571 =>
                array (
                    'equipo' => 'Than Quang Ninh',
                    'img' => 'https://www.mismarcadores.com//res/image/data/r9F67bWg-Emw0Hm17.png',
                    'stadium_id' => 2,
                ),
            1572 =>
                array (
                    'equipo' => 'The Cong',
                    'img' => 'https://www.mismarcadores.com//res/image/data/Wtyg90FG-dMJ82JsG.png',
                    'stadium_id' => 1,
                ),
            1573 =>
                array (
                    'equipo' => 'BHTS Quang Nam',
                    'img' => 'https://www.mismarcadores.com//res/image/data/rRUbQjFa-4v76sZsc.png',
                    'stadium_id' => 1,
                ),
        );
        $partidos = array (
            0 =>
                array (
                    'local' => 'HJK (Fin)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lWDy3Yil-GKeEz1pf.png',
                    'visitante' => 'Estrella Roja (Srb)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AZ6dTVzS-02pMQZSB.png',
                    'score' => '2-1',
                    'competition' => 'EUROPA: Champions League - Clasificación - Cuartos de final',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            1 =>
                array (
                    'local' => 'AIK (Swe)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pjQnmYWg-pOPEhzVb.png',
                    'visitante' => 'Maribor (Slo)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/v9py2TeM-2kXPb85r.png',
                    'score' => '3-2(2-1)',
                    'competition' => 'EUROPA: Champions League - Clasificación - Cuartos de final',
                    'date' => '30/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            2 =>
                array (
                    'local' => 'Qarabag (Aze)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ryebZ3Ar-bcf8qvlN.png',
                    'visitante' => 'Dundalk (Irl)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2gmPohEa-jH2DHOiE.png',
                    'score' => '3-0',
                    'competition' => 'EUROPA: Champions League - Clasificación - Cuartos de final',
                    'date' => '27/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            3 =>
                array (
                    'local' => 'Rosenborg (Nor)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/44L9FIEG-fBpcfBk4.png',
                    'visitante' => 'BATE (Blr)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YoVN9IAr-IBflJG76.png',
                    'score' => '2-0',
                    'competition' => 'EUROPA: Champions League - Clasificación - Cuartos de final',
                    'date' => '26/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            4 =>
                array (
                    'local' => 'Copenhague (Den)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dvE1YECa-4r1dCUha.png',
                    'visitante' => 'TNS (Wal)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pQcOYVAr-YF00gpN0.png',
                    'score' => '1-0',
                    'competition' => 'EUROPA: Champions League - Clasificación - Cuartos de final',
                    'date' => '28/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            5 =>
                array (
                    'local' => 'Cukaricki (Srb)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8lrQgrXg-8Mzdq2N4.png',
                    'visitante' => 'Molde (Nor)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0rMLmLyS-WxJmaLcT.png',
                    'score' => '1-3',
                    'competition' => 'EUROPA: Europa League - Clasificación - Cuartos de final',
                    'date' => '29/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            6 =>
                array (
                    'local' => '1860 Múnich',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bc5ve6e5-vNKxfWV1.png',
                    'visitante' => 'Zwickau',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SrpJ3zGG-vBSqmuO5.png',
                    'score' => '3-0',
                    'competition' => 'ALEMANIA: 3. Liga - Jornada 3',
                    'date' => '27/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            7 =>
                array (
                    'local' => 'Chemnitzer',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KY9gMKxS-jc2fqRKc.png',
                    'visitante' => 'Meppen',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nTDB9O9r-EeLu1sTG.png',
                    'score' => '2-4',
                    'competition' => 'ALEMANIA: 3. Liga - Jornada 3',
                    'date' => '23/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            8 =>
                array (
                    'local' => 'Duisburgo',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SA8VA2eM-8KLDrEjh.png',
                    'visitante' => 'Preussen Münster',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/88FnbHcM-8v02s5kA.png',
                    'score' => '2-0',
                    'competition' => 'ALEMANIA: 3. Liga - Jornada 3',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            9 =>
                array (
                    'local' => 'Magdeburgo',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4E1l0ze5-fHLf2W7g.png',
                    'visitante' => 'Mannheim',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/z1xOIbhl-YLNkhM3S.png',
                    'score' => '1-1',
                    'competition' => 'ALEMANIA: 3. Liga - Jornada 3',
                    'date' => '28/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            10 =>
                array (
                    'local' => 'Viktoria Köln',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WQJEg1f5-tY9G2wz6.png',
                    'visitante' => 'Hallescher',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vB3zP4Ar-MLY0nDP0.png',
                    'score' => '0-2',
                    'competition' => 'ALEMANIA: 3. Liga - Jornada 3',
                    'date' => '26/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            11 =>
                array (
                    'local' => 'Altona',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AV5Iu9Ca-xtyO5Ly9.png',
                    'visitante' => 'Lubeck',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2oel6qBr-zRyL8YUP.png',
                    'score' => '1-2',
                    'competition' => 'ALEMANIA: Regionalliga Norte - Jornada 2',
                    'date' => '24/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            12 =>
                array (
                    'local' => 'Drochtersen/Assel',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/O06N4pcM-Ymx2R2j1.png',
                    'visitante' => 'Havelse',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WIdtl9Ca-bX64ZLGh.png',
                    'score' => '3-0',
                    'competition' => 'ALEMANIA: Regionalliga Norte - Jornada 2',
                    'date' => '26/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            13 =>
                array (
                    'local' => 'Hannoverscher SC',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SCw7kkBr-pMnkvXX9.png',
                    'visitante' => 'SC Weiche-08',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/W2FWYMil-z5vcQKgE.png',
                    'score' => '0-1',
                    'competition' => 'ALEMANIA: Regionalliga Norte - Jornada 2',
                    'date' => '24/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            14 =>
                array (
                    'local' => 'Heider SV',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0IkNtBBr-CUD34dwj.png',
                    'visitante' => 'Bremen II',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/buwBPLEG-xCH4M3Dp.png',
                    'score' => '0-1',
                    'competition' => 'ALEMANIA: Regionalliga Norte - Jornada 2',
                    'date' => '30/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            15 =>
                array (
                    'local' => 'Jeddeloh',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OWniqrf5-48vQJVll.png',
                    'visitante' => 'Hannover II',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/n3lYzqFa-lMJJwwpj.png',
                    'score' => '6-0',
                    'competition' => 'ALEMANIA: Regionalliga Norte - Jornada 2',
                    'date' => '26/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            16 =>
                array (
                    'local' => 'Kiel II',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OQ57tXCa-GK5lTBK2.png',
                    'visitante' => 'Oldenburg',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8ILVGKeM-GxutJbKn.png',
                    'score' => '1-0',
                    'competition' => 'ALEMANIA: Regionalliga Norte - Jornada 2',
                    'date' => '29/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            17 =>
                array (
                    'local' => 'Luneburger Hansa',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dhHFAgDa-CzH4v7Eq.png',
                    'visitante' => 'Norderstedt',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vePzumZA-bysk9fr1.png',
                    'score' => '1-0',
                    'competition' => 'ALEMANIA: Regionalliga Norte - Jornada 2',
                    'date' => '28/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            18 =>
                array (
                    'local' => 'St. Pauli II',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0d9JBTCr-IZbtfC9d.png',
                    'visitante' => 'Hamburgo II',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YajC1tzB-6LrtzNsp.png',
                    'score' => '-',
                    'competition' => 'ALEMANIA: Regionalliga Norte - Jornada 2',
                    'date' => '26/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            19 =>
                array (
                    'local' => 'Wolfsburgo II',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QizfHzhl-pCspZtcj.png',
                    'visitante' => 'BSV Rehden',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8fN5JSZA-h0wpIIZh.png',
                    'score' => '3-0',
                    'competition' => 'ALEMANIA: Regionalliga Norte - Jornada 2',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            20 =>
                array (
                    'local' => 'Chemie Leipzig',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xpUx2Ef5-lQifnTn6.png',
                    'visitante' => 'Viktoria Berlin',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/6m4uMeEa-M1IpcrjG.png',
                    'score' => '0-0',
                    'competition' => 'ALEMANIA: Regionalliga Nordost - Jornada 2',
                    'date' => '25/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            21 =>
                array (
                    'local' => 'Furstenwalde',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fDAxchZg-ADZXO82q.png',
                    'visitante' => 'Berliner AK 07',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nP153cYA-K6TVdpkc.png',
                    'score' => '0-2',
                    'competition' => 'ALEMANIA: Regionalliga Nordost - Jornada 2',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            22 =>
                array (
                    'local' => 'Lichtenberg',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KEpb1HBr-ttIVqAv9.png',
                    'visitante' => 'Rathenow',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jXikVoZA-dl6ja31f.png',
                    'score' => '1-1',
                    'competition' => 'ALEMANIA: Regionalliga Nordost - Jornada 2',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            23 =>
                array (
                    'local' => 'Bischofswerdaer',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/x0nNCdBr-4t46lBMr.png',
                    'visitante' => 'BFC Dynamo',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YVQcK3f5-t4YJSaON.png',
                    'score' => '0-1',
                    'competition' => 'ALEMANIA: Regionalliga Nordost - Jornada 2',
                    'date' => '23/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            24 =>
                array (
                    'local' => 'Halberstadt',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AmW6Beg5-4nyqIKoI.png',
                    'visitante' => 'Meuselwitz',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/6LU1UQCa-hnKq01rN.png',
                    'score' => '2-2',
                    'competition' => 'ALEMANIA: Regionalliga Nordost - Jornada 2',
                    'date' => '26/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            25 =>
                array (
                    'local' => 'Erfurt',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CI5d1IZA-C63jp75i.png',
                    'visitante' => 'Lokomotive Leipzig',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hQZV62Ar-2JWAsvzh.png',
                    'score' => '2-2',
                    'competition' => 'ALEMANIA: Regionalliga Nordost - Jornada 2',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            26 =>
                array (
                    'local' => 'Binh Duong (Vie)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8nurCNxS-YRQytORq.png',
                    'visitante' => 'Hanoi FC (Vie)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ShEcH3f5-CE93n20k.png',
                    'score' => '0-1',
                    'competition' => 'ASIA: Copa AFC - Playoffs - 1/8 de final',
                    'date' => '30/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            27 =>
                array (
                    'local' => 'Campbelltown City',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/632Ph0Ar-OpTy2f5S.png',
                    'visitante' => 'Melbourne City',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hIClxNAr-M5ti9ffl.png',
                    'score' => '1-3',
                    'competition' => 'AUSTRALIA: FFA Cup - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            28 =>
                array (
                    'local' => 'Cooma',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/YV7eDSCa-fqhtjEtC.png',
                    'visitante' => 'Hume City',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jud5e6yS-EBLWPs15.png',
                    'score' => '0-2',
                    'competition' => 'AUSTRALIA: FFA Cup - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            29 =>
                array (
                    'local' => 'Maitland',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IZDhEkYg-AiffJlW3.png',
                    'visitante' => 'Central Coast Mariners',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/b7iAqkgl-YHiKyoxc.png',
                    'score' => '0-2',
                    'competition' => 'AUSTRALIA: FFA Cup - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            30 =>
                array (
                    'local' => 'South Hobart',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dSRX3GcM-vZWqlXgR.png',
                    'visitante' => 'Marconi',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xpdGfryS-OhgaBrnC.png',
                    'score' => '0-3',
                    'competition' => 'AUSTRALIA: FFA Cup - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            31 =>
                array (
                    'local' => 'St George Saints',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zZUbZaFa-tW060a0T.png',
                    'visitante' => 'Sydney Utd',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/n5MiXOZA-EctnCb4p.png',
                    'score' => '3-5(3-3)',
                    'competition' => 'AUSTRALIA: FFA Cup - 1/16 de final',
                    'date' => '25/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            32 =>
                array (
                    'local' => 'Sport Boys',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OYewSiYg-zqJkB0CA.png',
                    'visitante' => 'Destroyers',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lUFU7Kh5-0tBQExpL.png',
                    'score' => '1-1',
                    'competition' => 'BOLIVIA: División Profesional - Clausura - Jornada 2',
                    'date' => '23/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            33 =>
                array (
                    'local' => 'Brasil de Pelotas',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0zgnuQyS-xC1IQdD8.png',
                    'visitante' => 'Vila Nova',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ttvNE0il-KAPnxsGE.png',
                    'score' => '0-2',
                    'competition' => 'BRASIL: Brasileirao Serie B - Jornada 13',
                    'date' => '25/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            34 =>
                array (
                    'local' => 'Figueirense',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/UoIPgeyB-ImfBiJmb.png',
                    'visitante' => 'Vitória',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EglYBtxS-MusJKJ6N.png',
                    'score' => '1-1',
                    'competition' => 'BRASIL: Brasileirao Serie B - Jornada 13',
                    'date' => '30/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            35 =>
                array (
                    'local' => 'Londrina',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ADUlTugl-GnhLGXP2.png',
                    'visitante' => 'Paraná',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hb0keWjl-UZmeQNxn.png',
                    'score' => '3-0',
                    'competition' => 'BRASIL: Brasileirao Serie B - Jornada 13',
                    'date' => '28/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            36 =>
                array (
                    'local' => 'Atlético-GO',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WGHITlhl-jFgsoyw3.png',
                    'visitante' => 'Operario',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IBwiT7Da-h8orxayD.png',
                    'score' => '4-2',
                    'competition' => 'BRASIL: Brasileirao Serie B - Jornada 13',
                    'date' => '25/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            37 =>
                array (
                    'local' => 'CRB',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QuqDEgh5-lI3WtlHM.png',
                    'visitante' => 'Oeste',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QghKiTDa-KMiBP0xJ.png',
                    'score' => '2-2',
                    'competition' => 'BRASIL: Brasileirao Serie B - Jornada 13',
                    'date' => '28/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            38 =>
                array (
                    'local' => 'Ponte Preta',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/UVeNVSBr-K8OxaI3U.png',
                    'visitante' => 'América-MG',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Eut0HLfM-xSynTMWM.png',
                    'score' => '0-1',
                    'competition' => 'BRASIL: Brasileirao Serie B - Jornada 13',
                    'date' => '29/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            39 =>
                array (
                    'local' => 'Sao Bento',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hMkERzDa-zTGiT5uL.png',
                    'visitante' => 'Criciúma',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rD23Eng5-WOFd8kH0.png',
                    'score' => '1-0',
                    'competition' => 'BRASIL: Brasileirao Serie B - Jornada 13',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            40 =>
                array (
                    'local' => 'Bragantino',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pnCbhOCa-jqkiR3Nu.png',
                    'visitante' => 'Cuiaba Esporte',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/COoi5ag5-C291Qktd.png',
                    'score' => '2-2',
                    'competition' => 'BRASIL: Brasileirao Serie B - Jornada 13',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            41 =>
                array (
                    'local' => 'Brasiliense',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bDwqmQxS-d2Jt1ZCp.png',
                    'visitante' => 'Vitoria ES',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/6TftvFdM-lnmbDylA.png',
                    'score' => '1-0(0-0)',
                    'competition' => 'BRASIL: Copa Verde - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            42 =>
                array (
                    'local' => 'Ipora',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lUCUrmf5-x4NLqEDA.png',
                    'visitante' => 'Real Noroeste',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EyKkRxil-UZLqMb4F.png',
                    'score' => '2-0',
                    'competition' => 'BRASIL: Copa Verde - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            43 =>
                array (
                    'local' => 'Rionegro Águilas',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4US0UECr-Uiu07YSa.png',
                    'visitante' => 'Pereira',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/M1G01gh5-8j0rFY2J.png',
                    'score' => '1-1',
                    'competition' => 'COLOMBIA: Copa Águila - Playoffs - 1/8 de final',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            44 =>
                array (
                    'local' => 'Jeonbuk',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lnjXzFzS-OpDpjXEl.png',
                    'visitante' => 'Jeju',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/E7LHWiHG-KGxDgzfP.png',
                    'score' => '2-2',
                    'competition' => 'COREA DEL SUR: K League 1 - Jornada 23',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            45 =>
                array (
                    'local' => 'Gangwon',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6a5annZg-KGxDgzfP.png',
                    'visitante' => 'Pohang',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/S8Lo4nCr-KWr88VAM.png',
                    'score' => '2-1',
                    'competition' => 'COREA DEL SUR: K League 1 - Jornada 23',
                    'date' => '25/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            46 =>
                array (
                    'local' => 'Aucas',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Cx1v3TYg-C4YPK6Bt.png',
                    'visitante' => 'Guayaquil City',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2XY26leM-CzmHJyq9.png',
                    'score' => '1-0(0-0)',
                    'competition' => 'ECUADOR: Copa Ecuador - 1/8 de final',
                    'date' => '29/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            47 =>
                array (
                    'local' => 'Madura United',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8rLZRaFa-ljJKXNvO.png',
                    'visitante' => 'PSS Sleman',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Cxc4L2Cr-WjxyENTP.png',
                    'score' => '0-1',
                    'competition' => 'INDONESIA: Liga 1 - Jornada 4',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            48 =>
                array (
                    'local' => 'H. Kfar Saba',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bR6sY8EG-ptJBJ8XT.png',
                    'visitante' => 'Hapoel Hadera',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/4GrpPmEa-fDHAkMB9.png',
                    'score' => '2-2',
                    'competition' => 'ISRAEL: Toto Cup - Jornada 2',
                    'date' => '25/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            49 =>
                array (
                    'local' => 'Shmona',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tWoInRZA-dbL6lxiS.png',
                    'visitante' => 'Netanya',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lKdmfUf5-O4FlBeR4.png',
                    'score' => '2-1',
                    'competition' => 'ISRAEL: Toto Cup - Jornada 2',
                    'date' => '25/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            50 =>
                array (
                    'local' => 'H. Raanana',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0KUmb2Ca-h4y58LZJ.png',
                    'visitante' => 'B. Jerusalem',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QVqFCnDa-S0YwgY7G.png',
                    'score' => '0-2',
                    'competition' => 'ISRAEL: Toto Cup - Jornada 2',
                    'date' => '29/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            51 =>
                array (
                    'local' => 'Hiroshima',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CWtDiFhl-6RDchEN9.png',
                    'visitante' => 'Kawasaki',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SnclEAg5-AgHoeGwi.png',
                    'score' => '3-2',
                    'competition' => 'JAPÓN: J-League - Jornada 16',
                    'date' => '27/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            52 =>
                array (
                    'local' => 'Urawa',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2iJi3FWg-8zQFyFdi.png',
                    'visitante' => 'Kashima',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KzRTl7Ea-SzFggf83.png',
                    'score' => '1-1',
                    'competition' => 'JAPÓN: J-League - Jornada 16',
                    'date' => '27/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            53 =>
                array (
                    'local' => 'Gifu',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tdMTfog5-KxC08gBN.png',
                    'visitante' => 'Omiya Ardija',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WScijihl-EuaSg6sH.png',
                    'score' => '0-0',
                    'competition' => 'JAPÓN: J-League Division 2 - Jornada 25',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            54 =>
                array (
                    'local' => 'Kanazawa',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/naJjaZyS-rLl5l4mT.png',
                    'visitante' => 'Kyoto',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2kgCipHG-x0qIQzRi.png',
                    'score' => '1-1',
                    'competition' => 'JAPÓN: J-League Division 2 - Jornada 25',
                    'date' => '29/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            55 =>
                array (
                    'local' => 'Machida',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zcqIEsil-d4lodx7K.png',
                    'visitante' => 'Albirex Niigata',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zNkNyczB-zk0OfnSA.png',
                    'score' => '3-3',
                    'competition' => 'JAPÓN: J-League Division 2 - Jornada 25',
                    'date' => '27/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            56 =>
                array (
                    'local' => 'Mito',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vgVRLDhl-QgXwSVlU.png',
                    'visitante' => 'Kofu',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8n6oZCdM-lpGkfzgc.png',
                    'score' => '1-1',
                    'competition' => 'JAPÓN: J-League Division 2 - Jornada 25',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            57 =>
                array (
                    'local' => 'Okayama',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rs6Zabe5-OMdCVMtg.png',
                    'visitante' => 'Kashiwa',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ln1GwEYA-WMdzhpCT.png',
                    'score' => '0-4',
                    'competition' => 'JAPÓN: J-League Division 2 - Jornada 25',
                    'date' => '30/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            58 =>
                array (
                    'local' => 'Ryukyu',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jubezWdM-YmYsUaaM.png',
                    'visitante' => 'Chiba',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8YOWGmdM-0xcW2XYp.png',
                    'score' => '0-2',
                    'competition' => 'JAPÓN: J-League Division 2 - Jornada 25',
                    'date' => '26/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            59 =>
                array (
                    'local' => 'Tochigi',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/EXfG16Ar-CQVWcWYc.png',
                    'visitante' => 'Verdy',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tnZwAnDr-hEtQOEe4.png',
                    'score' => '0-0',
                    'competition' => 'JAPÓN: J-League Division 2 - Jornada 25',
                    'date' => '30/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            60 =>
                array (
                    'local' => 'Tokushima',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CW8x8EeM-jHUzcjl4.png',
                    'visitante' => 'Kagoshima Utd',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AJ3xyMf5-noJhEBl2.png',
                    'score' => '5-2',
                    'competition' => 'JAPÓN: J-League Division 2 - Jornada 25',
                    'date' => '27/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            61 =>
                array (
                    'local' => 'V-Varen Nagasaki',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tSwLeJh5-nBfTAOtL.png',
                    'visitante' => 'Ehime',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YyO6tgzB-4vRtz8Pg.png',
                    'score' => '1-4',
                    'competition' => 'JAPÓN: J-League Division 2 - Jornada 25',
                    'date' => '30/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            62 =>
                array (
                    'local' => 'Yamagata',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MPYWA9HG-pIC1iYxG.png',
                    'visitante' => 'Avispa Fukuoka',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/b50fCge5-hWcWhQdN.png',
                    'score' => '1-2',
                    'competition' => 'JAPÓN: J-League Division 2 - Jornada 25',
                    'date' => '25/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            63 =>
                array (
                    'local' => 'Yokohama FC',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2cNIqiYA-hEtQOEe4.png',
                    'visitante' => 'Renofa Yamaguchi',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/t4mm0KeM-rJaATdxh.png',
                    'score' => '4-1',
                    'competition' => 'JAPÓN: J-League Division 2 - Jornada 25',
                    'date' => '25/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            64 =>
                array (
                    'local' => 'Santos Laguna',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Ov1FIjAr-Knc3iIh6.png',
                    'visitante' => 'Correcaminos U.A.T.',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hpAaJcyB-rwnhdxoB.png',
                    'score' => '1-1',
                    'competition' => 'MÉXICO: Copa MX',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            65 =>
                array (
                    'local' => 'Venados',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2qXUp9f5-SOlpbbGb.png',
                    'visitante' => 'Atlante',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tjlI5lgl-pUKj2Z6O.png',
                    'score' => '4-1',
                    'competition' => 'MÉXICO: Copa MX',
                    'date' => '29/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            66 =>
                array (
                    'local' => 'Tijuana',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dhGYoCh5-YZWSbCJi.png',
                    'visitante' => 'Querétaro',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fomLHLzB-M73aqXJ4.png',
                    'score' => '2-0',
                    'competition' => 'MÉXICO: Copa MX',
                    'date' => '28/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            67 =>
                array (
                    'local' => 'Atlas',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OfIFJZYg-ncTYyUfs.png',
                    'visitante' => 'Pachuca',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/x4yMKjh5-WEpQ0fRT.png',
                    'score' => '1-1',
                    'competition' => 'MÉXICO: Copa MX',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            68 =>
                array (
                    'local' => 'Tusker (Ken)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Gp2EZUjl-SfXL9AgA.png',
                    'visitante' => 'Ulinzi Stars (Ken)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bBQvGcYg-hYvxvITJ.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            69 =>
                array (
                    'local' => 'Lokomotiv Yerevan (Arm)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bwM7hXzB-8fSo4crs.png',
                    'visitante' => 'Aragats (Arm)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '4-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            70 =>
                array (
                    'local' => 'Baia Mare (Rou)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4nDkf6hl-bN9sxH2C.png',
                    'visitante' => 'Satu Mare (Rou)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nwAg2owS-ldYHv5t4.png',
                    'score' => '9-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            71 =>
                array (
                    'local' => 'Leganés (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/htTcG0il-IosBD5s5.png',
                    'visitante' => 'Alcorcón (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lvaUQuZg-O0ajUWwK.png',
                    'score' => '3-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            72 =>
                array (
                    'local' => 'Leganés B (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rmz4WayS-I70OCpos.png',
                    'visitante' => 'Toledo (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EB3KO3ZA-xSiEBigD.png',
                    'score' => '3-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            73 =>
                array (
                    'local' => 'Lucko (Cro)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hAnLnrCr-lnoOh4I6.png',
                    'visitante' => 'Orijent (Cro)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0tF4NlWg-bTAktR9D.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            74 =>
                array (
                    'local' => 'Rapid Bucarest (Rou)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xGFfaiWg-SO6RlZHA.png',
                    'visitante' => 'Metalul Buzau (Rou)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GY29tTYA-IRWmVxQ8.png',
                    'score' => '6-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            75 =>
                array (
                    'local' => 'Pasaia (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QPL9xlzB-dvaWFIsG.png',
                    'visitante' => 'CD Vitoria (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Ei9LPRzB-fehDHwME.png',
                    'score' => '0-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            76 =>
                array (
                    'local' => 'Amorebieta (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QapVjZBr-OtoaG7cn.png',
                    'visitante' => 'Durango (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Isf1bAf5-IqMJ1Da0.png',
                    'score' => '4-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            77 =>
                array (
                    'local' => 'Braga Sub-23 (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SlCIjXAr-8Mlzga6C.png',
                    'visitante' => 'Sao Martinho (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fNLdY2Ea-W0o55Ilp.png',
                    'score' => '3-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            78 =>
                array (
                    'local' => 'Real SC (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xrGbkwwS-hvQ0LgPG.png',
                    'visitante' => 'Montijo (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vmr2xGcM-Uo6SHoHS.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            79 =>
                array (
                    'local' => 'Arouca (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/EkUliKf5-AJ413617.png',
                    'visitante' => 'Sp. Espinho (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OlIV4keM-88Raqlyq.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            80 =>
                array (
                    'local' => 'Beira Mar (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/f5PPMfjl-O6EG9sOt.png',
                    'visitante' => 'Lusitania FC (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dtTL5DfM-xjSCJza5.png',
                    'score' => '2-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            81 =>
                array (
                    'local' => 'Chaves (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fLiJovBr-4GIg5tS6.png',
                    'visitante' => 'Gil Vicente (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/G6WqpsWg-nHwHiAUE.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            82 =>
                array (
                    'local' => 'Chaves B (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/r9EJsFcM-2TuUqPp9.png',
                    'visitante' => 'V. Guimaraes B (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CzdhXxEa-lC8fXluc.png',
                    'score' => '0-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            83 =>
                array (
                    'local' => 'Oporto B (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MB8RHrdM-juLC852d.png',
                    'visitante' => 'Rio Ave (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xUzHRdeM-AcZlahAr.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            84 =>
                array (
                    'local' => 'Sanjoanense (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0fqGJ7g5-jTxE718f.png',
                    'visitante' => 'SC Braga B (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8z9g8QfM-Y9XG7vG6.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            85 =>
                array (
                    'local' => 'Malmö Sub-19 (Swe)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bsTQ3Whl-pYO8hW03.png',
                    'visitante' => 'Brondby Sub-19 (Den)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UFGIFsFG-xQQZl0ZE.png',
                    'score' => '4-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            86 =>
                array (
                    'local' => 'Anderlecht (Bel)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dnno08Yg-0Uhw7ZGJ.png',
                    'visitante' => 'Düsseldorf (Ger)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ph4pnOh5-K6FXwj5N.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            87 =>
                array (
                    'local' => 'Karagumruk (Tur)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8hAFmGGG-YwmxQARg.png',
                    'visitante' => 'Adanaspor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2HVdoCXg-nL3RaQYl.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            88 =>
                array (
                    'local' => 'Aluminium Arak (Irn)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/GAyT71eM-2L9OyVg7.png',
                    'visitante' => 'Khoosheh Talai (Irn)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '5-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            89 =>
                array (
                    'local' => 'Ankaragucu (Tur)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2gHuVEXg-2FbJiYof.png',
                    'visitante' => 'Hatayspor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fXZXonFa-2Hm1We4O.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            90 =>
                array (
                    'local' => 'Giresunspor (Tur)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hp9XR5Xg-pGB4ZQzf.png',
                    'visitante' => 'Karakopru (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/h85EUigl-YZOaRblP.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            91 =>
                array (
                    'local' => 'Benevento (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rm9NwUZA-8GZjrCQf.png',
                    'visitante' => 'Cittadella (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OlVbH3GG-vyWhBDBb.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            92 =>
                array (
                    'local' => 'Ostrowiec (Pol)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/n32DpAdM-IXqbh0zg.png',
                    'visitante' => 'Stal Krasnik (Pol)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QyKhZNkl-27UphTNJ.png',
                    'score' => '3-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            93 =>
                array (
                    'local' => 'Pergolettese (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/U9TcxNYA-bFT1FYrb.png',
                    'visitante' => 'Pro Sesto (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/t4OKnhZg-CGYMjSfN.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            94 =>
                array (
                    'local' => 'Sangiustese (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4SUaC7ZA-KU3cz0Pt.png',
                    'visitante' => 'Casarano (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WpswQddM-CnLHtULN.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            95 =>
                array (
                    'local' => 'Venezia (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/l4Dj9jeM-A3ASYdri.png',
                    'visitante' => 'Cjarlins Muzane (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/I7SA93cM-QaCkfz1k.png',
                    'score' => '3-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            96 =>
                array (
                    'local' => 'Altay (Tur)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xGNTeNZA-r5jY3FO3.png',
                    'visitante' => 'Bursaspor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/6skVT6Yg-x2IM0SUQ.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            97 =>
                array (
                    'local' => 'Labunishta (Mkd)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zBaxjRjl-6oCoVOHh.png',
                    'visitante' => 'Flamurtari (Kos)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0xGMrWBr-QF0cXmGI.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            98 =>
                array (
                    'local' => 'Orleta Radzyn (Pol)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xh8NQcGG-C6HVZeXK.png',
                    'visitante' => 'Sulejowek (Pol)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Q7FLMze5-YgP4kK6p.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            99 =>
                array (
                    'local' => 'Pelister (Mkd)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/YobeKMFG-2qbFd588.png',
                    'visitante' => 'Pobeda (Mkd)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2PSno0YA-0MY4uHdQ.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            100 =>
                array (
                    'local' => 'Al Feiha (Sau)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/YTSt4cf5-ba12XyqH.png',
                    'visitante' => 'Konyaspor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pOF8NYYA-8py6YCTl.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            101 =>
                array (
                    'local' => 'Bourges (Fra)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WSxSsfEa-tWCes85n.png',
                    'visitante' => 'Clermont (Fra)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/O6jfFPdM-jeonWzLj.png',
                    'score' => '3-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            102 =>
                array (
                    'local' => 'Hertha Berlín (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dQALRIjl-C6khRCLH.png',
                    'visitante' => 'West Ham (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Y3qglzf5-xGs8XYP0.png',
                    'score' => '3-5',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            103 =>
                array (
                    'local' => 'KF Gostivar (Mkd)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/EH4nSsXg-MRcNuh1J.png',
                    'visitante' => 'Shkupi (Mkd)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zLPd4UZA-rZ5I03Jq.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            104 =>
                array (
                    'local' => 'Medjimurje (Cro)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KfqPUjil-2Dmo0MqU.png',
                    'visitante' => 'Dubrava (Cro)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QwWPhoil-Gpm5wfVr.png',
                    'score' => '3-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            105 =>
                array (
                    'local' => 'Metz (Fra)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4MoVp0h5-4pdbha5J.png',
                    'visitante' => 'Seraing (Bel)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EFWaAEeM-0UQjpYB9.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            106 =>
                array (
                    'local' => 'Sassuolo (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IFKEHRGG-hWBv29Yp.png',
                    'visitante' => 'Empoli (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/h6XeO4e5-QeS1qfqn.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            107 =>
                array (
                    'local' => 'Chaves B (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/r9EJsFcM-2TuUqPp9.png',
                    'visitante' => 'Gondomar (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MLb4SKGG-vPVtQHAo.png',
                    'score' => '0-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            108 =>
                array (
                    'local' => 'Gersthofer (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zuKRZDzB-IoVMSk4p.png',
                    'visitante' => 'SV Donau (Aut)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/6q67wqDr-jsQ62khK.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            109 =>
                array (
                    'local' => 'Stadlau (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/r7jzZJGG-YmrLe6Pm.png',
                    'visitante' => 'Favoritner (Aut)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xGaAWidM-4xbZUq1D.png',
                    'score' => '2-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            110 =>
                array (
                    'local' => 'UNFP (Fra)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8v6qf8YA-bPrGLMlM.png',
                    'visitante' => 'Montpellier (Fra)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QTr0lOBr-EkChIdLk.png',
                    'score' => '0-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            111 =>
                array (
                    'local' => 'Zagora (Cro)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SrMb97Xg-A5TYYMb3.png',
                    'visitante' => 'Sibenik (Cro)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MVDjZbYA-buJJesVf.png',
                    'score' => '1-8',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            112 =>
                array (
                    'local' => 'Amarante (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8008JLCa-CdOar9R4.png',
                    'visitante' => 'Famalicao Sub-23 (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/G4ycoHcM-69dphHyh.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            113 =>
                array (
                    'local' => 'Burgos (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0AalHeAr-tnizRbr6.png',
                    'visitante' => 'Real Burgos (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/za457rDa-UoC0mrTE.png',
                    'score' => '6-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            114 =>
                array (
                    'local' => 'Cartagena B (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/p29zIiFa-z129fpi5.png',
                    'visitante' => 'UCAM Murcia (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/n7oAOkf5-C8Sj6gM4.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            115 =>
                array (
                    'local' => 'Celta de Vigo B (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xtHHpSFG-plktcAwr.png',
                    'visitante' => 'Ourense CF (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2ozD1vCr-0OweApn3.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            116 =>
                array (
                    'local' => 'Eichgraben (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'visitante' => 'Post Wien (Aut)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '3-6',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            117 =>
                array (
                    'local' => 'Fafe (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lv2ztnGG-t6kydSe4.png',
                    'visitante' => 'Merelinense (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QJNJrBYA-You69Nwr.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            118 =>
                array (
                    'local' => 'Grossfeld (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hjpgyoXg-zcALQ7Sl.png',
                    'visitante' => 'Schwechat (Aut)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CjVqQK9r-QcN41efm.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            119 =>
                array (
                    'local' => 'La Nucía (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zZf7Zxe5-EL6qfSdb.png',
                    'visitante' => 'Jove (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bDvvoRCr-YR2E3OOf.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            120 =>
                array (
                    'local' => 'Levante B (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SvGaggyS-8O1XAV26.png',
                    'visitante' => 'Al Arabi (Qat)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/d6tQJPFG-UBD4T6Mf.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            121 =>
                array (
                    'local' => 'Liverpool (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vwC9RGhl-2B0QucIK.png',
                    'visitante' => 'Lyon (Fra)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rytJfXyS-IRbzmzRB.png',
                    'score' => '3-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            122 =>
                array (
                    'local' => 'Real Sociedad (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/r7gpvheM-rkrFLaiH.png',
                    'visitante' => 'Alavés (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hrI86AzS-6eawNCFf.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            123 =>
                array (
                    'local' => 'Rouen (Fra)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CCHqA0Yg-b5tOQsjI.png',
                    'visitante' => 'Caennaise (Fra)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rmq41mil-fFnXxxz2.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            124 =>
                array (
                    'local' => 'Selección AFE (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jmBMdzYg-j9nNnrwL.png',
                    'visitante' => 'CF Intercity (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            125 =>
                array (
                    'local' => 'Stade Bordelais (Fra)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bPieLPZA-SG2uwd68.png',
                    'visitante' => 'Cognac (Fra)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            126 =>
                array (
                    'local' => 'SV Deutsch Goritz (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/f1aPYjwS-WdBqCKRP.png',
                    'visitante' => 'Pischelsdorf (Aut)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '4-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            127 =>
                array (
                    'local' => 'AEK (Gre)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vHCp8QeM-lKYCJNFO.png',
                    'visitante' => 'Basaksehir (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2qYOOtEa-GxF0wQtj.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            128 =>
                array (
                    'local' => 'Angers (Fra)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/t8LjlaWg-EorrQF3M.png',
                    'visitante' => 'Arsenal (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pfchdCg5-pU2IsJm8.png',
                    'score' => '1-2(1-1)',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            129 =>
                array (
                    'local' => 'Atlético de Madrid B (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xhUBM6Ar-vm6tmHaq.png',
                    'visitante' => 'Real Valladolid B (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Gtp91cyS-0CFwMsZs.png',
                    'score' => '2-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            130 =>
                array (
                    'local' => 'Balmaseda (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MeSSD4Cr-dzLN0XE6.png',
                    'visitante' => 'Leioa (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fXSyTpZg-Cb9cHJmD.png',
                    'score' => '2-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            131 =>
                array (
                    'local' => 'Londerzeel (Bel)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/plUxCFyB-SI3CM0d8.png',
                    'visitante' => 'Tubize (Bel)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/4f94TVwS-4dvcFJ81.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            132 =>
                array (
                    'local' => 'Lugo (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6w2wicCr-2N0c2pfT.png',
                    'visitante' => 'Real Oviedo (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/z16nhrjl-v1PVfDIE.png',
                    'score' => '2-1(1-1)',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            133 =>
                array (
                    'local' => 'P. Ferreira (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4zJ1F1dM-YZQg6TYo.png',
                    'visitante' => 'Al Nasr Riyadh (Sau)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AJoLwKZA-0tJwWAQS.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            134 =>
                array (
                    'local' => 'Pontardawe (Wal)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fH6idJjl-ziXnEIKm.png',
                    'visitante' => 'Llanelli (Wal)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GSQNwvdM-C6a4h4x7.png',
                    'score' => '0-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            135 =>
                array (
                    'local' => 'TEC (Ned)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dEEKpuAr-QoTmRqW1.png',
                    'visitante' => 'Jong Nijmegen (Ned)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2XNTWUcM-QVQUWbFJ.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            136 =>
                array (
                    'local' => 'Trelissac (Fra)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xGAOXEGG-xbpFO82c.png',
                    'visitante' => 'Girondins II (Fra)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tCVcPACr-QwXIlnat.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            137 =>
                array (
                    'local' => 'Union Nettetal (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/phoFhSg5-d4ObDbKl.png',
                    'visitante' => 'Hurth (Ger)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/29l8QfFG-2DNavIXN.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            138 =>
                array (
                    'local' => 'Vardar (Mkd)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ClbJdgcM-MeeXvCTB.png',
                    'visitante' => 'Kasimpasa (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Ys2kyFfM-vDNWt1Nm.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            139 =>
                array (
                    'local' => 'Villaverde San Andrés (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bs3m0SzB-tjV4UsVj.png',
                    'visitante' => 'Torrijos (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            140 =>
                array (
                    'local' => 'Albacete (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/buLqAVfM-SQ563C0E.png',
                    'visitante' => 'Getafe (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OjieMlGG-46ZOuRh1.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            141 =>
                array (
                    'local' => 'Cacereño (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xSDyvWg5-AXaW0Du9.png',
                    'visitante' => 'CD Badajoz (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tr1MYbDa-n7GEVq2c.png',
                    'score' => '0-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            142 =>
                array (
                    'local' => 'Algeciras (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Aw5o8FXg-U9vcgRFS.png',
                    'visitante' => 'Granada B (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YXYm7dg5-fV8m6AF4.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            143 =>
                array (
                    'local' => 'Antoniano (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Qw0u7Iil-MovNnzR4.png',
                    'visitante' => 'Europa FC (Gib)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MJlK0dDa-h8DfVWYI.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            144 =>
                array (
                    'local' => 'Atl. Tordesillas (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2awAGpgl-E5pq3rcQ.png',
                    'visitante' => 'Cristo Atlético (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YyoY1qZA-Qe4wp3jl.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            145 =>
                array (
                    'local' => 'Cádiz (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0Q4qMJeM-tbeRSSTP.png',
                    'visitante' => 'Las Palmas (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/44xPoqHG-QeEhgiDp.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            146 =>
                array (
                    'local' => 'Calahorra (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KQOiRGEa-KpIN5239.png',
                    'visitante' => 'Real Zaragoza (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xAVdihZA-SEZX32yP.png',
                    'score' => '0-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            147 =>
                array (
                    'local' => 'L\'Hospitalet (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CWQZqhgl-S40ZNh0l.png',
                    'visitante' => 'Sabadell (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GpZsFGDa-jq1jgydj.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            148 =>
                array (
                    'local' => 'Orihuela (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4dhXnoyS-IVx9K4y6.png',
                    'visitante' => 'Cartagena (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EeqU2NCr-Shh7JX9e.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            149 =>
                array (
                    'local' => 'Salzburgo (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KAMLuseM-rXY0b1UG.png',
                    'visitante' => 'Chelsea (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GMmvDEdM-2B0QucIK.png',
                    'score' => '3-5',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            150 =>
                array (
                    'local' => 'Santa Ana (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KA4FMNyS-zwx6V3ye.png',
                    'visitante' => 'Carabanchel (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fskDpeil-OCP396o3.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            151 =>
                array (
                    'local' => 'Santa Marta Tormes (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WxyediYA-I1qxoYUl.png',
                    'visitante' => 'Guijuelo (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/C612kih5-KCpdgSx7.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            152 =>
                array (
                    'local' => 'Teruel (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tpWoC3Cr-Clv2t1GF.png',
                    'visitante' => 'Castellón (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lxWg57g5-jJugf70M.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            153 =>
                array (
                    'local' => 'Tienen (Bel)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Gnr9mjil-hvMLdXd9.png',
                    'visitante' => 'Heist (Bel)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KQPRzPXg-UicFNs1L.png',
                    'score' => '0-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            154 =>
                array (
                    'local' => 'Torrellano (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/thUycKfM-4MJ3kv5S.png',
                    'visitante' => 'Hércules (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MaR9iUWg-MBqlExYF.png',
                    'score' => '1-5',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            155 =>
                array (
                    'local' => 'Varea (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/23aLDWCr-S40jTtEr.png',
                    'visitante' => 'Haro Deportivo (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lM2UA7cM-vX9ta44I.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            156 =>
                array (
                    'local' => 'Prat (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bu2ONlyB-IPkURWds.png',
                    'visitante' => 'Espanyol B (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CWPezaCa-UX2TBBm0.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            157 =>
                array (
                    'local' => 'Racing Ferrol (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/M3ahWICa-jXWhucDp.png',
                    'visitante' => 'Ponferradina (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Sz1QUTGG-pO7GfiyQ.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            158 =>
                array (
                    'local' => 'Alzira (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AV7KcSYg-8z0O6PTk.png',
                    'visitante' => 'Valencia B (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lCb3w0Ea-nu4pYN55.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            159 =>
                array (
                    'local' => 'Bamber Bridge (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vFfMM6cM-bLEZUFg8.png',
                    'visitante' => 'Everton Sub-23 (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rFzRunh5-SpCJOwbc.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            160 =>
                array (
                    'local' => 'Banbridge (Nir)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hjNvx1g5-ELU06tK5.png',
                    'visitante' => 'Glenavon (Nir)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dxv8JXCr-b7N1MBl3.png',
                    'score' => '3-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            161 =>
                array (
                    'local' => 'Calamonte (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dvJy96cM-YqbHVyvC.png',
                    'visitante' => 'Villanovense (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MqNCg1GG-6Vejzpkc.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            162 =>
                array (
                    'local' => 'CF Talavera (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CbzgULFG-htc3Uw0N.png',
                    'visitante' => 'Getafe B (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/U7KVisEa-G6YPa12N.png',
                    'score' => '0-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            163 =>
                array (
                    'local' => 'GD Joane (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nLjFa5Ar-jR7KzIPe.png',
                    'visitante' => 'Cacadores Taipas (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jgnCUnCa-fLHTibHh.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            164 =>
                array (
                    'local' => 'Perugia (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6BkUJqDa-80DjiSQM.png',
                    'visitante' => 'Roma (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Op2545Da-rawUVFkk.png',
                    'score' => '1-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            165 =>
                array (
                    'local' => 'Petrelense (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'visitante' => 'Eldense (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Gps25TXg-z7yDtRR6.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            166 =>
                array (
                    'local' => 'Trival Valderas (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/G6kADjHG-zyBgIaY6.png',
                    'visitante' => 'Illescas (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dK0VNaxS-tGvwa85T.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            167 =>
                array (
                    'local' => 'Curzon Ashton (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AP9c8OBr-dAXxjgkg.png',
                    'visitante' => 'Burnley Sub-23 (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/E1ibhtwS-pWLnVXqB.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            168 =>
                array (
                    'local' => 'Don Benito (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/I3AZX9xS-xC15Ywfg.png',
                    'visitante' => 'Extremadura (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vaomGQFG-pWVCgPl3.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            169 =>
                array (
                    'local' => 'Eccleshall (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'visitante' => 'Newcastle Town (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/I1SvwbDa-IZlm4QXB.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            170 =>
                array (
                    'local' => 'Grays (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/UemDQzFa-v5m3gW8n.png',
                    'visitante' => 'Kingstonian (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/K6YeK1FG-Ek4s97wt.png',
                    'score' => '5-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            171 =>
                array (
                    'local' => 'El Palo (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4SRGKTjl-4W2ucUKE.png',
                    'visitante' => 'Malagueño (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EBGbydGG-lARQfK46.png',
                    'score' => '1-2(1-1)',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            172 =>
                array (
                    'local' => 'Miajadas (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'visitante' => 'Mérida AD (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8EuV22Wg-2aMdmw0t.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            173 =>
                array (
                    'local' => 'Las Rozas (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/x2mRhrh5-K8QeNDNh.png',
                    'visitante' => 'Rayo Vallecano (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jqaha0f5-SCAy65MC.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            174 =>
                array (
                    'local' => 'Real Madrid',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/A7kHoxZA-2irdgP53.png',
                    'visitante' => 'Fenerbahce',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/r5GaGDil-hG3PU6yI.png',
                    'score' => '5-3',
                    'competition' => 'MUNDIAL: Audi Cup - 3ª posición',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            175 =>
                array (
                    'local' => 'Tottenham',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pjJVnSFG-bPr4YEAf.png',
                    'visitante' => 'Bayern Múnich',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2XitNyyB-AylzU6N3.png',
                    'score' => '3-2(2-2)',
                    'competition' => 'MUNDIAL: Audi Cup - Final',
                    'date' => '30/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            176 =>
                array (
                    'local' => 'RSC Anderlecht F (Bel)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SQx2jtDr-h4iAuYE0.png',
                    'visitante' => 'Den Haag F (Ned)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/l8HWJICa-tdr4wctN.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs Femeninos',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            177 =>
                array (
                    'local' => 'Vålerenga F (Nor)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fmPZYRhl-Gj4BMau7.png',
                    'visitante' => 'Manchester Utd F (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/4OKbjNXg-YmEgXtkK.png',
                    'score' => '4-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs Femeninos',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            178 =>
                array (
                    'local' => 'México F',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QT9nmGAr-MucVv9Hf.png',
                    'visitante' => 'Paraguay F',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/085CMdg5-MiT4TR5J.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Juegos Panamericanos Femenino',
                    'date' => '24/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            179 =>
                array (
                    'local' => 'Jamaica F',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2R3oy4fM-2u0cRSbR.png',
                    'visitante' => 'Colombia F',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/04s7uChl-6i34eJY7.png',
                    'score' => '0-2',
                    'competition' => 'MUNDIAL: Juegos Panamericanos Femenino',
                    'date' => '30/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            180 =>
                array (
                    'local' => 'Mauritania Sub-20',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/YVSNZ4FG-KdY9FPQn.png',
                    'visitante' => 'Argentina Sub-20',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bicvVcHG-hU6bI1cI.png',
                    'score' => '1-4',
                    'competition' => 'MUNDIAL: COTIF L\'Alcúdia',
                    'date' => '30/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            181 =>
                array (
                    'local' => 'Esteli',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KYUvApxS-MVXblrlQ.png',
                    'visitante' => 'Santa Tecla',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Ual28Bg5-htsjLuQG.png',
                    'score' => '2-1',
                    'competition' => 'NORTE, CENTROAMÉRICA Y CARIBE: Liga CONCACAF - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            182 =>
                array (
                    'local' => 'Cruzeiro (Bra)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QDS2MvBr-0rn95JMc.png',
                    'visitante' => 'River Plate (Arg)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Ic4xH0Yg-48MRYCtA.png',
                    'score' => '0-1(0-0)',
                    'competition' => 'SUDAMÉRICA: Copa Libertadores - Playoffs - 1/8 de final',
                    'date' => '24/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            183 =>
                array (
                    'local' => 'Olimpia (Par)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OEyQgGEa-rPbahbw0.png',
                    'visitante' => 'LDU Quito (Ecu)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AF7l7MZA-IyQXlc4B.png',
                    'score' => '1-1',
                    'competition' => 'SUDAMÉRICA: Copa Libertadores - Playoffs - 1/8 de final',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            184 =>
                array (
                    'local' => 'Palmeiras (Bra)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xCtpyPHG-4WCh0hzo.png',
                    'visitante' => 'Godoy Cruz (Arg)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KnQeHYwS-G0TO8JNt.png',
                    'score' => '4-0',
                    'competition' => 'SUDAMÉRICA: Copa Libertadores - Playoffs - 1/8 de final',
                    'date' => '27/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            185 =>
                array (
                    'local' => 'Sporting Cristal (Per)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bT8P90Ar-lzgWcKK7.png',
                    'visitante' => 'Zulia (Ven)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8K9KIZAr-beXpWQwB.png',
                    'score' => '3-2',
                    'competition' => 'SUDAMÉRICA: Copa Sudamericana - 1/8 de final',
                    'date' => '25/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            186 =>
                array (
                    'local' => 'Fluminense (Bra)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WlxJgSdM-ptTI6fcH.png',
                    'visitante' => 'Peñarol (Uru)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8rkcbrGG-YuvUDB4p.png',
                    'score' => '3-1',
                    'competition' => 'SUDAMÉRICA: Copa Sudamericana - 1/8 de final',
                    'date' => '26/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            187 =>
                array (
                    'local' => 'Syrianska',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/G24vt3wS-j3JKu987.png',
                    'visitante' => 'Östers',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MPSeq4FG-CCKGtkg1.png',
                    'score' => '1-1',
                    'competition' => 'SUECIA: Superettan - Jornada 12',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            188 =>
                array (
                    'local' => 'Muangthong',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6cCdwdyB-jeFCc2w4.png',
                    'visitante' => 'Chainat',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/29z4TteM-AgsGdozf.png',
                    'score' => '3-0',
                    'competition' => 'TAILANDIA: Thai League 1 - Jornada 21',
                    'date' => '29/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            189 =>
                array (
                    'local' => 'Nakhon Ratchasima',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xUXLuGeM-0fAeGZJE.png',
                    'visitante' => 'Prachuap',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jqV58IzB-rqX0UGZF.png',
                    'score' => '3-1',
                    'competition' => 'TAILANDIA: Thai League 1 - Jornada 21',
                    'date' => '26/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            190 =>
                array (
                    'local' => 'Chiangrai',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6akZ4HdM-EeHAJ4HK.png',
                    'visitante' => 'Buriram',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ADWWB6Br-zacEqxP5.png',
                    'score' => '4-0',
                    'competition' => 'TAILANDIA: Thai League 1 - Jornada 21',
                    'date' => '23/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            191 =>
                array (
                    'local' => 'Chonburi',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6gdjL1Cr-C4G8brOc.png',
                    'visitante' => 'Bangkok Utd',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Y1NdwVVg-YPkaAerp.png',
                    'score' => '2-1',
                    'competition' => 'TAILANDIA: Thai League 1 - Jornada 21',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            192 =>
                array (
                    'local' => 'Sukhothai',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hb7sL7Cr-jTnh20lF.png',
                    'visitante' => 'PTT Rayong',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UTLtGcXg-bwzeIOf4.png',
                    'score' => '3-1',
                    'competition' => 'TAILANDIA: Thai League 1 - Jornada 21',
                    'date' => '24/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            193 =>
                array (
                    'local' => 'Ratchaburi',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vLmgPKeM-dOWe8Gbs.png',
                    'visitante' => 'Samut Prakan City',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lYS4vVil-l0Gu7u2o.png',
                    'score' => '5-2',
                    'competition' => 'TAILANDIA: Thai League 1 - Jornada 21',
                    'date' => '27/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            194 =>
                array (
                    'local' => 'Trat FC',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0Qvcrxjl-0G5TkdN0.png',
                    'visitante' => 'Port MTI FC',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OQS0nRBr-2c58WvZb.png',
                    'score' => '1-2',
                    'competition' => 'TAILANDIA: Thai League 1 - Jornada 21',
                    'date' => '23/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            195 =>
                array (
                    'local' => 'Dnipro-1',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vcTrjbEa-v7SWmP4S.png',
                    'visitante' => 'Olimpik Donetsk',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/I3IjcCXg-WAMhaoaH.png',
                    'score' => '2-0',
                    'competition' => 'UCRANIA: Premier League - Jornada 1',
                    'date' => '27/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            196 =>
                array (
                    'local' => 'Oleksandriya',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IqBO4gil-ILyTGkYF.png',
                    'visitante' => 'Shakhtar',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/x2qCsFCr-xr4ldnwr.png',
                    'score' => '1-3',
                    'competition' => 'UCRANIA: Premier League - Jornada 1',
                    'date' => '26/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            197 =>
                array (
                    'local' => 'Karpaty',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SG983Zkl-GY2he6hl.png',
                    'visitante' => 'Dinamo Kiev',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KG9zc9yB-GY2he6hl.png',
                    'score' => '0-2',
                    'competition' => 'UCRANIA: Premier League - Jornada 1',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            198 =>
                array (
                    'local' => 'Bunyodkor',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Ia08igf5-E1tELe3C.png',
                    'visitante' => 'Termez Surkhon',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MBX1cGZA-hhs01pCt.png',
                    'score' => '3-0',
                    'competition' => 'UZBEKISTÁN: Super League - Jornada 15',
                    'date' => '28/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            199 =>
                array (
                    'local' => 'AGMK',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bRmCDecM-hhuIKFII.png',
                    'visitante' => 'Andijan',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/l8lYvGzS-hY4b1siU.png',
                    'score' => '2-2',
                    'competition' => 'UZBEKISTÁN: Super League - Jornada 15',
                    'date' => '30/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            200 =>
                array (
                    'local' => 'Buxoro',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/I367QPxS-COpbg9GE.png',
                    'visitante' => 'Navbahor Namangan',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/S8p6FCeM-QT9syy3a.png',
                    'score' => '0-0',
                    'competition' => 'UZBEKISTÁN: Super League - Jornada 15',
                    'date' => '27/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            201 =>
                array (
                    'local' => 'Nasaf Qarshi',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fyexKxDa-MB1x4UpC.png',
                    'visitante' => 'Met. Bekobod',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WxTgTkFa-Es6f2NyO.png',
                    'score' => '1-2',
                    'competition' => 'UZBEKISTÁN: Super League - Jornada 15',
                    'date' => '25/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            202 =>
                array (
                    'local' => 'APOEL (Cyp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/x2BrosXg-SM1DsDl1.png',
                    'visitante' => 'Sutjeska (Mne)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hKzHNQcM-EPYOcVw6.png',
                    'score' => '3-0',
                    'competition' => 'EUROPA: Champions League - Clasificación - Cuartos de final',
                    'date' => '23/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            203 =>
                array (
                    'local' => 'M. Tel Aviv (Isr)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/GGBSZmil-lOxUSB7S.png',
                    'visitante' => 'CFR Cluj (Rou)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/S6SYxvWg-YHwiLvfK.png',
                    'score' => '2-2',
                    'competition' => 'EUROPA: Champions League - Clasificación - Cuartos de final',
                    'date' => '24/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            204 =>
                array (
                    'local' => 'Nomme Kalju (Est)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AgK0X9Xg-YgZbBIrn.png',
                    'visitante' => 'Celtic (Sco)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/6BtM40Br-CzHZteGt.png',
                    'score' => '0-2',
                    'competition' => 'EUROPA: Champions League - Clasificación - Cuartos de final',
                    'date' => '30/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            205 =>
                array (
                    'local' => 'Basilea (Sui)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zLR1KgYg-pd5ZYb52.png',
                    'visitante' => 'PSV (Ned)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rXofTCZA-bcEywAKT.png',
                    'score' => '2-1',
                    'competition' => 'EUROPA: Champions League - Clasificación - Cuartos de final',
                    'date' => '29/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            206 =>
                array (
                    'local' => 'Dinamo Zagreb (Cro)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/YktDsvYg-6Renvvr9.png',
                    'visitante' => 'Saburtalo Tbilisi (Geo)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bujrJCEa-2X1i3aoM.png',
                    'score' => '3-0',
                    'competition' => 'EUROPA: Champions League - Clasificación - Cuartos de final',
                    'date' => '27/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            207 =>
                array (
                    'local' => 'Valletta (Mlt)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vqF6jcg5-r3s43qy3.png',
                    'visitante' => 'Ferencvaros (Hun)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OvQtjVhl-GhNTdor3.png',
                    'score' => '1-1',
                    'competition' => 'EUROPA: Champions League - Clasificación - Cuartos de final',
                    'date' => '27/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            208 =>
                array (
                    'local' => 'Olympiacos (Gre)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/C6DyywyB-SI9UPajS.png',
                    'visitante' => 'Plzen (Cze)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UBo6ihh5-6sEsOLMh.png',
                    'score' => '4-0',
                    'competition' => 'EUROPA: Champions League - Clasificación - Cuartos de final',
                    'date' => '29/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            209 =>
                array (
                    'local' => 'Lincoln (Gib)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KGFtXvwS-GrlegRvh.png',
                    'visitante' => 'Ararat-Armenia (Arm)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tWIIcrhl-vZWmVJKh.png',
                    'score' => '1-2',
                    'competition' => 'EUROPA: Europa League - Clasificación - Cuartos de final',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            210 =>
                array (
                    'local' => 'Suduva (Ltu)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/A1ysJqyB-fqYOah4o.png',
                    'visitante' => 'Tre Penne (San)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ruY0fTCa-Uqgp2dbh.png',
                    'score' => '5-0',
                    'competition' => 'EUROPA: Europa League - Clasificación - Cuartos de final',
                    'date' => '27/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            211 =>
                array (
                    'local' => 'Dudelange (Lux)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vRaZvZfM-jgft3xqn.png',
                    'visitante' => 'Shkëndija (Mkd)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Sp9Q7qe5-UHvCt4sd.png',
                    'score' => '1-1',
                    'competition' => 'EUROPA: Europa League - Clasificación - Cuartos de final',
                    'date' => '26/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            212 =>
                array (
                    'local' => 'KF Feronikeli (Kos)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jNMkrodM-SnTd4DLN.png',
                    'visitante' => 'Slovan Bratislava (Svk)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nF96wcwS-UHEsuZpg.png',
                    'score' => '0-2',
                    'competition' => 'EUROPA: Europa League - Clasificación - Cuartos de final',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            213 =>
                array (
                    'local' => 'Jena',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QFvxxFf5-Um1broz4.png',
                    'visitante' => 'Braunschweig',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jTPygLBr-SKpuGhom.png',
                    'score' => '0-2',
                    'competition' => 'ALEMANIA: 3. Liga - Jornada 3',
                    'date' => '28/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            214 =>
                array (
                    'local' => 'Kaiserslautern',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pAs4omCr-nLRsbtQR.png',
                    'visitante' => 'Ingolstadt',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/4dq60IAr-K6FXwj5N.png',
                    'score' => '0-0',
                    'competition' => 'ALEMANIA: 3. Liga - Jornada 3',
                    'date' => '25/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            215 =>
                array (
                    'local' => 'Rostock',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4EFuKCZA-S82PeYBB.png',
                    'visitante' => 'Bayern Múnich II',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EN7EzVGG-pCspZtcj.png',
                    'score' => '2-1',
                    'competition' => 'ALEMANIA: 3. Liga - Jornada 3',
                    'date' => '25/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            216 =>
                array (
                    'local' => 'Uerdingen',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bsZe8mAr-dfaaLbap.png',
                    'visitante' => 'Unterhaching',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zkutRtDr-zk8tJzWQ.png',
                    'score' => '2-2',
                    'competition' => 'ALEMANIA: 3. Liga - Jornada 3',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            217 =>
                array (
                    'local' => 'Würzburger Kickers',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hl2Y1JHG-jiP0452i.png',
                    'visitante' => 'Grossaspach',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/riTD45Ca-2u2iUVB0.png',
                    'score' => '0-3',
                    'competition' => 'ALEMANIA: 3. Liga - Jornada 3',
                    'date' => '24/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            218 =>
                array (
                    'local' => 'Altglienicke',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/l8kHiW9r-l4YyOSHk.png',
                    'visitante' => 'Auerbach',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/h8OMSweM-Ic7n0qnl.png',
                    'score' => '4-1',
                    'competition' => 'ALEMANIA: Regionalliga Nordost - Jornada 2',
                    'date' => '26/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            219 =>
                array (
                    'local' => 'Hertha Berlín II',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QgosQ1Ca-G6nOIenc.png',
                    'visitante' => 'Cottbus',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pfixGFFG-SAXCYARb.png',
                    'score' => '5-2',
                    'competition' => 'ALEMANIA: Regionalliga Nordost - Jornada 2',
                    'date' => '30/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            220 =>
                array (
                    'local' => 'Arsenal Sarandí',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nPXYHkh5-Q7p7NLM4.png',
                    'visitante' => 'Banfield',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UBFrXuDa-6F5VmgXG.png',
                    'score' => '1-0',
                    'competition' => 'ARGENTINA: Superliga - Jornada 1',
                    'date' => '23/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            221 =>
                array (
                    'local' => 'Atl. Tucumán',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0hFCl2f5-pKyJWknf.png',
                    'visitante' => 'Rosario Central',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nsZ9XOg5-IoJzkBC9.png',
                    'score' => '1-2',
                    'competition' => 'ARGENTINA: Superliga - Jornada 1',
                    'date' => '25/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            222 =>
                array (
                    'local' => 'Royal Pari',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IFErB3HG-AetXWB0b.png',
                    'visitante' => 'Blooming',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Y1JlKGdM-MNZDKaGs.png',
                    'score' => '3-1',
                    'competition' => 'BOLIVIA: División Profesional - Clausura - Jornada 4',
                    'date' => '24/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            223 =>
                array (
                    'local' => 'CSA',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/UPX8Hag5-63NwBgzb.png',
                    'visitante' => 'Gremio',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QPdJscAr-4WCh0hzo.png',
                    'score' => '0-0',
                    'competition' => 'BRASIL: Brasileirao Serie A - Jornada 12',
                    'date' => '24/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            224 =>
                array (
                    'local' => 'Coritiba',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xKm8lie5-ziJpBiXs.png',
                    'visitante' => 'Botafogo SP',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lduff8Ca-pdepRDDN.png',
                    'score' => '3-2',
                    'competition' => 'BRASIL: Brasileirao Serie B - Jornada 13',
                    'date' => '23/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            225 =>
                array (
                    'local' => 'Sport Recife',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/O0aua6ZA-KAPnxsGE.png',
                    'visitante' => 'Guaraní',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nVW3uzAr-f9gRHS7H.png',
                    'score' => '1-1',
                    'competition' => 'BRASIL: Brasileirao Serie B - Jornada 13',
                    'date' => '30/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            226 =>
                array (
                    'local' => 'Daegu',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hxQYhHWg-0WTw39Yq.png',
                    'visitante' => 'Suwon',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OndahADa-UoSiXBtO.png',
                    'score' => '0-2',
                    'competition' => 'COREA DEL SUR: K League 1 - Jornada 23',
                    'date' => '29/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            227 =>
                array (
                    'local' => 'Incheon',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KjixdedM-42iNWCnC.png',
                    'visitante' => 'Gyeongnam',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jDOGkmBr-42iNWCnC.png',
                    'score' => '1-1',
                    'competition' => 'COREA DEL SUR: K League 1 - Jornada 23',
                    'date' => '26/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            228 =>
                array (
                    'local' => 'Seongnam',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/d2Gj9NDa-tYXlmjsE.png',
                    'visitante' => 'Sangju Sangmu',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bPfyFjjl-QBhJXhX5.png',
                    'score' => '1-0',
                    'competition' => 'COREA DEL SUR: K League 1 - Jornada 23',
                    'date' => '29/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            229 =>
                array (
                    'local' => 'Ulsan Hyundai',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/I9mJB4xS-Qg76KW62.png',
                    'visitante' => 'Seoul',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lYmWcCfM-KdOvkf2t.png',
                    'score' => '3-1',
                    'competition' => 'COREA DEL SUR: K League 1 - Jornada 23',
                    'date' => '27/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            230 =>
                array (
                    'local' => 'America de Quito',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2siUn6g5-EVZKIlhD.png',
                    'visitante' => 'Dep. Cuenca',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tfVpg5YA-EZHnSJaK.png',
                    'score' => '3-0',
                    'competition' => 'ECUADOR: Liga Pro - Jornada 19',
                    'date' => '25/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            231 =>
                array (
                    'local' => 'Persipura',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/K8b057f5-C4G8brOc.png',
                    'visitante' => 'Persija Jakarta',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2uyZBddM-hjC8KtQI.png',
                    'score' => '-',
                    'competition' => 'INDONESIA: Liga 1 - Jornada 11',
                    'date' => '23/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            232 =>
                array (
                    'local' => 'Arema',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CnpWgcCa-Clh2l9jI.png',
                    'visitante' => 'Persib',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/G6HiiIg5-4v5X7OcA.png',
                    'score' => '5-1',
                    'competition' => 'INDONESIA: Liga 1 - Jornada 4',
                    'date' => '23/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            233 =>
                array (
                    'local' => 'Ashdod',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ELGVYldM-db1KeSC4.png',
                    'visitante' => 'H. Tel-Aviv',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dYr5gCCr-YH51pF4r.png',
                    'score' => '3-2',
                    'competition' => 'ISRAEL: Toto Cup - Jornada 2',
                    'date' => '26/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            234 =>
                array (
                    'local' => 'Azuqueca (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/d2JfboGG-MT46WF1f.png',
                    'visitante' => 'Alcorcón B (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UDD3Srjl-fJxFO2u4.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            235 =>
                array (
                    'local' => 'Athletic Club B (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/j52EfkHG-ULtrEX0S.png',
                    'visitante' => 'Arenas Club (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IHEfxQCa-EwpAabWA.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            236 =>
                array (
                    'local' => 'Maia (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jRN0uWjl-xQObftVC.png',
                    'visitante' => 'Vizela (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GYCwoNCr-IFUpPyQi.png',
                    'score' => '0-5',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            237 =>
                array (
                    'local' => 'Adelaide United (Aus)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bgPG26GG-QHNNZhR3.png',
                    'visitante' => 'Adelaide Raiders (Aus)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/naeXvqAr-EcITn9eh.png',
                    'score' => '5-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            238 =>
                array (
                    'local' => 'Sintrense (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nqkAILzS-Qu0v97WB.png',
                    'visitante' => 'V. Setúbal Sub-23 (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OxBJNrzB-jNRJtQ6o.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            239 =>
                array (
                    'local' => 'Erzurum BB (Tur)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SGSNqjzB-AXTpyfPt.png',
                    'visitante' => 'Adana Demirspor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xGflc2jl-4S4QMFkU.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            240 =>
                array (
                    'local' => 'Samsunspor (Tur)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QTKd3FxS-tdOFEVzk.png',
                    'visitante' => 'Bayrampasa (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fPRvzNg5-6Tda7lVe.png',
                    'score' => '3-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            241 =>
                array (
                    'local' => 'Espanyol (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SObn7xDr-Eq7v4whI.png',
                    'visitante' => 'PSG (Fra)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EskJufg5-lIDJVsTo.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            242 =>
                array (
                    'local' => 'Sydney FC (Aus)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/40aWoCil-E7siXNRA.png',
                    'visitante' => 'PSG (Fra)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EskJufg5-lIDJVsTo.png',
                    'score' => '0-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            243 =>
                array (
                    'local' => 'Rizespor (Tur)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/GMx1mueM-zZwxlQkm.png',
                    'visitante' => 'Antalyaspor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/f1wRMdEG-GrC0hB6h.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            244 =>
                array (
                    'local' => 'Chippenham (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/f3Js8mhl-nJxHtCPN.png',
                    'visitante' => 'Newport (Wal)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tY1fkyYg-lO2WsPFm.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            245 =>
                array (
                    'local' => 'Menemen Belediye (Tur)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pAGib4eM-nkLVzxIi.png',
                    'visitante' => 'Balikesirspor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OxerKQEG-lKAvvmCA.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            246 =>
                array (
                    'local' => 'Radnicki Nis (Srb)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/feqtGbCa-YX17BcxG.png',
                    'visitante' => 'Radnik (Srb)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/08C5YOWg-YqOXGANg.png',
                    'score' => '0-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            247 =>
                array (
                    'local' => 'Giresunspor (Tur)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hp9XR5Xg-pGB4ZQzf.png',
                    'visitante' => 'Elazigspor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QyllPcg5-6PC0z7Lm.png',
                    'score' => '6-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            248 =>
                array (
                    'local' => 'Spezia (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2yWnWaBr-pI6ga41n.png',
                    'visitante' => 'Fermana (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AZLizmFG-KYobvX0r.png',
                    'score' => '3-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            249 =>
                array (
                    'local' => 'Aerostar (Rou)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2y1eAQdM-zyym14wU.png',
                    'visitante' => 'Bucovina Radauti (Rou)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vgTvynFa-nZG2J2NH.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            250 =>
                array (
                    'local' => 'Cosenza (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Yc4PXijl-nJrPQuvg.png',
                    'visitante' => 'Monopoli (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EPZfn1yS-v76AUkwA.png',
                    'score' => '1-5',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            251 =>
                array (
                    'local' => 'FC Oss (Ned)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fHXqbhGG-CnLltYrI.png',
                    'visitante' => 'Umm-Salal (Qat)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ELyZwCYA-4tlzHqYP.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            252 =>
                array (
                    'local' => 'Xanthi (Gre)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Kj6PrDeM-29PmZVKD.png',
                    'visitante' => 'Nea Salamis (Cyp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pbkQnrCr-YqYJMygF.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            253 =>
                array (
                    'local' => 'Juve Stabia (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vgXiMjg5-8pcUOWub.png',
                    'visitante' => 'Campobasso (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tGiYSzDa-UumRDJbk.png',
                    'score' => '3-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            254 =>
                array (
                    'local' => 'Monza (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SUTtpvDa-foDUIoRj.png',
                    'visitante' => 'Frosinone (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MP0Dgnhl-jXzYs3WB.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            255 =>
                array (
                    'local' => 'Sandomierz (Pol)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dKR1Ssf5-EmPI8JYL.png',
                    'visitante' => 'Yehuda (Isr)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vZBQ4tcM-SbL3LU2H.png',
                    'score' => '0-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            256 =>
                array (
                    'local' => 'Al Wasl (Uae)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WSOq3hFG-SfNHZlc8.png',
                    'visitante' => 'Kayserispor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Mmg6GJxS-EePIZka0.png',
                    'score' => '1-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            257 =>
                array (
                    'local' => 'Næsby (Den)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AmCP2XxS-pjCSOnQ7.png',
                    'visitante' => 'Dalum IF (Den)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IqVdyLCa-84iWWLEM.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            258 =>
                array (
                    'local' => 'Vardar (Mkd)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ClbJdgcM-MeeXvCTB.png',
                    'visitante' => 'Rogaska (Slo)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UskMNgYg-6cGElX0a.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            259 =>
                array (
                    'local' => 'Al-Gharafa (Qat)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/UNvmbNCa-jLE0Un7l.png',
                    'visitante' => 'Eindhoven (Ned)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IkVuO4jl-QJxl86B2.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            260 =>
                array (
                    'local' => 'ASWH (Ned)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4IP65ahl-Sd2DAxBb.png',
                    'visitante' => 'Dordrecht (Ned)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/j1GNXkhl-dldTmxQm.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            261 =>
                array (
                    'local' => 'De Treffers (Ned)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/K2aCvzeM-jczMEm0d.png',
                    'visitante' => 'Nijmegen (Ned)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/4IGls6Fa-xUnkdXKi.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            262 =>
                array (
                    'local' => 'Den Bosch (Ned)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bPlRpaCa-WCiqpfPC.png',
                    'visitante' => 'Al-Taawon (Sau)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hrfMnkf5-6PUMl6VM.png',
                    'score' => '1-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            263 =>
                array (
                    'local' => 'Fuenlabrada (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ADgwMzDa-Gz4CED7Q.png',
                    'visitante' => 'Roda (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/l0yQEbhl-KEeKv8E8.png',
                    'score' => '4-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            264 =>
                array (
                    'local' => 'Gleinstatten (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fJvxL8yS-6JLTUHK1.png',
                    'visitante' => 'SV Wildon (Aut)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YycgrvZg-pY0N44YL.png',
                    'score' => '0-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            265 =>
                array (
                    'local' => 'Groene Ster (Ned)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Wb8ZUQXg-rZJFzVMF.png',
                    'visitante' => 'Roda (Ned)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/6kiJzlil-8lF1ED0e.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            266 =>
                array (
                    'local' => 'Grossklein (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IcKp5re5-OIxhfKVg.png',
                    'visitante' => 'Grazer (Am) (Aut)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            267 =>
                array (
                    'local' => 'Herzogenburg (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'visitante' => 'Retz (Aut)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xlpuTDyB-KYPTwJ2I.png',
                    'score' => '0-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            268 =>
                array (
                    'local' => 'Kristiansund (Nor)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Cfe4YYyS-I7Mi5rH4.png',
                    'visitante' => 'Manchester Utd (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nwSRlyWg-rBodzytr.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            269 =>
                array (
                    'local' => 'Málaga (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WMMX2rZg-WvKb1jNa.png',
                    'visitante' => 'Córdoba (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SvAe0DxS-S6HqkbxH.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            270 =>
                array (
                    'local' => 'Micheldorf (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/EitSJGWg-vNMnQjbl.png',
                    'visitante' => 'Parma (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YcrE7ae5-G8Rtggfp.png',
                    'score' => '0-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            271 =>
                array (
                    'local' => 'Nantes (Fra)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tvsQNgAr-GGPVSPvm.png',
                    'visitante' => 'Sporting de Gijón (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/n9PvyJhl-tMohf8N0.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            272 =>
                array (
                    'local' => 'Simmeringer (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/GWV18Kil-Y7Anza6A.png',
                    'visitante' => 'Donaufeld Wien (Aut)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fXA16he5-MPrGrpdP.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            273 =>
                array (
                    'local' => 'Sint Niklaas (Bel)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8OZ2Xae5-prQbGIk6.png',
                    'visitante' => 'Lokeren (Bel)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rHs31jyB-jaoKbSYS.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            274 =>
                array (
                    'local' => 'Su Rebenland (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fZYxw5FG-AkBX1zGs.png',
                    'visitante' => 'AC Linden Leibnitz (Aut)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pEJBFLBr-CbBiFgN8.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            275 =>
                array (
                    'local' => 'Torhout (Bel)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/n5ALu7Ar-jJLlF06T.png',
                    'visitante' => 'Gullegem (Bel)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pvaUqNil-vu2c69Lb.png',
                    'score' => '1-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            276 =>
                array (
                    'local' => 'El San Martín (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OGQqaWXg-MXviBQWd.png',
                    'visitante' => 'Langreo (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Qw62JaXg-8IGh4TiE.png',
                    'score' => '1-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            277 =>
                array (
                    'local' => 'Graafschap (Ned)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/l04dpAfM-vFG942fq.png',
                    'visitante' => 'Lienden (Ned)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WzTu3DeM-QoX8574F.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            278 =>
                array (
                    'local' => 'Haninge (Swe)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ETVNQnBr-WYd11wuD.png',
                    'visitante' => 'Hanvikens SK (Swe)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            279 =>
                array (
                    'local' => 'Korneuburg (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zqrAXcFG-8t1Nn1XM.png',
                    'visitante' => 'Haitzendorf (Aut)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KQV5nGCr-QNY40XsE.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            280 =>
                array (
                    'local' => 'Meerbusch (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6soVtNYA-YcXrEGyj.png',
                    'visitante' => 'Sonsbeck (Ger)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/A77CKEhl-C69TMMgT.png',
                    'score' => '4-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            281 =>
                array (
                    'local' => 'Schermbeck (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8jN5JIyB-2BUXv9JE.png',
                    'visitante' => 'Kleve (Ger)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pGkcD6dM-0ONzvLZ5.png',
                    'score' => '5-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            282 =>
                array (
                    'local' => 'St. Gallen (Sui)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/v1klJ9Xg-2oT57Ma9.png',
                    'visitante' => 'Dortmund (Ger)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Yiq1eU9r-dhhpTYj5.png',
                    'score' => '1-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            283 =>
                array (
                    'local' => 'Telstar (Ned)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xOmxdgXg-j5OTOT7N.png',
                    'visitante' => 'Katwijk (Ned)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WQ9JtkFG-YoclIplL.png',
                    'score' => '3-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            284 =>
                array (
                    'local' => 'Undy (Wal)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2ZJv2eDa-6yPS6jzo.png',
                    'visitante' => 'Cinderford (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/naie6zgl-QXFegdg1.png',
                    'score' => '0-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            285 =>
                array (
                    'local' => 'VfB Huls (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rgmpF3cM-bF7O0H4I.png',
                    'visitante' => 'Westfalia Langenbochum (Ger)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            286 =>
                array (
                    'local' => 'Bembibre (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/voQxwtf5-K00ks1z7.png',
                    'visitante' => 'Cultural Leonesa (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UNSRimZg-OtR2F6xn.png',
                    'score' => '1-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            287 =>
                array (
                    'local' => 'Eastleigh (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IFUcnrCr-As9Jjemb.png',
                    'visitante' => 'Southampton Sub-23 (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bcRSiuYg-0t7ZKecM.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            288 =>
                array (
                    'local' => 'Genoa (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KKFT9LZA-ERLRjHRE.png',
                    'visitante' => 'Kayserispor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Mmg6GJxS-EePIZka0.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            289 =>
                array (
                    'local' => 'Leca (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CnPj3wGG-fmtRDVaO.png',
                    'visitante' => 'Sao Pedro da Cova (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '6-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            290 =>
                array (
                    'local' => 'Muleño (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pWJNcZil-CUeOzGcN.png',
                    'visitante' => 'Real Murcia (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EX6tKhdM-CvqzGgWF.png',
                    'score' => '0-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            291 =>
                array (
                    'local' => 'Norwich (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CY8Xm4wS-bkEoMlFf.png',
                    'visitante' => 'Atalanta (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xASUZ6il-S82PeYBB.png',
                    'score' => '1-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            292 =>
                array (
                    'local' => 'St. Neots (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xhdIELEG-vqCL8Wzq.png',
                    'visitante' => 'MK Dons (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/6FpRb0Wg-SbuNZ7qf.png',
                    'score' => '0-6',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            293 =>
                array (
                    'local' => 'Villanueva CF (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SSYnwcCr-QeYS5QYL.png',
                    'visitante' => 'Ebro (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dUtV0XFG-6oCZSssg.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            294 =>
                array (
                    'local' => 'Bath (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Ui35wXAr-KSdpJKLk.png',
                    'visitante' => 'Bristol City Sub-23 (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ddnejHWg-IwkeDVlk.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            295 =>
                array (
                    'local' => 'Belper Town (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Y3DjMYAr-GWZEyOJh.png',
                    'visitante' => 'Mickleover (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rHe4l0wS-xA4EhD7f.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            296 =>
                array (
                    'local' => 'Bradford PA (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pCCxi9dM-fsTEgxAG.png',
                    'visitante' => 'Huddersfield Sub-23 (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8QIIlXh5-tYa7EY8i.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            297 =>
                array (
                    'local' => 'C. Rangers (Nir)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nJvUphjl-xbM5LV39.png',
                    'visitante' => 'Knockbreda (Nir)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zuAJ0rZA-t4IEH3hN.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            298 =>
                array (
                    'local' => 'Congleton (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Cf2LG7GG-0xoL9Hwr.png',
                    'visitante' => 'Leek (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MPew19HG-0AUDwmB6.png',
                    'score' => '4-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            299 =>
                array (
                    'local' => 'Coria C.F. (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zXnYTnHG-r7Nl2sOe.png',
                    'visitante' => 'Sevilla B (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Sxpw4PWg-YuOZShOm.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            300 =>
                array (
                    'local' => 'Crumlin United (Nir)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MehMuNWg-EcpzVteo.png',
                    'visitante' => 'Cliftonville (Nir)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lUck8CyB-ILssfci6.png',
                    'score' => '0-7',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            301 =>
                array (
                    'local' => 'Dunston (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QLrvdTDa-QPem0toU.png',
                    'visitante' => 'Morpeth (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QBEyqFXg-AHTO8pK8.png',
                    'score' => '3-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            302 =>
                array (
                    'local' => 'East Belfast (Nir)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CSPt8KGG-GOwbOAml.png',
                    'visitante' => 'Glenavon (Nir)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dxv8JXCr-b7N1MBl3.png',
                    'score' => '0-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            303 =>
                array (
                    'local' => 'Harrow (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/I3eo17jl-Ek4s97wt.png',
                    'visitante' => 'Potters Bar (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CzpQaCXg-Ol7Z4Czj.png',
                    'score' => '4-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            304 =>
                array (
                    'local' => 'Hebburn Town (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KlosBCcM-4IaNhJqF.png',
                    'visitante' => 'South Shields (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UHW7w0il-jHGZ8e4U.png',
                    'score' => '3-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            305 =>
                array (
                    'local' => 'Matlock (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2JLef9g5-zJmSmTWj.png',
                    'visitante' => 'Sheffield Utd Sub-23 (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CpeANgzB-Qmjehq2r.png',
                    'score' => '0-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            306 =>
                array (
                    'local' => 'Melksham (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OUZRDIjl-0ExQmKL7.png',
                    'visitante' => 'Swindon (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/614qaW9r-GzGhZJbs.png',
                    'score' => '0-6',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            307 =>
                array (
                    'local' => 'Pickering Town (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dv9nkmZg-GWwMvnmK.png',
                    'visitante' => 'York (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Ii5cBIZA-IZS7ppud.png',
                    'score' => '2-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            308 =>
                array (
                    'local' => 'Skelmersdale (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8dvdrrWg-8KyUa0jj.png',
                    'visitante' => 'Prescot (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Ya5vcGxS-fuOLx4HD.png',
                    'score' => '0-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            309 =>
                array (
                    'local' => 'Stone Old Alleynians (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zk8GmyZg-U9G2q7Ie.png',
                    'visitante' => 'Kidsgrove Athletic (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/E3rVXAzB-jeiLFEUJ.png',
                    'score' => '1-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            310 =>
                array (
                    'local' => 'Tavistock (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nPur3acM-pt1BX28E.png',
                    'visitante' => 'Plymouth (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/j9hjcFBr-MTfHh8a2.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            311 =>
                array (
                    'local' => 'West Auckland (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/b7tIiVCr-GElqrKAj.png',
                    'visitante' => 'Marske (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WYRJwOFG-tdQ8u2ks.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            312 =>
                array (
                    'local' => 'Ashton Town (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4Kn4yBXg-fLa4bjOg.png',
                    'visitante' => 'Widnes (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dfepEjEa-OWLak8Qb.png',
                    'score' => '5-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            313 =>
                array (
                    'local' => 'Bishop\'s Stortford (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/K4rzqyhl-YHHkfrFh.png',
                    'visitante' => 'Royston (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2FsKELHG-dQXznbmK.png',
                    'score' => '3-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            314 =>
                array (
                    'local' => 'Bromsgrove (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dYEPFqGG-SprJ7DB8.png',
                    'visitante' => 'Cheltenham (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fylq4GfM-Uioiyp8k.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            315 =>
                array (
                    'local' => 'Burnley (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lrUqOmDa-CKCXmfAs.png',
                    'visitante' => 'Niza (Fra)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/boyRUvyB-jiROSmFn.png',
                    'score' => '6-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            316 =>
                array (
                    'local' => 'Colwyn Bay (Wal)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dpGjnZyS-6ZgKDow6.png',
                    'visitante' => 'Crewe Sub-23 (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QeafTsDr-AuOE2o5q.png',
                    'score' => '1-5',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            317 =>
                array (
                    'local' => 'Eastbourne (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Cz5RRZdM-AJjyEksi.png',
                    'visitante' => 'Hastings (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EuKcWfe5-noac5Px5.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            318 =>
                array (
                    'local' => 'FC United (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ObeRKywS-fcXTbLHT.png',
                    'visitante' => 'Chester (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EHf94YBr-WrIJigNQ.png',
                    'score' => '4-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            319 =>
                array (
                    'local' => 'Halesowen (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SnYesPeM-08y2G0mm.png',
                    'visitante' => 'Alvechurch (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YJEFBLwS-KYLpWEd8.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            320 =>
                array (
                    'local' => 'Haywards (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zgKSXnCr-lneYg5y9.png',
                    'visitante' => 'Lewes (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dIXo3lYg-84mDIo4o.png',
                    'score' => '4-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            321 =>
                array (
                    'local' => 'Hibernian (Sco)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bgb702hl-Ye2KVwGH.png',
                    'visitante' => 'Newcastle (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fojwJwZA-KYq0Zfel.png',
                    'score' => '1-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            322 =>
                array (
                    'local' => 'Hornchurch (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IoOk9KyB-IgoxXHiD.png',
                    'visitante' => 'Billericay (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dnuP7DAr-QgwBVCU3.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            323 =>
                array (
                    'local' => 'Hyde (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KSnI3Ff5-vuUhfg5A.png',
                    'visitante' => 'Rochdale (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SKDrbiGG-6kvRYRb0.png',
                    'score' => '3-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            324 =>
                array (
                    'local' => 'Maldon & Tiptree (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IPWMcxGG-SGMFkRII.png',
                    'visitante' => 'Leiston (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Gn5aRbdM-noLDPejn.png',
                    'score' => '3-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            325 =>
                array (
                    'local' => 'Met. Police (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jVjT5dg5-QsDUJDbt.png',
                    'visitante' => 'Merstham (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SMhGFvCr-6meT8lJt.png',
                    'score' => '3-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            326 =>
                array (
                    'local' => 'Northwich Victoria (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vZCvpVwS-IoLu4nkh.png',
                    'visitante' => 'Buxton (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hETUvFyS-SryXUrgA.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            327 =>
                array (
                    'local' => 'Radcliffe (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MVzXR4Cr-Um3qrGMU.png',
                    'visitante' => 'Bury (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lYlCNvZA-GWBgKSq7.png',
                    'score' => '1-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            328 =>
                array (
                    'local' => 'Trafford (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/827e3jCa-CSEYatek.png',
                    'visitante' => 'Altrincham (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jFs6y4yB-IVSdgDKG.png',
                    'score' => '0-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            329 =>
                array (
                    'local' => 'Wimbledon (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8ziZJ2e5-6iHH0MVJ.png',
                    'visitante' => 'Crystal Palace (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AFNlsDzS-6sMoYuga.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            330 =>
                array (
                    'local' => 'Woking (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0G3s8yFG-AJfkxFpI.png',
                    'visitante' => 'Portsmouth (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rBGcCgeM-A72dXsHl.png',
                    'score' => '2-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            331 =>
                array (
                    'local' => 'Lebrijana (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rREv2odM-jgMGMTgG.png',
                    'visitante' => 'At. Sanluqueño (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rgmVqpEa-MBBnH6Pu.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            332 =>
                array (
                    'local' => 'Real Madrid',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/A7kHoxZA-2irdgP53.png',
                    'visitante' => 'Tottenham',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pjJVnSFG-bPr4YEAf.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: Audi Cup - Semifinales',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            333 =>
                array (
                    'local' => 'Bayern Múnich',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2XitNyyB-AylzU6N3.png',
                    'visitante' => 'Fenerbahce',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/r5GaGDil-hG3PU6yI.png',
                    'score' => '6-1',
                    'competition' => 'MUNDIAL: Audi Cup - Semifinales',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            334 =>
                array (
                    'local' => 'Jamaica Sub-23',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jBN97Qil-AsRkChZD.png',
                    'visitante' => 'Honduras Sub-23',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WddBEMjl-jZBgjxbo.png',
                    'score' => '1-3',
                    'competition' => 'MUNDIAL: Juegos Panamericanos',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            335 =>
                array (
                    'local' => 'Uruguay Sub-23',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4xaQ6fjl-WhgqdZDk.png',
                    'visitante' => 'Perú Sub-23',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/I9ay7DxS-dYX0y8xh.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Juegos Panamericanos',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            336 =>
                array (
                    'local' => 'Eskilsminne F (Swe)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8C2fP5eM-bZ7IdHW8.png',
                    'visitante' => 'Borgeby F (Swe)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '3-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs Femeninos',
                    'date' => '30/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            337 =>
                array (
                    'local' => 'España Sub-20',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Kb3iKZg5-f7ltFEOn.png',
                    'visitante' => 'Rusia Sub-20',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rst9a5Ea-ULpa3nSF.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: COTIF L\'Alcúdia',
                    'date' => '27/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            338 =>
                array (
                    'local' => 'Sparta Praga Sub-19',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QZwBjVjl-YREQn8Wt.png',
                    'visitante' => 'Palmeiras Sub-19',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GnjNn6h5-biwrrKdJ.png',
                    'score' => '0-2',
                    'competition' => 'MUNDIAL: CEE Cup - Playoffs - Final',
                    'date' => '24/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            339 =>
                array (
                    'local' => 'Lausanne Ouchy',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lrAVyhCr-E94AKTGk.png',
                    'visitante' => 'Winterthur',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GtRWIrf5-2JU9Py1C.png',
                    'score' => '1-2',
                    'competition' => 'SUIZA: Challenge League - Jornada 2',
                    'date' => '24/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            340 =>
                array (
                    'local' => 'Desna',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Cps4tjWg-bXp6iC9Q.png',
                    'visitante' => 'Lviv',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tKVoASh5-4dtbXLss.png',
                    'score' => '1-2',
                    'competition' => 'UCRANIA: Premier League - Jornada 1',
                    'date' => '26/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            341 =>
                array (
                    'local' => 'Kolos Kovalyovka',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/06TUGqEa-UVs8GHIK.png',
                    'visitante' => 'Mariupol',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jyT7bRCr-8nr8nP2m.png',
                    'score' => '2-1',
                    'competition' => 'UCRANIA: Premier League - Jornada 1',
                    'date' => '24/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            342 =>
                array (
                    'local' => 'Kokand 1912',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tK7NcIil-KpfV9Xdr.png',
                    'visitante' => 'Sogdiana',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zVa4YreM-p2A4YqJC.png',
                    'score' => '1-2',
                    'competition' => 'UZBEKISTÁN: Super League - Jornada 15',
                    'date' => '24/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            343 =>
                array (
                    'local' => 'Lok. Tashkent',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tArpsGYg-xUpWbUD3.png',
                    'visitante' => 'Din. Samarkand',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UmLj7mCr-Yi6ijiur.png',
                    'score' => '2-0',
                    'competition' => 'UZBEKISTÁN: Super League - Jornada 15',
                    'date' => '23/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            344 =>
                array (
                    'local' => 'Qizilqum',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WQtRWEil-4K8ozeI5.png',
                    'visitante' => 'Pakhtakor',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vwDodIWg-nwBwxHmg.png',
                    'score' => '0-5',
                    'competition' => 'UZBEKISTÁN: Super League - Jornada 15',
                    'date' => '30/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            345 =>
                array (
                    'local' => 'Mauricio',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hIn1yyDr-UaJCzV6T.png',
                    'visitante' => 'Zimbabue',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zeeP1ze5-QwFad6pm.png',
                    'score' => '0-4',
                    'competition' => 'ÁFRICA: Campeonato Africano de Naciones - Clasificación - Semifinales',
                    'date' => '30/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            346 =>
                array (
                    'local' => 'Bielefeld',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Umf4mzvS-8x5DHROH.png',
                    'visitante' => 'St. Pauli',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QZX02wCr-4W0TfhRH.png',
                    'score' => '1-1',
                    'competition' => 'ALEMANIA: 2. Bundesliga - Jornada 1',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            347 =>
                array (
                    'local' => 'Offenbach',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OEEJi9Cr-8v02s5kA.png',
                    'visitante' => 'Ulm',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YLrf0ZwS-rw4jfLvp.png',
                    'score' => '2-0',
                    'competition' => 'ALEMANIA: Regionalliga Sudwest - Jornada 1',
                    'date' => '23/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            348 =>
                array (
                    'local' => 'Boca Jrs.',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/h4UwH8Cr-48MRYCtA.png',
                    'visitante' => 'Huracán',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vBUdlvf5-29sxNiEq.png',
                    'score' => '0-0',
                    'competition' => 'ARGENTINA: Superliga - Jornada 1',
                    'date' => '26/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            349 =>
                array (
                    'local' => 'Oriente Petrolero',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KpDU2SzS-OKJf1gMU.png',
                    'visitante' => 'Destroyers',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lUFU7Kh5-0tBQExpL.png',
                    'score' => '3-1',
                    'competition' => 'BOLIVIA: División Profesional - Clausura - Jornada 4',
                    'date' => '26/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            350 =>
                array (
                    'local' => 'Fortaleza',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ObufU2YA-6s0SpTJp.png',
                    'visitante' => 'Corinthians',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lY91WW9r-AkqTkErP.png',
                    'score' => '1-3',
                    'competition' => 'BRASIL: Brasileirao Serie A - Jornada 12',
                    'date' => '23/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            351 =>
                array (
                    'local' => 'Goiás',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xd3edbeM-WxRSQZME.png',
                    'visitante' => 'Atlético-MG',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WbSJHDh5-lWKKdTEe.png',
                    'score' => '0-0',
                    'competition' => 'BRASIL: Brasileirao Serie A - Jornada 12',
                    'date' => '27/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            352 =>
                array (
                    'local' => 'Levski',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MemHeQzS-OIKez4iR.png',
                    'visitante' => 'Botev Plovdiv',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ldRCVczB-QJxahtWJ.png',
                    'score' => '3-1',
                    'competition' => 'BULGARIA: Parva Liga - Jornada 3',
                    'date' => '25/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            353 =>
                array (
                    'local' => 'Ludogorets',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/b71m7bEa-dMXZpGKS.png',
                    'visitante' => 'Bistritsa',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YB5LMQdM-CrqZpKXd.png',
                    'score' => '2-0',
                    'competition' => 'BULGARIA: Parva Liga - Jornada 3',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            354 =>
                array (
                    'local' => 'U. La Calera',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AJdiRXkl-A195eXeL.png',
                    'visitante' => 'Curicó Unido',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2Z9EJGWg-r9b4ROCj.png',
                    'score' => '2-0',
                    'competition' => 'CHILE: Primera División - Jornada 15',
                    'date' => '26/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            355 =>
                array (
                    'local' => 'Jaguares de Córdoba',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SxX288Ar-00Lejg5E.png',
                    'visitante' => 'Atl. Nacional',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EVh8vJcM-tt49Qllj.png',
                    'score' => '1-1',
                    'competition' => 'COLOMBIA: Liga Águila - Clausura - Jornada 3',
                    'date' => '28/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            356 =>
                array (
                    'local' => 'Ind. Santa Fe',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/foIzTxZg-APmauJpq.png',
                    'visitante' => 'Alianza Petrolera',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fHGh4Oil-GMSWYIqf.png',
                    'score' => '0-1',
                    'competition' => 'COLOMBIA: Liga Águila - Clausura - Jornada 3',
                    'date' => '25/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            357 =>
                array (
                    'local' => 'Ind. Medellín',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lMyrsdhl-Iq8Nj2EO.png',
                    'visitante' => 'Junior',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Kz2UFMh5-WztODOh7.png',
                    'score' => '0-1',
                    'competition' => 'COLOMBIA: Liga Águila - Clausura - Jornada 3',
                    'date' => '26/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            358 =>
                array (
                    'local' => 'Guadalupe',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/YH64pvzB-AuIe1h23.png',
                    'visitante' => 'Pérez Zeledón',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Q5NPpfyB-Gntgbe8j.png',
                    'score' => '1-2',
                    'competition' => 'COSTA RICA: Primera División - Apertura - Jornada 3',
                    'date' => '25/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            359 =>
                array (
                    'local' => 'Aalborg',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/EwBYzNCr-lpOPaq9l.png',
                    'visitante' => 'Silkeborg',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rDbrZGYg-W2lVne2T.png',
                    'score' => '3-1',
                    'competition' => 'DINAMARCA: Superliga - Jornada 3',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            360 =>
                array (
                    'local' => 'Macará',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CEpkiHCa-UXOA197Q.png',
                    'visitante' => 'Olmedo',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/65EHnTf5-pYY1rIxl.png',
                    'score' => '1-1',
                    'competition' => 'ECUADOR: Liga Pro - Jornada 19',
                    'date' => '23/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            361 =>
                array (
                    'local' => 'Atl. Porteño',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MsvN2mWg-2alussKF.png',
                    'visitante' => 'Orense',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xxeJM5eM-ShvueU5r.png',
                    'score' => '0-2',
                    'competition' => 'ECUADOR: Serie B - Jornada 20',
                    'date' => '30/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            362 =>
                array (
                    'local' => 'Loudoun',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hISNz7YA-QDmuoyvs.png',
                    'visitante' => 'Louisville City',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jTLaQaCa-G6UmALCs.png',
                    'score' => '3-0',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '27/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            363 =>
                array (
                    'local' => 'Portland 2',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fViKIzwS-ELYntsb1.png',
                    'visitante' => 'LA Galaxy 2',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dfExAvjl-K8CeCo3S.png',
                    'score' => '1-2',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '26/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            364 =>
                array (
                    'local' => 'Lorient',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lxyXOLFG-6knD5Jyp.png',
                    'visitante' => 'Paris FC',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AmyHz4Xg-0OaQr5Q8.png',
                    'score' => '3-0',
                    'competition' => 'FRANCIA: Ligue 2 - Jornada 1',
                    'date' => '23/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            365 =>
                array (
                    'local' => 'Motagua',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vHU6f3il-CYPz6H7a.png',
                    'visitante' => 'Platense',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/A7aDwoWg-vg1IYs9d.png',
                    'score' => '2-1',
                    'competition' => 'HONDURAS: Liga Nacional - Apertura - Jornada 1',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            366 =>
                array (
                    'local' => 'PSM Makassar',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/825RIjg5-vaKspLzr.png',
                    'visitante' => 'PSIS Semarang',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UXcAWwil-G6Y0N3cc.png',
                    'score' => '-',
                    'competition' => 'INDONESIA: Liga 1 - Jornada 11',
                    'date' => '29/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            367 =>
                array (
                    'local' => 'Persela',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QDAfGLYA-Qm6T84r4.png',
                    'visitante' => 'Pusamania Borneo',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xlWbT7f5-bD03z1x8.png',
                    'score' => '2-2',
                    'competition' => 'INDONESIA: Liga 1 - Jornada 11',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            368 =>
                array (
                    'local' => 'Derry City',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CO3dmGyS-4rJIAvgH.png',
                    'visitante' => 'Waterford',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0WRfm0hl-MHtA3Bzo.png',
                    'score' => '2-0',
                    'competition' => 'IRLANDA: Premier Division - Jornada 21',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            369 =>
                array (
                    'local' => 'Kopavogur',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MeDUpKBr-x6vfzz3H.png',
                    'visitante' => 'Stjarnan',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/p2q9hEXg-hf6YdOtf.png',
                    'score' => '1-1',
                    'competition' => 'ISLANDIA: Pepsideild - Jornada 14',
                    'date' => '30/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            370 =>
                array (
                    'local' => 'Vikingur Reykjavik',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SzqHvzil-zeVnAOaf.png',
                    'visitante' => 'Breidablik',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/4rkitkFG-2cDK81wm.png',
                    'score' => '3-2',
                    'competition' => 'ISLANDIA: Pepsideild - Jornada 14',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            371 =>
                array (
                    'local' => 'Atlético San Luis',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ttaXDaWg-tIcF9TJ0.png',
                    'visitante' => 'Monterrey',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nL0MOrAr-U122TbeH.png',
                    'score' => '1-0',
                    'competition' => 'MÉXICO: Liga MX - Apertura - Jornada 2',
                    'date' => '24/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            372 =>
                array (
                    'local' => 'Santos Laguna',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Ov1FIjAr-Knc3iIh6.png',
                    'visitante' => 'Juárez',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EyCbOdXg-tWfpTXPo.png',
                    'score' => '3-0',
                    'competition' => 'MÉXICO: Liga MX - Apertura - Jornada 2',
                    'date' => '28/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            373 =>
                array (
                    'local' => 'Guadalajara',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ro844CyS-GQK0VqvP.png',
                    'visitante' => 'U.A.N.L.',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Io5EvnDr-rFeOJfsp.png',
                    'score' => '2-0',
                    'competition' => 'MÉXICO: Liga MX - Apertura - Jornada 2',
                    'date' => '24/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            374 =>
                array (
                    'local' => 'San Sebastián de los Reyes (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QybRn7EG-WvEP87xf.png',
                    'visitante' => 'At. Baleares (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vTwfOyxS-Wt1S1gQ2.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            375 =>
                array (
                    'local' => 'Ajax (Ned)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rmxNnFxS-0603YTSp.png',
                    'visitante' => 'Sivasspor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/4IeFVHFG-2yGlZHsl.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            376 =>
                array (
                    'local' => 'Genclerbirligi (Tur)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bLnuvaAr-fZA4iVLb.png',
                    'visitante' => 'SumQayit (Aze)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pYqPzkWg-vulQ0fWe.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            377 =>
                array (
                    'local' => 'H. Ironi Rishon (Isr)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QVpI8OCr-2eEhAFtB.png',
                    'visitante' => 'H. Petah Tikva (Isr)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tWCvYIhl-vsD3F6Xp.png',
                    'score' => '1-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            378 =>
                array (
                    'local' => 'Crotone (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vTzgfkZA-h0o4CO4J.png',
                    'visitante' => 'Castrovillari (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/K8TydNzB-GAvNJUMi.png',
                    'score' => '3-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            379 =>
                array (
                    'local' => 'Ol. Nicosia (Cyp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OODoyXil-lMRKqDlH.png',
                    'visitante' => 'Drita (Kos)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KQqf4JdM-pQ6Br6X6.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            380 =>
                array (
                    'local' => 'Denizlispor (Tur)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/d6Pf6EzB-nL3RaQYl.png',
                    'visitante' => 'Umraniyespor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hO1MkHBr-6Tda7lVe.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            381 =>
                array (
                    'local' => 'Besiktas (Tur)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/YJhFX6il-Ug27OrDp.png',
                    'visitante' => 'Apollon Larissa (Gre)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YLf1KyEa-McQYxYcG.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            382 =>
                array (
                    'local' => 'Schalke (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/b1q14jZg-I1gtUEya.png',
                    'visitante' => 'Bolonia (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/j3Tyh1GG-bucnXust.png',
                    'score' => '2-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            383 =>
                array (
                    'local' => 'Sirens (Mlt)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OnaKehg5-A9kFZCBe.png',
                    'visitante' => 'Santa Lucia (Mlt)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xjkuzXDa-vcTelz0L.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            384 =>
                array (
                    'local' => 'Verona (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SKlYaQkl-dIT09itB.png',
                    'visitante' => 'Trabzonspor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zFbppwhl-4hjJ5YiF.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            385 =>
                array (
                    'local' => 'FC Basara Mainz (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/plV8PKdM-GInuYGOf.png',
                    'visitante' => 'Schott Mainz (Ger)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0ERCJ8HG-zZo5b8hm.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            386 =>
                array (
                    'local' => 'Granada (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IB7INdf5-KzL8MCCa.png',
                    'visitante' => 'Almería (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/INYkS6YA-CG8Uy66t.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            387 =>
                array (
                    'local' => 'TEC (Ned)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dEEKpuAr-QoTmRqW1.png',
                    'visitante' => 'Al Khor (Qat)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fDOiZJXg-82C8SQy1.png',
                    'score' => '5-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            388 =>
                array (
                    'local' => 'Vasterhaninge IF (Swe)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'visitante' => 'Sodertalje FK (Swe)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GSYLYjil-SriHXjEC.png',
                    'score' => '3-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            389 =>
                array (
                    'local' => 'Breda (Ned)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WvyOBpCr-C0SKTTat.png',
                    'visitante' => 'Panathinaikos (Gre)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hfNwlAfM-ttfcacX0.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            390 =>
                array (
                    'local' => 'Deeping (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ALJoqsYg-bkxSL592.png',
                    'visitante' => 'Peterborough (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WIdkx9Br-zmDL10v2.png',
                    'score' => '1-8',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            391 =>
                array (
                    'local' => 'Dover (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/r1IUG3e5-ver2p0xO.png',
                    'visitante' => 'Millwall Sub-23 (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GbTywlhl-4vkai3Hl.png',
                    'score' => '4-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            392 =>
                array (
                    'local' => 'Lincoln (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6JLzdiZA-ddOTTXuo.png',
                    'visitante' => 'Nottingham Forest (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zomHgjGG-OrtfNNWj.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            393 =>
                array (
                    'local' => 'Nuneaton (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0doMkxyS-zDQ4iikT.png',
                    'visitante' => 'Burton (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dGOTeiBr-Ustnf0J9.png',
                    'score' => '4-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            394 =>
                array (
                    'local' => 'Welling (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AceCguFa-K0SHNFVO.png',
                    'visitante' => 'Gillingham FC (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YL1sire5-nPwfhvlM.png',
                    'score' => '5-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            395 =>
                array (
                    'local' => 'Beaconsfield Town (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AH6d4WEG-0Ix7wpkt.png',
                    'visitante' => 'Staines (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Yo7suocM-h87WTJji.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            396 =>
                array (
                    'local' => 'Carshalton (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/neYJjZEG-8WF0F14p.png',
                    'visitante' => 'Dulwich Hamlet (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lACvzOf5-CQoUDm57.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            397 =>
                array (
                    'local' => 'Panamá Sub-23',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0xSKdMcM-EV992yyM.png',
                    'visitante' => 'México Sub-23',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/44j9Orgl-Ewjq572B.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Juegos Panamericanos',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            398 =>
                array (
                    'local' => 'Ecuador Sub-23',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0AYVmJDa-KIZng9SK.png',
                    'visitante' => 'Argentina Sub-23',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/x21HfueM-4W49tRQn.png',
                    'score' => '2-3',
                    'competition' => 'MUNDIAL: Juegos Panamericanos',
                    'date' => '24/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            399 =>
                array (
                    'local' => 'Panamá F',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fmckU3jl-SG4sVAa2.png',
                    'visitante' => 'Costa Rica F',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nTS6n7Da-0z6xbBZ4.png',
                    'score' => '1-3',
                    'competition' => 'MUNDIAL: Juegos Panamericanos Femenino',
                    'date' => '29/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            400 =>
                array (
                    'local' => 'Argentina F',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ruNSBRhl-4dzSXtc5.png',
                    'visitante' => 'Perú F',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0dbd4UWg-Kna49KRo.png',
                    'score' => '3-0',
                    'competition' => 'MUNDIAL: Juegos Panamericanos Femenino',
                    'date' => '26/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            401 =>
                array (
                    'local' => 'Bahréin Sub-20',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/v3rtZge5-l2H8YgRA.png',
                    'visitante' => 'Mauritania Sub-20',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YVSNZ4FG-KdY9FPQn.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: COTIF L\'Alcúdia',
                    'date' => '26/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            402 =>
                array (
                    'local' => 'Besiktas Sub-19',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/f73lQ7zB-nLLbrAgO.png',
                    'visitante' => 'Burnley Sub-19',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MkXVW8ZA-rTMNbdMa.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: CEE Cup - Playoffs - 7ª posición',
                    'date' => '25/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            403 =>
                array (
                    'local' => 'Dinamo Zagreb Sub-19',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WEooEhZA-raVjDt6C.png',
                    'visitante' => 'Slavia Praga Sub-19',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Ig9w1mFa-zP0udUpS.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: CEE Cup - Playoffs - 3ª posición',
                    'date' => '23/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            404 =>
                array (
                    'local' => 'Shakhtar Sub-19',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nL2mUDBr-EyJnwJMC.png',
                    'visitante' => 'Altinordu Sub-19',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8Kbo7DBr-pQEucvp8.png',
                    'score' => '3-2(2-2)',
                    'competition' => 'MUNDIAL: CEE Cup - Playoffs - 5ª posición',
                    'date' => '27/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            405 =>
                array (
                    'local' => 'Sabanas',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KYsgZkzB-t2mrDdFl.png',
                    'visitante' => 'Chinandega',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Oj5290Zg-WfnuetQk.png',
                    'score' => '1-0',
                    'competition' => 'NICARAGUA: Liga Primera - Apertura - Jornada 1',
                    'date' => '25/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            406 =>
                array (
                    'local' => 'Managua FC',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IZgQzChl-je19022S.png',
                    'visitante' => 'Juventus Managua',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CA8j5fAr-zywwXCDP.png',
                    'score' => '2-2',
                    'competition' => 'NICARAGUA: Liga Primera - Apertura - Jornada 1',
                    'date' => '24/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            407 =>
                array (
                    'local' => 'San Lorenzo',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OEgPhXYA-0vMIAud9.png',
                    'visitante' => 'Cerro Porteño',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/S2rav6HG-hKH4AQwA.png',
                    'score' => '2-1',
                    'competition' => 'PARAGUAY: Primera División - Clausura - Jornada 3',
                    'date' => '27/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            408 =>
                array (
                    'local' => 'Sol de América',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nNN8rze5-S0CdwEdl.png',
                    'visitante' => 'Libertad',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/I58gFDxS-4Kv64Pmh.png',
                    'score' => '0-1',
                    'competition' => 'PARAGUAY: Primera División - Clausura - Jornada 3',
                    'date' => '29/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            409 =>
                array (
                    'local' => 'Pogon Szczecin',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/d6JEh8EG-tnVf7Ikj.png',
                    'visitante' => 'Arka',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tdEy0jBr-UNq1ErLD.png',
                    'score' => '2-0',
                    'competition' => 'POLONIA: Ekstraklasa - Jornada 2',
                    'date' => '23/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            410 =>
                array (
                    'local' => 'Ceske Budejovice',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/d662SkzB-8UIIJC0P.png',
                    'visitante' => 'Sparta Praga',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/f3ufAmXg-AcVzeTNO.png',
                    'score' => '2-2',
                    'competition' => 'REPÚBLICA CHECA: 1. Liga - Jornada 3',
                    'date' => '30/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            411 =>
                array (
                    'local' => 'Hradec Kralove',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pMJtKyzB-YVdbVGED.png',
                    'visitante' => 'Dukla Praga',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hYqc3sBr-GlajXxp1.png',
                    'score' => '0-2',
                    'competition' => 'REPÚBLICA CHECA: FNL - Jornada 2',
                    'date' => '29/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            412 =>
                array (
                    'local' => 'FCSB',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pY1jOEZA-08eZZwuR.png',
                    'visitante' => 'Botosani',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/S2pBtCEa-IT3PvAhi.png',
                    'score' => '0-2',
                    'competition' => 'RUMANÍA: Liga 1 - Jornada 3',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            413 =>
                array (
                    'local' => 'Rubin Kazan',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/A7QaOL9r-O0RAJvtt.png',
                    'visitante' => 'Akhmat Grozny',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CAp5kGzB-Uc4jaTBc.png',
                    'score' => '1-0',
                    'competition' => 'RUSIA: Premier League - Jornada 3',
                    'date' => '25/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            414 =>
                array (
                    'local' => 'Armavir',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ShyEhucM-IHqsbiCa.png',
                    'visitante' => 'Spartak Moscú 2',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jeQ6h2ZA-KG0trTuq.png',
                    'score' => '1-1',
                    'competition' => 'RUSIA: FNL - Jornada 5',
                    'date' => '25/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            415 =>
                array (
                    'local' => 'Elfsborg',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/EuHLJxzB-EXjj6gab.png',
                    'visitante' => 'Kalmar',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vqpzeof5-EVokFOHG.png',
                    'score' => '2-1',
                    'competition' => 'SUECIA: Allsvenskan - Jornada 17',
                    'date' => '30/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            416 =>
                array (
                    'local' => 'Helsingborg',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/W6XofgFa-tULA3Up8.png',
                    'visitante' => 'Örebro',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MLCkR9jl-YLLCsVwe.png',
                    'score' => '1-4',
                    'competition' => 'SUECIA: Allsvenskan - Jornada 17',
                    'date' => '23/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            417 =>
                array (
                    'local' => 'Madagascar',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8jQH1hBr-SnufIVHC.png',
                    'visitante' => 'Mozambique',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/K4WcpCh5-ARdVQ24F.png',
                    'score' => '1-0',
                    'competition' => 'ÁFRICA: Campeonato Africano de Naciones - Clasificación - Semifinales',
                    'date' => '28/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            418 =>
                array (
                    'local' => 'Lesoto',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xYO30YeM-bDhQylMn.png',
                    'visitante' => 'Sudáfrica',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Kfq8aDCr-KnFE5hY6.png',
                    'score' => '3-2',
                    'competition' => 'ÁFRICA: Campeonato Africano de Naciones - Clasificación - Semifinales',
                    'date' => '30/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            419 =>
                array (
                    'local' => 'Eswatini',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AwLk22hl-nNjUhCMc.png',
                    'visitante' => 'Angola',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zw0aswEa-hbKCHwA4.png',
                    'score' => '1-1',
                    'competition' => 'ÁFRICA: Campeonato Africano de Naciones - Clasificación - Semifinales',
                    'date' => '26/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            420 =>
                array (
                    'local' => 'Tanzania',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8xZwopzB-j9K8yBiN.png',
                    'visitante' => 'Kenia',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bJ7piXCa-44lxijiA.png',
                    'score' => '0-0',
                    'competition' => 'ÁFRICA: Campeonato Africano de Naciones - Clasificación - Cuartos de final',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            421 =>
                array (
                    'local' => 'Benín',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jwCGq0dM-8WiQgh7i.png',
                    'visitante' => 'Togo',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/U3kFs1Ea-6g0b8ZWj.png',
                    'score' => '0-0',
                    'competition' => 'ÁFRICA: Campeonato Africano de Naciones - Clasificación - Cuartos de final',
                    'date' => '30/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            422 =>
                array (
                    'local' => 'Chad',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OYt9qICa-rHnpWxPc.png',
                    'visitante' => 'Guinea Ecuatorial',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GU4VIzhl-GfjYZRja.png',
                    'score' => '3-3',
                    'competition' => 'ÁFRICA: Campeonato Africano de Naciones - Clasificación - Cuartos de final',
                    'date' => '27/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            423 =>
                array (
                    'local' => 'República Centroafricana',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KUL6mqxS-jFPMkUKf.png',
                    'visitante' => 'Santo Tomé y Príncipe',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YaravAFG-6DI5lR5h.png',
                    'score' => '-',
                    'competition' => 'ÁFRICA: Campeonato Africano de Naciones - Clasificación - Cuartos de final',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            424 =>
                array (
                    'local' => 'Liberia',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/YgV6HUCr-4UD3eQag.png',
                    'visitante' => 'Senegal',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fPLyMNGG-658QCfNq.png',
                    'score' => '1-0',
                    'competition' => 'ÁFRICA: Campeonato Africano de Naciones - Clasificación - Cuartos de final',
                    'date' => '29/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            425 =>
                array (
                    'local' => 'Hamburgo',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vy7iqCwS-Umm0PjjU.png',
                    'visitante' => 'Darmstadt',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lzTyrOAr-G2G8LNSj.png',
                    'score' => '1-1',
                    'competition' => 'ALEMANIA: 2. Bundesliga - Jornada 1',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            426 =>
                array (
                    'local' => 'Fürth',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/b17q7fAr-4dnK4mIO.png',
                    'visitante' => 'Aue',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xxzUuixS-8KLDrEjh.png',
                    'score' => '0-2',
                    'competition' => 'ALEMANIA: 2. Bundesliga - Jornada 1',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            427 =>
                array (
                    'local' => 'Regensburg',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bHYS4sCa-nVb6tP4G.png',
                    'visitante' => 'Bochum',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nyouWtil-Ak3zFX7R.png',
                    'score' => '3-1',
                    'competition' => 'ALEMANIA: 2. Bundesliga - Jornada 1',
                    'date' => '28/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            428 =>
                array (
                    'local' => 'Wehen',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zNBt0YeM-4CdEv3ZS.png',
                    'visitante' => 'Karlsruher',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/69eisaGG-nBKHsY5b.png',
                    'score' => '1-2',
                    'competition' => 'ALEMANIA: 2. Bundesliga - Jornada 1',
                    'date' => '28/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            429 =>
                array (
                    'local' => 'Viktoria Köln',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WQJEg1f5-tY9G2wz6.png',
                    'visitante' => 'Chemnitzer',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KY9gMKxS-jc2fqRKc.png',
                    'score' => '3-2',
                    'competition' => 'ALEMANIA: 3. Liga - Jornada 2',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            430 =>
                array (
                    'local' => 'Zwickau',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SrpJ3zGG-vBSqmuO5.png',
                    'visitante' => 'Magdeburgo',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/4E1l0ze5-fHLf2W7g.png',
                    'score' => '0-0',
                    'competition' => 'ALEMANIA: 3. Liga - Jornada 2',
                    'date' => '30/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            431 =>
                array (
                    'local' => 'Norderstedt',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vePzumZA-bysk9fr1.png',
                    'visitante' => 'Altona',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AV5Iu9Ca-xtyO5Ly9.png',
                    'score' => '5-2',
                    'competition' => 'ALEMANIA: Regionalliga Norte - Jornada 1',
                    'date' => '27/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            432 =>
                array (
                    'local' => 'Oldenburg',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8ILVGKeM-GxutJbKn.png',
                    'visitante' => 'St. Pauli II',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0d9JBTCr-IZbtfC9d.png',
                    'score' => '1-0',
                    'competition' => 'ALEMANIA: Regionalliga Norte - Jornada 1',
                    'date' => '28/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            433 =>
                array (
                    'local' => 'Berliner AK 07',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nP153cYA-K6TVdpkc.png',
                    'visitante' => 'Bischofswerdaer',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/x0nNCdBr-4t46lBMr.png',
                    'score' => '4-2',
                    'competition' => 'ALEMANIA: Regionalliga Nordost - Jornada 1',
                    'date' => '23/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            434 =>
                array (
                    'local' => 'BFC Dynamo',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/YVQcK3f5-t4YJSaON.png',
                    'visitante' => 'Babelsberg',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QiI47Rkl-0nfyvWrI.png',
                    'score' => '3-1',
                    'competition' => 'ALEMANIA: Regionalliga Nordost - Jornada 1',
                    'date' => '24/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            435 =>
                array (
                    'local' => 'Meuselwitz',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6LU1UQCa-hnKq01rN.png',
                    'visitante' => 'Furstenwalde',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fDAxchZg-ADZXO82q.png',
                    'score' => '1-1',
                    'competition' => 'ALEMANIA: Regionalliga Nordost - Jornada 1',
                    'date' => '29/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            436 =>
                array (
                    'local' => 'Lotte',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ttO0o8eM-WGVpEJL2.png',
                    'visitante' => 'TuS Haltern',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lE0sckyS-v9Vyr1uE.png',
                    'score' => '0-1',
                    'competition' => 'ALEMANIA: Regionalliga Oeste - Jornada 1',
                    'date' => '30/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            437 =>
                array (
                    'local' => 'Argentinos Jrs.',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xplqslf5-IHcrNFsb.png',
                    'visitante' => 'River Plate',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Ic4xH0Yg-48MRYCtA.png',
                    'score' => '1-1',
                    'competition' => 'ARGENTINA: Superliga - Jornada 1',
                    'date' => '27/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            438 =>
                array (
                    'local' => 'Estudiantes L.P.',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/I1h85xcM-IDoWSHJ3.png',
                    'visitante' => 'Aldosivi',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Slvb0Tkl-84NZpdPn.png',
                    'score' => '1-0',
                    'competition' => 'ARGENTINA: Superliga - Jornada 1',
                    'date' => '25/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            439 =>
                array (
                    'local' => 'Newell\'s',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/StG7Krf5-lvTZw0Jb.png',
                    'visitante' => 'Central Córdoba',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Awt3olyS-rD2ofJBe.png',
                    'score' => '2-0',
                    'competition' => 'ARGENTINA: Superliga - Jornada 1',
                    'date' => '28/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            440 =>
                array (
                    'local' => 'Talleres',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fH12n5jl-vavMNQR5.png',
                    'visitante' => 'Vélez',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8A5teNEG-raLVXWeG.png',
                    'score' => '1-0',
                    'competition' => 'ARGENTINA: Superliga - Jornada 1',
                    'date' => '25/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            441 =>
                array (
                    'local' => 'Defensa y Justicia',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WbcBGVf5-CW4hp9jk.png',
                    'visitante' => 'Independiente',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MqbBGgxS-IHcrNFsb.png',
                    'score' => '0-1',
                    'competition' => 'ARGENTINA: Superliga - Jornada 1',
                    'date' => '30/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            442 =>
                array (
                    'local' => 'LASK Linz',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0jGJoJyS-fPPbcG9N.png',
                    'visitante' => 'Altach',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KhP5PswS-Obdk1J2l.png',
                    'score' => '2-0',
                    'competition' => 'AUSTRIA: Tipico Bundesliga - Jornada 1',
                    'date' => '28/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            443 =>
                array (
                    'local' => 'Mattersburg',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4EUQffYA-OKBY7UJ3.png',
                    'visitante' => 'Hartberg',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0CPiZWwS-bPUdlxnJ.png',
                    'score' => '2-1',
                    'competition' => 'AUSTRIA: Tipico Bundesliga - Jornada 1',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            444 =>
                array (
                    'local' => 'Sturm Graz',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zmbZjCzB-0I2T09Cj.png',
                    'visitante' => 'St. Polten',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hWr3OVyS-6kUE7zrB.png',
                    'score' => '3-0',
                    'competition' => 'AUSTRIA: Tipico Bundesliga - Jornada 1',
                    'date' => '24/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            445 =>
                array (
                    'local' => 'Floridsdorfer AC',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AVuO6rh5-xt11L8RI.png',
                    'visitante' => 'Grazer',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Ofc3ZzXg-nHyFaeyL.png',
                    'score' => '2-0',
                    'competition' => 'AUSTRIA: 2. Liga - Jornada 1',
                    'date' => '23/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            446 =>
                array (
                    'local' => 'Anderlecht',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dnno08Yg-0Uhw7ZGJ.png',
                    'visitante' => 'Oostende',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SEc4Zvf5-Q5ugGage.png',
                    'score' => '1-2',
                    'competition' => 'BÉLGICA: Jupiler Pro League - Jornada 1',
                    'date' => '25/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            447 =>
                array (
                    'local' => 'Charleroi',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MVRqAyFa-4dvcFJ81.png',
                    'visitante' => 'Gent',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hbwxyyjl-tUw91Dvs.png',
                    'score' => '1-1',
                    'competition' => 'BÉLGICA: Jupiler Pro League - Jornada 1',
                    'date' => '23/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            448 =>
                array (
                    'local' => 'Eupen',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Wtl32vGG-2DZOsb2O.png',
                    'visitante' => 'Antwerp',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QmlqvQ9r-4jm5MuAF.png',
                    'score' => '1-4',
                    'competition' => 'BÉLGICA: Jupiler Pro League - Jornada 1',
                    'date' => '29/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            449 =>
                array (
                    'local' => 'Baal',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Sfzig2Xg-n9Pzd0Eb.png',
                    'visitante' => 'Diest',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Gbyapahl-KhU0FCc2.png',
                    'score' => '0-8',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            450 =>
                array (
                    'local' => 'Eendracht Zele',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xrByUtzB-lGj7Qx63.png',
                    'visitante' => 'Ninove',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8MouV2Da-tQ3nA3US.png',
                    'score' => '0-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            451 =>
                array (
                    'local' => 'Adegem',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/juqWNjjl-Mmo5DOfD.png',
                    'visitante' => 'Excelsior Mariakerke',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lpxADixS-C6qKLsmA.png',
                    'score' => '1-5',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            452 =>
                array (
                    'local' => 'Aische',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ALMmpJdM-Mgj7Bqs4.png',
                    'visitante' => 'Jehaytois',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '4-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            453 =>
                array (
                    'local' => 'Anderlecht-Milan',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WUKc6DyB-Gzvjkcfp.png',
                    'visitante' => 'Berg-Op',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vixSPhXg-p286Fy0q.png',
                    'score' => '0-5',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '27/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            454 =>
                array (
                    'local' => 'Anderlues',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/d4LCRuZg-YPiHxRme.png',
                    'visitante' => 'Ixelles',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/McOYd0xS-dIecXOjQ.png',
                    'score' => '1-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            455 =>
                array (
                    'local' => 'Ardennen',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Iyn5klAr-x2j54mfQ.png',
                    'visitante' => 'Jemappes',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jcvn8Jh5-8ONuNsD0.png',
                    'score' => '5-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            456 =>
                array (
                    'local' => 'Avanti',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WnbX6beM-Cp6oEcNi.png',
                    'visitante' => 'Hoboken',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KKteqhYA-lSliUBjC.png',
                    'score' => '4-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            457 =>
                array (
                    'local' => 'Aywaille',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KQzHolil-rqk1NIth.png',
                    'visitante' => 'Muno',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Wp1jKCYg-YZAc9YT3.png',
                    'score' => '17-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            458 =>
                array (
                    'local' => 'Bambrugge',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6DuK4rGG-bL87XcMg.png',
                    'visitante' => 'Dilbeek',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zco4ZAh5-pUMKoWCd.png',
                    'score' => '2-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            459 =>
                array (
                    'local' => 'Beloeil',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xpnwuwHG-OblOOOpP.png',
                    'visitante' => 'Ostiches',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bFAeiyZg-rspbDdJf.png',
                    'score' => '2-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '27/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            460 =>
                array (
                    'local' => 'Bercheux',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6yuCZug5-4zygmVPk.png',
                    'visitante' => 'Rocherath',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Ac9MR0Ca-ADmfuSm1.png',
                    'score' => '3-6',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '25/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            461 =>
                array (
                    'local' => 'Betekom',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jcJlsPh5-C0tMmGRp.png',
                    'visitante' => 'Geetbets',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rVufC6fM-zLQdTRgD.png',
                    'score' => '8-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            462 =>
                array (
                    'local' => 'Boezinge',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OGUIlLxS-GvMsAHLM.png',
                    'visitante' => 'Nieuwkerke',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8UXka8eM-MaN8OngQ.png',
                    'score' => '2-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            463 =>
                array (
                    'local' => 'Bokrijk Sport',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fmIRo7yB-bT6OYTwo.png',
                    'visitante' => 'Eendracht Stevoort',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/z9dzhkZA-lSr3jai8.png',
                    'score' => '1-3',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            464 =>
                array (
                    'local' => 'Bornem',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hlMICBDa-p4iAW1y4.png',
                    'visitante' => 'Wintam Eikevliet',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/byqFUVXg-ABM3zcAo.png',
                    'score' => '5-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            465 =>
                array (
                    'local' => 'Bosquetia Frameries',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/C2DZarWg-COviQTxl.png',
                    'visitante' => 'Stade Brainois',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CnHNIDxS-QF472zrM.png',
                    'score' => '0-7',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            466 =>
                array (
                    'local' => 'Braine',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/K2uCquf5-IazQddhH.png',
                    'visitante' => 'Le Roeulx',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WAXwVHh5-OYGXb318.png',
                    'score' => '3-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '23/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            467 =>
                array (
                    'local' => 'Butgenbach',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ClQ2ckYg-8I2cBe7A.png',
                    'visitante' => 'Habay La Neuve',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rsAPK9HG-zoMojiz9.png',
                    'score' => '1-4',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            468 =>
                array (
                    'local' => 'Buzet',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/riYnzTh5-SO22SAai.png',
                    'visitante' => 'Etterbeek',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nwJqGKGG-8GcBXbrg.png',
                    'score' => '1-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '27/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            469 =>
                array (
                    'local' => 'd\'Ophain',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/t0nzZowS-Sbe4EmYa.png',
                    'visitante' => 'Greunsjotters Vossem',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QHg2vsBr-n9iZWuMM.png',
                    'score' => '0-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            470 =>
                array (
                    'local' => 'Eendracht A.',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jqRE28jl-IaGLHkbO.png',
                    'visitante' => 'Lauwe',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Or5LkaYg-2qGQWeck.png',
                    'score' => '3-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            471 =>
                array (
                    'local' => 'Etoile de Faimes',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/x2f2Z8Yg-MD8jwgjS.png',
                    'visitante' => 'Eghezee',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/d0UHGJWg-xWgWqQB5.png',
                    'score' => '5-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            472 =>
                array (
                    'local' => 'Excelsior Bouwel',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Gbd7vrjl-hCH7Wwdp.png',
                    'visitante' => 'Stade Everois',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IFmRk1e5-6mqMp9Ml.png',
                    'score' => '2-3(2-2)',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            473 =>
                array (
                    'local' => 'Herstal',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IuP3HqZA-rcGxL7mR.png',
                    'visitante' => 'Herderen-Millen',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xtj6vjYA-0jO2OzTp.png',
                    'score' => '6-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '25/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            474 =>
                array (
                    'local' => 'Heur Tongeren',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xUYwlxZA-lYsJXrKs.png',
                    'visitante' => 'Sport Liege',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Srsy5xe5-rRJMClbI.png',
                    'score' => '14-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '23/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            475 =>
                array (
                    'local' => 'Heusden-Zolder',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dbciF7eM-byBVv4A7.png',
                    'visitante' => 'Breugel',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hY2k4GfM-pxNYQ1r2.png',
                    'score' => '6-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            476 =>
                array (
                    'local' => 'Horion',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dMTOcNfM-WhoDoSZm.png',
                    'visitante' => 'UCE Liege',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CxI6xXWg-2mnkfCk2.png',
                    'score' => '2-7',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            477 =>
                array (
                    'local' => 'Jeunesse Tavietoise',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/21XzYdcM-M7VriDrh.png',
                    'visitante' => 'Waltwilder',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WSxrl2il-08HQtJ3F.png',
                    'score' => '0-4',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '23/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            478 =>
                array (
                    'local' => 'Jodoigne',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vNWtZSCa-OIUIAWEQ.png',
                    'visitante' => 'Elsautoise',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CSZCt3yB-lx4da6f2.png',
                    'score' => '5-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            479 =>
                array (
                    'local' => 'Jong Zulte',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4lEBJeYg-2HJG3nLd.png',
                    'visitante' => 'Lembeke',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GpaVpDe5-I1LPye0n.png',
                    'score' => '2-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            480 =>
                array (
                    'local' => 'K. FC Turnhout',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rsTFm8Yg-vBCoDDzq.png',
                    'visitante' => 'Herk',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lSkiQmBr-b7mIrqnh.png',
                    'score' => '5-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            481 =>
                array (
                    'local' => 'KSK Oostnieuwkerke',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/GAP4fXYg-Q7zjKrgt.png',
                    'visitante' => 'Poperinge',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tzFQbeDa-d6wWlHDM.png',
                    'score' => '3-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            482 =>
                array (
                    'local' => 'La Hulpe',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zB1BVPDa-4v1XL2Xu.png',
                    'visitante' => 'Biesme',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IVE5oRFG-C4vZLj8f.png',
                    'score' => '1-4',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '30/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            483 =>
                array (
                    'local' => 'Lasne-Ohain',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KbymJPwS-tvysSvlJ.png',
                    'visitante' => 'Montignies',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pEgEF8eM-xUtU2r4D.png',
                    'score' => '2-3(2-2)',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            484 =>
                array (
                    'local' => 'Leopoldsburg',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/r5y23gHG-Kh4tO412.png',
                    'visitante' => 'Esperanza Pelt',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bs3WFSzB-2L124mgB.png',
                    'score' => '0-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '30/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            485 =>
                array (
                    'local' => 'Linden',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hr4aAbFG-vJQnXo9e.png',
                    'visitante' => 'Park Houthalen',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OpBbQ6e5-WvhTkrt7.png',
                    'score' => '2-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '30/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            486 =>
                array (
                    'local' => 'Lochristi',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lvATxpFG-rXAB6VRA.png',
                    'visitante' => 'Dendermonde',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/U904Y1Fa-j7Ru3Swh.png',
                    'score' => '2-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '27/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            487 =>
                array (
                    'local' => 'Lyra-Lierse Berlaar',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tOQZjfEa-QgoA17AF.png',
                    'visitante' => 'Zandvliet Sport',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/foatOyZg-jDUYm3K7.png',
                    'score' => '4-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '25/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            488 =>
                array (
                    'local' => 'Malmundaria',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/f5e1nheM-Is9fo2ls.png',
                    'visitante' => 'Ethe Belmont',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/I9MAHCEa-GUxJhjfa.png',
                    'score' => '2-3',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            489 =>
                array (
                    'local' => 'Meix-Devant-Virton',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rV6G7qCr-bwrQ3Ol7.png',
                    'visitante' => 'La Roche',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nclEhlAr-jqNuNvk9.png',
                    'score' => '4-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '30/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            490 =>
                array (
                    'local' => 'Melsele',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Ict1KzZA-rJuAjPzK.png',
                    'visitante' => 'Vrasene',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AqOljYzB-UZyBYkcl.png',
                    'score' => '3-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '27/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            491 =>
                array (
                    'local' => 'Minderhout',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/255JzDjl-EBVoA4e3.png',
                    'visitante' => 'GBA Kontich',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nso03pjl-C4WoLvTm.png',
                    'score' => '1-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '30/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            492 =>
                array (
                    'local' => 'Molenbaix',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IoISdYBr-OU2b5Tw5.png',
                    'visitante' => 'SG-Tertre Hautrage II',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dnPqREf5-SvRkmPTj.png',
                    'score' => '4-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            493 =>
                array (
                    'local' => 'Naastois',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KCx33TBr-K2DFcjqJ.png',
                    'visitante' => 'Huizingen',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hKx6tGg5-hb6bz4EB.png',
                    'score' => '0-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '30/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            494 =>
                array (
                    'local' => 'Nassogne',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pGMDz7wS-fLyNiA95.png',
                    'visitante' => 'Sprimont-Comblain',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/v5jNKVDa-6PS614Tc.png',
                    'score' => '0-3',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            495 =>
                array (
                    'local' => 'Nijlen',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bZxQJmBr-Op7V86T1.png',
                    'visitante' => 'Kosova Schaerbeek',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/f7SrhpFa-2TqHSNU5.png',
                    'score' => '2-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            496 =>
                array (
                    'local' => 'Oostduinkerke',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bgLGE2Da-2a8vJQGm.png',
                    'visitante' => 'Blankenberge',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bwWssXFG-IazQddhH.png',
                    'score' => '0-1(0-0)',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            497 =>
                array (
                    'local' => 'Paturages',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tj1ONbh5-IFvSkcbG.png',
                    'visitante' => 'Olsa Brakel',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hCQ0XkGG-hS7GAKEp.png',
                    'score' => '0-3',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            498 =>
                array (
                    'local' => 'Peruwelz FC',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6BMUIRkl-Eo2bE2VI.png',
                    'visitante' => 'Vacresse',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/6Jgz2oh5-zePn0oTD.png',
                    'score' => '3-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            499 =>
                array (
                    'local' => 'Racing Waregem',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SWygwaWg-CSMpGtiN.png',
                    'visitante' => 'Kortemark',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KCtEcNzB-2mxwTKYC.png',
                    'score' => '2-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            500 =>
                array (
                    'local' => 'Rapid Symphorinois',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lv9gwqeM-CjRMvtqC.png',
                    'visitante' => 'Hyon',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MPP736ZA-2PFybNGE.png',
                    'score' => '5-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '23/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            501 =>
                array (
                    'local' => 'RFC Raeren',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CCG7qTYA-dpzXTP0D.png',
                    'visitante' => 'Wanze',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bBvL94f5-EBkuf6dL.png',
                    'score' => '2-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '25/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            502 =>
                array (
                    'local' => 'Rhodienne-De Hoek',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xx7e39eM-0Mx0zhw6.png',
                    'visitante' => 'De Neffe',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IFS7MNzB-AJQUU7Y0.png',
                    'score' => '4-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '25/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            503 =>
                array (
                    'local' => 'Richelle Utd.',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pS4KXKEG-MNPNdbZ1.png',
                    'visitante' => 'De Goe',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AVK8qxFa-4bXZm2gE.png',
                    'score' => '6-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            504 =>
                array (
                    'local' => 'Rochefort',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/z1skHBWg-jyuOQZ2j.png',
                    'visitante' => 'Vyle-Tharoul',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UHMeBheM-OSganJd5.png',
                    'score' => '4-3',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            505 =>
                array (
                    'local' => 'Royal Oupeye',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bHtoc2Ca-rNsF7wl4.png',
                    'visitante' => 'Warnant',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dhKHfOYg-80kMzKq2.png',
                    'score' => '1-0(0-0)',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '23/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            506 =>
                array (
                    'local' => 'Schriek',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vHcfd8Cr-WvY4onMm.png',
                    'visitante' => 'Kesselt',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rNqjb4fM-rgdlWzR1.png',
                    'score' => '1-2(1-1)',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            507 =>
                array (
                    'local' => 'SG-Tertre Hautrage',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/I7SoMEEG-hK9i6Irc.png',
                    'visitante' => 'Trivieres',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AkNYhKCr-KjNpFslI.png',
                    'score' => '7-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            508 =>
                array (
                    'local' => 'Sint-Job',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lGgHBrZA-UZLqMb4F.png',
                    'visitante' => 'Schaerbeek-Evere',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/U9PpV4zB-6Ro0YCCm.png',
                    'score' => '2-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            509 =>
                array (
                    'local' => 'Spy',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hrglCsWg-d0EboAA7.png',
                    'visitante' => 'Rhisnois',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GneiMJ9r-YPiHxRme.png',
                    'score' => '0-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '27/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            510 =>
                array (
                    'local' => 'St-Joris Sleidinge',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Yi8llDhl-CU1JH01n.png',
                    'visitante' => 'Drongen',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EXUWacCr-n911AFMG.png',
                    'score' => '1-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            511 =>
                array (
                    'local' => 'Ster-Francorchamps',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MaWxxDdM-SUyBb8AE.png',
                    'visitante' => 'Florenvillois',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2w1NqDdM-bNZaSmr2.png',
                    'score' => '2-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '27/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            512 =>
                array (
                    'local' => 'Stockel',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/j3mErVh5-vDTH2KFS.png',
                    'visitante' => 'Entite Manageoise',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ptdblTkl-lx4da6f2.png',
                    'score' => '3-2(2-2)',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '27/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            513 =>
                array (
                    'local' => 'Templiers Nandrin',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fynew7cM-tEV5thDq.png',
                    'visitante' => 'Loyers',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Y1Oii8HG-4S6QrDHD.png',
                    'score' => '2-1(1-1)',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            514 =>
                array (
                    'local' => 'Ternesse',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hdYNLyil-KxQMmVAM.png',
                    'visitante' => 'Eppegem',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UkztAGwS-YaSIuMT5.png',
                    'score' => '3-2(2-2)',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            515 =>
                array (
                    'local' => 'Tervuren-Duisburg',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IRpU0khl-4nP7KuHS.png',
                    'visitante' => 'Bertem-Leefdaal',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OvbJDbCa-Em5I4kYJ.png',
                    'score' => '2-1(1-1)',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '23/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            516 =>
                array (
                    'local' => 'Tollembeek',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WK3wNxFG-Odmoehzd.png',
                    'visitante' => 'Neufvilles',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MchhZ0FG-fmYk1p28.png',
                    'score' => '2-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            517 =>
                array (
                    'local' => 'Torhout',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/n5ALu7Ar-jJLlF06T.png',
                    'visitante' => 'Kleit Maldegem',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zsjT9GzB-zVDjBzz8.png',
                    'score' => '3-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '23/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            518 =>
                array (
                    'local' => 'Torpedo Hasselt',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AXwf77HG-427B9IRF.png',
                    'visitante' => 'Eendr. Termien',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Qm1sL0Yg-Ao5h0nud.png',
                    'score' => '0-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            519 =>
                array (
                    'local' => 'Tournai',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ObETCgWg-lQPI912D.png',
                    'visitante' => 'Maarkedal',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SKpCllcM-rBZs8wy1.png',
                    'score' => '6-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            520 =>
                array (
                    'local' => 'Vaux',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6wgwD5Wg-KSKUvziH.png',
                    'visitante' => 'Saint Leger',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GCFcv6GG-ppBeDtg7.png',
                    'score' => '2-3',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            521 =>
                array (
                    'local' => 'Veltem',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/80sLxMxS-Mqm94e36.png',
                    'visitante' => 'City Pirates',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jcszMrhl-ny2x1LhI.png',
                    'score' => '0-3',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '27/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            522 =>
                array (
                    'local' => 'Villers-La-Ville',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jaLsZVf5-YFUnFDRR.png',
                    'visitante' => 'Molignee',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/C6eYFPg5-fVrbmDVE.png',
                    'score' => '3-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            523 =>
                array (
                    'local' => 'Vlamertinge',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/M7Ymh7Cr-MNPNdbZ1.png',
                    'visitante' => 'Dottignies',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KWk5nCil-h47p28Aq.png',
                    'score' => '1-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            524 =>
                array (
                    'local' => 'Vliermaal',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WMIjU8jl-MukDVWxQ.png',
                    'visitante' => 'Huvo Jeuk',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hA4ziMEa-YaSIuMT5.png',
                    'score' => '0-1(0-0)',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '30/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            525 =>
                array (
                    'local' => 'Voorde Appelterre',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pvb8zzZA-pr0GLdkE.png',
                    'visitante' => 'Wetteren',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/6Bi4KTeM-6iaCVYB8.png',
                    'score' => '1-4',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '27/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            526 =>
                array (
                    'local' => 'Wallonia Libin',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0bd7DQ9r-KhITr87Q.png',
                    'visitante' => 'Wallonne Ciney',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Qc6EFK9r-GG7bE49b.png',
                    'score' => '0-4',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '24/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            527 =>
                array (
                    'local' => 'Ways Genappe',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IJWWnwil-S8bmAwhQ.png',
                    'visitante' => 'Overijse',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KtmPMae5-0pNTEsc7.png',
                    'score' => '0-3',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            528 =>
                array (
                    'local' => 'Weerstand Koersel',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/W03zZQkl-nHoE14Bp.png',
                    'visitante' => 'Vrij Houtem',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/x6hTveg5-xUCr24Qn.png',
                    'score' => '6-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            529 =>
                array (
                    'local' => 'Wellen',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8noxXNeM-Y1o122oa.png',
                    'visitante' => 'FC Eupen',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/W6GFoZYg-48fRPh1E.png',
                    'score' => '4-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            530 =>
                array (
                    'local' => 'Wepion',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WvJ2uEYA-bZF4T89h.png',
                    'visitante' => 'Wavre',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/6Rw2qXzS-WdDQ7VJ1.png',
                    'score' => '0-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            531 =>
                array (
                    'local' => 'Wingene',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vcf4EpeM-W2KdlKhp.png',
                    'visitante' => 'KE Wervik',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pMZ9N8Cr-Ao5h0nud.png',
                    'score' => '2-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            532 =>
                array (
                    'local' => 'Witgoor Sport',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rPR9EQkl-rXQJcvKe.png',
                    'visitante' => 'Sport Koersel',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Wtu7Pre5-QXuwMmAk.png',
                    'score' => '6-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '27/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            533 =>
                array (
                    'local' => 'Woluwe Zaventem',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/UuUicHeM-p4iAW1y4.png',
                    'visitante' => 'Lenaarts',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ULqmGBdM-no9IpZn1.png',
                    'score' => '1-6',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '25/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            534 =>
                array (
                    'local' => 'Wolvertem Merchtem',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nRYYAKYg-vkJiB4Qg.png',
                    'visitante' => 'Meldert',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/plCJQwyB-8fbnmBOc.png',
                    'score' => '4-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            535 =>
                array (
                    'local' => 'Wortel',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lYNfi4jl-zgEc5N1e.png',
                    'visitante' => 'Jette',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/G4stPYg5-p6vVUt40.png',
                    'score' => '2-1(1-1)',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '30/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            536 =>
                array (
                    'local' => 'Zaffelare',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OGgygK9r-W8F4ypr7.png',
                    'visitante' => 'FC Lebbeke',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UmzAOGg5-hM6NzPJQ.png',
                    'score' => '1-4',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '28/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            537 =>
                array (
                    'local' => 'Zandhovense',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tG8keJjl-xbI70k1e.png',
                    'visitante' => 'KRC Mechelen',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WIVoFJil-OfjEVLjA.png',
                    'score' => '1-4',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '23/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            538 =>
                array (
                    'local' => 'Zelzate',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CxLwkQil-jqq90tGB.png',
                    'visitante' => 'Edeboys',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/t0MiWFBr-IoT0RXN1.png',
                    'score' => '5-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            539 =>
                array (
                    'local' => 'Zuun',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2BIShDZA-IuQxos9h.png',
                    'visitante' => 'Hornu',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Wjwrgihl-fZhDw7Yl.png',
                    'score' => '0-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            540 =>
                array (
                    'local' => 'Zwarte Leeuw',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Y7qSV3GG-b5CZG3e8.png',
                    'visitante' => 'Putte SK',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2kJLB9Br-ImCXrdXp.png',
                    'score' => '7-0',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '28/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            541 =>
                array (
                    'local' => 'Helchteren',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2kYXdWEa-rPpI5pKf.png',
                    'visitante' => 'Kabouters Opglabbeek',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/S2Xcfejl-CKlOjMLG.png',
                    'score' => '5-1',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '23/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            542 =>
                array (
                    'local' => 'Kalken',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/C2BlSteM-W0wadmnM.png',
                    'visitante' => 'Jong Lede',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hdr7KXCr-h4LBJVMH.png',
                    'score' => '0-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '28/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            543 =>
                array (
                    'local' => 'Floreffe',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fN57XQWg-O2nKIeXA.png',
                    'visitante' => 'R. Leopold',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xluOI3Da-SldlFm64.png',
                    'score' => '1-2',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '26/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            544 =>
                array (
                    'local' => 'Mormont II',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OGmRY5yS-riaSFsqq.png',
                    'visitante' => 'Andennais',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fgDSm4Wg-Yg7sFw8o.png',
                    'score' => '1-3',
                    'competition' => 'BÉLGICA: Copa - Clasificación - 1/16 de final',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            545 =>
                array (
                    'local' => 'Nacional Potosí',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KK8ewbFG-dA9mPgGq.png',
                    'visitante' => 'Aurora',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8AKCO7f5-hrWFm11o.png',
                    'score' => '3-2',
                    'competition' => 'BOLIVIA: División Profesional - Clausura - Jornada 4',
                    'date' => '25/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            546 =>
                array (
                    'local' => 'Sport Boys',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OYewSiYg-zqJkB0CA.png',
                    'visitante' => 'San José',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SUTvO7Wg-r5OuOJ4q.png',
                    'score' => '1-1',
                    'competition' => 'BOLIVIA: División Profesional - Clausura - Jornada 4',
                    'date' => '26/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            547 =>
                array (
                    'local' => 'Bolívar',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/GENsXszB-IsyCssPs.png',
                    'visitante' => 'Real Potosí',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/27j5hlzB-S0hNDLkm.png',
                    'score' => '5-2',
                    'competition' => 'BOLIVIA: División Profesional - Clausura - Jornada 4',
                    'date' => '29/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            548 =>
                array (
                    'local' => 'J. Wilstermann',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QF9HGLGG-4Kv64Pmh.png',
                    'visitante' => 'Always Ready',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/h2zsNpg5-YypDY6ar.png',
                    'score' => '3-0',
                    'competition' => 'BOLIVIA: División Profesional - Clausura - Jornada 4',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            549 =>
                array (
                    'local' => 'Zrinjski',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4Qe3YdwS-SdfciDLI.png',
                    'visitante' => 'Velez Mostar',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fo1CybFG-OOX5sxhf.png',
                    'score' => '1-0',
                    'competition' => 'BOSNIA Y HERZEGOVINA: Premier League - Jornada 2',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            550 =>
                array (
                    'local' => 'Celik Zenica',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8lRLxtWg-nFtkHuvk.png',
                    'visitante' => 'Sarajevo',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/t4x5ulAr-nFtkHuvk.png',
                    'score' => '0-0',
                    'competition' => 'BOSNIA Y HERZEGOVINA: Premier League - Jornada 2',
                    'date' => '23/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            551 =>
                array (
                    'local' => 'Cruzeiro',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QDS2MvBr-0rn95JMc.png',
                    'visitante' => 'Athletico-PR',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Wxsf2fFG-MmF0u4dj.png',
                    'score' => '0-2',
                    'competition' => 'BRASIL: Brasileirao Serie A - Jornada 12',
                    'date' => '26/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            552 =>
                array (
                    'local' => 'Fluminense',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WlxJgSdM-ptTI6fcH.png',
                    'visitante' => 'Sao Paulo',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YgK3qNCa-AFr3Lqct.png',
                    'score' => '1-2',
                    'competition' => 'BRASIL: Brasileirao Serie A - Jornada 12',
                    'date' => '28/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            553 =>
                array (
                    'local' => 'Internacional',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4EdoEoil-vRbvOeSi.png',
                    'visitante' => 'Ceará',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lO0NK6f5-06d3guJo.png',
                    'score' => '1-0',
                    'competition' => 'BRASIL: Brasileirao Serie A - Jornada 12',
                    'date' => '25/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            554 =>
                array (
                    'local' => 'Chapecoense',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/v9EKoUeM-t25AHKOe.png',
                    'visitante' => 'Bahia',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/f5V5z1Cr-vce7haYi.png',
                    'score' => '0-0',
                    'competition' => 'BRASIL: Brasileirao Serie A - Jornada 12',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            555 =>
                array (
                    'local' => 'Flamengo',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ADvIaiZA-APZOwWl9.png',
                    'visitante' => 'Botafogo',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MHO33ugl-AuMGc9ak.png',
                    'score' => '3-2',
                    'competition' => 'BRASIL: Brasileirao Serie A - Jornada 12',
                    'date' => '25/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            556 =>
                array (
                    'local' => 'Santos',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rJGaKUhl-2NQQ4YRT.png',
                    'visitante' => 'Avaí',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tGpYsdYg-zZehn0YA.png',
                    'score' => '3-1',
                    'competition' => 'BRASIL: Brasileirao Serie A - Jornada 12',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            557 =>
                array (
                    'local' => 'Cuiaba Esporte',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/COoi5ag5-C291Qktd.png',
                    'visitante' => 'Brasil de Pelotas',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0zgnuQyS-xC1IQdD8.png',
                    'score' => '1-1',
                    'competition' => 'BRASIL: Brasileirao Serie B - Jornada 12',
                    'date' => '26/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            558 =>
                array (
                    'local' => 'Vila Nova',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ttvNE0il-KAPnxsGE.png',
                    'visitante' => 'Bragantino',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pnCbhOCa-jqkiR3Nu.png',
                    'score' => '0-1',
                    'competition' => 'BRASIL: Brasileirao Serie B - Jornada 12',
                    'date' => '28/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            559 =>
                array (
                    'local' => 'Botev Vratsa',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/v7ApS0HG-8CeixGDE.png',
                    'visitante' => 'Lok. Plovdiv',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GxcHMNh5-zViJkcIA.png',
                    'score' => '1-4',
                    'competition' => 'BULGARIA: Parva Liga - Jornada 3',
                    'date' => '26/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            560 =>
                array (
                    'local' => 'Slavia Sofia',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QLxL3wHG-4Aq8nXHJ.png',
                    'visitante' => 'CSKA Sofia',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tjphW8il-INSlETRO.png',
                    'score' => '1-2',
                    'competition' => 'BULGARIA: Parva Liga - Jornada 3',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            561 =>
                array (
                    'local' => 'Edmonton',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0rpPHMGG-88XRzQRr.png',
                    'visitante' => 'Forge',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Eqq8fSwS-SAkfqcoD.png',
                    'score' => '1-1',
                    'competition' => 'CANADÁ: Canadian Premier League - Fall Season',
                    'date' => '27/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            562 =>
                array (
                    'local' => 'A. Italiano',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fZSe86hl-dKpJ4jiP.png',
                    'visitante' => 'Deportes Iquique',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YRB3d7hl-nBnzqfBn.png',
                    'score' => '3-1',
                    'competition' => 'CHILE: Primera División - Jornada 15',
                    'date' => '26/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            563 =>
                array (
                    'local' => 'O\'Higgins',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/f1MK7GzS-UFuhZm57.png',
                    'visitante' => 'Antofagasta',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AFqCZgcM-txIRvqh0.png',
                    'score' => '3-6',
                    'competition' => 'CHILE: Primera División - Jornada 15',
                    'date' => '28/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            564 =>
                array (
                    'local' => 'Huachipato',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0I0iteZg-tYsrwxJb.png',
                    'visitante' => 'U. Católica',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OvyAhfyB-6wMn3FiI.png',
                    'score' => '0-1',
                    'competition' => 'CHILE: Primera División - Jornada 15',
                    'date' => '25/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            565 =>
                array (
                    'local' => 'Colo Colo',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CMCTeMxS-2k55RUYq.png',
                    'visitante' => 'Everton',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EJdSA4Ca-4n5A8hHH.png',
                    'score' => '0-0',
                    'competition' => 'CHILE: Primera División - Jornada 15',
                    'date' => '29/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            566 =>
                array (
                    'local' => 'Guangzhou Evergrande',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vVCjzzFG-SAkSlKaK.png',
                    'visitante' => 'Beijing Renhe',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dSyLvpGG-UctPL03e.png',
                    'score' => '3-0',
                    'competition' => 'CHINA: Superliga - Jornada 20',
                    'date' => '27/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            567 =>
                array (
                    'local' => 'Jiangsu Suning',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/M70mshf5-8luTKKI1.png',
                    'visitante' => 'Shenzhen',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/re0lGHWg-O4uDBYcn.png',
                    'score' => '2-0',
                    'competition' => 'CHINA: Superliga - Jornada 20',
                    'date' => '30/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            568 =>
                array (
                    'local' => 'Tianjin Tianhai',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tQqzgJf5-noFp2l21.png',
                    'visitante' => 'Tianjin Teda',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CC0jGOil-Y55YSxw1.png',
                    'score' => '1-0',
                    'competition' => 'CHINA: Superliga - Jornada 20',
                    'date' => '29/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            569 =>
                array (
                    'local' => 'Wuhan Zall',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ng43EcEa-h2tf18rb.png',
                    'visitante' => 'Shanghai SIPG',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/M3Kbw1g5-6BieVCdR.png',
                    'score' => '1-1',
                    'competition' => 'CHINA: Superliga - Jornada 20',
                    'date' => '23/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            570 =>
                array (
                    'local' => 'Atl. Bucaramanga',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Eovph8GG-GbG1sM2j.png',
                    'visitante' => 'Millonarios',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/COAjhCg5-pxV4gPo9.png',
                    'score' => '1-2',
                    'competition' => 'COLOMBIA: Liga Águila - Clausura - Jornada 3',
                    'date' => '24/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            571 =>
                array (
                    'local' => 'La Equidad',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jRH9PPzB-GArubhDE.png',
                    'visitante' => 'U. Magdalena',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/f5xfvkg5-IgilJKb3.png',
                    'score' => '2-0',
                    'competition' => 'COLOMBIA: Liga Águila - Clausura - Jornada 3',
                    'date' => '28/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            572 =>
                array (
                    'local' => 'Once Caldas',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2JsUqijl-I32DP83d.png',
                    'visitante' => 'Dep. Pasto',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EDB1W0zB-zkIQ1zbN.png',
                    'score' => '3-1',
                    'competition' => 'COLOMBIA: Liga Águila - Clausura - Jornada 3',
                    'date' => '25/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            573 =>
                array (
                    'local' => 'Atl. Huila',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/z7L6gTwS-8jQ26taJ.png',
                    'visitante' => 'Deportivo Cali',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/O2O10jHG-recfzg3L.png',
                    'score' => '2-2',
                    'competition' => 'COLOMBIA: Liga Águila - Clausura - Jornada 3',
                    'date' => '27/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            574 =>
                array (
                    'local' => 'Anyang',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/O2H46zAr-l2N3c6VH.png',
                    'visitante' => 'Bucheon',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QPh9CreM-Ak9piZdm.png',
                    'score' => '2-2',
                    'competition' => 'COREA DEL SUR: K League 2 - Jornada 21',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            575 =>
                array (
                    'local' => 'Jeonnam',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/40TKlhf5-ttp49BeG.png',
                    'visitante' => 'Seoul E.',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dS3GwrBr-EkKLQKqN.png',
                    'score' => '0-1',
                    'competition' => 'COREA DEL SUR: K League 2 - Jornada 21',
                    'date' => '26/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            576 =>
                array (
                    'local' => 'Alajuelense',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0QS6MSh5-INS6xhFs.png',
                    'visitante' => 'Herediano',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/v3pLgYDa-vkmhBSTl.png',
                    'score' => '3-2',
                    'competition' => 'COSTA RICA: Primera División - Apertura - Jornada 3',
                    'date' => '24/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            577 =>
                array (
                    'local' => 'Grecia',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hnudESYg-CGWgRdq0.png',
                    'visitante' => 'Limón',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IVC1Dbh5-xIdY5nAa.png',
                    'score' => '4-0',
                    'competition' => 'COSTA RICA: Primera División - Apertura - Jornada 3',
                    'date' => '24/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            578 =>
                array (
                    'local' => 'Cartaginés',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/65IfkeDa-G8ex56P5.png',
                    'visitante' => 'San Carlos',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/folL86Da-0KXXeC6Q.png',
                    'score' => '1-0',
                    'competition' => 'COSTA RICA: Primera División - Apertura - Jornada 3',
                    'date' => '28/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            579 =>
                array (
                    'local' => 'ADR Jicaral',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AL7DYyCa-OblqEuBo.png',
                    'visitante' => 'U.C.R.',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zwkg01yB-C8M25oFt.png',
                    'score' => '2-0',
                    'competition' => 'COSTA RICA: Primera División - Apertura - Jornada 3',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            580 =>
                array (
                    'local' => 'Santos DG',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ljtSYuCr-S8W1Wu2S.png',
                    'visitante' => 'Saprissa',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tpNjAOYg-tt49Qllj.png',
                    'score' => '4-0',
                    'competition' => 'COSTA RICA: Primera División - Apertura - Jornada 3',
                    'date' => '25/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            581 =>
                array (
                    'local' => 'Gorica',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CQ0e4MHG-by3SdJ96.png',
                    'visitante' => 'Osijek',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nNYioZhl-jeyDb3Qo.png',
                    'score' => '3-1',
                    'competition' => 'CROACIA: 1. HNL - Jornada 2',
                    'date' => '23/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            582 =>
                array (
                    'local' => 'Varazdin',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/I3Ae1kZA-4EmGnEqL.png',
                    'visitante' => 'Hajduk Split',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KhiiTqGG-6Renvvr9.png',
                    'score' => '0-3',
                    'competition' => 'CROACIA: 1. HNL - Jornada 2',
                    'date' => '25/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            583 =>
                array (
                    'local' => 'Hobro',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4S4U6WGG-pCwtHA2M.png',
                    'visitante' => 'Randers',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0bHG3BXg-MPb4A8NB.png',
                    'score' => '2-2',
                    'competition' => 'DINAMARCA: Superliga - Jornada 3',
                    'date' => '27/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            584 =>
                array (
                    'local' => 'Nordsjaelland',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nuSqtrjl-rkK0wP93.png',
                    'visitante' => 'Esbjerg',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zwC9qZhl-Q5k5siAp.png',
                    'score' => '2-0',
                    'competition' => 'DINAMARCA: Superliga - Jornada 3',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            585 =>
                array (
                    'local' => 'Aarhus',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MyPsdDHG-tlABTC0F.png',
                    'visitante' => 'Midtjylland',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OC7ufJyB-AZY0sZPj.png',
                    'score' => '0-1',
                    'competition' => 'DINAMARCA: Superliga - Jornada 3',
                    'date' => '26/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            586 =>
                array (
                    'local' => 'Brondby',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Yq6zQNkl-AZY0sZPj.png',
                    'visitante' => 'Odense',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lSmok9yS-rZa0Bl85.png',
                    'score' => '3-2',
                    'competition' => 'DINAMARCA: Superliga - Jornada 3',
                    'date' => '30/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            587 =>
                array (
                    'local' => 'Fredericia',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tIV7OzBr-S8EKQ8ee.png',
                    'visitante' => 'Vendsyssel',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jPJEUVil-hOaS0EAS.png',
                    'score' => '1-2',
                    'competition' => 'DINAMARCA: 1.ª División - Jornada 1',
                    'date' => '26/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            588 =>
                array (
                    'local' => 'Nykobing',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tnKgLlZA-W4k1qNnK.png',
                    'visitante' => 'Koge',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hn7bG1zB-4bBqnsgI.png',
                    'score' => '3-1',
                    'competition' => 'DINAMARCA: 1.ª División - Jornada 1',
                    'date' => '29/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            589 =>
                array (
                    'local' => 'Kolding',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tWv8eeyB-Y1scVbp6.png',
                    'visitante' => 'Hvidovre',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rwd1C1Ar-CIZQcW62.png',
                    'score' => '2-1',
                    'competition' => 'DINAMARCA: 1.ª División - Jornada 1',
                    'date' => '25/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            590 =>
                array (
                    'local' => 'Skive',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zqiM19EG-dl6NSWQ7.png',
                    'visitante' => 'Naestved',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vsTcBye5-CAPLkco8.png',
                    'score' => '3-1',
                    'competition' => 'DINAMARCA: 1.ª División - Jornada 1',
                    'date' => '30/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            591 =>
                array (
                    'local' => 'El Nacional',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/86vzXYxS-pYY1rIxl.png',
                    'visitante' => 'Mushuc Runa',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/thDPcfWg-h8HPHgkT.png',
                    'score' => '2-0',
                    'competition' => 'ECUADOR: Liga Pro - Jornada 19',
                    'date' => '25/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            592 =>
                array (
                    'local' => 'Tecnico U.',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MV2aZLg5-OUKWsnnA.png',
                    'visitante' => 'Emelec',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QVDf3rjl-A7jXRs8L.png',
                    'score' => '2-2',
                    'competition' => 'ECUADOR: Liga Pro - Jornada 19',
                    'date' => '23/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            593 =>
                array (
                    'local' => 'Fuerza A.',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2DGtL6yB-dQuBi73B.png',
                    'visitante' => 'U. Católica',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GILgdvvS-bcpdGUD1.png',
                    'score' => '1-2',
                    'competition' => 'ECUADOR: Liga Pro - Jornada 19',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            594 =>
                array (
                    'local' => 'Barcelona SC',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ryxDYXh5-WpFjgiv0.png',
                    'visitante' => 'Ind. del Valle',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/t8nwTpe5-xCV04G7D.png',
                    'score' => '4-1',
                    'competition' => 'ECUADOR: Liga Pro - Jornada 19',
                    'date' => '23/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            595 =>
                array (
                    'local' => 'LDU Portoviejo',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hjSlDdYg-zkEJBAKm.png',
                    'visitante' => 'LDU Loja',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/On3em6Xg-UF3vCOdO.png',
                    'score' => '6-1',
                    'competition' => 'ECUADOR: Serie B - Jornada 20',
                    'date' => '27/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            596 =>
                array (
                    'local' => 'Gualaceo',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Iyjjlggl-WE0TQerr.png',
                    'visitante' => 'Manta',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QscFDvEa-6szbqbNs.png',
                    'score' => '2-0',
                    'competition' => 'ECUADOR: Serie B - Jornada 20',
                    'date' => '26/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            597 =>
                array (
                    'local' => 'Al Ahly',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bRWF8Vh5-MkKZWjBM.png',
                    'visitante' => 'Zamalek',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nPDlV2Xg-ITaeDsXL.png',
                    'score' => '1-0',
                    'competition' => 'EGIPTO: Premier League - Jornada 34',
                    'date' => '29/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            598 =>
                array (
                    'local' => 'Queen\'s Park',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/resQwNAr-reixY1Rl.png',
                    'visitante' => 'Clyde',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8UEMekCa-YgXoX9j8.png',
                    'score' => '2-1(1-1)',
                    'competition' => 'ESCOCIA: League Cup',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            599 =>
                array (
                    'local' => 'Dundee FC',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nPKUKGYg-xM0r5Dqi.png',
                    'visitante' => 'Inverness',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QibHRMf5-IundAnqe.png',
                    'score' => '1-0',
                    'competition' => 'ESCOCIA: League Cup',
                    'date' => '28/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            600 =>
                array (
                    'local' => 'Dun. Streda',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8xYLxczB-S0MlLKxO.png',
                    'visitante' => 'Pohronie',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IFRolBg5-KMLxGY7I.png',
                    'score' => '5-1',
                    'competition' => 'ESLOVAQUIA: Fortuna liga - Jornada 2',
                    'date' => '24/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            601 =>
                array (
                    'local' => 'Zilina',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/40RplbCa-QkBgxXUB.png',
                    'visitante' => 'Trnava',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GrnQn1h5-fgHMEzwd.png',
                    'score' => '4-2',
                    'competition' => 'ESLOVAQUIA: Fortuna liga - Jornada 2',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            602 =>
                array (
                    'local' => 'Ruzomberok B',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OMog1pwS-zPYJuLgf.png',
                    'visitante' => 'Komarno',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WxnOKTzS-UNsO0lw7.png',
                    'score' => '4-1',
                    'competition' => 'ESLOVAQUIA: 2. liga - Jornada 2',
                    'date' => '26/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            603 =>
                array (
                    'local' => 'S. Bratislava B',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nR3tTjWg-UJcXX2Zt.png',
                    'visitante' => 'Skalica',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nk0Bg4Yg-O4L0hMU0.png',
                    'score' => '4-0',
                    'competition' => 'ESLOVAQUIA: 2. liga - Jornada 2',
                    'date' => '27/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            604 =>
                array (
                    'local' => 'Zilina B',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Qo4NMpg5-bPzI1NXA.png',
                    'visitante' => 'Dubnica',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/40GoRDWg-jZHumAG2.png',
                    'score' => '2-4',
                    'competition' => 'ESLOVAQUIA: 2. liga - Jornada 2',
                    'date' => '25/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            605 =>
                array (
                    'local' => 'Bravo',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/StfW46Fa-lUHXWKyj.png',
                    'visitante' => 'Tabor Sezana',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AmugcQBr-GK9luD4j.png',
                    'score' => '1-0',
                    'competition' => 'ESLOVENIA: Prva Liga - Jornada 3',
                    'date' => '30/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            606 =>
                array (
                    'local' => 'Maribor',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/v9py2TeM-2kXPb85r.png',
                    'visitante' => 'O. Ljubljana',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WErkkqxS-bHxgSFIu.png',
                    'score' => '0-0',
                    'competition' => 'ESLOVENIA: Prva Liga - Jornada 3',
                    'date' => '27/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            607 =>
                array (
                    'local' => 'New England Revolution',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lG7apoDa-8h16SIAN.png',
                    'visitante' => 'Orlando City',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MNMDp5cM-QRfm7pVR.png',
                    'score' => '4-1',
                    'competition' => 'ESTADOS UNIDOS: MLS',
                    'date' => '25/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            608 =>
                array (
                    'local' => 'New York Red Bulls',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jLCdXBZA-lYLqVj23.png',
                    'visitante' => 'Columbus Crew',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/42Yo8dyS-C2kd9CmM.png',
                    'score' => '2-3',
                    'competition' => 'ESTADOS UNIDOS: MLS',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            609 =>
                array (
                    'local' => 'Chicago Fire',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WGZ00rBr-zshn7Zqh.png',
                    'visitante' => 'DC United',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MuhwhtwS-pAQrZVvN.png',
                    'score' => '0-0',
                    'competition' => 'ESTADOS UNIDOS: MLS',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            610 =>
                array (
                    'local' => 'FC Dallas',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IPVa0Qhl-bRcU6Sfg.png',
                    'visitante' => 'Real Salt Lake',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OxGZ7ve5-0YAAdGyH.png',
                    'score' => '0-0',
                    'competition' => 'ESTADOS UNIDOS: MLS',
                    'date' => '25/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            611 =>
                array (
                    'local' => 'Houston Dynamo',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vuQjzPCr-StS6fd0n.png',
                    'visitante' => 'Seattle Sounders',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IJPa6fHG-6iHH0MVJ.png',
                    'score' => '0-1',
                    'competition' => 'ESTADOS UNIDOS: MLS',
                    'date' => '28/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            612 =>
                array (
                    'local' => 'Minnesota United',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fXYygQfM-IgwRNS93.png',
                    'visitante' => 'Vancouver Whitecaps',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nXTMece5-lz724ho8.png',
                    'score' => '0-0',
                    'competition' => 'ESTADOS UNIDOS: MLS',
                    'date' => '25/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            613 =>
                array (
                    'local' => 'Montreal Impact',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6gpLUVzS-6XQAgGFh.png',
                    'visitante' => 'Philadelphia Union',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fsqHkFdM-K6ymRmQq.png',
                    'score' => '4-0',
                    'competition' => 'ESTADOS UNIDOS: MLS',
                    'date' => '24/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            614 =>
                array (
                    'local' => 'Toronto FC',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/S0szFuXg-Gzjelhtc.png',
                    'visitante' => 'Cincinnati',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nqEwF6GG-YaAei40r.png',
                    'score' => '2-1',
                    'competition' => 'ESTADOS UNIDOS: MLS',
                    'date' => '29/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            615 =>
                array (
                    'local' => 'San Jose Earthquakes',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6Fh3DODa-YHL5ueor.png',
                    'visitante' => 'Colorado Rapids',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OOiHXVAr-2RllC8Er.png',
                    'score' => '3-1',
                    'competition' => 'ESTADOS UNIDOS: MLS',
                    'date' => '24/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            616 =>
                array (
                    'local' => 'Portland Timbers',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/44WrYxeM-0puB5IbJ.png',
                    'visitante' => 'Los Angeles Galaxy',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lCJPumFa-CWxYCVJj.png',
                    'score' => '4-0',
                    'competition' => 'ESTADOS UNIDOS: MLS',
                    'date' => '24/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            617 =>
                array (
                    'local' => 'North Carolina',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AVEUqfDa-xEzFBxyN.png',
                    'visitante' => 'Atlanta United 2',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2m2vU5Yg-KQ7ph0mj.png',
                    'score' => '4-2',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '28/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            618 =>
                array (
                    'local' => 'Birmingham',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/YTgA7vHG-6XxXI3xb.png',
                    'visitante' => 'Charlotte Independ.',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/trETblg5-jVP36wC6.png',
                    'score' => '1-0',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '30/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            619 =>
                array (
                    'local' => 'Nashville SC',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Y7Y3g4Da-r3c7qG24.png',
                    'visitante' => 'Indy Eleven',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/42hnDFHG-C6TSx8Ms.png',
                    'score' => '2-0',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '30/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            620 =>
                array (
                    'local' => 'Swope Park',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lha8xGh5-Gl5oEiwc.png',
                    'visitante' => 'Charleston',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/URWmTRWg-buVOzuFs.png',
                    'score' => '-',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            621 =>
                array (
                    'local' => 'Austin Bold',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MyJ4lphl-MJNAJLAI.png',
                    'visitante' => 'Fresno',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/06vsC3xS-4AoDA83H.png',
                    'score' => '1-0',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '27/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            622 =>
                array (
                    'local' => 'Memphis',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8jIhwFCa-MBNK205q.png',
                    'visitante' => 'Ottawa Fury',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2JRItogl-63L5ipSK.png',
                    'score' => '2-0',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            623 =>
                array (
                    'local' => 'Saint Louis FC',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jJQ2qfyS-CvRa7Jd0.png',
                    'visitante' => 'Bethlehem',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WrfFKgdM-xbCnNZMs.png',
                    'score' => '3-0',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '23/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            624 =>
                array (
                    'local' => 'San Antonio',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/S8Tf7cYg-dzVY9HFD.png',
                    'visitante' => 'Real Monarchs',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GhO9CRCr-bqoEGNZD.png',
                    'score' => '3-1',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '23/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            625 =>
                array (
                    'local' => 'Tulsa Roughnecks',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ClJahbjl-KOduzx9h.png',
                    'visitante' => 'Phoenix Rising',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vRmecnzB-z94Ig9WC.png',
                    'score' => '0-1',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '29/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            626 =>
                array (
                    'local' => 'Orange County SC',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6m8aiFxS-WEOIm0x7.png',
                    'visitante' => 'Sacramento Republic',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CWDWbvCa-GxypOtEJ.png',
                    'score' => '0-0',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            627 =>
                array (
                    'local' => 'Tacoma Defiance',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zuJHnbwS-zXQo73P5.png',
                    'visitante' => 'Oklahoma City Energy',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jo1so6Cr-vFlb0wMC.png',
                    'score' => '0-2',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            628 =>
                array (
                    'local' => 'Las Vegas Lights',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vDgIw0eM-dQDbZXJC.png',
                    'visitante' => 'Rio Grande',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/judgopcM-zP4w3jjG.png',
                    'score' => '2-1',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            629 =>
                array (
                    'local' => 'Reno',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/UkyMCthl-Ea3MhToJ.png',
                    'visitante' => 'Colorado Springs',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YXWLzwZg-UZJx345E.png',
                    'score' => '4-0',
                    'competition' => 'ESTADOS UNIDOS: USL Championship',
                    'date' => '29/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            630 =>
                array (
                    'local' => 'Tulevik',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WYPfBqjl-fLkp0Sq0.png',
                    'visitante' => 'Levadia',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lE0eh6h5-2RtBgZU5.png',
                    'score' => '0-3',
                    'competition' => 'ESTONIA: Meistriliiga - Jornada 21',
                    'date' => '27/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            631 =>
                array (
                    'local' => 'Arsenal',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pfchdCg5-pU2IsJm8.png',
                    'visitante' => 'Lyon',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rytJfXyS-IRbzmzRB.png',
                    'score' => '1-2',
                    'competition' => 'EUROPA: Emirates Cup - Final',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            632 =>
                array (
                    'local' => 'Francia Sub-19 F',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dQyvqDfM-K67WKkF1.png',
                    'visitante' => 'Alemania Sub-19 F',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/4UsHs2Da-Q9iMFoVq.png',
                    'score' => '2-1',
                    'competition' => 'EUROPA: Campeonato de Europa Femenino Sub-19 - Playoffs - Final',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            633 =>
                array (
                    'local' => 'Stallion',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IaZfgvgl-vm6tmHaq.png',
                    'visitante' => 'Green Archers',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CMj9R7zB-xnnFdfgI.png',
                    'score' => '0-0',
                    'competition' => 'FILIPINAS: PFL',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            634 =>
                array (
                    'local' => 'KPV',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xAt7fFwS-Ox3KDZUC.png',
                    'visitante' => 'KuPS',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rF2aUqBr-GKeEz1pf.png',
                    'score' => '2-1',
                    'competition' => 'FINLANDIA: Veikkausliiga - Jornada 17',
                    'date' => '29/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            635 =>
                array (
                    'local' => 'Mariehamn',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0WOF9zAr-GWJuiKMj.png',
                    'visitante' => 'HIFK',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IPyrQkZA-00k6ywNJ.png',
                    'score' => '1-3',
                    'competition' => 'FINLANDIA: Veikkausliiga - Jornada 18',
                    'date' => '25/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            636 =>
                array (
                    'local' => 'Rovaniemi',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rRZF6jeM-GCaBtV3N.png',
                    'visitante' => 'Inter Turku',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/25XF6X9r-tEsP4vnr.png',
                    'score' => '0-2',
                    'competition' => 'FINLANDIA: Veikkausliiga - Jornada 17',
                    'date' => '26/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            637 =>
                array (
                    'local' => 'Comunicaciones',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WzUyiQZA-vkmhBSTl.png',
                    'visitante' => 'Cobán Imperial',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nuDm0RWg-lOp7Wlnp.png',
                    'score' => '0-1',
                    'competition' => 'GUATEMALA: Liga Nacional - Apertura - Jornada 1',
                    'date' => '25/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            638 =>
                array (
                    'local' => 'Xelajú',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tMWOTFYg-rBwA3q3b.png',
                    'visitante' => 'Municipal',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MZYiJsf5-xUfBkdNI.png',
                    'score' => '0-0',
                    'competition' => 'GUATEMALA: Liga Nacional - Apertura - Jornada 1',
                    'date' => '26/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            639 =>
                array (
                    'local' => 'Antigua',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SONchlgl-prdlt3gn.png',
                    'visitante' => 'Malacateco',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hto3r9g5-WlySUX4B.png',
                    'score' => '2-0',
                    'competition' => 'GUATEMALA: Liga Nacional - Apertura - Jornada 1',
                    'date' => '27/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            640 =>
                array (
                    'local' => 'Santa Lucia',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WxXUT2jl-W66k23rR.png',
                    'visitante' => 'Sanarate',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xnRDkbyB-IRUXe8li.png',
                    'score' => '1-1',
                    'competition' => 'GUATEMALA: Liga Nacional - Apertura - Jornada 1',
                    'date' => '28/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            641 =>
                array (
                    'local' => 'Guastatoya',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/x0zXxfyB-Kt04eJsQ.png',
                    'visitante' => 'Iztapa',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/U9ZpvoBr-0vf6H7b3.png',
                    'score' => '2-0',
                    'competition' => 'GUATEMALA: Liga Nacional - Apertura - Jornada 1',
                    'date' => '24/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            642 =>
                array (
                    'local' => 'Vida',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ji6WCQhl-MB3Az4vp.png',
                    'visitante' => 'UPNFM',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UqMp0Wh5-ri1ZTLcj.png',
                    'score' => '1-1',
                    'competition' => 'HONDURAS: Liga Nacional - Apertura - Jornada 1',
                    'date' => '23/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            643 =>
                array (
                    'local' => 'Real Sociedad',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/UDoI6Kg5-bJqtKnKk.png',
                    'visitante' => 'Real España',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QPHZHyg5-0I2MGl6R.png',
                    'score' => '0-0',
                    'competition' => 'HONDURAS: Liga Nacional - Apertura - Jornada 1',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            644 =>
                array (
                    'local' => 'Padang',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/GCMr4XCr-KfHhOOQg.png',
                    'visitante' => 'Persebaya',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AHGxaNwS-SEce4uOF.png',
                    'score' => '0-0',
                    'competition' => 'INDONESIA: Liga 1 - Jornada 11',
                    'date' => '28/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            645 =>
                array (
                    'local' => 'Cork City',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0ENE5W9r-YHXL4Skn.png',
                    'visitante' => 'Shamrock Rovers',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fFf7ApCr-Od3wnX1T.png',
                    'score' => '1-1',
                    'competition' => 'IRLANDA: Premier Division - Jornada 27',
                    'date' => '25/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            646 =>
                array (
                    'local' => 'Grindavik',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/n5LZzaYA-h2OhQNid.png',
                    'visitante' => 'Vestmannaeyjar',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bLpEo3jl-2DRm8Vdr.png',
                    'score' => '2-1',
                    'competition' => 'ISLANDIA: Pepsideild - Jornada 14',
                    'date' => '24/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            647 =>
                array (
                    'local' => 'Akureyri',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WxFKbFAr-QkT10FGe.png',
                    'visitante' => 'Hafnarfjordur',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nTa7axf5-CITj9rF0.png',
                    'score' => '1-0',
                    'competition' => 'ISLANDIA: Pepsideild - Jornada 14',
                    'date' => '29/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            648 =>
                array (
                    'local' => 'Akranes',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/YwuwqLh5-IXk9bIsa.png',
                    'visitante' => 'Valur',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GttxF9YA-zD8QbpCs.png',
                    'score' => '1-2',
                    'competition' => 'ISLANDIA: Pepsideild - Jornada 14',
                    'date' => '30/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            649 =>
                array (
                    'local' => 'Fylkir',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KnsmlsAr-jD8yC319.png',
                    'visitante' => 'KR Reykjavik',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AkXowoHG-Y3zSPydQ.png',
                    'score' => '1-4',
                    'competition' => 'ISLANDIA: Pepsideild - Jornada 14',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            650 =>
                array (
                    'local' => 'B36 Torshavn',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6XekPLwS-EPrpwul2.png',
                    'visitante' => 'Vikingur',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/4QT5iwAr-rTG1pTaf.png',
                    'score' => '2-1',
                    'competition' => 'ISLAS FEROE: Effodeildin - Jornada 16',
                    'date' => '24/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            651 =>
                array (
                    'local' => 'Hapoel Hadera',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4GrpPmEa-fDHAkMB9.png',
                    'visitante' => 'Shmona',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tWoInRZA-dbL6lxiS.png',
                    'score' => '1-2',
                    'competition' => 'ISRAEL: Toto Cup - Jornada 1',
                    'date' => '26/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            652 =>
                array (
                    'local' => 'B. Jerusalem',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QVqFCnDa-S0YwgY7G.png',
                    'visitante' => 'Nes Tziona',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/M9JEr8fM-pv0U2x44.png',
                    'score' => '2-1',
                    'competition' => 'ISRAEL: Toto Cup - Jornada 1',
                    'date' => '27/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            653 =>
                array (
                    'local' => 'Astana',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/b5FoJ2wS-48nguKbG.png',
                    'visitante' => 'Taraz',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/v1TfzdDa-nqEmwA3l.png',
                    'score' => '4-0',
                    'competition' => 'KAZAJISTÁN: Premier League - Jornada 20',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            654 =>
                array (
                    'local' => 'Tobol',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2TwNgjxS-QZCixUIf.png',
                    'visitante' => 'Kaisar',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vXhpV5yB-nT9RhmTq.png',
                    'score' => '0-2',
                    'competition' => 'KAZAJISTÁN: Premier League - Jornada 20',
                    'date' => '25/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            655 =>
                array (
                    'local' => 'Ordabasy',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pdvdOHcM-EgAv9EUh.png',
                    'visitante' => 'Ertis Pavlodar',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bqISFpCa-Sdz6EVqe.png',
                    'score' => '1-0',
                    'competition' => 'KAZAJISTÁN: Premier League - Jornada 20',
                    'date' => '25/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            656 =>
                array (
                    'local' => 'Metta/LU',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pAXYJ2Wg-hl3yPnbL.png',
                    'visitante' => 'FK Liepaja',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fXKTrpXg-8lgNlIz9.png',
                    'score' => '2-3',
                    'competition' => 'LETONIA: Optibet Virsliga - Jornada 23',
                    'date' => '29/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            657 =>
                array (
                    'local' => 'Ventspils',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CSpI3K9r-bw6sMZPR.png',
                    'visitante' => 'BFC Daugavpils',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vHb4EJZA-KI9dmVb7.png',
                    'score' => '3-0',
                    'competition' => 'LETONIA: Optibet Virsliga - Jornada 23',
                    'date' => '23/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            658 =>
                array (
                    'local' => 'RFS',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OUNqzpXg-r5QtZPe2.png',
                    'visitante' => 'Valmiera',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/r5XasqYg-bFowtqns.png',
                    'score' => '1-0',
                    'competition' => 'LETONIA: Optibet Virsliga - Jornada 23',
                    'date' => '24/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            659 =>
                array (
                    'local' => 'León',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pz5VhoAr-dfDfv5tR.png',
                    'visitante' => 'Club América',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xKIBpcEG-EkffKDRG.png',
                    'score' => '0-0',
                    'competition' => 'MÉXICO: Liga MX - Apertura - Jornada 2',
                    'date' => '27/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            660 =>
                array (
                    'local' => 'Cruz Azul',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/juUdUvvS-zaejLgCA.png',
                    'visitante' => 'Toluca',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GAodfoZA-0zOaESk5.png',
                    'score' => '1-1',
                    'competition' => 'MÉXICO: Liga MX - Apertura - Jornada 2',
                    'date' => '28/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            661 =>
                array (
                    'local' => 'Tijuana',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dhGYoCh5-YZWSbCJi.png',
                    'visitante' => 'Querétaro',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fomLHLzB-M73aqXJ4.png',
                    'score' => '1-1',
                    'competition' => 'MÉXICO: Liga MX - Apertura - Jornada 2',
                    'date' => '24/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            662 =>
                array (
                    'local' => 'U.N.A.M.',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2mlyLKEG-GEtusY6Q.png',
                    'visitante' => 'Necaxa',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pdhMDRXg-Qs1ifK8m.png',
                    'score' => '2-0',
                    'competition' => 'MÉXICO: Liga MX - Apertura - Jornada 2',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            663 =>
                array (
                    'local' => 'Golden Arrows (Rsa)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ji3YCQFG-tWfupjVk.png',
                    'visitante' => 'Uthongathi (Rsa)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/d4OXYNyS-rPOePRPF.png',
                    'score' => '3-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            664 =>
                array (
                    'local' => 'Pyunik (Arm)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pKkY2dGG-SKr8mIAb.png',
                    'visitante' => 'FC Van (Arm)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ptHBB8eM-b7RsXBLt.png',
                    'score' => '0-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            665 =>
                array (
                    'local' => 'Navalcarnero (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IDrMxaYA-6yg7Quw7.png',
                    'visitante' => 'Rayo Majadahonda (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/61cN6tWg-lOvIA0RO.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            666 =>
                array (
                    'local' => 'AD Torrejon (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6ZBIaIzB-dlIoDahI.png',
                    'visitante' => 'Santa Ana (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KA4FMNyS-zwx6V3ye.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            667 =>
                array (
                    'local' => 'Slavia Praga B (Cze)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vVY3uoCr-2VfY2NuM.png',
                    'visitante' => 'Stechovice (Cze)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KlyHSXGG-nkejXUBr.png',
                    'score' => '6-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            668 =>
                array (
                    'local' => 'Werder Bremen (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lEp5rDFG-C6khRCLH.png',
                    'visitante' => 'Eibar (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CvetxaAr-M9doLjp7.png',
                    'score' => '4-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            669 =>
                array (
                    'local' => 'Eggendorf (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xCVYoGYg-fJtOb5z8.png',
                    'visitante' => 'Wiener Linien (Aut)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0lEAvbwS-O4X73ytb.png',
                    'score' => '1-5',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            670 =>
                array (
                    'local' => 'Boavista (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2eSLVLh5-EcjMjsDD.png',
                    'visitante' => 'Tondela (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xQuc8ZYg-YFbBO9dT.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            671 =>
                array (
                    'local' => 'FC Alverca (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/GAAM0VyS-dppfnV4c.png',
                    'visitante' => '1º Dezembro (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xlGn7eFa-UgQ9Zm2G.png',
                    'score' => '3-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            672 =>
                array (
                    'local' => 'Feyenoord (Ned)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hxdMgrGG-nuE5DXF1.png',
                    'visitante' => 'Southampton (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fmA9gnyB-Ozt88U7U.png',
                    'score' => '1-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            673 =>
                array (
                    'local' => 'Baumberg (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pr52Ynh5-2LHA8MWj.png',
                    'visitante' => 'Friesdorf (Ger)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tKw4k4YA-YXoSaBr3.png',
                    'score' => '6-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            674 =>
                array (
                    'local' => 'Bayer Leverkusen (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OWpaDOYA-YFjlSh6B.png',
                    'visitante' => 'Heracles (Ned)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0KH1euzB-nydYNje4.png',
                    'score' => '3-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            675 =>
                array (
                    'local' => 'Germania Ratingen (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/4KXW4nYg-8Ihnoxye.png',
                    'visitante' => 'Hennef (Ger)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hlbsIse5-t46qXtt6.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            676 =>
                array (
                    'local' => 'SpVgg Sterkrade-Nord (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Moykc6ZA-YJSyEJ0M.png',
                    'visitante' => 'Remscheid (Ger)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jmWD5XAr-GYQS6bNC.png',
                    'score' => '4-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            677 =>
                array (
                    'local' => 'Twente (Ned)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/n9hVHBcM-xUnkdXKi.png',
                    'visitante' => 'Konyaspor (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pOF8NYYA-8py6YCTl.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            678 =>
                array (
                    'local' => 'KSV Roeselare (Bel)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WIkw5nf5-t4YStIHU.png',
                    'visitante' => 'Saint Eloois (Bel)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rmOm90Ar-4EgPd7o6.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            679 =>
                array (
                    'local' => 'Middlesbrough (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Ongu1qAr-rBodzytr.png',
                    'visitante' => 'Saint-Étienne (Fra)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ImkZgXYA-Qk1sBuEM.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            680 =>
                array (
                    'local' => 'Mönchengladbach (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rDRx1VXg-xQEMKj97.png',
                    'visitante' => 'Athletic Club (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/E9o4aVEa-xGwCks5S.png',
                    'score' => '0-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            681 =>
                array (
                    'local' => 'Newport (Wal)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tY1fkyYg-lO2WsPFm.png',
                    'visitante' => 'Stoke (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/W4N0OQZA-jPU1meWN.png',
                    'score' => '-',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            682 =>
                array (
                    'local' => 'Rangers (Sco)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/A7Ntv6g5-ARU7oy8P.png',
                    'visitante' => 'Derby (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/QsZBqwZA-xhVV52PM.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            683 =>
                array (
                    'local' => 'Reading (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hfyXOnyB-6P8qohf0.png',
                    'visitante' => 'Chelsea (Eng)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GMmvDEdM-2B0QucIK.png',
                    'score' => '3-4',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            684 =>
                array (
                    'local' => 'Sheffield Wed (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6w7bTmyB-dlIB2tc0.png',
                    'visitante' => 'Espanyol (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SObn7xDr-Eq7v4whI.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            685 =>
                array (
                    'local' => 'Girondins (Fra)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jXauMLBr-UH4VDsU3.png',
                    'visitante' => 'Galatasaray (Tur)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ziy5KsdM-ITBNFtL3.png',
                    'score' => '1-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            686 =>
                array (
                    'local' => 'Bayer Leverkusen (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OWpaDOYA-YFjlSh6B.png',
                    'visitante' => 'Vitesse (Ned)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xh7ZyoBr-nydYNje4.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            687 =>
                array (
                    'local' => 'Cittadella (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OlVbH3GG-vyWhBDBb.png',
                    'visitante' => 'Trento (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SxJt85cM-x2zStCjd.png',
                    'score' => '6-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            688 =>
                array (
                    'local' => 'Hapoel Azor (Isr)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/W8kVtzDr-6acNMbx8.png',
                    'visitante' => 'Beitar Yavne (Isr)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IgO7K1ZA-Qmtm30D7.png',
                    'score' => '4-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            689 =>
                array (
                    'local' => 'Padova (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QRjZtVeM-MyFMnRPS.png',
                    'visitante' => 'Virtus Verona (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vBR3yayB-tvFu1WNf.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            690 =>
                array (
                    'local' => 'Pergolettese (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/U9TcxNYA-bFT1FYrb.png',
                    'visitante' => 'Piacenza (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IHR3AdwS-pI6ga41n.png',
                    'score' => '3-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            691 =>
                array (
                    'local' => 'Pianese (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/K6ofJVh5-GjrLcLu5.png',
                    'visitante' => 'Follonica Gavorrano (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/OGPDn5GG-6onMeSVh.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            692 =>
                array (
                    'local' => 'Renova (Mkd)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Kvzox3yS-MTdUWGit.png',
                    'visitante' => 'Gjilani (Kos)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/MudRlvcM-nFQkmu3d.png',
                    'score' => '2-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            693 =>
                array (
                    'local' => 'Santa Clara (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/I1LuKXXg-fynuQmWN.png',
                    'visitante' => 'SC Praiense (Por)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dtB3zOWg-vFrgEwW7.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            694 =>
                array (
                    'local' => 'Din. Vranje (Srb)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pMaWz9YA-2LyMyzzG.png',
                    'visitante' => 'Radnicki Pirot (Srb)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nqeJZojl-fizDLkFE.png',
                    'score' => '1-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            695 =>
                array (
                    'local' => 'Novara (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dETX4AzS-MgYpDZtn.png',
                    'visitante' => 'Arconatese (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bgl0i2Wg-YDXa4KOd.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            696 =>
                array (
                    'local' => 'Pro Vercelli (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/APvp4VxS-O8XFapMt.png',
                    'visitante' => 'Casale (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IVrR4XzB-pOcufAsp.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            697 =>
                array (
                    'local' => 'Salernitana (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/K8hPw2h5-rXWCsqZ6.png',
                    'visitante' => 'Picerno (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SzAHHpeM-tWSDHoo0.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            698 =>
                array (
                    'local' => 'Ajka (Hun)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/zVMN5Y9r-OGwWdjcs.png',
                    'visitante' => 'Szentlorinc (Hun)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fgnvMSfM-t6LUaioP.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            699 =>
                array (
                    'local' => 'Albacete B (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/fX5P3qDa-vkDLBPuI.png',
                    'visitante' => 'Las Rozas (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/x2mRhrh5-K8QeNDNh.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            700 =>
                array (
                    'local' => 'Gubbio (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Gxavh0yB-dIT09itB.png',
                    'visitante' => 'Livorno (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CUHg6YzS-YuS48BeH.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '29/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            701 =>
                array (
                    'local' => 'Liverpool (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vwC9RGhl-2B0QucIK.png',
                    'visitante' => 'Nápoles (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lhPsgJWg-zyNNicC8.png',
                    'score' => '0-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            702 =>
                array (
                    'local' => 'Medjimurje (Cro)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KfqPUjil-2Dmo0MqU.png',
                    'visitante' => 'Heviz (Hun)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/prm46TYA-vHJLw6aC.png',
                    'score' => '2-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            703 =>
                array (
                    'local' => 'Sassuolo (Ita)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IFKEHRGG-hWBv29Yp.png',
                    'visitante' => 'Ciliverghe Mazzano (Ita)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/46eUKVYg-tj5Tt6bh.png',
                    'score' => '10-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            704 =>
                array (
                    'local' => 'Wels (Aut)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/v3jGJpyS-zsrztrT2.png',
                    'visitante' => 'Eintracht Frankfurt (Ger)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/f9dVVYCa-h85SGgwF.png',
                    'score' => '0-7',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '27/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            705 =>
                array (
                    'local' => 'Zarkovo (Srb)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pltV28hl-QuE2XQrG.png',
                    'visitante' => 'Sindjelic Beograd (Srb)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rZbYT5h5-Obx6G9TF.png',
                    'score' => '2-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '23/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            706 =>
                array (
                    'local' => 'Colonia (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8hxnRHEa-Umm0PjjU.png',
                    'visitante' => 'Villarreal (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/65Z85Uh5-noNk3ENb.png',
                    'score' => '1-3',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '25/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            707 =>
                array (
                    'local' => 'Kasimpasa (Tur)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Ys2kyFfM-vDNWt1Nm.png',
                    'visitante' => 'Al-Ettifaq (Sau)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ED6MVdBr-ShOyhf7H.png',
                    'score' => '4-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '26/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            708 =>
                array (
                    'local' => 'Mallorca (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/pSBNl3eM-llYeq24I.png',
                    'visitante' => 'Poblense (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nqk1I3Ea-K2mhzmOF.png',
                    'score' => '1-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            709 =>
                array (
                    'local' => 'Sporting CP (Por)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OWbPc9il-WYr1gV4A.png',
                    'visitante' => 'Valencia (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/O2FpIYg5-KYu4i3zG.png',
                    'score' => '1-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '28/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            710 =>
                array (
                    'local' => 'Pozoblanco (Esp)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/YDTSu2Yg-QFbU0qg7.png',
                    'visitante' => 'Córdoba (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SvAe0DxS-S6HqkbxH.png',
                    'score' => '1-5',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '24/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            711 =>
                array (
                    'local' => 'Puebla (Mex)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/EkptxjDa-jsxeldjR.png',
                    'visitante' => 'Real Betis (Esp)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hvyaw5HG-lUcXmrQf.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs',
                    'date' => '30/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            712 =>
                array (
                    'local' => 'AC Milan',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/htYjIjFa-bDzxUgK1.png',
                    'visitante' => 'Benfica',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AZHdTBf5-APs5hkKG.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: International Champions Cup',
                    'date' => '29/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            713 =>
                array (
                    'local' => 'Hoffenheim F (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0G073zcM-hUrEBrXB.png',
                    'visitante' => 'Frankfurt F (Ger)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pEGuoxxS-KQ3AjsTj.png',
                    'score' => '3-2',
                    'competition' => 'MUNDIAL: Amistosos de Clubs Femeninos',
                    'date' => '30/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            714 =>
                array (
                    'local' => 'Arsenal F (Eng)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WbvWGBEG-KObIcgKK.png',
                    'visitante' => 'Bayern Múnich F (Ger)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GzHM82h5-YudTYrip.png',
                    'score' => '0-1',
                    'competition' => 'MUNDIAL: Amistosos de Clubs Femeninos',
                    'date' => '27/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            715 =>
                array (
                    'local' => 'Sand F (Ger)',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lOwkncWg-06KvUw1d.png',
                    'visitante' => 'Young Boys F (Sui)',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Yo3mQzhl-zmksvUZp.png',
                    'score' => '3-0',
                    'competition' => 'MUNDIAL: Amistosos de Clubs Femeninos',
                    'date' => '25/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            716 =>
                array (
                    'local' => 'México F',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QT9nmGAr-MucVv9Hf.png',
                    'visitante' => 'Jamaica F',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2R3oy4fM-2u0cRSbR.png',
                    'score' => '2-0',
                    'competition' => 'MUNDIAL: Juegos Panamericanos Femenino',
                    'date' => '27/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            717 =>
                array (
                    'local' => 'Paraguay F',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/085CMdg5-MiT4TR5J.png',
                    'visitante' => 'Colombia F',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/04s7uChl-6i34eJY7.png',
                    'score' => '0-0',
                    'competition' => 'MUNDIAL: Juegos Panamericanos Femenino',
                    'date' => '24/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            718 =>
                array (
                    'local' => 'Diriangen',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IsQcY3Ea-EX251rmM.png',
                    'visitante' => 'Ocotal',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rRfnyBYA-Aooqf0ud.png',
                    'score' => '0-0',
                    'competition' => 'NICARAGUA: Liga Primera - Apertura - Jornada 1',
                    'date' => '30/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            719 =>
                array (
                    'local' => 'Esteli',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KYUvApxS-MVXblrlQ.png',
                    'visitante' => 'Real Madriz',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YRHyf6HG-h4mydMAq.png',
                    'score' => '1-1',
                    'competition' => 'NICARAGUA: Liga Primera - Apertura - Jornada 1',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            720 =>
                array (
                    'local' => 'Jalapa',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8xYWI9dM-EX251rmM.png',
                    'visitante' => 'Ferretti',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xdEkYhZg-jDhNFiF4.png',
                    'score' => '0-1',
                    'competition' => 'NICARAGUA: Liga Primera - Apertura - Jornada 1',
                    'date' => '26/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            721 =>
                array (
                    'local' => 'Tromsdalen',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Y5sRHacM-pMQnflYM.png',
                    'visitante' => 'Strømmen',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zLlNakCr-fqYOah4o.png',
                    'score' => '0-2',
                    'competition' => 'NORUEGA: OBOS-ligaen - Jornada 15',
                    'date' => '24/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            722 =>
                array (
                    'local' => 'Aalesund',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/IJrLVeZA-4dl9tBPj.png',
                    'visitante' => 'Nest-Sotra',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/plJGFwdM-d2ZV9IL5.png',
                    'score' => '2-0',
                    'competition' => 'NORUEGA: OBOS-ligaen - Jornada 15',
                    'date' => '24/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            723 =>
                array (
                    'local' => 'Ham-Kam',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jcde7KFG-GQK0VqvP.png',
                    'visitante' => 'Sandefjord',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/EeabMpDa-f3bFukJT.png',
                    'score' => '1-0',
                    'competition' => 'NORUEGA: OBOS-ligaen - Jornada 15',
                    'date' => '25/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            724 =>
                array (
                    'local' => 'Jerv',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/88zynmil-CIVWWa8J.png',
                    'visitante' => 'Sogndal',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/4fiiiOzS-CEDhSJRF.png',
                    'score' => '1-1',
                    'competition' => 'NORUEGA: OBOS-ligaen - Jornada 15',
                    'date' => '26/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            725 =>
                array (
                    'local' => 'KFUM Oslo',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MX4Zzug5-buRK1HZL.png',
                    'visitante' => 'Raufoss',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xO3Qolh5-vk17sBlH.png',
                    'score' => '2-1',
                    'competition' => 'NORUEGA: OBOS-ligaen - Jornada 15',
                    'date' => '26/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            726 =>
                array (
                    'local' => 'Kongsvinger',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/0hHN7CYA-E7wKWgza.png',
                    'visitante' => 'Skeid',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/C8AEDbcM-8vhGADCQ.png',
                    'score' => '0-2',
                    'competition' => 'NORUEGA: OBOS-ligaen - Jornada 15',
                    'date' => '24/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            727 =>
                array (
                    'local' => 'Notodden',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/CQHbn1cM-4p6AJjM8.png',
                    'visitante' => 'Sandnes',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jR9d2gGG-d0GpUuc3.png',
                    'score' => '0-4',
                    'competition' => 'NORUEGA: OBOS-ligaen - Jornada 15',
                    'date' => '26/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            728 =>
                array (
                    'local' => 'Ull/Kisa',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8GNrusyS-6aLAdKmo.png',
                    'visitante' => 'Start',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/j35EsFDa-W4cSLH4q.png',
                    'score' => '0-2',
                    'competition' => 'NORUEGA: OBOS-ligaen - Jornada 15',
                    'date' => '30/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            729 =>
                array (
                    'local' => 'Olimpia',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OEyQgGEa-rPbahbw0.png',
                    'visitante' => 'River Plate',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/AcQ69qGG-0p9tomdo.png',
                    'score' => '2-1',
                    'competition' => 'PARAGUAY: Primera División - Clausura - Jornada 3',
                    'date' => '27/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            730 =>
                array (
                    'local' => 'Guaraní',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/80iLJsWg-Y17XVbDK.png',
                    'visitante' => 'Sp. Luqueño',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/6BPq9VdM-xd3hL2WB.png',
                    'score' => '1-3',
                    'competition' => 'PARAGUAY: Primera División - Clausura - Jornada 3',
                    'date' => '28/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            731 =>
                array (
                    'local' => 'Korona',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/x49GE6zB-4W2GFfCf.png',
                    'visitante' => 'Legia',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IwZu7MEa-fmx2YDXT.png',
                    'score' => '1-2',
                    'competition' => 'POLONIA: Ekstraklasa - Jornada 2',
                    'date' => '26/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            732 =>
                array (
                    'local' => 'Lechia',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Ey5lk3e5-b750pWw8.png',
                    'visitante' => 'Wisla',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ddQ6Z8wS-UZu9gWa2.png',
                    'score' => '0-0',
                    'competition' => 'POLONIA: Ekstraklasa - Jornada 2',
                    'date' => '28/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            733 =>
                array (
                    'local' => 'Slask',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bcCeeCCr-MBNlZnaS.png',
                    'visitante' => 'Piast',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/440nnhEa-hjKHUCzS.png',
                    'score' => '2-1',
                    'competition' => 'POLONIA: Ekstraklasa - Jornada 2',
                    'date' => '25/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            734 =>
                array (
                    'local' => 'Katowice',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Mo29kDXg-rqRy9QHu.png',
                    'visitante' => 'Pruszkow',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tAoyjEzS-Io78bXak.png',
                    'score' => '1-3',
                    'competition' => 'POLONIA: Division 2 - Jornada 1',
                    'date' => '25/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            735 =>
                array (
                    'local' => 'Elblag',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rZeGmdZg-6ZafdLOS.png',
                    'visitante' => 'Lech 2',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/pO0TSDBr-zcOKgKul.png',
                    'score' => '4-0',
                    'competition' => 'POLONIA: Division 2 - Jornada 1',
                    'date' => '27/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            736 =>
                array (
                    'local' => 'Casa Pia',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xdnK4myB-AR2WAT1a.png',
                    'visitante' => 'Vilafranquense',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0CZa1JxS-djBCLTH3.png',
                    'score' => '1-0(0-0)',
                    'competition' => 'PORTUGAL: Taça da Liga - Primera fase - Semifinales',
                    'date' => '30/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            737 =>
                array (
                    'local' => 'Leixoes',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/O4X4T8Wg-CQLKWvI8.png',
                    'visitante' => 'CD Cova da Piedade',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/I70uhndM-d6TlOeub.png',
                    'score' => '1-0(0-0)',
                    'competition' => 'PORTUGAL: Taça da Liga - Primera fase - Semifinales',
                    'date' => '24/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            738 =>
                array (
                    'local' => 'Oliveirense',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/d0xDuzFa-2eWj8bzp.png',
                    'visitante' => 'Mafra',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bgDNH4Ea-xYSqniSu.png',
                    'score' => '2-1',
                    'competition' => 'PORTUGAL: Taça da Liga - Primera fase - Semifinales',
                    'date' => '29/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            739 =>
                array (
                    'local' => 'Penafiel',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OxHRsTDa-Sveivxfl.png',
                    'visitante' => 'Academico Viseu',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SOcAaAdM-84VuT51k.png',
                    'score' => '1-0',
                    'competition' => 'PORTUGAL: Taça da Liga - Primera fase - Semifinales',
                    'date' => '26/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            740 =>
                array (
                    'local' => 'Covilha',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ERP6Wuhl-d29W5aN5.png',
                    'visitante' => 'Varzim',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8MOnrFYg-IFUpPyQi.png',
                    'score' => '1-0(0-0)',
                    'competition' => 'PORTUGAL: Taça da Liga - Primera fase - Semifinales',
                    'date' => '29/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            741 =>
                array (
                    'local' => 'Jablonec',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2XWlXVil-W2ptf0iE.png',
                    'visitante' => 'Slovacko',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/l8kSO0Ca-MuNUeh1k.png',
                    'score' => '6-0',
                    'competition' => 'REPÚBLICA CHECA: 1. Liga - Jornada 3',
                    'date' => '26/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            742 =>
                array (
                    'local' => 'Mlada Boleslav',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/raddYQYg-MqPVD7XT.png',
                    'visitante' => 'Opava',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ptvbnJyS-vLwnmmkq.png',
                    'score' => '4-1',
                    'competition' => 'REPÚBLICA CHECA: 1. Liga - Jornada 3',
                    'date' => '27/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            743 =>
                array (
                    'local' => 'Slavia Praga',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/vJ0yQjf5-jsEBEawr.png',
                    'visitante' => 'Sigma Olomouc',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SnkRvZil-8ErAVuD4.png',
                    'score' => '1-0',
                    'competition' => 'REPÚBLICA CHECA: 1. Liga - Jornada 3',
                    'date' => '27/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            744 =>
                array (
                    'local' => 'Zizkov',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/23FeecXg-xf8KIF82.png',
                    'visitante' => 'Sokolov',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ddutCidM-Gp7OHZN8.png',
                    'score' => '2-1',
                    'competition' => 'REPÚBLICA CHECA: FNL - Jornada 2',
                    'date' => '27/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            745 =>
                array (
                    'local' => 'Varnsdorf',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xnqvBIfM-WUAbrirl.png',
                    'visitante' => 'Trinec',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/O8rDflHG-KrHEMCve.png',
                    'score' => '2-2',
                    'competition' => 'REPÚBLICA CHECA: FNL - Jornada 2',
                    'date' => '30/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            746 =>
                array (
                    'local' => 'Vysehrad',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AXBODLXg-b77bxetJ.png',
                    'visitante' => 'Usti n. L.',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GMrv6pWg-ddC2bDqb.png',
                    'score' => '4-1',
                    'competition' => 'REPÚBLICA CHECA: FNL - Jornada 2',
                    'date' => '23/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            747 =>
                array (
                    'local' => 'Univ. Craiova',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/r5wfQT9r-0SBybEQf.png',
                    'visitante' => 'Chindia Targoviste',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vgHusaZA-tdv06ygt.png',
                    'score' => '1-0',
                    'competition' => 'RUMANÍA: Liga 1 - Jornada 3',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            748 =>
                array (
                    'local' => 'Viitorul Constanta',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/viSJ4qyS-nJIHxwPP.png',
                    'visitante' => 'FC Hermannstadt',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/p8lElnyS-bXzj14hj.png',
                    'score' => '3-2',
                    'competition' => 'RUMANÍA: Liga 1 - Jornada 3',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            749 =>
                array (
                    'local' => 'Orenburg',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SGQbHBAr-OElIeDr5.png',
                    'visitante' => 'Zenit SPb',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vwx9ckCa-6a5BpM1s.png',
                    'score' => '0-2',
                    'competition' => 'RUSIA: Premier League - Jornada 3',
                    'date' => '25/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            750 =>
                array (
                    'local' => 'Arsenal Tula',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6LihxQWg-nRAIBAta.png',
                    'visitante' => 'Rostov',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/j3v69SwS-hM45Xf08.png',
                    'score' => '2-3',
                    'competition' => 'RUSIA: Premier League - Jornada 3',
                    'date' => '27/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            751 =>
                array (
                    'local' => 'CSKA Moscú',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OhjmaZkl-xbblt7Ae.png',
                    'visitante' => 'Lokomotiv Moscú',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/4dVn6ugl-hQ4TiqhA.png',
                    'score' => '1-0',
                    'competition' => 'RUSIA: Premier League - Jornada 3',
                    'date' => '25/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            752 =>
                array (
                    'local' => 'Luch',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/x6kmSPzS-0lVSPdik.png',
                    'visitante' => 'Yaroslavl',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IFabsmYg-WbMUDdnf.png',
                    'score' => '2-1',
                    'competition' => 'RUSIA: FNL - Jornada 5',
                    'date' => '27/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            753 =>
                array (
                    'local' => 'SKA Khabarovsk',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6ehBz3f5-SWItBfWC.png',
                    'visitante' => 'F. Voronezh',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/IicwHeg5-YL9CYl39.png',
                    'score' => '1-0',
                    'competition' => 'RUSIA: FNL - Jornada 5',
                    'date' => '29/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            754 =>
                array (
                    'local' => 'Yenisey',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/21fg8uEa-Umo4hjjD.png',
                    'visitante' => 'Krasnodar 2',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/W82o7eCa-zuywICo4.png',
                    'score' => '0-1',
                    'competition' => 'RUSIA: FNL - Jornada 5',
                    'date' => '23/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            755 =>
                array (
                    'local' => 'Tom Tomsk',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/rssdm4Wg-ltKxCzH6.png',
                    'visitante' => 'Tekstilshtik',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/00hrksDr-6Bou8T9j.png',
                    'score' => '2-1',
                    'competition' => 'RUSIA: FNL - Jornada 5',
                    'date' => '26/07/2019',
                    'hour' => '20:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            756 =>
                array (
                    'local' => 'M. Saransk',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WAIU2Hh5-Uo69I79B.png',
                    'visitante' => 'FK Chayka',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ATfW0CCr-SOSy3oNS.png',
                    'score' => '0-0',
                    'competition' => 'RUSIA: FNL - Jornada 5',
                    'date' => '24/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            757 =>
                array (
                    'local' => 'Nizhny Novgorod',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dU6JGFBr-Ii0xjOW6.png',
                    'visitante' => 'Torpedo Moscú',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bg1rryhl-4YRRnODj.png',
                    'score' => '2-1',
                    'competition' => 'RUSIA: FNL - Jornada 5',
                    'date' => '25/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            758 =>
                array (
                    'local' => 'Baltika',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xAd6j3Da-SCWjDngP.png',
                    'visitante' => 'Chertanovo M.',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/reWngHxS-6B7wqJCc.png',
                    'score' => '1-2',
                    'competition' => 'RUSIA: FNL - Jornada 5',
                    'date' => '25/07/2019',
                    'hour' => '17:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            759 =>
                array (
                    'local' => 'Kursk',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6mhDztg5-WG9MaRts.png',
                    'visitante' => 'Neftekhimik',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/KdsmlqwS-EeD0EAdd.png',
                    'score' => '1-0',
                    'competition' => 'RUSIA: FNL - Jornada 5',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            760 =>
                array (
                    'local' => 'R. Volgograd',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/YNewEqhl-hvxDyMis.png',
                    'visitante' => 'Khimki',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0jVBI0il-ltKxCzH6.png',
                    'score' => '1-1',
                    'competition' => 'RUSIA: FNL - Jornada 5',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            761 =>
                array (
                    'local' => 'Ulyanovsk',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/p8rKGPjl-84qTGdXO.png',
                    'visitante' => 'Khimik Avgust',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xK9d96wS-IJhnxAm2.png',
                    'score' => '6-1',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            762 =>
                array (
                    'local' => 'Zenit Irkutsk',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/r9Rx7KdM-tru88L8h.png',
                    'visitante' => 'Chita',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2aBj1cCr-6NHpAEoJ.png',
                    'score' => '0-2(0-0)',
                    'competition' => 'RUSIA: Copa - 1/64 de final',
                    'date' => '29/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            763 =>
                array (
                    'local' => 'Ararat Moscow',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Ymhh5dEG-rPxy2vRj.png',
                    'visitante' => 'Kolomna',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xzR8Hnil-vXVynjXm.png',
                    'score' => '1-0',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '25/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            764 =>
                array (
                    'local' => 'Dolgoprudny',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/MsyFGOBr-Sn9suX6D.png',
                    'visitante' => 'Krasnogorsk',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/YR9piQcM-KE5W5aVc.png',
                    'score' => '0-4',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '28/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            765 =>
                array (
                    'local' => 'Dynamo Barnaul',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nXp9Nih5-ptFHsWRI.png',
                    'visitante' => 'FK Novosibirsk',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Y7WI3qCr-vHTF4Zw9.png',
                    'score' => '2-1(0-0)',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '24/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            766 =>
                array (
                    'local' => 'Chelyabinsk',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/z3jg1VYA-fVKKnHq8.png',
                    'visitante' => 'Tyumen',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ARHB4pXg-M3smXNCO.png',
                    'score' => '0-1(0-0)',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '23/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            767 =>
                array (
                    'local' => 'FC Zvezda Perm',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KGvn6cf5-2ssWJao7.png',
                    'visitante' => 'Zenit-Izhevsk',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0GYNZJFG-IJWqiw08.png',
                    'score' => '6-0',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '29/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            768 =>
                array (
                    'local' => 'Magnitogorsk',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nutSrNhl-bNk7TKta.png',
                    'visitante' => 'Nosta',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rDaObqDr-dtpIOD0C.png',
                    'score' => '1-3',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '25/07/2019',
                    'hour' => '19:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            769 =>
                array (
                    'local' => 'Delin Izhevsk',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QFWctFEa-8h5eq9KN.png',
                    'visitante' => 'Kamaz',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jHNOiMBr-8pRT5K9U.png',
                    'score' => '0-4',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            770 =>
                array (
                    'local' => 'Krasnyy SGAFKST',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WEn8jodM-lUwXIffj.png',
                    'visitante' => 'Zvezda St. Peterburg',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vLICFLEa-06pF651b.png',
                    'score' => '5-0',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '26/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            771 =>
                array (
                    'local' => 'Mashuk',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Sp5temyB-GOwGqFjq.png',
                    'visitante' => 'Inter Cherkessk',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/As3GDLHG-hpqWakMS.png',
                    'score' => '0-1',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '23/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            772 =>
                array (
                    'local' => 'Pskov',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xEolXvHG-f5LEHx9k.png',
                    'visitante' => 'Luki-Energiya',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/ENIspgFG-8Y0FRw8n.png',
                    'score' => '0-1',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '26/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            773 =>
                array (
                    'local' => 'Rodina Moscow',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lOAzsQfM-YwHhK1WK.png',
                    'visitante' => 'Veles Moscow',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/trGHFiwS-2kHr5uPK.png',
                    'score' => '0-2',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '26/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            774 =>
                array (
                    'local' => 'Ryazan',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/lf8Ykuf5-nefBYWY1.png',
                    'visitante' => 'Znamya Truda',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/CvxAVfwS-vHZ1C4Qn.png',
                    'score' => '3-0',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '23/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            775 =>
                array (
                    'local' => 'Salyut-Belgorod',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/biVH3kGG-8Q0AjBYb.png',
                    'visitante' => 'M. Lipetsk',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WjLNcSZA-Kltgpnsf.png',
                    'score' => '3-2',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '24/07/2019',
                    'hour' => '17:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            776 =>
                array (
                    'local' => 'Akron Tolyatti',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tbiBYgdM-IXoxQ9qD.png',
                    'visitante' => 'Saratov',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dt5SYOf5-xWw1rQB6.png',
                    'score' => '3-1',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '23/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            777 =>
                array (
                    'local' => 'Alania Vladikavkaz',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dCIsPTBr-WdwozkZi.png',
                    'visitante' => 'Anzhi',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/0GjrVrYg-zq7Lg5Nc.png',
                    'score' => '1-0',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '26/07/2019',
                    'hour' => '16:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            778 =>
                array (
                    'local' => 'Biolog',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jJv2aCDa-lpSvJhlP.png',
                    'visitante' => 'Kholding',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/b96Ql0wS-2iS3uCvO.png',
                    'score' => '3-1',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '24/07/2019',
                    'hour' => '16:00',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            779 =>
                array (
                    'local' => 'D. Bryansk',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SSmdSXEG-rRkbTyns.png',
                    'visitante' => 'Kaluga',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/tdDlDMil-488Q9lBB.png',
                    'score' => '0-1',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '29/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            780 =>
                array (
                    'local' => 'Electron VN',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/C44JF0Ca-f5a7wwqL.png',
                    'visitante' => 'Leningradets',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/fybqK9e5-SxYIRqIJ.png',
                    'score' => '0-1',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            781 =>
                array (
                    'local' => 'Vladimir',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/dtRajSYA-4nZfN5tR.png',
                    'visitante' => 'Murom',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vuw7dcEa-ObIv6L9E.png',
                    'score' => '0-1',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '29/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            782 =>
                array (
                    'local' => 'Volgar-Astrakhan',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bV39aeYg-WSgeTyBI.png',
                    'visitante' => 'Legion Dynamo',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Ya374HYg-x2OGmdeg.png',
                    'score' => '3-0',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '26/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            783 =>
                array (
                    'local' => 'Maykop',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/tKHWX0f5-OfdxrIsC.png',
                    'visitante' => 'Chornomorets',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vTUGHrxS-SOS4xbqG.png',
                    'score' => '0-1(0-0)',
                    'competition' => 'RUSIA: Copa - 1/128 de final',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            784 =>
                array (
                    'local' => 'Napredak',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/txliqHyS-0I6w63XE.png',
                    'visitante' => 'Vojvodina',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8GnmShXg-2ZOmSM7d.png',
                    'score' => '0-2',
                    'competition' => 'SERBIA: Super Liga - Jornada 2',
                    'date' => '23/07/2019',
                    'hour' => '17:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            785 =>
                array (
                    'local' => 'Young Lions',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/nJVOFtyB-nuvXJvY7.png',
                    'visitante' => 'Balestier Khalsa',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/026hcgYA-fBdzwkJI.png',
                    'score' => '1-0',
                    'competition' => 'SINGAPUR: Premier League',
                    'date' => '23/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            786 =>
                array (
                    'local' => 'Djurgarden',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WvY9pWzB-KzaQ78um.png',
                    'visitante' => 'Häcken',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/zmbB6GfM-MFgaAfjn.png',
                    'score' => '2-0',
                    'competition' => 'SUECIA: Allsvenskan - Jornada 17',
                    'date' => '26/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            787 =>
                array (
                    'local' => 'Östersunds',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/K44g7CDa-tve8fVd9.png',
                    'visitante' => 'Malmö',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/8O8M1JzS-KKKE2l0E.png',
                    'score' => '0-0',
                    'competition' => 'SUECIA: Allsvenskan - Jornada 17',
                    'date' => '25/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            788 =>
                array (
                    'local' => 'Göteborg',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WzUHAuCr-hMpgErXM.png',
                    'visitante' => 'Norrköping',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/dbojRyCr-tp0M8lQt.png',
                    'score' => '0-0',
                    'competition' => 'SUECIA: Allsvenskan - Jornada 17',
                    'date' => '29/07/2019',
                    'hour' => '19:30',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            789 =>
                array (
                    'local' => 'Västerås SK',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/EoKG3N9r-lz724ho8.png',
                    'visitante' => 'Dalkurd',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UTpcLOzB-2Vnlel8f.png',
                    'score' => '1-1',
                    'competition' => 'SUECIA: Superettan - Jornada 17',
                    'date' => '27/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            790 =>
                array (
                    'local' => 'Varbergs',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Ei9AiMHG-2qhVJn3o.png',
                    'visitante' => 'Orgryte',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GKupH1dM-tzHYMPGi.png',
                    'score' => '1-2',
                    'competition' => 'SUECIA: Superettan - Jornada 17',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            791 =>
                array (
                    'local' => 'Lugano',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/xvrILYCa-MofbbJoN.png',
                    'visitante' => 'Thun',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/A7C06hf5-IsZb3YW3.png',
                    'score' => '0-0',
                    'competition' => 'SUIZA: Super League - Jornada 2',
                    'date' => '30/07/2019',
                    'hour' => '20:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            792 =>
                array (
                    'local' => 'Luzern',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WbYaVJEa-2qhVJn3o.png',
                    'visitante' => 'Zúrich',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/v166ejgl-25PBFBLr.png',
                    'score' => '0-0',
                    'competition' => 'SUIZA: Super League - Jornada 2',
                    'date' => '30/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '31/07/2019',
                ),
            793 =>
                array (
                    'local' => 'Xamax',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/QDmBcVXg-803zseRm.png',
                    'visitante' => 'Young Boys',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GEt3dqh5-lY7NkF24.png',
                    'score' => '0-1',
                    'competition' => 'SUIZA: Super League - Jornada 2',
                    'date' => '25/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            794 =>
                array (
                    'local' => 'Vaduz',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OvIm7Ig5-pbnoY8mF.png',
                    'visitante' => 'Schaffhausen',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/GMmq8IwS-lfPiRlAU.png',
                    'score' => '2-0',
                    'competition' => 'SUIZA: Challenge League - Jornada 2',
                    'date' => '27/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            795 =>
                array (
                    'local' => 'Bangkok Utd',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Y1NdwVVg-YPkaAerp.png',
                    'visitante' => 'Nakhon Ratchasima',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/xUXLuGeM-0fAeGZJE.png',
                    'score' => '2-2',
                    'competition' => 'TAILANDIA: Thai League 1 - Jornada 20',
                    'date' => '27/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            796 =>
                array (
                    'local' => 'Chiangrai',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6akZ4HdM-EeHAJ4HK.png',
                    'visitante' => 'Chiangmai FC',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hxB21WEG-vXs19sKj.png',
                    'score' => '2-1',
                    'competition' => 'TAILANDIA: Thai League 1 - Jornada 20',
                    'date' => '29/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '30/07/2019',
                ),
            797 =>
                array (
                    'local' => 'Port MTI FC',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/OQS0nRBr-2c58WvZb.png',
                    'visitante' => 'Sukhothai',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/hb7sL7Cr-jTnh20lF.png',
                    'score' => '1-0',
                    'competition' => 'TAILANDIA: Thai League 1 - Jornada 20',
                    'date' => '24/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            798 =>
                array (
                    'local' => 'PTT Rayong',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/UTLtGcXg-bwzeIOf4.png',
                    'visitante' => 'Chainat',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/29z4TteM-AgsGdozf.png',
                    'score' => '1-2',
                    'competition' => 'TAILANDIA: Thai League 1 - Jornada 20',
                    'date' => '30/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '31/07/2019',
                ),
            799 =>
                array (
                    'local' => 'Taichung',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/ppT1TudM-0K94GRhR.png',
                    'visitante' => 'Taipower',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/nZOadZVg-vRbxTK4F.png',
                    'score' => '1-2',
                    'competition' => 'TAIWÁN: Premier League',
                    'date' => '25/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            800 =>
                array (
                    'local' => 'Taipei Tatung',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/jyyin1wS-G0JAniqF.png',
                    'visitante' => 'Ntupes',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SUa1MvDr-6uotHSJI.png',
                    'score' => '4-0',
                    'competition' => 'TAIWÁN: Premier League',
                    'date' => '23/07/2019',
                    'hour' => '17:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            801 =>
                array (
                    'local' => 'Hang Yuen',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6kIzQgxS-hfrzaav6.png',
                    'visitante' => 'Ming Chuan University',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/vFIMqbEa-IVnx04J7.png',
                    'score' => '4-2',
                    'competition' => 'TAIWÁN: Premier League',
                    'date' => '25/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            802 =>
                array (
                    'local' => 'Taicheng Lions',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bayhg7yS-6gjNuRE9.png',
                    'visitante' => 'Tainan City',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/jDW8RMzB-MNi17VE4.png',
                    'score' => '1-2',
                    'competition' => 'TAIWÁN: Premier League',
                    'date' => '27/07/2019',
                    'hour' => '18:00',
                    'stadium' => 1,
                    'end' => '28/07/2019',
                ),
            803 =>
                array (
                    'local' => 'Vorskla',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/WhyjiSdM-GdwbZgIN.png',
                    'visitante' => 'Zorya',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SEpGLyg5-YF00gpN0.png',
                    'score' => '0-1',
                    'competition' => 'UCRANIA: Premier League - Jornada 1',
                    'date' => '28/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            804 =>
                array (
                    'local' => 'Dinamo Kiev',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KG9zc9yB-GY2he6hl.png',
                    'visitante' => 'Shakhtar',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/x2qCsFCr-xr4ldnwr.png',
                    'score' => '2-1',
                    'competition' => 'UCRANIA: Supercopa - Final',
                    'date' => '28/07/2019',
                    'hour' => '16:30',
                    'stadium' => 2,
                    'end' => '29/07/2019',
                ),
            805 =>
                array (
                    'local' => 'Nacional',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/2oWy7BEG-M9nhV48M.png',
                    'visitante' => 'Progreso',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Ywxr8RFG-v3lmVcA0.png',
                    'score' => '4-2',
                    'competition' => 'URUGUAY: Primera División - Torneo Intermedio - Jornada 3',
                    'date' => '29/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            806 =>
                array (
                    'local' => 'Cerro CA',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/8MMCZtGG-C04Sr50s.png',
                    'visitante' => 'Racing Montevideo',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/v12aAjil-6FmvzVq7.png',
                    'score' => '1-2',
                    'competition' => 'URUGUAY: Primera División - Torneo Intermedio - Jornada 3',
                    'date' => '29/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '30/07/2019',
                ),
            807 =>
                array (
                    'local' => 'Fénix',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KKQwAiYA-QTuGp3Xa.png',
                    'visitante' => 'Wanderers',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/WCc1ByCa-ITFzYPmf.png',
                    'score' => '3-0',
                    'competition' => 'URUGUAY: Primera División - Torneo Intermedio - Jornada 3',
                    'date' => '26/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '27/07/2019',
                ),
            808 =>
                array (
                    'local' => 'Juventud',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6XyukXjl-Wvlp50Wp.png',
                    'visitante' => 'Boston River',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/lvnKywHG-QcDw1XjE.png',
                    'score' => '1-0',
                    'competition' => 'URUGUAY: Primera División - Torneo Intermedio - Jornada 3',
                    'date' => '24/07/2019',
                    'hour' => '18:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            809 =>
                array (
                    'local' => 'Cerro Largo',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/bmaSNUil-0xNMjEaB.png',
                    'visitante' => 'Liverpool M.',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/b5m6bjf5-YuvUDB4p.png',
                    'score' => '1-0',
                    'competition' => 'URUGUAY: Primera División - Torneo Intermedio - Jornada 3',
                    'date' => '24/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            810 =>
                array (
                    'local' => 'Atl. Venezuela',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/GMLNnwBr-C6mdfCL0.png',
                    'visitante' => 'Carabobo',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UV5XOiAr-8EYcSwHg.png',
                    'score' => '2-1',
                    'competition' => 'VENEZUELA: Primera División - Clausura - Jornada 1',
                    'date' => '24/07/2019',
                    'hour' => '20:30',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            811 =>
                array (
                    'local' => 'Estudiantes M.',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/AmhR6GWg-6qZxby6o.png',
                    'visitante' => 'Llaneros',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rX4XoGEa-pKZfPvGm.png',
                    'score' => '3-0',
                    'competition' => 'VENEZUELA: Primera División - Clausura - Jornada 1',
                    'date' => '24/07/2019',
                    'hour' => '18:30',
                    'stadium' => 1,
                    'end' => '25/07/2019',
                ),
            812 =>
                array (
                    'local' => 'Mineros',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Gd36ZMYA-zczrTE24.png',
                    'visitante' => 'AC Lala FC',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Wd06t0HG-hhgOy67O.png',
                    'score' => '1-0',
                    'competition' => 'VENEZUELA: Primera División - Clausura - Jornada 1',
                    'date' => '23/07/2019',
                    'hour' => '18:00',
                    'stadium' => 2,
                    'end' => '24/07/2019',
                ),
            813 =>
                array (
                    'local' => 'Puerto Cabello',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/KOAaYLwS-tChPwKDr.png',
                    'visitante' => 'Aragua',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/UNqPErWg-Mgt76bqD.png',
                    'score' => '1-2',
                    'competition' => 'VENEZUELA: Primera División - Clausura - Jornada 1',
                    'date' => '25/07/2019',
                    'hour' => '21:00',
                    'stadium' => 1,
                    'end' => '26/07/2019',
                ),
            814 =>
                array (
                    'local' => 'Trujillanos',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SpOlkHjl-A7nmBMUs.png',
                    'visitante' => 'Dep. Táchira',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/bcTCzcAr-4MFjxWYd.png',
                    'score' => '3-1',
                    'competition' => 'VENEZUELA: Primera División - Clausura - Jornada 1',
                    'date' => '26/07/2019',
                    'hour' => '19:00',
                    'stadium' => 1,
                    'end' => '27/07/2019',
                ),
            815 =>
                array (
                    'local' => 'Caracas',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/hIuNHZFG-zT0R3GJn.png',
                    'visitante' => 'Lara',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/Yy3vL2h5-6kS8Dndd.png',
                    'score' => '-',
                    'competition' => 'VENEZUELA: Primera División - Clausura - Jornada 1',
                    'date' => '24/07/2019',
                    'hour' => '21:00',
                    'stadium' => 2,
                    'end' => '25/07/2019',
                ),
            816 =>
                array (
                    'local' => 'Da Nang',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/I75Jl4yB-zorbm6Z9.png',
                    'visitante' => 'Sai Gon FC',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/2wA6F6fM-OEvUUzg1.png',
                    'score' => '4-1',
                    'competition' => 'VIETNAM: V.League 1 - Jornada 18',
                    'date' => '25/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '26/07/2019',
                ),
            817 =>
                array (
                    'local' => 'Nam Dinh',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/6oSz1BdM-OMCPl5Gg.png',
                    'visitante' => 'Song Lam Nghe An',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/SjfvgTDa-WIvAp4JS.png',
                    'score' => '2-0',
                    'competition' => 'VIETNAM: V.League 1 - Jornada 18',
                    'date' => '23/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
            818 =>
                array (
                    'local' => 'Thanh Hoa',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/SOm1XQAr-fg7sKWVs.png',
                    'visitante' => 'Gia Lai',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/x00zIWh5-Eys2nQlG.png',
                    'score' => '2-3',
                    'competition' => 'VIETNAM: V.League 1 - Jornada 18',
                    'date' => '28/07/2019',
                    'hour' => '20:30',
                    'stadium' => 1,
                    'end' => '29/07/2019',
                ),
            819 =>
                array (
                    'local' => 'Khanh Hoa',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Iq1yUPYg-CIPuursj.png',
                    'visitante' => 'Than Quang Ninh',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/r9F67bWg-Emw0Hm17.png',
                    'score' => '1-1',
                    'competition' => 'VIETNAM: V.League 1 - Jornada 18',
                    'date' => '27/07/2019',
                    'hour' => '16:00',
                    'stadium' => 2,
                    'end' => '28/07/2019',
                ),
            820 =>
                array (
                    'local' => 'The Cong',
                    'localimg' => 'https://www.mismarcadores.com//res/image/data/Wtyg90FG-dMJ82JsG.png',
                    'visitante' => 'BHTS Quang Nam',
                    'visitanteimg' => 'https://www.mismarcadores.com//res/image/data/rRUbQjFa-4v76sZsc.png',
                    'score' => '1-1',
                    'competition' => 'VIETNAM: V.League 1 - Jornada 18',
                    'date' => '23/07/2019',
                    'hour' => '19:30',
                    'stadium' => 1,
                    'end' => '24/07/2019',
                ),
        );
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
        foreach($partidos as $partido){
            $key = array_search($partido['competition'], array_column($competitions,'nombre'));
            $keyteamlocal = array_search($partido['local'],array_column($equipos,'equipo'));
            $keyteamvisitante = array_search($partido['visitante'],array_column($equipos,'equipo'));
            DB::table('matches')->insert([
                'date' => $partido['date'],
                'competition_id' => $key+1,
                'time' => $partido['hour'],
                'local' => $keyteamlocal+1,
                'visit' => $keyteamvisitante+1,
                'result' => $partido['score'],
            ]);
        }
    }
}
