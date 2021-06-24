<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class admin_md
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
        if(auth()->user() && auth()->user()->role == 1){

          return redirect('admin.admin');
        }
        else{
          return $next($request);
        }
    }
}
