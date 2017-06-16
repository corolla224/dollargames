<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('withdrawal', function(Blueprint $table) {
      $table->integer('id');
      $table->string('username');
      $table->string('balance');
      $table->string('frombank');
      $table->string('fromaccountnumber');
      $table->string('fromaccountname');
      $table->string('withdrawal_datetime');
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
        Schema::dropIfExists('withdrawal');
    }
}
