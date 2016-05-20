<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VehicleController extends Controller
{
    public function vehicles(){

    	$vehicles = \App\Vehicle::All();

		return view('vehicles.index', compact('vehicles'));
    }

    public function create(){
    	return view('vehicles.create');	
    }

    public function assignVehicle(){

    	$vehicles = \App\Vehicle::All();
    	$drivers = \App\Driver::All();

		return view('vehicles.assign-vehicle', compact('vehicles', 'drivers'));
    }
}
