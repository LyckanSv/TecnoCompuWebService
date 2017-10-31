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
                        <th>Likes</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                    
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Titulo</td>
                        <td>Subtitulo</td>
                        <td>Descripcion</td>
                        <td>Likes</td>
                        <td>
                            <a href="#" class="btn btn-primary"> Editar </a>
                            <a href="#" class="btn btn-danger"> Borrar </a>
                        </td>
                    </tr>
                        
                </tbody>
                    
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Subtitulo</th>
                        <th>Descripcion</th>
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