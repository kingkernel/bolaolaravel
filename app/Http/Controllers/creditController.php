<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\creditdeposit;

class creditController extends Controller
{
    public function index()
    {
        $_SESSION['thismember'];
        $credit = new creditdeposit;
        return view('bolaologado.modelonline');
    }
}
