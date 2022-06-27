@extends('layouts.plantilladmin')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('Solicitudes') }}
        </ol>
    </nav>
@endsection


@section('title','Solicitudes')
@section('content')

<h4 class="ti-pie">Solicitudes</h4>

<div class="container">
    @foreach($Solicitudes as $solicitud)
        <div class="card-S">
            <div class="card-body">
                <div class="cont-infs">
                    
                    <div class="cont-cont1">
                        <a href=""><img src="{{asset($solicitud->file)}}"   class="img-lo"   ></a>
                    </div>
                    <div class="cont-cont2">
                            <h4 class="ti-lo">{{$solicitud->nombre}}</h4>
                        <div class="lineas">
                            <div class="diamond"></div>
                        </div>
                        <div class="des-lo-so">{{$solicitud->descripcion}}</div>
                        <div class="des-lo-so">Distintivo: {{$solicitud->Distintivo}}</div>
                    </div>
                    <div class="cont-s2">
                        <div class="cont-cont3" id="resp{{$solicitud->id}}">
                            <h4 class="ti-lo">Estatus</h4>
                            <div class="lineas">
                                <div class="diamond"></div>
                            </div>
                            <div class="bnes">
                                @if($solicitud->estado == 1)
                                    <button type="button" class="btn  btn-lg  btn-success" >Aceptado</button>
                                    @else
                                    <button type="button" class="btn btn-lg btn-danger">Rechazado</button>
                                @endif
                            </div>
                        </div>
                        <div class="cont-cont4">
                            <h4 class="ti-lo">Acción</h4>
                            <div class="lineas">
                                <div class="diamond"></div>
                            </div><br>
                            <div class="accc">
                                <label class="switch">
                                    <input data-id="{{ $solicitud->id }}" class="mi_checkbox" type="checkbox" 
                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle" 
                                    data-on="Active" data-off="Inactive" {{ $solicitud->estado ? 'checked' : '' }}>
                                        <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    
    @endforeach
</div>
{{-- 
<div class="cont-s">
    <h4 class="ti-pie">Solicitudes</h4>
    
    @foreach($Solicitudes as $solicitud)
        <div class="sec-s">
            <div class="cont-infs">
                
                <div class="cont-cont1">
                    <a href=""><img src="{{asset($solicitud->file)}}"   class="img-lo"   ></a>
                </div>
                <div class="cont-cont2">
                        <h4 class="ti-lo">{{$solicitud->nombre}}</h4>
                    <div class="lineas">
                        <div class="diamond"></div>
                    </div>
                    <div class="des-lo-so">{{$solicitud->descripcion}}</div>
                    <div class="des-lo-so">Distintivo: {{$solicitud->Distintivo}}</div>
                </div>
                <div class="cont-s2">
                    <div class="cont-cont3" id="resp{{$solicitud->id}}">
                        <h4 class="ti-lo">Estatus</h4>
                        <div class="lineas">
                            <div class="diamond"></div>
                        </div>
                        <div class="bnes">
                            @if($solicitud->estado == 1)
                                <button type="button" class="btn  btn-lg  btn-success" >Aceptado</button>
                                @else
                                <button type="button" class="btn btn-lg btn-danger">Rechazado</button>
                            @endif
                        </div>
                    </div>
                    <div class="cont-cont4">
                        <h4 class="ti-lo">Acción</h4>
                        <div class="lineas">
                            <div class="diamond"></div>
                        </div><br>
                        <div class="accc">
                            <label class="switch">
                                <input data-id="{{ $solicitud->id }}" class="mi_checkbox" type="checkbox" 
                                data-onstyle="success" data-offstyle="danger" data-toggle="toggle" 
                                data-on="Active" data-off="Inactive" {{ $solicitud->estado ? 'checked' : '' }}>
                                    <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>
                
                
            </div>
            
            <div class="espa-l"></div>
            <div class="espa-l"></div>
        </div>
    @endforeach
    <div class="espa-l"></div>
    <div class="espa-l"></div>
    <div class="espa-l"></div>
    <div class="espa-l"></div>
</div> --}}




<script type="text/javascript">
    $(document).ready(function() {
        $(window).on('load', function() {
            $(".cargando").fadeOut(1000);
        });
    $('.mi_checkbox').change(function() {
    var Estado = $(this).prop('checked') == true ? 1 : 0; 
    var id = $(this).data('id'); 
        console.log(Estado);
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "{{ route('UpdateStatusSoli')}}",
        data: {'Estado': Estado, 'id': id},
        success: function(data){
            $('#resp' + id).html(data.var); 
            console.log(data.var)
         
        }
    });
})
      
});
</script>
@endsection