@extends('layouts.plantillaproveedor')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('Menu.agregar', $local->id) }}
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
            <a class="T-U" href="{{route('Menu.show', "$local->id" )}}"> Regresar</a>
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


    <div class="cuadro">
        <div class="containers">

            <h1 style="margin-top: 10px; margin-bottom: 10px; font-family: 'Lobster', cursive;">Ingresar un Nuevo Menu </h1>    
            
            
            <div class="TipoUser1">
                <label class="select">Tipo Usuario</label>
                <select name="Rol_id" class="TipoU" id="inputGroupSelect01">
                    <option value="">Selecciona</option>
                    <option value="div1">Platillo</option>
                    <option value="div2">Bebida</option>
                </select>
            </div>

            
                
            <div id="pai"> 
                <div id="div1">
                    <form action="{{route('platillo.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        <span class="form-row">
                            <span class="input-data">
                                
                                <input id="Nombre" type="text" class="form-control @error('Nombre') is-invalid @enderror" name="Nombre" value="{{ old('Nombre') }}">
                                
                                
                                <div class="underline"></div>
        
                                <label for="Nombre">Nombre del platillo</label>
                                    
                                @if ($errors->has('Nombre'))
                                    <span class="error text-danger" for="input-name">{{$errors->first('Nombre')}}</span>
                                @endif

                            </span>
                            <span class="input-data"></span>
                        </span>
                        
                        
                        
                        <span class="form-row">
                            <span class="input-data">
                                <textarea id="Descripcion" style="resize: none;" class="form-control @error('Descripcion') is-invalid @enderror" name="Descripcion" rows="4" cols="37"> {{ old('Descripcion') }}</textarea>
                                
                                <div class="underline"></div>
        
                                <label style="bottom: 41px; font-size: 15px;" for="Descripcion">Descripcion</label>
                                
                                @if ($errors->has('Descripcion'))
                                    <span class="error text-danger" for="input-name">{{$errors->first('Descripcion')}}</span>
                                @endif
        
                                
                            </span>
                            <span class="input-data"></span>
                        </span>
                        <br><br>
                        
                        
                        <span class="form-row">
                            <span class="input-data">
                                
                                <input id="Costo" type="text" class="form-control @error('Costo') is-invalid @enderror" name="Costo" value="{{ old('Costo') }}">
                                
                                <div class="underline"></div>
        
                                <label for="Descripcion">Costo</label>
                                
                                @if ($errors->has('Costo'))
                                    <span class="error text-danger" for="input-name">{{$errors->first('Costo')}}</span>
                                @endif
        

                            </span>
                            <span class="input-data"></span>
                        </span>

                        

                        <span class="form-row">
                            <span class="input-data">
                                
                                <input id="Imagen" type="file" class="form-control @error('Imagen') is-invalid @enderror" name="Imagen" value="{{ old('Imagen') }}">
                                
                                <div class="underline"></div>
        
                                <label for="Nombre">Imagen</label>
                                        
                                @if ($errors->has('Imagen'))
                                    <span class="error text-danger" for="input-name">{{$errors->first('Imagen')}}</span>
                                @endif

                                <div class="underline"></div>
                            </span>
                            <span class="input-data"></span>
                        </span>

                        <input id="prodId" name="local_id" type="hidden" value="{{$local->id}}">
                        
                        
                        
                        <button class="button" type="submit">Agregar</button>
                    </form>
                    
                </div>

        



                <div id="div2">

                    <form action="{{route('bebida.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <span class="form-row">
                            <span class="input-data">
                                
                                <input id="B_Nombre" type="text" class="form-control @error('B_Nombre') is-invalid @enderror" name="B_Nombre"  value="{{ old('B_Nombre') }}">
                                
                                <div class="underline"></div>
        
                                <label for="Nombre">Nombre de la bebida</label>
                                
                                @if ($errors->has('B_Nombre'))
                                    <span class="error text-danger" for="input-name">{{$errors->first('B_Nombre')}}</span>
                                @endif
        

                            </span>
                            <span class="input-data"></span>
                        </span>


                        


                        


                        <span class="form-row">
                            <span class="input-data">
                                
                                <input id="B_Costo" type="text" class="form-control @error('B_Costo') is-invalid @enderror" name="B_Costo" value="{{ old('B_Costo') }}">
                                
                                <div class="underline"></div>
        
                                <label for="Costo">Costo</label>
                                
                                @if ($errors->has('B_Costo'))
                                    <span class="error text-danger" for="input-name">{{$errors->first('B_Costo')}}</span>
                                @endif
        

                            </span>
                            <span class="input-data"></span>
                        </span>
                        
                        


                        <span class="form-row">
                            <span class="input-data">
                                
                                {{-- <input type="text" name="ApellidoMaterno" required> --}}
                                <input id="B_Imagen" type="file" class="form-control @error('B_Imagen') is-invalid @enderror" name="B_Imagen">
                                
                                <div class="underline"></div>
        
                                <label for="Imagen">Imagen</label>
                                
                                 @if ($errors->has('B_Imagen'))
                                    <span class="error text-danger" for="input-name">{{$errors->first('B_Imagen')}}</span>
                                @endif
        
                                <div class="underline"></div>
                            </span>
                            <span class="input-data"></span>
                        </span>

                        <input id="prodId" name="local_id" type="hidden" value="{{$local->id}}">

                        <button class="button" type="submit">Agregar</button>
                    </form>
                </div>


            </div>
        </div>
    </div>

@endsection