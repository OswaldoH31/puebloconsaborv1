@extends('layouts.plantilladmin')
@section('title','Editar Silder')


@section('carrusel')
<h2 class="titulo" style="margin-left: 40%;">Editar Slider</h2>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            @forelse ($sliders as $slider)
                <div class="carousel-item @if ($loop -> index==0) active @endif">
                    <img class="imgslider" src="{{asset('storage').'/'.$slider->nombre}}">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="{{$slider->url}}"><h5 class="Title-s">{{$slider->titulo}}</h5></a>
                        <p class="desc-s">{{$slider->descripcion}}</p>
                    </div>
                </div>
            @empty
            @endforelse

        </div>
    </div>
</div>

<div class="espa-l"></div>

<div style="padding: 15px">
    <a href="{{url('/slider/'.$slider->id.'/edit')}}" class="button" style="text-decoration:none; color:white; float:right; text-align:center;" >
        Editar
    </a>
</div>

<br><br>
{!!$sliders->links()!!}
@endsection



