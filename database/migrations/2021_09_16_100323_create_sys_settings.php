<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->double('commission')->nullable();
            $table->double('clearence_days')->nullable();
            $table->integer('mini_withdraw_amount')->nullable();
            $table->integer('comm_tutor_withdraw')->nullable();
            $table->string("logo")->nullable();
            $table->string("favicon")->nullable();
            $table->string("title")->nullable();
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
        Schema::dropIfExists('sys_settings');
    }
}
