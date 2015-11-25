<?php

namespace App\Http\Middleware;

use Closure;

class FilterAge
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
        if ($request->input('age') < 20)
        {
            return view('noauth');
        }

        $respone= $next($request);

        return $respone;
    }
}
