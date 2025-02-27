<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CadastroController extends Controller
{
    public function index()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $user->update(['cadastro_completo' => true]);

        return redirect()->route('dashboard');
    }
}
