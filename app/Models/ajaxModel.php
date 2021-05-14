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
        $result = $estados->select(['sigla'])->get()->toJson(JSON_UNESCAPED_UNICODE);
        return $result;
    }
    public function getcidades($sigla)
    {
        $cidades = new cidades;
        $result = $cidades->select('id', 'cidade')->where('sigla', $sigla)->get()->toJson(JSON_UNESCAPED_UNICODE);
        return $result;
    }
}
