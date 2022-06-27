@extends('layouts.plantilladmin')
@section('title','Editar Slider')

@section('content')
<form action="{{url('/slider/'.$slider->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('Administrador.slider.form',['modo'=>'Editar']);
</form>
@endsection
