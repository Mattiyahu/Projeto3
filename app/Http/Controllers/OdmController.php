<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Odm;

class OdmController extends Controller
{
    public function index()
    {
        // Logic to retrieve ODM-related questions
        $questions = Odm::all();
        return response()->json($questions);
    }

    public function store(Request $request)
    {
        // Logic to store a new ODM response
        $request->validate([
            'pergunta_1' => 'required|string',
            'opcoes_1' => 'required|string',
        ]);

        $odm = Odm::create($request->all());
        return response()->json($odm, 201);
    }

    // Additional methods for show, update, and delete can be added here
}
