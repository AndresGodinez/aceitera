<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grounds', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('palm_farmer_id')->unsigned();
            $table->foreign('palm_farmer_id')->references('id')->on('palm_farmers');

            $table->bigInteger('location');
            $table->bigInteger('municipality_id');
            $table->bigInteger('state_id');
            $table->string('latitude');
            $table->string('longitude');
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
        Schema::dropIfExists('grounds');
    }
}
