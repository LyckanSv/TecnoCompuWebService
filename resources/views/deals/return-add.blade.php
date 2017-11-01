@extends('adminlte::page')

@section('title', 'Promociones')

@section('content_header')
    <h1>Promociones</h1>
@stop

@section('content')
    <p><strong>Titulo</strong> </p>
    <p>{{$deal->title}}</p>

    <p><strong>Subtitulo</strong> </p>
    <p>{{$deal->subtitle}}</p>

    <p><strong>Descripcion</strong> </p>
    <p>{{$deal->description}}</p>

    <p><strong>Nombre del producto</strong></p>
    <p>{{App\Products::find($deal->product_id)->name}}</p>
    
    <p><strong>Ruta de la imagen</strong></p>
    <p>{{$deal->image_url}}</p>
    
@stop