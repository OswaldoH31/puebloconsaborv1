@extends('layouts.plantilladmin')

{{-- 
@section('carrusel')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">

            @forelse ($sliders as $slider)
                <div class="carousel-item @if ($loop -> index==0) active @endif">
                    <img class="img" src="../../imagenes/{{$slider->nombre}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        
                        <a href="{{$slider->url}}"><h5 class="Title-s">{{$slider->titulo}}</h5></a>
                        <p class="desc-s">{{$slider->descripcion}}</p>
                    </div>
                </div>
            @empty
                
            @endforelse
            
        </div>

        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
           
    </div>
    
@endsection --}}



@section('content')
    <div id="app">
        <Appi/>
    </div>
<div class="seccionT"><h2 class="titulo">Lo Mejor</h2></div>
<div class="secciones1"> 
        
        <div style="padding: 10px;">
            <div class="sec1">
                <h5>Zacahuil</h5>
            </div>
            <div class="seccion1">
                <div class="view3 view-ninth3"><a href="single.html">
                <img style="width: 100%; height: 100%; object-fit: cover;" src="https://www.alosanluis.com/wp-content/uploads/2016/02/zacahuil_veracruz.jpeg" class="img-responsive" alt="" />
                <div class="mask mask-1"> </div>
                <div class="mask mask-2"> </div>
                    <div class="content3">
                    <h2>Caracteristica</h2>
                    <p>Tamal de gran tamaño con un lechón entero , envuelto en hojas de plátano y cocido en barbacoa.</p>
                    </div>
                    </a> 
                </div>
            </div>
        </div>
        
        <div style="padding: 10px;">
            <div class="sec2">
                <h5>Enchiladas</h5>
            </div>
            <div class="seccion2" >
                <div class="view1 view-ninth1"><a href="single.html">
                    <img style="width: 100%; height: 100%; object-fit: cover;" src="https://media-cdn.tripadvisor.com/media/photo-s/0f/f0/f7/2a/enchiladas-huastecas.jpg" class="img-responsive" alt="" />
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                    <div class="content1">
                    <h2>Caracteristica</h2>
                    <p> Se elabora con tortilla de maíz, bañada en una salsa, picante o no, utilizando un chile en su preparación. </p>
                    </div>
                    </a> 
                </div>
            </div>
        </div>

        


        <div class="secciones2">

            <div style="padding: 10px;">
                <div class="sec3">
                    <h5>Bocoles</h5>
                </div>
                <div class="seccion3">
                    <div class="view2 view-ninth2"><a href="single.html">
                        <img style="width: 100%; height: 100%; object-fit: cover;"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOrADqNe6BzWY5APAvTmX8Vp2oScFJYvibdw&usqp=CAU" class="img-responsive" alt="" />
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                        <div class="content2">
                        <h2>Caracteristica</h2>
                        <p>El bocol es una tortilla gruesa de masa de maíz mezclada con manteca de res, cerdo o vegetal, cocidas en un comal.</p>
                        </div>
                        </a> 
                    </div>
                </div>
            </div>

            <div style="padding: 10px;">
                <div class="sec4">
                    <h5>Mole</h5>
                </div>

                <div class="seccion4">
                    <div class="view4 view-ninth4"><a href="single.html">
                        <img style="width: 100%; height: 100%; object-fit: cover;"  src="https://elgourmet.s3.amazonaws.com/recetas/cover/mole-_9IMJjkql3RCWT1eg6AHUD8PKyZLh7o.png" class="img-responsive" alt="" />
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                        <div class="content4">
                        <h2>Caracteristica</h2>
                        <p>Se refiere a varios tipos de salsas mexicanas muy condimentadas hechas principalmente a base de chiles y especias.</p>
                        </div>
                        </a> 
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection