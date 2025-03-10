<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Repairs;
use Illuminate\Support\Facades\DB;

class GetDataController extends Controller
{
    public static function repairs()
    {
        $id = 0;

        $repairs = Repairs::select('id_repairs')->orderBy('id_repairs', 'desc')->first();

        if ($repairs != null) {
            $id = $repairs->id_repairs;
        }

        if($id == null){
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
                if (! isset($value['lang'])) {
                    $value['lang'] = 'es';
                }

                $repairs = Repairs::create([
                    'id_repairs' => $key,
                    'name' => $value['nombre'],
                    'email' => $value['email'],
                    'phone' => $value['telefono'],
                    'details' => $value['problema'],
                    'images' => $value['imagenes'],
                    'langs_id' => getLangIso($value['lang']),
                    'fv_form_id' => $value['fv_form_id'],
                    'status_id' => 1,
                ]);
            }

        }

        // dd('Datos guardados correctamente');
    }

    public static function items()
    {
        $monos = GetDataController::orders('Monos', '219e7a6');
        $monos = GetDataController::orders('Chaquetas', '0ae026d');
        $monos = GetDataController::orders('Caferacer', '1b3d82c');
        $monos = GetDataController::orders('Guantes', '140cacc');
        $monos = GetDataController::orders('Botas', '60ea4ce');
        $monos = GetDataController::orders('Airbags', '3e7a75d');

        // 219e7a6 monos
        // 0ae026d chaquetas
        // 1b3d82c caferacer
        // 140cacc guantes
        // 60ea4ce botas
        // 3e7a75d airbags
    }

    public static function orders($item, $form)
    {

        $id = 0;

        $order = Orders::select('id_orders')
            ->where('item', $item)
            ->orderBy('id_orders', 'desc')->first();

        if ($order != null) {
            $id = $order->id_orders;
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
                if (! isset($value['lang'])) {
                    $value['lang'] = 'es';
                }
                $modelos = Orders::create([
                    'id_orders' => $key,
                    'name' => $value['nombre'],
                    'email' => $value['email'],
                    'phone' => $value['telefono'],
                    'langs_id' => getLangIso($value['lang']),
                    'item' => $item,
                    'details' => $value['detalles'] ?? null,
                    'fv_form_id' => $value['fv_form_id'],
                    'status_id' => 2,
                ]);
            }

        }

        // dd($data);

    }
}