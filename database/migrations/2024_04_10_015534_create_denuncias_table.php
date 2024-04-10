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
        Schema::create('Denuncia', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario');
            $table->string('Tipo');
            $table->string('Sescripcion');
            $table->date('Momento');
            $table->text('Estado');
            $table->long_integer('Latitud');
            $table->long_integer('Longitud');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Denuncia');
    }
};
