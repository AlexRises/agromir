<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantCultureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_culture', function (Blueprint $table) {
            $table->increments('plant_culture_id');
            $table->integer('branch');
            $table->integer('productivity_of_land_in_tons');
            $table->date('terms_of_sowing');
            $table->date('terms_of_cleaning');
            $table->integer('amount_of_planted_lands_in_ha');
            $table->string('culture_name');
            $table->foreign('branch')
                  ->references('branch_id')
                  ->on('branch')
                  ->onDelete('cascade');


        });

        Schema::create('product_plant_culture', function (Blueprint $table) {
            $table->integer('productID')->unsigned();
            $table->integer('plant_cultureID')->unsigned();
            $table->primary(['productID', 'plant_cultureID']);
            $table->foreign('productID')
                  ->references('product_id')
                  ->on('product')
                  ->onDelete('cascade');
            $table->foreign('plant_cultureID')
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
        Schema::dropIfExists('plant_culture');
    }
}
