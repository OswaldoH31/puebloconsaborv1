@extends('layouts.app')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('Directorio') }}
        </ol>
    </nav>
@endsection


@section('content')


    
    <div class="cont">
        <div class="card" style="padding: 15px; height: 100%;">
            <div class="">
                <form class="frm" action="{{route('Directorio.buscar')}}" method="get">
                    <div class="ra">
    
                        <div class="map">
    
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29770.12716816224!2d-98.4308479092119!3d21.141814077156752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d726937c6d4e45%3A0x4943316bd6808859!2sHuejutla%2C%20Hgo.!5e0!3m2!1ses!2smx!4v1628099376643!5m2!1ses!2smx"
                                height="inherit" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div><br>
                        {{-- <div class="border-b">
                            <br>
                            <h5 class="lab">Covid-19</h5>
                            <div>
                                <input type="radio" name="busca" id="small" value="Medidas de seguridad">
                                <label class="buscador-d" for="small">Medidas de Seguridad</label>
                            </div>
                        </div> --}}
                        <div class="border-b">
                            <br>
                            <h5 class="lab">Tipo de establecimieto</h5>
                            <div>
                                {{-- <div class="filtro-check">
                                    <input type="checkbox" id="bar" name="destacado[]" value="Bar con musica">
                                    <label class="check-l" for="text">Bar con musica en vivo</label>
                                </div> --}}

                                {{-- <div class="form-b">
                                    <div class="radio-b">
                                        <input type="radio" name="establecimieto" id="restaurante">
                                        <label for="restaurante">Restaurantes</label>

                                        <input type="radio" name="establecimieto" id="comedor">
                                        <label for="comedor">Comedores</label>
                                    </div>
                                </div> --}}

                                {{-- <div class="filtro-buscar">
                                    <input type="radio" name="establecimieto" id="restaurante">
                                    <label for="restaurante">Restaurantes</label>

                                    <input type="radio" name="establecimieto" id="comedor">
                                    <label for="comedor">Comedores</label>
                                </div> --}}
                                

                                <input type="radio" name="Tipo_establecimiento" id="res" value="Restaurante">
                                <label class="buscador-d" for="res">Restaurantes </label>
                                <input type="radio" name="Tipo_establecimiento" id="com" value="Comedor">
                                <label class="buscador-d" for="com">Comedores</label>
    
                            </div>
                        </div>
                        <div class="border-b">
                            <br>
                            <h5 class="lab">Caracteristicas</h5>
                            
                            <div>
                                <input type="radio" name="Tipo_servicio" id="comll" value="Comidas para llevar">
                                <label class="buscador-d" for="comll">Reservaciones</label>
                                <input type="radio" name="Tipo_servicio" id="mesa" value="Servicio de mesa">
                                <label class="buscador-d" for="mesa">Wifi</label>
                                <input type="radio" name="Tipo_servicio" id="libre" value="Asientos al aire libre ">
                                <label class="buscador-d" for="libre">Servicio de mesa</label>
                                <input type="radio" name="Tipo_servicio" id="reser" value="Reservaciones">
                                <label class="buscador-d" for="reser">Patio de juegos</label>
                            </div>
                        </div>
                        <div class="border-b">
                            <br>
                            <h5 class="lab">Comidas</h5>
                            <div>
                                <input type="radio" name="Comidas" id="des" value="Desayuno">
                                <label class="buscador-d" for="des">Desayuno</label>
                                <input type="radio" name="Comidas" id="alm" value="Almuerzo">
                                <label class="buscador-d" for="alm">Almuerzo</label>
                                <input type="radio" name="Comidas" id="Comida" value="Comida">
                                <label class="buscador-d" for="Comida">Comida</label>
                                <input type="radio" name="Comidas" id="Cena" value="Cena">
                                <label class="buscador-d" for="Cena">Cena</label>
                            </div>
                        </div>


                        <div class="border-b">
                            <br>
                            <h5 class="lab">Precio</h5>
                            <div>
                                <input type="radio" name="Precio" id="Elegante" value="Elegante">
                                <label class="buscador-d" for="Elegante">Elegante</label>
                                <input type="radio" name="Precio" id="Gama Media" value="Gama Media">
                                <label class="buscador-d" for="Gama Media">Gama Media</label>
                                <input type="radio" name="Precio" id="Economico" value="Economico">
                                <label class="buscador-d" for="Economico">Economico</label>
                            </div>
                        </div>
                    </div>
    
                    <input class="btn btn-primary" type="submit" value=" Buscar" style="margin-top: 5%;margin-bottom: 6%;margin-left: 35%;">
                </form>
            </div>
        </div>


        <div class="div2">
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
                        @foreach ($Consultas as $Consulta)
                            @if (($Consulta->estado) == 1)
                                <div class="card-1">
                                    <div class="card-body">
                                        <div class="sep-t">
                                            <div class="izquierda-11">
                                                <img class="foto-l" src="{{asset($Consulta->File)}}" >
                                            </div>
                                            <div  class="centro-11">
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
                                </div> 
                            @else
                                
                            @endif
                        @endforeach  
                    </div> 
                </div>
            @endif
        </div>

    </div>

    

    
@endsection