<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>

    <div class="headers">
        <center>
        <img src="{{asset('images/Huejutla.jpg')}}" width="1350px" alt="Huejutla">
        </center>
    </div>



    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0B0B3B;">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="col-md-4 ml-auto">
                <div class="navegadors">
                   <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique ;font-size: large;" href="{{route('Index')}}">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique; ;font-size: large;"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pueblo con sabor
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('Comidas')}}">Directorio</a>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique;font-size: large;" href="{{route('Huejutla')}}">Huejutla</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique; font-size: large;" href="{{route('Login')}}">Iniciar Sesion</a>
                        </li>

                    </ul>

                </div>
            </div>

            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>


    @yield('carrusel')
    
    
    
    @yield('content')

    @yield('contentComidas')
        

</body>





<footer class="footer1">
            <div class="container-footer-all">
        
                <div class="container-body">

                    <div class="colum2" >

                        <div class="seguir">
                            <div class="logo">
                                <img class="imagen" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://hidalgo.travel/wp-content/uploads/2017/11/logotipo-pueblos-con-sabor.png" >
                            </div>
                        </div>
                        

                        <div class="seguir">
                            <div class="row">
                            <ul class="footer_boxs">
                                    <center>
                                        <li><a>Comparte</a></li>
                                    </center>
                                </ul>
                            </div>
                        </div>

                        <div class="seguir">
                            
                            <ul class="social">	
							  <li class="facebook"><a href="#"><span> </span></a></li>
							  <li class="twitter"><a href="#"><span> </span></a></li>
							  <li class="instagram"><a href="#"><span> </span></a></li>	
							  									  				
						    </ul>
                        </div>
                        <div class="seguir">
                            <div class="row">
                                <ul class="footer_boxs">
                                    <center>
                                        <li><a>Siguenos</a></li>
                                    </center>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="colum3">
                        <ul class="footer_box">
							<h4>Informacion</h4>
							<li><a href="#">Nosotros</a></li>
							<li><a href="#">Directorio</a></li>
						</ul>
                    </div>

                    <div class="colum3">

                        <ul class="footer_box">
							<h4>Contacto</h4>
                            <div class="row2">
                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6I0ZEMDAzQTsiIGQ9Ik0yNTYsMEMxNTYuNjk4LDAsNzYsODAuNyw3NiwxODBjMCwzMy42LDkuMzAyLDY2LjMwMSwyNy4wMDEsOTQuNTAxbDE0MC43OTcsMjMwLjQxNA0KCWMyLjQwMiwzLjksNi4wMDIsNi4zMDEsMTAuMjAzLDYuOTAxYzUuNjk4LDAuODk5LDEyLjAwMS0xLjUsMTUuMy03LjJsMTQxLjItMjMyLjUxNkM0MjcuMjk5LDI0NC41MDEsNDM2LDIxMi40MDEsNDM2LDE4MA0KCUM0MzYsODAuNywzNTUuMzAyLDAsMjU2LDB6IE0yNTYsMjcwYy01MC4zOTgsMC05MC00MC44LTkwLTkwYzAtNDkuNTAxLDQwLjQ5OS05MCw5MC05MHM5MCw0MC40OTksOTAsOTANCglDMzQ2LDIyOC45LDMwNi45OTksMjcwLDI1NiwyNzB6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojRTUwMDI3OyIgZD0iTTI1NiwwdjkwYzQ5LjUwMSwwLDkwLDQwLjQ5OSw5MCw5MGMwLDQ4LjktMzkuMDAxLDkwLTkwLDkwdjI0MS45OTENCgljNS4xMTksMC4xMTksMTAuMzgzLTIuMzM1LDEzLjMtNy4zNzVMNDEwLjUsMjcyLjFjMTYuNzk5LTI3LjU5OSwyNS41LTU5LjY5OSwyNS41LTkyLjFDNDM2LDgwLjcsMzU1LjMwMiwwLDI1NiwweiIvPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />
                                <li><a>Huejutla de Reyes Hidalgo, calle Abasolo #112</a></li>
                            </div>

                            <div class="row2">
                                <img src="{{asset('images/telefono.png')}}">
                                <li><a>01-829-395-20</a></li>
                            </div>

                            <div class="row2">
                                <img src="{{asset('images/gmail.png')}}">
                                <li><a>puebloconsabor@gmail.com</a></li>
                            </div>
						</ul>

                    </div>


                </div>
                <div class="container-footer">
                    <div class="copyright">
                        <div class="informacion">
                            Copyright 2021-2022 | <a class="Aviso" href="{{route('Comidas')}}">Aviso de Privacidad</a> <a> | </a><a class="Aviso" href="">Terminos y Condiciones</a>
                        </div>
                    </div>

                </div>
            </div>

        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>   
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>     

</html>