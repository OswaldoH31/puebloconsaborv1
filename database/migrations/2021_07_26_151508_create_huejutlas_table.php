<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuejutlasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huejutlas', function (Blueprint $table) {
            $table->id();
            $table->string('Ciudad');
            $table->string('Concepto');
            $table->text('Historia');
            $table->text('Descripcion');
            $table->text('DescripcionUbicacion');
            $table->string('Ubicacion');
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
        Schema::dropIfExists('huejutlas');
    }
}
