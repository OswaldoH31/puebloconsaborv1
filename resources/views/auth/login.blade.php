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
            <form action="{{ route('login') }}" method="POST" class="formulario" name="login">
                @csrf

                <h1 style="margin-top: 10px; margin-bottom: 10px; font-family: 'Lobster', cursive;">Iniciar Sesion</h1>
                
                <div class="contenedor">
                    @if ($errors->has('email')) 
                        <div class="invalid">
                            <span for="input-name">{{ $errors->first('email') }}</span>
                        </div>

                    @endif
                    <div class="input-contenedor">
                        <i class="fas fa-user-alt icon"></i>
                        <input id="email" type="email" class="Log-1" name="email" value="{{ old('email') }}" placeholder="Correo electronico">
                        
                    </div>


                
                    <div class="input-contenedor">
                       <i id="pass" class="fa fa-eye icon"></i>
                        <input id="password" type="password" class="Log-1" name="password" placeholder="Contraseña">
                        
                        @if ($errors->has('password')) 
                        <span class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>

                        @endif

                    </div>

                    <div class="texto-l">
                        <button class="button" type="submit">Iniciar Sesion</button>
                        @if (Route::has('password.request'))
                            <a class="contrasena" href="{{ route('recuperarcontrasenia') }}">
                                {{ __('¿Olvido su contraseña?') }}
                            </a>
                        @endif
                    </div>

                    <div class="texto-l">
                        @if (Route::has('register'))
                            <label> ¿Aun no tienes cuenta?</label><a class="link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                        @endif
                    </div>

                </div>
            
            </form>
        </div>
    </div>

@endsection
