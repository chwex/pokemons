@extends('layouts.base')

<link rel="stylesheet" type="text/css" href="{{asset("css/tipos.css")}}">

@section('content')
    <div class="row">
        <div class="col-md-2">
            <div class="list-group lstTipos">
                @foreach($tipos as $t)
                    <a href="{{url('/tipos')}}/{{$t->id}}" class="list-group-item">{{$t->identifier}}</a>
                @endforeach
            </div>
        </div>
        <div class="col-md-10">
            <h1 class="text-center">Selecciona un Tipo!</h1>
        </div>
    </div>
@stop




