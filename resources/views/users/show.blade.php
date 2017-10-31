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
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Tipo de usuarios</th>
                    </tr>
                </thead>
                    
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nombre</td>
                        <td>Correo</td>
                        <td>Tipo de usuarios</td>
                    </tr>
                        
                </tbody>
                    
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Tipo de usuarios</th>
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