<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Header;

use App\Tour;

class TourController extends Controller
{
    public function index() {
        $ecoTours = Tour::where('category', 'eco_tours')->take(5)->get();
        $historyTours = Tour::where('category', 'history_tours')->take(5)->get();
        $buisnesTours = Tour::where('category', 'buisnes_tours')->take(5)->get();
        $economTours = Tour::where('category', 'econom_tours')->take(5)->get();
        return view('tours', compact('ecoTours', 'historyTours', 'buisnesTours', 'economTours'));
    }

    public function show($tourname) {
        $tour = Tour::where('slug', $tourname)->firstOrFail();
        return view('tour-place', compact('tour'));
    }

    public function showCategory($category) {
        $tours = Tour::where('category', $category)->get();
        return view('tour-category', compact('tours'));
    }
}
