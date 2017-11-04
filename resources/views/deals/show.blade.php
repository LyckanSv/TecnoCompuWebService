@extends('adminlte::page')

@section('title', 'Promociones')

@section('content_header')
    <h1>Busqueda de Promociones</h1>
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
                        <th>Likes</th>
                    </tr>
                </thead>
                    
                <tbody>
                    @foreach($deals as $deal)
                    <tr>
                        <td>{{$deal->id}}</td>
                        <td>{{$deal->title}}</td>
                        <td>{{$deal->subtitle}}</td>
                        <td>{{$deal->description}}</td>
                        <td>{{$deal->likes}}</td>
                        
                    </tr>
                    @endforeach
                        
                </tbody>
                    
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Subtitulo</th>
                        <th>Descripcion</th>
                        <th>likes</th>
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