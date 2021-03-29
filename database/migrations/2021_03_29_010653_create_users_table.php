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
            $table->bigIncrements('id')->comment('user ID');
            $table->string('email',100)->default('')->comment('email');
            $table->integer('email_verified_at')->default(0)->comment('email verification time');
            $table->string('password',60)->default('')->comment('password');
            $table->rememberToken()->comment('remember token,random alpha-numeric string');
            $table->string('mobile_number', 50)->unique('users_mobile_unique')->comment('mobile number');
            $table->tinyInteger('role')->default(0)->comment('0:customer 1:admin');
            $table->integer('created_at')->default(0)->comment('create time');
            $table->integer('updated_at')->default(0)->comment('update time');
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
