@extends('layouts.plantillaproveedor')

@section('content')

    <div class="cuadro">
        <div class="containers">

            <h1 style="margin-top: 10px; margin-bottom: 10px; font-family: 'Lobster', cursive;">Editar Platillo </h1>    
   
            <div> 
                <div id="div1">
                    <form action="{{route('platillo.update',$platillo->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <span class="form-row">
                            <span class="input-data">
                                
                                <input id="Nombre" type="text" @error('Nombre') is-invalid @enderror" name="Nombre" value="{{$platillo->Nombre}}" required autocomplete="Nombre" autofocus>
                                    
                                @error('Nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        
                                <div class="underline"></div>
        
                                <label for="Nombre">Nombre del platillo</label>

                            </span>
                            <span class="input-data"></span>
                        </span>

                        <span class="form-row">
                            <span class="input-data">
                                
                                <input id="Descripcion" type="text" @error('Descripcion') is-invalid @enderror" name="Descripcion" value="{{$platillo->Descripcion}}"  required autocomplete="Descripcion" autofocus>
                                
                                @error('Descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        
                                <div class="underline"></div>
        
                                <label for="Descripcion">Descripcion</label>

                            </span>
                            <span class="input-data"></span>
                        </span>

                        <span class="form-row">
                            <span class="input-data">
                                
                                <input id="Costo" type="text" @error('Costo') is-invalid @enderror" name="Costo" value="{{$platillo->Costo}}" required autocomplete="Costo" autofocus>
                                
                                @error('Costo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        
                                <div class="underline"></div>
                                <label for="Costo">Costo</label>

                            </span>
                            <span class="input-data"></span>
                        </span>

                        

                        <span class="form-row">
                            <span class="input-data">
                                
                                <input id="Imagen" type="file" @error('Imagen') is-invalid @enderror" name="Imagen" value="{{ $platillo->Imagen }}"  autocomplete="Imagen" autofocus>
                                        
                                @error('Imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="underline"></div>
                            </span>
                            <span class="input-data"></span>
                        </span>

                        <input id="prodId" name="local_id" type="hidden" value="{{$platillo->local_id}}">
                        
                        
                        <button class="button" type="submit">Agregar</button>
                    </form>
                    
                </div>

                

            </div>
        </div>
    </div>

@endsection