<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->integer('user_id');
            $table->integer('degree_id');
            $table->integer('subject_id');
            $table->string('institute');
            $table->string('year');
            $table->string('docs');
            $table->string('field');
=======
            $table->integer('user_id')->nullable();
            $table->integer('degree_id')->nullable();
            $table->integer('subject_id')->nullable();
            $table->string('institute_id')->nullable();
            $table->string('year')->nullable();
            $table->string('docs')->nullable();
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
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
        Schema::dropIfExists('educations');
    }
}
