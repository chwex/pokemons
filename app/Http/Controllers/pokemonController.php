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
    
    public function consulta(){
        $pokemon=pokemon::all();
        return view('pokemon', compact('pokemon'));
    }
     public function consultarr(){
        $pokemon=pokemon::all();
        return view('pokemonInfo', compact('pokemon'));
    }
}
