@extends('layouts.plantillaproveedor')


@section('content')

    <section class="sec">
        <div class="div">
            <h2 class="titulo">Editar local</h2>

            <div class="inf-ub">

                <div class="cuadro">
                    <div class="containers-1">
                        <form class="frm" action="{{route('local.update',$local->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <center>
                                    <h2>Informacion general</h2><br>
                                </center>
                                <div class="contenido-d">
                                    <div class="seccion-i">
                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="nombre" type="text" @error('nombre') is-invalid @enderror" name="nombre"  value="{{ old('nombre') ?? $local->nombre }}" required autocomplete="nombre" autofocus>
                                                    
                                                @error('nombre')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                        
                                                <div class="underline"></div>
                        
                                                <label for="Nombre">Ingresa el nombre del local</label>
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>
                
                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="Telefono" type="text" @error('Telefono') is-invalid @enderror" name="Telefono" value="{{ old('Telefono') ?? $local->Telefono }}" required autocomplete="Telefono" autofocus>
                                                
                                                @error('Telefono')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                        
                                                <div class="underline"></div>
                        
                                                <label for="Telefono">Agregar numero de telefono</label>
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>
                
                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="sitioweb" type="text" @error('sitioweb') is-invalid @enderror" name="sitioweb" value="{{ old('sitioweb') ?? $local->sitioweb }}" required autocomplete="sitioweb" autofocus>
                                                
                                                @error('sitioweb')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                        
                                                <div class="underline"></div>
                                                <label for="Sirtio web">Sitio web</label>
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>


                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="descripcion" type="text" @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') ?? $local->descripcion }}" required autocomplete="descripcion" autofocus>
                                                
                                                @error('descripcion')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                        
                                                <div class="underline"></div>
                        
                                                <label for="descripcion">Descripcion</label>
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>


                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="CP" type="text" @error('CP') is-invalid @enderror" name="CP" value="{{ old('CP') ?? $local->CP }}" required  autocomplete="CP" autofocus>
                                                
                                                @error('CP')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                        
                                                <div class="underline"></div>
                        
                                                <label for="CP">Codigo Postal</label>
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>
            
            
                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="email" type="text" @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $local->email }}" required autocomplete="email" autofocus>
                                                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                        
                                                <div class="underline"></div>
                        
                                                <label for="email">Correo electronico</label>
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>
                
                                       
                                    </div>
                
                
                                    <div class="seccion-d">
                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="Municipio" type="text" @error('Municipio') is-invalid @enderror" name="Municipio" value="{{ old('Municipio') ?? $local->Municipio }}" required autocomplete="Municipio" autofocus>
                                                    
                                                @error('Municipio')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                        
                                                <div class="underline"></div>
                        
                                                <label for="Municipio">Municipio</label>
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>


                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="Colonia" type="text" @error('Colonia') is-invalid @enderror" name="Colonia" value="{{ old('Colonia') ?? $local->Colonia }}" required autocomplete="Colonia" autofocus>
                                                    
                                                @error('Colonia')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                        
                                                <div class="underline"></div>
                        
                                                <label for="Colonia">Colonia</label>
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>


                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="Calle" type="text" @error('Calle') is-invalid @enderror" name="Calle" value="{{ old('Calle') ?? $local->Calle }}" required autocomplete="Calle" autofocus>
                                                    
                                                @error('Calle')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                        
                                                <div class="underline"></div>
                        
                                                <label for="Calle">Calle</label>
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>


                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="Numerolocal" type="text" @error('Numerolocal') is-invalid @enderror" name="Numerolocal" value="{{ old('Numerolocal') ?? $local->Numerolocal }}" required autocomplete="Numerolocal" autofocus>
                                                    
                                                @error('Numerolocal')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                        
                                                <div class="underline"></div>
                        
                                                <label for="Numerolocal">Numero del Local</label>
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>
                
                                        

                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                {{-- <input id="rangoprecio" type="text" @error('rangoprecio') is-invalid @enderror" name="rangoprecio" required autocomplete="rangoprecio" autofocus>
                                                
                                                @error('rangoprecio')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                        
                                                <div class="underline"></div>
                        
                                                <label for="rangoprecio">Rango de Precio</label> --}}
                
                                            </span>
                                            <span class="input-data"></span>

                                            <label for="">Rango de Precio</label><br>
                                            <div class="rango-P">
                                                <input class="rango" type="text" name="rangoprecio[]" value="{{ old('rangoprecio') ?? $rangoprecio1 }}"><h1>-</h1>
                                                <input class="rango" type="text" name="rangoprecio[]" value="{{ old('rangoprecio') ?? $rangoprecio2 }}">
                                            </div>
                                        </span>

                                        
                
                                        
                                    </div>
                                </div>
            
            
            
                                <div class="contenido-d">
                                    <div class="seccion-i">
                                        <h2 class="title-l">¿En que se destaca este restaurante?</h2>
                                        <div class="form-group form-check">
                                            <div class="seccion-sp">
                                                <div class="div-li">
                                                    <input type="checkbox" class="form-check-input" id="Bar con musica" name="destacado[]" value="Bar con musica" @if (in_array('Bar con musica',$destacado)) checked @endif>
                                                    <label class="form-check-label" for="text">Bar con musica en vivo</label><br>
                                                    <input type="checkbox" class="form-check-input" id="grupos" name="destacado[]" value="Grupos grandes" @if (in_array('Grupos grandes',$destacado)) checked @endif>
                                                    <label class="form-check-label" for="text">Grupos grandes</label><br>
                                                    <input type="checkbox" class="form-check-input" id="comidalocal" name="destacado[]" value="Comida local" @if (in_array('Comida local',$destacado)) checked @endif>
                                                    <label class="form-check-label" for="text">Comida local</label><br>
                                                </div>
                                                <div class="div-ld">
                                                    <input type="checkbox" class="form-check-input" id="pueblosabor" name="destacado[]" value="Pueblo con sabor" @if (in_array('Pueblo con sabor',$destacado)) checked @endif>
                                                    <label class="form-check-label" for="">Pueblo con sabor</label><br>
                                                    <input type="checkbox" class="form-check-input" id="reuniones" name="destacado[]" value="Reuniones de negocios" @if (in_array('Reuniones de negocios',$destacado)) checked @endif>
                                                    <label class="form-check-label" for="text">Reuniones de negocios</label><br>
                                                    <input type="checkbox" class="form-check-input" id="oespeciales" name="destacado[]" value="Ocaciones especiales" @if (in_array('Ocaciones especiales',$destacado)) checked @endif>
                                                    <label class="form-check-label" for="text">Ocaciones especiales</label>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                       
                                    </div>
                                    
                                    
                                    <div class="seccion-d">
                                        
                                        <h2 class="title-l">¿Que comidas sirve en este restaurante?</h2>
                                        <div class="form-group form-check">

                                            <div class="seccion-sp">
                                                <div class="div-li">
                                                    <input type="checkbox" class="form-check-input" id="desayuno" name="comidas[]" value="Desayuno" @if (in_array('Desayuno',$comidas)) checked @endif>
                                                    <label class="form-check-label" for="">Desayuno</label><br>
                                                    <input type="checkbox" class="form-check-input" id="almuerzo" name="comidas[]" value="Almuerzo" @if (in_array('Almuerzo',$comidas)) checked @endif>
                                                    <label class="form-check-label" for="">almerzo</label><br>
                                                    <input type="checkbox" class="form-check-input" id="abiertotarde" name="comidas[]" value="Abierto 24hrs" @if (in_array('Abierto 24hrs',$comidas)) checked @endif>
                                                    <label class="form-check-label" for="">Abierto 24 hrs</label><br>
                                                    
                                                </div>
                                                <div class="div-d">
                                                    <input type="checkbox" class="form-check-input" id="bebidas" name="comidas[]" value="Bebidas" @if (in_array('Bebidas',$comidas)) checked @endif>
                                                    <label class="form-check-label" for="">Bebidas</label><br>
                                                    <input type="checkbox" class="form-check-input" id="cena" name="comidas[]" value="Cena" @if (in_array('Cena',$comidas)) checked @endif>
                                                    <label class="form-check-label" for="">cena</label><br>
                                                    <input type="checkbox" class="form-check-input" id="brunch" name="comidas[]" value="Brunch" @if (in_array('Brunch',$comidas)) checked @endif>
                                                    <label class="form-check-label" for="">Brunch</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>



                                <div class="contenido-d">
                                    <div class="seccion-i">
                                        <h2 class="title-l">¿Dietas especiales?</h2>
                                        <div class="form-group form-check">
                                            <div class="seccion-sp">
                                                <div class="div-li">
                                                    <input type="checkbox" class="form-check-input" id="bar" name="dietas_especiales[]" value="Apto para vegetarianos" @if (in_array('Apto para vegetarianos',$dietas_especiales)) checked @endif>
                                                    <label class="form-check-label" for="text">Apto para vegetarianos</label><br>
                                                    <input type="checkbox" class="form-check-input" id="grupos" name="dietas_especiales[]" value="Opciones veganas" @if (in_array('Opciones veganas',$dietas_especiales)) checked @endif>
                                                    <label class="form-check-label" for="text">Opciones veganas</label><br>
                                                </div>
                                                <div class="div-ld">
                                                    <input type="checkbox" class="form-check-input" id="pueblosabor" name="dietas_especiales[]" value="Opciones sin gluten" @if (in_array('Opciones sin gluten',$dietas_especiales)) checked @endif>
                                                    <label class="form-check-label" for="">Opciones sin gluten</label><br>
                                                    <input type="checkbox" class="form-check-input" id="reuniones" name="dietas_especiales[]" value="Ninguna" @if (in_array('Ninguna',$dietas_especiales)) checked @endif>
                                                    <label class="form-check-label" for="text">Ninguna</label><br>
                                                    
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                       
                                    </div>
                                    
                                    
                                    <div class="seccion-d">

                                        <h2 class="title-l">¿Que tipo de establecimieto es?</h2>
                                        
                                        <div class="seccion-sp">
                                            <div class="div-li">
                                                <input type="radio" name="tipo_establecimiento[]" value="Restaurante" @if (in_array('Restaurante',$tipo_establecimiento)) checked @endif id="tipo-e">
                                                <label class="label-l" for="restaurante">Restaurante</label>
                                                <input type="radio" name="tipo_establecimiento[]" value="Comedor" @if (in_array('Comedor',$tipo_establecimiento)) checked @endif id="tipo-e">
                                                <label class="label-l" for="comedor">Comedor</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                           
                                <div class="contenido-d">
                                    <div class="seccion-i">
                                        <h2 class="title-l">¿Que tan costoso es?</h2>

                                        <div class="seccion-sp">
                                            <div class="div-li">
                                                <input type="radio" name="precio[]" value="Economico" id="costo" @if (in_array('Economico',$precio)) checked @endif>
                                                <label class="label-l" for="Economico">Economico</label>
                                                <input type="radio" name="precio[]" value="Gama Media" id="costo" @if (in_array('Gama Media',$precio)) checked @endif>
                                                <label class="label-l" for="gamaMedia">Gama media</label>
                                                <input type="radio" name="precio[]" value="Elegante" id="costo" @if (in_array('Elegante',$precio)) checked @endif>
                                                <label class="label-l" for="Elegante">Elegante</label>
                                            </div>
                                        </div>


                                        <div class="select-PS">
                                            <label class="select">¿Cuenta con el distintivo Pueblo con sabor?</label>
                                            <select name="Distintivo" class="TipoU" id="inputGroupSelect01">
                                                <option value="{{ old('Distintivo') ?? $local->Distintivo }}" >Selecciona</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>
                                       
                                    </div>
                
                
                                    <div class="seccion-d">
                                        
                                        <h2 class="title-l">¿Que tipos de servicios ofrece este restaurante?</h2>
                                        <div class="form-group form-check">
                                            <div class="seccion-sp">
                                                <div class="div-li">
                                                    <input type="checkbox" class="form-check-input" id="juegos" name="tipo_servicio[]" value="Patio de Juegos" @if (in_array('Patio de Juegos',$tipo_servicio)) checked @endif>
                                                    <label class="form-check-label" for="text">Patio de juegos</label><br>
                                                    <input type="checkbox" class="form-check-input" id="efectivo" name="tipo_servicio[]" value="Efectivo" @if (in_array('Efectivo',$tipo_servicio)) checked @endif>
                                                    <label class="form-check-label" for="text">Solo pagos en efectivo</label><br>
                                                    <input type="checkbox" class="form-check-input" id="nofumar" name="tipo_servicio[]" value="No permite fumar" @if (in_array('No permite fumar',$tipo_servicio)) checked @endif>
                                                    <label class="form-check-label" for="text">No se permite fumar</label><br>
                                                    <input type="checkbox" class="form-check-input" id="wifi" name="tipo_servicio[]" value="WIFI" @if (in_array('WIFI',$tipo_servicio)) checked @endif>
                                                    <label class="form-check-label" for="text">Wifi grtis</label><br>
                                                    <input type="checkbox" class="form-check-input" id="serviciomesa" name="tipo_servicio[]" value="Servicio de mesa" @if (in_array('Servicio de mesa',$tipo_servicio)) checked @endif>
                                                    <label class="form-check-label" for="text">Servicio de mesa</label><br>
                                                    
                                                </div>
                                                <div class="div-ld">
                                                    <input type="checkbox" class="form-check-input" id="reservaciones" name="tipo_servicio[]" value="Reservaciones" @if (in_array('Reservaciones',$tipo_servicio)) checked @endif>
                                                    <label class="form-check-label" for="text">Reservaciones</label><br>
                                                    <input type="checkbox" class="form-check-input" id="tele" name="tipo_servicio[]" value="TV" @if (in_array('TV',$tipo_servicio)) checked @endif>
                                                    <label class="form-check-label" for="text">Television</label><br>
                                                    <input type="checkbox" class="form-check-input" id="tcredito" name="tipo_servicio[]" value="Acepta tarjeta de credito" @if (in_array('Acepta tarjeta de credito',$tipo_servicio)) checked @endif>
                                                    <label class="form-check-label" for="text">Acepta tarjetas de Credito</label><br>
                                                    <input type="checkbox" class="form-check-input" id="sruedas" name="tipo_servicio[]" value="Acceso para silla de ruedas" @if (in_array('Acceso para silla de ruedas',$tipo_servicio)) checked @endif>
                                                    <label class="form-check-label" for="text">Acceso para silla de ruedas</label><br>
                                                    <input type="checkbox" class="form-check-input" id="tdebito" name="tipo_servicio[]" value="Acepta tarjetas de debido" @if (in_array('Acepta tarjetas de debido',$tipo_servicio)) checked @endif>
                                                    <label class="form-check-label" for="text">Acepta tarjetas de Debito</label><br>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>



                                <div class="contenido-d">
                                    <div class="seccion-i">
                                        
                                        <div class="TipoUser1">
                                            <label class="select">¿Incluye IVA?</label>
                                            <select name="IVA" class="TipoU" id="inputGroupSelect01">
                                                <option value="{{ old('IVA') ?? $local->IVA }}">Selecciona</option>
                                                <option value="IVA">SI</option>
                                                <option value=" ">NO</option>
                                            </select>
                                        </div>
                                       
                                    </div>
                
                
                                    <div class="seccion-d">
                                        
                                        <div class="TipoUser1">
                                            <label class="select">¿Incluye Propina?</label>
                                            <select name="propina" class="TipoU" id="inputGroupSelect01">
                                                <option value="{{ old('propina') ?? $local->propina }}">Selecciona</option>
                                                <option value="Propina">SI</option>
                                                <option value=" ">NO</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>



                                
                                <div class="contenido-d">
                                    <div class="seccion-i">
                                        
                                        <div class="TipoUser1">
                                            <label class="select">¿FACTURA?</label>
                                            <select name="facturacion"  class="TipoU" id="inputGroupSelect01">
                                                <option value="{{ old('facturacion') ?? $local->facturacion }}">Selecciona</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>
                                       
                                    </div>
                
                
                                    <div class="seccion-d">
                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="montofactura" type="text" @error('montofactura') is-invalid @enderror" name="montofactura" value="{{ old('montofactura') ?? $local->montofactura }}"  required autocomplete="montofactura" autofocus>
                                                
                                                @error('montofactura')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                        
                                                <div class="underline"></div>
                        
                                                <label for="Nombre">Monto de facturacion</label>
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>
                                    
                                    </div>
                                </div>

                                <div class="sep-image">
                                    <span class="form-row">
                                        <span class="input-data">
                                            <input id="file" type="file" @error('file') is-invalid @enderror" name="file" value="{{ $local->file }}"  autocomplete="file" autofocus>
                                                    
                                            @error('file')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                
                                            
                                        </span>
                                        <span class="input-data"></span>
                                    </span>
                                </div>
            
                                <div class="contenido-d">
                                    <button class="button" type="submit">Agregar</button>
                                </div>










                                <di class="jun">
            
            
                                    {{-- <div class="in">
                                        <h2>Informacion general</h2>
                                        <label for="text">Ingresa el nombre del local :</label><br>
                                        <input type="text" style="padding-right: 50%;" name="nombrelocal">
                                        <label for="text">Agregar numero de telefono :</label><br>
                                        <input type="text" style="padding-right: 50%;" name="telefono"><br>
                                        <label for="text"> Sitio web: </label><br>
                                        <input type="url" style="padding-right: 50%;" name="sitioweb"><br>
                                        <label for="text">Correo electronio :</label><br>
                                        <input type="email" style="padding-right: 50%;" name="correo">
                                    </div>
                                    <div class="ubi">
                                        <h2>Ubicacion</h2>
                                        <label for="text">
                                            Direccion :
                                        </label><br>
                                        <input type="text" style="padding-right: 20%;" name="direccion"><br>
                                        <label for="text">
                                            Codigo postal :
                                        </label><br>
                                        <input type="text" style="padding-right:20%;" name="codigopostal">
                                    </div> --}}
                                </di>
                                <!--
                                <div class="hor">
                                    <h2>Agregar horario de atencion</h2>
                                    <label for="text">
                                        <h5>Lunes :</h5>
                                    </label><br>
                                    <span>De:</span><input type="text" placeholder="Formato de 24 horas" name="luini">
                                    <span>a</span>
                                    <input type="text " placeholder="Formato de 24 horas" name="lucie">
            
                                    <br> <a class="aa" href="#">agregar mas horarios</a>
                                    <br><input type="checkbox" class="form-check-input" id="lutodo" name="lutodo">
                                    <label class="form-check-label" for="">Abierto las 24 horas</label>
            
                                </div>
                                <div class="hor">
            
                                    <label for="text">
                                        <h5>Martes :</h5>
                                    </label><br>
                                    <span>De:</span><input type="text" placeholder="Formato de 24 horas" name="marinilutodo">
                                    <span>a</span>
                                    <input type="text" placeholder="Formato de 24 horas" name="marcie">
            
                                    <br> <a href="#">agregar mas horarios</a>
                                    <br><input type="checkbox" class="form-check-input" id="martodo" name="martodo">
                                    <label class="form-check-label" for="">Abierto las 24 horas</label>
            
                                </div>
                                <div class="hor">
            
                                    <label for="text">
                                        <h5>Miercoles :</h5>
                                    </label><br>
                                    <span>De:</span><input type="text" placeholder="Formato de 24 horas" name="mierini">
                                    <span>a</span>
                                    <input type="text" placeholder="Formato de 24 horas" name="miercie">
            
                                    <br> <a href="#">agregar mas horarios</a>
                                    <br><input type="checkbox" class="form-check-input" id="miertodo" name="miertodo">
                                    <label class="form-check-label" for="">Abierto las 24 horas</label>
            
                                </div>
                                <div class="hor">
            
                                    <label for="text">
                                        <h5>Jueves :</h5>
                                    </label><br>
                                    <span>De:</span><input type="text" placeholder="Formato de 24 horas" name="juini">
                                    <span>a</span>
                                    <input type="text" placeholder="Formato de 24 horas" name="jucie">
            
                                    <br> <a href="#">agregar mas horarios</a>
                                    <br><input type="checkbox" class="form-check-input" id="jutodo" name="jutodo">
                                    <label class="form-check-label" for="">Abierto las 24 horas</label>
            
                                </div>
                                <div class="hor">
            
                                    <label for="text">
                                        <h5>Viernes :</h5>
                                    </label><br>
                                    <span>De:</span><input type="text" placeholder="Formato de 24 horas" name="viini">
                                    <span>a</span>
                                    <input type="text" placeholder="Formato de 24 horas" name="vicie">
            
                                    <br> <a href="#">agregar mas horarios</a>
                                    <br><input type="checkbox" class="form-check-input" id="vitodo" name="vitodo">
                                    <label class="form-check-label" for="">Abierto las 24 horas</label>
            
                                </div>
                                <div class="hor">
            
                                    <label for="text">
                                        <h5>Sabado :</h5>
                                    </label><br>
                                    <span>De:</span><input type="text" placeholder="Formato de 24 horas" name="saini">
                                    <span>a</span>
                                    <input type="text" placeholder="Formato de 24 horas" name="sacie">
            
                                    <br> <a href="#">agregar mas horarios</a>
                                    <br><input type="checkbox" class="form-check-input" id="satodo" name="satodo">
                                    <label class="form-check-label" for="">Abierto las 24 horas</label>
            
                                </div>
                                <div class="hor">
            
                                    <label for="text">
                                        <h5>Domingo :</h5>
                                    </label><br>
                                    <span>De:</span><input type="text" placeholder="Formato de 24 horas" name="doini">
                                    <span>a</span>
                                    <input type="text" placeholder="Formato de 24 horas" name="docie">
            
                                    <br> <a href="#">agregar mas horarios</a>
                                    <br><input type="checkbox" class="form-check-input" id="dotodo" name="dotodo ">
                                    <label class="form-check-label" for="">Abierto las 24 horas</label>
                                </div>
                                 -->
                                {{-- <div class="cat">
                                    <h2>Categorias de tipos de comidas</h2>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="tacos" name="tacos">
                                        <label class="form-check-label" for="">Tacos</label><br>
                                        <input type="checkbox" class="form-check-input" id="mole" name="mole">
                                        <label class="form-check-label" for="">Mole</label><br>
                                        <input type="checkbox" class="form-check-input" id="enchiladas" name="enchiladas">
                                        <label class="form-check-label" for="">Enchiladas</label>
                                    </div>
                                </div>
                                <div class="cat">
                                    <h2>¿Que comidas sirve en este restaurante?</h2>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="desayuno" name="desayuno">
                                        <label class="form-check-label" for="">Desayuno</label><br>
                                        <input type="checkbox" class="form-check-input" id="almuerzo" name="almuerzo">
                                        <label class="form-check-label" for="">almerzo</label><br>
                                        <input type="checkbox" class="form-check-input" id="abiertotarde" name="abiertotarde">
                                        <label class="form-check-label" for="">abierto hasta tarde</label><br>
                                        <input type="checkbox" class="form-check-input" id="bebidasabiertotarde"
                                            name="bebidasabiertotarde">
                                        <label class="form-check-label" for="">Bebidas</label><br>
                                        <input type="checkbox" class="form-check-input" id="cena" name="cena">
                                        <label class="form-check-label" for="">cena</label><br>
                                        <input type="checkbox" class="form-check-input" id="brunch" name="brunch">
                                        <label class="form-check-label" for="">Brunch</label>
            
                                    </div>
                                </div> --}}
                                {{-- <div class="cat">
                                    <h2>¿En que se destaca este restaurante?</h2>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="bar" name="bar">
                                        <label class="form-check-label" for="text">Bar con musica en vivo</label><br>
                                        <input type="checkbox" class="form-check-input" id="grupos" name="grupos">
                                        <label class="form-check-label" for="text">Grupos grandes</label><br>
                                        <input type="checkbox" class="form-check-input" id="comidalocal" name="comidalocal">
                                        <label class="form-check-label" for="text">Comida local</label><br>
                                        <input type="checkbox" class="form-check-input" id="pueblosabor" name="pueblosabor">
                                        <label class="form-check-label" for="">Pueblo con sabor</label><br>
                                        <input type="checkbox" class="form-check-input" id="reuniones" name="reuniones">
                                        <label class="form-check-label" for="text">Reuniones de negocios</label><br>
                                        <input type="checkbox" class="form-check-input" id="oespeciales" name="oespeciales">
                                        <label class="form-check-label" for="text">Ocaciones especiales</label>
            
                                    </div>
                                </div>
                                <div class="cat">
                                    <h2>¿Que tipos de servicios ofrece este restaurante?</h2>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="juegos" name="juegos">
                                        <label class="form-check-label" for="text">Patio de juegos</label><br>
                                        <input type="checkbox" class="form-check-input" id="efectivo" name="efectivo">
                                        <label class="form-check-label" for="text">Solo pagos en efectivo</label><br>
                                        <input type="checkbox" class="form-check-input" id="nofumar" name="nofumar">
                                        <label class="form-check-label" for="text">No se permite fumar dentro de
                                            el</label><br>
                                        <input type="checkbox" class="form-check-input" id="wifi" name="wifi">
                                        <label class="form-check-label" for="text">Wifi grtis</label><br>
                                        
                                        <input type="checkbox" class="form-check-input" id="serviciomesa" name="serviciomesa">
                                        <label class="form-check-label" for="text">Servicio de mesa</label><br>
                                        <input type="checkbox" class="form-check-input" id="reservaciones" name="reservaciones">
                                        <label class="form-check-label" for="text">Reservaciones</label><br>
                                        <input type="checkbox" class="form-check-input" id="tele" name="tele">
                                        <label class="form-check-label" for="text">Television</label><br>
                                        <input type="checkbox" class="form-check-input" id="tcredito" name="tcredito">
                                        <label class="form-check-label" for="text">Acepta tarjetas de Credito</label><br>
                                        <input type="checkbox" class="form-check-input" id="sruedas" name="sruedas">
                                        <label class="form-check-label" for="text">Acceso para silla de ruedas</label><br>
                                        <input type="checkbox" class="form-check-input" id="tdebito" name="sruedas">
                                        <label class="form-check-label" for="text">Acepta tarjetas de Debito</label><br>
                                        
            
                                    </div>
            
                                </div>
                                 --}}
                                {{-- <div class="cat">
                                    <h2>¿Que tan costoso es?</h2>
            
            
                                    <div class="ra">
                                        <input type="radio" name="costoso" id="Economico">
                                        <label for="Economico">Economico</label><br>
                                        <input type="radio" name="costoso" id="gamaMedia">
                                        <label for="gamaMedia">Gama media</label><br>
                                        <input type="radio" name="costoso" id="Elegante">
                                        <label for="Elegante">Elegante</label><br>
                                    </div>
            
            
            
            
            
            
                                    <div class="form-group form-check">
            
                                        <label for="text">Incluye IVA</label>
                                        <select name="iva" id="iva" style="margin-left: 8%;">
                                            <option value="">Elige</option>
                                            <option value="SI">SI</option>
                                            <option value="NO">NO</option>
                                        </select>
                                        <label for="text" style="margin-left: 16%;">Incluye Propina</label>
                                        <select name="propina" id="propina">
                                            <option value="">Elige</option>
                                            <option value="SI">SI</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </div>
                                </div>
            
                                 --}}
                                
                                

                                {{-- <div class="cat">
                                    <h2>¿Que tipo de establecimieto es?</h2>
            
                                    <div class="ra">
                                        <input type="radio" name="tipEst" id="restaurante">
                                        <label for="restaurante">Restaurante</label>
                                        <input type="radio" name="tipEst" id="comedor">
                                        <label for="comedor">Comedor</label>
                                    </div>
            
                                </div> --}}
                                {{-- <div class="cat">
                                    <h2>Imagen</h2>
                                    <input type="file" name="file" style="margin-left: 30%;">
                                </div> --}}
            
                                
            
                                {{-- <input type="submit" class="btn btn-primary" value="INSETAR"
                                    style="margin-left: auto;margin-bottom: 10%;margin-top: 4%;"> --}}
                            </div>
                        </form>
                    </div>   
                </div>   

                
            </div>
        </div>
    </section>

    


@endsection