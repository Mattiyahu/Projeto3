<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alimentacao;

class AlimentacaoController extends Controller
{
    public function index()
    {
        // Logic to retrieve food-related questions
        $questions = Alimentacao::all();
        return response()->json($questions);
    }

    public function store(Request $request)
    {
        // Logic to store a new food-related response
        $request->validate([
            'pergunta_1' => 'required|string',
            'opcoes_1' => 'required|string',
        ]);

        $alimentacao = Alimentacao::create($request->all());
        return response()->json($alimentacao, 201);
    }

    // Additional methods for show, update, and delete can be added here
}
