<?php

namespace App\Http\Middleware;

use Closure;

use Shinobi;

use Auth;

class RolesMiddleware
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

        $roles=array_slice(func_get_args(),2); // Con esto recibo todos los parametros enviado desde el middleware, luego hago un filtrado

        if(!Auth::check()) // VERIFICO QUE ESTE VALIDADO
        return redirect('login');

        foreach ($roles as $role) {
            # code...
         if(!Auth::user()->isRole($role))// SI NO TIENE EL ROLE DE ADMIN PASARA AL HOME-- Y COMO HOME ES MANEJADO POR EL HomeController DETERMINAR SI TIENE PERMISO O NO
        return redirect('/home');

        return $next($request);
        }
   
    }
}


 