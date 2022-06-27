@extends('layouts.app')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('Registro') }}
        </ol>
    </nav>
@endsection


@section('content')

    <div class="cuadro">
        <div class="containers">
            <div class="logoR">
                <img src="{{asset('imagenes/puebloconsabor.png')}}"  style="width: 150px; height: 175px; display: block; margin: auto; padding-top: 10px;" >
            </div>
           
            <form method="POST" action="{{ route('register')}}" >
                @csrf

                <div class="form-row">
                    <div class="input-data">
                        {{-- <input type="text" name="Nombre" required> --}}
                        <input class="form-control @error('Nombre') is-invalid @enderror" id="Nombre" type="text" name="Nombre" value="{{ old('Nombre') }}">
                        
                        <div class="underline"></div>

                        <label for="Nombre">Nombre</label>
                        
                        @if ($errors->has('Nombre'))
                            <span class="error text-danger" for="input-name">{{$errors->first('Nombre')}}</span>
                        @endif
                    </div>
                    <div class="input-data"></div>  
                </div>


                <div class="form-row">
                    <div class="input-data">
                        {{-- <input type="text" name="ApellidoPaterno" required> --}}
                        <input class="form-control @error('Apellido_paterno') is-invalid @enderror" id="Apellido_aterno" type="text"  name="Apellido_paterno" value="{{ old('Apellido_paterno') }}">
                        
                        <div class="underline"></div>
                        <label for="">Apellido Paterno</label>
                        @if ($errors->has('Apellido_paterno'))
                            <span class="error text-danger" for="input-name">{{$errors->first('Apellido_paterno')}}</span>
                        @endif
                    </div>
                    <div class="input-data"></div>
                </div>


                <div class="form-row">
                    <div class="input-data">
                        {{-- <input type="text" name="ApellidoMaterno" required> --}}
                        <input class="form-control @error('Apellido_materno') is-invalid @enderror"  id="Apellido_materno" type="text" name="Apellido_materno" value="{{ old('Apellido_materno') }}">
                        
                        <div class="underline"></div>

                        <label for="">Apellido Materno</label>
                        @if ($errors->has('Apellido_materno'))
                            <span class="error text-danger" for="input-name">{{$errors->first('Apellido_materno')}}</span>
                        @endif
                    </div>
                    <div class="input-data"></div>
                </div>


                <div class="sexo1">

                    <label for="">Sexo</label>

                    <div class="sexo">
                        <input type="radio" class="form-check-input" name="Genero" id="genderM" value="Masculino" {{(old('Genero') == "Masculino") ? "checked":""}}>
                        <label class="form-check-label" for="genderM"> M </label>
                    </div>
                    <div class="sexo">
                        <input type="radio" class="form-check-input" name="Genero" id="genderF" value="Femenino" {{(old('Genero') == "Femenino") ? "checked":""}}>
                        <label class="form-check-label" for="genderF"> F </label>
                    </div>
                    <div class="gender-v">
                        @if ($errors->has('Genero'))
                            <span class="error text-danger" for="input-name">{{$errors->first('Genero')}}</span>
                        @endif
                    </div>
                </div>
                    

                <div class="fecha">
                    <label for="start">Fecha de Nacimieno</label>
                    {{-- <input type="date" id="start" name="FechaNac" value="2018-07-22" min="2018-01-01" max="2018-12-31"> --}}
                    <input id="Fecha_nacimiento" type="date" @error('Fecha_nacimiento') is-invalid @enderror" name="Fecha_nacimiento" value="{{ old('Fecha_nacimiento') }}" value="2018-07-22" min="1990-01-01" max="2018-12-31" autocomplete="Fecha_nacimiento" autofocus>
                    <div>
                        @if ($errors->has('Fecha_nacimiento'))
                            <span class="error text-danger" for="input-name">{{$errors->first('Fecha_nacimiento')}}</span>
                        @endif
                    </div>
                    
                </div>
                
                <div class="form-row">
                    <div class="input-data">
                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email"  name="email" value="{{ old('email') }}">

                        <div class="underline"></div>

                        <label for="Email">Email</label>
                        @if ($errors->has('email'))
                            <span class="error text-danger" for="input-name">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div class="input-data"></div>
                </div>


                <div class="form-row">
                    <div class="input-data">
                        {{-- <input type="text" name="Telefono" required> --}}
                        <input class="form-control @error('Telefono') is-invalid @enderror" id="Telefono" type="text" name="Telefono" value="{{ old('Telefono') }}">
                        <div class="underline"></div>

                        <label for="">Telefono</label>
                        @if ($errors->has('Telefono'))
                            <span class="error text-danger" for="input-name">{{$errors->first('Telefono')}}</span>
                        @endif
                    </div>
                    <div class="input-data"></div>
                </div>


                <div class="TipoUser">
                    <label>Tipo Usuario</label>
                    <select class="TipoU @error('Rol_id') is-invalid @enderror" name="Rol_id" >
                        <option selected>Selecciona</option>
                        @foreach ($roles as $rol)
                            <option value="{{$rol['id']}}" {{(old('Rol_id') == $rol['id']) ? 'selected':''}} >{{$rol['name']}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('Rol_id'))
                        <span class="error text-danger" for="input-name">{{$errors->first('Rol_id')}}</span>
                    @endif
                </div>


                <div class="form-row">
                    <div class="input-data">
                        {{-- <input type="text" name="Usuario" required> --}}
                        
                        <input class="form-control @error('Usuario') is-invalid @enderror" id="Usuario" type="text" name="Usuario" value="{{ old('Usuario') }}">

                        <div class="underline"></div>

                        <label for="">Usuario</label>
                        @if ($errors->has('Usuario'))
                            <span class="error text-danger" for="input-name">{{$errors->first('Usuario')}}</span>
                        @endif
                    </div>
                    <div class="input-data"></div>
                </div>


                <div class="form-row">
                    <div class="input-data">
                        {{-- <input type="text" name="Psw" required> --}}
                        
                        <span class="icon-eye">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                        <input class="form-control @error('password') is-invalid @enderror"  id="inputpassword" type="password" name="password">
                        
                        <div class="underline"></div>
                        
                        <label for="">Contraseña</label>
                        {{-- @if ($errors->has('password'))
                            <span class="error text-danger" for="input-name">{{$errors->first('password')}}</span>
                        @endif --}}
                    </div>

                    {{-- <input type="checkbox" onclick="myFuction()">Ver ontraseña --}}
                    

                    <div class="input-data"></div>
                </div>
                
                @if (count($errors) > 0)
                    <div class="validacion">
                        <div class="error text-danger">
                            <ul>
                                @foreach ($errors->get('password') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif


                <div class="form-row">
                    <div class="input-data">
                        {{-- <input type="text" name="ConfirmarPsw" required> --}}
                        <span class="icon-eye2">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                        <input class="form-control @error('password_confirmation') is-invalid @enderror" id="pass_confirmation" type="password" name="password_confirmation">

                        <div class="underline"></div>
                        <label for="">Confirmar Contraseña</label>
                        @if ($errors->has('password_confirmation'))
                            <span class="error text-danger" for="input-name">{{$errors->first('password_confirmation')}}</span>
                        @endif
                    </div>
                    <div class="input-data"></div>
                </div>

                <div class="Condicion">
                   <label style="font-size: 13px">Al hacer clic en "Registrarte", confirmas que leíste nuestra <a style="    font-size: 13px;" class=link href="{{route('AvisoPrivacidad.index')}}">Aviso de Privacidad</a></label> 
                </div>
                <div>
                    <button class="button" type="submit">Registrate</button>
                </div>

                <div class="Iniciar-S">
                    <label> ¿Ya tienes cuenta?</label> <a class=link href="{{ route('login') }}">Iniciar Sesion</a>
                </div>

            </form>
        </div>
    </div>
    <script src="js/pass.js"></script>
@endsection


