<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('booked_tutor')->nullable();
            $table->integer('subject_id')->nullable();
            $table->string('topic')->nullable();
            $table->string('question')->nullable();
            $table->text('brief')->nullable();
            $table->string('attachments')->nullable();
            $table->string('class_date')->nullable();
            $table->string('class_time')->nullable();
            $table->string('duration')->nullable()->comment('lesson duration');
            $table->string('location')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
