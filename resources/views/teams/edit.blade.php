@extends('layouts.app')

@section('content')

    {{Form::open(array('route' => array('teams.update', $team->id), 'method' => 'put'))}}

    <div class="row">
        {{Form::label('name', trans('messages.nombre', array('class' => 'label')))}}
        {{Form::text('name', $team->name)}}
    </div>
    <div class="row">
        {{Form::label('img', trans('messages.imagen', array('class' => 'label')))}}
        {{Form::text('img', $team->img)}}
    </div>
    <div class="row">
        {{Form::label('stadium', trans('messages.estadio', array('class' => 'label')))}}
        {{Form::select('stadium_id', $array_stadiums, $team->stadium_id)}}
    </div>


    {{Form::submit(trans('messages.modificar'))}}
    {{Form::close()}}
@endsection