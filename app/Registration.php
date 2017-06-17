<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Cat;
use App\CatRegistration;

class Registration extends Model {

	protected $fillable = [
		'user_id', 'exposition_id', 'status', 'confirmed', 'payed'
	];

    public function cat_regs()
    {
        return $this->belongsToMany('App\CatRegistration');
    }

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function exposition()
	{
		return $this->belongsTo('App\Exposition');
	}
}


/*
 * 		Schema::create('registrations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('exposition_id');
			$table->string('status');
			$table->boolean('confirmed');
			$table->boolean('payed');
			$table->timestamps();
		});
 */
