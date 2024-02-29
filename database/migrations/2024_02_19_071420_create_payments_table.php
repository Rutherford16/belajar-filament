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
        Schema::create('payments', function (Blueprint $table) {
            $table->integer('customer_number');
            $table->string('check_number', 50);
            $table->date('payment_date');
            $table->decimal('amount', 10, 2);
            $table->primary(['customer_number', 'check_number']);
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
        Schema::dropIfExists('payments');
    }
};
