<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Apellido_paterno');
            $table->string('Apellido_materno');
            $table->string('Telefono');
            $table->string('Genero');
            $table->date('Fecha_nacimiento');
            $table->string('email')->unique();
            $table->string('Usuario');
            $table->timestamp('email_verified_at')->nullable();
            //$table->foreignId('Rol_id')->references('id')->on('rols')->comment('Id rol');
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
