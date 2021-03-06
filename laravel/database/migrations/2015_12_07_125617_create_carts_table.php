<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $this->down();
        Schema::create('tbl_cart', function(Blueprint $table){
            $table->integer('id');
            $table->integer('user_id', false, true);
            $table->foreign('user_id')->references('id')->on('tbl_users');
            $table->integer('product_id', false, true);
            $table->foreign('product_id')->references('product_id')->on('tbl_products');
            $table->integer('amount', false);
            $table->dateTime('paid');
            $table->string('status', 255);
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
        Schema::dropIfExists('tbl_cart');

    }
}
