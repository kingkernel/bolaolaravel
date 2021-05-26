<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\kingkernelFunctions;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        $password = kingkernelFunctions::hashPassword(\Request::input('passkey'));
        $userMail = \Request::input('usermail');
        $query = \DB::table('users')->where([
            'email'=>$userMail,
            'password'=>$password,
            'active'=> 1])->get()->count();
        if($query ==1){
            echo "pode logar";
            session_start();
            $_SESSION["permitido"] = 'sim';
            $user = new User;
            $member = $user->where([
                'email'=>$userMail,
                'password'=>$password,
                'active'=> 1])->get()->first()->toArray();
            print_r($member);
        } else {
            echo "Não pode logar";
        }
    }
}
