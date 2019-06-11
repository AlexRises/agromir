<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropRotationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_rotation', function (Blueprint $table) {
                $table->increments('crop_rot_id');
                $table->string('class');
                $table->string('culture_name');
                $table->integer('harvest_per_ha');
                $table->string('irrigation_type');
                $table->string('tillage');
                $table->integer('total_harvest');
                $table->integer('branch');
                $table->date('year');
                $table->foreign('branch')
                    ->references('branch_id')
                    ->on('branch')
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
        Schema::dropIfExists('crop_rotation');
    }
}
