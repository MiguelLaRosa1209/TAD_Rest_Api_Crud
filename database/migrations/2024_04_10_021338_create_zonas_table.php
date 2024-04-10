<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('Zona', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('seguridad');
            $table->long_interger('Latitud_menor');
            $table->long_interger('Latitud_mayor');
            $table->long_interger('Longitud_menor');
            $table->long_interger('Longitud_mayor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Zona');
    }
};
