<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassRoomLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_room_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('class_room_id')->nullable();
            $table->string('tutor_join_time')->nullable();
            $table->string('student_join_time')->nullable();
            $table->string('class_end_time')->nullable();
            $table->integer('class_ended_by')->nullable();
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
        Schema::dropIfExists('class_room_logs');
    }
}
