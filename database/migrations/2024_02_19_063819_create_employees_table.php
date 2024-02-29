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
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('employee_number');
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->string('extension', 10);
            $table->string('email', 100);
            $table->string('office_code', 10);
            $table->integer('report_to')->nullable();
            $table->string('job_title', 50);
            $table->primary('employee_number');
            $table->foreign('report_to')->references('employee_number')->on('employees');
            $table->foreign('office_code')->references('office_code')->on('offices');
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
        Schema::dropIfExists('employees');
    }
};
