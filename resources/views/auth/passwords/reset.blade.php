@extends('layouts.app')

@section('content')
<div class="cuadro">
    <div class="contenedor1">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <h1 style="margin-top: 10px; margin-bottom: 10px; font-family: 'Lobster', cursive;">Restablecer la Contraseña</h1>
            
            <div class="contenedor">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li> 
                            @endforeach
                        </ul>
                    </div>
                @endif

                
                
                <div class="input-contenedor">
                    <i class="fas fa-user-alt icon"></i>
                    <input id="email" type="email" class="Log-1  @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="Correo electronico">

                </div>

                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <div class="restablecer-pass">
                        {{-- <span class="icon-eye">
                            <i class="fas fa-eye-slash"></i>
                        </span> --}}
                        <input id="password" type="password" class="Log-1  @error('password') is-invalid @enderror" name="password"  placeholder="Contraseña">
                        
                    </div>
            
                </div>


                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <div class="restablecer-pass">
                        {{-- <span class="icon-eye2">
                            <i class="fas fa-eye-slash"></i>
                        </span> --}}
                        <input id="password_confirmation" type="password" class="Log-1  @error('password_confirmation') is-invalid @enderror" name="password_confirmation"  placeholder="Confirmar Contraseña">
                    </div>
                </div>


                <div class="texto-l">
                    <button class="button" type="submit">Restablecer Contraseña</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
