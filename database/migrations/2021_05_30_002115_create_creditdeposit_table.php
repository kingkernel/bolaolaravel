<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditdepositTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditdeposit', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("member_id")->unsigned();
            $table->foreign('member_id')->references('id')->on('users');
            $table->enum('methodtransfer', ['boleto', 'pix', 'cartao']);
            $table->string('identify_external');
            $table->datetime('dateverify')->nullable();
            $table->double('value', 15, 2)->default(0.0);
            $table->timestamps();
        });
            \DB::statement('ALTER TABLE creditdeposit modify dateverify datetime default current_timestamp()');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creditdeposit');
    }
}
