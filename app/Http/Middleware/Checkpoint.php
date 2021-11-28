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
        if($request->is('profile/activation','person/*')) return $next($request);

        if (isset(user()->people) && !user()->people->is_active) {
            return redirect('profile/activation');
        } elseif (user()->people->is_active) {
            return $next($request);
        }
        else {
            abort(403);
        }
    }
}
