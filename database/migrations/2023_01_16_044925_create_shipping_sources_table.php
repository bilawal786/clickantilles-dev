<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_sources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('deliver_from');
            $table->string('deliver_to');
            $table->string('source');
            $table->string('price');
            $table->string('volume');
            $table->string('time_required');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('shipping_sources');
    }
}
