<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaudeMentalPerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('saude_mental_perguntas')->insert([
            'pergunta_1' => 'Você já foi diagnosticado(a) com algum transtorno mental? (Se sim, qual?)',
            'opcoes_1' => 'Depressão,Transtorno Bipolar,Transtorno de Ansiedade Generalizada,Síndrome do Pânico,Fobias,Transtorno do Espectro Autista,Déficit de Atenção e Hiperatividade,Bulimia,Anorexia,Transtorno da Compulsão Alimentar Periódica',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saude_mental_perguntas')->insert([
            'pergunta_2' => 'Com que frequência você apresenta sintomas?',
            'opcoes_2' => 'Nunca,Raramente,Às vezes,Frequentemente,Sempre',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saude_mental_perguntas')->insert([
            'pergunta_3' => 'Você está atualmente recebendo algum tipo de tratamento para sua saúde mental?',
            'opcoes_3' => 'Medicamentos,Terapia,Ambos,Nenhum',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saude_mental_perguntas')->insert([
            'pergunta_4' => 'Você acredita que seus hábitos alimentares influenciam seu humor e emoções?',
            'opcoes_4' => 'Sim,Não,Não sei',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
