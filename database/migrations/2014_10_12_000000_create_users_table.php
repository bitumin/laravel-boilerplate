<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('name');
	        $table->string('slug')->nullable();
	        $table->string('email',70)->unique()->nullable();
	        $table->string('password', 100);
	        $table->boolean('confirmed')->default(0);
	        $table->string('confirmation_code')->nullable();

	        //social login fields
	        $table->string('provider')->nullable(); //social login provider
	        $table->string('provider_id')->nullable(); //social login provider ID

	        //blog related fields
	        $table->string('username', 30)->unique()->nullable();
	        $table->string('firstname', 30)->nullable();
	        $table->string('lastname', 30)->nullable();
	        $table->string('profilepicture', 200)->nullable();

            $table->rememberToken();
            $table->timestamps();
	        $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
