<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('display_name');
        });

        DB::table('roles')->insert([

            'name' => 'chief_director',
            'display_name' => 'Chief Operational Officer'
        ]);

        DB::table('roles')->insert([

            'name' => 'vice_director',
            'display_name' => 'Vice Operational Officer'
        ]);

        DB::table('roles')->insert([

            'name' => 'chief_accountant',
            'display_name' => 'Chief Accountant'
        ]);

        DB::table('roles')->insert([

            'name' => 'chief_agronomist',
            'display_name' => 'Chief Agronomist'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role');
    }
}
