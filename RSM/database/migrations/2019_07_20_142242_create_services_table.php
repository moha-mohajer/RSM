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
            $table->integer('uid')->nullable();
            $table->integer('tid')->nullable();
            $table->integer('fr')->nullable();
            $table->integer('fs')->nullable();
            $table->integer('orderID')->nullable();
            $table->dateTime('sdate')->nullable();
            $table->dateTime('edate')->nullable();
            $table->dateTime('fdate')->nullable();
            $table->integer('jp')->nullable();
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
