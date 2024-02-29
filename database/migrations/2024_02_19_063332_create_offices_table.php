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
        Schema::create('offices', function (Blueprint $table) {
            $table->string('office_code', 10);
            $table->string('city', 50);
            $table->string('phone', 50);
            $table->string('address', 50);
            $table->string('state', 50)->nullable();
            $table->string('country', 50);
            $table->string('postal_code', 50);
            $table->string('territory', 50);
            $table->primary('office_code');
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
        Schema::dropIfExists('offices');
    }
};
