<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\People;
use App\City;
use App\CityItem;
use App\Blog;

class MainPage extends Controller
{
    public function index() {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        // $cityContent   =  CityItem::where(['lang' => $lang])->orderBy('created_at','desc')->take(6)->get();
        // $peoples       = People::where(['lang' => $lang])->orderBy('created_at','desc')->take(6)->get();
        // $articles      = Blog::where(['lang' => $lang])->orderBy('created_at','desc')->take(6)->get();
        return view('welcome', compact('cities'));
    }
}
