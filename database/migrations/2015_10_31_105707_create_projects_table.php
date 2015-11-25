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

            //has many:
            //associated tasks (input)
            //associated expenses (input)
            //associated wages (calculated)

            //has one (or many):
            //budget/s
            //report/s

            //stored values (historical)
            $table->string('client');
            $table->string('currency');

            $table->float('tasks_cost');
            $table->float('expenses_cost');
            $table->float('total_cost');
            $table->float('commission_rate');
            $table->float('commmission');
            $table->float('total_cost_w_commission');

            $table->float('margin_rate');
            $table->float('income_tax'); //IRPF
            $table->float('gross_utility');
            $table->float('income_tax_deduction');
            $table->float('net_utility');
            $table->float('tax_base');

            $table->float('vat'); //IVA
            $table->float('vat_deduction');
            $table->float('budget');

            $table->integer('associates');

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
