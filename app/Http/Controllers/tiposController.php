<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tipos;
use App\pokemon;
use DB;
use App\Http\Requests;
use App\items;
use App\http\Controllers\Controller; 
use Session;
use Redirect;

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

    public  function pokeAqui($id)
    {
        $totalC=items::all();
        $pokemon=pokemon::select('id','identifier','species_id','height','weight','image','caramelo','ataque')->where('id','=',$id)->get();    
        //$tipo=tipos::all();
        return view('/pokeAqui', compact('pokemon','totalC'));
    }

    public function restarCaramelo($id)
    {
            $cPokemon=DB::table('pokemon as p')
            ->select('p.caramelo')
            ->where('p.id','=',$id)
            ->get();
            $cPokemon=0;
    return view('/pokeAqui', compact('cPokemon'));

    }


    public function pdfPokemon($id)
    {

      $pdfP=pokemon::select('id','identifier','species_id','height','weight','image','caramelo','ataque')->where('id','=',$id)->get();
      
       $vista=view('pdfPokemon',compact('pdfP'));
       $dompdf=\App::make('dompdf.wrapper');
       $dompdf->loadHTML($vista);
       return $dompdf->stream('pokemon.pdf');
    }


    public function poderP($id)
    {
            //nombre del pokemon
    $pokeNombre=DB::table('pokemon as p')
    ->select('p.identifier')
    ->where('p.id','=',$id)
    ->get();

    $nombreP=head(head($pokeNombre));

    //caramelos necesarios para subir poder
    $cPokemon=DB::table('pokemon as p')
    ->select('p.caramelo')
    ->where('p.id','=',$id)
    ->get();

    //caramelos totales en la tabla items
    $C_caramelos=DB::table('items as i')
    ->select('i.numero_caramelo')
    ->where('i.id','=','1')
    ->get();

    //poder de ataque de pokemon
    $poderPokemon=DB::table('pokemon as p')
    ->select('p.ataque')
    ->where('p.id','=',$id)
    ->get();

    //variables tipo int para poder hacer operaciones aritmeticas(pasa de tipo array a tipo int)
    $totalCaramelosItems=head(head($C_caramelos));
    $caramelosNecesariosPokemon=head(head($cPokemon));
    $poderDeAtaque=head(head($poderPokemon));


    //resta los caramelos necesarios para poder subir "poder" al pokemon de los caramelos totales de la tabla items
    if ($totalCaramelosItems<$caramelosNecesariosPokemon){
        Session::flash('avisoDanger','Caramelos insuficientes para subir poder :(');
        return Redirect::back();

    } else {

        $resta=$totalCaramelosItems-$caramelosNecesariosPokemon;
        $nuevoPoder=$poderDeAtaque+$caramelosNecesariosPokemon;
        //echo ($resta);
        //dd($nuevoPoder);

    //aqui se guarda el nuevo poder del pokemon en la tabla pokemon
    $pokemon=pokemon::find($id);
    $pokemon->ataque=$nuevoPoder;
    $pokemon->save();
    //aqui se guarda el total de caramelos restantes en la tabla items
    $item=items::find(1);
    $item->numero_caramelo=$resta;
    $item->save();
    }

    //mensaje que regresa el nombre del pokemon, poder anterior y poder nuevo
    Session::flash('avisoSuccess','Poder incrementado a '.$nombreP.' de '.$poderDeAtaque.' a '.$nuevoPoder);
    return Redirect::back();
    //return Redirect('/mostrarPokemons/',compact('tipoP'));
    //dd($nombre);
    }



}
