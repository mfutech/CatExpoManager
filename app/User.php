<?php namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
			'name', 'email', 'password', 'phone',
			'firstname', 'lastname',
			'address', 'CP_city', 'country', 
			'affiliation', 'url',
			'is_exposant'
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token', 'is_exposant'];

	public function cats()
	{
		return $this->hasMany('App\Cat');
	}

	public function registrations()
	{
		return $this->hasMany('App\Registration');
	}
}
