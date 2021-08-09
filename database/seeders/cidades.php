<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class cidades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        $dados = file_get_contents(__DIR__.'/dados.sql');
        \DB::Select("$dados");
    }
}
