<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Middleware\Checkpoint;

use Illuminate\Support\Facades\Auth;

class StudentMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {        
        if (user()->hasRole('Etudiant')) {
            return 'fdfdfddfd';
            abort('401');
            //

        }
//$this->middleware(Checkpoint::class);
        return $next($request);
    }
}