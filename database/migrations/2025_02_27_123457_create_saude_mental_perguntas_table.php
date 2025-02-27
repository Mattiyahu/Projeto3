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
        if (!Schema::hasTable('saude_mental_perguntas')) {
            Schema::create('saude_mental_perguntas', function (Blueprint $table) {
                $table->id();
                $table->string('pergunta_1')->default('Você já foi diagnosticado(a) com algum transtorno mental? (Se sim, qual?)');
                $table->text('opcoes_1')->default('Depressão,Transtorno Bipolar,Transtorno de Ansiedade Generalizada,Síndrome do Pânico,Fobias,Transtorno do Espectro Autista,Déficit de Atenção e Hiperatividade,Bulimia,Anorexia,Transtorno da Compulsão Alimentar Periódica');
                
                $table->string('pergunta_2')->default('Com que frequência você apresenta sintomas?');
                $table->string('opcoes_2')->default('Nunca,Raramente,Às vezes,Frequentemente,Sempre');
                
                $table->string('pergunta_3')->default('Você está atualmente recebendo algum tipo de tratamento para sua saúde mental?');
                $table->string('opcoes_3')->default('Medicamentos,Terapia,Ambos,Nenhum');
                
                $table->string('pergunta_4')->default('Você acredita que seus hábitos alimentares influenciam seu humor e emoções?');
                $table->string('opcoes_4')->default('Sim,Não,Não sei');
                
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saude_mental_perguntas');
    }
};
