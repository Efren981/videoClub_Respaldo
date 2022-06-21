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
        Schema::create('detalles_prestamos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('idSocio')->constrained('socios');
            $table->foreignId('idPrestamo')->constrained('prestamos');
            $table->foreignId('idCinta')->constrained('cintas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_prestamos');
    }
};
