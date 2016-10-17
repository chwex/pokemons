@extends('layouts.base')

@section('content')
<!--Carrusel implementado-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
	<ol class="carousel-indicators">
    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  	</ol>
  <!-- Wrapper for slides -->
  	<div class="carousel-inner" role="listbox">
    	<div class="item active">
    		<center><a data-toggle="modal" data-target="#exampleModal" data-whatever="@fat"><img class="imag" src="poketeam.png"></a></center>
    	</div>
    	<div class="item ">
      		<center><a data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat"><img class="imag" src="Profesor_Oak.png"></a></center> 
    	</div>
    	<div class="item ">
      		<center><a data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat"><img class="imag" src="punto.png"></a></center>
    	</div>
  	</div>
  <!-- Controls -->
  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  	</a>
  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  	</a>
</div>

<!--Modal implementado 1-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class ="main-container">
				<div class=" highlight" style="margin-left:0;">
					<div class="row">
						<img class="imags" src="poketea.png">
					</div>
						<div class="row">
					        <img src ="instinct.png" /> 
					        <ul>
					            <li>Pokémon legendarios: Zapdos.</li>
					            <li>Líder de gimnasio: Spark.</li>
					            <li>Este equipo cree que el verdadero éxito proviene del instinto.</li> 
					            <li>Y de confiar en las capacidades de tus Pokémon.</li>
					        </ul>
					  	</div>
					  	<div class="row">
					  		<img src ="mystic.png" /> 
					        <ul>
					            <li>Pokémon legendarios: Articuno.</li>
					            <li>Líder de gimnasio: Blanche.</li>
					            <li>Este equipo cree que la serenidad, la sabiduría.</li> 
					            <li>Y el intelecto son las llaves al verdadero poder Pokémon.</li>          
					        </ul>
					  	</div>
					  	<div class="row">
					  		<img src ="valor.png" /> 
					        <ul>
					            <li>Pokémon legendarios: Moltres.</li>
					            <li>Líder de gimnasio: Candela.</li>
					            <li>Este equipo cree que la energía, la fuerza y la pasión.</li> 
					            <li>Son las que nos llevarán hacia un mundo mejor.</li>
					        </ul>
					  	</div>
				</div>
			</div>
    	</div>
  	</div>
</div>

<!--Modal implementado 2-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class ="main-containerr">
				<div class=" highlightt" style="margin-left:0;">
					<div class="row">
						<img class="imags" src="poketea.png">
					</div>
						<div class="row">
					       <p>¿Qué es Pokémon GO?

Desarrollado por Niantic, el estudio responsable de Ingress, Pokémon GO es un juego de realidad aumentada para dispositivos móviles que propone convertirnos en entrenadores Pokémon en el mundo real. Para ello habrá que activar la geolocalización (GPS) y la conectividad de datos en el móvil e interactuar con el mundo que nos rodea, visitando Gimnasios y Pokeparadas y cazando a ciento cincuenta Pokémon diferentes. La aplicación se encarga de seguir nuestros movimientos y nos irá avisando cuando estemos cerca de un Pokémon al que cazar.</p>
					  	</div>
				</div>
			</div>
    	</div>
  	</div>
</div>
<!--Modal implementado 3-->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class ="main-containerrr">
				<div class=" highlighttt" style="margin-left:0;">
					<div class="row">
						<img class="imags" src="poketea.png">
					</div>
						<div class="row">
					        <p>Cómo pedir nuevas poképaradas y gimnasios para Pokémon Go

Si empiezas a estar cansada o cansado de salir a la calle y no encontrar ni una triste poképarada porque vives alejado de cualquier atisbo de sociedad, puedes contactar con la desarrolladora Niantic para que consideren convertir tu casa en una poképarada o un gimnasio.

Por supuesto es probable que no lo hagan, al menos no únicamente para que puedas seguir echado en el sofá en pijama atrapando Pokémon, pero la posibilidad de lograrlo y de que decenas de personas no virtuales se acerquen a tu casa buscando pokéballs o nuevo territorio que conquistar está ahí.</p>
					  	</div>
				</div>
			</div>
    	</div>
  	</div>
</div>
<!--Script para el carrusel-->
<script type="text/javascript">
	$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>


@stop
