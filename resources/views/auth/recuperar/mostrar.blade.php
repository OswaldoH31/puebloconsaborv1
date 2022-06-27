@extends('layouts.app')

@section('content')


    <script>
                                
        $(document).ready(function(){

            $('#inputGroupSelect01').on('change',function(){
                var selectValor = '#'+$(this).val();

                $('#pai').children('div').hide();
                $('#pai').children(selectValor).show();
                
            });

        });

    </script>

    @foreach ($Consultas as $Consulta )
        <div class="cuadro">
            <div class="contenedor1">

                <h1 style="margin-top: 10px; margin-bottom: 10px; font-family: 'Lobster', cursive;">Datos</h1>
                
                    <h1>{{$Consulta->Nombre}} {{$Consulta->Apellido_paterno}} {{$Consulta->Apellido_materno}}</h1>
                
                <div class="TipoUser12">
                    <label class="select1">Metodo de recuperación</label>
                    <select name="Rol_id" class="TipoU" id="inputGroupSelect01">
                        <option value="">Seleccione</option>
                        <option value="div1">Enviar contraseña al correo electrónico</option>
                        <option value="div2">Responder pregunta secreta</option>
                    </select>
                </div>


                <div id="pai"> 
                    <div id="div1">
                        <span class="contenedor-c">
                            <span class="texto-l">
                                <button class="button"><a class="btn-C" href="{{url('/password/reset')}}">Enviar</a></button>
                            </span>
                        </span>
                    </div>
    
    
                    <div id="div2">
    
                        <form action="{{route('recuperar.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                        
                            <input id="prodId" name="user_id" type="hidden" value="{{$Consulta->user_id}}">

                            <span class="contenedor-c">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
            
                                    
                                    <h1>{{$Consulta->pregunta}}</h1>
                                

                                <span class="input-contenedor">
                                    <i class="fas fa-user-alt icon"></i>
                                    <input id="respuesta" type="text" class="Log-1  @error('respuesta') is-invalid @enderror" name="respuesta" value="{{ old('respuesta') }}" placeholder="Introduzca su respuesta">
                                    
                                    @error('respuesta')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </span>

                            </span>
                            
                            <button class="button" type="submit">Enviar</button>
                        </form>
                    </div>
    
                </div>
            </div>
        </div>

    @endforeach
@endsection
