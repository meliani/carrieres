<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
        if(Auth::check()){

            if($request->is('profile/activation','person/*')) return $next($request);

            if($request->is('logout')){
                return $next($request);
            }

            if(isset(user()->person)){
                if (!user()->person->is_active) {
                    return redirect('profile/activation');
                } else {
                    return $next($request);
                }
            }
            else{
                abort(403);
            }
        }else{
            return $next($request);
        }
    }
}
