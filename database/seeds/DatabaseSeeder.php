	<?php

	use Illuminate\Database\Seeder;
	use Illuminate\Database\Eloquent\Model;
	//use database\seeds\UserTableSeeder;
	//use database\seeds\ExpositionSeeder;
	use App\Exposition;
	use App\User;
    use App\Cat;
    use App\Registration;

	class DatabaseSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			Model::unguard();

			//$this->call('UserTableSeeder');
			//$this->call('ExpositionSeeder');
            $this->call('CatTableSeeder');
		}

	};

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
        //DB::table('expositions')->insert($expositions);
		
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
 
};

class UserTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('users')->delete();

        $users = array(
            ['id' => 100, 'name' => 'toto100', 'email' => 'toto100@toto.com', 'password' => "locked", 'rememberToken' => "", 
						'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 101, 'name' => 'toto101', 'email' => 'toto101@toto.com', 'password' => "locked", 'rememberToken' => "", 
						'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 102, 'name' => 'toto102', 'email' => 'toto102@toto.com', 'password' => "locked", 'rememberToken' => "", 
						'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
 
};

class CatTableSeeder extends Seeder {
	public function run()
	{
		DB::table('cats')->delete();
		$u = User::find(1);
		$c = Cat::create([
			'id' 		=> 1,
			'name' 		=> "Max Moonlightshadow",
			'race' 		=> "NEM",
			'color' 	=> "Seal Silver Tabby Point",
			'birthdate'	=> "2013-08-01"
			]);
		$c->owner()->associate($u);
		$c->save();
		$c = Cat::create([
			'id' 		=> 2,
			'name' 		=> "Minuit Siberussi",
			'race' 		=> "SIB",
			'color' 	=> "Blue",
			'birthdate'	=> "2012-07-01"
		]);
		$c->owner()->associate($u);
		$c->save();
	}
}
