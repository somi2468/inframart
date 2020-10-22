<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectimageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectimage', function (Blueprint $table) {
            $table->bigIncrements('ProjectImageID');
            $table->integer('ProjectID');
            $table->foreign('ProjectID')->references('project')->on('ProjectID');
            $table->string('ProjectImage')->default('0');
            $table->string('ProjectImagePath')->default('0');
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
        Schema::dropIfExists('projectimage');
    }
}
