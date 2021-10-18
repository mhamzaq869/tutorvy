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
            $table->string('account_id')->nullable();
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
            $table->string('region')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('type')->nullable();
            $table->string('cnic_security')->nullable();
            $table->string('language')->nullable();
            $table->string('lang_short')->nullable();
            $table->text('bio')->nullable();
            $table->text('reject_note')->nullable();
            $table->string('student_level')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->integer('experty_level')->nullable();
            $table->integer('std_subj')->nullable();
            $table->integer('std_learn')->nullable();
            $table->string('provider')->default('direct');
            $table->integer('role')->nullable()->comment('1-admin 2-tutor 3-student 4-staff');
            $table->integer('status')->default(0)->comment('0-documents_not_submitted , 1-document_submitted, 2-verfied/enabled, 3-disbaled, 4-verification_rejected, 5-Assessment_submitted');
            $table->integer('rating')->default(0);
            $table->integer('rank')->default(0)->comment('0-New Tutor,1-Verified,2-Emerging Tutor,3-Top Rank');
            $table->text('token')->nullable();
            $table->timestamp('token_updated_at')->nullable();
            $table->integer('is_token_updated')->nullable();
            $table->integer('profile_completed')->default(0)->comment('0-not-general profile not completed,1-general profile completed');
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
