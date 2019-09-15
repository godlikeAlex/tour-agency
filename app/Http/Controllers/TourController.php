<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Header;

use App\Tour;
use App\City;

class TourController extends Controller
{
    public function index() {
        $lang = app()->getLocale();
        $cities         = City::where(['lang'=>$lang])->get();
        $ecoTours = Tour::where(['lang' => $lang, 'category' => 'eco-tours'])->take(6)->get();
        $historyTours = Tour::where(['lang' => $lang, 'category'=> 'history-tours'])->take(6)->get();
        $buisnesTours = Tour::where(['lang' => $lang, 'category'=> 'buisnes-tours'])->take(6)->get();
        $economTours = Tour::where(['lang' => $lang, 'category'=> 'econom-tours'])->take(6)->get();

        $shortTours = Tour::where(['lang' => $lang, 'category'=> 'short-tours'])->take(6)->get();
        $groupTours = Tour::where(['lang' => $lang, 'category'=> 'group-tours'])->take(6)->get();
        $individualTours = Tour::where(['lang' => $lang, 'category'=> 'individual-tours'])->take(6)->get();
        $exclusiveTours = Tour::where(['lang' => $lang, 'category'=> 'exclusive-tours'])->take(6)->get();
        $classicTours = Tour::where(['lang' => $lang, 'category'=> 'classic-tours'])->take(6)->get();
        $komboAsiaTours = Tour::where(['lang' => $lang, 'category'=> 'kombo-asia-tours'])->take(6)->get();
        $komboUzKzTours = Tour::where(['lang' => $lang, 'category'=> 'kombo-uz-kz-tours'])->take(6)->get();
        $komboUzKgTours = Tour::where(['lang' => $lang, 'category'=> 'kombo-uz-kg-tours'])->take(6)->get();
        $komboUzTmTours = Tour::where(['lang' => $lang, 'category'=> 'kombo-uz-tm-tours'])->take(6)->get();
        $komboUzTjTours = Tour::where(['lang' => $lang, 'category'=> 'kombo-uz-tj-tours'])->take(6)->get();
        $excursionCity = Tour::where(['lang' => $lang, 'category'=> 'excursion-сity'])->take(6)->get();
        $pilgrimTours = Tour::where(['lang' => $lang, 'category'=> 'pilgrim-tours'])->take(6)->get();
        $cyclingTours = Tour::where(['lang' => $lang, 'category'=> 'cycling-tours'])->take(6)->get();

        return view('tours', compact(
            'ecoTours', 'historyTours', 'buisnesTours', 'economTours', 'cities', 'shortTours', 
            'groupTours', 'individualTours', 'exclusiveTours', 'classicTours', 'komboAsiaTours',
            'komboUzKzTours', 'komboUzKgTours', 'komboUzTmTours', 'komboUzTjTours', 'excursionCity',
            'pilgrimTours', 'cyclingTours'
        ));
    }

    public function show($tourname) {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $tour = Tour::where('slug', $tourname)->firstOrFail();
        return view('tour-place', compact('tour', 'cities'));
    }

    public function showCategory($category) {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $tours = Tour::where(['lang' => $lang, 'category' => $category])->paginate(6);
        return view('tour-category', compact('tours', 'cities'));
    }
}
