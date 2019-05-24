<?php

namespace App\Http\Middleware;

use Closure;

class Checkpoint
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->is('Checkpoint')) return $next($request); 
        if (!user()->people->is_active) {
            return redirect('Checkpoint');
        } else {
            return $next($request);
        }
    }
}
