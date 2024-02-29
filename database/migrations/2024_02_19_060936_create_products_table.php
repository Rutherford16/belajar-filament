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
        Schema::create('products', function (Blueprint $table) {
            $table->string('product_code', 15);
            $table->string('product_name', 70);
            $table->string('product_line', 50);
            $table->string('product_scale', 10);
            $table->string('product_vendor', 50);
            $table->text('product_description');
            $table->smallInteger('quantity_in_stock');
            $table->decimal('buy_price');
            $table->decimal('MSRP');
            $table->timestamps();
            $table->primary('product_code');
            $table->foreign('product_line')->references('product_line')->on('product_lines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
