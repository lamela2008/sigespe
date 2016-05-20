<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = "vehicle";


    public function drivers(){
    	return $this->belongsToMany('App\Driver');
    }
}
