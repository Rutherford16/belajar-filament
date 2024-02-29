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
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('customer_number');
            $table->string('customer_name', 50);
            $table->string('contact_last_name', 50);
            $table->string('contact_first_name', 50);
            $table->string('phone', 50);
            $table->string('address', 50);
            $table->string('city', 50);
            $table->string('state', 50)->nullable();
            $table->string('postal_code', 50)->nullable();
            $table->string('country', 50);
            $table->integer('sales_rep_employee_number')->nullable();
            $table->decimal('credit_limit', 10, 2)->nullable();
            $table->primary('customer_number');
            $table->foreign('sales_rep_employee_number')->references('employee_number')->on('employees');
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
        Schema::dropIfExists('customers');
    }
};
