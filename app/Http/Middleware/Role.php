<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        $roles = explode('|', $roles);
        if (Auth::check()){
            if (in_array(Auth::user()->nivel, $roles)) {
                return $next($request);
            }

            if (Auth::user()->nivel == 'empleado') {
                return redirect('/panel');
            }
        }

        return redirect('/');
    }
}
