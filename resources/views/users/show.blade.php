@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Busqueda de Usuarios</h1>
@stop

@section('content')
    <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista de usuarios</h3>
            </div>

        <div class="box-body">
            <table id="userTable" class="table table-bordered table-striped">
                <thead> 
                    <tr>
                        <th>Nombre</th>
                        <th>Fabricante</th>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Busquedas</th>
                        <th>Likes</th>
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
                    </tr>
                </tfoot>

            </table>
        </div>
    </div>


@stop

@section('js')
    
    <script>
        $('#userTable').DataTable()
    </script>

@stop