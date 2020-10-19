<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('ProductID');
            $table->String('ProductName');
            $table->String('ProductHeading');
            $table->String('ProductDesc');
            $table->tinyInteger('Status');
            $table->String('ProductType');
            $table->foreign('ProductType')->references('producttype')->on('ProductTypeID');
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
        Schema::dropIfExists('product');
    }
}
