<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatementdepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('statementdeposit', function(Blueprint $table) {
        $table->increments('id');
        $table->string('username');
        $table->integer('balance');
        $table->datetime('datetime');
        $table->string('opinion');
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
        Schema::drop('statementdeposit');
    }
}
