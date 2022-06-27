@extends('layouts.plantillaproveedor')


{{-- @section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('ListaPlatillo') }}
            
        </ol>
    </nav>
@endsection --}}

@section('content')

    <div class="contListado">
        <center>
            <h2 class="titulo">Lista de Platillos</h2>
        </center>

        <div class="row-2-C1">
            @foreach ($platillos as $platillo)
            <div class="regresar">
                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjIxOS4yNzJweCIgaGVpZ2h0PSIyMTkuMjcxcHgiIHZpZXdCb3g9IjAgMCAyMTkuMjcyIDIxOS4yNzEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDIxOS4yNzIgMjE5LjI3MTsiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggZD0iTTEyMC43NzQsMTc5LjI3MXY0MGM0Ny4zMDMsMCw4NS43ODQtMzguNDgyLDg1Ljc4NC04NS43ODVjMC00Ny4zLTM4LjQ4MS04NS43ODItODUuNzg0LTg1Ljc4Mkg4OS4yODJMMTA4LjcsMjguMjg2DQoJCUw4MC40MTcsMEwxMi43MTMsNjcuNzAzbDY3LjcwMyw2Ny43MDFsMjguMjgzLTI4LjI4NEw4OS4yODIsODcuNzAzaDMxLjQ5MmMyNS4yNDYsMCw0NS43ODQsMjAuNTM4LDQ1Ljc4NCw0NS43ODMNCgkJQzE2Ni41NTgsMTU4LjczLDE0Ni4wMiwxNzkuMjcxLDEyMC43NzQsMTc5LjI3MXoiLz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
                <a class="T-U" href="{{url('/Menu/'.$platillo->local_id)}}"> Regresar</a>
            </div>
            @endforeach
        </div>
    </div> 

    <div class="Tabla-P">
        <div class="tabla-T">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" style="text-align: center">Id</th>
                    <th scope="col" style="text-align: center">Nombre del Platillo</th>
                    <th style="width: 250px; text-align: center">Descripcion</th>
                    <th scope="col" style="text-align: center">Costo</th>
                    <th scope="col" style="text-align: center">Imagen</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($Listaplatillos as $Listaplatillo)
                    <tr>
                        <th scope="row">{{$Listaplatillo->id}}</th>
                        <td style="text-align: center">{{$Listaplatillo->Nombre}}</td>
                        <td style="text-align: justify">{{$Listaplatillo->Descripcion}}</td>
                        <td>{{$Listaplatillo->Costo}}</td>
                        <td style="text-align: center"><img class="imagen-T" src="{{asset($Listaplatillo->Imagen)}}" width="200px" height="150px" object-fit= "cover";></td>
                        <td class="btn-LP">
                            <div class="btnactualizar" style="width: 104%">
                                <button class="button11" type="submit"><a class="btnEditar" href="{{url('Listaplatillos/'.$Listaplatillo->id.'/edit')}}">Actualizar</a></button> 
                            </div>
                            <div>
                                {{-- <button style="width: 115px"  type="button" class="btn btn-outline-danger">ELIMINAR</button>
                                 --}}
                                <form action="{{url('Listaplatillos/'.$Listaplatillo->id)}}" method="post">
                                    @csrf
                                    {{ method_field('DELETE')}}
                                    <div class="btnactualizar" style="width: 104%">
                                        <input class="button2" type="submit" onclick="return confirm('¿Quieres Borrar?')" class="btnEditar" value="Eliminar">
                                    </div>
                                    
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    

@endsection