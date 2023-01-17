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
            'mainbg' => 'slides/1673931385img.jpg',
            'mainbgheading' => 'Ne rater pas les soldes!',
            'mainbgdescription' => 'Vivez la différence avec Click Antilles',
            'h1' => 'Click Local',
            'button_text' => 'Obtenez le vôtre maintenant',
            'timer' => 'Jan 5, 2024 15:37:25',
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
            'heading_1' => 'Ventes Flash d\'hiver',
            'heading_2' => 'Blink Outdoor, seulement 64,99',
            'heading_3' => 'Offres Star',
            'heading_4' => 'Preservation de la biodiversity',
            'link_1' => '#',
            'link_2' => '#',
            'link_3' => '#',
            'link_4' => '#',
            'link_5' => '#',
            'link_6' => '#',
            'link_7' => '#',
            'link_8' => '#',
        ]);
    }
}
