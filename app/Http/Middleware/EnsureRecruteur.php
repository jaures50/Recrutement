<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureRecruteur
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && (auth()->user()->role === 'moderator' || auth()->user()->role === 'admin')) {
            return $next($request);
        }
        
       

        return redirect('/')->with('error', 'Accès non autorisé.');
    }
}
