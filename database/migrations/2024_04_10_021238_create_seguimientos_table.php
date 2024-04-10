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
        Schema::create('Seguimiento', function (Blueprint $table) {
            $table->id();
            $table->integer('id_Denuncia');
            $table->string('Estado');
            $table->text('Notas');
            $table->date_time_set('Hora_seg');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Seguimiento');
    }
};
