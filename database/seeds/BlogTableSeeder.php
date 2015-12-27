<?php

use Illuminate\Database\Seeder;
use \App\Role;
use \App\User;
use \App\Status;
use \App\Visibility;

class BlogTableSeeder extends Seeder {

    public function run()
    {
	    // Create blog related roles
	    $owner = Role::create([
		    'name' => 'Owner',
		    'description' => 'Blog owner'
	    ]);
	    $author = Role::create([
		    'name' => 'Author',
		    'description' => 'Posts author'
	    ]);
	    $reviewer = Role::create([
		    'name' => 'Reviewer',
		    'description' => 'Posts reviewer'
	    ]);
	    $member = Role::create([
		    'name' => 'Member',
		    'description' => 'Blog member'
	    ]);

	    //Create blog test users
	    $testOwner = User::create([
		    'name'      => 'Test Blog Owner',
		    'firstname' => 'Paco',
		    'lastname'  => 'Santa Lucia',
		    'username'  => 'owner',
		    'email'     => 'owner@email.com',
		    'password'  => bcrypt('owner'),
		    'confirmed' => true,
	    ]);
	    $testAuthor = User::create([
		    'name'      => 'Test Blog Author',
		    'firstname' => 'Andrés',
		    'lastname'  => 'Pina Escalado',
		    'username'  => 'author',
		    'email'     => 'author@email.com',
		    'password'  => bcrypt('author'),
		    'confirmed' => true,
	    ]);
	    $testReviewer = User::create([
		    'name'      => 'Test Blog Reviewer',
		    'firstname' => 'Lisa',
		    'lastname'  => 'Simpson',
		    'username'  => 'reviewer',
		    'email'     => 'reviewer@email.com',
		    'password'  => bcrypt('reviewer'),
		    'confirmed' => true,
	    ]);
	    $testMember = User::create([
		    'name'      => 'Test Blog Member',
		    'firstname' => 'Adolfo',
		    'lastname'  => 'McCarthy',
		    'username'  => 'member',
		    'email'     => 'member@email.com',
		    'password'  => bcrypt('member'),
		    'confirmed' => true,
	    ]);

	    // Assign blog related roles to the blog test users
	    $testOwner->assignRole($owner->id);
	    $testAuthor->assignRole($author->id);
	    $testReviewer->assignRole($reviewer->id);
	    $testMember->assignRole($member->id);

	    // Seed post statuses
	    Status::create([ "name" => "Draft" ]);
	    Status::create([ "name" => "Pending review" ]);
	    Status::create([ "name" => "Reviewed" ]);

	    // Seed post visibilities
	    Visibility::create([ "name" => "Public" ]);
	    Visibility::create([ "name" => "Protected" ]);
	    Visibility::create([ "name" => "Private" ]);

    }

}