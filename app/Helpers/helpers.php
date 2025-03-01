<?php

use App\Models\Lang;
use Modules\Estados\Models\StatusTraducciones;

function getUser($id)
{
    $user = \App\Models\User::find($id);

    return $user->first_name.' '.$user->last_name;
}



function getLangIso($iso = 'es')
{
    // $iso todo en minuscula

    $iso = strtolower($iso);

    $lang = Lang::where('iso', $iso)->first();



    return $lang->id;
}


function getEstado($id, $lag)
{
    $estado = StatusTraducciones::where('status_id', $id)
        ->where('langs_id', $lag)
        ->first();

    return $estado->nombre;
}