@extends('errors::e404p')
@section('image')
<div align="center">
<img src="https://hidalgo.travel/wordpress/wp-content/uploads/2021/06/logotipo-pueblos-con-sabor.png" class="img-fluid" alt="imagen error 404"  width="250" height="300">
{{-- <img src="../../imagenes/gmail.png" alt="Huejutla" class="img-fluid" width="250" height="300"> --}}

</div>

@endsection
@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Pagina No Encontrada'))
