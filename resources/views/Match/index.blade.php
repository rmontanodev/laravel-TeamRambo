@extends('layouts.app')
@section('content')
    @if(Auth::user()->user_type_id == 1 || Auth::user()->user_type_id == 2)
        <a href="{{route('match.create')}}"><button class="btn btn-info">Add Match</button></a>
    @endif
    <div class="row">
    @forelse($matches as $match)
        <div class="col-xs-12 col-md-3 offset-md-1 card match">
            <h2 style="margin-top: 2%;">{{$match->date}} {{$match->time}}</h2>
            <p>{{trans('messages.Local')}}: <a href="{{route('teams.show',$match->team1->id)}}">{{$match->team1->name}}</a></p>
            <p>{{trans('messages.Visitante')}}: <a href="{{route('teams.show',$match->team2->id)}}">{{$match->team2->name}}</a></p>
            @if($match->competition != null)
            <p> {{trans('messages.Competicion')}} <img class="md-avatar" src="{{$match->competition->img}}">{{$match->competition->name}}</p>
            @endif
            @if($match->result!= '')
                <p style="margin-bottom: 3%;">{{trans('messages.Resultado')}}: {{ json_encode($match->result)}}</p>
            @endif
            @if(Auth::user()->user_type_id == 1 || Auth::user()->user_type_id == 2)

            <a class="btn btn-warning" href="{{route('match.edit', $match->id)}}">{{trans('messages.modificar')}}</a>
                <a href="#{{$match->id}}" style="margin-bottom: 5%;" type="button" class="btn btn-danger pop" data-toggle="popover" data-placement="bottom" title="{{trans('messages.eliminar_jugador')}}"
                   data-content="">
                    {{trans('messages.eliminar')}}</a>
            @endif


        </div>
    @empty
    @endforelse
    </div>
    <script>
        $(document).ready(function(){

            $('.pop').on('click', function (el) {

                let match_id = $(el.target).attr('href');
                match_id = match_id.substr(1);
                let popupElement = `{{trans('messages.realmente_eliminar_match')}} <a id="delete" class="btn btn-danger" href="match/`+match_id+`/destroy">{{trans('messages.si')}}</a>`;

                $('[data-toggle="popover"]').popover({
                    animation: true,
                    content: popupElement,
                    html: true
                });
            })
        });
    </script>
    @endsection