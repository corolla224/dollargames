<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('deposit', function(Blueprint $table) {
            $table->integer('id');
            $table->string('username');
            $table->string('balance');
            $table->string('frombank');
            $table->string('fromaccountnumber');
            $table->string('fromaccontname');
            $table->string('deposit_datetime');
            $table->string('tobank');
            $table->string('toaccountnumber');
            $table->string('toaccountname');
            $table->string('channel');
            $table->string('tel');
            $table->string('opinion');
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
        Schema::drop('deposit');
    }
}
