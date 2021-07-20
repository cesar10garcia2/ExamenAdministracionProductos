@extends('administracion.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Producto</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form role="form" action="{{route('administracion.producto.store')}}"
                    method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="sku">Sku</label>
                            <input type="text" required
                            value="{{old('sku')}}"
                            class="form-control" id="sku" name="sku">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre del producto</label>
                            <input type="text" required
                            value="{{old('nombre')}}"
                            class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" required
                            value="{{old('descripcion')}}"
                            class="form-control" id="descripcion" name="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" required
                            value="{{old('stock')}}"
                            class="form-control" id="stock" name="stock">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number" required
                            value="{{old('precio')}}"
                            class="form-control" id="precio" name="precio">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
