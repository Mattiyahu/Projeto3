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
        Schema::create('habitos_alimentares_perguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta_1')->default('Como você descreveria sua alimentação atual?');
            $table->text('opcoes_1')->nullable(); // Pergunta aberta
            
            $table->string('pergunta_2')->default('Você segue algum tipo de dieta específica?');
            $table->text('opcoes_2')->nullable(); // Pergunta aberta
            
            $table->string('pergunta_3')->default('Você tem algum tipo de intolerância ou alergia alimentar?');
            $table->string('opcoes_3')->default('Sim,Não');
            $table->string('pergunta_3_especifique')->default('Se sim, especifique:');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitos_alimentares_perguntas');
    }
};