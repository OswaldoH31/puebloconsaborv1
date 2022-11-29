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
                                        <a><h1 class="titulo-l">{{$local->nombre}}</h1></a>
                                        
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
                                        @elseif($local->estado == 2)
                                            <button type="button" class="btn btn-lg btn-danger">Cancelado</button>
                                        @else
                                            <button type="button" class="btn btn-lg btn-danger">Rechazado</button>
                                        @endif
                                    </div>

                                </div>

                                <div  class="derecha-1">
                                    <div class="btn-L">
                                       
                                    
                                        <button class="buttonMenu" type="submit"><a class="btnMenu" href="{{url('Menu/'.$local->id)}}"><i class="fas fa-utensils"></i> Menú</a></button>
                                        <button class="buttonMenu" type="submit"><a class="btnMenu" href="{{url('Locales/'.$local->id.'/edit')}}"><i class="fas fa-edit"></i> Editar</a></button>
                                        
                                       <form action="{{route('local.cancelar',$local->id)}}" method="post" class="cancelar-local">
                                            @csrf
                                                @if($local->estado == 1)
                                                    <button class="buttonMenu" type="submit"><a class="btnMenu"><i class="fas fa-ban"></i> Cancelar</a></button>
                                                    @elseif(($local->estado == 2))
                                                        <button class="buttonMenu" type="submit"><a class="btnMenu"><i class="fas fa-arrow-up"></i> Reactivar</a></button>
                                                    @else
                                                        
                                                @endif
                                        </form>
                                        
                                       <form action="{{url('Locales/'.$local->id)}}" method="post" class="eliminar-local">
                                            @csrf
                                            {{ method_field('DELETE')}}
                                           
                                             <button class="buttonMenu" type="submit"><a class="btnMenu"><i class="fas fa-trash"></i></i> Eliminar</a></button>
                                       
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


@section('js')
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('eliminar') == 'ok')
        <script>
            Swal.fire(
              'Eliminado!',
              'Su local ha sido eliminado.',
              'success'
            )
        </script>
        @elseif(session('cancelar') == 'ok')
            <script>
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Actualizado Correctamente',
                  showConfirmButton: false,
                  timer: 1500
                })
            </script>
        @elseif(session('actualizar') == 'ok')
            <script>
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Actualizado Correctamente',
                  showConfirmButton: false,
                  timer: 1500
                })
            </script>
        @elseif(session('agregar') == 'ok')
            <script>
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Se registro correctamente',
                  showConfirmButton: false,
                  timer: 1500
                })
            </script>
        @else
 
    @endif

    <script>
    
    
         $('.cancelar-local').submit(function(e){
            e.preventDefault();
            Swal.fire({
              title: '¿Estas seguro?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Aceptar',
              cancelButtonText: 'Cancelar'
            }).then((result) => {
              if (result.isConfirmed) {
                this.submit();
              }
            })
        });
        
    
        $('.eliminar-local').submit(function(e){
            e.preventDefault();
            Swal.fire({
              title: '¿Estas seguro?',
              text: "¡No podrás revertir esto!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Eliminar',
              cancelButtonText: 'Cancelar'
            }).then((result) => {
              if (result.isConfirmed) {
                this.submit();
              }
            })
        });
        
        
       
    </script>


    
@endsection



