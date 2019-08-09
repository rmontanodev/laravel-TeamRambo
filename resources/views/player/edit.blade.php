@extends('layouts.app')

@section('content')

    {{Form::open(array('route' => array('players.update', $player->user->id), 'method' => 'put'))}}

    <div class="row">
        {{Form::label('name', trans('messages.nombre', array('class' => 'label')))}}
        {{Form::text('name', $player->user->name)}}
    </div>
    <div class="row">
        {{Form::label('email', trans('messages.email'), array('class' => 'label'))}}
        {{Form::email('email', $player->user->email)}}
        <small id="emailHelp" class="form-text text-muted">{{trans('messages.no_sharear_email')}}</small>
    </div>

    {{Form::submit(trans('messages.modificar'))}}
    {{Form::close()}}

@endsection