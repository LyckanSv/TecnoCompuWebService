@extends('adminlte::page') 

@section('title', 'Usuarios') 

@section('content_header')
<h1>Usuarios</h1>
@stop 

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Formulario para nuevo usuario</h3>
    </div>
  

    <form role="form">
        <div class="box-body">
            
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del usuario">
            </div>

            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Correo del usuario">
            </div>

            <div class="form-group">
                <label for="password">Contrasenia</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Introdusca contrasenia">
            </div>

            <div class="form-group">
                <label for="repeatpassword">Repita contrasenia</label>
                <input type="text" class="form-control" id="repeatpassword" name="repeatpassword" placeholder="Repita contrasenia anterior">
            </div>

            
            <div class="form-group">
                <label>Tipo de usuario</label>
                <select class="form-control select2" style="width: 100%;" id="usuarios">
                  <option>Usuario sin privilegios</option>
                  <option>Usuario con privilegios</option>
                </select>
            </div>

        </div>
    

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>

    </form>
</div>



@stop

@section('js')
<script>
var seleccion = $('#fabricante').value;
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

    $('#fabricantes').on('change', function() {
        seleccion = this.value;

        if(this.value === "Nuevo fabricante"){
            console.log('desactive');
            $('#manofacturerName').prop("disabled", false);
        }else{
            console.log('active');
            $('#manofacturerName').prop("disabled", true);
        }
    })
    
  })
</script>


@stop