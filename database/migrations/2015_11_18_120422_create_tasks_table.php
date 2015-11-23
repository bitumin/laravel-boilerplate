<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned()->index();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('restrict')->onUpdate('cascade');

            /*
             * INPUT
             */
            //worker
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');

            //task type
            $table->integer('task_type_id')->unsigned()->index();
            $table->foreign('task_type_id')->references('id')->on('task_types')->onDelete('restrict')->onUpdate('cascade');

            $table->string('name');
            $table->string('description',1020);
            $table->integer('hours',false,true);

            /*
             * CALCULATED
             */
            $table->float('cost');

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
        Schema::drop('tasks');
    }
}