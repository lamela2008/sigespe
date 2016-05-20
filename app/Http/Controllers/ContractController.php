<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContractController extends Controller
{
    public function contracts(){

    	$contracts = \App\Contract::All();

		return view('contracts.index', compact('contracts'));
    }

    public function create(){
    	return view('contracts.create');	
    }

    public function assignContract(){

    	$vehicles = \App\Vehicle::All();
    	$drivers = \App\Driver::All();

		return view('vehicles.assign-vehicle', compact('vehicles', 'drivers'));
    }
}
