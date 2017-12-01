<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateChtietspTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietsp', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_theloai');
            $table->string('ten', 51);
            $table->string('image', 101);
            $table->text('mota');
            $table->integer('gia');
            $table->primary('id');
            $table->foreign('id_theloai')->references('id')->on('Categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('chitietsp');
    }
}
