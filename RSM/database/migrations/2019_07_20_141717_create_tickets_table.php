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
            $table->integer('customer_id')->nullable();//customerid
            $table->integer('device_id')->nullable();
            $table->string('description')->nullable();
            $table->string('security_type')->nullable();
            $table->string('security_code')->nullable();
            $table->string('Belonging')->nullable();
            $table->integer('ticket_tag')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
            $table->dateTime('job_done_at')->nullable();
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
