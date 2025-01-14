<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Support\Facades\DB;

class GetDataController extends Controller
{
    public function pedidos()
    {

        $id = Pedidos::select('id_pedidos')->orderBy('id_pedidos', 'desc')->first();

        if ($id != null) {
            $id = $id->id_pedidos;
        }

        if ($id == null) {
            $id = 0;
        }

        $Formularios = DB::connection('mysqlWeb')->select(
            'select
        yidn2_fv_entry_meta.id,
	    yidn2_fv_entry_meta.data_id,
	    yidn2_fv_entry_meta.meta_key,
	    yidn2_fv_entry_meta.meta_value from yidn2_fv_entry_meta
        where
        yidn2_fv_entry_meta.meta_key = "fv_form_id" and
        yidn2_fv_entry_meta.meta_value = "b283e08" and
        yidn2_fv_entry_meta.data_id > ' . $id
        );

        // 219e7a6

        // yidn2_fv_entry_meta.meta_value = "b283e08"'
        $in = [];
        foreach ($Formularios as $Formulario) {
            $in[] = $Formulario->data_id;
        }




        if (count($in) > 0) {
            $datos = DB::connection('mysqlWeb')->select(
                'select
        yidn2_fv_entry_meta.id,
	    yidn2_fv_entry_meta.data_id,
	    yidn2_fv_entry_meta.meta_key,
	    yidn2_fv_entry_meta.meta_value from yidn2_fv_entry_meta
        where
        yidn2_fv_entry_meta.data_id in (' . implode(',', $in) . ')'

            );

            foreach ($datos as $dato) {
                $data[$dato->data_id][$dato->meta_key] = $dato->meta_value;
            }


            foreach ($data as $key => $value) {
                $pedidos = Pedidos::create([
                    'id_pedidos' => $key,
                    'nombre' => $value['nombre'],
                    'email' => $value['email'],
                    'telefono' => $value['telefono'],
                    'problema' => $value['problema'],
                    'imagenes' => $value['imagenes'],
                    'aceptacion' => $value['aceptacion'],
                    'lang' => $value['lang'] ?? null,
                    'fv_form_id' => $value['fv_form_id'],
                ]);
            }
        }

        dd("Datos guardados correctamente");
    }
}
