<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->integer('user_id');
            $table->string('designation');
            $table->string('organization');
            $table->string('start_date');
            $table->string('end_date');
=======
            $table->integer('user_id')->nullable();
            $table->string('designation')->nullable();
            $table->string('organization')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
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
        Schema::dropIfExists('professionals');
    }
}
