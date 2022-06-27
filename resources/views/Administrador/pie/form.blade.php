<div class="cuadro">
        <div class="containers">
            <div id="div1">
                <h4 class="ti-pie">{{$modo}} Pie de Pagina</h4><br>
                    
                    <span class="form-row">
                        <span class="input-data">        
                            <div class="underline"></div>
        
                            <label for="Nombre"><i class="fas fa-map-marker-alt"></i>  Ubicación</label>
                        </span>
                        <span class="input-data"><input type="text" name="Ubicacion" value="{{isset($pie->Ubicacion)?$pie->Ubicacion:''}}" id="Ubicacion"></span><br>
                    </span>
        
        
                    <span class="form-row">
                        <span class="input-data">       
                            <div class="underline"></div>
                            <label for=""><i class="fas fa-phone-alt"></i>  Teléfono</label>
                        </span>
                        <span class="input-data"><input type="text" name="Telefono" value="{{isset($pie->Telefono)?$pie->Telefono:''}}"  id="Telefono"></span><br>
                    </span>
        
                    
        
                    
                    
                    <span class="form-row">
                        <span class="input-data">
        
                            <div class="underline"></div>
        
                            <label for="Email"><i class="fas fa-envelope"></i>  Correo Electrónico</label>
                        </span>
                        <span class="input-data"><input type="text" name="Correo" value="{{isset($pie->Correo)?$pie->Correo:''}}"  id="Correo"></span><br>
                    </span>
        
        
                    <span class="form-row">
                        <span class="input-data">
                         <div class="underline"></div>
        
                            <label for=""><i class="fab fa-facebook"></i> Facebook</label>
                        </span>
                        <span class="input-data"><input type="text" name="Facebook" value="{{isset($pie->Facebook)?$pie->Facebook:''}}" id="Facebook"></span><br>
                    </span>
        

                    
                    <span class="form-row">
                        <span class="input-data">
                            <div class="underline"></div>
        
                            <label for=""><i class="fab fa-twitter"></i>  Twitter</label>
                        </span>
                        <span class="input-data"><input type="text" name="Twitter" value="{{isset($pie->Twitter)?$pie->Twitter:''}}"  id="Twitter"></span><br>
                    </span>


                    <span class="form-row">
                        <span class="input-data">
                            <div class="underline"></div>
        
                            <label for=""><i class="fab fa-instagram-square"></i>  Instagram</label>
                        </span>
                        <span class="input-data"><input type="text" name="Instagram" value="{{isset($pie->Instagram)?$pie->Instagram:''}}"  id="Instagram"></span><br>
                    </span>



                    <span class="form-row">
                        <span class="input-data">
                            <div class="underline"></div>
        
                            <label for=""><i class="fas fa-info-circle"></i>  Nosotros</label>
                        </span>
                        <span class="input-data"><input type='text' name="Nosotros"   value="{{isset($pie->Nosotros)?$pie->Nosotros:''}}" id="Nosotros" cols="30" rows="10"></span><br>
                    </span>


                    <span class="form-row">
                        <span class="input-data">
                            <div class="underline"></div>
        
                            <label for=""><i class="far fa-address-book"></i>  Directorio</label>
                        </span>
                        <span class="input-data"><input type='text' name="Directorio"   value="{{isset($pie->Directorio)?$pie->Directorio:''}}" id="Directorio" cols="30" rows="10"></span><br>
                    </span>


                    <span class="form-row">
                        <span class="input-data">
                            <div class="underline"></div>
        
                            <label for=""><i class="fas fa-file-signature"></i>  Términos y Condiciones</label>
                        </span>
                        <span class="input-data"><input type='text' name="Terminos"   value="{{isset($pie->Terminos)?$pie->Terminos:''}}" id="Terminos" cols="30" rows="10"></span><br>
                    </span>
                    
        
                    @if(isset($pie->Logo))
                        <span class="logo-p">
                            <span class="input-data"><img src="{{asset('storage').'/'.$pie->Logo}}"  style="width: 150px; height: 175px; display: block; margin: auto; padding-top: 10px;"  ></span><br>
                        </span>
                    @endif
                        
                    <div class="sep-l">
                        
                        <label class="Tit-L">
                            {{ __('Logotipo') }}
                        </label>
                        
                        <div class="cambiar-l">
                            <div class="custom-file">
                                <input type="file" accept="Logo/*" name="Logo" id="Logo" class="custom-file-input">
                                
                                <div class="letra-p">
                                    <label class="custom-file-label">
                                        Profile image...
                                    </label>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                    <br><br><br><br><br>
                    <button class="button" type="submit">{{$modo}} Datos</button><br>
                    <a href="{{url('pie/')}}" style="float: right;">Regresar</a>
                
            </div>
        </div>
    </div>
            
            
</div>   
