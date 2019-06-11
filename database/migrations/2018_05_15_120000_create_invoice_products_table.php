<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_products', function (Blueprint $table) {
            $table->increments('invoice_products_id');
            $table->integer('product');
            //$table->decimal('price');
            $table->integer('amount');
            $table->integer('invoice');
            $table->string('unit');
            $table->integer('branch');
            $table->foreign('product')
                ->references('product_id')
                ->on('product')
                ->onDelete('cascade');
            $table->foreign('invoice')
                ->references('invoice_id')
                ->on('invoice')
                ->onDelete('cascade');
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
        Schema::dropIfExists('invoice_products');
    }
}
