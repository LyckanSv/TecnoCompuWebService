@extends('adminlte::page') 

@section('title', 'AdminLTE') 

@section('content_header')
<h1>Promociones</h1>
@stop 

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Formulario para nuevas promociones</h3>
    </div>
  

    <form role="form">
        <div class="box-body">
            
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Grandes descuentos">
            </div>

            <div class="form-group">
                <label for="subtitle">Subtitulo</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Es el tiempo de regalos">
            </div>

            <div class="form-group">
                  <label>Descripcion</label>
                  <textarea class="form-control" rows="3" id="description" name="description" placeholder="Descripcion de la oferta"></textarea>
            </div>
            
            <div class="form-group">
                <label for="exampleInputFile">Imagen de la oferta</label>
                <input type="file" id="exampleInputFile">

                <p class="help-block">Seleccione una imagen de la oferta</p>
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