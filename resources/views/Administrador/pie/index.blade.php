@extends('layouts.plantilladmin')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('Piepagina') }}
        </ol>
    </nav>
@endsection



@section('title','Pie de Pagina')
@section('content')
<div class="cont-pie">
    <h2 class="titulo">Pie de Página</h2>
    @foreach ($pies as $pie) 
        <div class="sec-pie">
            <h4 class="ti-pie">Información de Contacto</h4>
            <div class="lineas">
                <div class="diamond"></div>
            </div>
            <div class="cont-infp">
                <div class="cont-p1">
                <h4 class="ti-lop"><i class="fas fa-map-marker-alt"></i> Ubicación</h4>
                <div class="cont-bdp">{{$pie->Ubicacion}}</div>
                </div>
                <div class="cont-p2">
                <h4 class="ti-lop"><i class="fas fa-phone-alt"></i> Telefono</h4>
                <div class="cont-bdp">{{$pie->Telefono}}</div>
                </div>
                <div class="cont-p3">
                <h4 class="ti-lop"><i class="fas fa-envelope"></i> Correo Electrónico</h4>
                <div class="cont-bdp">{{$pie->Correo}}</div>
                </div>
            </div>
            <h4 class="ti-pie">Redes Sociales</h4>
            <div class="lineas">
                <div class="diamond"></div>
            </div>
            <div class="cont-infp">
                <div class="cont-p1">
                <h4 class="ti-lop"><i class="fab fa-facebook"></i> Facebook</h4>
                <div class="cont-bdp">{{$pie->Facebook}}</div>
                </div>
                <div class="cont-p2">
                <h4 class="ti-lop"><i class="fab fa-twitter"></i> Twitter</h4>
                <div class="cont-bdp">{{$pie->Twitter}}</div>
                </div>
                <div class="cont-p3">
                <h4 class="ti-lop"><i class="fab fa-instagram-square"></i> Instagram</h4>
                <div class="cont-bdp">{{$pie->Instagram}}</div>
                </div>
            </div>
            <h4 class="ti-pie"><i class="fas fa-image"></i> Logotipo</h4>
            <div class="lineas">
                <div class="diamond"></div>
            </div>
            <div class="cont-infp">
                <div class="cont-pl">
                <h4 class="ti-lo"><div class="img-log">
                    <div class="cont-bdpi"><img src="{{asset('storage').'/'.$pie->Logo}}" style="width: 150px; height: 175px; display: block; margin: auto; padding-top: 10px;"  ></div>
                </div></h4>
                </div>
            </div>
            <h4 class="ti-pie"><i class="fas fa-file-signature"></i>  Términos y Condiciones</h4>
            <div class="lineas">
                <div class="diamond"></div>
            </div>
            <div class="cont-infp">
                <div class="cont-bdp">
                    <textarea name="textarea" rows="5" cols="95">{{$pie->Terminos}}</textarea>
                </div>
            </div>
            <h4 class="ti-pie"><i class="fas fa-info-circle"></i>  Información de la Compañia</h4>
            <div class="lineas">
                <div class="diamond"></div>
            </div>
            <div class="cont-infp">
                <div class="cont-pp1">
                    <h4 class="ti-lop"><i class="fab fa-facebook"></i> Nosotros</h4>
                    <div class="cont-bdp">{{$pie->Nosotros}}</div>
                    </div>
                    <div class="cont-pp1">
                    <h4 class="ti-lop"><i class="far fa-address-book"></i> Directorio</h4>
                    <div class="cont-bdp">{{$pie->Directorio}}</div>
                    </div>
                </div>
                <div class="espa-l"><div>
            </div>
            <div class="lineas">
                <div class="diamond"></div>
            </div>
            <div class="espa-l"><div>
            <a href="{{url('/pie/'.$pie->id.'/edit')}}"class="button" style="text-decoration:none; color:white; float:right; text-align:center;" >
                Editar
            </a>
              
            </div>
            </div>
            </div>
         
        <div class="espa-l">
         
        </div>
    @endforeach
</div>
@endsection