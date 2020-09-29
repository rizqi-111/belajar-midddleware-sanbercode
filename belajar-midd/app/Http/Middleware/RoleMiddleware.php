<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
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
        $role = Auth::user()->role_id;
        if($role == 2){ //super admin
            return $next($request);
        }
        else if($role == 1){ //admin
            if($request->path() != "route1"){
                return $next($request);
            }
            abort(403);
        }
        else if($role == 0){ //guest
            if($request->path() == "route3"){
                return $next($request);
            }
            abort(403);
        }
    }
}
