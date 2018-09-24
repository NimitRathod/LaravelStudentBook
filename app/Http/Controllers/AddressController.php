<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function store(Request $request){
  		// print_r($request->all());
  		// exit();
    	return view('display',compact('request'));
    }
}
