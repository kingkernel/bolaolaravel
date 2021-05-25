<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ajaxModel;
use App\Models\user;

class usuariosController extends Controller
{
    public function usuariosCadastro(Request $request)
    {
        $nasc = $_POST['dt-year'].'-'.$_POST['dt-month'].'-'.$_POST['dt-day'];
        $patterns = ['-', '.'];
        $requestuser = [
            'name'=> $request->input('user-nome'),
            'cpf' => str_replace($patterns, '', $request->input('user-cpf')),
            'nascimento' => $nasc,
            'email' => $request->input('user-email'),
            'pix' => $request->input('user-pix'),
            'estado' => $request->input('user-estado'),
            'cidade' => $request->input('user-cidade'),
            'password'=> base64_encode(implode('-', [
                $request->input('user-email'),
                $request->input('user-nome'),
                $request->input('user-cpf')
                ]))
            ];
        $newuser = new user;
        if($newuser->insert($requestuser)){
            echo 'OK, inserido no db';
            $link = \DB::table('users')
                    ->select('password', 'email')
                    ->where('email', $request->input('user-email'))
                    ->get()->toArray();
            //$link[0]->password;

            //\Mail::to($request->input('user-email'))->send(new \App\Mail\userCadastro());

            mail($request->input('user-email'), "Inscrição no Bolão Online", '<a href="http://'.$_SERVER["HTTP_HOST"].'/valida/'.$link[0]->password.'">aqui</a>', 'headers');

        } else {
            echo 'ferrou, você é tapado!';
        };
    }
    public static function cadastro()
    {
        $estados = new ajaxModel;
        $dataTemplate = ['estados' => $estados->getEstados()];
        return view('bolao.cadastro')->with($dataTemplate);
    }
}
