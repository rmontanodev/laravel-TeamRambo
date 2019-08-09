@extends('layouts.app')

@section('content')
    <!-- Default form login -->
    <div class="d-flex justify-content-around">
        {{Form::open(array('route' => array('coach.update', $coach->id), 'method' => 'put'))}}
        {{ csrf_field() }}

        <p class="h4 mb-4">{{trans('messages.modificar_coach')}}</p>

        <label>{{trans('messages.nombre')}}</label>
        <input type="text" class="form-control mb-4" value="{{$coach->name}}" name="name">

        <label>{{trans('messages.edad')}}</label>
        <input type="number" class="form-control mb-4" value="{{$coach->age}}" name="age">

        <label>{{trans('messages.nacionalidad')}}</label>
        <input type="text" class="form-control mb-4" value="{{$coach->country}}" name="country">



        <button class="btn btn-success btn-block my-4" type="submit">{{trans('messages.modificar')}}</button>
        {{Form::close()}}
    </div>

@endsection