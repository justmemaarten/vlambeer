<?php

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
        $this->down();
        Schema::create('tbl_products', function(Blueprint $table){
            $table->increments('product_id');
            $table->string('name', 255);
            $table->decimal('price', 5, 2);
            $table->text('img');
            $table->text('description');
            $table->integer('stock', false);
            $table->integer('category_id', false, true);
            $table->foreign('category_id')->references('category_id')->on('tbl_categories');
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
        Schema::dropIfExists('tbl_products');
    }
}
