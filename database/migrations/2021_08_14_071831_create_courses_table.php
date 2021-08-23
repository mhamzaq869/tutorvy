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
            $table->string('basic_final')->nullable();
            $table->string('basic_one_one')->nullable();
            $table->string('basic_note')->nullable();
            $table->string('basic_duration')->nullable();
            $table->string('basic_days')->nullable();
            $table->string('basic_start_time')->nullable();
            $table->string('basic_end_time')->nullable();
            $table->string('basic_price')->nullable();
            $table->string('standard_home_work')->nullable();
            $table->string('standard_quiz')->nullable();
            $table->string('standard_one_one')->nullable();
            $table->string('standard_final')->nullable();
            $table->string('standard_note')->nullable();
            $table->string('standard_duration')->nullable();
            $table->string('standard_days')->nullable();
            $table->string('standard_start_time')->nullable();
            $table->string('standard_end_time')->nullable();
            $table->string('standard_price')->nullable();
            $table->string('advance_home_work')->nullable();
            $table->string('advance_quiz')->nullable();
            $table->string('advance_one_one')->nullable();
            $table->string('advance_final')->nullable();
            $table->string('advance_note')->nullable();
            $table->string('advance_duration')->nullable();
            $table->string('advance_days')->nullable();
            $table->string('advance_start_time')->nullable();
            $table->string('advance_end_time')->nullable();
            $table->string('advance_price')->nullable();
            $table->string('status')->comment('0-pending,1-approved,2-rejected,3-enabled,4-disabled')->default(0);
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
