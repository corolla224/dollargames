<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatementwithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('statementwithdraw', function(Blueprint $table) {
            $table->integer('id');
            $table->string('username');
            $table->string('balance');
            $table->string('datetime');
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
        Schema::dropIfExists('statementwithdraw');
    }
}
