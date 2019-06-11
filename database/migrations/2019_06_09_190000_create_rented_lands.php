<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentedLands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rented_lands', function (Blueprint $table) {
            $table->increments('rl_id');
            $table->integer('contract')->nullable();
            $table->integer('reg_number')->nullable();
            $table->string('adress')->nullable();
            $table->string('kadastr_number')->nullable();
            $table->string('kadastr_price')->nullable();
            $table->integer('kadastr_square')->nullable();
            $table->integer('kadastr_status_num')->nullable();
            $table->string('kadastr_price_text')->nullable();
            $table->string('region')->nullable();
            $table->foreign('contract')
                ->references('contract_id')
                ->on('contracts')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rented_lands');
    }
}
