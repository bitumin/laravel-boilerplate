<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function(Blueprint $table) {
            $table->increments('id');

            //has many
            //associated tasks (input)
            //associated expenses (input)
            //associated wages (calculated)

            //has one (or has many)
            //budget
            //report

            //1:1 - inputs
            $table->integer('currency_id')->unsigned()->index();
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('project_source_id')->unsigned()->index();
            $table->foreign('project_source_id')->references('id')->on('project_sources')->onDelete('restrict')->onUpdate('cascade');

            //stored/calculated values
            $table->float('tasks_cost');
            $table->float('expenses_cost');
            $table->float('total_cost');
            $table->float('commission_rate');
            $table->float('commission');
            $table->float('margin_rate');
            $table->float('margin');
            $table->float('tax_base');
            $table->float('irpf_plus');
            $table->float('irpf_minus');
            $table->float('taxes');
            $table->integer('n_associates');

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
        Schema::drop('projects');
    }
}
