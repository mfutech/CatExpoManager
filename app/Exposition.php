<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Exposition extends Model {

	protected $fillable = [ 'title', 'start', 'end', 'open_til', 'city', 
							'address', 'url', 'subscription_open'];

	/*
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->date('start');
			$table->date('end');
			$table->date('open_till');
			$table->string('city');
			$table->string('address');
			$table->string('url');
			$table->boolean('subscription_open');
	*/
	
	
	protected function DISgetDateFormat()
    {
        return 'd M Y';
    }
	
	public function start_fmt()
	{
		return Carbon::createFromFormat("Y-m-d", $this->start)->format('d.m.Y');
	}
	
	public function end_fmt()
	{
		return Carbon::createFromFormat("Y-m-d", $this->end)->format('d.m.Y');
	}
}
