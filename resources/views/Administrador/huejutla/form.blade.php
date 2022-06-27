<div class="cuadro">
        <div class="containers">
            <div id="div1">
                <h4 class="ti-pie">{{$modo}} Huejutla De Reyes</h4><br>
                    
                    <span class="form-row">
                        <span class="input-data">        
                            <div class="underline"></div>
        
                            <label for="Ubicacion"><i class="fas fa-map-marker-alt"></i>  Ciudad</label>
                        </span>
                        <span class="input-data"><input type="text" name="Ciudad" value="{{isset($Huejutla->Ciudad)?$Huejutla->Ciudad:''}}"  name="Ubicacion"   id="Ubicacion"></span><br>
                    </span>
        
                    <span class="form-row">
                        <span class="input-data">       
                            <div class="underline"></div>
                            <label for="Historia"><i class="fas fa-book"></i>  Historia</label>
                        </span>
                        <span class="input-data"><input type="text" name="Historia"   value="{{isset($Huejutla->Historia)?$Huejutla->Historia:''}}"  id="Historia" cols="30" rows="10"></span><br>
                    </span>
        
                    <span class="form-row">
                        <span class="input-data">
        
                            <div class="underline"></div>
        
                            <label for="Descripcion"><i class="fas fa-signature"></i>  Descripción</label>
                        </span>
                        <span class="input-data"><input type="text"  name="Descripcion"   value="{{isset($Huejutla->Descripcion)?$Huejutla->Descripcion:''}}" id="Descripcion" cols="30" rows="10"></span><br>
                    </span>



                    <span class="form-row">
                        <span class="input-data">
                         <div class="underline"></div>
        
                            <label for="Descrip_Ubicacion"><i class="fas fa-map-marked-alt"></i> Ubicación en Mapa</label>
                        </span>
                        <span class="input-data"><input type="text" name="Ubicacion" value="{{isset($Huejutla->Ubicacion)?$Huejutla->Ubicacion:''}}"   id="Descrip_Ubicacion"></span><br>
                    </span>

                    <br><br><br><br><br>
                    <button class="button" type="submit">{{$modo}} Datos</button><br>
                    <a href="{{url('HuejutlaA/')}}" style="float: right;">Regresar</a>

                

                
            </div>
        </div>
    </div>
            
            
</div>   
