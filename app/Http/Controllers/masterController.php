<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\tipos;
use App\Http\Requests;
use DB;

class masterController extends Controller
{
        
     public function index($id){
        $tipos=tipos::table('tipos')->first();
        return view('tipos', compact('tipos'));
    }


}
