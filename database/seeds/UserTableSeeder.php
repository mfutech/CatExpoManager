<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

class UserTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();

 
        User::create([
          'email' => 'marc@tribufufu.net',
          'password' => Hash::make('test1234')
        ]);
       $users = array(
            ['id' => 100, 'name' => 'toto100', 'email' => 'toto100@toto.com', 'password' => "locked", 
						'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 101, 'name' => 'toto101', 'email' => 'toto101@toto.com', 'password' => "locked", 
						'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 102, 'name' => 'toto102', 'email' => 'toto102@toto.com', 'password' => "locked", 
						'created_at' => new DateTime, 'updated_at' => new DateTime],
                    ); 
        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
 
}

