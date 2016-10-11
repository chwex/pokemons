<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\tipos;
use App\Http\Requests;
use DB;

class masterController extends Controller
{
        public function index(){
        $tipos=DB::table('tipos')->get();
        return view('master', compact('tipos'));
    }
}
