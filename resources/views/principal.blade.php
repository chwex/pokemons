@extends('layouts.base')

<!-- Bootstrap Core JavaScript -->
<script src="lib/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset("//css/principal.css")}}">
</head>
<body>

<section class="container">
	<div class="row">
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
  				<div class="navbar-header">
  					<a href="{{url('/master')}}"><img  src="English_Pok.png" alt="pokemon icon"></a>
<!--<a class="navbar-brand" href="{{url('/master')}}">Pokemons</a>-->
  				</div>
    			<form class="navbar-form navbar-right">
    				<div class="form-group">
          				<input type="text" class="form-control" placeholder="Buscar">
          				<input type="button" class="imagenboton" name="">
        			</div>		
      			</form>
  			</div><!-- /.container-fluid -->
		</nav>
	</div>
</section>
<section class="container-fluid">
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

