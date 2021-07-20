@extends('administracion.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Productos</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <a href="{{route('administracion.producto.create')}}">Crear Producto</a>
                    <br><br>
                    <h5>Filtro de Productos</h5>
                    <form>
                        <div class="row">
                            <div class="col-4 form-group">
                                <input type="text" class="form-control"
                                value="{{app('request')->input('sku')}}"
                                id="sku" name="sku" placeholder="Sku">
                            </div>
                            <div class="col-4 form-group">
                                <input type="text" class="form-control"
                                value="{{app('request')->input('nombre')}}"
                                id="nombre" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="col-4 form-group">
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </div>
                        </div>
                    </form>

                    <section class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sku</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($model as $mo)
                                <tr>
                                    <th scope="row">{{$mo->id}}</th>
                                    <td>{{$mo->sku}}</td>
                                    <td>{{$mo->nombre}}</td>
                                    <td>{{$mo->precio}}</td>
                                    <td>{{$mo->stock}}</td>
                                    <td>
                                        <a href="{{route('administracion.producto.show',$mo->id)}}">Ver</a>
                                        |
                                        <a href="{{route('administracion.producto.edit',$mo->id)}}">Editar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </section>
                    {{ $model->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
