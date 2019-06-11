<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technic', function (Blueprint $table) {
            $table->increments('technic_id');
            $table->integer('type_id');
            $table->string('condition')->nullable();
            $table->date('date_of_delivery')->nullable();
            $table->integer('provider');
            $table->integer('GPS_status_num')->nullable();
            $table->string('GPS_status_text')->nullable();
            $table->integer('DUT_status_num')->nullable();
            $table->string('DUT_status_text')->nullable();
            $table->integer('DRT_status_num')->nullable();
            $table->string('DRT_status_text')->nullable();
            $table->integer('branch');
            $table->foreign('branch')
                ->references('branch_id')
                ->on('branch')
                ->onDelete('cascade');
            $table->foreign('type_id')
                  ->references('technic_type_id')
                  ->on('technic_type')
                  ->onDelete('cascade');
            $table->foreign('provider')
                  ->references('provider_id')
                  ->on('provider')
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
        Schema::dropIfExists('technic');
    }
}
