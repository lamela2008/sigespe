<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentry\Facades\Laravel\Sentry;

use App\Http\Requests;

class WebResourceController extends Controller
{
    //
    public function show(){
    	$currentUser = Sentry::getUser();

    	return $currentUser;
    }

    public function edit($id){
    	$currentUser = Sentry::getUser();

    	return $currentUser;
    }

}
