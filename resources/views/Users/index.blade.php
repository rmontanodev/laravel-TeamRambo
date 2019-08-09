@extends('layouts.app')
@section('content')
   <a href="{{route('users.create')}}"> <button class="btn btn-info my-4">{{trans('messages.Añadir_usuario')}}</button></a>
<div class="col-md-12 card">
    <div class="row">
    <h3 class="col-md-1">{{trans('messages.Usuario')}}</h3>
    <h3 class="col-md-1">{{trans('messages.Tipo_usuario')}}</h3>
        <h3 class="col-md-2">{{trans('messages.correo')}}</h3>
        <h3 class="col-md-1">{{trans('messages.twitter_url')}}</h3>
        <h3 class="col-md-1">{{trans('messages.instagram_url')}}</h3>
        <h3 class="col-md-1">{{trans('messages.facebook_url')}}</h3>
        <h3 class="col-md-1">{{trans('messages.activado')}}</h3>
        <h3 class="col-md-1">{{trans('messages.acciones')}}</h3>
    </div>
    <hr>
    @forelse($users as $user)
        @if(Auth::user()->user_type_id == 1)
            <div>
                <a class="btn btn-warning" href="{{route('match.edit', Auth::user()->id)}}">{{trans('messages.modificar')}}</a>
            </div>
            <div>
                <a href="#{{Auth::user()->id}}" type="button" class="btn btn-danger pop" data-toggle="popover" data-placement="bottom" title="{{trans('messages.eliminar_jugador')}}"
                   data-content="">
                    {{trans('messages.eliminar')}}</a>
            </div>
    <div class="row">
        <div class="col-md-1">
            <p>{{$user->name}}</p>
        </div>
        <div class="col-md-1">
            <p>{{$user->user_type->role}}</p>
        </div>
        <div class="col-md-2">
            <p>{{$user->email}}</p>
        </div>
        <div class="col-md-1">
            <p>{{$user->twitter_url}}</p>
        </div>
        <div class="col-md-1">
            <p>{{$user->instagram_url}}</p>
        </div>
        <div class="col-md-1">
            <p>{{$user->facebook_url}}</p>
        </div>
        <div class="col-md-1">
            <p>{{$user->is_active}}</p>
        </div>
        <div class="col-md-1">
                <a class="btn btn-warning" href="{{route('users.edit', Auth::user()->id)}}">{{trans('messages.modificar')}}</a>

                <a href="#{{Auth::user()->id}}" type="button" class="btn btn-danger pop" data-toggle="popover" data-placement="bottom" title="{{trans('messages.eliminar_jugador')}}"
                   data-content="">
                    {{trans('messages.eliminar')}}</a>
        </div>
    </div>
        <hr>
        @elseif(Auth::user()->user_type_id == 2)
            @else
            <div class="row">
                <div class="col-md-1">
                    <p>{{$user->name}}</p>
                </div>
                <div class="col-md-1">
                    <p>{{$user->user_type->role}}</p>
                </div>
                <div class="col-md-2">
                    <p>{{$user->email}}</p>
                </div>
                <div class="col-md-1">
                    <p>{{$user->twitter_url}}</p>
                </div>
                <div class="col-md-1">
                    <p>{{$user->instagram_url}}</p>
                </div>
                <div class="col-md-1">
                    <p>{{$user->facebook_url}}</p>
                </div>
                <div class="col-md-1">
                    <p>{{$user->is_active}}</p>
                </div>
                <div class="col-md-1">
                    <a class="btn btn-warning" href="{{route('users.edit', $user->id)}}">{{trans('messages.modificar')}}</a>

                    <a href="#{{$user->id}}" type="button" class="btn btn-danger pop" data-toggle="popover" data-placement="bottom" title="{{trans('messages.eliminar_usuario')}}"
                       data-content="">
                        {{trans('messages.eliminar')}}</a>
                </div>
            </div>
            <hr>
            @endif
    @empty
    @endforelse
</div>

   <script>
       $(document).ready(function(){

           $('.pop').on('click', function (el) {

               let user_id = $(el.target).attr('href');
               user_id = user_id.substr(1);
               let popupElement = `{{trans('messages.realmente_eliminar_usuario')}} <a id="delete" class="btn btn-danger" href="users/`+user_id+`/destroy">{{trans('messages.si')}}</a>`;

               $('[data-toggle="popover"]').popover({
                   animation: true,
                   content: popupElement,
                   html: true
               });
           })
       });
   </script>
@endsection