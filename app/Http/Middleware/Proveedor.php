<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class Proveedor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->Rol_Id){
            case ('1'):
                return redirect('Admin');
            break;
            case ('2'):
                return $next($request);  
            break;
            case ('3'):
                return redirect('User'); 
            break;
        }
    }
}
