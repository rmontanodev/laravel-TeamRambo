@extends('layouts.app')
@section('content')
    <!-- Default form login -->
    <div class="d-flex justify-content-around">
        <form class="text-center" action="{{route('teams.store')}}" method="post">
            {{ csrf_field() }}

            <p class="h4 mb-4">{{trans('messages.Crear_equipo')}}</p>

            <!-- Nombre -->
            <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="{{trans('messages.Nombre_equipo')}}" name="name">

            <!-- Email -->
            <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.img_equipo')}}" name="imgequipo">
            <input type="text" value="{{$stadium->id}}" hidden name="idstadium">
            <button class="btn btn-info btn-block my-4" type="submit" >{{trans('messages.Crear_equipo')}}</button>

        </form>
    </div>
    <!-- Default form login -->
@endsection
<!-- Default form login -->
<!-- Default form login -->