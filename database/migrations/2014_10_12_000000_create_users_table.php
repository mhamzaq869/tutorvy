<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('picture')->nullable();
            $table->string('ip')->nullable();
            $table->string('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('country_short')->nullable();
            $table->string('type')->nullable();
            $table->string('cnic_security')->nullable();
            $table->string('language')->nullable();
            $table->string('lang_short')->nullable();
            $table->text('bio')->nullable();
            $table->text('reject_note')->nullable();
            $table->string('student_level')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->string('provider')->default('direct');
            $table->integer('role')->nullable()->comment('1-admin 2-tutor 3-student 4-staff');
            $table->integer('status')->default(0)->comment('1-Active 0-Default 2-Reject' );
            $table->integer('verify')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
