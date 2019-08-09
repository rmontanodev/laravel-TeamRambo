@extends('layouts.app')
@section('content')
    <!-- Default form login -->
    <div class="d-flex justify-content-around">
        <form class="text-center" action="{{route('match.store')}}" method="post">
            {{ csrf_field() }}

            <p class="h4 mb-4">{{trans('messages.Crear_partido')}}</p>

            <select class="form-control mb-4" name="team1" id="team1">
                <option default value="" id="default1">{{trans('messages.Selecciona')}} {{trans('messages.Local')}} {{trans('messages.Equipo')}}</option>
                @forelse($teams as $team)
                    <option value="{{$team->id}}">{{$team->name}}</option>
                @empty
                @endforelse
            </select>
            <select class="form-control mb-4" name="team2" id="team2">
                <option default value="" id="default2">{{trans('messages.Selecciona')}} {{trans('messages.Visitante')}} {{trans('messages.Equipo')}}</option>
            @forelse($teams as $team)
                    <option value="{{$team->id}}">{{$team->name}}</option>
                @empty
                @endforelse
            </select>
            <select class="form-control mb-4" name="competition">
                <option default value="" id="default3">{{trans('messages.Selecciona')}} {{trans('messages.Competicion')}}</option>
            @forelse($competitions as $competition)
                    <option value="{{$competition->id}}">{{$competition->name}}</option>
                @empty
                @endforelse
            </select>
            <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.Fecha')}}" name="fecha">
            <small id="mensajeerror">{{trans('messages.Ejemplo_fecha')}}</small>
            <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.Hora')}}" name="hora">
            <small id="mensajeerror">{{trans('messages.Ejemplo_hora')}}</small>
            <button class="btn btn-info btn-block my-4" type="submit" id="crearpartido" disabled>{{trans('messages.Crear_partido')}}</button>

        </form>
    </div>
    <script>
        const fecha = /[0-9][0-9][/][0-9][0-9][/][0-9][0-9][0-9][0-9]/g
        const hora = /[0-9][0-9][:][0-9][0-9]/g
        $(document).on('change',()=>{
            if($('#team1').val()=="" && $('#team2').val()==""){
                $('#crearpartido').prop('disabled',true)
            }
            else if($('#team1').val()!="" && $('#team2').val()!=""){
                if($('#team1').val()==$('#team2').val()){
                    $('#crearpartido').prop('disabled',true)
                    $('#crearpartido').text('{{trans('messages.error_mismo_equipo')}}')
                    $('#crearpartido').attr('class','btn btn-danger btn-block my-4')
                }
                else if(($('#team1').val()!="" && $('#team2').val()!="")&&$('[name="competitionController"]').val()!="" && fecha.test($('[name="fecha"]').val()) && hora.test($('[name="hora"]').val())){
                    $('#crearpartido').prop('disabled',false)
                    $('#crearpartido').text('{{trans('messages.Crear_partido')}}');
                    $('#crearpartido').attr('class','btn btn-success btn-block my-4')
                    $('#mensajeerror').text('{{trans('messages.Correcto')}}')
                    $('#mensajeerror').css('color','green')
                }
                else if(hora.test($('[name="fecha"]').val())==false){
                    $('#crearpartido').prop('disabled',true)
                    $('#mensajeerror').css('color','red')
                    $('#mensajeerror').text('{{trans('messages.Error_fecha')}}')
                }
                else if(hora.test($('[name="hora"]').val())==false){
                    $('#crearpartido').prop('disabled',true)
                    $('#mensajeerror').css('color','red')
                    $('#mensajeerror').text('{{trans('messages.Error_hora')}}')
                }
            }
            console.log(hora.test($('[name="fecha"]')))
            console.log(fecha.test($('[name="fecha"]')))
        })
        $('#team1').on('change',()=>{
            $('#default1').remove();
        })
        $('#team2').on('change',()=>{
            $('#default2').remove();
        })
        $('#team3').on('change',()=>{
            $('#default3').remove();
        })

    </script>
    <!-- Default form login -->
@endsection
<!-- Default form login -->
<!-- Default form login -->