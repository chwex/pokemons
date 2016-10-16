<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class tiposController extends Controller
{
    public function inicio(){
        $tipos=DB::table('tipos')->get();
        return view('tiposinicio', compact('tipos'));
    }

    public function consultar($id){

    }
}
