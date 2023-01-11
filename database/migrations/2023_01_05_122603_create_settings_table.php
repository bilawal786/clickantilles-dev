<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('sitename');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->longText('footer');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter')->nullable();
            $table->longText('about')->nullable();
            $table->longText('terms')->nullable();
            $table->longText('privacy')->nullable();
            $table->longText('return')->nullable();
            $table->longText('help')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
