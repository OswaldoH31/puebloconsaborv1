<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Usuario
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
                return redirect('Proveedor');  
            break;
            case ('3'):
                return $next($request);
                
            break;
        }
    }
}
