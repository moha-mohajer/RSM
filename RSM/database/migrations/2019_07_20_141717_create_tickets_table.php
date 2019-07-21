<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');//ticketid
            $table->integer('cid')->nullable();//customerid
            $table->integer('did')->nullable();
            $table->string('description')->nullable();
            $table->string('sop')->nullable();
            $table->string('sc')->nullable();
            $table->string('Belonging')->nullable();
            $table->integer('st')->nullable();
            $table->integer('uid')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
            $table->dateTime('datedone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
