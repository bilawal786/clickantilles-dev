<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('website_slides')->insert([
            'mainbg' => 'frontend/assets/images/01.png',
            'mainbgheading' => 'Le cadeau qu ils sont souhaiter est ici',
            'mainbgdescription' => 'L écran incurvé a un niveau de courbure équivalent à celui d un cercle, suit mieux la forme arrondie des yeux',
            'slide1' => 'frontend/assets/slides/1.jpg',
            'slide2' => 'frontend/assets/slides/2.jpg',
            'slide3' => 'frontend/assets/slides/3.jpg',
            'slide4' => 'frontend/assets/slides/4.jpg',
            'slide5' => 'frontend/assets/slides/5.jpg',
            'image1' => 'frontend/assets/images/02.png',
            'image2' => 'frontend/assets/images/03.png',
            'image3' => 'frontend/assets/images/04.png',
            'image4' => 'frontend/assets/images/05.png',
            'image5' => 'frontend/assets/images/06.png',
            'image6' => 'frontend/assets/images/07.png',
            'image7' => 'frontend/assets/images/08.png',
            'image8' => 'frontend/assets/images/09.png',
        ]);
    }
}
