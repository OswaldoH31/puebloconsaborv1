@extends('layouts.app')

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


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('User') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



