@extends('adminlte::page') 

@section('title', 'AdminLTE') 

@section('content_header')
<h1>Productos</h1>
@stop 

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Formulario para nuevo producto</h3>
    </div>
  

    <form role="form">
        <div class="box-body">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Laptop Dell Inspiron">
            </div>

            <div class="form-group">
                  <label>Descripcion</label>
                  <textarea class="form-control" rows="3" id="description" name="description" placeholder="Descripcion del producto (Caracteristicas tecnicas, visuales, contenido del producto, etc )"></textarea>
            </div>
            
            <div class="form-group">
                <label>Fabricante del producto</label>
                <select class="form-control select2" style="width: 100%;" id="fabricantes">
                  <option>Dell</option>
                  <option>HP</option>
                  <option>Toshiva</option>
                  <option>Nuevo fabricante</option>
                </select>
            </div>

            <div class="form-group">
                <label for="manofacturerName">Nuevo fabricante</label>
                <input type="text" class="form-control" id="manofacturerName" name="manofacturerName" placeholder="Nombre del fabricante del producto" disabled>
            </div>

            <div class="form-group">
                <label for="code">Codigo</label>
                <input type="text" class="form-control" id="code" name="code" placeholder="X000000000">
            </div>
            
            <div class="form-group">
                <label for="exampleInputFile">Imagen del producto</label>
                <input type="file" id="exampleInputFile">

                <p class="help-block">Seleccione una imagen del producto</p>
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