<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaudeMentalPergunta extends Model
{
    use HasFactory;

    protected $table = 'saude_mental_perguntas';

    // Adicione outras propriedades e métodos conforme necessário
    protected $fillable = ['pergunta_1', 'opcoes_1']; // Adicione os campos que podem ser preenchidos
}