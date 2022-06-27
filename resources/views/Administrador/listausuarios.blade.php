@extends('layouts.plantilladmin')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('ListadoUsuarios') }}
        </ol>
    </nav>
@endsection


@section('title','Usuarios')
@section('content')
 
<div class="contebus">
    {{-- <div class="sec-bus">
    <form class="for-bus" action="{{route('Usuarios.index')}}" method="get">
        <fieldset>
            <input type="Buscar" class="inp-b"  placeholder="Buscar..."  name="texto" value="{{$texto}}" required/>
            <button class="bot-bus" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </fieldset>

    </form>
    </div>  --}}

    <div class="conteus">
        <form class="for-bus" action="{{route('Usuarios.index')}}" method="get">
            <div class="buscar-us">
                    <input type="text" placeholder="Buscar"  name="texto" value="" required>
                    <div class="btn-bus">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </form>
        
    </div> 
</div>   



<div class="cont-pie">
    @if(count($Usuarios)<=0)
        <h4 class="ti-pie">No hay Resultados</h4>
    @else
        @foreach($Usuarios as $usuario)
            
                <div class="sec-pie">
                    <h4 class="ti-pie">Lista de Usuarios</h4>
                    <div class="lineas">
                        <div class="diamond"></div>
                    </div>

                    
                    
                    <div class="cont-infp">

                        <div class="cont-pp1">
                            <h4 class="ti-lop"><i class="fas fa-key"></i> Id</h4>
                            <div class="cont-bdp">{{$usuario->id}}</div>
                        </div>
                        <div class="cont-pp1">
                            <h4 class="ti-lop"><i class="fas fa-user"></i> Nombre</h4>
                            <div class="cont-bdp">{{$usuario->Nombre}} {{$usuario->Apellido_paterno}} {{$usuario->Apellido_materno}}</div>
                            
                        </div>
                    </div>

                    <div class="cont-infp">

                        <div class="cont-pp1">
                            <h4 class="ti-lop"><i class="fas fa-envelope"></i> Correo</h4>
                            <div class="cont-bdp">{{$usuario->email}}</div>
                        </div>
                        <div class="cont-pp1">
                            <h4 class="ti-lop"><i class="fas fa-venus-mars"></i> Sexo</h4>
                            <div class="cont-bdp">{{$usuario->Genero}}</div>
                        </div>
                    </div>
                    

                    <div class="cont-infp">

                        <div class="cont-pp1">
                            <h4 class="ti-lop"><i class="fas fa-birthday-cake"></i> Fecha de Nacimiento</h4>
                            <div class="cont-bdp">{{$usuario->Fecha_nacimiento}}</div>
                        </div>
                        <div class="cont-pp1">
                            <h4 class="ti-lop"><i class="fas fa-phone-alt"></i> Telefono</h4>
                            <div class="cont-bdp">{{$usuario->Telefono}}</div>
                        </div>
                    </div>
                    

                    <div class="cont-infp">

                        <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-user"></i> Usuario</h4>
                            <div class="cont-bdp">{{$usuario->Usuario}}</div>
                        </div>
                        <div class="cont-pp1">
                            <h4 class="ti-lop"><i class="fas fa-user"></i> Tipo de Usuario</h4>
                            @if($usuario->Rol_Id == 2)
                            <div class="cont-bdp">Proveedor</div>
                            @else
                                @if($usuario->Rol_Id == 3)
                                <div class="cont-bdp">Usuario</div>
                                @else
                                <div class="cont-bdp">Administrador</div>
                                @endif
                            @endif
                        </div>
                    </div>

                <h4 class="ti-pie"><i class="fas fa-image"></i> Imagen</h4>
                <div class="lineas">
                    <div class="diamond"></div>
                </div>
                <div class="cont-infp">
                    <div class="cont-pl">
                    <h4 class="ti-lo"><div class="img-log">
                        <img  class="perfil" src="{{asset($usuario->profile_image)}}">
                    </h4>
                    
                    </div>
                </div>
            
                <div class="lineas">
                    <div class="diamond"></div>
                </div>
                <div class="espa-l"><div>
                
                </div>
                <div class="espa-l">
                    {{$Usuarios->links()}}
                </div>
                </div>
                </div>
                
            
            <div class="espa-l">
            
            </div>
            
        @endforeach
    
    @endif
</div>

@endsection