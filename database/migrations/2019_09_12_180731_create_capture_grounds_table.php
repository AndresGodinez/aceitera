<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaptureGroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capture_grounds', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('ground_id')->unsigned();
            $table->foreign('ground_id')->references('id')->on('grounds');

            $table->float('tons');

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
        Schema::dropIfExists('capture_grounds');
    }
}
