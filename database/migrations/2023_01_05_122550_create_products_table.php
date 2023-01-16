<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->foreign('subcategory_id')->references('id')->on('sub_categories')->onDelete('cascade');

            $table->string('title');
            $table->string('slug');
            $table->bigInteger('price');
            $table->bigInteger('oldprice')->nullable();
            $table->bigInteger('stock');
            $table->string('sku');
            $table->string('photo1');
            $table->string('photo2')->nullable();
            $table->string('discount')->nullable();
            $table->string('video')->nullable();
            $table->string('unit')->nullable();
            $table->string('volume')->nullable();
            $table->string('material')->nullable();
            $table->longText('gallery')->nullable();
            $table->longText('colorimages')->nullable();
            $table->string('status')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->longText('size')->nullable();
            $table->longText('color')->nullable();
            $table->longText('quantity')->nullable();
            $table->longText('state')->nullable();

            $table->string('product_section')->nullable();
            $table->string('pro_category')->nullable();
            $table->bigInteger('click_concept')->nullable();
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
        Schema::dropIfExists('products');
    }
}
