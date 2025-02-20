<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSallesAndUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salles_and_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('laste_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role_id');
            $table->foreign('role_id')->references('id')->on('_rolles');
            $table->timestamps();
        });
        Schema::create('salles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->float('height');
            $table->float('width');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('salles');
    }
}
