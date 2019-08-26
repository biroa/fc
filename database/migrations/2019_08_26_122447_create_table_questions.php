<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableQuestions extends Migration
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
            $table->unsignedBigInteger('survey_id');
            $table->unsignedBigInteger('answer_type_id');
            $table->unsignedBigInteger('answer_type_meta_data_id');
            $table->string('question')->index();
            $table->text('description');
            $table->boolean('is_required');
            $table->boolean('is_answered');
            $table->boolean('is_multiple_answer');
            $table->string('input_name')->unique();
            $table->string('input_id')->unique();
            $table->string('input_placeholder');
            $table->string('input_label_value');
            $table->timestamps();
    
            $table->foreign('survey_id')->references('id')->on('surveys');
            $table->foreign('answer_type_id')->references('id')->on('answer_types');
            $table->foreign('answer_type_meta_data_id')->references('id')->on('answer_type_meta_datas');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
