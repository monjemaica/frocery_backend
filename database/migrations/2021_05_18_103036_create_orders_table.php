<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('spplr_id')->unsigned()->nullable();
            $table->bigInteger('shipAddrs_id')->unsigned();
            $table->bigInteger('pay_id')->unsigned();
            $table->string('paymentMethod');
            $table->string('itemsPrice');
            $table->string('shippingPrice');
            $table->string('taxPrice');
            $table->string('totalPrice');
            $table->boolean('isPaid');
            $table->longText('paidAt');
            $table->boolean('isDelivered');
            $table->longText('deliveredAt');
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
