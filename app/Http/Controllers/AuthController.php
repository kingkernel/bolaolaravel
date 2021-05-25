<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\kingkernelFunctions;

class AuthController extends Controller
{
    public function index()
    {
        $password = kingkernelFunctions::hashPassword(\Request::input('passkey'));
        $userMail = \Request::input('usermail');
        echo $password .'|'.$userMail;
        echo '\n |||'.$password;
        /*
        [usermail] => danielsmail@gmail.com
        [passkey] => 123456 )
        */
    }
}
