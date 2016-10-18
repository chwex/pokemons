@extends('layouts.base')


@section('content')

    <div class="row" align="center">
@foreach($totalC As $tc)
    <h6> Caramelos disponibles: {{$tc->numero_caramelo}}<h6>
@endforeach
  </div>

@if(Session::has('avisoSuccess'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('avisoSuccess')}}
    </div>
@endif


    @foreach($pokemon as $p)  
      
            <div class="card">
                <canvas class="header-bg" width="250" height="250" id="header-blur"></canvas>
                <div class="avatar">
                    <br>
                    <a href="#"><img class="img-circle" src="{{asset('Imagenes/' . $p->id . '.svg')}}" alt=""></a>
                </div>
	                <div class="content">
	                   <h4 class="label label-default rank-label">{{$p->identifier}}</h4>
	                   <h4 class="label label-default rank-label">PESO: {{$p->height}}</h4>
	                   <h4 class="label label-default rank-label">ALTURA: {{$p->weight}}</h4>
	                   <h4 class="label label-default rank-label">CARAMELO: {{$p->caramelo}}</h4>
	                   <h4 class="label label-default rank-label">ATAQUE: {{$p->ataque}}</h4>
	                </div>

		               	 <div>
		               	 <p>
		               	 	<br>
                           <a href="{{url('/pdfPokemon')}}/{{$p->id}}" class="btn btn-danger" role="button">PDF</a> 
                           <a href="{{url('/poderP')}}/{{$p->id}}" class="btn btn-warning" role="button">PODER</a>
                          </p>
		                	
		                </div>
            </div>
        </div>
    @endforeach       
    </div>

@stop