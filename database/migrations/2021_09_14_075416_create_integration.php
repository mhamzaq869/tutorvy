<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntegration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integration', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name',200)->nullable();
            $table->text('key')->nullable();
            $table->integer('key_type')->comment('1 for live , 2 for sandbox')->nullable();
            $table->integer('status')->comment('0 for disactive, 1 for active')->nullable();
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
        Schema::dropIfExists('integration');
    }
}
