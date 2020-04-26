<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('StockEvents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stockEventName');
            $table->string('stockEventDescription');
            $table->integer('stockWorth');
            $table->boolean('stockAchieved');
            $table->boolean('stockEventActive');
            $table->string('courseId');
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
        Schema::dropIfExists('StockEvents');
    }
}
