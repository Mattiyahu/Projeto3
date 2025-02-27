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
        Schema::create('usabilidade_perguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta_1')->default('O que você espera de um aplicativo de saúde mental e alimentação?');
            $table->string('opcoes_1')->default('Monitoramento de refeições,Dicas de bem-estar,Acompanhamento com profissionais,Outros');
            
            $table->string('pergunta_2')->default('Você gostaria de receber notificações ou lembretes para cuidar de sua saúde mental e alimentação?');
            $table->string('opcoes_2')->default('Diariamente,Algumas vezes por semana,Apenas quando necessário');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usabilidade_perguntas');
    }
};
