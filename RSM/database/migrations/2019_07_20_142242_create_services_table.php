<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('customer_id')->nullable();
            $table->integer('ticket_id')->nullable();
            $table->string('first_recognition')->nullable();
            $table->string('final_solution')->nullable();
            $table->integer('order_id')->nullable();
            $table->dateTime('start_at')->nullable();
            $table->dateTime('expecting_finish_at')->nullable();
            $table->dateTime('finish_at')->nullable();
            $table->integer('fee')->nullable();
            $table->string('note')->nullable();
            $table->biginteger('user_id')->nullable();
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
        Schema::dropIfExists('services');
    }
}
