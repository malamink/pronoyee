<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowers', function (Blueprint $table) {
            $table->id();
            $table->string('BorrowedName');
            $table->string('BorrowedType');
            $table->string('CardNumber')->nullable();
            $table->string('BookName');
            $table->string('BorrowedFromDate');
            $table->string('BorrowedToDate');
            $table->string('ActualReturnDate');
            $table->string('IssuedBy');
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
        Schema::dropIfExists('borrowers');
    }
}
