@extends('layouts.app')

@section('content')

    @if($player != null)
    {{Form::open(array('route' => array('player_stats.update', $player->player_id), 'method' => 'put'))}}

    <div class="row">
        {{Form::label('position', trans('messages.posicion', array('class' => 'label')))}}
        {{Form::select('position', $array_positions, $player->position->id)}}
    </div>
    <div class="row">
        {{Form::label('weight', trans('messages.peso', array('class' => 'label')))}}
        {{Form::text('weight', $player->weight)}}
    </div>
    <div class="row">
        {{Form::label('height', trans('messages.altura', array('class' => 'label')))}}
        {{Form::text('height', $player->height)}}
    </div>
    <div class="row">
        {{Form::label('jersey_number', trans('messages.dorsal', array('class' => 'label')))}}
        {{Form::text('jersey_number', $player->jersey_number)}}
    </div>
    <div class="row">
        {{Form::label('weak_foot', trans('messages.pierna_mala', array('class' => 'label')))}}
        {{Form::text('weak_foot', $player->weak_foot)}}
    </div>
    <div class="row">
        {{Form::label('good_foot', trans('messages.pierna_buena', array('class' => 'label')))}}
        {{Form::text('good_foot', $player->good_foot)}}
    </div>
    <div class="row">
        {{Form::label('ambidextrous', trans('messages.ambidiestro', array('class' => 'label')))}}
        {{Form::select('ambidextrous', array(0 => trans('messages.no'), 1 => trans('messages.si')), $player->ambidextrous)}}
    </div>
    <div class="row">
        {{Form::label('age', trans('messages.edad', array('class' => 'label')))}}
        {{Form::number('age', $player->age)}}
    </div>
    <div class="row">
        {{Form::label('goals', trans('messages.goles', array('class' => 'label')))}}
        {{Form::number('goals', $player->goals)}}
    </div>
    <div class="row">
        {{Form::label('red_cards', trans('messages.targetas_rojas', array('class' => 'label')))}}
        {{Form::number('red_cards', $player->red_cards)}}
    </div>
    <div class="row">
        {{Form::label('yellow_cards', trans('messages.targetas_amarillas', array('class' => 'label')))}}
        {{Form::number('yellow_cards', $player->red_cards)}}
    </div>
    <div class="row">
        {{Form::label('total_matches', trans('messages.partidos_totales', array('class' => 'label')))}}
        {{Form::number('total_matches', $player->total_matches)}}
    </div>
    <div class="row">
        {{Form::label('starting_lineup', trans('messages.alineacion_principal', array('class' => 'label')))}}
        {{Form::number('starting_lineup', $player->starting_lineup)}}
    </div>

    {{Form::submit(trans('messages.modificar'))}}
    {{Form::close()}}

    @else
        <div class="alert alert-danger" role="alert">
            {{trans('messages.no_jugador_info')}}
        </div>
    @endif

@endsection