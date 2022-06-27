@extends('layouts.app')

@section('content')


    <div class="cuadro">
        <div class="contenedor1">
            <form method="POST" action="{{ route('recuperar.buscar') }}">
                @csrf

                <h1 style="margin-top: 10px; margin-bottom: 10px; font-family: 'Lobster', cursive;">Introduce tu usuario</h1>
                
                <div class="contenedor">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <div class="input-contenedor">
                        <i class="fas fa-user-alt icon"></i>
                        <input id="Usuario" type="text" class="Log-1  @error('Usuario') is-invalid @enderror" name="Usuario" value="{{ old('Usuario') }}" placeholder="Usuario">
                        
                        @error('Usuario')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="texto-l">
                        <button class="button" type="submit">Enviar</button>
                    </div>

                </div>
            
            </form>
        </div>
    </div>
@endsection
