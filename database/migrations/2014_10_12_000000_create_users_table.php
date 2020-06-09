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
            $table->string('phone')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('full_name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('nic_no')->unique()->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('job')->nullable();
            $table->string('address')->nullable();
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

         Schema::create('permisions', function (Blueprint $table){
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('http_method')->nullable();
            $table->text('http_path')->nullable();
            $table->timestamps();

         });
        
        Schema::create('role_user', function (Blueprint $table) {
            $table->integer('role_id');
            $table->integer('user_id');
            $table->index(['role_id', 'user_id']);
            $table->timestamps();
        });

        Schema::create('role_permission', function (Blueprint $table) {
            $table->integer('role_id');
            $table->integer('permission_id');
            $table->index(['role_id', 'permission_id']);
            $table->timestamps();
        });

        Schema::create('user_permission', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('permission_id');
            $table->index(['user_id', 'permission_id']);
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
        Schema::dropIfExists('users_table');
        Schema::dropIfExists(config('roles_table'));
        Schema::dropIfExists(config('permissions_table'));
        Schema::dropIfExists(config('user_permission_table'));
        Schema::dropIfExists(config('role_user_table'));
        Schema::dropIfExists(config('role_permission_table'));
       
    }
}
