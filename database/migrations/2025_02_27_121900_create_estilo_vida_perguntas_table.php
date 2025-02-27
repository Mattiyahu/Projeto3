<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estilo_vida_perguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta_1')->default('Você pratica atividades físicas regularmente?');
            $table->string('opcoes_1')->default('Sim,Não,Às vezes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estilo_vida_perguntas');
    }
};