@extends('layouts.app')
@section('title','Contactanos')

@section('content')
{{-- <div class="">
    <section class="form_wrap">

    <section class="cantact_info">
        <section class="info_title">
            <div align="center" ><div class="circulo">
            <img src="https://hidalgo.travel/wordpress/wp-content/uploads/2021/06/logotipo-pueblos-con-sabor.png" class="img-fluid" alt="imagen "  width="170px">
            </div>
            </div><br><br>
            <div class="txt-cont">Contáctanos</div>
        </section>
        <section class="info_items">
            <p><span><i class="fas fa-envelope"></i></span> puebloconsaborh@gmail.com</p>
            <p><span><i class="fas fa-phone-alt"></i></span> +52(585) 902-8665</p>
        </section>
    </section>
    
    <form action="{{route('contactanos.store')}}"  method="POST" class="form_contact">
        @csrf
        <div class="txt-cont-2">Envianos un mensaje</div>
        <div class="user_info">
            <label for="names">Nombres 
            <input type="text" name="names" id="names"></label>
            @error('names')  
            <div class="not">{{$message}}</div>  
            @enderror
            <label for="phone">Telefono / Celular
            <input type="text" name="telefono" id="telefono" ></label>
            @error('telefono')  
            <div class="not">{{$message}}</div>
            @enderror
            <label for="email">Correo electronico 
            <input type="text" name="email" id="email"></label>
            @error('email')  
            <div class="not">{{$message}}</div>  
            @enderror
            <label for="mensaje">Mensaje 
            <textarea id="mensaje" name="mensaje"></textarea> </label>
            @error('mensaje')  
            <div class="not">{{$message}}</div> 
            @enderror
            <button type="submit" value="Enviar Mensaje" id="btnSend">Enviar Mensaje</button>

        </div>
    </form>
    @if(session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
    </section>
</div> --}}



    <div class="contacto-form">
        <div class="seccionC-I">
            <div class="contenido-C">
                <div class="logo-contacto">
                    <div align="center" >
                        <div class="circulo">
                            <img src="https://hidalgo.travel/wordpress/wp-content/uploads/2021/06/logotipo-pueblos-con-sabor.png" class="img-fluid" alt="imagen "  width="170px">
                        </div>
                    </div>
                    <div class="txt-cont">Contáctanos</div>
                </div>
                <div class="txt-c1">
                    <section class="info_items">
                        <div class="correo-c">
                            <div class="icono-c1">
                                <span><i class="icono-c fas fa-envelope"></i></span>
                            </div>
                            <div>
                                <p class="txt-l">puebloconsaborh@gmail.com</p>
                            </div>
                        </div>

                        <div class="correo-c">
                            <div class="icono-c1">
                                <span><i class="icono-c fas fa-phone-alt"></i></span>
                            </div>
                            <div>
                                <p class="txt-l">+52(585) 902-8665</p>
                            </div>
                        </div>
                    </section>

                </div>
                
                
            </div>
        </div>
        <div class="seccionC-D">
            <div class="contenido-mensaje">
                <form action="{{route('contactanos.store')}}"  method="POST" class="form_contact">
                    @csrf
                    <div class="txt-cont-2">Envianos un mensaje</div>
                    <div class="user_info">
                        <label for="names">Nombres 
                        <input type="text" name="names" id="names" value="{{ old('names') }}"></label>
                        @error('names')  
                        <div class="not">{{$message}}</div>  
                        @enderror

                        <label for="phone">Telefono / Celular
                        <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}"></label>
                        @error('telefono')  
                        <div class="not">{{$message}}</div>
                        @enderror
                        
                        <label for="email">Correo electronico 
                        <input type="text" name="email" id="email" value="{{ old('email') }}"></label>
                        @error('email')  
                        <div class="not">{{$message}}</div>  
                        @enderror
                        
                        <label for="mensaje">Mensaje 
                        <textarea id="mensaje" name="mensaje" value="{{ old('mensaje') }}"></textarea> </label>
                        @error('mensaje')  
                        <div class="not">{{$message}}</div> 
                        @enderror
                        
                        <button type="submit" value="Enviar Mensaje" id="btnSend">Enviar Mensaje</button>
            
                    </div>
                </form>
                @if(session('info'))
                    <script>
                        alert("{{session('info')}}");
                    </script>
                @endif
            </div>
        </div>
    </div>


@endsection