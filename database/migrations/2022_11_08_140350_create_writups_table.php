<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writups', function (Blueprint $table) {
            $table->id();
            $table->string('WritupTitle');
            $table->string('WriterName');
            $table->string('WritupCat');
            $table->date('WritupPublished');
            $table->string('image');
            $table->text('WritupContent');
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
        Schema::dropIfExists('writups');
    }
}
