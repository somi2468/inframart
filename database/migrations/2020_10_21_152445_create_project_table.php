<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->bigIncrements('ProjectID');
            $table->string('ProjectName');
            $table->string('ProjectHead');
            $table->string('ProjectDescription');
            $table->string('ProjectIcon')->default('0');
            $table->string('ProjectIconPath')->default('0');
            $table->string('ProjectMainImage')->default('0');
            $table->string('ProjectMainImagePath')->default('0');
            $table->tinyInteger('ProjectStatus')->default('1');
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
        Schema::dropIfExists('project');
    }
}
