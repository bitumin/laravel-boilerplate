<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function(Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->integer('client_type_id')->unsigned()->index();
            $table->foreign('client_type_id')->references('id')->on('client_types')->onDelete('restrict')->onUpdate('cascade');

            $table->string('contact_name');
            $table->string('email');
            $table->string('telephone');
            $table->string('fax');
            $table->text('notes');

            //address (raw)
            $table->string('raw_address',510);

            //address (formatted)
            $table->decimal('lat',9,7);
            $table->decimal('lng',9,7);
            $table->string('formatted_address',510);
            $table->integer('street_number',false,true);
            $table->string('route');
            $table->string('locality');
            $table->string('administrative_area_level_2');              //Provincia (es)
            $table->string('administrative_area_level_1');              //Comunidad autónoma (es)
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
        Schema::drop('clients');
    }
}
