<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AccessAdmin
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
        if(Auth::user()->hasAnyPerans(['admin', 'user'])){
            return $next($request);
        }
        return redirect('home');
    }
}
