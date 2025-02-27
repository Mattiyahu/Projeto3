<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hidratacao;

class HidratacaoController extends Controller
{
    public function index()
    {
        // Logic to retrieve hydration-related questions
        $questions = Hidratacao::all();
        return response()->json($questions);
    }

    public function store(Request $request)
    {
        // Logic to store a new hydration response
        $request->validate([
            'pergunta_1' => 'required|string',
            'opcoes_1' => 'required|string',
        ]);

        $hidratacao = Hidratacao::create($request->all());
        return response()->json($hidratacao, 201);
    }

    // Additional methods for show, update, and delete can be added here
}
