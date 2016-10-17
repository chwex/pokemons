<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pokemon;
use DB;
use App\Http\Requests;

class pokemonController extends Controller
{
    public function consultar(Request $request){
    		dd($request->get('identifier'));
    		$pokemons = pokemon::orderBy('id','DESC')->paginate();
    		return view('pokemon.identifier.consultar', compact('pokemons'));
    }
    public function inicio()
    {
        $pokemon=pokemon::all();
        return view('tiposinicio', compact('pokemon'));
    }
}
