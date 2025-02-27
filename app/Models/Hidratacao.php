<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hidratacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'pergunta_1',
        'opcoes_1',
        'pergunta_2',
        'opcoes_2',
        'pergunta_2_especifique',
        // Add other fields as necessary
    ];

    // Define relationships if needed
}
