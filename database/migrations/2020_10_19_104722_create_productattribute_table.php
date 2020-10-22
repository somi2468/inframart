<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductattributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productattribute', function (Blueprint $table) {
            $table->bigIncrements('ProductAttributesID');
            $table->integer('ProductID');
             $table->foreign('ProductID')->references('product')->on('ProductID');
             $table->String('ProductAttributesName');
             $table->String('ProductAttributesDesc');
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
        Schema::dropIfExists('productattribute');
    }
}
