<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $nombre = trim($request->nombre);
        $sku = trim($request->sku);
        $model = Producto::where('nombre', 'like', '%'.$nombre.'%')
        ->where('sku', 'like', '%'.$sku.'%')->paginate(20);
        return view('administracion.productos.index',[
            'model' => $model
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracion.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:199',
            'sku' => 'required|unique:productos|max:199',
            'descripcion' => 'required|max:199',
            'stock' => 'required',
            'precio' => 'required',
        ]);


        $model = new Producto();
        $model->nombre = trim($request->nombre);
        $model->sku = trim($request->sku);
        $model->descripcion = trim($request->descripcion);
        $model->stock = trim($request->stock);
        $model->precio = trim($request->precio);
        $model->save();

        return redirect()->back()->with('message', '¡Guardado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Producto::findOrFail($id);
        return view('administracion.productos.show',['model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Producto::findOrFail($id);
        return view('administracion.productos.edit',['model'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:199',
            'sku' => 'required|unique:productos,sku,'.$id,
            'descripcion' => 'required|max:199',
            'stock' => 'required',
            'precio' => 'required',
        ]);

        $model = Producto::findOrFail($id);
        $model->nombre = trim($request->nombre);
        $model->sku = trim($request->sku);
        $model->descripcion = trim($request->descripcion);
        $model->stock = trim($request->stock);
        $model->precio = trim($request->precio);
        $model->save();

        return redirect()->back()->with('message', 'Actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Producto::findOrFail($id);
        $model->delete();
        return redirect()->route('producto.index')->with('message', 'Eliminado correctamente!');
    }
}
