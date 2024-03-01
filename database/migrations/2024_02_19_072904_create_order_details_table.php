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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->integer('order_number');
            $table->string('product_code', 15);
            $table->integer('quantity_ordered');
            $table->decimal('price_each', 10, 2);
            $table->smallInteger('order_line_number');
            // $table->primary('order_number');
            $table->foreign('order_number')->references('order_number')->on('orders');
            // $table->foreign('product_code')->references('product_code')->on('products')->nullable()->constrained();
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
        Schema::dropIfExists('order_details');
    }
};
