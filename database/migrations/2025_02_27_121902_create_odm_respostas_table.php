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
        Schema::create('odm_respostas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('odm_pergunta_id')->constrained('odm_perguntas')->onDelete('cascade');
            
            // Respostas emocionais relacionadas à pergunta
            $table->enum('sentimento_durante', ['Calmo', 'Ansioso', 'Triste', 'Irritado', 'Feliz', 'Outro'])->nullable();
            $table->string('sentimento_outro')->nullable();
            $table->enum('tipo_fome', ['Fome física', 'Fome emocional', 'Ambos'])->nullable();
            $table->enum('sentimento_apos', ['Satisfeito', 'Culpado', 'Indiferente', 'Energizado', 'Outro'])->nullable();
            
            // Contexto da resposta
            $table->boolean('sozinho')->nullable();
            $table->boolean('distraido')->nullable();
            $table->enum('velocidade', ['Devagar', 'Normal', 'Rápida'])->nullable();
            
            $table->text('observacoes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odm_respostas');
    }
};
