<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('prize_tb', function (Blueprint $table) {
            $table->id();
            $table->string('first_prize')->nullable();
            $table->string('seconde_prize')->nullable();
            $table->string('neight_first_prize')->nullable();
            $table->string('two_digit_prize')->nullable();
            $table->timestamp('cre_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('prize_tb');

    }
}
