<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
			$table->foreign('order_id')->references('id')->on('orders');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->decimal('unit_price', 18, 2);
            $table->text('description');
            $table->string('size', 50);
            $table->string('color', 50);
            $table->string('material_type', 50);
            $table->text('notes');
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
        Schema::dropIfExists('order_details');
    }
}
