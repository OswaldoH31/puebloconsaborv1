@extends('layouts.plantillaproveedor')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('Locales.menu', $local->nombre) }}
        </ol>
    </nav>
@endsection



@section('content1')


<div>
    <div class="seccionT">
    <h2 class="titulo">{{$local->nombre}}</h2>
    <div class="row-2-C1">
        <div class="regresar">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjIxOS4yNzJweCIgaGVpZ2h0PSIyMTkuMjcxcHgiIHZpZXdCb3g9IjAgMCAyMTkuMjcyIDIxOS4yNzEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDIxOS4yNzIgMjE5LjI3MTsiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggZD0iTTEyMC43NzQsMTc5LjI3MXY0MGM0Ny4zMDMsMCw4NS43ODQtMzguNDgyLDg1Ljc4NC04NS43ODVjMC00Ny4zLTM4LjQ4MS04NS43ODItODUuNzg0LTg1Ljc4Mkg4OS4yODJMMTA4LjcsMjguMjg2DQoJCUw4MC40MTcsMEwxMi43MTMsNjcuNzAzbDY3LjcwMyw2Ny43MDFsMjguMjgzLTI4LjI4NEw4OS4yODIsODcuNzAzaDMxLjQ5MmMyNS4yNDYsMCw0NS43ODQsMjAuNTM4LDQ1Ljc4NCw0NS43ODMNCgkJQzE2Ni41NTgsMTU4LjczLDE0Ni4wMiwxNzkuMjcxLDEyMC43NzQsMTc5LjI3MXoiLz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
            <a class="T-U" href="{{route('local.locales')}}"> Regresar</a>
        </div>
        
        <div class="cont-m1">
            <button class="button"><a class="btnMenu" style="color: white;" href="{{url('Menu/'.$local->id.'/agregarmenu')}}">Agregar Menú</a></button>
        </div>
    </div>
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
            <a class="T-U" href="{{$local->sitioweb}}" target="_blank">Página web</a>
        </div>
    </div>

    <div class="row-5-M">
        <div class="inf-m">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00OTguNjgyLDQzNS4zMjZMMjk3LjkxNywyMzQuNTZMNjMuMzU3LDBINDUuMDI2bC0zLjc0Myw5LjUxMWMtOS44NzksMjUuMTA0LTE0LjEsNTAuNzgtMTIuMjA1LDc0LjI0OQ0KCQkJYzIuMTYsMjYuNzUyLDEyLjMyMyw0OS45MTMsMjkuMzkyLDY2Ljk4MkwyNDEuNTgsMzMzLjg1MmwyNC4xNTItMjQuMTUybDE2OS4yODUsMTg5LjI5M2MxNi44NCwxNi44NCw0NS44MjUsMTcuODQsNjMuNjY1LDANCgkJCUM1MTYuMjM2LDQ4MS40MzksNTE2LjIzNiw0NTIuODc5LDQ5OC42ODIsNDM1LjMyNnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTE1Ni43MjgsMjkxLjQ0MkwxMy4zMTcsNDM0Ljg1M2MtMTcuNTUyLDE3LjU1Mi0xNy41NTIsNDYuMTEzLDAsNjMuNjY1YzE2LjY3NCwxNi42NzQsNDUuNTE5LDE4LjE0Niw2My42NjUsMA0KCQkJbDE0My40MTItMTQzLjQxMkwxNTYuNzI4LDI5MS40NDJ6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00OTAuMjUzLDg1LjI0OWwtODEuMzUxLDgxLjM1bC0yMS4yMjMtMjEuMjIybDgxLjM1MS04MS4zNTFsLTIxLjIyMi0yMS4yMjJsLTgxLjM1LDgxLjM1bC0yMS4yMjItMjEuMjIybDgxLjM1MS04MS4zNQ0KCQkJTDQwNS4zNjYsMC4zNjFMMjk5LjI1NiwxMDYuNDcxYy0xMi45ODEsMTIuOTgxLTIwLjczMiwzMC4yMTctMjEuODI4LDQ4LjUzNWMtMC4yNzcsNC42NDEtMS4zMjksOS4yMDYtMy4wNzQsMTMuNTQ4bDY4LjkyOSw2OC45MjkNCgkJCWM0LjM0Mi0xLjc0Nyw4LjkwOC0yLjc5OCwxMy41NDgtMy4wNzVjMTguMzE4LTEuMDkzLDM1LjU1NC04Ljg0Niw0OC41MzUtMjEuODI3bDEwNi4xMS0xMDYuMTA5TDQ5MC4yNTMsODUuMjQ5eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
            <a class="T-U" href="Menu" target="_blank">Menú</a>
        </div>
    </div>
    
