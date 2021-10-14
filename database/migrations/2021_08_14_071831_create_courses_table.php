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
            $table->string('start_date')->nullable();
            $table->integer('seats')->nullable();
            $table->string('video')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('basic_home_work')->nullable();
            $table->string('basic_quiz')->nullable();
            $table->string('basic_final')->nullable();
            $table->string('basic_one_one')->nullable();
            $table->string('basic_note')->nullable();
            $table->string('basic_duration')->nullable();
            $table->string('basic_days')->nullable();

            $table->string('basic_class_title')->nullable();
            $table->string('basic_class_overview')->nullable();
            $table->string('basic_class_start_time')->nullable();
            $table->string('basic_class_end_time')->nullable();

            $table->string('basic_price')->nullable();
            $table->string('standard_home_work')->nullable();
            $table->string('standard_quiz')->nullable();
            $table->string('standard_one_one')->nullable();
            $table->string('standard_final')->nullable();
            $table->string('standard_note')->nullable();
            $table->string('standard_duration')->nullable();
            $table->string('standard_days')->nullable();

            $table->string('standard_class_title')->nullable();
            $table->string('standard_class_overview')->nullable();
            $table->string('standard_class_start_time')->nullable();
            $table->string('standard_class_end_time')->nullable();

            $table->string('standard_price')->nullable();
            $table->string('advance_home_work')->nullable();
            $table->string('advance_quiz')->nullable();
            $table->string('advance_one_one')->nullable();
            $table->string('advance_final')->nullable();
            $table->string('advance_note')->nullable();
            $table->string('advance_duration')->nullable();
            $table->string('advance_days')->nullable();

            $table->string('advance_class_title')->nullable();
            $table->string('advance_class_overview')->nullable();
            $table->string('advance_class_start_time')->nullable();
            $table->string('advance_class_end_time')->nullable();

            $table->string('advance_price')->nullable();
            $table->string('status')->comment('0-disabled,1-enabled&approved,2-rejected	')->default(0);
            $table->text('reject_note')->nullable();
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
