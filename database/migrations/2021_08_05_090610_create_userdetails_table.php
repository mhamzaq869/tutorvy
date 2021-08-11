<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdetails', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique();
            $table->string('ip')->nullable();
            $table->string('degree')->nullable();
            $table->string('major')->nullable();
            $table->string('institute')->nullable();
            $table->string('year')->nullable();
            $table->string('designation')->nullable();
            $table->string('organization')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('teach')->nullable();
            $table->string('student_level')->nullable();
            $table->string('availability')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->string('docs')->nullable();
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
        Schema::dropIfExists('userdetails');
    }
}
