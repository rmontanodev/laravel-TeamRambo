@extends('layouts.app')

@section('content')
    <!-- Default form login -->
    <div class="d-flex justify-content-around">
    {{Form::open(array('route' => array('dashboard_update', $user->id), 'method' => 'put'))}}
        {{ csrf_field() }}

        <p class="h4 mb-4">{{trans('messages.modificar_user')}}</p>

        <label>{{trans('messages.nombre')}}</label>
        <input type="text" class="form-control mb-4" value="{{$user->name}}" name="name">

        <label>{{trans('messages.email')}}</label>
        <input type="email" class="form-control mb-4" value="{{$user->email}}" name="email">

        @if(Auth::user()->user_type_id == 3)
        <label>{{trans('messages.facebook_url')}}</label>
        <input type="text" class="form-control mb-4" value="{{$user->facebook_url}}" name="facebook_url">

        <label>{{trans('messages.instagram_url')}}</label>
        <input type="text" class="form-control mb-4" value="{{$user->instagram_url}}" name="instagram_url">

        <label>{{trans('messages.twitter_url')}}</label>
        <input type="text" class="form-control mb-4" value="{{$user->twitter_url}}" name="twitter_url">
        @endif

        <button class="btn btn-success btn-block my-4" type="submit">{{trans('messages.modificar')}}</button>
        {{Form::close()}}
    </div>

@endsection