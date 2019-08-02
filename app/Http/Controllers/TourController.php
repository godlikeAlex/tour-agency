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
        $ecoTours = Tour::where('category', 'eco_tours')->take(5)->get();
        $historyTours = Tour::where('category', 'history_tours')->take(5)->get();
        $buisnesTours = Tour::where('category', 'buisnes_tours')->take(5)->get();
        $economTours = Tour::where('category', 'econom_tours')->take(5)->get();
        return view('tours', compact('ecoTours', 'historyTours', 'buisnesTours', 'economTours', 'cities'));
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
