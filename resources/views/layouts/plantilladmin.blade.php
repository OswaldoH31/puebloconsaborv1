<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleOriginal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/all.min.css') }}" rel="stylesheet">
    
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/cargando.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/switch.css') }}"> --}}
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- Quite <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
    
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/fa5b266226.js" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>   
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


</head>
<body>

    <div class="headers">
            
        @forelse ($logos as $logo)
            <center>
             <img src="{{asset('storage').'/'.$logo->nombre}}" width="100%" alt="Huejutla">
            </center>
            
        @empty
            
        @endforelse
        
    </div>


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0B0B3B;">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
            <label class="Tit-P" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique ;font-size: large;">Menú</label>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="col-md-auto ml-auto">
                <div class="navegadors" >
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">
                            <a class="nav-link" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique ;font-size: large;" href="Administrador">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        
        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique; ;font-size: large;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Listado
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('Locales.show')}}">Lista de Locales</a>
                                <a class="dropdown-item" href="{{route('Usuarios.index')}}">Lista de Usuarios</a>
                                <a class="dropdown-item" href="{{route('Solicitudes.index')}}">Solicitudes</a>
                            </div>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique; ;font-size: large;"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Configuraciones
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('pie.index')}}">Pie de pagina</a>
                            <a class="dropdown-item" href="{{url('/HuejutlaA')}}">Huejutla</a>
                            <a class="dropdown-item" href="{{route('slider.index')}}">Slider Principal</a>
                            <a class="dropdown-item" href="{{route('sliderHuejutla.index')}}">Slider Huejutla</a>
                            </div>
        
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
                                        <img src="{{ asset(Auth::user()->profile_image) }}" class="rounded-circle" width="30"  height="30">
                                       
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        
                                        <a class="dropdown-item" href="{{route('profile.editAdmin')}}">Configuracion Perfil</a>
                                        

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
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>

        </div>
    </nav>


    @yield('breadcrumbs')
    @yield('carrusel')   
    @yield('content')
    
    {{-- Vue --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

    
<footer class="footer1">
    @foreach ($pies as $pie) 
            <div class="container-footer-all">
        
                <div class="container-body">

                    <div class="footer-colum-1">
                        <div class="colum2" >

                            <div class="seguir">
                                <div class="logo">
                                    <img class="imagen" src="{{asset('storage').'/'.$pie->Logo}}" alt="" >
                                </div>
                            </div>
                            
    
                            <div class="seguir">
                                <div class="row" >
                                    <ul class="footer_box">
                                        <center>
                                            <li><a class=".pla-p">Comparte</a></li>
                                        </center>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="seguir">
                                
                                <ul class="social">	
                                  <li class="facebook"><a href="{{$pie->Facebook}}"><span> </span></a></li>
                                  <li class="twitter"><a href="{{$pie->Twitter}}"><span> </span></a></li>
                                  <li class="instagram"><a href="{{$pie->Instagram}}"><span> </span></a></li>	
                                                                                        
                                </ul>
                            </div>
                            <div class="seguir">
                                <div class="row">
                                    <ul class="footer_box">
                                        <center>
                                            <li><a class=".pla-p">Siguenos</a></li>
                                        </center>
                                    </ul>
                                </div>
                            </div>
    
                        </div>
                    </div>

                    <div class="footer-colum-1">
                        <div class="colum3">
                            <ul  class="footer_box">
                                <h4>Informacion</h4>
                                <li><a  href="#">Nosotros</a></li>
                                <li><a class=".pla-p">{{$pie->Nosotros}}</a></li>
                                <li><a href="#">Directorio</a></li>
                                <li><a class=".pla-p">{{$pie->Directorio}}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="footer-colum-1">
                        <div class="colum3">

                            <ul class="footer_box">
                                <h4>Contacto</h4>
                                <div class="row2">
                                    <i class="icono fas fa-map-marker-alt"></i>
                                    
                                    <li><a class=".pla-p">{{isset($pie->Ubicacion)?$pie->Ubicacion:''}}</a></li>
                                </div>
    
                                <div class="row2">
                                    <i class="icono fas fa-phone-alt"></i>
                                    <li><a class=".pla-p" >{{$pie->Telefono}}</a></li>
                                </div>
    
                                <div class="row2">
                                    <i class="icono fas fa-envelope"></i>
                                    <li><a class=".pla-p">{{$pie->Correo}}</a></li>
                                </div>
                            </ul>
    
                        </div>
                    </div>


                </div>
                <div class="container-footer">
                    <div class="copyright">
                        <div class="informacion">
                            Copyright 2021-2022 | <a class="Aviso" href="{{route('AvisoPrivacidad.index')}}">Aviso de Privacidad</a> <a> | </a><a class="Aviso" href="">Terminos y Condiciones</a>
                        </div>
                    </div>

                </div>
            </div>

    @endforeach
</footer>
    

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>      --}}


</html>
