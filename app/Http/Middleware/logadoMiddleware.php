<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class logadoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!isset($_SESSION["permitido"])){
            return redirect('/');
        }
        return $next($request);
    }
}
