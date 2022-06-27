@extends('layouts.app')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('busqueda',$busqueda) }}
        </ol>
    </nav>
@endsection


@section('content')

    <div class="div2-b">
        @if(count($Consultas)<=0) <tr>
            <td><br><br><br><br><br>
                <center>
                    No hay resultados, intenta con otra opcion
                </center>
            </td>
            </tr>
        @else
            
            <div class="container">
                <div class="">
                    <div class="tarjeta">
                        @foreach ($Consultas as $Consulta)
                            @if (($Consulta->estado) == 1)
                                <div class="card-body-b">
                                    <div class="sep-t">
                                        <div class="izquierda-b">
                                            <img class="foto-l" src="{{asset($Consulta->File)}}" >
                                        </div>
                                        <div  class="centro-b">
                                            <div class="nombre-L">
                                                <a href="{{url('/Directorio/'.$Consulta->id)}}"><h1 class="titulo-l">{{$Consulta->Nombre}}</h1></a>
                                                
                                                <div class="Cal-SepL">
                                                    <form class="cal-1-2">
                                                        <p class="clasificacion">
                                                        <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                                        --><label class="calif-L" for="radio1">★</label><!--
                                                        --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                                        --><label class="calif-L" for="radio2">★</label><!--
                                                        --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                                        --><label class="calif-L" for="radio3">★</label><!--
                                                        --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                                        --><label class="calif-L" for="radio4">★</label><!--
                                                        --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                                        --><label class="calif-L" for="radio5">★</label>
                                                        </p>
                                                    </form>
                                                </div>
                                                
                                            </div>
            
                                            
            
                                            <div class="cont-L">
                                                <h1 class="dir-l">{{$Consulta->Colonia}} {{$Consulta->Municipio}}</h1>
                                                <h1 class="dir-l">Cerrado Ahora</h1>
                                            </div>
                                            <div class="hr">
                                                <hr class="hr1">
                                            </div>
            
                                            <p class="descrip-l">{{$Consulta->Descripcion}}</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            @else
                                    
                            @endif
                        @endforeach
                    </div> 
                </div> 
            </div>
            <div class="pag-1">
                {!!$Consultas->links()!!}
            </div>
        @endif
    </div>

    
    
@endsection