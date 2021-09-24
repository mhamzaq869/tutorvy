<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_permissions', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id')->nullable();
            $table->string('menu_title')->nullable();
            $table->integer('permission')->default('0')->nullable()->comment("0-noaccess, 1-access");
            $table->integer('create')->default('0')->nullable()->comment("0-noaccess, 1-access");
            $table->integer('read')->default('0')->nullable()->comment("0-noaccess, 1-access");
            $table->integer('update')->default('0')->nullable()->comment("0-noaccess, 1-access");
            $table->integer('delete')->default('0')->nullable()->comment("0-noaccess, 1-access");
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('roles_permissions');
    }
}
