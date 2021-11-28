<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
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
       
        if(Auth::check()){
            if(isset(user()->people)){
                if (!user()->people->is_active) {
                    return redirect('profile/activation');
                } else {
                    return $next($request);
                }
            }
            else {
                abort(403);
            }
        }else{
            return $next($request);
        }
    }
}
