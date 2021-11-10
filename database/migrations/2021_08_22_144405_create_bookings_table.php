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
            $table->integer('duration')->nullable();
            $table->integer('status')->nullable()->comment('1-Pending , 2-Payment Pending , 3-Approved , 4-Cancelled by tutor , 5-Cancelled by student , 6-Delivered');
            $table->text('cancel_note')->nullable();
            $table->text('student_review')->nullable();
            $table->string('rating')->default('0')->nullable();
            $table->integer('is_reviewed')->default('0')->nullable();
            $table->text('reschedule_note')->nullable();
            $table->double('price', 15, 2);
            $table->double('service_fee', 15, 2);
            $table->string('class_booked_till')->nullable();
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
