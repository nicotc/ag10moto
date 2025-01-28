<?php

namespace Modules\Notes\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pedidos;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Pedidos  $pedidoId)
    {

        $imagenes = $pedidoId->imagenes;

        $imagenes = explode(',', $imagenes);

        $img = [];
        foreach ($imagenes as $key => $value) {
           if(strstr($value, 'https')){
            $getImage = file_get_contents($value);
            // content type
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $mime = $finfo->buffer($getImage);
            // base64 encode
            $base64 = base64_encode($getImage);
            $base64 = 'data:'.$mime.';base64,'.$base64;
                $img[] = $base64;

                // $img[] = $value;


           }
        }





        return view('notes::index', ['pedido' => $pedidoId, 'img' => $img]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes::create');
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
        return view('notes::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('notes::edit');
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
