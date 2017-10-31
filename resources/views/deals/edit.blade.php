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
                        <th>Nombre</th>
                        <th>Fabricante</th>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Busquedas</th>
                        <th>Likes</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                    
                <tbody>
                    <tr>
                        <td>Nombre</td>
                        <td>Fabricante</td>
                        <td>Codigo</td>
                        <td>Descripcion</td>
                        <td>Busquedas</td>
                        <td>Likes</td>
                        <td>
                            <a href="#" class="btn btn-primary"> Editar </a>
                            <a href="#" class="btn btn-danger"> Borrar </a>
                        </td>
                    </tr>
                        
                </tbody>
                    
                <tfoot>
                    <tr>
                    <th>Nombre</th>
                    <th>Fabricante</th>
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
        $('#dealsTable').DataTable()
    </script>

@stop