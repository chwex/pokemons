@extends('layouts.base')

@section('content')
<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Altura</th>
				<th>Peso</th>
				<th>Imagen</th>
				<th>Ataque</th>
				<th>Caramelos</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pokemon as $p)
				<tr>
					<td>{{$p->id}}</td>
					<td>{{$p->identifier}}</td>
					<td>{{$p->height}}</td>
					<td>{{$p->weight}}</td>
					<td><a href="#"><img class="img-circle" src="{{asset('Imagenes/' . $p->id . '.svg')}}" alt=""></a></td>
					<td>{{$p->ataque}}</td>
					<td>{{$p->caramelos}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@stop