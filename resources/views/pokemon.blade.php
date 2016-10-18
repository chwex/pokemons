@extends('layouts.base')

@section('content')

<div class="row">
@foreach($pokemon as $p)
	<div class="col-sm-3">
            <div class="card">
                <div class="avatar">
                    <a href="#"><img class="img-circle" src="{{asset('Imagenes/' . $p->id . '.svg')}}" alt=""></a>
                </div>
                <div class="content">
                    <h4 class="label label-default rank-label">{{$p->identifier}}</h4>
                    <h4 class="label label-default rank-label">{{$p->height}}</h4>
                    <h4 class="label label-default rank-label">{{$p->weight}}</h4>
                </div>
            </div>
        </div>
          @endforeach  
</div>



@stop

