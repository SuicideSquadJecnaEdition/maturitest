<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('subject_id');
            $table->string('name')->nullable(false);
            $table->timestamp('created_at', 0)->useCurrent();
            $table->timestamp('updated_at', 0)->useCurrent();
        });


        Schema::create('questions', function (Blueprint $table) {
            $table->increments('question_id');
            $table->string('name')->nullable(false);
            $table->unsignedInteger('fk_question_subject');
            $table->timestamp('created_at', 0)->useCurrent();
            $table->timestamp('updated_at', 0)->useCurrent();

            $table->foreign('fk_question_subject')
                ->references('subject_id')
                ->on('subjects')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });


        Schema::create('question_tests', function (Blueprint $table) {
            $table->increments('question_test_id');
            $table->string('question')->nullable(false);
            $table->string('answer')->nullable(false);
            $table->unsignedInteger('fk_questiontest_question');
            $table->timestamp('created_at', 0)->useCurrent();
            $table->timestamp('updated_at', 0)->useCurrent();

            $table->foreign('fk_questiontest_question')
                ->references('question_id')
                ->on('questions')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::create('question_blocks', function (Blueprint $table) {
            $table->increments('question_block_id');
            $table->string('header')->nullable(false);
            $table->string('text')->nullable(false);
            $table->unsignedInteger('fk_questionblock_question');
            $table->timestamp('created_at', 0)->useCurrent();
            $table->timestamp('updated_at', 0)->useCurrent();

            $table->foreign('fk_questionblock_question')
                ->references('question_id')
                ->on('questions');
        });

        Schema::create('question_block_imgs', function (Blueprint $table) {
            $table->increments('question_block_img_id');
            $table->unsignedInteger('fk_questionblockimg_questionblock');
            $table->timestamp('created_at', 0)->useCurrent();
            $table->timestamp('updated_at', 0)->useCurrent();

            $table->foreign('fk_questionblockimg_questionblock')
                ->references('question_block_id')
                ->on('question_blocks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('questions');
        Schema::dropIfExists('question_tests');
        Schema::dropIfExists('question_blocks');
        Schema::dropIfExists('question_block_imgs');
    }
};
