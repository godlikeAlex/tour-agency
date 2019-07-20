<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Header;

use App\Tour;

class TourController extends Controller
{
    public function index() {
        $header = Header::dataHeader();
        return view('tours', compact('header'));
    }

    public function show($tourname) {
        $tour = Tour::where('slug', $tourname)->firstOrFail();
        $header = Header::dataHeader();
        return view('tour-place', compact('header', 'tour'));
    }

    public function showCategory($category) {
        $tours = Tour::where('category', $category)->get();
        $header = Header::dataHeader();
        return view('tour-category', compact('header', 'tours'));
    }
}
