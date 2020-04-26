<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('StockCodes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('stockCodeExpiryDate');
            $table->integer('stockCodeValue');
            $table->boolean('taken');
            $table->integer('accountId');
            $table->integer('stockEventsId');
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
        Schema::dropIfExists('StockCodes');
    }
}
