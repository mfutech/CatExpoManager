<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Cat;

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
