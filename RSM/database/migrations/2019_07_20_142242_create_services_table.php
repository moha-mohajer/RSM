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
            $table->integer('uid');
            $table->integer('tid');
            $table->integer('fr');
            $table->integer('fs')->nullable();
            $table->integer('orderID')->nullable();
            $table->timestamp('sdate');
            $table->timestamp('edate');
            $table->timestamp('fdate')->nullable();
            $table->integer('JP');
            $table->string('notes')->nullable();
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
