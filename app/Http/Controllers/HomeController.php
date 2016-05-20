<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentry\Facades\Laravel\Sentry;

use App\Http\Requests;

class HomeController extends Controller
{
    public function userDetails(){
    	return "public";
    }

    public function privatePage(){

    	echo "<pre>";
    	print_r(Sentry::getUser());
    	echo "</pre>";

    	return "onlyAdmin";
    }

    public function dashboard(){

    	return view('dashboard.index');
    }
}
