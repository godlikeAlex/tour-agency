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
        $cities =  City::all();
        $cityContent   =  CityItem::take(6)->get();
        $peoples       = People::take(6)->get();
        $articles      = Blog::take(6)->get();
        return view('welcome', compact('cities', 'cityContent', 'peoples', 'articles'));
    }
}
