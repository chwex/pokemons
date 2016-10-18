@extends('layouts.base')


@section('content')

    
      <div class="row">
        <div class="col-lg-12">
          <p>
          @foreach($tipos as $t)
            <a href="{{url('/tipos')}}/{{$t->id}}" class="btn btn-sq-lg btn-primary">{{$t->identifier}}</a>
            @endforeach
          </p>
        </div>
    </div>
@stop




