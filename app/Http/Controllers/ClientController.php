<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientController extends Controller
{
    public function clients(){

    	$clients = \App\Person::All();

		return view('clients.index', compact('clients'));
    }

    public function create(){
    	return view('clients.create');	
    }
}
