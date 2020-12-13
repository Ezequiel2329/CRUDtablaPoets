@extends('layouts.master')
@section('title', 'Ezequiel Vera Aguirre 5°E')

@section('navbar')
@parent
@stop

@section('header')
<h1 id="titulos">Poetas</h1>
@stop

@section('content')
<div>
<p><a href="{{action('crud@create')}}" id="texto">¿Quieres agregar un poeta? ¡Solo has clic aqui!</a></p>

@if(session('status'))
<br>
<div class="alert alert-danger" role="alert">
{{session('status')}}
</div>
<br>
@endif
</div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre(s)</th>
      <th scope="col">Apellido(s)</th>
      <th scope="col">Direccion</th>
      <th scope="col">CP</th>
      <th scope="col">Telefono</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($poets as $poets)
    <tr>
      <th scope="row">{{$poets->poet_code}}</th>
      <td>{{$poets->first_name}}</td>
      <td>{{$poets->surname}}</td>
      <td>{{$poets->address}}</td>
      <td>{{$poets->postcode}}</td>
      <td>{{$poets->telephone_number}}</td>
      <td><a href="{{action('crud@show', ['id'=>$poets->poet_code])}}"><img src="{{url('images/act.png')}}" class="icon"></a></td>
      <td><a href="{{action('crud@destroy', ['id'=>$poets->poet_code])}}"><img src="{{url('images/eliminar.png')}}" class="icon2"></td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop

@section('footer')
@parent
@stop