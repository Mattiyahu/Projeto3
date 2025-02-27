<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsabilidadePerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usabilidade_perguntas')->insert([
            'pergunta_1' => 'O que você espera de um aplicativo de saúde mental e alimentação?',
            'opcoes_1' => 'Monitoramento de refeições,Dicas de bem-estar,Acompanhamento com profissionais,Outros',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usabilidade_perguntas')->insert([
            'pergunta_2' => 'Você gostaria de receber notificações ou lembretes para cuidar de sua saúde mental e alimentação?',
            'opcoes_2' => 'Diariamente,Algumas vezes por semana,Apenas quando necessário',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
