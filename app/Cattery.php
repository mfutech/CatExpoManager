<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cattery extends Model {

	//
	protected $fillable = [ 'name', 'email', 'mobile', 'phone', 'url' ];
/*
	public function users()
    {
        return $this->hasMany('App\Users');
    }
*/	
}

/*
		Schema::create('catteries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('name');
			$table->text('email');
			$table->text('mobile');
			$table->text('phone');
			$table->text('url');
			$table->timestamps();
		});
		
*/