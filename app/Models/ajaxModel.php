<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\estados;
use App\Models\cidades;

class ajaxModel extends Model
{
    use HasFactory;
    public function getEstados()
    {
        $estados = new estados;
        $result = $estados->select(['sigla'])->get();
        return $result;
    }
    public function getcidades()
    {
        $cidades = new cidades;
        $result = $cidades->select('cidade')->where('sigla', 'ap')->get();
        return $result;
    }
}
