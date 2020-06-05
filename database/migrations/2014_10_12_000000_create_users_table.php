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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->default('0752667987');
            $table->string('mobile')->default('0750467380');
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('full_name')->default('kaviththa');;
            $table->string('avatar')->nullable();
            $table->string('NIC')->unique()->default('967232513V');
            $table->date('date_of_birth')->default('1996.08.10');
            $table->string('job')->default('develper');
            $table->string('address')->default('jaffna');
            $table->timestamp('approved_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
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
