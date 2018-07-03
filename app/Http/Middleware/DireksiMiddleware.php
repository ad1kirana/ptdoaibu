<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class DireksiMiddleware
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
       foreach (Auth::user()->role as $role) {
        $cek = $role->pivot;
          $cekrole = $cek->role_id;

      
        if ($cekrole == '4')  {
               return $next($request);
        }
             
       }

       return redirect('');
       
    }
}
