<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tipos;
use App\pokemon;
use DB;
use App\Http\Requests;

class tiposController extends Controller
{
    public function inicio()
    {
        $tipos=tipos::all();
        return view('tiposinicio', compact('tipos'));
    }

    public function consultar($id)
    {
        $pokemon = DB::select("SELECT p.identifier, p.id
        					   FROM pokemon p
        					   INNER JOIN pokemon_tipo t ON t.id_pokemon = p.id
        					   WHERE p.id = t.id_pokemon AND t.id_tipo = " . $id);

        return view('tipoPok', compact('pokemon'));
    }
     public function consultarr(){
        $tipos=tipos::all();
        $pokemon=pokemon::all();
        return view('pokemonInfo', compact('tipos','pokemon'));
    }


}
