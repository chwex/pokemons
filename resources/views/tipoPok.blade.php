@extends('layouts.base')


@section('content')

    <div class="row">
    @foreach($pokemon as $p)  
        <div class="col-sm-3">
            <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar">
                    <a href="{{url('/pokeAqui')}}/{{$p->id}}"><img class="img-circle" src="{{asset('Imagenes/' . $p->id . '.svg')}}" alt=""></a>
                </div>
                <div class="content">
                   <h4 class="label label-default rank-label">{{$p->identifier}}</h4>
                </div>
            </div>
        </div>
    @endforeach       
    </div>

@stop