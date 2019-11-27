<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\People;
use App\City;
use App\CityItem;
use App\Blog;
use App\Tour;
use Artesaos\SEOTools\Facades\SEOMeta;

class MainPage extends Controller
{
    public function index() {
        $lang = app()->getLocale();
        $slider = Tour::where(['lang' => $lang])->orderBy('created_at','desc')->take(5)->get();
        // $cityContent   =  CityItem::where(['lang' => $lang])->orderBy('created_at','desc')->take(6)->get();
        // $peoples       = People::where(['lang' => $lang])->orderBy('created_at','desc')->take(6)->get();
        $articles      = Blog::where(['lang' => $lang])->orderBy('created_at','desc')->take(4)->get();
        return view('welcome', compact( 'articles', 'slider'));
    }
}
