@extends('layouts.app')
@section('content')
    <!-- Default form login -->
    <div class="d-flex justify-content-around">
        <form class="text-center" action="{{route('storeStadium')}}" method="post">

            @csrf

            <p class="h4 mb-4">{{trans('messages.Añadir_estadio')}}</p>

            <!-- Nombre -->
            <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="{{trans('messages.Nombre_estadio')}}" name="stadiumname">

            <!-- Email -->
            <input type="number" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.Capacidad')}}" name="capacidad">

            <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.Ciudad')}}" name="ciudad">
            <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.Direccion')}}" name="direccion">
            <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.Pais')}}" name="pais">
            <input type="number" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="{{trans('messages.Año_construccion')}}" name="añoconstruido">
            <input type="text" hidden name="maneraenviar" class="form-control mb-4" value="">
            <p class="h4 mb-4">{{trans('messages.OSelecciona')}}</p>
            <select class="form-control mb-4" name="team" id="selecteam">
                <option default></option>
                @forelse($stadiums as $stadium)
                    <option value="{{$stadium->id}}">{{$stadium->name}}</option>
                @empty
                @endforelse
            </select>
            <button class="btn btn-danger btn-block my-4" type="submit" id="botonenviar" disabled>{{trans('messages.alerta')}}</button>

        </form>
    </div>
    <script>
        $(document).on('change',()=>{
            console.log('hola')
            if($('#selecteam').val()!=""){
                $('input').val('')
                $('input').prop('disabled',true)
                $('#botonenviar').text('{{trans('messages.alerta')}}')
                $('#botonenviar').prop('disabled',false)
                $('#botonenviar').attr('class','btn btn-success btn-block my-4')
                $('[name="maneraenviar"]').val('existe')
                $('#botonenviar').text('{{trans('messages.Siguiente')}}')
            }
            else if($('[name="ciudad"]').val() != '' && $('[name="stadiumname"]').val() != '' && $('[name="capacidad"]').val() != '' && $('[name="direccion"]').val() != '' && $('[name="pais"]').val() != '' && $('[name="añoconstruido"]').val() != ''){
                $('#selecteam').val('')
                $('#selecteam').prop('disabled',true)
                $('#botonenviar').text('{{trans('messages.alerta')}}')
                $('#botonenviar').attr('class','btn btn-success btn-block my-4')
                $('#botonenviar').text('{{trans('messages.Siguiente')}}')
                $('[name="maneraenviar"]').val('crear')
                $('#botonenviar').prop('disabled',false)

            }
            else{
                $('#botonenviar').attr('class','btn btn-danger btn-block my-4')
                $('#botonenviar').prop('disabled',true)
                $('#botonenviar').text('{{trans('messages.alerta')}}')
                $('input').prop('disabled',false)
                $('#selecteam').prop('disabled',false)
            }
        })
    </script>
    <!-- Default form login -->
@endsection

<!-- Default form login -->
<!-- Default form login -->