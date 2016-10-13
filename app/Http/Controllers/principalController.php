<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class principalController extends Controller
{
        public function vista(){
    	return view('principal');
    }
    public function mostrar(){
    	return view('master');
    }
}
