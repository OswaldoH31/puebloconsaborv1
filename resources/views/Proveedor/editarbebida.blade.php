@extends('layouts.plantillaproveedor')

@section('content')

    <div class="cuadro">
        <div class="containers">

            <h1 style="margin-top: 10px; margin-bottom: 10px; font-family: 'Lobster', cursive;">Editar Bebida </h1>    
   
            <div> 
                <div id="div1">
                    <form action="{{route('bebida.update',$bebida->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <span class="form-row">
                            <span class="input-data">
                                
                                <input id="Nombre" type="text" class="form-control @error('B_Nombre') is-invalid @enderror" name="B_Nombre" value="{{ $bebida->Nombre }}">
                                
                                @error('B_Nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                
                                <div class="underline"></div>
                
                                <label for="Nombre">Nombre de la bebida</label>
                
                            </span>
                            <span class="input-data"></span>
                        </span>
            
                
                        <span class="form-row">
                            <span class="input-data">
                                
                                <input id="Costo" type="text" class="form-control @error('B_Costo') is-invalid @enderror" name="B_Costo" value="{{ $bebida->Costo }}">
                                
                                @error('B_Costo')
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
                                
                                {{-- <input type="text" name="ApellidoMaterno" required> --}}
                                <input id="Imagen" type="file" class="form-control @error('B_Imagen') is-invalid @enderror" name="B_Imagen"  value="{{ $bebida->Imagen }}" autocomplete="Imagen" autofocus>
                                
                                @error('B_Imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                
                                <div class="underline"></div>
                            </span>
                            <span class="input-data"></span>
                        </span>

                        <input id="prodId" name="local_id" type="hidden" value="{{$bebida->local_id}}">

                        <button class="button" type="submit">Agregar</button>
                        
                    </form>
                    
                </div>

                
            </div>
        </div>
    </div>

@endsection
