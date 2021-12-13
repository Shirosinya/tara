<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $roles)
    {
    
        $user = \Illuminate\Support\Facades\Auth::user();
    
        if($user->role_id =='1'){
            return $next($request);
        }

        if($user->role_id =='2'){
            return $next($request);
        }
    
            // Check if user has the role This check will depend on how your roles are set up
        //     if($user->hasRole($role)){
        //         return $next($request);
        // }
        return redirect('login');
    }
}
