<?php

namespace Modules\Estados\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pedidos;
use Illuminate\Http\Request;

class EstadosController extends Controller
{

    public function index()
    {
        return view('estados::index');
    }

    public function cambiarEstado(Pedidos $id)
    {

        $imagenes = $id->imagenes;

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
           }elseif(strstr($value, 'public/imagenes/')){
            $img[] = asset("storage/".$value);
           }
        }

        return view('estados::cambiarEstado',
            ['pedido'=> $id, 'img'=> $img]);


        // dd($id);


    }
}
