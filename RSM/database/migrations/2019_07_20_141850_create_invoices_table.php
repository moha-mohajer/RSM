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
            $table->bigIncrements('cid'); //Customer Id number(owner)
            $table->bigIncrements('sid'); //Service ID number 
            // IID Should review(maybe have more than one order)
            $table->bigIncrements('iid'); //Item ID number
            $table->decimal('tax',9,3)->nullable(); //Vat
            $table->decimal('total',9,3); //Total amont
            $table->decimal('dicount',9,3)->nullable(); //Discount
            $table->decimal('pay',9,3); //Payable price
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
