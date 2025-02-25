<?php

namespace App\Http\Controllers;

use App\Models\Otros;
use App\Models\Pedidos;
use Illuminate\Support\Facades\DB;

class GetDataController extends Controller
{
    public static function pedidos()
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
        yIDN2_fv_entry_meta.id,
	    yIDN2_fv_entry_meta.data_id,
	    yIDN2_fv_entry_meta.meta_key,
	    yIDN2_fv_entry_meta.meta_value from yIDN2_fv_entry_meta
        where
        yIDN2_fv_entry_meta.meta_key = "fv_form_id" and
        yIDN2_fv_entry_meta.meta_value = "b283e08" and
        yIDN2_fv_entry_meta.data_id > '.$id
        );

        // 219e7a6

        // yIDN2_fv_entry_meta.meta_value = "b283e08"'
        $in = [];
        foreach ($Formularios as $Formulario) {
            $in[] = $Formulario->data_id;
        }

        if (count($in) > 0) {
            $datos = DB::connection('mysqlWeb')->select(
                'select
        yIDN2_fv_entry_meta.id,
	    yIDN2_fv_entry_meta.data_id,
	    yIDN2_fv_entry_meta.meta_key,
	    yIDN2_fv_entry_meta.meta_value from yIDN2_fv_entry_meta
        where
        yIDN2_fv_entry_meta.data_id in ('.implode(',', $in).')'

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
                    'status' => 0,
                ]);
            }
        }

        dd('Datos guardados correctamente');
    }

    public static function items()
    {
        $monos = GetDataController::otros('Monos', '219e7a6');
        $monos = GetDataController::otros('Chaquetas', '0ae026d');
        $monos = GetDataController::otros('Caferacer', '1b3d82c');
        $monos = GetDataController::otros('Guantes', '140cacc');
        $monos = GetDataController::otros('Botas', '60ea4ce');
        $monos = GetDataController::otros('Airbags', '3e7a75d');

        // 219e7a6 monos
        // 0ae026d chaquetas
        // 1b3d82c caferacer
        // 140cacc guantes
        // 60ea4ce botas
        // 3e7a75d airbags
    }

    public static function otros($item, $form)
    {

        $id = null;
        $id = Otros::select('id_pedidos')
            ->where('item', $item)
            ->orderBy('id_pedidos', 'desc')->first();

        if ($id != null) {
            $id = $id->id_pedidos;
        }

        if ($id == null) {
            $id = 0;
        }

        $Formularios = DB::connection('mysqlWeb')->select(
            'select
        yIDN2_fv_entry_meta.id,
	    yIDN2_fv_entry_meta.data_id,
	    yIDN2_fv_entry_meta.meta_key,
	    yIDN2_fv_entry_meta.meta_value from yIDN2_fv_entry_meta
        where
        yIDN2_fv_entry_meta.meta_key = "fv_form_id" and
        yIDN2_fv_entry_meta.meta_value = "'.$form.'" and
        yIDN2_fv_entry_meta.data_id > '.$id
        );

        $in = [];
        foreach ($Formularios as $Formulario) {
            $in[] = $Formulario->data_id;
        }

        if (count($in) > 0) {
            $datos = DB::connection('mysqlWeb')->select(
                'select
        yIDN2_fv_entry_meta.id,
	    yIDN2_fv_entry_meta.data_id,
	    yIDN2_fv_entry_meta.meta_key,
	    yIDN2_fv_entry_meta.meta_value from yIDN2_fv_entry_meta
        where
        yIDN2_fv_entry_meta.data_id in ('.implode(',', $in).')'

            );

            foreach ($datos as $dato) {
                $data[$dato->data_id][$dato->meta_key] = $dato->meta_value;
            }

            foreach ($data as $key => $value) {
                $modelos = Otros::create([
                    'id_pedidos' => $key,
                    'nombre' => $value['nombre'],
                    'email' => $value['email'],
                    'telefono' => $value['telefono'],
                    'lang' => $value['lang'] ?? null,
                    'item' => $item,
                    'fv_form_id' => $value['fv_form_id'],
                    'status' => 0,
                ]);
            }

        }

        // dd($data);

    }
}