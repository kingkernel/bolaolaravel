<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validationController extends Controller
{
    public static function mailValidation($hash)
    {
        $user = new \App\Models\User;
        $userData = $user->where('password', $hash)->get()->toArray();
        print_r($userData[0]);
    }
}
