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
        Schema::create('ticketsProductList', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('address');
            $table->unsignedBigInteger('ticketId');
            $table->foreign('ticketId')->references('id')->on('tickets');
            $table->unsignedBigInteger('productId');
            $table->foreign('productId')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