</div>
</div>
@endsection

@section('content')


    

    {{-- <div class="Imagenes-M">
        <div class="Imagen-1">
            <img class="Img-1" src="https://www.eluniversal.com.mx/sites/default/files/tamales_1.jpg" alt="">
        </div>

        <div class="Imagen-M">
            <div class="Imagen-2">
                <img class="Img-2" src="https://elmundoenrecetas.s3.amazonaws.com/uploads/recipe/main_image/138/flautas_de_pollo_2.webp" alt="">
            </div>
    
            <div class="Imagen-3">
                <img class="Img-3" src="https://www.xtrafondos.com/descargar.php?id=2991&resolucion=2560x1440" alt="">
            </div>
        </div>

        <div class="Imagen-M">
            <div class="Imagen-4">
                <img class="Img-4" src="data:image/jpeg;base64,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" alt="">
            </div>
    
            <div class="Imagen-5">
                <img class="Img-5" src="data:image/jpeg;base64,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" alt="">
            </div>
        </div>
    </div> --}}


    {{--@foreach ($local_ids as $local_id)
                        
          
    @if (($local->id) == ($local_id->local_id))
             <div class="MenuEsp">
                <div class="MenuT">
                    <div>
                        <label class="Menu-M">Menú</label>
                    </div>
                </div>
                <div>
                    <img class="QR" src="https://borealtech.com/wp-content/uploads/2018/10/codigo-qr-1024x1024.jpg" alt="Menu">
                </div>
                
            </div> --}}

            <div class="MenuEsp">
                <div class="MenuT">
                    <div>
                        <label class="Menu-M">Menú</label>
                    </div>
                </div>

                {{-- <div class="Seccion-M">
                    <div class="Platillo-S">
                        <a href="{{url('/Listaplatillos/'.$local->id)}}" class="T-M">Platillos</a>
                    </div>

                    <div class="Bebida-S">
                        <a href="{{url('/Listabebidas/'.$local->id)}}" class="T-M">Bebidas</a>
                    </div>
                </div> --}}


                <div class="sep-Tit">
                    <div class="D-1">
                        <div class="Platillo-S">
                            <a href="{{url('/Listaplatillos/'.$local->id)}}" class="T-M">Platillos</a>
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
                                                    <label class="C-Z">{!! ( $Platillo->Nombre )!!}</label> 
                                                </div>
                                                <div>
                                                    <label class="C-C">Costo: </label><label style="margin-left: 10px"> ${{$Platillo->Costo}}</label>
                                                </div>
                                            </div>
                                            
                                            <div class="btn-M">
                                                <div class="Caract-2"> 
                                                    <button class="buttonMenuP-B" type="submit"><a class="btnMenu" href="{{url('Listaplatillos/'.$Platillo->id.'/edit')}}"><i class="fas fa-edit"></i> Editar</a></button>
                                                </div>
                                                <div>
                                                    <form action="{{url('Listaplatillos/'.$Platillo->id)}}" method="post" class="eliminar">
                                                        @csrf
                                                        {{ method_field('DELETE')}}
                                                        <div class="btnactualizar">
                                                            <button class="buttonMenuP-B" type="submit"><a class="btnMenu"><i class="fas fa-trash"></i></i> Eliminar</a></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>     
                        @endforeach
                    </div>

                    <div class="D-1">
                        <div class="Bebida-S">
                            <a href="{{url('/Listabebidas/'.$local->id)}}" class="T-M">Bebidas</a>
                            {{-- <a href="{{url('Menu/'.$local->id.'/Listabebidas')}}" class="T-M">Bebidas</a> --}}
                            
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
                                            
                                            <div class="btn-M">
                                                <div class="Caract-2"> 
                                                    <button class="buttonMenuP-B" type="submit"><a class="btnMenu" href="{{url('Listabebidas/'.$Bebida->id.'/edit')}}"><i class="fas fa-edit"></i> Editar</a></button>
                                                </div>
                                                <div>
                                                    <form action="{{url('Listabebidas/'.$Bebida->id)}}" method="post" class="eliminar">
                                                        @csrf
                                                        {{ method_field('DELETE')}}
                                                        <div class="btnactualizar">
                                                            <button class="buttonMenuP-B" type="submit"><a class="btnMenu"><i class="fas fa-trash"></i></i> Eliminar</a></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            
                                        </div>  
                                    </div>
                                </div> 
                        @endforeach 
                    </div>
                </div>
                
                
                
                <div class="espa-l">
                     {{$Bebidas->links()}}
                </div>
                
               
                
                                 



                
                {{-- <div class="Platillos">
                    <div class="izq-P">
                        <div class="T-P">
                            <div class="D-1">
                                <label class="T-M">Platillos</label>
                            </div>
                            
                            
                            @foreach ($Menus as $Menu)
                                <div class="D-1">
                                    <div class="imagen-P">
                                        <img class="imagen-T" src="{{asset($Menu->Imagen)}}" width="220px" height="170px" object-fit= "cover"; alt="Zacahuil">
                            
                                    </div>
                                    
                                    <div class="Caract-1">
                                        <div class="Caract-2">
                                            <label class="C-Z">{{$Menu->Nombre}}</label> 
                                        </div>
                                        <div>
                                            <label class="C-C">Costo: </label><label style="margin-left: 10px"> ${{$Menu->Costo}}</label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>               --}}
                    
                    {{-- <div class="der-B">
                        <div class="T-P">
                            <div class="D-1">
                                <label class="T-M">Bebidas</label>
                            </div>
            
                            @foreach ($Bebidas as $Bebida)
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
                            @endforeach                  
                        </div>
                    </div>
                </div>  --}}
            
            
                {{-- <div class="Platillos">
                    <div class="izq-P">
                        <div class="T-P">
                            <div class="D-1">
                                <label class="T-M"></label>
                            </div>
            
                            <div class="D-1">
                                <div class="imagen-P">
                                    <img class="imagen-T" src="https://i.blogs.es/5235ae/mole-rojo-de-oaxaca-receta-de-la-cocina-tradicional-mexicana/840_560.jpg" width="220px" height="170px" object-fit= "cover"; alt="Zacahuil">
                        
                                </div>
                                
                                <div class="Caract-1">
                                    <div class="Caract-2">
                                        <label class="C-Z">{{$Menu->Nombre}}</label> 
                                    </div>
                                    <div>
                                        <label class="C-T">Tipo</label>
                                            <ul>
                                                <li class="C-P">{{$Menu->Tipo}}</li>
                                                <li class="C-P">Pollo</li>
                                            </ul>
                                    </div>
                                    <div>
                                        <label class="C-C">Costo: </label><label style="margin-left: 10px"> ${{$Menu->Costo}}</label>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                
                    <div class="der-B">
                        <div class="T-P">
                            <div class="D-1">
                                <label class="T-M"></label>
                            </div>
            
                            <div class="D-1">
                                <div class="imagen-P">
                                    <img class="imagen-T" src="https://previews.123rf.com/images/monticello/monticello1707/monticello170700223/82388961-poznan-polonia-19-de-mayo-de-2017-el-mercado-global-de-refrescos-est%C3%A1-dominado-por-marcas-de-pocas-emp.jpg" width="220px" height="170px" object-fit= "cover"; alt="Zacahuil">
                        
                                </div>
                                
                                <div class="Caract-1">
                                    <div class="Caract-2">
                                        <label class="C-Z">Refrescos</label> 
                                    </div>
                                    <div class="div-sec">
                                        <div class="div-div">
                                            <label class="C-T">Sabores</label>
                                                <ul>
                                                    <li class="C-P">Coca-Cola</li>
                                                    <li class="C-P">Fanta</li>
                                                    <li class="C-P">Sprite</li>
                                                </ul>
                                        </div>
                                        <div class="div-div">
                                            <label class="C-T">Cantidad</label>
                                                <ul>
                                                    <li class="C-P">600 ml</li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="C-C">Costo: </label><label style="margin-left: 10px"> $18.00</label>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div> --}}
            
            </div>
            
        {{-- @else --}} 
            
            
        {{-- @endif
    @endforeach --}}


    <div class="MenuEsp1">
        <div class="MenuT">
            
        </div>
        <div class="div-S">
            <div class="div-U">
                <div class="Tit-Card">
                    <label class="Tit-Ar">Ubicación e Información del contacto</label>
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
                        <a class="T-U" href="{{$local->sitioweb}}" target="_blank">Página web</a>
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
                    <label class="Tit-Ar3">Calificación y Opiniones</label>
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


    <div class="MenuEspOpinion">
        <div class="Opinion-1">
            <div class="Opinion">
                <div class="der-o">
                    <label class="Opinion-T">Opiniones</label><label class="Cant-O"></label>
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
                </div>--}}
            </div>



            {{-- <div style="border-bottom: 1px solid rgba(0,0,0,.1);">
                <label class="Date-T">Consulta que dicen los viajeros:</label>
            </div> --}}
    
            <div class="division-O">
                <div class="div-I">
                    <div>
                        <img class="foto-P" src="https://www.xtrafondos.com/descargar.php?id=2986&resolucion=1920x1080" alt="">
                    </div>

                    <div>
                        <label class="Name-U">DonostiAne</label>
                    </div>
                </div>
        
                <div class="div-Des">
                    <div class="divOp-1">
                        <div class="cal-2">
                            <form class="cal-1-Op">
                                <p class="clasificacion">
                                  <input id="radio26" type="radio" name="estrellas" value="5"><!--
                                  --><label for="radio26">★</label><!--
                                  --><input id="radio27" type="radio" name="estrellas" value="4"><!--
                                  --><label for="radio27">★</label><!--
                                  --><input id="radio28" type="radio" name="estrellas" value="3"><!--
                                  --><label for="radio28">★</label><!--
                                  --><input id="radio29" type="radio" name="estrellas" value="2"><!--
                                  --><label for="radio29">★</label><!--
                                  --><input id="radio30" type="radio" name="estrellas" value="1"><!--
                                  --><label for="radio30">★</label>
                                </p>
                            </form>
                        </div>
                            <label class="D-Com">Escribió una opinión el 9 de marzo de 2020</label>
                        <div>

                        </div>
                    </div>

                    <div>
                        <label class="Titulo-T">Ideal para una agradable estancia en sus espacios interiores y en su espléndida terraza</label>
                    </div>

                    <div>
                        <p class="Comt-1">Dispone de espacios acogedores con unas mamparas que hacen la estancia sea gratificante; en su gran terraza, las mesas bajo sombrillas son también agradables en las que entre el verde del monte y un desahogado espacio, donde en un plano inferior existen una pistas deportivas, posibilitan disfrutar de la estancia; Ofrecen como menús diferentes alternativas como raciones, platos combinados o carta que pudiendo elegir sus aderezos, uno sale satisfecho</p>
                    </div>

                    <div>
                        <label class="Date-T">Fecha Visita:</label><label class="Date-M">marzo de 2021</label>
                    </div>

                </div>
            </div>

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
                        <img class="foto-P" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUTExIVFRUVFRUXFhYVFRUWFRcVFRUWFhUVFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDQ0NFQ0PFS0dFRkrLSstNystKysrLSsrKzctKy0tKzctKysuKy0tNystLjQuKysrLTcrKysrKystKysrK//AABEIAOAA4QMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAAAgEDBAUGB//EADkQAAIBAgMFBgUDAwMFAAAAAAABAgMRBCExBRJBUWETInGBkbEGMqHB4ULR8AcUUiOC8RUWQ2Jy/8QAFgEBAQEAAAAAAAAAAAAAAAAAAAEC/8QAGREBAQEAAwAAAAAAAAAAAAAAAAERAhJB/9oADAMBAAIRAxEAPwD4aAAAAAAAAAASAAAATGNwIJUS+FKxMkBTuEbpaQ0BXYhoexDAQgZkAQBJAAAAAAAAAAAAAAAAAAAAAAAAAABIAAAAG2jSt9yrC07u/L3NqQFTQriWtEAZpREaNMkUTARijkMBCLDMVgQAABAEkAAAAAAAAAAAAAAAAAAAAABJAASTFXyFNODp3d+QGqnCySLEhqdMvjSAzWIcTVOJTUQFEiiaL5orkgKGKyxlbAVijMiwCgTYAAUewrAgAAAAAAAAAAAAAAAAAAAAAACUjs4ajuxObgKW9NdMz0MILJc/sAlGjkW9kaqdLmN2fTIDDKiVVaB0pJeZmm7v1/59wOdUp6oyyidCsjJUiBllERxNEoiNAZpIUumiuSAUiwyQSQQqAETJBSMgaRAEAAAAAAAAAAAAAAAAAAFmHp70lHmwOxsbDWjvcZe3A69KjeXhH3f4JwdBWOngcNdp2Wavx04ZeYCUMO2uo88JLkdWnQ0Sf05XCNNWvd5ZcOIVwpYOV3lYplg7PPX+ano6lB3VnrlFWyfG78jHiqMu9ZxcU3e2T00CPMYmGbS0MlSmegr4d2u4NfW/h6GGrTTvwfLqBxpRKpGzE0raO5ikgKZCDTRXcCUS0V7xagioaINCoCWuBWXtXzKprMLCgABQQSARAAAAAAAAAABv2JT3q0el39PyYDqYX/Spb/66mUekeL8wO5idqU6acbtytw/co/7wlH5aaXDPkeftxfmI4XdgO/T+Lq133VmbaXxVV3bOCOLhcGbY4YDs0/ip3u4Z2snyytkUx2xBpqzV3nqYIYc6NPZCjT7WrlF/LHjLr4Abv+oU3ODUslHPqRjOzcO6k3m8/GyPKYyvdNwXdWTlwXS/F9Ec+O0KieU3/OgHocbhko3tbmcipTCG1KtrSV16F391GV8rAYKiM7N2ISMc4gVsaDIZEQHRDQXGYRMGRWiLF5lqzTQWMwDEEaxAAAQEEgUQAAEAAAFmHpb0ox5tL1NuKqb03b5Y92PgsirZ2TlP/CLt4y7q92/IjDrUBnEjDVFGfe0+hbPQMHu727NXjLnwfAD0NPD3SklZNXXJ+DLoUjEtmVaSvQqOzzdOWcX9vv1GpbZ3Xu1oOnLnm4v8eoHb2NgVUqxi9L3fgld+xzPizbEZ1Zb/AMkco045b1skrr5YL1fqej2O/wDyQz3oTStxbi0rPxsfNa1GpOrLtE4tPvJrNdACU6uIkkl0jGKtCK6LgdujsSNON5d6XPgvANi1IQTenDyHx+2IaX/ngQYcTAzdmFTaUHwf0Hw+IUr2hZLi3x5AS6ORkq07eB1oYScs/wCehVWw7RRxmhDViKNs+HHoZ5ICENcRkxYQw0GJclBU1Y8Spl8SqcbMjUpSCSAUAABEAAFQAAAaqWVKXWUb+Sf7jYXj4lVH5JLrF+6+6Jwsu9bmBrkjLWia5GeoiDo7HxVeSlGMruMe6mr58i2e0a3y1cO5cGnGVvZmf4axCp1472ku75vT65eZ9U2fSpySvGL8UmawYPgiq60XB0pU3Tit26snFZWtk7rLgeU+KoNV5XPsGy6EIzgopJX4K2uX3PBf1K2d2dXet8xLFeAVJ34q4UdiuWj9TTKR0tm1kEZ8B8JuWcrv2+h6DBfDMY5taadPBHY2fi4pcCNpbUSi7PMqxzMbSjBWR57ERuznY7alWVR5u19DXRm2rsla58OvrJioL1OVUhZtcjr15XObiVo/J/YMMshRpigMCYIgC1DSVxYjRApIZdONypojW6gAAKUAArAAAAtw7za5pr7r6pC3s/AVMsqK/eXH6MDbCd1cWcTLh6tnbgbUBQ4nqPh74hlFqM3npd/q/PuefcCJUshFlx9p2Ft6n2lNSdryil4tpJFn9X8GuzjPrY+ff02r05YqOHrZucoSoybfdqU5b254SV/NLmfU/wCrMb4V24SQo+HyQU5NaEVE7jOREaaO0amiQ9WvN6p+hip1bSjbW+fgd9pWA8/VburQcm3ZK2rZRgsTKpJp2SXL9+Oh09o4tUaUqi+erFwo81Td1VrpcE/ki+N5taI52z6e5C71eYVLWb8TJVje65r6o1UndFFXLMqOcxC6rHNrr+SoAQ1iIjWAIj3IRIQ1yubuFSQtNBUAXWAjXZmAAKyAAAAsoztk9H/LlYAWVYWZowlXg9eBTSlfuvyf2FnFp9UB1UOombC17rqjRcCuV4tSi2pRalGS4SWaafR2PsG3/iajjMLGUZK84RclxjOycotcGnc+QXI3fHhez3W+l+H1IrpVo5SlZ2XJXfTI4dXGNy70e7/jxX5PffDvwnCpB1cLiFXi5RlOlPuVobu93Kkc7tNrvJ2dstSja3whWqN/6MI56uputeNou4R5PB4ims95Jdd668knc24jb0LbtOm6kv8AKou55Ulr/ub8B63wk6fz1YeCu/R5Ef29Kmss/H7IDnQo1Kk3UqycpN3befh9LWS5F+Kllb+WLp1TMlvO4DwWRj2hUsrcX7GutNRTb/nQ4tSbk23xKLan6Xzj7ZFTLP0LpJr1V/3EYAhmKmOwAlyIiVzYRDdx4sQLhVvaAVgAoAAAAAAAAABppT3snrwfP8mYALc4u64G2nW3lczQkpZPX3K03Fgb94jeyKY1Lq6GjNEVoo4qVJ70JOMlo4tp+q4Hp1tDFYjDOtRqyk4X7Sm25NWV24vXTM8bXnfQ63whtWeFrqVu5LuzXThK3T2uBRhdqVKsmpPO115a/Q2VsO0Ydp0FhsW93Onvb0LZ3pT5c8m15HVqVU425Zft9AjA4hdK70SGk1rouZzMfiN7KPy+/ULinGYjffRafuZwAqLqKvGS6KXo/wBmxS/ZSvUS5qS9YsqUbXXJgIkWMVBKVgInKwhAASBAyQB5AHqSAgAAAAAAAAAAASkBMIttJa8Du1NhVOzU9Xa8orX8l2xtnqC3pfN7HdhVytz0A8OqTTyHppM9XjNnwq/+s+a0f/0jkYnZc6esbrnHNefFAZIUC1QsTShyZbZ8kBNeiqkFGT0+V8vx0HwuDaVpSuly1twIg+hd2r5AZ8fQi47unucGpFxyZ3a0nxaRzcS4vWQGEgsio3zbt0SOnhMPTylab6tZeSAoweHcZRk9b6eORlnq/F+52lZvj6WOJVevVv0AVsQAAAAAAZCksCQFAAAAAAAAAAAAN+yaG9LeekfcwHcwK3Ypc9QOm6miRPamWcxVUYHUjV8CxYhpZNeRzKdbPgMq+YHYp4aE09+C9M/XUrWy6T/yiukuHncTCVmRUxW7dc+oFGO2fTi+7Ob8Wv2MFPBty+Z28S6ribs0YSQGHF7NRgezlyPUShdlc8OBw8LhVHgvQbFSjH9LfRHX/t+hTiMHcDg4jGyatGO6n6nOcXyOviaDjwsZIplGKxBtdHMivHQgxgaJ0ReyAqQWHcR90CqwD2ACoAAAAAAAAAGpq7R2kzk4ZZ3OgpgX1JlTmJUkVqYG6lIenLiZaUx4sDpUcRYnEVU1c5rqj9tkBKeZuoTsjmbxppVQOrSqFlWZgp1R3WA2RkE5oydsJKsBOM3WranNnh1wZplPMrmwMkoMrlTuaUwcbAZ4RH7NBIUozSp5lu50Hih3EIy7jAv3WSFf/9k=" alt="">
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


@section('js')
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @if(session('success') == 'Bebida')
        <script>
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Bebida registrado correctamente',
              showConfirmButton: false,
              timer: 1500
            })
        </script>
    @elseif(session('success') == 'Platillo')
        <script>
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Platillo registrado correctamente',
              showConfirmButton: false,
              timer: 1500
            })
        </script>
    @elseif(session('success') == 'elimino-bebida')
        <script>
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Bebida eliminado correctamente',
              showConfirmButton: false,
              timer: 1500
            })
        </script>
    @elseif(session('success') == 'elimino-platillo')
        <script>
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Platillo eliminado correctamente',
              showConfirmButton: false,
              timer: 1500
            })
        </script>
    @elseif(session('success') == 'actualizarpb')
        <script>
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Actualizado correctamente',
              showConfirmButton: false,
              timer: 1500
            })
        </script>
    @else
    
        
    @endif


    <script>
    
        $('.eliminar').submit(function(e){
            e.preventDefault();
            Swal.fire({
              title: '¿Estas seguro?',
              text: "¡No podrás revertir esto!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Eliminar',
              cancelButtonText: 'Cancelar'
            }).then((result) => {
              if (result.isConfirmed) {
                this.submit();
              }
            })
        });
        
    </script>

    
    
@endsection






