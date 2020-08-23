<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizeProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('size_product', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')
                ->on('products')->onDelete('cascade');

            $table->integer('size_id')->unsigned()->nullable();
            $table->foreign('size_id')->references('id')
                ->on('size')->onDelete('cascade');
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
        Schema::dropIfExists('size_product');
    }
}
