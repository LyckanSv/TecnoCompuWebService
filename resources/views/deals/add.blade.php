@extends('adminlte::page') 

@section('title', 'Promocion') 

@section('content_header')
<h1>Promociones</h1>
@stop 

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Formulario para nuevo oferta</h3>
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

    <form role="form" method="POST" action="{{url('/deals/add')}}" enctype="multipart/form-data"  >
         {{csrf_field()}}
        <div class="box-body">

            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titulo de la oferta">
                @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('subtitle') ? ' has-error' : '' }}">
                <label for="subtitle">Subtitulo</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitulo de la oferta">
                @if ($errors->has('subtitle'))
                <span class="help-block">
                    <strong>{{ $errors->first('subtitle') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label>Descripcion</label>
                <textarea class="form-control" rows="3" id="description" name="description" placeholder="Descripcion de la oferta"></textarea>
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
                    <option>{{$product->id}}-{{$product->name}}</option>
                    @endforeach
                </select>
            </div>

            
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                <label for="image">Imagen de la promocion</label>
                <input type="file" id="image" name="image">
                <p class="help-block">Seleccione una imagen de la promocion</p>
                @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
                @endif
            </div>
            

        </div>
    

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Guardar promocion</button>
        </div>

    </form>
</div>



@stop

@section('js')
<script>

    

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

  })
</script>


@stop