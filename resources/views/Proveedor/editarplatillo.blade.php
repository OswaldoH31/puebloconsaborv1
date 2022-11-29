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
                                
                                <input id="Nombre" type="text" class="form-control @error('Nombre') is-invalid @enderror" name="Nombre" value="{{$platillo->Nombre}}">
                                    
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
                                <textarea id="Descripcion" style="resize: none;" class="form-control @error('Descripcion') is-invalid @enderror" name="Descripcion" rows="4" cols="37">{{$platillo->Descripcion}}</textarea>
                                
                                <div class="underline"></div>
        
                                <label style="bottom: 41px; font-size: 15px;" for="Descripcion">Descripcion</label>
                                
                                @if ($errors->has('Descripcion'))
                                    <span class="error text-danger" for="input-name">{{$errors->first('Descripcion')}}</span>
                                @endif
        
                                
                            </span>
                            <span class="input-data"></span>
                        </span>
                        <br><br>

                        <span class="form-row">
                            <span class="input-data">
                                
                                <input id="Costo" type="text" class="form-control @error('Costo') is-invalid @enderror" name="Costo" value="{{$platillo->Costo}}">
                                
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
                                
                                <input id="Imagen" type="file" class="form-control @error('Imagen') is-invalid @enderror" name="Imagen" value="{{ $platillo->Imagen }}"  autocomplete="Imagen" autofocus>
                         
                                <div class="underline"></div>
        
                                <label for="Nombre">Imagen</label>
                                               
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