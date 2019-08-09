@extends('layouts.app')
@section('content')
    <!-- Default form login -->
    <div class="d-flex justify-content-around">
        {{Form::open(array('route' => array('users.update', $user->id), 'method' => 'put'))}}
            {{ csrf_field() }}

            <p class="h4 mb-4">{{trans('messages.modificar_usuario')}}</p>

            <!-- Nombre -->
            <label>{{trans('messages.nombre')}}</label>
            <input type="text" class="form-control mb-4" value="{{$user->name}}" name="name">

            <label>{{trans('messages.rol')}}</label>
            <select class="form-control mb-4" name="role">
                @forelse($roles as $role)
                    @if(Auth::user()->user_type_id == 2 && $role->id == 1)
                    @else
                        <option value="{{$role->id}}">{{$role->role}}</option>
                    @endif
                @empty
                @endforelse
            </select>
            <label>{{trans('messages.email')}}</label>
            <input type="email" class="form-control mb-4" value="{{$user->email}}" name="email">

            <label>{{trans('messages.contraseña')}}</label>
            <input type="password" class="form-control mb-4" placeholder="{{trans('messages.contraseña')}}" name="password">

            <button class="btn btn-info btn-block my-4" type="submit" >{{trans('messages.modificar_usuario')}}</button>

        {{Form::close()}}
    </div>
@endsection
