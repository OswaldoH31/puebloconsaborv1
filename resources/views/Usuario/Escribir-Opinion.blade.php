@extends('layouts.app')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('Comentario',$local->id) }}
        </ol>
    </nav>
@endsection


@section('content')

        {{-- <script>
            $(document).ready(function(){
            // Check Radio-box
            $(".rating input:radio").attr("checked", false);

            $('.rating input').click(function () {
                $(".rating span").removeClass('checked');
                $(this).parent().addClass('checked');
            });

            $('input:radio').change(
            function(){
                var userRating = this.value;
                alert(userRating);
            }); 
           
        });
        </script> --}}

        

    <div class="div-O-Rec">
        <div class="Esc-O">
            <div class="div-Part-S">
                <div>
                    <img class="Foto-P" src="{{asset($local->file)}}" alt="">
                </div>
                <div class="div-L">
                    <label class="Titulo-Com">{{$local->nombre}}</label>
                    <p class="Address">{{$local->Municipio}},{{$local->Colonia}} {{$local->Calle}} {{$local->Numerolocal}}</p>
                </div>
            </div>

            <div class="Opn-Com">
                <div class="cont-1">
                    <div class="Plat-R">
                        <label class="Titulo-M">Tu experiencia es muy valiosa para otras personas. ¡Muchas gracias!</label>
                    </div>
                </div>
                <div>
                    <form action="{{route('Opinion.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label class="SubT-M">Tu calificación general de este restaurante</label><br>
                        
                            <div class="txt-center">
                               
                                <div class="rating">
                                    <input id="CalGen5" name="CalificacionGeneral" type="radio" value="Excelente" class="radio-btn hide" />
                                    <label for="CalGen5">★</label>
                                    <input id="CalGen4" name="CalificacionGeneral" type="radio" value="Muy bueno" class="radio-btn hide" />
                                    <label for="CalGen4">★</label>
                                    <input id="CalGen3" name="CalificacionGeneral" type="radio" value="Regular" class="radio-btn hide" />
                                    <label for="CalGen3">★</label>
                                    <input id="CalGen2" name="CalificacionGeneral" type="radio" value="Malo" class="radio-btn hide" />
                                    <label for="CalGen2">★</label>
                                    <input id="CalGen1" name="CalificacionGeneral" type="radio" value="Pesimo" class="radio-btn hide" />
                                    <label for="CalGen1">★</label>
                                    <div class="clear"></div>
                                </div>
                             
                            </div>
                            
                        </div>

                        <script src="star-ratings.js"></script>
                    

                        <div class="cont-1">
                        <label class="Tit-In" >Título de tu opinión</label>
                        <input class="CajaT" type="text" name="Titulo_Opinion" class="form-control" placeholder="Resume tu visita o destaca un detalle importante " id="formGroupExampleInput">
                        </div>

                        <div class="cont-1">
                            <label class="Tit-In">Tu opinión</label>
                            <textarea class="Txt-A" id="validationTextarea" name="Opinion" placeholder="Cuentales a los demas acerca de tu experiencia:¿la comida, el ambiente, el servicio?" required></textarea>
                        </div>


                       
                        <div class="div-V">
                            <div>
                                <label class="Tit-In" for="formGroupExampleInput">¿Qué tipo de visita fue?</label>
                            </div>
                            <div>

                                <div class="btn-visita">
                                    <input class="visita" value="Pareja" type="radio" name="Tipo_Visita" id="Pareja">
                                    <label class="btn-V" for="Pareja">Pareja</label>
                                    
                                    <input class="visita" value="Amigos" type="radio" name="Tipo_Visita" id="Amigos">
                                    <label class="btn-V" for="Amigos">Amigos</label>
                                    
                                    <input class="visita" value="Familia" type="radio" name="Tipo_Visita" id="Familia">
                                    <label class="btn-V" for="Familia">Familia</label>

                                    <input class="visita" value="Solitario" type="radio" name="Tipo_Visita" id="Solitario">
                                    <label class="btn-V" for="Solitario">Solitario</label>
                                </div>
                            
                            </div>
                        </div>


                        <div style="display: block">
                            <div>
                                <label class="Tit-In">Selecciona tu razon de visita</label>
                            </div>
                            <div>
                                <select class="TipoU" name="Razon_Visita" id="inputGroupSelect01">
                                    <option selected>Selecciona una</option>
                                    <option value="Desayuno">Desayuno</option>
                                    <option value="Almuerzo">Almuerzo</option>
                                    <option value="Cena">Cena</option>
                                    <option value="Refrigerios">Refrigerios</option>
                                    <option value="Bebidas">Bebidas</option>
                                    <option value="Cafe o te">Cafe o te</option>
                                </select>   
                            </div> 
                        </div>


                        <div style="display: block">
                            <div>
                                <label class="Tit-In">Fecha de tu visita</label>
                            </div>
                            <div>
                                <select class="TipoU" name="Fecha_Visita" id="inputGroupSelect01">
                                    <option selected>Selecciona una</option>
                                    <option value="Enero">Enero</option>
                                    <option value="Febrero">Febrero</option>
                                    <option value="Marzo">Marzo</option>
                                    <option value="Abril">Abril</option>
                                    <option value="Mayo">Mayo </option>
                                    <option value="Junio">Junio</option>
                                    <option value="Julio">Julio</option>
                                    <option value="Agosto">Agosto</option>
                                    <option value="Septiembre">Septiembre</option>
                                    <option value="Octubre">Octubre</option>
                                    <option value="Noviembre">Noviembre </option>
                                    <option value="Diciembre">Diciembre</option>
                                </select>   
                            </div> 
                        </div><br>


                        <div class="C-Pd1">
        
                            <label class="Tit-In">Haz clic para seleccionar una calificacion</label>
                            
                            <div>
                                <div class="row-1-1">
                                    <div>
                                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00OTguNjgyLDQzNS4zMjZMMjk3LjkxNywyMzQuNTZMNjMuMzU3LDBINDUuMDI2bC0zLjc0Myw5LjUxMWMtOS44NzksMjUuMTA0LTE0LjEsNTAuNzgtMTIuMjA1LDc0LjI0OQ0KCQkJYzIuMTYsMjYuNzUyLDEyLjMyMyw0OS45MTMsMjkuMzkyLDY2Ljk4MkwyNDEuNTgsMzMzLjg1MmwyNC4xNTItMjQuMTUybDE2OS4yODUsMTg5LjI5M2MxNi44NCwxNi44NCw0NS44MjUsMTcuODQsNjMuNjY1LDANCgkJCUM1MTYuMjM2LDQ4MS40MzksNTE2LjIzNiw0NTIuODc5LDQ5OC42ODIsNDM1LjMyNnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTE1Ni43MjgsMjkxLjQ0MkwxMy4zMTcsNDM0Ljg1M2MtMTcuNTUyLDE3LjU1Mi0xNy41NTIsNDYuMTEzLDAsNjMuNjY1YzE2LjY3NCwxNi42NzQsNDUuNTE5LDE4LjE0Niw2My42NjUsMA0KCQkJbDE0My40MTItMTQzLjQxMkwxNTYuNzI4LDI5MS40NDJ6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00OTAuMjUzLDg1LjI0OWwtODEuMzUxLDgxLjM1bC0yMS4yMjMtMjEuMjIybDgxLjM1MS04MS4zNTFsLTIxLjIyMi0yMS4yMjJsLTgxLjM1LDgxLjM1bC0yMS4yMjItMjEuMjIybDgxLjM1MS04MS4zNQ0KCQkJTDQwNS4zNjYsMC4zNjFMMjk5LjI1NiwxMDYuNDcxYy0xMi45ODEsMTIuOTgxLTIwLjczMiwzMC4yMTctMjEuODI4LDQ4LjUzNWMtMC4yNzcsNC42NDEtMS4zMjksOS4yMDYtMy4wNzQsMTMuNTQ4bDY4LjkyOSw2OC45MjkNCgkJCWM0LjM0Mi0xLjc0Nyw4LjkwOC0yLjc5OCwxMy41NDgtMy4wNzVjMTguMzE4LTEuMDkzLDM1LjU1NC04Ljg0Niw0OC41MzUtMjEuODI3bDEwNi4xMS0xMDYuMTA5TDQ5MC4yNTMsODUuMjQ5eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
                                    </div>
            
                                    <div class="Q-P">
                                        <li><a class="T-U">Comida</a></li>
                                    </div>
                                    
                                    <div class="Cal-Sep1">
                                        <div class="rating">
                                            <input id="Comida5" name="Cal_Comida" type="radio" value="Excelente" class="radio-btn hide" />
                                            <label for="Comida5">★</label>
                                            <input id="Comida4" name="Cal_Comida" type="radio" value="Muy bueno" class="radio-btn hide" />
                                            <label for="Comida4">★</label>
                                            <input id="Comida3" name="Cal_Comida" type="radio" value="Regular" class="radio-btn hide" />
                                            <label for="Comida3">★</label>
                                            <input id="Comida2" name="Cal_Comida" type="radio" value="Malo" class="radio-btn hide" />
                                            <label for="Comida2">★</label>
                                            <input id="Comida1" name="Cal_Comida" type="radio" value="Pesimo" class="radio-btn hide" />
                                            <label for="Comida1">★</label>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                           
            
                                <div class="row-1-1">
                                    <div>
                                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik01MTAuNDE5LDM1Ny4wNTZjLTEuOTYzLTMuMTM2LTUuMzk3LTUuMDU2LTkuMDg4LTUuMDU2SDEwLjY2NWMtMy42OTEsMC03LjEyNSwxLjkyLTkuMDY3LDUuMDU2DQoJCQljLTEuOTQxLDMuMTM2LTIuMTMzLDcuMDYxLTAuNDY5LDEwLjM2OEMxNi4xMDUsMzk3LjM5Nyw0Ni4yMDYsNDE2LDc5LjY5OSw0MTZoMzUyLjU5N2MzMy40NzIsMCw2My41NzMtMTguNjAzLDc4LjU5Mi00OC41NTUNCgkJCUM1MTIuNTEsMzY0LjExNyw1MTIuMzYxLDM2MC4yMTMsNTEwLjQxOSwzNTcuMDU2eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjg1LjI0NiwxNDAuODg1YzEuNzQ5LTMuOTQ3LDIuNzUyLTguMjk5LDIuNzUyLTEyLjg4NWMwLTE3LjY0My0xNC4zNTctMzItMzItMzJzLTMyLDE0LjM1Ny0zMiwzMg0KCQkJYzAsNC41ODcsMS4wMDMsOC45MzksMi43NTIsMTIuODg1QzEzMC4wODksMTU0LjE3Niw1My43NTgsMjMyLDQzLjk2NiwzMzAuNjY3aDQyNC4wNDMNCgkJCUM0NTguMjE3LDIzMi4wNDMsMzgxLjg2NSwxNTQuMTc2LDI4NS4yNDYsMTQwLjg4NXogTTI0Ni4wMzUsMjAyLjY0NWMtNTkuNjY5LDMuOTQ3LTExMS4wNjEsNDIuOTAxLTEzMC44OCw5OS4yNDMNCgkJCWMtMS41MzYsNC4zNzMtNS42NzUsNy4xMjUtMTAuMDY5LDcuMTI1Yy0xLjE3MywwLTIuMzY4LTAuMTkyLTMuNTQxLTAuNTk3Yy01LjU0Ny0xLjk2My04LjQ2OS04LjA0My02LjUyOC0xMy42MTENCgkJCWMyMi42NTYtNjQuNDI3LDgxLjM4Ny0xMDguOTQ5LDE0OS42MTEtMTEzLjQ1MWM1LjY1My0wLjM2MywxMC45NDQsNC4wNTMsMTEuMzQ5LDkuOTQxDQoJCQlDMjU2LjM2MSwxOTcuMTg0LDI1MS45MjMsMjAyLjI2MSwyNDYuMDM1LDIwMi42NDV6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />
                                    </div>
            
                                    <div>
                                        <li><a class="T-U">Servicio</a></li>
                                    </div>
                                    
                                    <div class="Cal-Sep2">
                                        <div class="rating">
                                            <input id="SerAmbiente5" name="Cal_Servicio" type="radio" value="Excelente" class="radio-btn hide" />
                                            <label for="SerAmbiente5">★</label>
                                            <input id="SerAmbiente4" name="Cal_Servicio" type="radio" value="Muy bueno" class="radio-btn hide" />
                                            <label for="SerAmbiente4">★</label>
                                            <input id="SerAmbiente3" name="Cal_Servicio" type="radio" value="Regular" class="radio-btn hide" />
                                            <label for="SerAmbiente3">★</label>
                                            <input id="SerAmbiente2" name="Cal_Servicio" type="radio" value="Malo" class="radio-btn hide" />
                                            <label for="SerAmbiente2">★</label>
                                            <input id="SerAmbiente1" name="Cal_Servicio" type="radio" value="Pesimo" class="radio-btn hide" />
                                            <label for="SerAmbiente1">★</label>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
            
                                  
                                <div class="row-1-1">
                                    <div >
                                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTExLjg2NSA1MTEuODY1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTEuODY1IDUxMS44NjU7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNTEwLjcyMSwzMDQuNDk1bC04NS4zMzMtMTcwLjY2N2MtMi4xNzYtNC4zMDktNi45NzYtNi42OTktMTEuNjI3LTUuNjk2bC0zMTkuOTE1LDY0DQoJCQljLTAuMjU2LDAuMDQzLTAuNDkxLDAuMTA3LTAuNzI1LDAuMTcxYy0yLjIxOSwwLjU3Ni00LjA3NSwxLjgzNS01LjQ2MSwzLjQ3N2MtMC4zNjMsMC40MjctMC42ODMsMC44NzUtMC45NiwxLjM0NA0KCQkJYy0wLjE3MSwwLjI3Ny0wLjI5OSwwLjU1NS0wLjQ0OCwwLjgxMUwwLjk2MSwzNjguNDk1Yy0wLjIxMywwLjQwNS0wLjE5MiwwLjg1My0wLjM0MSwxLjI4Yy0wLjIzNSwwLjY4My0wLjQ2OSwxLjM0NC0wLjU1NSwyLjA5MQ0KCQkJYy0wLjEwNywwLjc0Ny0wLjA2NCwxLjQ3MiwwLDIuMjE5YzAuMDQzLDAuNDI3LTAuMDg1LDAuODUzLDAsMS4yOGMwLjA0MywwLjIzNSwwLjE5MiwwLjQyNywwLjI1NiwwLjY2MQ0KCQkJYzAuMTQ5LDAuNTU1LDAuMzg0LDEuMDQ1LDAuNjE5LDEuNTc5YzAuMzIsMC43MDQsMC42NjEsMS4zNjUsMS4xMDksMS45NjNjMC4yOTksMC40MjcsMC42NCwwLjc4OSwxLjAyNCwxLjE1Mg0KCQkJYzAuNTk3LDAuNTk3LDEuMjM3LDEuMDg4LDEuOTYzLDEuNTM2YzAuMjc3LDAuMTcxLDAuNDQ4LDAuNDI3LDAuNzI1LDAuNTc2YzAuMTQ5LDAuMDg1LDAuMzQxLDAuMDQzLDAuNDkxLDAuMTA3DQoJCQljMS4zMjMsMC41OTcsMi43MzEsMS4wMDMsNC4yNjcsMS4wMDNjMC42ODMsMCwxLjM4Ny0wLjA2NCwyLjExMi0wLjIxM2wxNDcuMTU3LTI5LjQxOWwxMS44NjEsMjMuNzQ0DQoJCQljMi4xNTUsNC4yODgsNi44NjksNi42NTYsMTEuNjI3LDUuNjk2bDMyMC02NGMzLjI2NC0wLjY0LDYuMDM3LTIuNzk1LDcuNTA5LTUuNzgxDQoJCQlDNTEyLjI1NywzMTAuOTgsNTEyLjIxNCwzMDcuNDgyLDUxMC43MjEsMzA0LjQ5NXogTTI5LjgwNCwzNTguNTMybDY2LjA0OC0xMzIuMDc1bDU0LjAzNywxMDguMDc1TDI5LjgwNCwzNTguNTMyeg0KCQkJIE0zMTEuMjc2LDI3Ny4wNmwtMTA2LjY2NywyMS4zMzNjLTAuNzA0LDAuMTQ5LTEuNDA4LDAuMjEzLTIuMDkxLDAuMjEzYy00Ljk3MSwwLTkuNDI5LTMuNDk5LTEwLjQ1My04LjU3Ng0KCQkJYy0xLjE1Mi01Ljc4MSwyLjYwMy0xMS4zOTIsOC4zNjMtMTIuNTQ0bDEwNi42NjctMjEuMzMzYzUuNTQ3LTEuMjE2LDExLjM3MSwyLjU2LDEyLjU0NCw4LjM2Mw0KCQkJQzMyMC44MTIsMjcwLjI5OCwzMTcuMDU3LDI3NS45MDgsMzExLjI3NiwyNzcuMDZ6IE0zOTYuNjA5LDIxMy4wNmwtMjEzLjMzMyw0Mi42NjdjLTAuNzA0LDAuMTQ5LTEuNDA4LDAuMjEzLTIuMDkxLDAuMjEzDQoJCQljLTQuOTcxLDAtOS40MjktMy40OTktMTAuNDUzLTguNTc2Yy0xLjE1Mi01Ljc4MSwyLjYwMy0xMS4zOTIsOC4zNjMtMTIuNTQ0bDIxMy4zMzMtNDIuNjY3DQoJCQljNS41MjUtMS4xOTUsMTEuMzcxLDIuNTgxLDEyLjU0NCw4LjM2M0M0MDYuMTQ1LDIwNi4yOTgsNDAyLjM5LDIxMS45MDgsMzk2LjYwOSwyMTMuMDZ6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />
                                    </div>
            
                                    <div>
                                        <li><a class="T-U">Calidad/Precio</a></li>
                                    </div>
                                    
                                    <div class="Cal-Sep3">
                                        <div class="rating">
                                            <input id="CAmbiente5" name="Cal_Calidad" type="radio" value="Excelente" class="radio-btn hide" />
                                            <label for="CAmbiente5">★</label>
                                            <input id="CAmbiente4" name="Cal_Calidad" type="radio" value="Muy bueno" class="radio-btn hide" />
                                            <label for="CAmbiente4">★</label>
                                            <input id="CAmbiente3" name="Cal_Calidad" type="radio" value="Regular" class="radio-btn hide" />
                                            <label for="CAmbiente3">★</label>
                                            <input id="CAmbiente2" name="Cal_Calidad" type="radio" value="Malo" class="radio-btn hide" />
                                            <label for="CAmbiente2">★</label>
                                            <input id="CAmbiente1" name="Cal_Calidad" type="radio" value="Pesimo" class="radio-btn hide" />
                                            <label for="CAmbiente1">★</label>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
            
            
            
                                <div class="row-1-1">
                                    <div>
                                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0zMzMuNDcxLDE3My42ODhjLTYuNTg1LTQuMjY3LTE0Ljc5My00Ljg5OS0yMS45NTMtMS42OTJjLTEyLjk3NCw1LjgwOC0yNi42NDksOS40NzEtNDAuNTA4LDExLjAwOHYtMjIuNzk2DQoJCQljLTQuODIzLDEuMTUxLTkuODQ3LDEuNzYxLTE1LjAxLDEuNzYxYy01LjE2NCwwLTEwLjE4Ny0wLjYxLTE1LjAxLTEuNzYxdjIyLjc5NWMtMTMuODYtMS41MzctMjcuNTM1LTUuMjAyLTQwLjUwOC0xMS4wMDgNCgkJCWMtNy4xNjItMy4yMDctMTUuMzY3LTIuNTcyLTIxLjk1MywxLjY5MmMtNi41ODQsNC4yNjctMTAuNTE2LDExLjQ5OS0xMC41MTYsMTkuMzQ1djI4My4zMjljMCwxOS42NTIsMTUuOTg4LDM1LjYzOSwzNS42MzksMzUuNjM5DQoJCQloMTA0LjY5NmMxOS42NTIsMCwzNS42MzktMTUuOTg4LDM1LjYzOS0zNS42MzlWMTkzLjAzM0MzNDMuOTg4LDE4NS4xODUsMzQwLjA1NiwxNzcuOTU0LDMzMy40NzEsMTczLjY4OHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTI5Ni45NjcsNDEuODY4Yy0xMS40MDgtMTYuNDgxLTIzLjYxNi0zMC43NzEtMjguMzM5LTM2LjE0NEMyNjUuNDM2LDIuMDkxLDI2MC44MzMsMCwyNTYsMHMtOS40MzYsMi4wOTEtMTIuNjI4LDUuNzI0DQoJCQljLTQuNzIzLDUuMzc0LTE2LjkzMSwxOS42NjMtMjguMzM5LDM2LjE0NGMtMTYuMTIxLDIzLjMxNi0yMy45NTYsNDEuMzU4LTIzLjk1Niw1NS4xNzdjMCwzMC42MzEsMjEuMzI0LDU2LjM3OCw0OS45MTQsNjMuMTYyDQoJCQl2LTUwLjcxNGMwLTguMjg2LDYuNzE0LTE1LjAxLDE1LjAxLTE1LjAxYzguMjg2LDAsMTUuMDEsNi43MjUsMTUuMDEsMTUuMDF2NTAuNzE0YzI4LjU4OS02Ljc4NSw0OS45MTQtMzIuNTMyLDQ5LjkxNC02My4xNjINCgkJCUMzMjAuOTI0LDgzLjIyNiwzMTMuMDg4LDY1LjE4NCwyOTYuOTY3LDQxLjg2OHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />  
                                    </div>
            
                                    <div>
                                        <li><a class="T-U">Ambiente</a></li>
                                    </div>
                                    
                                    <div class="Cal-Sep4">
                                        <div class="rating">
                                            <input id="Ambiente5" name="Cal_Ambiente" type="radio" value="Excelente" class="radio-btn hide" />
                                            <label for="Ambiente5">★</label>
                                            <input id="Ambiente4" name="Cal_Ambiente" type="radio" value="Muy bueno" class="radio-btn hide" />
                                            <label for="Ambiente4">★</label>
                                            <input id="Ambiente3" name="Cal_Ambiente" type="radio" value="Regular" class="radio-btn hide" />
                                            <label for="Ambiente3">★</label>
                                            <input id="Ambiente2" name="Cal_Ambiente" type="radio" value="Malo" class="radio-btn hide" />
                                            <label for="Ambiente2">★</label>
                                            <input id="Ambiente1" name="Cal_Ambiente" type="radio" value="Pesimo" class="radio-btn hide" />
                                            <label for="Ambiente1">★</label>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>  
                                
                                
                            </div>
                        </div>


                        <div class="div-V">
                            <div>
                                <label class="Tit-In">¿Qué tan costoso es este restaurante?</label>
                            </div>
                            <div class="btn-visita">
        
                                <input class="visita" name="Precio" value="Comida Barata" type="radio" name="visita" id="Comida Barata">
                                <label class="btn-V" for="Comida Barata">Comida Barata</label>
                                
                                <input class="visita" name="Precio" value="Gama Media" type="radio" name="visita" id="Gama Media">
                                <label class="btn-V" for="Gama Media">Gama Media</label>
                                
                                <input class="visita" name="Precio" value="Restaurante elegante" type="radio" name="visita" id="Restaurante elegante">
                                <label class="btn-V" for="Restaurante elegante">Restaurante elegante</label>
        
                            </div>
        
                        </div>


                        <div class="cont-1">
                            <div class="Plat-R">
                                <label class="Tit-In">¿Qué plato(s) recomiendas?  (Opcional)</label>
                                <input class="CajaT" name="Recomendacion"  type="text" class="form-control" placeholder="Resume tu visita o destaca un detalle importante " id="formGroupExampleInput">
                            </div>
        
                            <div>
                                <input id="file" type="file" name="Foto">
                            </div>
                        </div>

                        <div class="cont-1">
                            <div class="Plat-R">
                                <label class="Tit-In"">Envía tu opinión</label>
                            </div>
        
                            <div class="SeleccionT">
                                <input type="checkbox" id="cbox1" name="Certifico" value="Si"><label class="Calif-Opn1">Certifico que esta opinión se basa en mi propia experiencia y es mi opinión genuina sobre este restaurante; que no tengo ninguna relación personal ni comercial con este establecimiento y que ningún establecimiento me ofreció ningún tipo de incentivo o pago alguno para que escribiese esta opinión. Comprendo que Tripadvisor tiene una política de tolerancia cero con las opiniones falsas. Obtener más información</label><br>
                            </div>
                        </div>

                        <input id="prodId" name="Local_id" type="hidden" value="{{$local->id}}">
                        

                        <div class="cont-1">
                            <div>
                                <button class="button1" type="submit">Enviar Opinion</button>
                            </div>
                        </div>

                    </form>  
                </div>
            </div>



        </div>

        

        <div class="Com-Rec">

            <div>
                <div class="Plat-R">
                    <label class="Titulo-M">Opiniones recientes sobre este restaurante</label>
                </div>
            </div>
            
            @foreach ($Comentarios as $Comentario)
                <div class="division-O">
                    <div class="div-I-Op">
                        <div>
                            {{-- <img class="foto-Op" src="data:image/jpeg;base64,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" alt=""> --}}
                            <img  class="foto-Op" src="{{asset($Comentario->profile_image)}}">
                        </div>

                        <div>
                            <label class="Name-User">{{$Comentario->user}}</label>
                        </div>
                    </div>
            
                    <div class="div-Des-Op">
                        <div class="divOp-1">
                                <div class="Cal-Sep5">
                                    <div class="rating">
                                        <input id="Opininion5" name="Cal_U" type="radio" value="Excelente" class="radio-btn hide" />
                                        <label for="Opininion5">★</label>
                                        <input id="Opininion4" name="Cal_U" type="radio" value="Muy bueno" class="radio-btn hide" />
                                        <label for="Opininion4">★</label>
                                        <input id="Opininion3" name="Cal_U" type="radio" value="Regular" class="radio-btn hide" />
                                        <label for="Opininion3">★</label>
                                        <input id="Opininion2" name="Cal_U" type="radio" value="Malo" class="radio-btn hide" />
                                        <label for="Opininion2">★</label>
                                        <input id="Opininion1" name="Cal_U" type="radio" value="Pesimo" class="radio-btn hide" />
                                        <label for="Opininion1">★</label>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            <div>

                            </div>
                        </div>

                        <div>
                            <label class="Titulo-Opn1">{{$Comentario->Titulo}}</label>
                        </div>

                        <div>
                            <p class="Comt-O">{{$Comentario->Descripcion}}</p>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>


   

@endsection