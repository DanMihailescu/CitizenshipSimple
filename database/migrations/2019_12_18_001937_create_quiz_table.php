<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('question');
			$table->string('answerone');
			$table->string('answertwo');
			$table->string('answerthree');
			$table->string('answerfour');
			$table->string('correctanswer');	
			$table->integer('chapter');
			$table->integer('section');
			$table->integer('qtype');
			$table->integer('difficulty');
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
        Schema::dropIfExists('quiz');
    }
}
