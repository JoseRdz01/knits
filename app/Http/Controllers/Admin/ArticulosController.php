<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articulo;
use Illuminate\Support\Facades\Artisan;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('admin.articulos.index', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articulos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'SKU' => 'required|unique:articulo|max:10',
        ]);

        $data['SKU'] = $request->SKU;
        $data['nombre'] = $request->nombre;
        $data['descripcion'] = $request->descripcion;
        $data['costo'] = $request->costo;

        // dd($data);

        $articulo = Articulo::create($data);

        return redirect()->route('admin.articulos.edit', $articulo)->with('info', 'El articulo se creo con exito');
        // dd($articulo);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.articulos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo)
    {
        return view('admin.articulos.edit', compact('articulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
        // $request->validate([
        //     'SKU' => "required|unique:articulo|max:10,SKU,$articulo->id",
        // ]);

        $data['SKU'] = $request->SKU;
        $data['nombre'] = $request->nombre;
        $data['descripcion'] = $request->descripcion;
        $data['costo'] = $request->costo;

        $articulo->update($data);

        return redirect()->route('admin.articulos.edit', $articulo)->with('info', 'El articulo se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        $articulo->delete();
        
        return redirect()->route('admin.articulos.index')->with('info', 'El articulo se elimino con exito');
    }
}
