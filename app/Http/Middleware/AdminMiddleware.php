<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminMiddleware
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
        // First letting the first user to be an admin by nature
        
        $user = User::all()->count();

        if (!($user == 1)) {
            // Auth::user()->hasPermissionTo('Administer roles & permissions')

            if (!(Auth::check() && $request->user()->hasRole('Admin'))){
                abort('401');
            }
        }
        return $next($request);
    }
}