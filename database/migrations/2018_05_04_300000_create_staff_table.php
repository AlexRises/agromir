<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('staff_id');
            $table->string('name')->nullable();
            $table->string('patronym')->nullable();
            $table->string('surname')->nullable();
            $table->string('phone')->nullable();
            $table->string('position')->nullable();
            $table->decimal('payment')->nullable();
            $table->integer('branch')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('staff');
    }
}
