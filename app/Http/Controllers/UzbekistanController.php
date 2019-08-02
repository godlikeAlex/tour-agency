<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Header;
use App\City;
use App\Uzbekistan;


class UzbekistanController extends Controller
{
    public function index() {
        $header = Header::dataHeader();
        $cities         = City::all();
        return view('uzbekistan', compact('cities'));
    }

    public function category($category) {
        $header = Header::dataHeader();
        $cities         = City::all();
        $items  = Uzbekistan::where('category', $category)->get();
        return view('uzbekistan-category', compact('cities', 'items'));
    }

    public function show($category ,$uzb) {
        $header = Header::dataHeader();
        $cities         = City::all();
        $item  = Uzbekistan::where('slug', $uzb)->firstOrFail();
        return view('uzbekistan-show', compact('cities', 'item'));
    }
}
