<?php

class ExpositionSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('expositions')->delete();
 
        $expositions = array(
            ['id' => 1, 'title' => 'Expo 1', 'start' => '2015-04-15',
			'end' => new DateTime, 'open_till' => new DateTime,
			'city' => 'Lausanne', 'address' => 'rte de Lausanne',
			'url' => 'http://catexpo/', 'subscription_open' => true,
			'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'title' => 'Expo 2', 'start' => '2015-06-15',
			'end' => '2015-06-16', 'open_till' => '2015-06-01',
			'city' => 'Genève', 'address' => 'rte de Genève',
			'url' => 'http://catexpo/', 'subscription_open' => true,
			'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('expositions')->insert($expositions);
    }
 
}
