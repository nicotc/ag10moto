<?php

namespace Modules\Pedidos\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pedidos::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedidos::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('pedidos::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedidos $id)
    {



        return view('pedidos::edit', ['pedido' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
