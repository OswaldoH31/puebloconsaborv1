@extends('layouts.plantilladmin')

{{ Breadcrumbs::render('Piepagina.editar', $pie) }}

@section('title','Pie de Pagina')
@section('content')
<form action="{{url('/pie/'.$pie->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('Administrador.pie.form',['modo'=>'Editar']);
</form>
@endsection