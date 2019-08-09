<?php

use Illuminate\Database\Seeder;

class PlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///////////////
        //  Barça Players
        ///////////////


        DB::table('players')->insert([
            'img_avatar' => 'https://www.viber.com/app/uploads/Get-to-know-fcbarcelona-players-viber-blog-messi.png',
            'team_id' => 1,
            'user_id' => 1

            //'facebook_url => '',
            //'instagram_url => '',
            //'twitter_url => '',

        ]);

        DB::table('players')->insert([
            'img_avatar' => 'https://www.transfermarkt.at/images/portrait/originals/65230-1453896822.jpg?lm=1453896799',
            'team_id' => 1,
            'user_id' => 2

            //'facebook_url => '',
            //'instagram_url => '',
            //'twitter_url => '',

        ]);


        ///////////////
        //  Madrid Players
        ///////////////


        $instagram_widgets = [
            'B0TvBnGiyAz',
            'B0JveVFCHdu',
            'B0GgFskCF1A',
        ];

        $facebook_widgets = [
            'SergioRamosOficial%2Fvideos%2F2254782924634761',
            'SergioRamosOficial%2Fvideos%2F1196561207180502',
            'SergioRamosOficial%2Fvideos%2F1340012406163002',
        ];

        $serialize_insta = serialize($instagram_widgets);
        $serialize_face = serialize($facebook_widgets);


        DB::table('players')->insert([
            'img_avatar' => 'https://sortitoutsi.net/uploads/face/7458272.png',
            'team_id' => 2,
            'user_id' => 3,
            'instagram_url' => $serialize_insta,
            'facebook_url' => $serialize_face,
            'twitter_url' => 'SergioRamos'



        ]);

        DB::table('players')->insert([
            'img_avatar' => 'http://as00.epimg.net/img/comunes/fotos/fichas/deportistas/k/kro/large/17636.png',
            'team_id' => 2,
            'user_id' => 4

            //'facebook_url => '',
            //'instagram_url => '',
            //'twitter_url => '',

        ]);
    }
}
