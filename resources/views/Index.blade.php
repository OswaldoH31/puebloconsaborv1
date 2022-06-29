@extends('layouts/app')


@section('title', 'Pueblo con sabor')


@section('nav-bar')

    

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0B0B3B;">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="col-md-4 ml-auto">
                <div class="navegadors">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">
                            <a class="nav-link" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique ;font-size: large;" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique; ;font-size: large;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pueblo con sabor
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Directorio</a>
                            </div>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique;font-size: large;" href="#">Huejutla</a>
                        </li>


                        <!-- Authentication Links -->

                        <li class="nav-item">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique; font-size: large;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique; font-size: large;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        
                                        <a class="dropdown-item" href="#">Configuracion Perfil</a>
                                        

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </li>
                    </ul>
                </div>
            </div>


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

        </div>
    </nav>

@endsection




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
                                     
                    <img class="img" src="{{asset('storage').'/'.$slider->nombre}}" class="d-block w-100" alt="...">
                    
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
    
@endsection






@section('content')

    <div id="app">
        <Appi/>
    </div>
    
    

<div class="seccionT"><h2 class="titulo">Lo Mejor</h2></div>
<div class="secciones1"> 
        
        <div class="sep-c">
            <div style="padding: 10px;">
                <div class="sec1">
                    <h5>Zacahuil</h5>
                </div>
                <div class="seccion1">
                    <div class="view3 view-ninth3"><a href="single.html">
                    <img style="width: 100%; height: 100%; object-fit: cover;" src="https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2017/07/zacahuil.jpg" class="img-responsive" alt="" />
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
        </div>

        


        <div class="sep-c">
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

    </div>

    

@endsection