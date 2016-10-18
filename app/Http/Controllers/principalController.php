<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class principalController extends Controller
{
	public function mostrarPrincipal(){
		return view('principal');
	}
		public function getIndex(){
		return view('principal');
	}
	public function mostrarTipos(){
		return view('tiposinicio');
	}
	public function mostrar(){
		return view('tipoPok');
	}
	public function mostrarInfo(){
		return view('pokemonInfo');
	}
	public function mostrarPokemon(){
		return view('pokemon');
	}public function mostrarpoke(){
		return view('pokeAqui');
	}
}
