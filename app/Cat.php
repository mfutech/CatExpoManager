<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Registration;
use Auth;

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

    public function scopeUsersCats($query)
    {
        return $query->where('user_id', '=', Auth::user()->id);
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
