<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 2015-09-13
 * Time: 23:26
 */

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
