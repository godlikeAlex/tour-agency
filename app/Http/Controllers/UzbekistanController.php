<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Header;
use App\City;
use App\Uzbekistan;


class UzbekistanController extends Controller
{
    public function index() {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        return view('uzbekistan', compact('cities'));
    }

    public function category($category) {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $items  = Uzbekistan::where([
            'category' => $category,
            'lang' => $lang
        ])->get();
        return view('uzbekistan-category', compact('cities', 'items'));
    }

    public function show($category ,$uzb) {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $item  = Uzbekistan::where('slug', $uzb)->firstOrFail();
        return view('uzbekistan-show', compact('cities', 'item'));
    }
}
