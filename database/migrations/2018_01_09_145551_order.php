<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order', function (Blueprint $table) {
         $table->increments('id');
            $table->integer('idbill');
            $table->integer('idsp');
            $table->string('name');
            $table->integer('qty');
            $table->integer('price');
            $table->nullableTimestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('Order');
    }
}
