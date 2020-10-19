<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductimagetypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productimagetype', function (Blueprint $table) {
            $table->bigIncrements('ProductImageTypeID');
            $table->String('BannerImage');
            $table->String('SubBannerImage');
            $table->String('MainImage');
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
        Schema::dropIfExists('productimagetype');
    }
}
