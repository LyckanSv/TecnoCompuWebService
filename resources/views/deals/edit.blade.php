@extends('adminlte::page')

@section('title', 'Promociones')

@section('content_header')
    <h1>Edicion de promociones</h1>
@stop

@section('content')
    
    <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista de promociones</h3>
            </div>

        <div class="box-body">
            <table id="dealsTable" class="table table-bordered table-striped">
                <thead> 
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Subtitulo</th>
                        <th>Descripcion</th>
                        <th>Producto Id</th>
                        <th>Likes</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                    
                <tbody>
                    @foreach($deals as $deal)
                    <tr>
                        <td>{{$deal->id}}</td>
                        <td>{{$deal->title}}</td>
                        <td>{{$deal->subtitle}}</td>
                        <td>{{$deal->description}}</td>
                        <td>{{$deal->product_id}}</td>
                        <td>{{$deal->likes}}</td>
                        <td>
                            <a href="{{url('/deals/edit/'.$deal->id)}}" class="btn btn-primary"> Editar </a>
                            <a href="{{url('/deals/delete/'.$deal->id)}}" class="btn btn-danger"> Borrar </a>
                        </td>
                    </tr>
                    @endforeach
                    
                        
                </tbody>
                    
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Subtitulo</th>
                        <th>Descripcion</th>
                        <th>Producto Id</th>
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
        $('#dealsTable').DataTable()
    </script>

@stop