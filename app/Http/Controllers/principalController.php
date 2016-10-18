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
		$backgr1="wallpaper.jpg";
		$backgr2="p3.jpg";
		$backgr3="p5.jpg";
		$num = rand(1,3);
		if($num == 1)
			$backgr=$backgr1;
		else if ($num==4)
			$backgr=$backgr2;
		else
			$backgr=$backgr3;
		return view('principal', compact('backgr'));
	}
	public function mostrarTipos(){
		return view('tiposinicio');
	}
	public function mostrar(){
		return view('tipoPokemon');
	}
	public function mostrarInfo(){
		return view('pokemonInfo');
	}
	public function mostrarPokemon(){
		return view('pokemon');
	}
}
