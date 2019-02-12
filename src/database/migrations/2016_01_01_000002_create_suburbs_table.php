<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuburbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suburbs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->char('postcode', 10)->index();
            $table->string('suburb', 150)->index();
            $table->string('state', 3);
            $table->string('lat', 20);
            $table->string('lon', 20);

            // create relationship between suburbs and states
            $table->foreign('state')->references('code')->on('states')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('suburbs');
    }
}
