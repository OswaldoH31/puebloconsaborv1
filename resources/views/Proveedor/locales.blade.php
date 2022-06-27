@extends('layouts.plantillaproveedor')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('Locales') }}
        </ol>
    </nav>
@endsection



@section('content')

    
    <div class="container">
        @if(count($Locales)<=0)    
            <h4 class="ti-pie">No hay Resultados</h4>
        @else
            <div class="">
                @foreach ($Locales as $local)
                    <div class="card-Local">
                        <div class="card-body">
                            <div class="sep-t">
                                <div class="izquierda-1">
                                    <img class="foto-l" src="{{asset($local->file)}}">
                                </div>
                                <div  class="centro-1">
                                    <div class="nombre-L">
                                        <a href="{{url('Menu/'.$local->id)}}"><h1 class="titulo-l">{{$local->nombre}}</h1></a>
                                        
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
                                        <h1 class="dir-l">{{$local->Colonia}} {{$local->Municipio}}</h1>
                                        <h1 class="dir-l">Cerrado Ahora</h1>
                                    </div>
                                    <div class="hr">
                                        <hr class="hr-L">
                                    </div>

                                    <p class="descrip-l">{{$local->descripcion}}</p>

                                    <div class="estadoLocal">
                                        @if($local->estado == 1)
                                            <button type="button" class="btn  btn-lg  btn-success" >Aceptado</button>
                                            @else
                                            <button type="button" class="btn btn-lg btn-danger">Rechazado</button>
                                        @endif
                                    </div>

                                </div>

                                <div  class="derecha-1">
                                    <div class="btn-L">
                                        <button class="button11" type="submit"><a class="btnEditar" href="{{url('Locales/'.$local->id.'/edit')}}">Editar</a></button>
                                    </div>

                                    <div>
                                        <form action="{{url('Locales/'.$local->id)}}" method="post">
                                            @csrf
                                            {{ method_field('DELETE')}}
                                            <input class="button2" type="submit" onclick="return confirm('¿Quieres Borrar?')" class="btnEditar" value="Eliminar">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                @endforeach  
            </div> 
        @endif
    </div>


@endsection