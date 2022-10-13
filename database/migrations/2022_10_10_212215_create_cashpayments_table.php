<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashpayments', function (Blueprint $table) {
            
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('sales_orders');
            
            $table->id("cashpayment_id");
            $table->double('cashpayment_amount');
            $table->string('date_today');
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
        Schema::dropIfExists('cashpayments');
    }
};
