@extends('layouts.app')
@section('content')

    <div class="card">
        <ul class="list-group list-group-flush">
            <li class="list-group-item font-weight-bold bg-light">{{trans('messages.informacion_general')}}</li>
            <li class="list-group-item">{{trans('messages.email')}}: {{Auth::user()->email}}</li>
            <li class="list-group-item">{{trans('messages.imagen')}}: {{Auth::user()->img}}</li>
            @if(Auth::user()->type_id == 3)
            <li class="list-group-item font-weight-bold bg-light">{{trans('messages.social_media')}}</li>
            <li class="list-group-item">{{trans('messages.twitter_url')}}: {{Auth::user()->twitter_url}} </li>
            <li class="list-group-item">{{trans('messages.facebook_url')}}: {{Auth::user()->facebook_url}}</li>
            <li class="list-group-item">{{trans('messages.instagram_url')}}: {{Auth::user()->instagram_url}}</li>
            @endif
        </ul>
    </div>
    <a href="{{route('dashboard_edit', Auth::user()->id)}}"><i class="fas fa-pen-square fa-4x"></i></a>
@endsection

