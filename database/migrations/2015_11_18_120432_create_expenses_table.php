<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned()->index();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('restrict')->onUpdate('cascade');

            //stored values (historical)
            $table->string('name');
            $table->string('description',1020);
            $table->float('price');
            $table->integer('units',false,true);
            $table->float('margin_rate');
            $table->float('margin');
            $table->float('cost');
            $table->string('currency');

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
        Schema::drop('expenses');
    }
}
