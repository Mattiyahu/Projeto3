<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlimentacaoPerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('parte2_alimentacao_perguntas')->insert([
            'pergunta_1' => 'O que você comeu hoje?',
            'pergunta_1_cafe' => 'Café da manhã',
            'pergunta_1_lanche_manha' => 'Lanche da manhã',
            'pergunta_1_almoco' => 'Almoço',
            'pergunta_1_lanche_tarde' => 'Lanche da tarde',
            'pergunta_1_jantar' => 'Jantar',
            'pergunta_1_lanche_noite' => 'Lanche da noite',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('parte2_alimentacao_perguntas')->insert([
            'pergunta_2' => 'Qual a quantidade que você comeu?',
            'pergunta_2_dica' => 'Sugestão: utilize medidas caseiras como colheres, xícaras, unidades, etc.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('parte2_alimentacao_perguntas')->insert([
            'pergunta_3' => 'Qual o seu sentimento durante a refeição?',
            'opcoes_3' => 'Calmo,Ansioso,Triste,Irritado,Outro',
            'pergunta_3_especifique' => 'Se outro, especifique:',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('parte2_alimentacao_perguntas')->insert([
            'pergunta_4' => 'Você sentiu que estava comendo por fome ou por questões emocionais?',
            'opcoes_4' => 'Fome física,Fome emocional',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('parte2_alimentacao_perguntas')->insert([
            'pergunta_5' => 'Como você se sentiu após sua refeição?',
            'opcoes_5' => 'Satisfeito,Culpado,Indiferente,Energizado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
