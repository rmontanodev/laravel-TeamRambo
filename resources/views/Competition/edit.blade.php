@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-around">
        {{Form::open(array('route' => array('competitions.update', $competition->id), 'method' => 'put'))}}
            {{ csrf_field() }}

            <p class="h4 mb-4">{{trans('messages.Crear_competicion')}}</p>

            <input type="text" class="form-control mb-4" name="competitionname" value="{{$competition->name}}">
            <input type="text"  class="form-control mb-4" value="{{$competition->start_competition}}" name="fechastart">
            <small id="mensajeerror">{{trans('messages.Error_fecha')}}</small>
            <input type="text"  class="form-control mb-4" value="{{$competition->end_competition}}" name="fechaend">
            <small id="mensajeerror">{{trans('messages.Error_fecha')}}</small>
            <input type="text" class="form-control mb-4" value="{{$competition->img}}" name="imgcomp">
            <button class="btn btn-info btn-block my-4" type="submit" id="crearpartido">{{trans('messages.modificar_competicion')}}</button>

        {{Form::close()}}
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