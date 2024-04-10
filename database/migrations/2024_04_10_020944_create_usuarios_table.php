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
        Schema::create('Usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('clave');
            $table->string('email_usuario')->unique();
            $table->long_integer('telefono');
            $table->text('tipo_usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Usuario');
    }
};
