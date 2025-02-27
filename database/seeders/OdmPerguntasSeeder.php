<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OdmPerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('odm_perguntas')->insert([
            'pergunta_1' => 'O que você gostaria de melhorar em sua alimentação?',
            'opcoes_1' => null, // Pergunta aberta
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('odm_perguntas')->insert([
            'pergunta_2' => 'O que te motiva a cuidar melhor da sua saúde mental e física?',
            'opcoes_2' => null, // Pergunta aberta
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('odm_perguntas')->insert([
            'pergunta_3' => 'Quais são os maiores desafios que você enfrenta para manter uma alimentação saudável?',
            'opcoes_3' => 'Falta de tempo,Custo,Falta de motivação,Dificuldade de acesso a alimentos saudáveis,Outros',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
