<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean("active")->default('0')->after('remember_token');
            $table->bigInteger('cpf')->unique()->notnull()->after('active');
            $table->string('pix')->unique()->notnull()->after('cpf');
            $table->date('nascimento')->notnull()->after('pix');
            $table->boolean('verificado')->default('0')->after('nascimento');
            $table->string('estado')->after('verificado');
            $table->string('cidade')->after('estado');
            $table->double('credit', 15, 2)->null()->default('0')->after('cidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('active');
            $table->dropColumn('cpf');
            $table->dropColumn('pix');
            $table->dropColumn('nascimento');
            $table->dropColumn('verificado');
            $table->dropColumn('estado');
            $table->dropColumn('cidade');
            $table->dropColumn('credit');
        });
    }
}
