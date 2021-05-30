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
        $user = \DB::select(\DB::RAW('select count(*) as existe from users where email= :varemail and password= :varpassword and active= :varactive'),
        [
            'varemail' => $userMail,
            'varpassword' => $password,
            'varactive' => true
        ]);
        if($user[0]->existe == 1){
            $_SESSION["permitido"] = true;
            $user = new User;
            $member = $user->where([
                'email'=>$userMail])->get()->toArray();
            $_SESSION["thismember"] = $member[0];
            return redirect('/online');
        } else {
            echo "Não pode logar";
       }
    }
    public function logout()
    {
        session_destroy();
        return redirect('/');
    }
}