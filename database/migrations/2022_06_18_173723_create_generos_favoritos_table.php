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
        Schema::create('generos_favoritos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('idGenero')->constrained('generos');
            $table->foreignId('idSocio')->constrained('socios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generos_favoritos');
    }
};
