<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatRegistration extends Model
{
    public function cat()
    {
        return $this->belongsTo('App\Cat');
    }
    public function registration()
    {
        return $this->belongsTo('App\Registration');
    }


}
