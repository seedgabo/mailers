<?php

namespace App\Http\Middleware;

use Closure;

class api
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

        if ($request->isMethod('OPTIONS')) {
            return response('', 200);
        }
		
        return $next($request);
    }
}