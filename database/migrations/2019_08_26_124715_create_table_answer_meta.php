<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnswerMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_meta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('question_id');
            $table->string('meta_data')->nullable();
            $table->string('is_default')->comment('default value in case of a select-box');
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
        Schema::dropIfExists('answer_meta');
    }
}
