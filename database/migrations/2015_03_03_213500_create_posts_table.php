<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('slug', 120)->unique();
            $table->text('short_description');
            $table->longtext('content');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
	        $table->integer('reviewer_id');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
	        $table->integer('status_id')->unsigned();
	        $table->foreign('status_id')->references('id')->on('statuses');
	        $table->dateTime('publish_date');
	        $table->integer('being_edited_by')->nullable()->default(null);
	        $table->string('password')->nullable();
	        $table->integer('visibility_id')->unsigned();
	        $table->foreign('visibility_id')->references('id')->on('visibilities');
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
        Schema::dropIfExists('posts');
    }

}
