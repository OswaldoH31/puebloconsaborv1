@extends('layouts.app')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('Directorio.menu', $local->nombre) }}
        </ol>
    </nav>
@endsection

@section('content1')


<div>
    <div class="seccionT">
    <h2 class="titulo">{{$local->nombre}}</h2>
</div>
<div class="Menu-Sp">
                
    <div class="row-1-H">
        <div class="inf-m">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNTYsMEMxNTYuMDExLDAsNzQuNjY3LDgxLjM0NCw3NC42NjcsMTgxLjMzM2MwLDk2LjcyNSwxNjUuNzgxLDMxNy4wOTksMTcyLjg0MywzMjYuNDQzDQoJCQljMS45ODQsMi42NjcsNS4xNjMsNC4yMjQsOC40OTEsNC4yMjRjMy4zMjgsMCw2LjUwNy0xLjU1Nyw4LjQ5MS00LjIyNGM3LjA2MS05LjM0NCwxNzIuODQzLTIyOS43MTcsMTcyLjg0My0zMjYuNDQzDQoJCQlDNDM3LjMzMyw4MS4zNDQsMzU1Ljk4OSwwLDI1NiwweiBNMjU2LDI3Ny4zMzNjLTUyLjkyOCwwLTk2LTQzLjA3Mi05Ni05NmMwLTUyLjkyOCw0My4wNzItOTYsOTYtOTZzOTYsNDMuMDcyLDk2LDk2DQoJCQlDMzUyLDIzNC4yNjEsMzA4LjkyOCwyNzcuMzMzLDI1NiwyNzcuMzMzeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
            <a class="T-U" href="">{{$local->Municipio}}, calle {{$local->Calle}} {{$local->Numerolocal}}</a>
        </div>
    </div>

    <div class="row-2-C">
        <div class="inf-m">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNTYsMEMxMTQuODQ1LDAsMCwxMTQuODM5LDAsMjU2czExNC44NDUsMjU2LDI1NiwyNTZjMTQxLjE2MSwwLDI1Ni0xMTQuODM5LDI1Ni0yNTZTMzk3LjE1NSwwLDI1NiwweiBNMjU2LDQ3NC42MjgNCgkJCUMxMzUuNDUsNDc0LjYyOCwzNy4zNzIsMzc2LjU1LDM3LjM3MiwyNTZTMTM1LjQ1LDM3LjM3MiwyNTYsMzcuMzcyczIxOC42MjgsOTguMDc3LDIxOC42MjgsMjE4LjYyMg0KCQkJQzQ3NC42MjgsMzc2LjU1LDM3Ni41NSw0NzQuNjI4LDI1Niw0NzQuNjI4eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMzQzLjIwMiwyNTZoLTgwLjk3M1YxNDMuODgzYzAtMTAuMzIxLTguMzY1LTE4LjY4Ni0xOC42ODYtMTguNjg2cy0xOC42ODYsOC4zNjUtMTguNjg2LDE4LjY4NnYxMzAuODAzDQoJCQljMCwxMC4zMjEsOC4zNjUsMTguNjg2LDE4LjY4NiwxOC42ODZoOTkuNjU5YzEwLjMyMSwwLDE4LjY4Ni04LjM2NSwxOC42ODYtMTguNjg2UzM1My41MjMsMjU2LDM0My4yMDIsMjU2eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
            <a class="T-U" href=""> Cerrado Ahora: Ver todos los Horarios</a>
        </div>
    </div>

    <div class="row-3-T">
        <div class="inf-m">
            <img src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyLjAyMSA1MTIuMDIxIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMi4wMjEgNTEyLjAyMSIgd2lkdGg9IjUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Zz48cGF0aCBkPSJtMzY3Ljk4OCA1MTIuMDIxYy0xNi41MjggMC0zMi45MTYtMi45MjItNDguOTQxLTguNzQ0LTcwLjU5OC0yNS42NDYtMTM2LjEyOC02Ny40MTYtMTg5LjUwOC0xMjAuNzk1cy05NS4xNS0xMTguOTEtMTIwLjc5NS0xODkuNTA4Yy04LjI0MS0yMi42ODgtMTAuNjczLTQ2LjEwOC03LjIyNi02OS42MTIgMy4yMjktMjIuMDE2IDExLjc1Ny00My4zODkgMjQuNjYzLTYxLjgwOSAxMi45NjMtMTguNTAxIDMwLjI0NS0zMy44ODkgNDkuOTc3LTQ0LjUgMjEuMDQyLTExLjMxNSA0NC4wMDktMTcuMDUzIDY4LjI2NS0xNy4wNTMgNy41NDQgMCAxNC4wNjQgNS4yNzEgMTUuNjQ1IDEyLjY0N2wyNS4xMTQgMTE3LjE5OWMxLjEzNyA1LjMwNy0uNDk0IDEwLjgyOS00LjMzMSAxNC42NjdsLTQyLjkxMyA0Mi45MTJjNDAuNDgyIDgwLjQ4NiAxMDYuMTcgMTQ2LjE3NCAxODYuNjU2IDE4Ni42NTZsNDIuOTEyLTQyLjkxM2MzLjgzOC0zLjgzNyA5LjM2MS01LjQ2NiAxNC42NjctNC4zMzFsMTE3LjE5OSAyNS4xMTRjNy4zNzcgMS41ODEgMTIuNjQ3IDguMTAxIDEyLjY0NyAxNS42NDUgMCAyNC4yNTYtNS43MzggNDcuMjI0LTE3LjA1NCA2OC4yNjYtMTAuNjExIDE5LjczMi0yNS45OTkgMzcuMDE0LTQ0LjUgNDkuOTc3LTE4LjQxOSAxMi45MDYtMzkuNzkyIDIxLjQzNC02MS44MDkgMjQuNjYzLTYuODk5IDEuMDEzLTEzLjc5NyAxLjUxOC0yMC42NjggMS41MTl6bS0yMzYuMzQ5LTQ3OS4zMjFjLTMxLjk5NSAzLjUzMi02MC4zOTMgMjAuMzAyLTc5LjI1MSA0Ny4yMTctMjEuMjA2IDMwLjI2NS0yNi4xNTEgNjcuNDktMTMuNTY3IDEwMi4xMzIgNDkuMzA0IDEzNS43MjYgMTU1LjQyNSAyNDEuODQ3IDI5MS4xNTEgMjkxLjE1MSAzNC42NDEgMTIuNTg0IDcxLjg2NiA3LjY0IDEwMi4xMzItMTMuNTY3IDI2LjkxNS0xOC44NTggNDMuNjg1LTQ3LjI1NiA0Ny4yMTctNzkuMjUxbC05NS4zNDEtMjAuNDMtNDQuODE2IDQ0LjgxNmMtNC43NjkgNC43NjktMTIuMDE1IDYuMDM2LTE4LjExNyAzLjE2OC05NS4xOS00NC43Mi0xNzIuMjQyLTEyMS43NzItMjE2Ljk2Mi0yMTYuOTYyLTIuODY3LTYuMTAzLTEuNjAxLTEzLjM0OSAzLjE2OC0xOC4xMTdsNDQuODE2LTQ0LjgxNnoiLz48L2c+PC9zdmc+" />
            <a class="T-U">{{$local->Telefono}}</a>
        </div>
    </div>

    <div class="row-4-P">
        <div class="inf-m">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDIwNC4yMzIgMjA0LjIzMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjA0LjIzMiAyMDQuMjMyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cGF0aCBkPSJNNC41OTUsMTgxLjcxaDE5NS4wMjFjMi41MzgsMCw0LjU5NS0yLjA1Nyw0LjU5NS00LjU5NXYtNC4xMzZjMC4wMDMtMC4wNjksMC4wMjEtMC4xMzMsMC4wMjEtMC4yMDMNCgljMC0wLjc1LTAuMTgtMS40NTgtMC40OTktMi4wODNsLTE5Ljk0Mi01MC4yVjI3LjExNmMwLTIuNTM4LTIuMDU3LTQuNTk1LTQuNTk1LTQuNTk1SDI1LjAxNmMtMi41MzgsMC00LjU5NSwyLjA1Ny00LjU5NSw0LjU5NQ0KCXY5My4zNzdMMC4zMjQsMTcxLjA4Yy0wLjA5LDAuMjI2LTAuMTUzLDAuNDU3LTAuMjA2LDAuNjljLTAuMDEzLDAuMDU5LTAuMDIzLDAuMTE4LTAuMDM0LDAuMTc4Yy0wLjA1LDAuMjY4LTAuMDgxLDAuNTM5LTAuMDgyLDAuODENCgljMCwwLjAwNi0wLjAwMiwwLjAxMi0wLjAwMiwwLjAxOHY0LjMzOUMwLDE3OS42NTMsMi4wNTcsMTgxLjcxLDQuNTk1LDE4MS43MXogTTgyLjM0MywxNjYuODgxbDQuMjA0LTEzaDMxLjExN2w0LjIwNCwxM0g4Mi4zNDN6DQoJIE0zMy45MywzNC4yNDRoMTM2LjM1MnY4MEgzMy45M1YzNC4yNDR6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
            <a class="T-U" href="">Pagina web</a>
        </div>
    </div>

    <div class="row-5-M">
        <div class="inf-m">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00OTguNjgyLDQzNS4zMjZMMjk3LjkxNywyMzQuNTZMNjMuMzU3LDBINDUuMDI2bC0zLjc0Myw5LjUxMWMtOS44NzksMjUuMTA0LTE0LjEsNTAuNzgtMTIuMjA1LDc0LjI0OQ0KCQkJYzIuMTYsMjYuNzUyLDEyLjMyMyw0OS45MTMsMjkuMzkyLDY2Ljk4MkwyNDEuNTgsMzMzLjg1MmwyNC4xNTItMjQuMTUybDE2OS4yODUsMTg5LjI5M2MxNi44NCwxNi44NCw0NS44MjUsMTcuODQsNjMuNjY1LDANCgkJCUM1MTYuMjM2LDQ4MS40MzksNTE2LjIzNiw0NTIuODc5LDQ5OC42ODIsNDM1LjMyNnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTE1Ni43MjgsMjkxLjQ0MkwxMy4zMTcsNDM0Ljg1M2MtMTcuNTUyLDE3LjU1Mi0xNy41NTIsNDYuMTEzLDAsNjMuNjY1YzE2LjY3NCwxNi42NzQsNDUuNTE5LDE4LjE0Niw2My42NjUsMA0KCQkJbDE0My40MTItMTQzLjQxMkwxNTYuNzI4LDI5MS40NDJ6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00OTAuMjUzLDg1LjI0OWwtODEuMzUxLDgxLjM1bC0yMS4yMjMtMjEuMjIybDgxLjM1MS04MS4zNTFsLTIxLjIyMi0yMS4yMjJsLTgxLjM1LDgxLjM1bC0yMS4yMjItMjEuMjIybDgxLjM1MS04MS4zNQ0KCQkJTDQwNS4zNjYsMC4zNjFMMjk5LjI1NiwxMDYuNDcxYy0xMi45ODEsMTIuOTgxLTIwLjczMiwzMC4yMTctMjEuODI4LDQ4LjUzNWMtMC4yNzcsNC42NDEtMS4zMjksOS4yMDYtMy4wNzQsMTMuNTQ4bDY4LjkyOSw2OC45MjkNCgkJCWM0LjM0Mi0xLjc0Nyw4LjkwOC0yLjc5OCwxMy41NDgtMy4wNzVjMTguMzE4LTEuMDkzLDM1LjU1NC04Ljg0Niw0OC41MzUtMjEuODI3bDEwNi4xMS0xMDYuMTA5TDQ5MC4yNTMsODUuMjQ5eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
            <a class="T-U" href="Menu">Menu</a>
        </div>
    </div>
    
