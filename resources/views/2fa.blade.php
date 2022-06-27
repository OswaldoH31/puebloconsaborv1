@extends('layouts.app')
  
@section('content')

<div class="cuadro">
    <div class="contenedor1">
        <form method="POST" action="{{ route('2fa.post') }}">
            @csrf

            <h1 style="margin-top: 10px; margin-bottom: 10px; font-family: 'Lobster', cursive;">Doble factor de Autenticación</h1>
            
            <div class="contenedor">

                <p class="text-center">Le enviamos un codigo a su correo : {{ substr(auth()->user()->email, 0, 5) . '******' . substr(auth()->user()->email,  -2) }}</p>

                @if ($message = Session::get('success'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($message = Session::get('error'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    </div>
                @endif


                
                <div class="codigo-s">

                    <label for="code" class="col-md-4 col-form-label text-md-right">Codigo</label>

                    <div class="col-md-6">
                        <input id="codigo" type="number" class="form-control @error('codigo') is-invalid @enderror" name="codigo" value="{{ old('codigo') }}" required autocomplete="codigo" autofocus>

                        @error('codigo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="texto-l">
                    <button class="button" type="submit">Enviar</button>
                    
                    <a class="contrasena" href="{{ route('2fa.resend') }}">
                        {{ __('¿Resend Code?') }}
                    </a>

                    
                </div>

            </div>
        
        </form>
    </div>
</div>
@endsection