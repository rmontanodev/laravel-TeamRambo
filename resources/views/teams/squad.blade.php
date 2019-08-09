@extends('layouts.app')
@section('content')


    @if($stadium != null)
    <div class="table-responsive m-5 float-sm-left" style="width: 30%;">
        <table class="table text-center">
            <thead>
            <th colspan="2">{{trans('messages.estadio')}}</th>
            </thead>
            <tbody>
            <tr>
                <td>{{trans('messages.nombre')}}</td>
                <td>{{$stadium->name}}</td>
            </tr>
            <tr>
                <td>{{trans('messages.capacidad')}}</td>
                <td>{{number_format($stadium->capacity)}}</td>
            </tr>
            <tr>
                <td>{{trans('messages.localizacion')}}</td>
                <td>{{$stadium->address}}, {{$stadium->city}}, {{$stadium->country}}</td>
            </tr>
            @if(Auth::user()->user_type_id == 2 || Auth::user()->user_type_id == 1)
                <tr>
                    <td><a class="btn btn-warning" href="{{route('editStadium', $stadium->id)}}">{{trans('messages.modificar')}}</a></td>
                    <td><a href="#{{$stadium->id}}" type="button" class="btn btn-danger pop_stadium" data-toggle="popover" data-placement="bottom" title="{{trans('messages.eliminar_stadium')}}"
                           data-content="">
                            {{trans('messages.eliminar')}}</a></td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
    @endif

    @if($coach != null)
   <div class="table-responsive m-5 float-sm-right" style="width: 30%;">
       <table class="table text-center">
           <thead>
                <th colspan="2">{{trans('messages.entrenador')}}</th>
           </thead>
           <tbody>
           <tr>
               <td>{{trans('messages.nombre')}} :</td>
               <td>{{$coach->name}}</td>
           </tr>
            <tr>
                <td>{{trans('messages.edad')}} :</td>
                <td>{{$coach->age}}</td>
            </tr>
            <tr>
                <td>{{trans('messages.nacionalidad')}} :</td>
                <td>{{$coach->country}}</td>
            </tr>
           @if(Auth::user()->user_type_id == 2 || Auth::user()->user_type_id == 1)
               <tr>
                   <td><a class="btn btn-warning" href="{{route('coach.edit', $coach->id)}}">{{trans('messages.modificar')}}</a></td>
                   <td><a href="#{{$coach->id}}" type="button" class="btn btn-danger pop_coach" data-toggle="popover" data-placement="bottom" title="{{trans('messages.eliminar_jugador')}}"
                          data-content="">
                           {{trans('messages.eliminar')}}</a></td>
               </tr>
           @endif
           </tbody>
       </table>
   </div>
   @endif

    <div class="table-responsive" style="width: 60%; margin-right: auto; margin-left: auto;">
        <table class="table text-center">
            <thead>
            <h2 class="text-center d-block">{{trans('messages.alineacion')}}</h2>
            <tr>
                <th scope="col">{{trans('messages.nombre')}}</th>
                <th scope="col">{{trans('messages.acciones')}}</th>
            </tr>
            </thead>
            <tbody>
    @forelse($players as $player)
        <tr>

            <td>{{$player->user->name}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('players.show', $player->id)}}">{{trans('messages.ver_stats')}}</a>
                @if(Auth::user()->user_type_id === 2 || Auth::user()->user_type_id === 1)
                    <a class="btn btn-warning" href="{{route('player_stats.edit', $player->id)}}">{{trans('messages.modificar')}}</a>
{{--                    <a class="btn btn-danger" href="{{route('delete_player', $player->id)}}">{{trans('messages.eliminar')}}</a>--}}
                    <a href="#{{$player->id}}" type="button" class="btn btn-danger pop" data-toggle="popover" data-placement="bottom" title="{{trans('messages.eliminar_jugador')}}"
                       data-content="">
                        {{trans('messages.eliminar')}}</a>
                @endif
            </td>
        </tr>
        @empty
            <div class="container">
                <p>{{trans('messages.no_quads')}}</p>
            </div>
        @endforelse
            </tbody>
        </table>
    </div>
    
    <h2 class="text-center d-block">{{trans('messages.partidos')}}</h2>
    @if($matches != null)
        @forelse($matches as $match)

            <div class="card border-primary mb-3" style="max-width:20rem; margin-left: auto; margin-right: auto;">
                <div class="card-body text-primary text-center">
                    <h5 class="card-title">Barça - Madrid</h5>
                    <p class="card-text">3 - 3</p>
                    <small>20:00 dia tal y qual</small>
                </div>
            </div>

        @empty
            <div class="alert alert-danger" role="alert">
              {{trans('messages.no_partidos')}}
            </div>
        @endforelse
    @else
        <div class="alert alert-danger text-center" role="alert">
            {{trans('messages.no_partidos')}}
        </div>
    @endif

    <script>
        $(document).ready(function(){

            $('.pop').on('click', function (el) {

                let player_id = $(el.target).attr('href');
                player_id = player_id.substr(1);
                let popupElement = `{{trans('messages.realmente_eliminar_coach')}} <a id="delete" class="btn btn-danger" href="player/`+player_id+`/destroy">{{trans('messages.si')}}</a>`;

                $('[data-toggle="popover"]').popover({
                    animation: true,
                    content: popupElement,
                    html: true
                });
            })

            $('.pop_coach').on('click', function (el) {

                let coach_id = $(el.target).attr('href');
                coach_id = coach_id.substr(1);
                let popupElement = `{{trans('messages.realmente_eliminar_coach')}} <a id="delete" class="btn btn-danger" href="coach/`+coach_id+`/destroy">{{trans('messages.si')}}</a>`;

                $('[data-toggle="popover"]').popover({
                    animation: true,
                    content: popupElement,
                    html: true
                });
            })

            $('.pop_stadium').on('click', function (el) {

                let stadium_id = $(el.target).attr('href');
                stadium_id = stadium_id.substr(1);
                let popupElement = `{{trans('messages.realmente_eliminar_stadium')}} <a id="delete" class="btn btn-danger" href="stadium/`+stadium_id+`/destroy">{{trans('messages.si')}}</a>`;

                $('[data-toggle="popover"]').popover({
                    animation: true,
                    content: popupElement,
                    html: true
                });
            })
        });
    </script>
@endsection

