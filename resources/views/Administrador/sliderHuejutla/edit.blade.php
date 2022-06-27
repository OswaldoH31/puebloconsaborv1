@extends('layouts.plantilladmin')
@section('title','Editar SliderHuejutla')

@section('content')
<form action="{{url('/sliderHuejutla/'.$slider_huejutla->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('Administrador.sliderHuejutla.form',['modo'=>'Editar']);
</form>
@endsection
