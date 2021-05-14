<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ajaxModel;
use Illuminate\Database\Eloquent\DB;
use App\Models\cidades;


class freeajaxController extends Controller
{
    public function estados()
    {
        $estados = new ajaxModel;
        return $estados->getEstados();
    }
    public static function cidades($sigla)
    {
        $cidades = new ajaxModel;

        return $cidades->getcidades($sigla);
    }
}
