<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_category_id');
            $table->string('name', 100);
            $table->string('make', 50);
            $table->string('model', 50);
            $table->string('sku', 50);
            $table->text('image');
            $table->decimal('price', 18, 2);
            $table->decimal('cost', 18, 2);
            $table->integer('quantity_per_unit');
            $table->string('weight', 50);
            $table->string('dimensions', 50);
            $table->string('sizes', 50);
            $table->string('colors', 50);
            $table->string('material_type', 50);
            $table->string('part_number', 50);
            $table->text('short_description');
            $table->text('description');
            $table->text('manufacturer_url');
            $table->integer('units_in_stock');
            $table->boolean('out_of_stock');
            $table->text('notes');
            $table->boolean('visible')->default(0);
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
        Schema::dropIfExists('products');
    }
}
