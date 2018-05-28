<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technic_type', function (Blueprint $table) {
            $table->increments('technic_type_id');
            $table->string('name')->nullable();
            $table->string('necessary_parts')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('technic_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technic_type');
    }
}
