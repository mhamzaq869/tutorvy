<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->integer('sender_id')->nullable();
            $table->integer('receiver_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('read_at')->nullable();
            $table->string('noti_type')->nullable();
            $table->string('noti_data')->nullable();
            $table->string('noti_title')->nullable();
            $table->string('noti_desc')->nullable();
            $table->string('noti_icon')->nullable();
            $table->string('btn_class')->nullable();
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
        Schema::dropIfExists('notifications');
    }
}
