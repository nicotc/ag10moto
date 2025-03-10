<?php

namespace Modules\Contacproduct\Http\Controllers;

use App\Models\Otros;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContacproductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contacproduct::index');
    }

    public function notas($id)
    {
        $pedido = Orders::find($id);

        return view('contacproduct::notas', compact('pedido'));
    }

    public function status($id)
    {
        $pedido = Orders::find($id);

        // return view('contacproduct::notas', compact('pedido'));

        return view('contacproduct::status', compact('pedido'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacproduct::create');
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
        return view('contacproduct::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pedido = Orders::find($id);
      

        return view('contacproduct::edit', compact('pedido'));
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