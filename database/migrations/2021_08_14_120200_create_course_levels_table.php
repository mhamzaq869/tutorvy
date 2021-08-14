<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_levels', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id');
            $table->integer('level')->comment('1-basic,2-standard,3-advance');
            $table->boolean('home_work');
            $table->boolean('quiz');
            $table->boolean('final_test');
            $table->boolean('one_to_one');
            $table->boolean('note');
            $table->string('duration')->comment('course duration');
            $table->string('days');
            $table->string('time');
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
        Schema::dropIfExists('course_levels');
    }
}
