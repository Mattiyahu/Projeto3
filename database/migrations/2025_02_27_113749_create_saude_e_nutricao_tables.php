<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaudeENutricaoTables extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('saude_mental_perguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta');
            $table->timestamps();
        });

        Schema::create('saude_mental_respostas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('saude_mental_pergunta_id')->constrained()->onDelete('cascade');
            $table->string('resposta');
            $table->timestamps();
        });

        Schema::create('estilo_vida_perguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta');
            $table->timestamps();
        });

        Schema::create('estilo_vida_respostas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estilo_vida_pergunta_id')->constrained()->onDelete('cascade');
            $table->string('resposta');
            $table->timestamps();
        });

        Schema::create('usabilidade_perguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta');
            $table->timestamps();
        });

        Schema::create('usabilidade_respostas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usabilidade_pergunta_id')->constrained()->onDelete('cascade');
            $table->string('resposta');
            $table->timestamps();
        });

        Schema::create('odm_perguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta');
            $table->timestamps();
        });

        Schema::create('odm_respostas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('odm_pergunta_id')->constrained()->onDelete('cascade');
            $table->string('resposta');
            $table->timestamps();
        });

        Schema::create('habitos_alimentares_perguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta');
            $table->timestamps();
        });

        Schema::create('habitos_alimentares_respostas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('habitos_alimentares_pergunta_id')->constrained('habitos_alimentares_perguntas', 'id')->onDelete('cascade');

            $table->string('resposta');
            $table->timestamps();
        });

        Schema::create('parte2_alimentacao_perguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta');
            $table->timestamps();
        });

        Schema::create('parte2_alimentacao_respostas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parte2_alimentacao_pergunta_id')->constrained()->onDelete('cascade');
            $table->string('resposta');
            $table->timestamps();
        });

        Schema::create('parte2_hidratacao_perguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta');
            $table->timestamps();
        });

        Schema::create('hidratacao_respostas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parte2_hidratacao_pergunta_id')->constrained()->onDelete('cascade');
            $table->string('resposta');
            $table->timestamps();
        });

        Schema::create('base_de_alimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_alimento');
            $table->timestamps();
        });

        Schema::create('recordatorio_24', function (Blueprint $table) {
            $table->id();
            $table->foreignId('base_de_alimentos_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('recomendacao_nutricional', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('recomendacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recomendacao_nutricional');
        Schema::dropIfExists('recordatorio_24');
        Schema::dropIfExists('base_de_alimentos');
        Schema::dropIfExists('hidratacao_respostas');
        Schema::dropIfExists('parte2_hidratacao_perguntas');
        Schema::dropIfExists('parte2_alimentacao_respostas');
        Schema::dropIfExists('parte2_alimentacao_perguntas');
        Schema::dropIfExists('habitos_alimentares_respostas');
        Schema::dropIfExists('habitos_alimentares_perguntas');
        Schema::dropIfExists('odm_respostas');
        Schema::dropIfExists('odm_perguntas');
        Schema::dropIfExists('usabilidade_respostas');
        Schema::dropIfExists('usabilidade_perguntas');
        Schema::dropIfExists('estilo_vida_respostas');
        Schema::dropIfExists('estilo_vida_perguntas');
        Schema::dropIfExists('saude_mental_respostas');
        Schema::dropIfExists('saude_mental_perguntas');
    }
}
