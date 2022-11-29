@extends('layouts.plantillaproveedor')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('PerfilP') }}
        </ol>
    </nav>
@endsection


@section('content')

    <div class="cuadro">
        <div class="containers">
            <div id="div1">
                <form method="POST" action="{{ route('profile.updateProveedor') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <span class="form-row">
                        <span class="input-data" style="line-height: 3.6;">
                            {{-- <input type="text" name="Nombre" required> --}}
                            <input id="Nombre" type="text" @error('Nombre') is-invalid @enderror" name="Nombre" value="{{ old('Nombre') ?? $users->Nombre }}" disabled>
                            
                            @error('Nombre')
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
                        <span class="input-data" style="line-height: 3.6;">
                            {{-- <input type="text" name="ApellidoPaterno" required> --}}
                            <input id="Apellido_paterno" type="text" @error('Apellido_paterno') is-invalid @enderror" name="Apellido_paterno" value="{{ old('Apellido_paterno') ?? $users->Apellido_paterno }}" disabled>
                            
                            @error('Apellido_paterno')
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
                        <span class="input-data" style="line-height: 3.6;">
                            {{-- <input type="text" name="ApellidoMaterno" required> --}}
                            <input id="Apellido_materno" type="text" @error('Apellido_materno') is-invalid @enderror" name="Apellido_materno" value="{{ old('Apellido_materno') ?? $users->Apellido_materno }}" disabled>
                            
                            @error('Apellido_materno')
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
                        <span class="input-data" style="line-height: 3.6;">
                            <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $users->email }}" disabled>
        
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
                        <span class="input-data" style="line-height: 3.6;">
                            {{-- <input type="text" name="Telefono" required> --}}
                            
                            <input id="Telefono" type="text" @error('Telefono') is-invalid @enderror" name="Telefono" value="{{ old('Telefono') ?? $telefono }}" disabled>
        
                            @error('Telefono')
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
                        <span class="input-data" style="line-height: 3.6;">
                            {{-- <input type="text" name="Usuario" required> --}}
                            
                            <input id="user" type="text" @error('Usuario') is-invalid @enderror" name="Usuario" value="{{ old('Usuario') ?? $users->Usuario }}" disabled>
        
                            @error('Usuario')
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