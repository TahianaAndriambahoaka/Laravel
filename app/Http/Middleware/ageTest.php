<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ageTest
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
        // echo "test of middleware";
        return $next($request);
    }
}
