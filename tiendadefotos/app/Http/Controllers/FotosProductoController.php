<?php

namespace App\Http\Controllers;

use App\Models\FotosProducto;
use Illuminate\Http\Request;

/**
 * Class FotosProductoController
 * @package App\Http\Controllers
 */
class FotosProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fotosProductos = FotosProducto::paginate();

        return view('fotos-producto.index', compact('fotosProductos'))
            ->with('i', (request()->input('page', 1) - 1) * $fotosProductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fotosProducto = new FotosProducto();
        return view('fotos-producto.create', compact('fotosProducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FotosProducto::$rules);

        $fotosProducto = FotosProducto::create($request->all());

        return redirect()->route('fotos-productos.index')
            ->with('success', 'FotosProducto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fotosProducto = FotosProducto::find($id);

        return view('fotos-producto.show', compact('fotosProducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fotosProducto = FotosProducto::find($id);

        return view('fotos-producto.edit', compact('fotosProducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FotosProducto $fotosProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FotosProducto $fotosProducto)
    {
        request()->validate(FotosProducto::$rules);

        $fotosProducto->update($request->all());

        return redirect()->route('fotos-productos.index')
            ->with('success', 'FotosProducto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fotosProducto = FotosProducto::find($id)->delete();

        return redirect()->route('fotos-productos.index')
            ->with('success', 'FotosProducto deleted successfully');
    }
}
