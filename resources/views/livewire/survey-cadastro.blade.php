<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Complete seu Cadastro</h1>

    @if ($perguntaAtual)
        <div class="bg-white shadow-md rounded-md p-6 mb-4">
            <h2 class="text-lg font-semibold mb-2">{{ $perguntaAtual->pergunta }}</h2>

            @if ($perguntaAtual->tipo_resposta == 'texto' || $perguntaAtual->tipo_resposta == 'numero')
                <input type="{{ $perguntaAtual->tipo_resposta == 'numero' ? 'number' : 'text' }}"
                       wire:model="respostas.{{ $perguntaAtual->id }}"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Sua resposta">
            @elseif ($perguntaAtual->tipo_resposta == 'radio')
                <div class="flex items-center mb-2">
                    <input type="radio" id="sim" wire:model="respostas.{{ $perguntaAtual->id }}" value="sim" class="mr-2">
                    <label for="sim" class="text-gray-700">Sim</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" id="nao" wire:model="respostas.{{ $perguntaAtual->id }}" value="nao" class="mr-2">
                    <label for="nao" class="text-gray-700">Não</label>
                </div>
                <!-- Adicione mais opções de radio se precisar -->
            @endif
        </div>

        <div class="flex justify-between">
            @if ($perguntaAtualIndex > 0)
                <button wire:click="perguntaAnterior" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Anterior
                </button>
            @else
                <div></div> {{-- Espaço para alinhar o botão "Próximo" --}}
            @endif

            @if ($perguntaAtualIndex < count($perguntas) - 1)
                <button wire:click="proximaPergunta" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Próximo
                </button>
            @else
                <button wire:click="finalizarCadastro" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Finalizar Cadastro
                </button>
            @endif
        </div>
    @else
        <p class="text-green-500 font-bold">Cadastro Completo!</p>
        <p>Obrigado por completar o cadastro.</p>
        {{-- Aqui você pode adicionar uma mensagem de sucesso ou redirecionar --}}
    @endif
</div>