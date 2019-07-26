<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    function show(){
    	return view('users.users')
    	->with('name','Weeradach')
    	->with('title','MR.');
    }
}
