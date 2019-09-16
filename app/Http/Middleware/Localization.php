<?php

namespace App\Http\Middleware;

use Closure;

class Localization
{
    public function handle($request, Closure $next)
    {
        \App::setlocale($request->language);
       return $next($request);
    }
}
