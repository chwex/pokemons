<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tipos;
use DB;
use App\Http\Requests;
use DB;

class tiposController extends Controller
{
    public function inicio()
    {
        $tipos=tipos::all();
        return view('tiposinicio', compact('tipos'));
    }

    public function consultar($id)
    {

    }
}
