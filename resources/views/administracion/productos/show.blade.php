@extends('administracion.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ver Producto</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form  action="{{route('administracion.producto.destroy',$model->id)}}" method="POST">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nombre">Nombre del producto</label>
                            <input type="text" disabled class="form-control" value="{{$model->nombre}}" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" disabled class="form-control" value="{{$model->descripcion}}" id="descripcion" name="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" disabled class="form-control" value="{{$model->stock}}" id="stock" name="stock">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number" disabled class="form-control" value="{{$model->precio}}" id="precio" name="precio">
                        </div>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
