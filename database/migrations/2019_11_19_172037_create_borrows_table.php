<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->increments('issueId');
            $table->dateTime('issueDate')->nullable(false);
            $table->dateTime('dueDate')->nullable(false);
            $table->boolean('returned')->default(0);
            $table->unsignedInteger('bookId')->nullable(false);
            $table->unsignedInteger('userId')->nullable(false);
            $table->foreign('bookId')->references('id')->on('books');
            $table->foreign('userId')->references('Id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrows');
    }
}
