<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Sucursal;
use App\Models\UserPerfil;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Bandeja
        $productos = Producto::all();

        return view('producto.list', [
            'productos' => $productos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categoria = Categoria::all();
       $sucursal = Sucursal::all();
        //
        return view('producto.create', [
            'categoria' => $categoria,
            'sucursal' => $sucursal
            //'user' => User::findOrFail($id)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
        // validacion
        $validated = $request->validate([
            'nombre'            => 'required|max:30',
            'descripcion'       => 'required|max:100',
            'sucursal_id'       => 'required|numeric',
            'categoria_id'      => 'required|numeric',
            'precio'            => 'required|numeric|max:99999',
            'fecha_compra'      => 'required|date_format:m/d/Y',
        ]);

        // fecha transform
        $fecha = explode('/',$request->input('fecha_compra'));
        $fecha_compra = new \DateTime($fecha[2] . '-' . $fecha[0] . '-' . $fecha[1]);
        
        // store
        $producto = new Producto;
        $producto->nombre           = $request->input('nombre');
        $producto->descripcion      = $request->input('descripcion');
        $producto->categoria_id     = $request->input('categoria_id');
        $producto->sucursal_id      = $request->input('sucursal_id');
        $producto->precio           = $request->input('precio');
        $producto->fecha_compra     = $fecha_compra->format('Y-m-d H:i:s');
        $producto->save();

        // redirect
        Session::flash('message', 'Se creó exitosamente el producto!');
        return Redirect::to('store-producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    //public function edit(Producto $producto)
    public function edit($id)
    {
        // 
        $user = Auth::user();
        //
        $categoria = Categoria::all();
        $sucursal = Sucursal::all();
        $producto = Producto::find($id);
        
        //
        return view('producto.edit', [
            'categoria' => $categoria,
            'sucursal' => $sucursal,
            'producto' => $producto,
            'level' => $user->user_data->user_perfil->nombre,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductoRequest  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductoRequest $request, $id)
    {
        //
        /*$producto = Producto::find($producto->id);
        //$producto->update($request->all());
        if(!$producto) {
            return Redirect::to('bandeja');
        }*/

        //echo('---- '.$producto->fecha_compra);

        //exit();

        // validacion
        $validated = $request->validate([
            'nombre'            => 'required|max:30',
            'descripcion'       => 'required|max:100',
            'sucursal_id'       => 'required|numeric',
            'categoria_id'      => 'required|numeric',
            'precio'            => 'required|numeric|max:99999',
            'fecha_compra'      => 'required|date_format:m/d/Y',
        ]);

        // fecha transform
        $fecha = explode('/',$request->fecha_compra);
        $fecha_compra = new \DateTime($fecha[2] . '-' . $fecha[0] . '-' . $fecha[1]);
        $request->merge(['fecha_compra' => $fecha_compra->format('Y-m-d H:i:s')]);

        // update
        $producto = Producto::find($id);
        $producto->nombre           = $request->nombre;
        $producto->descripcion      = $request->descripcion;
        $producto->categoria_id     = $request->categoria_id;
        $producto->sucursal_id      = $request->sucursal_id;
        $producto->precio           = $request->precio;
        $producto->fecha_compra     = $fecha_compra->format('Y-m-d H:i:s');
        $producto->estado           = $request->estado ?? 'Abierto';
        $producto->comentarios      = $request->comentarios;
        
        //$producto = Producto::find($request->id);
        //echo $id;
        //exit();
        $producto->update();

        // redirect
        Session::flash('message', 'Se actualiz[o] exitosamente el producto!');
        return Redirect::to('bandeja');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //echo $id;
        //exit();
        $producto = Producto::find($id);
        $producto->delete();
        return redirect('/bandeja')->with('success', 'Producto eliminado correctamente');
    }
}
