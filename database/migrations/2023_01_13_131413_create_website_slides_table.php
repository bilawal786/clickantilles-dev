<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_slides', function (Blueprint $table) {
            $table->id();
            $table->string('mainbg');
            $table->string('mainbgheading');
            $table->longText('mainbgdescription');
            $table->string('slide1');
            $table->string('slide2');
            $table->string('slide3');
            $table->string('slide4');
            $table->string('slide5');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5');
            $table->string('image6');
            $table->string('image7');
            $table->string('image8');
            $table->string('heading_1');
            $table->string('heading_2');
            $table->string('heading_3');
            $table->string('heading_4');
            $table->string('link_1');
            $table->string('link_2');
            $table->string('link_3');
            $table->string('link_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_slides');
    }
}
