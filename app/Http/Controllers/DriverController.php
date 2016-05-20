<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Cartalyst\Sentry\Facades\Laravel\Sentry;

class DriverController extends Controller
{
    public function drivers(){

    	$drivers = \App\Driver::All();

		return view('drivers.index', compact('drivers'));
    }

    public function create(){
    	return view('drivers.create');	
    }
}
