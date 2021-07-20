@extends('administracion.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Producto</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form role="form" action="{{route('administracion.producto.update', $model->id)}}"
                    method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="sku">Sku</label>
                            <input type="text" required
                            value="{{old('sku', $model->sku )}}"
                            class="form-control" id="sku" name="sku">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre del producto</label>
                            <input type="text" class="form-control"
                            value="{{old('nombre', $model->nombre )}}"
                            id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control"
                            value="{{old('descripcion', $model->descripcion )}}"
                            id="descripcion" name="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" class="form-control"
                            value="{{old('stock', $model->stock )}}"
                            id="stock" name="stock">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number" class="form-control"
                            value="{{old('precio', $model->precio )}}"
                            id="precio" name="precio">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
