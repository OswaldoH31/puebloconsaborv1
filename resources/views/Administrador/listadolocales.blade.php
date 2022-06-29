@extends('layouts.plantilladmin')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('ListadoLocales') }}
        </ol>
    </nav>
@endsection


@section('title','Locales')
@section('content')
<div class="contebus">
    {{-- <div class="sec-bus">
    <form class="for-bus" action="{{route('Locales.show')}}" method="get" >
        <fieldset>
            <input type="Buscar" class="inp-b"  placeholder="Buscar..."  name="texto" value="{{$texto}}" required/>
            <button class="bot-bus" type="submit">
                <i class="fas fa-search"></i>
            </button>

        </fieldset>

    </form>
    </div>  --}}

    <div id="app">
        <App/>
    </div>

    <div class="conteus">
        <form class="for-bus" action="{{route('Locales.show')}}" method="get">
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
    @if(count($Locales)<=0)    
        <h4 class="ti-pie">No hay Resultados</h4>
    @else
        @foreach($Locales as $local)
            <div class="sec-pie">
                <h4 class="ti-pie">Lista de Locales</h4>
                <div class="lineas">
                    <div class="diamond"></div>
                </div>


                <div class="cont-infp">

                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-key"></i> Id</h4>
                        <div class="cont-bdp">{{$local->id}}</div>
                    </div>
                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-user"></i> Propietario</h4>
                        @foreach ($propietarios as $propietario)
                            <div class="cont-bdp" >{{$propietario->name}} {{$propietario->firstname}} {{$propietario->lastname}}</div>
                        @endforeach
                        
                    </div>
                </div>


                <div class="cont-infp">

                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-store"></i> Local</h4>
                        <div class="cont-bdp">{{$local->Nombre}}</div>
                    </div>
                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-store"></i> Número de Local</h4>
                        <div class="cont-bdp">{{$local->Numerolocal}}</div>
                    </div>
                </div>

                <div class="cont-infp">

                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-map-marked-alt"></i> Municipio</h4>
                        <div class="cont-bdp">{{$local->Municipio}}</div>
                    </div>
                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-map-marked-alt"></i> Colonia</h4>
                        <div class="cont-bdp">{{$local->Colonia}}</div>
                    </div>
                </div>


                <div class="cont-infp">

                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-map-marked-alt"></i> Calle</h4>
                        <div class="cont-bdp">{{$local->Municipio}}</div>
                    </div>
                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-map-marked-alt"></i> Código Postal</h4>
                        <div class="cont-bdp">{{$local->CP}}</div>
                    </div>
                </div>


                <div class="cont-infp">

                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-phone-alt"></i> Teléfono</h4>
                        <div class="cont-bdp">{{$local->Telefono}}</div>
                    </div>
                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-envelope"></i> Correo</h4>
                        <div class="cont-bdp">{{$local->Email}}</div>
                    </div>
                </div>


                <div class="cont-infp">

                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-align-center"></i> Descripción</h4>
                        <div class="cont-bdp">{{$local->Descripcion}}</div>
                    </div>
                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="far fa-sun"></i> Distintivo</h4>
                        <div class="cont-bdp">{{$local->Distintivo}}</div>
                    </div>
                </div>
                



                <div class="cont-infp">

                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-globe"></i> Sitio Web</h4>
                        <div class="cont-bdp">{{$local->Sitioweb}}</div>
                    </div>
                    <div class="cont-pp1">
                        <h4 class="ti-lop"><i class="fas fa-toggle-on"></i> Estado</h4>
                        @if($local->Estado == 1)
                        <div class="cont-bdp">Aceptado</div>
                        @else
                        <div class="cont-bdp">Rechazado</div>
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
                        <div class="cont-bdpi"><img src="{{asset($local->file)}}" style="width: 150px; height: 175px; display: block; margin: auto; padding-top: 10px;"  ></div>
                    </div></h4>
                    </div>
                </div>
            
                <div class="lineas">
                    <div class="diamond"></div>
                </div>
                <div class="espa-l"><div>
                
                </div>
                <div class="espa-l">
                    {!!$Locales->links()!!}
                </div>
                </div>
                </div>
                
            
            <div class="espa-l">
            
            </div>
        @endforeach
        
    @endif
</div>

@endsection