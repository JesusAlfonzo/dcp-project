<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductoRequest;
use Illuminate\Http\Request;
use App\Models\Caracteristica;
use App\Models\Categoria;
use App\Models\Producto;
use DB;
use Exception;


use function Laravel\Prompts\select;
use function Pest\Laravel\get;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('producto.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $caracteristicas = Categoria::join('caracteristicas as c', 'categorias.Caracteristica_id', '=', 'c.id')
            ->select('categorias.id as id', 'c.nombre as nombre')
            ->where('estado', '1')
            ->get();




        return view('producto.create', compact('caracteristicas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductoRequest $request)
    {
     //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
