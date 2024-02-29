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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('order_number');
            $table->date('order_date');
            $table->date('required_date');
            $table->date('shipped_date')->nullable();
            $table->string('status', 15);
            $table->text('comments')->nullable();
            $table->integer('customer_number');
            $table->primary('order_number');
            $table->foreign('customer_number')->references('customer_number')->on('customers');
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
        Schema::dropIfExists('orders');
    }
};
