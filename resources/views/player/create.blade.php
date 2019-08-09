@extends('layouts.app')
@section('content')
    <!-- Default form login -->
    <div class="d-flex justify-content-around">
    <form class="text-center" action="{{route('players.store')}}" method="post">
        {{ csrf_field() }}

        <p class="h4 mb-4">{{trans('messages.crear_player')}}</p>

        <!-- Nombre -->
        <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="{{trans('messages.Nombre_completo')}}" name="name">

        <!-- Email -->
        <input type="email" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.correo')}}" name="email">

        <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.img_avatar')}}" name="imgavatar">
        <select class="form-control mb-4" name="team">
            @forelse($teams as $team)
                <option value="{{$team->id}}">{{$team->name}}</option>
                @empty
        @endforelse
        </select>
        <button class="btn btn-info btn-block my-4" type="submit">{{trans('messages.añadir_jugador')}}</button>

    </form>
    </div>
    <!-- Default form login -->
    @endsection
<!-- Default form login -->
<!-- Default form login -->