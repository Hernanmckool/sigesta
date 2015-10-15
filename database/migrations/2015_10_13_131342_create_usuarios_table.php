<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('documento');
            $table->string('telefono');
            $table->integer('id_pais');
            $table->integer('id_estado');
            $table->string('direccion');
            $table->integer('postal');
            $table->integer('id_profesion');
            $table->integer('id_cargo');
            $table->integer('id_departamento');
            $table->string('email')->unique();
            $table->integer('id_operador');
            $table->string('usuario');
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
