@extends('layouts.plantilladmin')


@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            {{ Breadcrumbs::render('Huejutla.editar',$Huejutla) }}
        </ol>
    </nav>
@endsection



@section('title','Huejutla')
@section('content')
<form action="{{url('/HuejutlaA/'.$Huejutla->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('Administrador.huejutla.form',['modo'=>'Editar']);
</form>
@endsection