@extends('layouts.plantilla')
@section('title','Huejutla')
@section('contentp')
<form action="{{ url('/huejutla') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('huejutla.form',['modo'=>'Guardar']);
</form>
@endsection
