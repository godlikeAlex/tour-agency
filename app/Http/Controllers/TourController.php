<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Header;

use App\Tour;
use App\City;

class TourController extends Controller
{
    public function index() {
        $cities         = City::all();
        $ecoTours = Tour::where('category', 'eco-tours')->take(6)->get();
        $historyTours = Tour::where('category', 'history-tours')->take(6)->get();
        $buisnesTours = Tour::where('category', 'buisnes-tours')->take(6)->get();
        $economTours = Tour::where('category', 'econom-tours')->take(6)->get();

        $shortTours = Tour::where('category', 'short-tours')->take(6)->get();
        $groupTours = Tour::where('category', 'group-tours')->take(6)->get();
        $individualTours = Tour::where('category', 'individual-tours')->take(6)->get();
        $exclusiveTours = Tour::where('category', 'exclusive-tours')->take(6)->get();
        $classicTours = Tour::where('category', 'classic-tours')->take(6)->get();
        $komboAsiaTours = Tour::where('category', 'kombo-asia-tours')->take(6)->get();
        $komboUzKzTours = Tour::where('category', 'kombo-uz-kz-tours')->take(6)->get();
        $komboUzKgTours = Tour::where('category', 'kombo-uz-kg-tours')->take(6)->get();
        $komboUzTmTours = Tour::where('category', 'kombo-uz-tm-tours')->take(6)->get();
        $komboUzTjTours = Tour::where('category', 'kombo-uz-tj-tours')->take(6)->get();
        $excursionCity = Tour::where('category', 'excursion-сity')->take(6)->get();
        $pilgrimTours = Tour::where('category', 'pilgrim-tours')->take(6)->get();
        $cyclingTours = Tour::where('category', 'cycling-tours')->take(6)->get();

        return view('tours', compact(
            'ecoTours', 'historyTours', 'buisnesTours', 'economTours', 'cities', 'shortTours', 
            'groupTours', 'individualTours', 'exclusiveTours', 'classicTours', 'komboAsiaTours',
            'komboUzKzTours', 'komboUzKgTours', 'komboUzTmTours', 'komboUzTjTours', 'excursionCity',
            'pilgrimTours', 'cyclingTours'
        ));
    }

    public function show($tourname) {
        $cities         = City::all();
        $tour = Tour::where('slug', $tourname)->firstOrFail();
        return view('tour-place', compact('tour', 'cities'));
    }

    public function showCategory($category) {
        $cities         = City::all();
        $tours = Tour::where('category', $category)->get();
        return view('tour-category', compact('tours', 'cities'));
    }
}
