<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefrescosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refrescos', function (Blueprint $table) {
            $table->id();
            $table->string('Marca');
            $table->string('Cantidad');
            $table->string('Costo');
            $table->string('Imagen');
            $table->foreignId('local_id')->references('id')->on('locals')->nullable();
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
        Schema::dropIfExists('refrescos');
    }
}
