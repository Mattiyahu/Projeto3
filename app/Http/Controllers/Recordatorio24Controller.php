<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recordatorio24;

class Recordatorio24Controller extends Controller
{
    public function index()
    {
        // Logic to retrieve 24h food record questions
        $records = Recordatorio24::all();
        return response()->json($records);
    }

    public function store(Request $request)
    {
        // Logic to store a new 24h food record response
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'data_registro' => 'required|date',
            'refeicao' => 'required|string',
            'horario' => 'required|time',
            'local' => 'required|string',
            'quantidade' => 'required|numeric',
            'medida_caseira' => 'required|string',
        ]);

        $recordatorio = Recordatorio24::create($request->all());
        return response()->json($recordatorio, 201);
    }

    // Additional methods for show, update, and delete can be added here
}
