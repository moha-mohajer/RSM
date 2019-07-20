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
            $table->bigInteger('uid');
            $table->bigInteger('tid');
            $table->bigInteger('fr');
            $table->bigInteger('fs')->nullable();
            $table->bigInteger('orderID')->nullable();
            $table->timestamp('sdate');
            $table->timestamp('edate');
            $table->timestamp('fdate')->nullable();
            $table->bigInteger('JP');
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
