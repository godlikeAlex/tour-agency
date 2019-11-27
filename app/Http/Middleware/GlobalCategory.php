<?php

namespace App\Http\Middleware;

use Closure;
use App\TourCategory;
use App\City;
use App\GaleryCategory;


class GlobalCategory
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
        $lang = $request->segment(1);
        view()->share('tour_categories', TourCategory::where('lang', $lang)->get());  
        view()->share('cities', City::where('lang', $lang)->get());        
        view()->share('gallery_categories', GaleryCategory::where('lang', $lang)->get());        
        return $next($request);
    }
}
