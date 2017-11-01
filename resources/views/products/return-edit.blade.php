@extends('adminlte::page') 

@section('title', 'Productos') 

@section('content_header')
<h1>Productos</h1>
@stop 

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Formulario para nuevo producto</h3>
    </div>
    @if(count($errors))
        <div class="alert alert-danger container-fluid">
            <div>
                <h3><strong>Error!!!</strong></h3>
                <p><strong>A continuacion se muestra la lista de errores:</strong></p>
                <ul class="">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            
        </div>
    @endif

    <form role="form" method="POST" action="{{url('/products/update')}}" enctype="multipart/form-data"  >
         {{csrf_field()}}
        <div class="box-body">
            <input type="hidden" name="id" value="{{$product->id}}" />

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" value="{{$product->name}}" id="name" name="name" placeholder="Laptop Dell Inspiron">
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>



            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label>Descripcion</label>
                <textarea class="form-control"  rows="3" id="description" name="description" 
                placeholder="Descripcion del producto (Caracteristicas tecnicas, visuales, 
                contenido del producto, etc )">{{$product->description}}</textarea>
                @if ($errors->has('description'))
                    <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group">
                <label>Fabricante del producto</label>
                <select class="form-control select2" style="width: 100%;" id="fabricantes" name="manufacturer_id">
                    
                    @foreach($manufacturers as $manufacturer)
                        @if ($product->manufacturer_id === $manufacturer->id)
                            <option selected="selected">{{$manufacturer->id}}-{{$manufacturer->name}}</option>
                        @else
                            <option>{{$manufacturer->id}}-{{$manufacturer->name}}</option>
                        @endif
                    @endforeach
                    <option>Nuevo fabricante</option>
                </select>
            </div>


            <div class="form-group{{ $errors->has('manufacturerName') ? ' has-error' : '' }}">
                <label for="manufacturerName">Nuevo fabricante</label>
                <input type="text" class="form-control" id="manufacturerName" name="manufacturer_name" placeholder="Nombre del fabricante del producto" disabled>
                @if ($errors->has('manufacturerName'))
                <span class="help-block">
                    <strong>{{ $errors->first('manufacturerName') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label>Modelo</label>
                <input type="text" class="form-control" value="{{$product->model}}" id="model" name="model" placeholder="X000000000">
                @if ($errors->has('model'))
                <span class="help-block">
                    <strong>{{ $errors->first('model') }}</strong>
                </span>
                @endif
            </div>
            
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                <label for="image">Imagen del productos</label>
                <input type="file" id="image" name="image">
                <p class="help-block">Seleccione una imagen del producto</p>
                @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
                @endif
            </div>
            

        </div>
    

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Guardar producto</button>
        </div>

    </form>
</div>



@stop

@section('js')
<script>

    var seleccion = null;
    
    $(document).ready(function() {
        seleccion = $('#fabricantes').value;
        var tamanio = $('#fabricantes').children('option').length;
        if( tamanio === 1 && seleccion === undefined){
            $('#manufacturerName').prop("disabled", false);
        }
    })



  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

    $('#fabricantes').on('change', function() {
        seleccion = this.value;

        if(this.value === "Nuevo fabricante"){
            console.log('desactive');
            $('#manufacturerName').prop("disabled", false);
        }else{
            console.log('active');
            $('#manufacturerName').prop("disabled", true);
        }
    })
    
  })
</script>


@stop