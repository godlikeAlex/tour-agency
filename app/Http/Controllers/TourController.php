<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Header;

use App\Tour;
use App\City;

use App\TourCategory;

use App\SEO;

use Artesaos\SEOTools\Facades\SEOMeta;

class TourController extends Controller
{
    public function index($lang) {
        $slider = Tour::where(['lang' => $lang])->orderBy('created_at','desc')->take(5)->get();
        $categories = TourCategory::where('lang', $lang)->get();
        return view('tours', compact('slider', 'categories'));
    }

    public function show($lang, $tourname) {
        $tour = Tour::where('slug', $tourname)->firstOrFail();
        SEO::defaultSeoParams($tour->name, $tour->keywords, $tour->seo_desc);


        return view('tour-place', compact('tour'));
    }

    public function showCategory($lang, $category) {
        $tours = Tour::where(['lang' => $lang, 'category' => $category])->orderBy('created_at','desc')->paginate(6);
        $category = TourCategory::where('slug', $category)->firstOrFail();
        SEO::defaultSeoParams($category->name, $category->keywords, $category->seo_desc);
        return view('tour-category', compact('tours', 'category'));
    }
}
