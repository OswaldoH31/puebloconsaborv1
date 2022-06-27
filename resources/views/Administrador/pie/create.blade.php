@extends('layouts.plantilladmin')
@section('title','Pie de Pagina')
@section('contentp')
<form action="{{ url('/pie') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('pie.form',['modo'=>'Guardar']);
</form>
</form>
@endsection