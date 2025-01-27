<?php

function getUser($id)
{
    $user = \App\Models\User::find($id);
    return $user->first_name . ' ' . $user->last_name;
}
