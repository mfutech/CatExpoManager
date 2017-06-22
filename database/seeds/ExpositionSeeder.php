<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Exposition;

class ExpositionSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('expositions')->delete();
 
		Exposition::create([
			'title' => 'Expo 1', 
			'start' => '2015-04-15',
			'end' => new DateTime,
			'open_till' => new DateTime,
			'city' => 'Lausanne',
			'address' => 'rte de Lausanne',
			'url' => 'http://catexpo/', 'subscription_open' => true
			]);
		Exposition::create([
			'title' => 'Expo 2', 
			'start' => '2015-06-15',
			'end' => '2015-06-16',
			'open_till' => '2015-06-01',
			'city' => 'Lausanne',
			'address' => 'rte de Lausanne',
			'url' => 'http://catexpo/', 'subscription_open' => true
			]);
    }
 
}
