<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaudeMentalPergunta extends Model
{
    use HasFactory;
    protected $table = 'saude_mental_perguntas';
    protected $fillable = ['pergunta'];

    public function respostas()
    {
        return $this->hasMany(SaudeMentalResposta::class, 'pergunta_id');
    }
}

class SaudeMentalResposta extends Model
{
    use HasFactory;
    protected $table = 'saude_mental_respostas';
    protected $fillable = ['pergunta_id', 'resposta'];

    public function pergunta()
    {
        return $this->belongsTo(SaudeMentalPergunta::class, 'pergunta_id');
    }
}

// Model para Estilo de Vida
class EstiloVidaPergunta extends Model
{
    use HasFactory;
    protected $table = 'estilo_vida_perguntas';
    protected $fillable = ['pergunta'];

    public function respostas()
    {
        return $this->hasMany(EstiloVidaResposta::class, 'pergunta_id');
    }
}

class EstiloVidaResposta extends Model
{
    use HasFactory;
    protected $table = 'estilo_vida_respostas';
    protected $fillable = ['pergunta_id', 'resposta'];

    public function pergunta()
    {
        return $this->belongsTo(EstiloVidaPergunta::class, 'pergunta_id');
    }
}

// Repetindo o padrão para os outros surveys
class UsabilidadePergunta extends Model
{
    use HasFactory;
    protected $table = 'usabilidade_perguntas';
    protected $fillable = ['pergunta'];

    public function respostas()
    {
        return $this->hasMany(UsabilidadeResposta::class, 'pergunta_id');
    }
}

class UsabilidadeResposta extends Model
{
    use HasFactory;
    protected $table = 'usabilidade_respostas';
    protected $fillable = ['pergunta_id', 'resposta'];

    public function pergunta()
    {
        return $this->belongsTo(UsabilidadePergunta::class, 'pergunta_id');
    }
}

class Recordatorio24 extends Model
{
    use HasFactory;
    protected $table = 'recordatorio_24';
    protected $fillable = ['user_id', 'alimento_id', 'quantidade'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function alimento()
    {
        return $this->belongsTo(BaseDeAlimentos::class, 'alimento_id');
    }
}

class BaseDeAlimentos extends Model
{
    use HasFactory;
    protected $table = 'base_de_alimentos';
    protected $fillable = ['nome', 'calorias'];
}

class RecomendacaoNutricional extends Model
{
    use HasFactory;
    protected $table = 'recomendacao_nutricional';
    protected $fillable = ['user_id', 'recomendacao'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
