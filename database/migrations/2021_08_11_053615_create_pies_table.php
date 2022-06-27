<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pies', function (Blueprint $table) {
            $table->id();
            $table->string('Ubicacion');
            $table->string('Telefono');
            $table->string('Correo');
            $table->string('Facebook');
            $table->string('Twitter');
            $table->string('Instagram');
            $table->string('Logo');
            $table->string('Terminos');
            $table->string('Nosotros');
            $table->string('Directorio');
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
        Schema::dropIfExists('pies');
    }
}
