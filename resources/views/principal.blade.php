@extends('layouts.base')

@section('encabezado')
  <h2>Descripcion de la pagina Pokemon:</h2> 

@stop
@section('menu')
<div class="container">
   <div class="row">
      <ul class="ulu">
        <li class="lis"><a class="as" href="#">Home</a></li>
        <li class="lis"><a class="as" href="#">Pokedex</a></li>
        <li class="lis"><a class="as" href="{{url('/tipos')}}">Tipos</a></li>
        <li class="lis"><a class="as" href="#">Generaciones</a></li>
        <li class="lis"><a class="as" href="#">Fuerza</a></li>
      </ul>  
    </div>
    @stop
@section('content')

<p><center>AQUI SE PONDRA TODO EL CONTENIDO MA FRENDS</center></p>


@stop

