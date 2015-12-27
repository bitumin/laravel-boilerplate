<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

	    // Basic users seeder
	    $this->call(UserTableSeeder::class);

	    // Data for widget examples seeder
        $this->call(ExampleLocationsTableSeeder::class);

	    // Budget calculator seeder
        $this->call(ProjectCalculatorTableSeeder::class);

	    //Blog seeder
	    $this->call(BlogTableSeeder::class);

        Model::reguard();
    }
}
