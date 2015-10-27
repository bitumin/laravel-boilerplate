<?php

use Illuminate\Database\Seeder;

class ExampleLocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Example locations
        for($i=0;$i<100;++$i) {
            $catAddress = \App\Lib\Geo::getRandomCatAddress();
            $newLocation = \App\Location::create($catAddress);
            $this->command->info('Added location: '.$catAddress['formatted_address'].' (id: '.$newLocation->id.')');
        }
    }
}
