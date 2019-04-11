<?php

namespace App\Http\Middleware;

use Closure;

class ApiHeaders
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
        if($request->segment(1) == 'api'){
            $request->headers->set('Accept', 'application/json');
            
            return $next($request)
                ->header('Access-Control-Allow-Origin', '*')
                ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
        }

        return $next($request);
    }
}
