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

    <form role="form" method="POST" action="{{url('/deals/update')}}" enctype="multipart/form-data"  >
         {{csrf_field()}}
        <div class="box-body">
            <input type="hidden" name="id" value="{{$deal->id}}" />

            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" value="{{$deal->title}}" id="title" name="title" placeholder="Titulo de la oferta">
                @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('subtitle') ? ' has-error' : '' }}">
                <label for="subtitle">Subtitulo</label>
                <input type="text" class="form-control" value="{{$deal->subtitle}}" id="subtitle" name="subtitle" placeholder="Subtitulo de la oferta">
                @if ($errors->has('subtitle'))
                <span class="help-block">
                    <strong>{{ $errors->first('subtitle') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label>Descripcion</label>
                <textarea class="form-control" rows="3" id="description" name="description" placeholder="Descripcion de la oferta">{{$deal->description}}</textarea>
                @if ($errors->has('description'))
                    <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
            

            <div class="form-group">
                <label>Lista de productos</label>
                <select class="form-control select2" style="width: 100%;" id="product_id" name="product_id">
                    @foreach($products as $product)
                        @if ($deal->product_id === $product->id)
                            <option selected="selected">{{$product->id}}-{{$product->name}}</option>
                        @else
                            <option>{{$product->id}}-{{$product->name}}</option>
                        @endif
                    
                    @endforeach
                </select>
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