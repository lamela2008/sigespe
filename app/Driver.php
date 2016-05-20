<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = "driver";


    public function person(){
    	return $this->hasOne('App\Person');
    }

    public function vehicles(){
    	return $this->belongsToMany('App\Vehicle');
    }
}
