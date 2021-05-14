<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ajaxModel;

class usuariosController extends Controller
{
    public function newuser()
    {
        print_r($_POST);
    }
    public static function cadastro()
    {
        $estados = new ajaxModel;
        $dataTemplate = ['estados' => $estados->getEstados()];
        return view('bolao.cadastro')->with($dataTemplate);
    }
}
