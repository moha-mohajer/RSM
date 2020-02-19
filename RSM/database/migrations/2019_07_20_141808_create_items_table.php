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
            $table->integer('order_id')->nullable(); //Order or buy ID number
            $table->decimal('price',9,2)->nullable(); //Item buying price
            $table->string('serial_number')->nullable(); //Item serial number
            $table->integer('supplier_id')->nullable(); //Suplier ID number
            $table->integer('internet_link')->nullable(); //internet link
            $table->decimal('customer_price',9,2)->nullable(); //Retail Price
            $table->decimal('vat',9,2)->nullable(); //vat Price
            $table->dateTime('customer_confirmation')->nullable(); //Customer Confermation timestamps
            $table->dateTime('cancled')->nullable(); //Customer cancelation timestamps
            $table->dateTime('orderd')->nullable(); //Item Order timestamps
            $table->dateTime('arrived')->nullable(); //Item Arivall timestamps
            $table->dateTime('sold')->nullable(); //Item sale timestamps
            $table->dateTime('stored')->nullable(); //Item Stored timestamps
            $table->integer('user_id')->nullable(); //Editor UserId
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
