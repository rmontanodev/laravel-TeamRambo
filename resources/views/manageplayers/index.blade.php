@extends('layouts.app')
@section('content')
   <a href="{{route('players.create')}}"><button class="btn btn-primary">{{trans('messages.añadir_jugador')}}</button></a>
   @forelse($players as $player)
    <li class="list-group-item">
        <div class="row">
            <img src="{{$player->img_avatar}}" class="md-avatar rounded-circle">
            <p>{{$player->user->name}}</p>
            @if($player->team != null)
                <img src="{{$player->team->img}}" class="md-avatar rounded-circle">
            @else <img src="https://i.dlpng.com/static/png/384102_preview.png " class="md-avatar rounded-circle">
            @endif
            <a class="btn btn-primary" href="{{route('players.show', $player->id)}}">{{trans('messages.ver_stats')}}</a>
            @if(in_array($player->id, $array_players_stats))
            <a class="btn btn-light disabled" href="{{route('crear_stats', $player->id)}}">{{trans('messages.crear_stats')}}</a>
            @else
                <a class="btn btn-secondary" href="{{route('crear_stats', $player->id)}}">{{trans('messages.crear_stats')}}</a>
            @endif
            <a class="btn btn-warning" href="{{route('player_stats.edit', $player->id)}}">{{trans('messages.modificar')}}</a>
            <a href="#{{$player->id}}" type="button" class="btn btn-danger pop" data-toggle="popover" data-placement="bottom" title="{{trans('messages.eliminar_jugador')}}"
               data-content="">
                {{trans('messages.eliminar')}}</a>
        </div>
    </li>
    @empty
    @endforelse
   <script>
       $(document).ready(function(){

           $('.pop').on('click', function (el) {

               let player_id = $(el.target).attr('href');
               player_id = player_id.substr(1);
               let popupElement = `{{trans('messages.realmente_eliminar_jugador')}} <a id="delete" class="btn btn-danger" href="players/`+player_id+`/destroy">{{trans('messages.si')}}</a>`;

               $('[data-toggle="popover"]').popover({
                   animation: true,
                   content: popupElement,
                   html: true
               });
           })
       });
   </script>
        @endsection