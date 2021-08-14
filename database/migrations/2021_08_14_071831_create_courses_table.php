<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title')->nullable();
            $table->integer('subject_id')->nullable();
            $table->text('about')->nullable();
            $table->string('video')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('basic_home_work')->nullable();
            $table->string('basic_quiz')->nullable();
            $table->string('basic_one_one')->nullable();
            $table->string('basic_duration')->nullable();
            $table->string('basic_days')->nullable();
            $table->string('basic_time')->nullable();
            $table->string('standard_one_one')->nullable();
            $table->string('standard_duration')->nullable();
            $table->string('standard_days')->nullable();
            $table->string('standard_time')->nullable();
            $table->string('advance_home_work')->nullable();
            $table->string('advance_quiz')->nullable();
            $table->string('advance_final')->nullable();
            $table->string('advance_duration')->nullable();
            $table->string('advance_days')->nullable();
            $table->string('advance_time')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
