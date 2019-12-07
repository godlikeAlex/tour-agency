<?php

namespace App\Http\Middleware;

use Closure;
use App\TourCategory;
use App\City;
use App\GaleryCategory;
use ipinfo\ipinfo\IPinfo;
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
        $client = new IPinfo();
        $ip_address = $request->ip();
        $details = $client->getDetails($ip_address);
        if($ip_address === '127.0.0.1') {
            $country = 'RU';
        } else {
            $country = $details->country;
        }
        $data = [
            'UZ' => [
                'phone' => '+998 91 526 14 38',
                'email' => 'info@uzbeknow.com',
                'address' => 'Street Gagarina'
            ],
            'RU' => [
                'phone' => '+74957556983',
                'email' => 'info@uzbeknow.com',
                'address' => 'Street Nemcov, Moscow'
            ]
        ];
        $key = array_key_exists($country, $data) ? $country : 'UZ';
        view()->share('data_for_client',$data[$key]); 
        view()->share('tour_categories', TourCategory::where('lang', $lang)->get());  
        view()->share('cities', City::where('lang', $lang)->get());        
        view()->share('gallery_categories', GaleryCategory::where('lang', $lang)->get());        
        return $next($request);
    }
}
