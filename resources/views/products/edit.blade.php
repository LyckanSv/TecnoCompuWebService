@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Edicion de productos</h1>
@stop

@section('content')
    
    <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista de productos</h3>
            </div>

        <div class="box-body">
            <table id="productsTable" class="table table-bordered table-striped">
                <thead> 
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Fabricante</th>
                        <th>Categoria</th>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Busquedas</th>
                        <th>Likes</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                    
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{App\Manufacturer::find($product->manufacturer_id)->name}}</td>
                        <td>{{App\Category::find($product->category_id)->name}}</td>
                        <td>{{$product->model}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->searches}}</td>
                        <td>{{$product->likes}}</td>
                        <td>
                            <a href="{{url('/products/edit/'.$product->id)}}" class="btn btn-primary"> Editar </a>
                            <a href="{{url('/products/delete/'.$product->id)}}" class="btn btn-danger"> Borrar </a>
                        </td>
                    </tr>
                    @endforeach
                       
                </tbody>
                    
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Fabricante</th>
                        <th>Categoria</th>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Busquedas</th>
                        <th>Likes</th>
                        <th>Opciones</th>
                    </tr>
                </tfoot>

            </table>
        </div>
    </div>

@stop

@section('js')
    
    <script>
        $('#productsTable').DataTable()
    </script>

@stop