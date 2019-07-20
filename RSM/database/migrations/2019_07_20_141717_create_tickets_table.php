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
            $table->string('description');
            $table->string('sop')->nullable();
            $table->string('sc')->nullable();
            $table->string('Belonging')->nullable();
            $table->string('si')->nullable();
            $table->integer('st');
            $table->integer('uid');
            $table->string('notes')->nullable();
            $table->timestamps();
            $table->timestamp('datedone')->nullable();
            
           


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
