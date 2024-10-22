<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class inventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventario = Inventario::all();
        $data['inventario'] = $inventario;
        return view('secret',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inventario = new Inventario();
        $inventario->nombre =$request-> nombre;
        $inventario->tipo=$request-> tipo;
        $inventario->descripcion=$request-> descripcion;
        $inventario->precio=$request-> precio;
        $inventario->precio_venta=$request-> precio_venta;
        $inventario-> cantidad =$request-> cantidad;
        $inventario-> fabricante =$request-> fabricante;
        $inventario->  codigo_fabricante=$request-> codigo;
        $inventario->save();

        return redirect()->route('secret.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $inventario = Inventario::find($id);
        $data['inventario']=$inventario;
        return view('edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $inventario = Inventario::find($id);
        $inventario->nombre =$request-> nombre;
        $inventario->tipo=$request-> tipo;
        $inventario->descripcion=$request-> descripcion;
        $inventario->precio=$request-> precio;
        $inventario->precio_venta=$request-> precio_venta;
        $inventario-> cantidad =$request-> cantidad;
        $inventario-> fabricante =$request-> fabricante;
        $inventario->  codigo_fabricante=$request-> codigo;
        $inventario->update();

        return redirect()->route('secret.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Inventario::destroy($id);
        return redirect()->route('secret.index');
    }
}
