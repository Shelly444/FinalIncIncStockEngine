<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('StockPurchases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stockPurchasesName');
            $table->string('stockPurchasesDescription');
            $table->integer('stockCost');
            $table->string('courseId');
            $table->boolean('purchased');
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
        Schema::dropIfExists('StockPurchases');
    }
}
