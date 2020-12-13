@extends('layouts.master')
@if(isset($poets) and is_object($poets))
    @php
        $headline='Modificar informacion';
        $id = $poets->poet_code;
        $first_name = $poets->first_name;
        $surname = $poets->surname;
        $address = $poets->address;
        $postcode = $poets->postcode;
        $telephone_number = $poets->telephone_number;
    @endphp
@else
    @php
        $headline='Agregar poeta';
        $id = '';
        $first_name = '';
        $surname = '';
        $address = '';
        $postcode = '';
        $telephone_number = '';
    @endphp
@endif

@section('title', 'Ezequiel Vera Aguirre 5°E')

@section('navbar')
@parent
@stop

@section('header')
<h1 id="titulos">{{$headline}}</h1>
@stop

@section('content')
<form action="{{isset($poets) ? action('crud@update') :action('crud@store')}}" method="post">
        {{csrf_field()}}
        @if(isset($poets) and is_object($poets))
        <input type="hidden" name="id" value="{{$id}}">
        @endif

        <div id="formulario">
        <label for="nombre" id="texto">Nombre(s)</label>
        <br>
        <input type="text" name="nombre" placeholder="Escribir..." value="{{$first_name}}">
        <br>
        <label for="apellido" id="texto">Apellido(s)</label>
        <br>
        <input type="text" name="apellido" placeholder="Escribir..." value="{{$surname}}">
        <br>
        <label for="direccion" id="texto">Direccion</label>
        <br>
        <input type="text" name="direccion" placeholder="Escribir..." value="{{$address}}">
        <br>
        <label for="codigopostal" id="texto">CP</label>
        <br>
        <input type="text" name="codigopostal" placeholder="Escribir..." value="{{$postcode}}">
        <br>
        <label for="telefono" id="texto">Telefono</label>
        <br>
        <input type="text" name="telefono" placeholder="Escribir..." value="{{$telephone_number}}">
        <br><br>
        <input type="submit" value="Guardar" id="boton">
        </div>
    </form>
@stop

@section('footer')
@parent
@stop