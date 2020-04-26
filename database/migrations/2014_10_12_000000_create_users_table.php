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
            $table->increments('id');
            $table->string('userId')->nullable();
            $table->string('userFirstName');
            $table->string('userLastName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('userPhone');
            $table->string('userType');
            $table->string('userAuthorized')->nullable();
            $table->string('userAccept')->nullable();
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
