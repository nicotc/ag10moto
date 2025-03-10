<?php

use App\Models\Lang;
use App\Models\User;
use App\Models\StatusTranslation;
use Modules\Estados\Models\StatusTraducciones;

function getUser($id)
{
    $user = User::find($id);

    // dd($user);

    return $user->first_name.' '.$user->last_name;
}

function getLangIso($iso = 'es')
{
    // $iso todo en minuscula

    $iso = strtolower($iso);

    $lang = Lang::where('iso', $iso)->first();

    return $lang->id;
}

function getLagId($id)
{
    $lang = Lang::find($id);

    return $lang->iso;
}

function getEstado($id, $lag)
{

    $estado = StatusTranslation::where('status_id',  $id)
        ->where('langs_id', $lag)
        ->first();



    return $estado->name;
}