<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recordatorio24 extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'data_registro',
        'refeicao',
        'horario',
        'local',
        'alimento_id',
        'preparacao',
        'alimento_descricao',
        'quantidade',
        'medida_caseira',
        'calorias',
        'proteinas',
        'carboidratos',
        'gorduras',
        'fibras',
        // Add other fields as necessary
    ];

    // Define relationships if needed
}
