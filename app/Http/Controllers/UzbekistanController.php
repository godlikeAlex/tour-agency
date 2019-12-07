<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Header;
use App\City;
use App\Uzbekistan;
use App\UzbekistanCategory;
use App\SEO;


class UzbekistanController extends Controller
{
    public function index() {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $geo  = UzbekistanCategory::where([
            'category' => 'geo',
            'lang' => $lang
        ])->take(5)->get();
        $history  = UzbekistanCategory::where([
            'category' => 'history',
            'lang' => $lang
        ])->take(5)->get();
        $peoplesm  = UzbekistanCategory::where([
            'category' => 'peoples',
            'lang' => $lang
        ])->take(5)->get();
        $fashion  = UzbekistanCategory::where([
            'category' => 'fashion',
            'lang' => $lang
        ])->take(5)->get();
        $painting  = UzbekistanCategory::where([
            'category' => 'painting',
            'lang' => $lang
        ])->take(5)->get();
        $culture  = UzbekistanCategory::where([
            'category' => 'culture',
            'lang' => $lang
        ])->take(5)->get();
        $kitchen  = UzbekistanCategory::where([
            'category' => 'kitchen',
            'lang' => $lang
        ])->take(5)->get();
        $tradition  = UzbekistanCategory::where([
            'category' => 'tradition',
            'lang' => $lang
        ])->take(5)->get();
        $art  = UzbekistanCategory::where([
            'category' => 'art',
            'lang' => $lang
        ])->take(5)->get();
        return view('uzbekistan', compact('cities', 'geo', 'history', 'peoplesm', 'art', 'fashion', 'painting', 'culture', 'kitchen', 'tradition'));
    }

    public function category($lang, $category) {
        $cities         = City::where('lang', $lang)->get();
        $items  = UzbekistanCategory::where([
            'category' => $category,
            'lang' => $lang
        ])->get();
        $geo  = UzbekistanCategory::where([
            'category' => 'geo',
            'lang' => $lang
        ])->take(5)->get();
        $history  = UzbekistanCategory::where([
            'category' => 'history',
            'lang' => $lang
        ])->take(5)->get();
        $peoplesm  = UzbekistanCategory::where([
            'category' => 'peoples',
            'lang' => $lang
        ])->take(5)->get();
        $fashion  = UzbekistanCategory::where([
            'category' => 'fashion',
            'lang' => $lang
        ])->take(5)->get();
        $painting  = UzbekistanCategory::where([
            'category' => 'painting',
            'lang' => $lang
        ])->take(5)->get();
        $culture  = UzbekistanCategory::where([
            'category' => 'culture',
            'lang' => $lang
        ])->take(5)->get();
        $kitchen  = UzbekistanCategory::where([
            'category' => 'kitchen',
            'lang' => $lang
        ])->take(5)->get();
        $tradition  = UzbekistanCategory::where([
            'category' => 'tradition',
            'lang' => $lang
        ])->take(5)->get();
        $art  = UzbekistanCategory::where([
            'category' => 'art',
            'lang' => $lang
        ])->take(5)->get();
        return view('uzbekistan-category', compact('cities', 'category', 'items', 'geo', 'history', 'peoplesm', 'art', 'fashion', 'painting', 'culture', 'kitchen', 'tradition'));
    }

    public function sub($lang, $category, $subcategory) {
        $cities         = City::where('lang', $lang)->get();
        $items  = Uzbekistan::where([
            'category' => $subcategory,
            'lang' => $lang
        ])->get();
        $categorySub = UzbekistanCategory::where([
            'slug' => $subcategory
        ])->firstOrFail();
        SEO::defaultSeoParams($categorySub->name, $categorySub->keywords, $categorySub->seo_desc);
        $geo  = UzbekistanCategory::where([
            'category' => 'geo',
            'lang' => $lang
        ])->take(5)->get();
        $history  = UzbekistanCategory::where([
            'category' => 'history',
            'lang' => $lang
        ])->take(5)->get();
        $peoplesm  = UzbekistanCategory::where([
            'category' => 'peoples',
            'lang' => $lang
        ])->take(5)->get();
        $fashion  = UzbekistanCategory::where([
            'category' => 'fashion',
            'lang' => $lang
        ])->take(5)->get();
        $painting  = UzbekistanCategory::where([
            'category' => 'painting',
            'lang' => $lang
        ])->take(5)->get();
        $culture  = UzbekistanCategory::where([
            'category' => 'culture',
            'lang' => $lang
        ])->take(5)->get();
        $kitchen  = UzbekistanCategory::where([
            'category' => 'kitchen',
            'lang' => $lang
        ])->take(5)->get();
        $tradition  = UzbekistanCategory::where([
            'category' => 'tradition',
            'lang' => $lang
        ])->take(5)->get();
        $art  = UzbekistanCategory::where([
            'category' => 'art',
            'lang' => $lang
        ])->take(5)->get();
        return view('uzbekistan-category', compact('cities', 'categorySub', 'category', 'items', 'geo', 'history', 'peoplesm', 'art', 'fashion', 'painting', 'culture', 'kitchen', 'tradition'));
    }

    public function show($lang, $category, $subcategory, $uzb) {
        $cities         = City::where('lang', $lang)->get();
        $subcategory = UzbekistanCategory::where('slug', $subcategory)->firstOrFail();
        $item  = Uzbekistan::where('slug', $uzb)->firstOrFail();
        $count = Uzbekistan::where('lang', $lang)->get()->count() - 1;
        SEO::defaultSeoParams($item->name, $item->keywords, $item->seo_desc, $item->image);
        if($count >= 4) {
            $randomFromCategory = Uzbekistan::where('slug', '!=', $uzb)->where('lang', $lang)->get()->random(3);
        } else {
            $randomFromCategory = Uzbekistan::where('slug', '!=', $uzb)->where('lang', $lang)->get()->random($count);
        }
  
        $geo  = UzbekistanCategory::where([
            'category' => 'geo',
            'lang' => $lang
        ])->take(5)->get();
        $history  = UzbekistanCategory::where([
            'category' => 'history',
            'lang' => $lang
        ])->take(5)->get();
        $peoplesm  = UzbekistanCategory::where([
            'category' => 'peoples',
            'lang' => $lang
        ])->take(5)->get();
        $fashion  = UzbekistanCategory::where([
            'category' => 'fashion',
            'lang' => $lang
        ])->take(5)->get();
        $painting  = UzbekistanCategory::where([
            'category' => 'painting',
            'lang' => $lang
        ])->take(5)->get();
        $culture  = UzbekistanCategory::where([
            'category' => 'culture',
            'lang' => $lang
        ])->take(5)->get();
        $kitchen  = UzbekistanCategory::where([
            'category' => 'kitchen',
            'lang' => $lang
        ])->take(5)->get();
        $tradition  = UzbekistanCategory::where([
            'category' => 'tradition',
            'lang' => $lang
        ])->take(5)->get();
        $art  = UzbekistanCategory::where([
            'category' => 'art',
            'lang' => $lang
        ])->take(5)->get();
        return view('uzbekistan-show', compact('randomFromCategory', 'subcategory', 'category', 'cities', 'item', 'geo', 'history',  'peoplesm', 'art', 'fashion', 'painting', 'culture', 'kitchen', 'tradition'));
    }
}
