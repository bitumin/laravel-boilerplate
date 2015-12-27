<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function(Blueprint $table) {
            $table->increments('id');

            $table->decimal('lat',9,7);
            $table->decimal('lng',9,7);
            $table->string('formatted_address');
            $table->string('street_number');
            $table->string('route');
            $table->string('locality');
            $table->string('administrative_area_level_2'); //Provincia
            $table->string('administrative_area_level_1'); //Comunidad autónoma
            $table->string('country');
            $table->string('postal_code');

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
        Schema::drop('locations');
    }
}
