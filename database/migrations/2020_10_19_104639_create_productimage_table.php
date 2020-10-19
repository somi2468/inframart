<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductimageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productimage', function (Blueprint $table) {
            $table->bigIncrements('ProductImageID');
            $table->integer('ProductID');
             $table->foreign('ProductID')->references('product')->on('ProductID');
            $table->String('ProductImage');
            $table->String('ProductImageType');
            $table->String('ProductImageDesc')->default('0');
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
        Schema::dropIfExists('productimage');
    }
}
