<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esperas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('idSocio')->constrained('socios');
            $table->foreignId('idPelicula')->constrained('peliculas');
            $table->integer('prioridad');
            $table->date('fecha');
            $table->string('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('esperas');
    }
};
