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
        Schema::create('bill_product', function (Blueprint $table) {
            $table->unsignedBigInteger('bill_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('table_id');
            $table->integer('price');
            $table->integer('qty');
            $table->foreign('bill_id')->references('id')->on('bills')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('table_id')->references('id')->on('reservetables')->onDelete('cascade');

            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_product');
    }
};
