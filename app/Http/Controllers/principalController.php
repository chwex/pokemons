<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class principalController extends Controller
{
        public function vista(){
    	return view('principal');
    }
    public function master(){
    	return view('master');
    }
    public function index(){
        $tipos=DB::table('tipos')->get();
        return view('master', compact('tipos'));
    }
}
