<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\People;
use App\City;
use App\CityItem;
use App\Blog;
use App\Tour;

class MainPage extends Controller
{
    public function index() {
        $lang = app()->getLocale();
        $slider = Tour::where(['lang' => $lang])->orderBy('created_at','desc')->take(5)->get();
        $cities         = City::where('lang', $lang)->get();
        // $cityContent   =  CityItem::where(['lang' => $lang])->orderBy('created_at','desc')->take(6)->get();
        // $peoples       = People::where(['lang' => $lang])->orderBy('created_at','desc')->take(6)->get();
        $articles      = Blog::where(['lang' => $lang])->orderBy('created_at','desc')->take(4)->get();
        return view('welcome', compact('cities', 'articles', 'slider'));
    }
}
