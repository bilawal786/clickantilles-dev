<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('order_number');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('postal_code');
            $table->string('notes')->nullable();
            $table->string('total');

            $table->string('shipping_cost')->nullable();
            $table->string('invoice')->nullable();
            $table->string('discount')->nullable();
            $table->string('ip')->nullable();

            $table->longText('products');
            $table->longText('country');
            $table->longText('color')->nullable();
            $table->integer('status')->default('0');
            $table->integer('admin_status')->default('0');
            $table->string('payment_method')->default('0');
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
        Schema::dropIfExists('orders');
    }
}
