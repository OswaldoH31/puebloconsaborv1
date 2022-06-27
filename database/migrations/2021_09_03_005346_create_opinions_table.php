<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpinionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opinions', function (Blueprint $table) {
            $table->id();
            $table->string('Calificacion_General');
            $table->string('Titulo_Opinion');
            $table->text('Opinion');
            $table->string('Tipo_Visita');
            $table->string('Razon_Visita');
            $table->string('Fecha_Visita');
            $table->string('Cal_Comida');
            $table->string('Cal_Servicio');
            $table->string('Cal_Calidad');
            $table->string('Cal_Ambiente');
            $table->string('Precio');
            $table->string('Recomendacion');
            $table->string('Certifico');
            $table->string('Foto')->nullable();
            $table->foreignId('local_id')->references('id')->on('locals')->nullable();
            $table->foreignId('user_id')->references('id')->on('users')->nullable();
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
        Schema::dropIfExists('opinions');
    }
}
