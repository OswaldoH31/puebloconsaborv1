@extends('layouts.plantilladmin')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('Huejutla') }}
        </ol>
    </nav>
@endsection


@section('title','Huejutla')

@section('content')
<div class="cont-gHue">
    <h2 class="titulo"></h2>
    @foreach ($Huejutlas as $Huejutla ) 
        <div class="sec-pie">
            <h4 class="ti-pie">{{$Huejutla->Ciudad}}</h4>
            <p align="justify" style="padding: 20px">{{$Huejutla->Concepto}}</p>
            <div class="lineas">
                <div class="diamond"></div>
            </div>
            <div class="cont-infp">
                <div class="cont-hue">
                    {{$Huejutla->Historia}}
                </div>
            </div>
            <h4 class="ti-pie">¿Por qué pueblo con sabor?</h4>
            <div class="lineas">
                <div class="diamond"></div>
            </div>
            <div class="cont-infp">
                <div class="cont-hue">
                    {{$Huejutla->Descripcion}}
                </div>
            </div>
            <h4 class="ti-pie">{{$Huejutla->Descrip_Ubicacion}}</h4>
            <div class="lineas">
                <div class="diamond"></div>
            </div>
            <div class="cont-infp">
                <div class="cont-hue">
                <center>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238158.59518521733!2d-98.58657734684505!3d21.14332088708018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d726f57945adbb%3A0xe138e5b3d6108985!2sHuejutla%20de%20Reyes%2C%20Hgo.!5e0!3m2!1ses-419!2smx!4v1626896345619!5m2!1ses-419!2smx"  style="border:0; width:80%; height:500px;" allowfullscreen="" loading="lazy"></iframe>
                    <a href="https://maps.app.goo.gl/aUKsAQAVoc2p86dx7"></a>
                </center>
                </div>
                <div class="cont-hue">
                    {{$Huejutla->pie_Ubicacion}}
                </div>
            </div>
            <div class="lineas">
                <div class="diamond"></div>
            </div>
            <div class="espa-l"></div>
            <div style="padding: 15px">
                <a href="{{url('/HuejutlaA/'.$Huejutla->id.'/edit')}}"class="button" style="text-decoration:none; color:white; float:right; text-align:center;" >
                    Editar
                </a>
            </div>
            <div class="espa-l"></div>
              
        </div>
        <div class="espa-l"></div>
        <div class="espa-l"></div>
    @endforeach
</div>
@endsection

