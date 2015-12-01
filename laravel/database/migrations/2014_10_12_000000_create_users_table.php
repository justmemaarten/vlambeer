<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 255)->unique();
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('insertion', 255);
            $table->string('phone_nr', 255);
            $table->date('birthdate');
            $table->boolean('isadmin');
            $table->boolean('hasnewsletter');
            $table->string('city', 255);
            $table->string('street', 255);
            $table->string('house_nr', 255);
            $table->string('postalcode', 255);
            $table->string('city2', 255);
            $table->string('street2', 255);
            $table->string('postalcode2', 255);
            $table->string('email')->unique();
            $table->string('password', 255);

            $table->rememberToken();
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
        Schema::drop('tbl_users');
    }
}
