@extends('layouts.app')

@section('content')
    <!-- Default form login -->
    <div class="d-flex justify-content-around">
        {{Form::open(array('route' => array('updateStadium', $stadium->id), 'method' => 'put'))}}
        {{ csrf_field() }}

        <p class="h4 mb-4">{{trans('messages.modificar_stadium')}}</p>

        <label>{{trans('messages.nombre')}}</label>
        <input type="text" class="form-control mb-4" value="{{$stadium->name}}" name="name">

        <label>{{trans('messages.capacidad')}}</label>
        <input type="number" class="form-control mb-4" value="{{$stadium->capacity}}" name="capacity">

        <label>{{trans('messages.localizacion')}}</label>
        <input type="text" class="form-control mb-4" value="{{$stadium->address}}" name="address">

        <label>{{trans('messages.ciudad')}}</label>
        <input type="text" class="form-control mb-4" value="{{$stadium->city}}" name="city">

        <label>{{trans('messages.nacionalidad')}}</label>
        <input type="text" class="form-control mb-4" value="{{$stadium->country}}" name="country">



        <button class="btn btn-success btn-block my-4" type="submit">{{trans('messages.modificar')}}</button>
        {{Form::close()}}
    </div>

@endsection