</div>
</div>
@endsection

@section('content')

    <div class="MenuEsp">
        <div class="MenuT">
            <div>
                <label class="Menu-M">Menu</label>
            </div>
        </div>

        <div class="sep-Tit">
            <div class="D-1">
                {{-- <a style="color: #000000;" href=""><label class="T-M">Platillos</label> </a> --}}
                <div class="Platillo-S">
                    <a href="{{url('/Directorio/Listaplatillos/'.$local->id)}}" class="T-M">Platillos</a>
                </div>
                
                @foreach ($Platillos as $Platillo)
                    <div class="izq-P">
                        <div class="T-P">
                            
                                <div class="D-1">
                                    <div class="imagen-P">
                                        <img class="imagen-T" src="{{asset($Platillo->Imagen)}}" width="220px" height="170px" object-fit= "cover"; alt="Zacahuil">
                            
                                    </div>
                                    
                                    <div class="Caract-1">
                                        <div class="Caract-2">
                                            <label class="C-Z">{{$Platillo->Nombre}}</label> 
                                        </div>
                                        <div>
                                            <label class="C-C">Costo: </label><label style="margin-left: 10px"> ${{$Platillo->Costo}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>     
                @endforeach
            </div>

            <div class="D-1">
                <div class="Bebida-S">
                    <a href="{{url('/Directorio/Listabebidas/'.$local->id)}}" class="T-M">Bebidas</a>
                </div>
                @foreach ($Bebidas as $Bebida)
                    <div class="der-B">
                        <div class="T-P">
            
                                <div class="D-1">
                                    <div class="imagen-P">
                                        <img class="imagen-T" src="{{asset($Bebida->Imagen)}}" width="220px" height="170px" object-fit= "cover"; alt="Zacahuil">
                            
                                    </div>
                                    
                                    <div class="Caract-1">
                                        <div class="Caract-2">
                                            <label class="C-Z">{{$Bebida->Nombre}}</label> 
                                        </div>
                                        
                                        <div>
                                            <label class="C-C">Costo: </label><label style="margin-left: 10px"> ${{$Bebida->Costo}}</label>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div> 
                @endforeach 
            </div>
        </div>
    </div>
            

    <div class="MenuEsp1">
        <div class="MenuT">
            
        </div>
        <div class="div-S">
            <div class="div-U">
                <div class="Tit-Card">
                    <label class="Tit-Ar">Ubicacion e Informacion del contacto</label>
                </div>
                <div class="div-img">
                    <img class="div-ub" src="{{asset('imagenes/ubicacion.png')}}">
                </div>
                <div class="div-txt">

                    <div class="row-1">
                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNTYsMEMxNTYuMDExLDAsNzQuNjY3LDgxLjM0NCw3NC42NjcsMTgxLjMzM2MwLDk2LjcyNSwxNjUuNzgxLDMxNy4wOTksMTcyLjg0MywzMjYuNDQzDQoJCQljMS45ODQsMi42NjcsNS4xNjMsNC4yMjQsOC40OTEsNC4yMjRjMy4zMjgsMCw2LjUwNy0xLjU1Nyw4LjQ5MS00LjIyNGM3LjA2MS05LjM0NCwxNzIuODQzLTIyOS43MTcsMTcyLjg0My0zMjYuNDQzDQoJCQlDNDM3LjMzMyw4MS4zNDQsMzU1Ljk4OSwwLDI1NiwweiBNMjU2LDI3Ny4zMzNjLTUyLjkyOCwwLTk2LTQzLjA3Mi05Ni05NmMwLTUyLjkyOCw0My4wNzItOTYsOTYtOTZzOTYsNDMuMDcyLDk2LDk2DQoJCQlDMzUyLDIzNC4yNjEsMzA4LjkyOCwyNzcuMzMzLDI1NiwyNzcuMzMzeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
                        <a class="T-U" href="">{{$local->Municipio}}, calle {{$local->Calle}} {{$local->Numerolocal}}</a>
                    </div>

                    <div class="row-1">
                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNTYsMEMxMTQuODQ1LDAsMCwxMTQuODM5LDAsMjU2czExNC44NDUsMjU2LDI1NiwyNTZjMTQxLjE2MSwwLDI1Ni0xMTQuODM5LDI1Ni0yNTZTMzk3LjE1NSwwLDI1NiwweiBNMjU2LDQ3NC42MjgNCgkJCUMxMzUuNDUsNDc0LjYyOCwzNy4zNzIsMzc2LjU1LDM3LjM3MiwyNTZTMTM1LjQ1LDM3LjM3MiwyNTYsMzcuMzcyczIxOC42MjgsOTguMDc3LDIxOC42MjgsMjE4LjYyMg0KCQkJQzQ3NC42MjgsMzc2LjU1LDM3Ni41NSw0NzQuNjI4LDI1Niw0NzQuNjI4eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMzQzLjIwMiwyNTZoLTgwLjk3M1YxNDMuODgzYzAtMTAuMzIxLTguMzY1LTE4LjY4Ni0xOC42ODYtMTguNjg2cy0xOC42ODYsOC4zNjUtMTguNjg2LDE4LjY4NnYxMzAuODAzDQoJCQljMCwxMC4zMjEsOC4zNjUsMTguNjg2LDE4LjY4NiwxOC42ODZoOTkuNjU5YzEwLjMyMSwwLDE4LjY4Ni04LjM2NSwxOC42ODYtMTguNjg2UzM1My41MjMsMjU2LDM0My4yMDIsMjU2eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
                        <a class="T-U" href=""> Cerrado Ahora: Ver todos los Horarios</a>
                    </div>

                    <div class="row-1">
                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDIwNC4yMzIgMjA0LjIzMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjA0LjIzMiAyMDQuMjMyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cGF0aCBkPSJNNC41OTUsMTgxLjcxaDE5NS4wMjFjMi41MzgsMCw0LjU5NS0yLjA1Nyw0LjU5NS00LjU5NXYtNC4xMzZjMC4wMDMtMC4wNjksMC4wMjEtMC4xMzMsMC4wMjEtMC4yMDMNCgljMC0wLjc1LTAuMTgtMS40NTgtMC40OTktMi4wODNsLTE5Ljk0Mi01MC4yVjI3LjExNmMwLTIuNTM4LTIuMDU3LTQuNTk1LTQuNTk1LTQuNTk1SDI1LjAxNmMtMi41MzgsMC00LjU5NSwyLjA1Ny00LjU5NSw0LjU5NQ0KCXY5My4zNzdMMC4zMjQsMTcxLjA4Yy0wLjA5LDAuMjI2LTAuMTUzLDAuNDU3LTAuMjA2LDAuNjljLTAuMDEzLDAuMDU5LTAuMDIzLDAuMTE4LTAuMDM0LDAuMTc4Yy0wLjA1LDAuMjY4LTAuMDgxLDAuNTM5LTAuMDgyLDAuODENCgljMCwwLjAwNi0wLjAwMiwwLjAxMi0wLjAwMiwwLjAxOHY0LjMzOUMwLDE3OS42NTMsMi4wNTcsMTgxLjcxLDQuNTk1LDE4MS43MXogTTgyLjM0MywxNjYuODgxbDQuMjA0LTEzaDMxLjExN2w0LjIwNCwxM0g4Mi4zNDN6DQoJIE0zMy45MywzNC4yNDRoMTM2LjM1MnY4MEgzMy45M1YzNC4yNDR6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
                        <a class="T-U" href="">Pagina web</a>
                    </div>

                    <div class="row-1">
                        <img src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyLjAyMSA1MTIuMDIxIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMi4wMjEgNTEyLjAyMSIgd2lkdGg9IjUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Zz48cGF0aCBkPSJtMzY3Ljk4OCA1MTIuMDIxYy0xNi41MjggMC0zMi45MTYtMi45MjItNDguOTQxLTguNzQ0LTcwLjU5OC0yNS42NDYtMTM2LjEyOC02Ny40MTYtMTg5LjUwOC0xMjAuNzk1cy05NS4xNS0xMTguOTEtMTIwLjc5NS0xODkuNTA4Yy04LjI0MS0yMi42ODgtMTAuNjczLTQ2LjEwOC03LjIyNi02OS42MTIgMy4yMjktMjIuMDE2IDExLjc1Ny00My4zODkgMjQuNjYzLTYxLjgwOSAxMi45NjMtMTguNTAxIDMwLjI0NS0zMy44ODkgNDkuOTc3LTQ0LjUgMjEuMDQyLTExLjMxNSA0NC4wMDktMTcuMDUzIDY4LjI2NS0xNy4wNTMgNy41NDQgMCAxNC4wNjQgNS4yNzEgMTUuNjQ1IDEyLjY0N2wyNS4xMTQgMTE3LjE5OWMxLjEzNyA1LjMwNy0uNDk0IDEwLjgyOS00LjMzMSAxNC42NjdsLTQyLjkxMyA0Mi45MTJjNDAuNDgyIDgwLjQ4NiAxMDYuMTcgMTQ2LjE3NCAxODYuNjU2IDE4Ni42NTZsNDIuOTEyLTQyLjkxM2MzLjgzOC0zLjgzNyA5LjM2MS01LjQ2NiAxNC42NjctNC4zMzFsMTE3LjE5OSAyNS4xMTRjNy4zNzcgMS41ODEgMTIuNjQ3IDguMTAxIDEyLjY0NyAxNS42NDUgMCAyNC4yNTYtNS43MzggNDcuMjI0LTE3LjA1NCA2OC4yNjYtMTAuNjExIDE5LjczMi0yNS45OTkgMzcuMDE0LTQ0LjUgNDkuOTc3LTE4LjQxOSAxMi45MDYtMzkuNzkyIDIxLjQzNC02MS44MDkgMjQuNjYzLTYuODk5IDEuMDEzLTEzLjc5NyAxLjUxOC0yMC42NjggMS41MTl6bS0yMzYuMzQ5LTQ3OS4zMjFjLTMxLjk5NSAzLjUzMi02MC4zOTMgMjAuMzAyLTc5LjI1MSA0Ny4yMTctMjEuMjA2IDMwLjI2NS0yNi4xNTEgNjcuNDktMTMuNTY3IDEwMi4xMzIgNDkuMzA0IDEzNS43MjYgMTU1LjQyNSAyNDEuODQ3IDI5MS4xNTEgMjkxLjE1MSAzNC42NDEgMTIuNTg0IDcxLjg2NiA3LjY0IDEwMi4xMzItMTMuNTY3IDI2LjkxNS0xOC44NTggNDMuNjg1LTQ3LjI1NiA0Ny4yMTctNzkuMjUxbC05NS4zNDEtMjAuNDMtNDQuODE2IDQ0LjgxNmMtNC43NjkgNC43NjktMTIuMDE1IDYuMDM2LTE4LjExNyAzLjE2OC05NS4xOS00NC43Mi0xNzIuMjQyLTEyMS43NzItMjE2Ljk2Mi0yMTYuOTYyLTIuODY3LTYuMTAzLTEuNjAxLTEzLjM0OSAzLjE2OC0xOC4xMTdsNDQuODE2LTQ0LjgxNnoiLz48L2c+PC9zdmc+" />
                        <li><a class="T-U">{{$local->Telefono}}</a></li>
                    </div>

                    <div class="row-1">
                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjM4OC40MjRweCIgaGVpZ2h0PSIzODguNDI0cHgiIHZpZXdCb3g9IjAgMCAzODguNDI0IDM4OC40MjQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDM4OC40MjQgMzg4LjQyNDsiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggZD0iTTM4NC4yMDIsNTkuMTExSDQuMjA5QzEuODg4LDU5LjExMSwwLDYxLDAsNjMuMzN2MjYxLjc2NmMwLDIuMzMsMS44ODgsNC4yMTcsNC4yMDksNC4yMTdoMzc5Ljk5Mw0KCQljMi4zMTcsMCw0LjIyMi0xLjg4Nyw0LjIyMi00LjIxN1Y2My4zM0MzODguNDI0LDYxLDM4Ni41Miw1OS4xMTEsMzg0LjIwMiw1OS4xMTF6IE0zMTkuOTM3LDkyLjg4OEwxOTQuMjEyLDE4NS4wOUw2OC40ODUsOTIuODg4DQoJCUgzMTkuOTM3eiBNMzU0LjY0NywyOTUuNTM1SDMzLjc3OVYxMDkuMzI4bDE1Ny45MzUsMTE1LjgyYzEuNDk0LDEuMDg5LDMuNTA4LDEuMDg5LDUuMDA0LDBsMTU3LjkzNC0xMTUuODJ2MTg2LjIwN0gzNTQuNjQ3eiIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />
                        <li><a class="T-U">{{$local->email}}</a></li>
                    </div>
                </div>
            </div>
    
            <div class="div-D">
                <div class="Tit-Card">
                    <label class="Tit-Ar2">Detalles</label>
                </div>
                <div class="Det-M">
                    <label class="Det-T" >TIPOS DE COMIDA</label><br>
                    <label class="Det-C">Enchiladas,Bocoles,Flautas</label>
                </div>

                <div class="Det-M">
                    <label class="Det-T" >COMIDAS</label><br>
                    <label class="Det-C">{{$local->comidas}}</label>
                </div>

                <div class="Det-M">
                    <label class="Det-T" >RANGO DE PRECIOS</label><br>
                    <label class="Det-C">{{$local->rangoprecio}} + {{$local->IVA}} + {{$local->propina}}</label>
                </div>

                <div class="Det-M">
                    <label class="Det-T" >DIETAS ESPECIALES</label><br>
                    <label class="Det-C">{{$local->dietas_especiales}}</label>
                </div>

                <div class="Det-M">
                    <label class="Det-T" >SERVICIOS</label><br>
                    <label class="Det-C">{{$local->tipo_servicio}}</label>
                </div>

                <div class="Det-M">
                    <label class="Det-T" >FACTURA</label><br>
                    <label class="Det-C">Consumo mínimo para que te facture es de ${{$local->montofactura}}</label>
                </div><br>

                <div class="Det-M">
                    <label class="Det-T" >Ver todos los detalles</label><br>
                    <label class="Det-C">Comida, Características</label>
                </div>

            </div>
    
            <div class="div-C">
                <div class="Tit-Card">
                    <label class="Tit-Ar3">Calificacion y Opiniones</label>
                </div>
                <div class="C-Pd">
                    <div class="row-1-1-1">

                        <div class="Q-P2">
                            <li><a class="T-P">4.5</a></li>
                        </div>
                        
                        <div>
                            <form class="cal-1-2">
                                <div class="rating" >
                                    <input id="CalGen5" name="CalificacionGeneral" type="radio" value="Excelente" class="radio-btn hide" />
                                    <label for="CalGen5">★</label>
                                    <input id="CalGen4" name="CalificacionGeneral" type="radio" value="Muy bueno" class="radio-btn hide" />
                                    <label for="CalGen4">★</label>
                                    <input id="CalGen3" name="CalificacionGeneral" type="radio" value="Regular" class="radio-btn hide" />
                                    <label for="CalGen3">★</label>
                                    <input id="CalGen2" name="CalificacionGeneral" type="radio" value="Malo" class="radio-btn hide" />
                                    <label for="CalGen2">★</label>
                                    <input id="CalGen1" name="CalificacionGeneral" type="radio" value="Pesimo" class="radio-btn hide" />
                                    <label for="CalGen1">★</label>
                                    <div class="clear"></div>
                                </div>
                            </form>
                        </div>

                        <div>
                            <label class="T-Opn">20 Opiniones</label>
                        </div>

                    </div>
                </div>

                <div class="linea">
                    <hr>
                </div>

                <div class="C-Pd">
        
                    <label>CALIFICACIONES</label>
                    
                    <div class="cal-T">
                        <div class="row-1-1">
                            <div>
                            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00OTguNjgyLDQzNS4zMjZMMjk3LjkxNywyMzQuNTZMNjMuMzU3LDBINDUuMDI2bC0zLjc0Myw5LjUxMWMtOS44NzksMjUuMTA0LTE0LjEsNTAuNzgtMTIuMjA1LDc0LjI0OQ0KCQkJYzIuMTYsMjYuNzUyLDEyLjMyMyw0OS45MTMsMjkuMzkyLDY2Ljk4MkwyNDEuNTgsMzMzLjg1MmwyNC4xNTItMjQuMTUybDE2OS4yODUsMTg5LjI5M2MxNi44NCwxNi44NCw0NS44MjUsMTcuODQsNjMuNjY1LDANCgkJCUM1MTYuMjM2LDQ4MS40MzksNTE2LjIzNiw0NTIuODc5LDQ5OC42ODIsNDM1LjMyNnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTE1Ni43MjgsMjkxLjQ0MkwxMy4zMTcsNDM0Ljg1M2MtMTcuNTUyLDE3LjU1Mi0xNy41NTIsNDYuMTEzLDAsNjMuNjY1YzE2LjY3NCwxNi42NzQsNDUuNTE5LDE4LjE0Niw2My42NjUsMA0KCQkJbDE0My40MTItMTQzLjQxMkwxNTYuNzI4LDI5MS40NDJ6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00OTAuMjUzLDg1LjI0OWwtODEuMzUxLDgxLjM1bC0yMS4yMjMtMjEuMjIybDgxLjM1MS04MS4zNTFsLTIxLjIyMi0yMS4yMjJsLTgxLjM1LDgxLjM1bC0yMS4yMjItMjEuMjIybDgxLjM1MS04MS4zNQ0KCQkJTDQwNS4zNjYsMC4zNjFMMjk5LjI1NiwxMDYuNDcxYy0xMi45ODEsMTIuOTgxLTIwLjczMiwzMC4yMTctMjEuODI4LDQ4LjUzNWMtMC4yNzcsNC42NDEtMS4zMjksOS4yMDYtMy4wNzQsMTMuNTQ4bDY4LjkyOSw2OC45MjkNCgkJCWM0LjM0Mi0xLjc0Nyw4LjkwOC0yLjc5OCwxMy41NDgtMy4wNzVjMTguMzE4LTEuMDkzLDM1LjU1NC04Ljg0Niw0OC41MzUtMjEuODI3bDEwNi4xMS0xMDYuMTA5TDQ5MC4yNTMsODUuMjQ5eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
                            </div>
    
                            <div class="Q-P">
                                <li><a class="T-U">Comida</a></li>
                            </div>
                            
                            <div class="Cal-Sep1">
                                <div class="rating">
                                    <input id="Comida5" name="Cal_Comida" type="radio" value="Excelente" class="radio-btn hide" />
                                    <label for="Comida5">★</label>
                                    <input id="Comida4" name="Cal_Comida" type="radio" value="Muy bueno" class="radio-btn hide" />
                                    <label for="Comida4">★</label>
                                    <input id="Comida3" name="Cal_Comida" type="radio" value="Regular" class="radio-btn hide" />
                                    <label for="Comida3">★</label>
                                    <input id="Comida2" name="Cal_Comida" type="radio" value="Malo" class="radio-btn hide" />
                                    <label for="Comida2">★</label>
                                    <input id="Comida1" name="Cal_Comida" type="radio" value="Pesimo" class="radio-btn hide" />
                                    <label for="Comida1">★</label>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                   
    
                        <div class="row-1-1">
                            <div>
                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik01MTAuNDE5LDM1Ny4wNTZjLTEuOTYzLTMuMTM2LTUuMzk3LTUuMDU2LTkuMDg4LTUuMDU2SDEwLjY2NWMtMy42OTEsMC03LjEyNSwxLjkyLTkuMDY3LDUuMDU2DQoJCQljLTEuOTQxLDMuMTM2LTIuMTMzLDcuMDYxLTAuNDY5LDEwLjM2OEMxNi4xMDUsMzk3LjM5Nyw0Ni4yMDYsNDE2LDc5LjY5OSw0MTZoMzUyLjU5N2MzMy40NzIsMCw2My41NzMtMTguNjAzLDc4LjU5Mi00OC41NTUNCgkJCUM1MTIuNTEsMzY0LjExNyw1MTIuMzYxLDM2MC4yMTMsNTEwLjQxOSwzNTcuMDU2eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjg1LjI0NiwxNDAuODg1YzEuNzQ5LTMuOTQ3LDIuNzUyLTguMjk5LDIuNzUyLTEyLjg4NWMwLTE3LjY0My0xNC4zNTctMzItMzItMzJzLTMyLDE0LjM1Ny0zMiwzMg0KCQkJYzAsNC41ODcsMS4wMDMsOC45MzksMi43NTIsMTIuODg1QzEzMC4wODksMTU0LjE3Niw1My43NTgsMjMyLDQzLjk2NiwzMzAuNjY3aDQyNC4wNDMNCgkJCUM0NTguMjE3LDIzMi4wNDMsMzgxLjg2NSwxNTQuMTc2LDI4NS4yNDYsMTQwLjg4NXogTTI0Ni4wMzUsMjAyLjY0NWMtNTkuNjY5LDMuOTQ3LTExMS4wNjEsNDIuOTAxLTEzMC44OCw5OS4yNDMNCgkJCWMtMS41MzYsNC4zNzMtNS42NzUsNy4xMjUtMTAuMDY5LDcuMTI1Yy0xLjE3MywwLTIuMzY4LTAuMTkyLTMuNTQxLTAuNTk3Yy01LjU0Ny0xLjk2My04LjQ2OS04LjA0My02LjUyOC0xMy42MTENCgkJCWMyMi42NTYtNjQuNDI3LDgxLjM4Ny0xMDguOTQ5LDE0OS42MTEtMTEzLjQ1MWM1LjY1My0wLjM2MywxMC45NDQsNC4wNTMsMTEuMzQ5LDkuOTQxDQoJCQlDMjU2LjM2MSwxOTcuMTg0LDI1MS45MjMsMjAyLjI2MSwyNDYuMDM1LDIwMi42NDV6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />
                            </div>
    
                            <div>
                                <li><a class="T-U">Servicio</a></li>
                            </div>
                            
                            <div class="Cal-Sep2">
                                <div class="rating">
                                    <input id="SerAmbiente5" name="Cal_Servicio" type="radio" value="Excelente" class="radio-btn hide" />
                                    <label for="SerAmbiente5">★</label>
                                    <input id="SerAmbiente4" name="Cal_Servicio" type="radio" value="Muy bueno" class="radio-btn hide" />
                                    <label for="SerAmbiente4">★</label>
                                    <input id="SerAmbiente3" name="Cal_Servicio" type="radio" value="Regular" class="radio-btn hide" />
                                    <label for="SerAmbiente3">★</label>
                                    <input id="SerAmbiente2" name="Cal_Servicio" type="radio" value="Malo" class="radio-btn hide" />
                                    <label for="SerAmbiente2">★</label>
                                    <input id="SerAmbiente1" name="Cal_Servicio" type="radio" value="Pesimo" class="radio-btn hide" />
                                    <label for="SerAmbiente1">★</label>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
    
                          
                        <div class="row-1-1">
                            <div >
                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTExLjg2NSA1MTEuODY1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTEuODY1IDUxMS44NjU7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNTEwLjcyMSwzMDQuNDk1bC04NS4zMzMtMTcwLjY2N2MtMi4xNzYtNC4zMDktNi45NzYtNi42OTktMTEuNjI3LTUuNjk2bC0zMTkuOTE1LDY0DQoJCQljLTAuMjU2LDAuMDQzLTAuNDkxLDAuMTA3LTAuNzI1LDAuMTcxYy0yLjIxOSwwLjU3Ni00LjA3NSwxLjgzNS01LjQ2MSwzLjQ3N2MtMC4zNjMsMC40MjctMC42ODMsMC44NzUtMC45NiwxLjM0NA0KCQkJYy0wLjE3MSwwLjI3Ny0wLjI5OSwwLjU1NS0wLjQ0OCwwLjgxMUwwLjk2MSwzNjguNDk1Yy0wLjIxMywwLjQwNS0wLjE5MiwwLjg1My0wLjM0MSwxLjI4Yy0wLjIzNSwwLjY4My0wLjQ2OSwxLjM0NC0wLjU1NSwyLjA5MQ0KCQkJYy0wLjEwNywwLjc0Ny0wLjA2NCwxLjQ3MiwwLDIuMjE5YzAuMDQzLDAuNDI3LTAuMDg1LDAuODUzLDAsMS4yOGMwLjA0MywwLjIzNSwwLjE5MiwwLjQyNywwLjI1NiwwLjY2MQ0KCQkJYzAuMTQ5LDAuNTU1LDAuMzg0LDEuMDQ1LDAuNjE5LDEuNTc5YzAuMzIsMC43MDQsMC42NjEsMS4zNjUsMS4xMDksMS45NjNjMC4yOTksMC40MjcsMC42NCwwLjc4OSwxLjAyNCwxLjE1Mg0KCQkJYzAuNTk3LDAuNTk3LDEuMjM3LDEuMDg4LDEuOTYzLDEuNTM2YzAuMjc3LDAuMTcxLDAuNDQ4LDAuNDI3LDAuNzI1LDAuNTc2YzAuMTQ5LDAuMDg1LDAuMzQxLDAuMDQzLDAuNDkxLDAuMTA3DQoJCQljMS4zMjMsMC41OTcsMi43MzEsMS4wMDMsNC4yNjcsMS4wMDNjMC42ODMsMCwxLjM4Ny0wLjA2NCwyLjExMi0wLjIxM2wxNDcuMTU3LTI5LjQxOWwxMS44NjEsMjMuNzQ0DQoJCQljMi4xNTUsNC4yODgsNi44NjksNi42NTYsMTEuNjI3LDUuNjk2bDMyMC02NGMzLjI2NC0wLjY0LDYuMDM3LTIuNzk1LDcuNTA5LTUuNzgxDQoJCQlDNTEyLjI1NywzMTAuOTgsNTEyLjIxNCwzMDcuNDgyLDUxMC43MjEsMzA0LjQ5NXogTTI5LjgwNCwzNTguNTMybDY2LjA0OC0xMzIuMDc1bDU0LjAzNywxMDguMDc1TDI5LjgwNCwzNTguNTMyeg0KCQkJIE0zMTEuMjc2LDI3Ny4wNmwtMTA2LjY2NywyMS4zMzNjLTAuNzA0LDAuMTQ5LTEuNDA4LDAuMjEzLTIuMDkxLDAuMjEzYy00Ljk3MSwwLTkuNDI5LTMuNDk5LTEwLjQ1My04LjU3Ng0KCQkJYy0xLjE1Mi01Ljc4MSwyLjYwMy0xMS4zOTIsOC4zNjMtMTIuNTQ0bDEwNi42NjctMjEuMzMzYzUuNTQ3LTEuMjE2LDExLjM3MSwyLjU2LDEyLjU0NCw4LjM2Mw0KCQkJQzMyMC44MTIsMjcwLjI5OCwzMTcuMDU3LDI3NS45MDgsMzExLjI3NiwyNzcuMDZ6IE0zOTYuNjA5LDIxMy4wNmwtMjEzLjMzMyw0Mi42NjdjLTAuNzA0LDAuMTQ5LTEuNDA4LDAuMjEzLTIuMDkxLDAuMjEzDQoJCQljLTQuOTcxLDAtOS40MjktMy40OTktMTAuNDUzLTguNTc2Yy0xLjE1Mi01Ljc4MSwyLjYwMy0xMS4zOTIsOC4zNjMtMTIuNTQ0bDIxMy4zMzMtNDIuNjY3DQoJCQljNS41MjUtMS4xOTUsMTEuMzcxLDIuNTgxLDEyLjU0NCw4LjM2M0M0MDYuMTQ1LDIwNi4yOTgsNDAyLjM5LDIxMS45MDgsMzk2LjYwOSwyMTMuMDZ6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />
                            </div>
    
                            <div>
                                <li><a class="T-U">Calidad/Precio</a></li>
                            </div>
                            
                            <div class="Cal-Sep3">
                                <div class="rating">
                                    <input id="CAmbiente5" name="Cal_Calidad" type="radio" value="Excelente" class="radio-btn hide" />
                                    <label for="CAmbiente5">★</label>
                                    <input id="CAmbiente4" name="Cal_Calidad" type="radio" value="Muy bueno" class="radio-btn hide" />
                                    <label for="CAmbiente4">★</label>
                                    <input id="CAmbiente3" name="Cal_Calidad" type="radio" value="Regular" class="radio-btn hide" />
                                    <label for="CAmbiente3">★</label>
                                    <input id="CAmbiente2" name="Cal_Calidad" type="radio" value="Malo" class="radio-btn hide" />
                                    <label for="CAmbiente2">★</label>
                                    <input id="CAmbiente1" name="Cal_Calidad" type="radio" value="Pesimo" class="radio-btn hide" />
                                    <label for="CAmbiente1">★</label>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
    
    
    
                        <div class="row-1-1">
                            <div>
                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0zMzMuNDcxLDE3My42ODhjLTYuNTg1LTQuMjY3LTE0Ljc5My00Ljg5OS0yMS45NTMtMS42OTJjLTEyLjk3NCw1LjgwOC0yNi42NDksOS40NzEtNDAuNTA4LDExLjAwOHYtMjIuNzk2DQoJCQljLTQuODIzLDEuMTUxLTkuODQ3LDEuNzYxLTE1LjAxLDEuNzYxYy01LjE2NCwwLTEwLjE4Ny0wLjYxLTE1LjAxLTEuNzYxdjIyLjc5NWMtMTMuODYtMS41MzctMjcuNTM1LTUuMjAyLTQwLjUwOC0xMS4wMDgNCgkJCWMtNy4xNjItMy4yMDctMTUuMzY3LTIuNTcyLTIxLjk1MywxLjY5MmMtNi41ODQsNC4yNjctMTAuNTE2LDExLjQ5OS0xMC41MTYsMTkuMzQ1djI4My4zMjljMCwxOS42NTIsMTUuOTg4LDM1LjYzOSwzNS42MzksMzUuNjM5DQoJCQloMTA0LjY5NmMxOS42NTIsMCwzNS42MzktMTUuOTg4LDM1LjYzOS0zNS42MzlWMTkzLjAzM0MzNDMuOTg4LDE4NS4xODUsMzQwLjA1NiwxNzcuOTU0LDMzMy40NzEsMTczLjY4OHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTI5Ni45NjcsNDEuODY4Yy0xMS40MDgtMTYuNDgxLTIzLjYxNi0zMC43NzEtMjguMzM5LTM2LjE0NEMyNjUuNDM2LDIuMDkxLDI2MC44MzMsMCwyNTYsMHMtOS40MzYsMi4wOTEtMTIuNjI4LDUuNzI0DQoJCQljLTQuNzIzLDUuMzc0LTE2LjkzMSwxOS42NjMtMjguMzM5LDM2LjE0NGMtMTYuMTIxLDIzLjMxNi0yMy45NTYsNDEuMzU4LTIzLjk1Niw1NS4xNzdjMCwzMC42MzEsMjEuMzI0LDU2LjM3OCw0OS45MTQsNjMuMTYyDQoJCQl2LTUwLjcxNGMwLTguMjg2LDYuNzE0LTE1LjAxLDE1LjAxLTE1LjAxYzguMjg2LDAsMTUuMDEsNi43MjUsMTUuMDEsMTUuMDF2NTAuNzE0YzI4LjU4OS02Ljc4NSw0OS45MTQtMzIuNTMyLDQ5LjkxNC02My4xNjINCgkJCUMzMjAuOTI0LDgzLjIyNiwzMTMuMDg4LDY1LjE4NCwyOTYuOTY3LDQxLjg2OHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />  
                            </div>
    
                            <div>
                                <li><a class="T-U">Ambiente</a></li>
                            </div>
                            
                            <div class="Cal-Sep4">
                                <div class="rating">
                                    <input id="Ambiente5" name="Cal_Ambiente" type="radio" value="Excelente" class="radio-btn hide" />
                                    <label for="Ambiente5">★</label>
                                    <input id="Ambiente4" name="Cal_Ambiente" type="radio" value="Muy bueno" class="radio-btn hide" />
                                    <label for="Ambiente4">★</label>
                                    <input id="Ambiente3" name="Cal_Ambiente" type="radio" value="Regular" class="radio-btn hide" />
                                    <label for="Ambiente3">★</label>
                                    <input id="Ambiente2" name="Cal_Ambiente" type="radio" value="Malo" class="radio-btn hide" />
                                    <label for="Ambiente2">★</label>
                                    <input id="Ambiente1" name="Cal_Ambiente" type="radio" value="Pesimo" class="radio-btn hide" />
                                    <label for="Ambiente1">★</label>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>  
                        
                        
                    </div>
                </div>

                
            </div>
        </div>
    </div>


    <div class="MenuEsp">
        <div class="Opinion-1">
            <div class="Opinion">
                <div class="der-o">
                    <label class="Opinion-T">Opiniones</label><label class="Cant-O">(100)</label>
                </div>
    
                <div class="izq-b">
                    @guest
                    <a href="{{ route('login') }}"><button class="Btn-O">Escribir una opinion</button></a>
                    @else
                        {{-- <a href="{{route('Comentario.index')}}"><button class="Btn-O">Escribir una opinion</button></a> --}}
                        <!-- Button trigger modal -->
                            {{-- <button type="button" class="Btn-O" data-toggle="modal" data-target="#exampleModalCenter">
                                Escribir una opinion
                            </button> --}}

                            <button type="button" class="Btn-O">
                                <a href="{{url('/Opinion/'.$local->id)}}" class="T-O">Escribir una opinion</a>
                            </button>

                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Escribir tu Opinion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        
                                        <form action="{{route('Comentario.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">

                                                <div style="margin-bottom: 15px">
                                                    <label class="Tit-In" for="formGroupExampleInput">Título de tu opinión</label>
                                                    <input class="CajaT" type="text" name="Titulo" class="form-control" placeholder="Resume tu visita o destaca un detalle importante " id="formGroupExampleInput">
                                                </div>
                        
                                                <div>
                                                    <label class="Tit-In" for="formGroupExampleInput">Tu opinión</label>
                                                    <textarea class="Txt-AO" id="validationTextarea" name="Descripcion" placeholder="Cuentales a los demas acerca de tu experiencia:¿la comida, el ambiente, el servicio?" required></textarea>
                                                </div>

                                                <div style="margin-bottom: 15px">
                                                    <label class="Tit-In" for="formGroupExampleInput">Fecha de la Visita</label>
                                                    <input class="CajaT" type="text" name="FechaVisita" class="form-control" placeholder="Ej. 2 de julio del 2020" id="formGroupExampleInput">
                                                </div>

                                                <input id="prodId" name="local_id" type="hidden" value="{{$local->id}}">
                                                    
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>    
                                        </form>
                                    </div>
                                </div>
                            </div>
                    @endguest
                    

                    
                    
                   
                    
                    
                </div>
            </div>
    
            <div class="Seleccion">
                
                {{-- <div class="div-Cal">
                    <div>
                        <label class="Titulo-O">Calificacion</label>
                    </div>
                    <div class="Checkbox">
                        <input type="checkbox" id="cbox1" value="primero_checkbox"><label class="Calif-Opn1">Excelente</label><br>
                        <input type="checkbox" id="cbox2" value="segundo_checkbox"> <label class="Calif-Opn2">Muy Bueno</label><br>
                        <input type="checkbox" id="cbox3" value="tercero_checkbox"><label class="Calif-Opn3">Regular</label><br>
                        <input type="checkbox" id="cbox4" value="cuarto_checkbox"> <label class="Calif-Opn4">Malo</label><br>
                        <input type="checkbox" id="cbox5" value="quinto_checkbox"> <label class="Calif-Opn5">Pesimo</label>
                    </div>
                </div>
    
                <div class="div-T">
                    <div>
                        <label class="Titulo-O">Tipo persona</label>
                    </div>
                    <div class="Checkbox">
                        <input type="checkbox" id="cbox1" value="primero_checkbox"><label class="Calif-Opn3">Familia</label><br>
                        <input type="checkbox" id="cbox2" value="segundo_checkbox"> <label class="Calif-Opn4">Pareja</label><br>
                        <input type="checkbox" id="cbox3" value="tercero_checkbox"><label class="Calif-Opn3">Solitario</label><br>
                        <input type="checkbox" id="cbox4" value="cuarto_checkbox"> <label class="Calif-Opn4">Amigos</label>
                    </div>
                </div>
    
                <div class="div-E">
                    <div>
                        <label class="Titulo-O">Epoca del año</label>
                    </div>
                    <div class="Checkbox">
                        <input type="checkbox" id="cbox1" value="primero_checkbox"><label class="Calif-Opn1">Mar-may</label><br>
                        <input type="checkbox" id="cbox2" value="segundo_checkbox"> <label class="Calif-Opn2">Jun-ago</label><br>
                        <input type="checkbox" id="cbox3" value="tercero_checkbox"><label class="Calif-Opn3">Sep-nov</label><br>
                        <input type="checkbox" id="cbox4" value="cuarto_checkbox"> <label class="Calif-Opn4"> Dic-feb</label>
                    </div>
                </div> --}}
    
            </div>



            <div style="border-bottom: 1px solid rgba(0,0,0,.1);">
                {{-- <label class="Date-T">Consulta que dicen los viajeros:</label> --}}
            </div>
            
            @foreach ($Comentarios as $Comentario)
                <div class="division-O">
                    <div class="div-I">
                        <div>
                            <img  class="foto-P" src="{{asset($Comentario->profile_image)}}">
                            {{-- <label for="">{{asset($Comentario->profile_image)}}</label> --}}
                            
                        </div>

                        <div>
                            <label class="Name-U">{{$Comentario->user}}</label>
                        </div>
                    </div>
            
                    <div class="div-Des">
                        <div class="divOp-1">
                            <label class="D-Com">Publicacion {{$Comentario->Fecha}}</label>
                        </div>

                        <div>
                            <label class="Titulo-T">{{$Comentario->Titulo_Opinion}}</label>
                        </div>

                        <div>
                            <p class="Comt-1">{{$Comentario->Opinion}}</p>
                        </div>

                        <div>
                            <label class="Date-T">Fecha Visita:</label><label class="Date-M">{{$Comentario->Fecha_Visita}}</label>
                        </div>
                    </div>
                </div>
            @endforeach
    
            







            {{-- <div class="division-O">
                <div class="div-I">
                    <div>
                        <img class="foto-P" src="https://fondosmil.com/fondo/17060.jpg" alt="">
                    </div>

                    <div>
                        <label class="Name-U">sandrarO5445TG</label>
                    </div>
                </div>
        
                <div class="div-Des">
                    <div class="divOp-1">
                        <div class="cal-2">
                            <form class="cal-1-Op">
                                <p class="clasificacion">
                                  <input id="radio31" type="radio" name="estrellas" value="5"><!--
                                  --><label for="radio31">★</label><!--
                                  --><input id="radio32" type="radio" name="estrellas" value="4"><!--
                                  --><label for="radio32">★</label><!--
                                  --><input id="radio33" type="radio" name="estrellas" value="3"><!--
                                  --><label for="radio33">★</label><!--
                                  --><input id="radio34" type="radio" name="estrellas" value="2"><!--
                                  --><label for="radio34">★</label><!--
                                  --><input id="radio35" type="radio" name="estrellas" value="1"><!--
                                  --><label for="radio35">★</label>
                                </p>
                            </form>
                        </div>
                            <label class="D-Com">Escribió una opinión el 9 de marzo de 2020</label>
                        <div>

                        </div>
                    </div>

                    <div>
                        <label class="Titulo-T">Cena de equipo</label>
                    </div>

                    <div>
                        <p class="Comt-1">Dispone de espacios acogedores con unas mamparas que hacen la estancia sea gratificante; en su gran terraza, las mesas bajo sombrillas son también agradables en las que entre el verde del monte y un desahogado espacio, donde en un plano inferior existen una pistas deportivas, posibilitan disfrutar de la estancia; Ofrecen como menús diferentes alternativas como raciones, platos combinados o carta que pudiendo elegir sus aderezos, uno sale satisfecho</p>
                    </div>

                    <div>
                        <label class="Date-T">Fecha Visita:</label><label class="Date-M">marzo de 2021</label>
                    </div>

                </div>
            </div>

    
            <div class="division-O">
                <div class="div-I">
                    <div>
                        <img class="foto-P" src="data:image/jpeg;base64,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" alt="">
                    </div>

                    <div>
                        <label class="Name-U">raquelmY921TY</label>
                    </div>
                </div>
        
                <div class="div-Des">
                    <div class="divOp-1">
                        <div class="cal-2">
                            <form class="cal-1-Op">
                                <p class="clasificacion">
                                  <input id="radio36" type="radio" name="estrellas" value="5"><!--
                                  --><label for="radio36">★</label><!--
                                  --><input id="radio37" type="radio" name="estrellas" value="4"><!--
                                  --><label for="radio37">★</label><!--
                                  --><input id="radio38" type="radio" name="estrellas" value="3"><!--
                                  --><label for="radio38">★</label><!--
                                  --><input id="radio39" type="radio" name="estrellas" value="2"><!--
                                  --><label for="radio39">★</label><!--
                                  --><input id="radio40" type="radio" name="estrellas" value="1"><!--
                                  --><label for="radio40">★</label>
                                </p>
                            </form>
                        </div>
                            <label class="D-Com">Escribió una opinión el 9 de marzo de 2020</label>
                        <div>

                        </div>
                    </div>

                    <div>
                        <label class="Titulo-T">Magnífico almuerzo</label>
                    </div>

                    <div>
                        <p class="Comt-1">Dispone de espacios acogedores con unas mamparas que hacen la estancia sea gratificante; en su gran terraza, las mesas bajo sombrillas son también agradables en las que entre el verde del monte y un desahogado espacio, donde en un plano inferior existen una pistas deportivas, posibilitan disfrutar de la estancia; Ofrecen como menús diferentes alternativas como raciones, platos combinados o carta que pudiendo elegir sus aderezos, uno sale satisfecho</p>
                    </div>

                    <div>
                        <label class="Date-T">Fecha Visita:</label><label class="Date-M">marzo de 2021</label>
                    </div>

                </div>
            </div> --}}


        </div>

        
        
    </div>
    

    
@endsection
