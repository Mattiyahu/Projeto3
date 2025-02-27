24_table.php
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
        Schema::create('recordatorio_24', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('data_registro');
            
            // Refeição
            $table->enum('refeicao', ['Café da manhã', 'Lanche da manhã', 'Almoço', 'Lanche da tarde', 'Jantar', 'Ceia']);
            $table->time('horario');
            $table->string('local');
            
            // Detalhes do alimento
            $table->foreignId('alimento_id')->nullable()->constrained('base_de_alimentos')->nullOnDelete();
            $table->string('preparacao')->nullable();
            $table->string('alimento_descricao')->nullable(); // caso não esteja na base de alimentos
            $table->decimal('quantidade', 8, 2);
            $table->string('medida_caseira');
            
            // Campos adicionais para análise
            $table->decimal('calorias', 8, 2)->nullable();
            $table->decimal('proteinas', 8, 2)->nullable();
            $table->decimal('carboidratos', 8, 2)->nullable();
            $table->decimal('gorduras', 8, 2)->nullable();
            $table->decimal('fibras', 8, 2)->nullable();
            
            $table->timestamps();
            
            // Índices para melhorar performance de consultas
            $table->index(['user_id', 'data_registro']);
            $table->index('refeicao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recordatorio_24');
    }
};