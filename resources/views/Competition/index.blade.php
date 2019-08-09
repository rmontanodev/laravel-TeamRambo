@extends('layouts.app')
@section('content')
    @if(Auth::user()->user_type_id == 1 || Auth::user()->user_type_id == 2)
        <a href="{{route('competitions.create')}}"><button class="btn btn-info">{{trans('messages.Añadir_competicion')}}</button></a>
    @endif
    <div class="row competitions-container">
    @forelse($competitions as $competition)
        <div class="col-xs-12 col-lg-5 offset card competitions">
            <h4 style="margin-top: 5%;">{{$competition->name}}</h4>
            <img class="md-avatar" src="{{$competition->img}}">
            {{$competition->teams}}
            <p>{{$competition->start_competition}} to {{$competition->end_competition}}</p>
            @if(Auth::user()->user_type_id == 1 || Auth::user()->user_type_id == 2)

                <a class="btn btn-warning" href="{{route('competitions.edit', $competition->id)}}">{{trans('messages.modificar')}}</a>
                <a href="#{{$competition->id}}" type="button" class="btn btn-danger pop" data-toggle="popover" data-placement="bottom" title="{{trans('messages.eliminar_competicion')}}"
                   data-content="">
                    {{trans('messages.eliminar')}}</a>
            @endif
            @forelse($competition->matches as $match)
                <div class="row matches">
                    <div class="col-5">
                        <img class="competition-image md-avatar" src="{{$match->team1->img}}"><p>{{$match->team1->name}}</p>
                    </div>
                    <div class="col-2">
                        <p style="margin-top: 50%;">{{$match->result}}</p>
                        <p style="text-align: left; font-size: 9px;">{{$match->time}} {{$match->date}}</p>

                    </div>
                    <div class="col-5">
                        <img class="competition-image md-avatar" src="{{$match->team2->img}}"><p>{{$match->team2->name}}</p>
                    </div>
                </div>
                <hr>
                @empty
                @endforelse
        </div>
    @empty
        <P>{{trans('messages.no_competiciones')}}</P>
    @endforelse
    </div>
    <script>
        $(document).ready(function(){

            $('.pop').on('click', function (el) {

                let competition_id = $(el.target).attr('href');
                competition_id = competition_id.substr(1);
                let popupElement = `{{trans('messages.realmente_eliminar_competicion')}} <a id="delete" class="btn btn-danger" href="competition/`+competition_id+`/destroy">{{trans('messages.si')}}</a>`;

                $('[data-toggle="popover"]').popover({
                    animation: true,
                    content: popupElement,
                    html: true
                });
            })
        });
    </script>
@endsection