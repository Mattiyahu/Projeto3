<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimentacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'pergunta_1',
        'pergunta_1_cafe',
        'pergunta_1_lanche_manha',
        'pergunta_1_almoco',
        'pergunta_1_lanche_tarde',
        'pergunta_1_jantar',
        'pergunta_1_lanche_noite',
        'pergunta_2',
        'pergunta_2_dica',
        'pergunta_3',
        'opcoes_3',
        'pergunta_3_especifique',
        'pergunta_4',
        'opcoes_4',
        'pergunta_5',
        'opcoes_5',
        // Add other fields as necessary
    ];

    // Define relationships if needed
}
