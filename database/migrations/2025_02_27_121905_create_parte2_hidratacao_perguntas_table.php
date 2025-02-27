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
        Schema::create('parte2_hidratacao_perguntas', function (Blueprint $table) {
            $table->id();
            
            // Pergunta sobre consumo de água
            $table->string('pergunta_1')->default('Quantos copos de água você consumiu hoje?');
            $table->text('opcoes_1')->nullable(); // Campo aberto para descrição da quantidade
            
            // Pergunta sobre outras bebidas
            $table->string('pergunta_2')->default('Você consumiu outras bebidas, como suco, café, chá ou refrigerante hoje?');
            $table->string('opcoes_2')->default('Sim,Não');
            $table->string('pergunta_2_especifique')->default('Se sim, qual e em que quantidade?');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parte2_hidratacao_perguntas');
    }
};