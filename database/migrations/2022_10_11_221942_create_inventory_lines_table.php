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
        Schema::create('inventory_lines', function (Blueprint $table) {
            $table->unsignedBigInteger('inventory_id');
            $table->foreign('inventory_id')->references('id')->on('inventories');
            $table->id('inventoryline_id');
            $table->string('item_barcode', 13);
            $table->string('item_name');
            $table->string('item_size');
            $table->integer('inventoryline_quantity');
            $table->integer('inventoryline_restockvalue');
            $table->integer('inventoryline_outofstock');
            $table->date('inventoryline_expirydate');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory_lines');
    }
};
