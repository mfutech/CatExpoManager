<?php

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
 
}

