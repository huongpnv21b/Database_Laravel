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
            $table->id()->unsigned();
            $table->string('name',100);

            $table->foreignId('id_type')->references('id')->on('type_products');
            $table->string('description');
            $table->float('unit_price');
            $table->float('promotion_price');
            $table->string('image',255);
            $table->string('unit',255);
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
