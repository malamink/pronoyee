<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writers', function (Blueprint $table) {
            $table->id();
            $table->string('wNameBn');
            $table->string('wNameEn');
            $table->string('CountryName');
            $table->string('StateName');
            $table->string('CityName')->nullable();
            $table->string('BirthPlace');
            $table->string('Language'); 
            $table->string('wTperiod');
            $table->string('wDbirth')->nullable();
            $table->string('image')->nullable();
            $table->text('wBiography');
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
        Schema::dropIfExists('writers');
    }
}
