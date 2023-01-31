<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ClearanceMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {        

        if ($request->is('/*')) {
            dd(user()->person->active());
            if (!user()->person->active()) {
                abort('401');
            } else {
                return $next($request);
            }
        }


        if ($request->isMethod('Delete')) {
            if (!user()->hasPermissionTo('Delete*')) {
                abort('401');
            } else {
                return $next($request);
            }
        }
        

        return $next($request);
    }
}