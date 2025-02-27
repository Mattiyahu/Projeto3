<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usabilidade;

class UsabilidadeController extends Controller
{
    public function index()
    {
        // Logic to retrieve usability questions
        $questions = Usabilidade::all();
        return response()->json($questions);
    }

    public function store(Request $request)
    {
        // Logic to store a new usability response
        $request->validate([
            'pergunta_1' => 'required|string',
            'opcoes_1' => 'required|string',
        ]);

        $usabilidade = Usabilidade::create($request->all());
        return response()->json($usabilidade, 201);
    }

    // Additional methods for show, update, and delete can be added here
}
