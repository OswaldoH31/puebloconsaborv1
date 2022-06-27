<div class="cuadro">
    <div class="containers">
        <div id="div1">
            <h4 class="ti-pie">{{$modo}} slider Principal</h4><br>
                <span class="form-row">
                    <span class="input-data">
                        <div class="underline"></div>

                        <label for="titulo"><i class="fas fa-signature"></i>Titulo</label>
                    </span>
                    <span class="input-data"><input type="text" name="titulo" value="{{isset($slider->titulo)?$slider->titulo:''}}"  name="titulo"   id="titulo"></span><br>
                </span>


                <span class="form-row">
                    <span class="input-data">
                        <label for="descripcion"><i class="fas fa-align-center"></i>  Descripción</label>
                    </span>
                    <span class="input-data"><input type="text"  name="descripcion"   value="{{isset($slider->descripcion)?$slider->descripcion:''}}" id="descripcion" rows="2"></span><br>
                </span>

                <span class="form-row">
                    <span class="input-data">
                     <div class="underline"></div>
                        <label for="url"><i class="fas fa-globe"></i> URL</label>
                    </span>
                    <span class="input-data"><input type="text" name="url" value="{{isset($slider->url)?$slider->url:''}}"   id="url"></span><br>
                </span>

                <span class="form-row">
                    <span class="input-data">
                     <div class="underline"></div>
                     <label for="nombre"><i class="fas fa-solid fa-image"></i>Imagen</label>
                    </span>
                    <span class="input-data">
                        @if(isset($slider->nombre))
                        <img src="{{asset('storage').'/'.$slider->nombre}}" alt="100" width="100"><br><br><br>
                        @endif
                    </span>
                    <br><br>
                </span>
                <input type="file"  class="form-control" name="nombre" value="nombre" id="nombre"><br>

                <br>
                <button class="button" type="submit">Guardar Datos</button><br>
                <a href="{{url('slider/')}}" style="float: right;" >Regresar</a>
        </div>
    </div>
</div>
</div>
