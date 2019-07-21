<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id'); //Item id number
            $table->timestamps(); 
            $table->integer('obid'); //Order or buy ID number
            $table->decimal('price',9,3); //Item buying price 
            $table->string('sn')->nullable(); //Item serial number
            $table->integer('supid')->nullable(); //Suplier ID number
            $table->decimal('cpr',9,3); //Retail Price
            $table->dateTime('cc')->nullable(); //Customer Confermation timestamps 
            $table->dateTime('cancled')->nullable(); //Customer cancelation timestamps
            $table->dateTime('ordered')->nullable(); //Item Order timestamps
            $table->dateTime('arrived')->nullable(); //Item Arivall timestamps
            $table->dateTime('sold')->nullable(); //Item sale timestamps
            $table->dateTime('stored')->nullable(); //Item Stored timestamps
            $table->integer('uid'); //Editor UserId
            $table->mediumText('note')->nullable(); //Extra note
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
