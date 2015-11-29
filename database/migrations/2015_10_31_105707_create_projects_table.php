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

            $table->string('tasks_cost');
            $table->string('expenses_cost');
            $table->string('total_cost');
            $table->string('commission_rate');
            $table->string('commission');
            $table->string('total_cost_w_commission');

            $table->string('margin_rate');
            $table->string('income_tax'); //IRPF
            $table->string('gross_utility');
            $table->string('income_tax_deduction');
            $table->string('net_utility');
            $table->string('tax_base');

            $table->string('vat'); //IVA
            $table->string('vat_deduction');
            $table->string('budget');

            $table->integer('associates');

            $table->string('public_tasks_cost');
            $table->string('public_expenses_cost');

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
