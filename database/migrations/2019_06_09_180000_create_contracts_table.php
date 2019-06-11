<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('contract_id');
            $table->integer('contragent')->nullable();
            $table->integer('branch')->nullable();
            $table->date('date_of_registration')->nullable();
            $table->integer('doc_num')->nullable();
            $table->string('doc_type')->nullable();
            $table->integer('doc_status_num')->nullable();
            $table->string('doc_status_text')->nullable();
            $table->decimal('price')->nullable();
            $table->foreign('branch')
                ->references('branch_id')
                ->on('branch')
                ->onDelete('cascade');
            $table->foreign('contragent')
                ->references('cp_id')
                ->on('contracting_parties')
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
        Schema::dropIfExists('contracts');
    }
}
