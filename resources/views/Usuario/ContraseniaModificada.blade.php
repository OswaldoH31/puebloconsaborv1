@extends('layouts/app')



@section('content')

    <div class="cuadro">
        <div class="contenedor1">

            <div class="sec-correcto">
                <img class="correcto" src="{{asset('images/logos/correcto.png')}}" alt="">
            </div>    
            
            <div class="contenedor">
                <div class="texto-c">
                    <label>Su contraseña ha sido cambiada por su respuesta de pregunta secreta.</label>
                    
                </div>
                <div class="texto-l">
                        <label>Ahora puede </label><a class="link" href="{{ route('login') }}">{{ __(' Iniciar Sesion') }}</a>
                </div>
            </div>
        </div>
    </div>

@endsection