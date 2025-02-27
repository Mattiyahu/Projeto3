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
        Schema::create('parte2_alimentacao_perguntas', function (Blueprint $table) {
            $table->id();
            
            // Pergunta sobre alimentos consumidos
            $table->string('pergunta_1')->default('O que você comeu hoje?');
            $table->string('pergunta_1_cafe')->default('Café da manhã');
            $table->string('pergunta_1_lanche_manha')->default('Lanche da manhã');
            $table->string('pergunta_1_almoco')->default('Almoço');
            $table->string('pergunta_1_lanche_tarde')->default('Lanche da tarde');
            $table->string('pergunta_1_jantar')->default('Jantar');
            $table->string('pergunta_1_lanche_noite')->default('Lanche da noite');
            
            // Pergunta sobre quantidade
            $table->string('pergunta_2')->default('Qual a quantidade que você comeu?');
            $table->text('pergunta_2_dica')->default('Sugestão: utilize medidas caseiras como colheres, xícaras, unidades, etc.');
            
            // Pergunta sobre sentimento durante a refeição
            $table->string('pergunta_3')->default('Qual o seu sentimento durante a refeição?');
            $table->string('opcoes_3')->default('Calmo,Ansioso,Triste,Irritado,Outro');
            $table->string('pergunta_3_especifique')->default('Se outro, especifique:');
            
            // Pergunta sobre fome física/emocional
            $table->string('pergunta_4')->default('Você sentiu que estava comendo por fome ou por questões emocionais?');
            $table->string('opcoes_4')->default('Fome física,Fome emocional');
            
            // Pergunta sobre sentimento após a refeição
            $table->string('pergunta_5')->default('Como você se sentiu após sua refeição?');
            $table->string('opcoes_5')->default('Satisfeito,Culpado,Indiferente,Energizado');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parte2_alimentacao_perguntas');
    }
};