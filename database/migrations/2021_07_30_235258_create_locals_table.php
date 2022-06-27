<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('Municipio');
            $table->string('Colonia');
            $table->string('Calle');
            $table->string('Numerolocal');
            $table->integer('CP');
            $table->integer('Telefono');
            $table->string('sitioweb');
            $table->string('Distintivo');
            $table->string('email');
            $table->string('comidas');
            $table->string('rangoprecio');
            $table->string('dietas_especiales');
            //$table->string('categoria');
            
            //$table->string('comidas');
            //$table->foreignId('comida_id')->references('id')->on('comidas')->nullable();
            
            $table->string('destacado');
            $table->string('tipo_servicio');
            $table->string('precio');
            $table->string('tipo_establecimiento');
            
            $table->string('propina')->nullable();
            $table->string('IVA')->nullable();
            $table->string('facturacion')->nullable();

            $table->float('montofactura')->nullable();
            $table->string('file');
            $table->string('estado')->nullable();
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
        Schema::dropIfExists('locals');
    }
}
