@extends('layouts.plantilladmin')
@section('title','Editar SilderHuejutla')


@section('carrusel')
<h2 class="titulo" style="margin-left: 40%;">SilderHuejutla</h2>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            @forelse ($slider_huejutlas as $slider_huejutla)
                <div class="carousel-item @if ($loop -> index==0) active @endif">
                    <img class="imgslider"  src="{{asset('storage').'/'.$slider_huejutla->nombre}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                        <a href="{{$slider_huejutla->url}}"><h5 class="Title-s">{{$slider_huejutla->titulo}}</h5></a>
                        <p class="desc-s">{{$slider_huejutla->descripcion}}</p>
                    </div>
                </div>
            @empty
            @endforelse

        </div>
    </div>
</div>

<div class="espa-l"></div>
<div style="padding: 15px">
    <a href="{{url('/sliderHuejutla/'.$slider_huejutla->id.'/edit')}}" class="button" style="text-decoration:none; color:white; float:right; text-align:center;" >
        Editar
    </a>
</div>
<br><br>
{!!$slider_huejutlas->links()!!}
@endsection



