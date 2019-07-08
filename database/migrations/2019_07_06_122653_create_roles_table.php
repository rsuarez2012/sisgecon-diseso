<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateRolesTable extends Migration
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
            $table->string('name', 30)->unique();
            $table->string('description', 100)->nullable();
            $table->boolean('condition')->default(1);
            $table->timestamps();
        });
        DB::table('roles')->insert(array('id'=>'1', 'name'=>'admin', 'description'=>'Administrador del Sistema'));
        DB::table('roles')->insert(array('id'=>'2', 'name'=>'usuario', 'description'=>'Usuario del Sistema'));
        DB::table('roles')->insert(array('id'=>'3', 'name'=>'Historias Medicas', 'description'=>'Usuario de Historias Medicas'));
        DB::table('roles')->insert(array('id'=>'4', 'name'=>'Medico', 'description'=>'Medicos del Servicio'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
