<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('users');
            $table->string('bets_code')->unique();
            $table->mediumText('description');
            $table->double('collection_bets', 15, 2);
            $table->datetime('creation')
                ->default(\DB::RAW('current_timestamp()'));
            $table->datetime('finish_bets')->nullable()
                ->default(\DB::RAW('DATE_ADD(current_timestamp(), INTERVAL 7 DAY)'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bets');
    }
}
