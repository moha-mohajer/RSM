<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id'); //Invoice Id number
            $table->timestamps(); //Invoice timestamps
            $table->integer('customer_id')->nullable(); //Customer Id number(owner)
            $table->integer('service_id')->nullable(); //Service ID number 
            // IID Should review(maybe have more than one order)
            $table->integer('item_id')->nullable(); //Item ID number
            $table->decimal('tax',9,2)->nullable(); //Vat
            $table->decimal('total',9,2)->nullable(); //Total amont
            $table->decimal('dicount',9,2)->nullable(); //Discount
            $table->decimal('pay',9,2)->nullable(); //Payable price
            $table->mediumText('note')->nullable(); //Extre note
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
