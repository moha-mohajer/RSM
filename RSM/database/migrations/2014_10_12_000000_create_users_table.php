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
            $table->string('surname')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_name')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('phone_number')->nullable();
            $table->timestamp('phone_number_verified_at')->nullable();
            $table->string('language')->nullable();
            $table->timestamp('date_of_birth')->nullable();
            $table->string('access_level')->nullable();
            $table->mediumText('address')->nullable();
            $table->String('photo')->nullable();
            $table->String('note')->nullable();
            $table->string('status')->nullable();
            $table->biginteger('user_id')->nullable();
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
