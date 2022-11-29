@extends('layouts.plantillaproveedor')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('Locales.agregar') }}
        </ol>
    </nav>
@endsection


@section('content')

<script>
                            
    $(document).ready(function(){

        $('#inputGroupSelect01').on('change',function(){
            var selectValor = '#'+$(this).val();

            $('#pai').children('div').hide();
            $('#pai').children(selectValor).show();
            
        });

    });
    
    
     $(document).ready(function(){

    $('#inputGroupSelect02').on('change',function(){
        var selectValor = '#'+$(this).val();
        console.log(selectValor);

        $('#distintivo').children('div').show();
        $('#distintivo').children(selectValor).hide();
        
    });

    });


</script>

    
    <section class="sec">
        <div class="div">
            <h2 class="titulo">Ingresar un nuevo local</h2>
            <div class="inf-ub">
                <div class="cuadro">
                    <div class="containers-1">
                        <form class="frm" action="{{route('local.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="">
                                <center>
                                    <h2>Información general</h2><br>
                                </center>
                                <div class="contenido-d">
                                    <div class="seccion-i">
                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                {{-- <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" autocomplete="nombre" autofocus>
                                                     --}}
                                                <input class="form-control @error('nombre') is-invalid @enderror" id="nombre" type="text" name="nombre" value="{{ old('nombre') }}">
                                                
                                                <div class="underline"></div>
                                                <label for="Nombre">Ingresa el nombre del local</label>
                                                
                                                @if ($errors->has('nombre'))
                                                    <span class="error text-danger" for="input-name">{{$errors->first('nombre')}}</span>
                                                @endif
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>

                                                        
                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="Telefono" type="text" class="form-control @error('Telefono') is-invalid @enderror" name="Telefono" value="{{ old('Telefono') }}">
                                                
                                                <div class="underline"></div>
                        
                                                <label for="Telefono">Agregar número de teléfono</label>
                                                
                                                @if ($errors->has('Telefono'))
                                                    <span class="error text-danger" for="input-name">{{$errors->first('Telefono')}}</span>
                                                @endif
                        
                                                
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>
                
                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="sitioweb" type="text" class="form-control @error('sitioweb') is-invalid @enderror" name="sitioweb" value="{{ old('sitioweb') }}">
                                                
                                                <div class="underline"></div>
                                                <label for="Sirtio web">Sitio web</label>
                                                
                                                 @if ($errors->has('sitioweb'))
                                                    <span class="error text-danger" for="input-name">{{$errors->first('sitioweb')}}</span>
                                                @endif
                        
                                                
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>


                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}">
                                                
                                                <div class="underline"></div>
                        
                                                <label for="descripcion">Descripción</label>
                                                
                                                @if ($errors->has('descripcion'))
                                                    <span class="error text-danger" for="input-name">{{$errors->first('descripcion')}}</span>
                                                @endif
                        
                                                
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>


                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="CP" type="text" class="form-control @error('CP') is-invalid @enderror" name="CP" value="{{ old('CP') }}">
                                                
                                                <div class="underline"></div>
                        
                                                <label for="CP">Código Postal</label>
                                                
                                                @if ($errors->has('CP'))
                                                    <span class="error text-danger" for="input-name">{{$errors->first('CP')}}</span>
                                                @endif
                        
                                                
                
                                            </span>
                                        </span>
            
                                    </div>
                
                                    
                                    <div class="seccion-d">
                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="Municipio" type="text" class="form-control @error('Municipio') is-invalid @enderror" name="Municipio" value="{{ old('Municipio') }}">
                                                
                                                <div class="underline"></div>
                        
                                                <label for="Municipio">Municipio</label>
                                                
                                                @if ($errors->has('Municipio'))
                                                    <span class="error text-danger" for="input-name">{{$errors->first('Municipio')}}</span>
                                                @endif
                        
                                                
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>


                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="Colonia" type="text" class="form-control @error('Colonia') is-invalid @enderror" name="Colonia" value="{{ old('Colonia') }}">
                                                
                                                <div class="underline"></div>
                        
                                                <label for="Colonia">Colonia</label>
                                                
                                                @if ($errors->has('Colonia'))
                                                    <span class="error text-danger" for="input-name">{{$errors->first('Colonia')}}</span>
                                                @endif
                        
                                                
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>


                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="Calle" type="text" class="form-control @error('Calle') is-invalid @enderror" name="Calle" value="{{ old('Calle') }}">
                                                    
                                                <div class="underline"></div>
                        
                                                <label for="Calle">Calle</label>
                                                
                                                @if ($errors->has('Calle'))
                                                    <span class="error text-danger" for="input-name">{{$errors->first('Calle')}}</span>
                                                @endif
                        
                                                
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>


                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="Numerolocal" type="text" class="form-control @error('Numerolocal') is-invalid @enderror" name="Numerolocal" value="{{ old('Numerolocal') }}">
                                                
                                                <div class="underline"></div>
                        
                                                <label for="Numerolocal">Número del Local</label>
                                                
                                                @if ($errors->has('Numerolocal'))
                                                    <span class="error text-danger" for="input-name">{{$errors->first('Numerolocal')}}</span>
                                                @endif
                        
                
                                            </span>
                                            <span class="input-data"></span>
                                        </span>

                                        <span class="form-row">
                                            <span class="input-data">
                                                
                                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                                
                                                <div class="underline"></div>
                        
                                                <label for="email">Correo electrónico</label>
                
                
                                                @if ($errors->has('email'))
                                                    <span class="error text-danger" for="input-name">{{$errors->first('email')}}</span>
                                                @endif
                        
                        
                                            </span>
                                            
                                        </span>


                                        
                                    </div>
                                    
                                </div>
                                
                                
                                <div class="contenido-d">
                                    <div class="seccion-i">
                                        <div class="contenido-f">
                                            <div class="TipoUser1">
                                                <label class="select">¿FACTURA?</label>
                                                <select name="facturacion" class="TipoU @error('facturacion') is-invalid @enderror" id="inputGroupSelect01">
                                                    <option value="">Selecciona</option>
                                                    <option value="SI" {{(old('facturacion') == "SI") ? "selected":""}}>SI</option>
                                                    <option value="NO" {{(old('facturacion') == "NO") ? "selected":""}}>NO</option>
                                                </select>
                                            </div>
                                            @if ($errors->has('facturacion'))
                                                <span class="error text-danger" for="input-name">{{$errors->first('facturacion')}}</span>
                                            @endif
                                            
                                        </div>
                                        @if ($errors->has('montofactura'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('montofactura')}}</span>
                                        @endif
                                    
                                        <!--<div  id="pai">-->
                                        <!--    <div id="SI" class="factura">-->
                                        <!--        <span class="form-row">-->
                                        <!--            <span class="input-data">-->
                                                        
                                        <!--                <input id="montofactura" type="text" class=" @error('montofactura') is-invalid @enderror" name="montofactura" value="{{ old('montofactura') }}" placeholder="0.00">-->
                                                        
                                        <!--                <div class="underline"></div>-->
                                    
                                        <!--                <label for="Nombre">Monto de facturacion</label>-->
                                    
                                        <!--            </span>-->
                                        <!--            <span class="input-data"></span>-->
                                        <!--        </span>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        
                                        
                                        
                                    </div>
                
                
                                    <!--<div class="seccion-d">-->
                                    <!--    <div class="TipoUser1">-->
                                    <!--        <label class="select">¿Incluye IVA?</label>-->
                                    <!--        <select name="IVA" class="TipoU @error('IVA') is-invalid @enderror" id="inputGroupSelect01">-->
                                    <!--            <option value="">Selecciona</option>-->
                                    <!--            <option value="SI" {{(old('IVA') == "SI") ? "selected":""}}>SI</option>-->
                                    <!--            <option value="NO" {{(old('IVA') == "NO") ? "selected":""}}>NO</option>-->
                                    <!--        </select>-->

                                    <!--    </div>-->
                                    <!--    @if ($errors->has('IVA'))-->
                                    <!--        <span class="error text-danger" for="input-name">{{$errors->first('IVA')}}</span>-->
                                    <!--    @endif-->
                                    <!--</div>-->
                                </div>
                                
                                
                                
                                <div id="pai">
                                    <div id="SI">
                                        <span class="contenido-d">
                                            <span class="seccion-i">
                                                <span class="factura">
                                                    <span class="form-row">
                                                        <span class="input-data">
                                                            
                                                            <input id="montofactura" type="text" class=" @error('montofactura') is-invalid @enderror" name="montofactura" value="{{ old('montofactura') }}" placeholder="0.00">
                                                            
                                                            <div class="underline"></div>
                                        
                                                            <label for="Nombre">Monto de facturacion</label>
                                        
                                                        </span>
                                                        <span class="input-data"></span>
                                                    </span>
                                                </span>
                                                
                                                
        
                                            </span>
        
        
                                            <span class="seccion-d">
                                                
                                                <span class="TipoUser1">
                                                    <label class="select">¿Incluye IVA?</label>
                                                    <select name="IVA" class="TipoU @error('IVA') is-invalid @enderror" id="inputGroupSelect01">
                                                        <option value="NO">Selecciona</option>
                                                        <option value="SI" {{(old('IVA') == "SI") ? "selected":""}}>SI</option>
                                                        <option value="NO" {{(old('IVA') == "NO") ? "selected":""}}>NO</option>
                                                    </select>
        
                                                </span>
                                                @if ($errors->has('IVA'))
                                                    <span class="error text-danger" for="input-name">{{$errors->first('IVA')}}</span>
                                                @endif
                                                
                                                <span class="TipoUser1">
                                                    <label class="select">¿Incluye Propina?</label>
                                                    <select name="propina" class="TipoU @error('propina') is-invalid @enderror" id="inputGroupSelect01">
                                                        <option value="NO">Selecciona</option>
                                                        <option value="SI" {{(old('propina') == "SI") ? "selected":""}}>SI</option>
                                                        <option value="NO" {{(old('propina') == "NO") ? "selected":""}}>NO</option>
                                                    </select>
                                                </span>
                                                @if ($errors->has('propina'))
                                                    <span class="error text-danger" for="input-name">{{$errors->first('propina')}}</span>
                                                @endif
        
                                            </span>
                                            
                                        </span>
                                    </div>
                                </div>
                                

                                
                                <div class="contenido-d">
                                    
                                    <div class="seccion-i">
                                        <div class="centro-r">
                                            <div class="rango-l">
                                                <label class="select">¿Cuenta con el distintivo Pueblo con sabor?</label><br>
                                            </div>
                                            <div class="rango-P">
                                                
                                                <select name="Distintivo" class="TipoU @error('Distintivo') is-invalid @enderror" id="inputGroupSelect02">
                                                    <option value="{{ old('Distintivo') }}">Selecciona</option>
                                                    <option value="SI" {{(old('Distintivo') == "SI") ? "selected":""}}>SI</option>
                                                    <option value="NO" {{(old('Distintivo') == "NO") ? "selected":""}}>NO</option>
                                                </select>
                                            </div>
                                        </div>
                                        @if ($errors->has('Distintivo'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('Distintivo')}}</span>
                                        @endif
                                        
                                        
                                    </div>
                                    
                                    <div class="seccion-d">
                                        <div id="distintivo">
                                            <div id="NO">
                                                <span style="display: grid">
                                                    
                                                    <span class="t-vigencia">
                                                        <label for="start"><I>Vigencia</I></label>
                                                    </span>
                                                    
                                                    <span class="vigencia">
                                                        <span class="fecha-v">
                                                            <label for="start"><I>Inicio</I></label>
                                                            <input id="inicio_vigencia" type="date" class=" @error('inicio_vigencia') is-invalid @enderror" name="inicio_vigencia" value="{{ old('inicio_vigencia') }}" value="2018-07-22" min="2016-01-01" max="2050-12-31" autocomplete="inicio_vigencia" autofocus>
                                                            
                                                        </span>
                                                        
                
                                                        <span class="fecha-v">
                                                            <label for="start"><I>Termina</I></label>
                                                            <input id="termina_vigencia" type="date" class=" @error('termina_vigencia') is-invalid @enderror" name="termina_vigencia" value="{{ old('termina_vigencia') }}" value="2018-07-22" min="2016-01-01" max="2050-12-31" autocomplete="termina_vigencia" autofocus>
                                                        </span>
                                                    </span>
                                                    @if ($errors->has('inicio_vigencia'))
                                                        <span class="error text-danger" for="input-name">{{$errors->first('inicio_vigencia')}}</span>
                                                    @endif
                                                    <br>
                                                    @if ($errors->has('termina_vigencia'))
                                                        <span class="error text-danger" for="input-name">{{$errors->first('termina_vigencia')}}</span>
                                                    @endif

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                       
                                </div>
                                
                                
                                 <div class="contenido-d">
                                    
                                    <div class="seccion-i">
                                        <div class="centro-r">
                                            <div class="rango-l">
                                                <label for="">Rango de Precio</label><br>
                                                <div class="rango-precio">
                                                    <div class="r-max">
                                                        <label for="Maximo">Minimo</label>
                                                    </div>
                                                    <div class="r-min">
                                                        <label for="Minimo">Maximo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rango-P">
                                                
                                                <input class="rango" type="text" class="form-control @error('rangoprecio.*') is-invalid @enderror" name="rangoprecio[]" value="{{ old('rangoprecio.0') }}"><h1>-</h1>
                                                <input class="rango" type="text" class="form-control @error('rangoprecio.*') is-invalid @enderror" name="rangoprecio[]" value="{{ old('rangoprecio.1') }}">
                                            </div>
                                            @if ($errors->has('rangoprecio.*'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('rangoprecio.*')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                </div>


            
                                <div class="contenido-d">
                                    <div class="seccion-i">
                                        <h2 class="title-l">¿En que se destaca este restaurante?</h2>
                                        <div class="form-group form-check">
                                            <div>
                                                <div class="check-lista">
                                                    
                                                    @foreach ($caracteristicas as $caracteristica)
                                                    
                                                        <input type="checkbox" class="form-check-input" id="grupos" name="destacado[]" value="{{$caracteristica->caracteristica}}" {{ (is_array(old('destacado')) && in_array("$caracteristica->caracteristica", old('destacado'))) ? ' checked' : '' }}>
                                                        <label class="form-check-label" for="text">{{$caracteristica->caracteristica}}</label><br>
    
                                                    @endforeach
                                                    
                                                </div>
                                            </div>
                                                @if ($errors->has('destacado'))
                                                    <span class="error text-danger" for="input-name">{{$errors->first('destacado')}}</span>
                                                @endif

                                        </div>
                                    </div>
                                    
                                    <div class="seccion-d">
                                        
                                        <h2 class="title-l">¿Qué comidas sirve el restaurante?</h2>
                                        <div class="form-group form-check">
                                            <div>
                                                <div class="check-lista">
                                                    
                                                    @foreach ($tiposcomidas as $tiposcomida)
                                                    
                                                        <input type="checkbox" class="form-check-input" id="tipocomida" name="comidas[]" value="{{$tiposcomida->comida}}" 
                                                        {{ (is_array(old('comidas')) && in_array("$tiposcomida->comida", old('comidas'))) ? ' checked' : '' }}>
                                                        <label class="form-check-label" for="text">{{$tiposcomida->comida}}</label><br>
    
                                                    @endforeach
                                                    
                                                </div>
                                                
                                            </div>
                                            @if ($errors->has('destacado'))
                                                <span class="error text-danger" for="input-name">{{$errors->first('comidas')}}</span>
                                            @endif
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                
                                <div class="contenido-d">
                                    
                                    <div class="seccion-i">
                                        <h2 class="title-l">¿Dietas especiales?</h2>
                                        <div class="form-group form-check">
                                            <div>
                                                <div class="check-lista">
                                                    
                                                    @foreach ($dietasespeciales as $dietaespecial)
                                                    
                                                        <input type="checkbox" class="form-check-input" id="dietas" name="dietas_especiales[]" value="{{$dietaespecial->dietas}}" {{ (is_array(old('dietas_especiales')) && in_array("$dietaespecial->dietas", old('dietas_especiales'))) ? ' checked' : '' }}>
                                                        <label class="form-check-label" for="text">{{$dietaespecial->dietas}}</label><br>
    
                                                    @endforeach
                                                    
                                                    
                                                    
                                                </div>
                                                
                                            </div>
                                             @if ($errors->has('destacado'))
                                                <span class="error text-danger" for="input-name">{{$errors->first('dietas_especiales')}}</span>
                                            @endif
                                        </div>
                                       
                                    </div>
                                    
                                    
                
                                    <div class="seccion-d">
                                        
                                        <h2 class="title-l">¿Qué tipo de establecimieto es?</h2>
                                        <div class="form-group form-check">
                                            <div>
                                                <div class="check-lista">
                                                    @foreach ($establecimietos as $establecimieto)
                                                            
                                                        <div>
                                                            <input class="rad" type="radio" name="tipo_establecimiento" value="{{$establecimieto->establecimiento}}" {{(old('tipo_establecimiento') == "$establecimieto->establecimiento") ? "checked":""}} id="rad" >
                                                            <label class="label-l" for="restaurante">{{$establecimieto->establecimiento}}</label>
                                                        </div>
                                                        
                                                    @endforeach

                                                </div>
                                            </div>
                                            @if ($errors->has('tipo_establecimiento'))
                                                <span class="error text-danger" for="input-name">{{$errors->first('tipo_establecimiento')}}</span>
                                            @endif
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                

                           
                                <div class="contenido-d">
                                    <div class="seccion-i">
                                        <h2 class="title-l">¿Qué tan costoso es?</h2>

                                        <div>
                                            <div class="check-lista">
                                                
                                                 @foreach ($precios as $precio)
                                                    
                                                     <div>
                                                        <input class="rad" type="radio" name="precio" value="{{$precio->categoria}}" {{(old('precio') == "$precio->categoria") ? "checked":""}} id="rad">
                                                        <label class="label-l" for="Economico">{{$precio->categoria}}</label>
                                                    </div>
                                                    
                                                   

                                                @endforeach
                                                
                                            </div>
                                        </div>
                                        @if ($errors->has('precio'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('precio')}}</span>
                                        @endif
                                    </div>
                
                                    <div class="seccion-d">
                                        
                                        <h2 class="title-l">¿Qué tipos de servicios ofrece el restaurante?</h2>
                                        <div class="form-group form-check">
                                            <div>
                                                <div class="check-lista">
                                                    
                                                    @foreach ($servicios as $servicio)
                                                    
                                                        <input type="checkbox" class="form-check-input" id="juegos" name="tipo_servicio[]" value="{{$servicio->servicios}}" {{ (is_array(old('tipo_servicio')) && in_array("$servicio->servicios", old('tipo_servicio'))) ? ' checked' : '' }}>
                                                        <label class="form-check-label" for="text">{{$servicio->servicios}}</label><br>
    
                                                    @endforeach
                                                </div>
                                            </div>
                                            @if ($errors->has('destacado'))
                                                <span class="error text-danger" for="input-name">{{$errors->first('tipo_servicio')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="sep-image">
                                    <span class="form-row">
                                        <span class="input-data">
                                            <input id="file" type="file" class=" @error('file') is-invalid @enderror" name="file">
                                        </span>
                                        @if ($errors->has('file'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('file')}}</span>
                                        @endif
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