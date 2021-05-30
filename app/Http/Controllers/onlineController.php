<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\cidades;

class onlineController extends Controller
{
    public function index()
    {
        $cidades = new cidades;
        $cidade = $cidades->select('cidade')->where('id', $_SESSION['thismember']["cidade"])->get()->toArray();
        $_SESSION['thismember']['cidadename'] = $cidade[0]['cidade'];
        $member =  ['member'=>$_SESSION['thismember']];
        return view('bolaologado.modelonline')->with($member);
    }
}
