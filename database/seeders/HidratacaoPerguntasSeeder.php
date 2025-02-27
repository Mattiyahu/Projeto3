<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HidratacaoPerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('parte2_hidratacao_perguntas')->insert([
            'pergunta_1' => 'Quantos copos de água você consumiu hoje?',
            'opcoes_1' => null, // Campo aberto para descrição da quantidade
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('parte2_hidratacao_perguntas')->insert([
            'pergunta_2' => 'Você consumiu outras bebidas, como suco, café, chá ou refrigerante hoje?',
            'opcoes_2' => 'Sim,Não',
            'pergunta_2_especifique' => 'Se sim, qual e em que quantidade?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
