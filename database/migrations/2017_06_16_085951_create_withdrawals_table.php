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
      $table->increments('id');
      $table->string('username');
      $table->integer('balance');
      $table->string('frombank');
      $table->integer('fromaccountnumber');
      $table->string('fromaccountname');
      $table->datetime('datetime');
      $table->string('channel');
      $table->integer('tel');
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
