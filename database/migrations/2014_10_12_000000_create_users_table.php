<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile');
            $table->string('date_of_birth');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('photo');
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('salary_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('salary_id')->references('id')->on('salaries');
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
