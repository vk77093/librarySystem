<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReturnBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('issue_books_id')->default('0');
            $table->integer('book_id');
            $table->integer('student_id');
            $table->integer('stu_name');
            $table->integer('publisher_id');
            $table->integer('roll_number');
            $table->integer('return_date');
            $table->timestamps();

            $table->foreign('issue_books_id')->reference('id')->on('issue_books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('return_books');
        $table->dropForeign(['issue_books_id']);
    }
}
