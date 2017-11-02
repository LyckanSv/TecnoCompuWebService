@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p><strong> Nombre</strong> </p>
    <p>{{$product->name}}</p>

    <p><strong> Descripcion</strong> </p>
    <p>{{$product->description}}</p>

    <p><strong> Modelo</strong> </p>
    <p>{{$product->model}}</p>

    <p><strong> Fabricante</strong></p>
    <p>{{App\Manufacturer::find($product->manufacturer_id)->name}}</p>

    <p><strong> Categoria</strong></p>
    <p>{{App\Category::find($product->category_id)->name}}</p>
    
    <p><strong>Ruta de la imagen</strong></p>
    <p>{{$product->picture_url}}</p>
    
@stop