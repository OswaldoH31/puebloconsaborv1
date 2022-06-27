@extends('layouts.app')




@section('content')

    <div class="cuadro">
        <div class="containers">
            <div id="div1">
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <span class="form-row">
                        <span class="input-data">
                            {{-- <input type="text" name="Nombre" required> --}}
                            <input id="name" type="text" @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $users->name }}" required autocomplete="name" autofocus>
                            
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
        
                            <div class="underline"></div>
        
                            <label for="Nombre">Nombre</label>
                        </span>
                        <span class="input-data"></span>
                    </span>
        
        
                    <span class="form-row">
                        <span class="input-data">
                            {{-- <input type="text" name="ApellidoPaterno" required> --}}
                            <input id="firstname" type="text" @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') ?? $users->firstname }}" required autocomplete="firstname" autofocus>
                            
                            @error('First name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
        
                            <div class="underline"></div>
                            <label for="">Apellido Paterno</label>
                        </span>
                        <span class="input-data"></span>
                    </span>
        
        
                    <span class="form-row">
                        <span class="input-data">
                            {{-- <input type="text" name="ApellidoMaterno" required> --}}
                            <input id="lastname" type="text" @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') ?? $users->lastname }}" required autocomplete="lastname" autofocus>
                            
                            @error('Last name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
        
                            <div class="underline"></div>
        
                            <label for="">Apellido Materno</label>
                        </span>
                        <span class="input-data"></span>
                    </span>
        
                    
        
                    
                    
                    <span class="form-row">
                        <span class="input-data">
                            <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $users->email }}" required autocomplete="email">
        
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
        
                            <div class="underline"></div>
        
                            <label for="Email">Email</label>
                        </span>
                        <span class="input-data"></span>
                    </span>
        
        
                    <span class="form-row">
                        <span class="input-data">
                            {{-- <input type="text" name="Telefono" required> --}}
                            
                            <input id="phone" type="text" @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $users->phone }}" required autocomplete="phone" autofocus>
        
                            @error('Phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                            <div class="underline"></div>
        
                            <label for="">Telefono</label>
                        </span>
                        <span class="input-data"></span>
                    </span>
        

                    
                    <span class="form-row">
                        <span class="input-data">
                            {{-- <input type="text" name="Usuario" required> --}}
                            
                            <input id="user" type="text" @error('user') is-invalid @enderror" name="user" value="{{ old('user') ?? $users->user }}" required autocomplete="user" autofocus>
        
                            @error('User')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                            <div class="underline"></div>
        
                            <label for="">Usuario</label>
                        </span>
                        <span class="input-data"></span>
                    </span>
        
        
                    <span class="form-row">
                        <span class="input-data">
                            {{-- <input type="text" name="Psw" required> --}}
                            
                            <input id="password" type="password" @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
        
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
        
                            <div class="underline"></div>
        
                            <label for="">Contraseña</label>
                        </span>
                        <span class="input-data"></span>
                    </span>
        
        
        
                    <span class="form-row">
                        <span class="input-data">
                            {{-- <input type="text" name="ConfirmarPsw" required> --}}
                            
                            <input id="password-confirm" type="password" name="password_confirmation" autocomplete="new-password">
        
                            <div class="underline"></div>
        
                            <label for="">Confirmar Contraseña</label>
                        </span>
                        <span class="input-data"></span>
                    </span>


                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">
                            {{ __('Image') }}
                        </label>

                        <div class="col-md-6">
                            <div class="custom-file">
                                <input type="file" accept="image/*" name="image" class="custom-file-input">
                                <label class="custom-file-label">
                                    Profile image...
                                </label>
                            </div>
                        </div>
                    </div>
        
                    <button class="button" type="submit">Actualizar</button>
                </form>
                
            </div>
        </div>
    </div>
    
@endsection