@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-around">
        <form class="text-center" action="{{route('competitions.store')}}" method="post">
            {{ csrf_field() }}

            <p class="h4 mb-4">{{trans('messages.Crear_competicion')}}</p>

            <input type="text" class="form-control mb-4" name="competitionname" placeholder="{{trans('messages.Nombre_competicion')}}">
            <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.Fecha_Empieza')}}" name="fechastart">
            <small id="mensajeerror">{{trans('messages.Error_fecha')}}</small>
            <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.Fecha_Fin')}}" name="fechaend">
            <small id="mensajeerror">{{trans('messages.Error_fecha')}}</small>
            <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.imagen')}}" name="imgcomp">
            <button class="btn btn-info btn-block my-4" type="submit" id="crearpartido" disabled>{{trans('messages.Crear_competicion')}}</button>

        </form>
    </div>
    <script>
        $(document).on('change',()=>{
           if($('[name="competitionname"]').val()=="" || $('[name="fechastart"]').val()=="" || $('[name="fechend"]').val()=="" || $('[name="imgcomp"]').val()==""){
               $('#crearpartido').prop('disabled',true)
            }
           else{
               $('#crearpartido').prop('disabled',false)
           }

        })
    </script>
    @endsection