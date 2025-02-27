<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SaudeMentalPergunta; // Importe o model SaudeMentalPergunta

class SurveyCadastro extends Component
{
    public $perguntas;
    public $perguntaAtualIndex = 0;
    public $respostas = [];

    public function mount()
    {
        // Busca todas as perguntas da tabela saude_mental_perguntas
        $this->perguntas = SaudeMentalPergunta::all();
        
        // Inicializa o array de respostas com null para cada pergunta
        foreach ($this->perguntas as $pergunta) {
            $this->respostas[$pergunta->id] = null;
        }
    }

    public function proximaPergunta()
    {
        $this->perguntaAtualIndex++;
    }

    public function perguntaAnterior()
    {
        $this->perguntaAtualIndex--;
        if ($this->perguntaAtualIndex < 0) {
            $this->perguntaAtualIndex = 0; // Impede índice negativo
        }
    }

    public function atualizarResposta($perguntaId, $resposta)
    {
        $this->respostas[$perguntaId] = $resposta;
    }

    public function finalizarCadastro()
    {
        // Aqui você pode processar as respostas ($this->respostas)
        // Ex: Salvar no banco de dados, enviar email, etc.
        dd($this->respostas); // Para debug, mostra as respostas
    }

    public function render()
    {
        $perguntaAtual = $this->perguntas[$this->perguntaAtualIndex] ?? null; // Pega a pergunta atual

        return view('livewire.survey-cadastro', ['perguntaAtual' => $perguntaAtual]);
    }
}