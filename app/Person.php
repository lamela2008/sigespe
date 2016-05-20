<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = "person";

    public function driver(){
    	return $this->hasOne('App\Driver');
    }
}
