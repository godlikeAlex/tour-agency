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
        $slider = Tour::where(['lang' => $lang])->orderBy('created_at','desc')->take(5)->get();
        $cities         = City::where(['lang'=>$lang])->get();
        $ecoTours = Tour::where(['lang' => $lang, 'category' => 'eco-tours'])->orderBy('created_at','desc')->take(6)->get();
        $historyTours = Tour::where(['lang' => $lang, 'category'=> 'history-tours'])->orderBy('created_at','desc')->take(6)->get();
        $buisnesTours = Tour::where(['lang' => $lang, 'category'=> 'buisnes-tours'])->orderBy('created_at','desc')->take(6)->get();
        $economTours = Tour::where(['lang' => $lang, 'category'=> 'econom-tours'])->orderBy('created_at','desc')->take(6)->get();

        $shortTours = Tour::where(['lang' => $lang, 'category'=> 'short-tours'])->orderBy('created_at','desc')->take(6)->get();
        $groupTours = Tour::where(['lang' => $lang, 'category'=> 'group-tours'])->orderBy('created_at','desc')->take(6)->get();
        $individualTours = Tour::where(['lang' => $lang, 'category'=> 'individual-tours'])->orderBy('created_at','desc')->take(6)->get();
        $exclusiveTours = Tour::where(['lang' => $lang, 'category'=> 'exclusive-tours'])->orderBy('created_at','desc')->take(6)->get();
        $classicTours = Tour::where(['lang' => $lang, 'category'=> 'classic-tours'])->orderBy('created_at','desc')->take(6)->get();
        $komboAsiaTours = Tour::where(['lang' => $lang, 'category'=> 'kombo-asia-tours'])->orderBy('created_at','desc')->take(6)->get();
        $komboUzKzTours = Tour::where(['lang' => $lang, 'category'=> 'kombo-uz-kz-tours'])->orderBy('created_at','desc')->take(6)->get();
        $komboUzKgTours = Tour::where(['lang' => $lang, 'category'=> 'kombo-uz-kg-tours'])->orderBy('created_at','desc')->take(6)->get();
        $komboUzTmTours = Tour::where(['lang' => $lang, 'category'=> 'kombo-uz-tm-tours'])->orderBy('created_at','desc')->take(6)->get();
        $komboUzTjTours = Tour::where(['lang' => $lang, 'category'=> 'kombo-uz-tj-tours'])->orderBy('created_at','desc')->take(6)->get();
        $excursionCity = Tour::where(['lang' => $lang, 'category'=> 'excursion-сity'])->orderBy('created_at','desc')->take(6)->get();
        $pilgrimTours = Tour::where(['lang' => $lang, 'category'=> 'pilgrim-tours'])->orderBy('created_at','desc')->take(6)->get();
        $cyclingTours = Tour::where(['lang' => $lang, 'category'=> 'cycling-tours'])->orderBy('created_at','desc')->take(6)->get();

        return view('tours', compact(
            'ecoTours', 'historyTours', 'buisnesTours', 'economTours', 'cities', 'shortTours', 
            'groupTours', 'individualTours', 'exclusiveTours', 'classicTours', 'komboAsiaTours',
            'komboUzKzTours', 'komboUzKgTours', 'komboUzTmTours', 'komboUzTjTours', 'excursionCity',
            'pilgrimTours', 'cyclingTours', 'slider'
        ));
    }

    public function show($lang, $tourname) {
        $cities         = City::where('lang', $lang)->get();
        $tour = Tour::where('slug', $tourname)->firstOrFail();
        $count = Tour::where('lang', $lang)->count() - 1;
        if($count >= 4) {
            $randomFromCategory = Tour::where('slug', '!=', $tourname)->where('category', '=', $tour->category)->where('lang', $lang)->get()->random(3);
        } else {
            $randomFromCategory = Tour::where('slug', '!=', $tourname)->where('category', '=', $tour->category)->where('lang', $lang)->get()->random($count);
        }

        return view('tour-place', compact('tour', 'cities', 'randomFromCategory'));
    }

    public function showCategory($lang, $category) {
        $cities         = City::where('lang', $lang)->get();
        $tours = Tour::where(['lang' => $lang, 'category' => $category])->orderBy('created_at','desc')->paginate(6);
        return view('tour-category', compact('tours', 'cities', 'category'));
    }
}
