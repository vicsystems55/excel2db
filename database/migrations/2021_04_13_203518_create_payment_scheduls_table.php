<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentSchedulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_scheduls', function (Blueprint $table) {
            $table->id();
            $table->string('ippis_no');
            $table->string('month');
            $table->string('amount');
            $table->string('amount_remitted');
            $table->string('total_remitted');
            $table->string('total_left');
            $table->string('carryovers');
            $table->string('status');

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
        Schema::dropIfExists('payment_scheduls');
    }
}
