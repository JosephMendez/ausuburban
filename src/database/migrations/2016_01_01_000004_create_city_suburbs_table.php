<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitySuburbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_suburbs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id')->unsigned();
            $table->char('postcode', 10)->index();

            // create relationship with country table
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('postcode')->references('postcode')->on('suburbs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('city_suburbs');
    }
}
