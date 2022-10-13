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
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('id')->on('employees');
            
            $table->unsignedBigInteger('sup_id');
            $table->foreign('sup_id')->references('id')->on('suppliers');
            
            $table->string('item_name');
            $table->integer('purchase_quantity');
            $table->integer('purchase_cost');
            $table->string('date_today');
            $table->string('purchase_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_orders');
    }
};
