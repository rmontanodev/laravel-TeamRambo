@extends('layouts.app')
@section('content')
    <!-- Default form login -->
    <div class="d-flex justify-content-around">
        <form class="text-center" action="{{route('users.store')}}" method="post">
            {{ csrf_field() }}

            <p class="h4 mb-4">{{trans('messages.Añadir_usuario')}}</p>

            <!-- Nombre -->
            <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="{{trans('messages.Nombre_usuario')}}" name="name">

            <!-- Email -->
            <select class="form-control mb-4" name="role">
                @forelse($roles as $role)
                    @if(Auth::user()->user_type_id == 2 && $role->id == 1)
                        @else
                        <option value="{{$role->id}}">{{$role->role}}</option>
                    @endif
                    @empty
                @endforelse
            </select>
            <input type="email" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.correo')}}" name="email">
            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.contraseña')}}" name="password">
            <button class="btn btn-info btn-block my-4" type="submit" >{{trans('messages.Añadir_usuario')}}</button>

        </form>
    </div>
    <!-- Default form login -->
@endsection
<!-- Default form login -->
<!-- Default form login -->