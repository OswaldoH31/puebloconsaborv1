@extends('layouts/app')


@section('content')

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">

            @forelse ($Huejutlasliders as $Huejutlaslider)
                <div class="carousel-item @if ($loop -> index==0) active @endif">
                    
                    <img class="img" src="{{asset('storage').'/'.$Huejutlaslider->nombre}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        
                        <a href="{{$Huejutlaslider->url}}"><h5 class="Title-s">{{$Huejutlaslider->titulo}}</h5></a>
                        <p class="desc-s">{{$Huejutlaslider->descripcion}}</p>
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





    <div class="Tit-H">
        <div class="seccionT1"><h2 class="titulo">Huejutla</h2></div>
    </div>
    <br>
    
    <div class= "Huejutla">

        @forelse ($Huejutlas as $Huejutla)
            <h3 class="parrafo-H">Historia</h3> 
            <p class="Concepto-H">{{$Huejutla->Concepto}}</p>
            <p class="parrafo-H">{{$Huejutla->Historia}}</p><br>
            

            <h3>¿Pueblo con sabor?</h3>
            <p class="parrafo-H">{{$Huejutla->Descripcion}}</p>
        @empty
            
        @endforelse
        <div class="mapa-1">
            <div id ="map"></div>
        </div> 
        <script class="map-1" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDN3XSKZ7YhRQDFgqWROajdGFPmMiXDlEo&callback=initMap" async defer></script>
        
    </div>

        

@endsection
