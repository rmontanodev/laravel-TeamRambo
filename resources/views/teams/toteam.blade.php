@extends('layouts.app')
@section('content')
    <h1>{{trans('messages.Estadio_añadido')}}</h1>
    <a href="{{route('crearteam',$stadium)}}"><button id="gotocreateteam" class="btn btn-elegant" >Ir a crear equipo</button></a>
    @endsection