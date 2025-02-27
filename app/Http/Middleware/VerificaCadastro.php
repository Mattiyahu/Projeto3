<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificaCadastro
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && !Auth::user()->cadastro_completo) {
            return redirect()->route('cadastro');
        }

        return $next($request);
    }
}
