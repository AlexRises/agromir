<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnologicalOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technological_operations', function (Blueprint $table) {
            $table->increments('tech_op_id');
            $table->string('type_of_operation')->nullable();
            $table->integer('planned_amount_of_ha')->nullable();
            $table->date('start_date')->nullable();
            $table->date('finish_date')->nullable();
            $table->string('status_text')->nullable();
            $table->integer('status_num')->nullable();
            $table->integer('plant_culture')->nullable();
            $table->foreign('plant_culture')
                ->references('plant_culture_id')
                ->on('plant_culture')
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
        Schema::dropIfExists('technological_operations');
    }
}
