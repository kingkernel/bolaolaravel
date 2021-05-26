<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\kingkernelFunctions;

class validationController extends Controller
{
    public static function mailValidation($hash)
    {
        $user = new \App\Models\User;
        $userData = $user->where('password', $hash)->get()->toArray();
        return view('bolao.validauser')->with([
            'usuario' => $userData[0],
            'hash' => $hash]);
    }
    public static function activeUser($hash)
    {
        if(\Request::input('newPassword')==\Request::input('confirmPassword'))
        {
            $newPassword = kingkernelFunctions::hashPassword(\Request::input('newPassword'));
        };
        $user = new User;
        if(User::where([
            'password' => $hash,
            'email'=>\Request::input('user')]
            )->Update([
                'password'=> $newPassword,
                'active'=>1,
                'email_verified_at'=>date("Y-m-d H:i:s")]))
        {
            echo "atualizado";
            //return redirect('/');
        } else {
            echo "faill";
        };
    }
}
