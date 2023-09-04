<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('BookNumber');
            $table->string('bTitle');
            $table->string('wName');
            $table->string('bCategory');
            $table->string('bPublications');
            $table->string('bPublishDate');
            $table->string('bLanguage');
            $table->string('isbn');
            $table->string('bPrice');
            $table->string('image');
            $table->string('pdf');
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
        Schema::dropIfExists('books');
    }
}
