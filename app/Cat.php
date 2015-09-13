<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Registration;

class Cat extends Model {

    protected $fillable = [ 'name', 'race', 'color', 'birthdate'];

    public function registrations()
    {
        return $this->belongsToMany('App\Registration');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function owner()
    {
        return $this->user();
    }
}


/*
 * 			$table->increments('id');
 * 			$table->integer('user_id');
 * 			$table->string('name');
 * 			$table->string('race');
 * 			$table->string('color');
 * 			$table->date('birthdate');
 * 			$table->timestamps();
 */
