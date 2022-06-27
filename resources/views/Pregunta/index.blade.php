@extends('layouts.app')


@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('Login') }}
        </ol>
    </nav>
@endsection



@section('content')
    <div class="cuadro">
        <div class="contenedor1">
           
            <form action="{{ route('pregunta.store') }}" method="POST" class="formulario" name="login">
                @csrf

                <h1 style="margin-top: 10px; margin-bottom: 10px; font-family: 'Lobster', cursive;">Pregunta Secreta</h1>
                
                <i class="fa-solid fa-shield-keyhole"></i>
                <select class="pregunta @error('pregunta') is-invalid @enderror" name="pregunta_id" >
                <option selected>Seleccione su pregunta segura</option>
                @foreach ($preguntas as $pregunta)
                    <option value="{{$pregunta['id']}}">{{$pregunta['pregunta']}}</option>
                @endforeach
                {{-- <input id="prodId" name="Local_id" type="hidden" value="{{$local->id}}"> --}}
                </select>



                @if ($errors->has('pregunta'))
                    <span class="error text-danger" for="input-name">{{$errors->first('pregunta')}}</span>
                @endif

                <div class="contenedor">
                    @if ($errors->has('email')) 
                        <div class="invalid">
                            <span for="input-name">{{ $errors->first('email') }}</span>
                        </div>

                    @endif
                    <div class="input-contenedor">
                        <i class="fas fa-lock icon"></i>
                        <input id="respuesta" type="text" class="Log-1" name="respuesta" value="{{ old('respuesta') }}" placeholder="Ingresa su respuesta">
                        
                    </div>

                    

                    <div class="texto-l">
                        <button class="button" type="submit">Enviar</button>
                        
                    </div>

                </div>
            
            </form>
        </div>
    </div>

@endsection
