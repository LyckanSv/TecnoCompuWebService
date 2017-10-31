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
                        <th>Imagen</th>
                    </tr>
                </thead>
                    
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Titulo</td>
                        <td>Subtitulo</td>
                        <td>Descripcion</td>
                        <td>Likes</td>
                        <td>Imagen</td>
                    </tr>
                        
                </tbody>
                    
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Subtitulo</th>
                        <th>Descripcion</th>
                        <th>Likes</th>
                        <th>Imagen</th>
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