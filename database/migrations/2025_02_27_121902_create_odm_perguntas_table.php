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
        Schema::create('odm_perguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta_1')->default('O que você gostaria de melhorar em sua alimentação?');
            $table->text('opcoes_1')->nullable(); // Deixei como nullable pois parece ser uma pergunta aberta
            
            $table->string('pergunta_2')->default('O que te motiva a cuidar melhor da sua saúde mental e física?');
            $table->text('opcoes_2')->nullable(); // Deixei como nullable pois parece ser uma pergunta aberta
            
            $table->string('pergunta_3')->default('Quais são os maiores desafios que você enfrenta para manter uma alimentação saudável?');
            $table->string('opcoes_3')->default('Falta de tempo,Custo,Falta de motivação,Dificuldade de acesso a alimentos saudáveis,Outros');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odm_perguntas');
    }
};
