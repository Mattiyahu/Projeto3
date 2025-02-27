<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaudeMentalPergunta;

class SaudeMentalController extends Controller
{
    public function index()
    {
        // Lógica para recuperar perguntas de saúde mental
        $questions = SaudeMentalPergunta::all();
        return response()->json($questions);
    }

    public function store(Request $request)
    {
        // Lógica para armazenar uma nova resposta de saúde mental
        $request->validate([
            'pergunta_1' => 'required|string',
            'opcoes_1' => 'required|string',
        ]);

        $saudeMentalPergunta = SaudeMentalPergunta::create($request->all());
        return response()->json($saudeMentalPergunta, 201);
    }

    // Métodos adicionais para show, update e delete podem ser adicionados aqui
}
