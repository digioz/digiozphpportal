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
            $table->increments('id');
            $table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
            $table->string('invoice_number', 20);
            $table->dateTime('order_date');
            $table->string('first_name', 50);
            $table->string('middle_name', 50);
            $table->string('last_name', 50);
            $table->string('shipping_address', 70);
            $table->string('shipping_address2', 70);
            $table->string('shipping_city', 40);
            $table->string('shipping_state', 40);
            $table->string('shipping_zip', 30);
            $table->string('shipping_country', 50);
            $table->string('billing_address', 70);
            $table->string('billing_address2', 70);
            $table->string('billing_city', 40);
            $table->string('billing_state', 40);
            $table->string('billing_zip', 30);
            $table->string('billing_country', 50);
            $table->string('phone', 30);
            $table->string('email', 255);
            $table->decimal('total', 18, 2);
            $table->string('cc_number', 100);
            $table->string('cc_expiration', 10);
            $table->string('cc_card_code', 10);
            $table->decimal('cc_amount', 18, 2);
            $table->text('trx_description');
            $table->boolean('trx_approved');
            $table->string('trx_authorization_code', 100);
            $table->text('trx_message');
            $table->string('trx_response_code', 10);
            $table->string('trx_id', 50);
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
