@extends('layouts.base')

@section('content')

<table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Tipos</th>
                <th>Generacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipos as $t)
                <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->identifier}}</td>
                    <td>{{$t->generation}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
   @stop




