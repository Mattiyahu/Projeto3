<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaudeMental;

class SaudeMentalController extends Controller
{
    public function index()
    {
        // Logic to retrieve mental health questions
        $questions = SaudeMental::all();
        return response()->json($questions);
    }

    public function store(Request $request)
    {
        // Logic to store a new mental health response
        $request->validate([
            'pergunta_1' => 'required|string',
            'opcoes_1' => 'required|string',
        ]);

        $saudeMental = SaudeMental::create($request->all());
        return response()->json($saudeMental, 201);
    }

    // Additional methods for show, update, and delete can be added here
}
