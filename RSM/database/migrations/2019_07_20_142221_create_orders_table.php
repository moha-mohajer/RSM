<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cid')->nullable();
            $table->integer('did')->nullable();
            $table->string('description');
            $table->string('Color')->nullable();
            $table->string('PN')->nullable();
            $table->string('UnitMeasurment')->nullable();
            $table->integer('quantity');
            $table->bigInteger('uid');
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
        Schema::dropIfExists('orders');
    }
}
