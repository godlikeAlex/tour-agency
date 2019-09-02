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
        $geo  = Uzbekistan::where([
            'category' => 'geo',
            'lang' => $lang
        ])->take(5)->get();
        $history  = Uzbekistan::where([
            'category' => 'history',
            'lang' => $lang
        ])->take(5)->get();
        $peoplesm  = Uzbekistan::where([
            'category' => 'peoples',
            'lang' => $lang
        ])->take(5)->get();
        $fashion  = Uzbekistan::where([
            'category' => 'fashion',
            'lang' => $lang
        ])->take(5)->get();
        $painting  = Uzbekistan::where([
            'category' => 'painting',
            'lang' => $lang
        ])->take(5)->get();
        $culture  = Uzbekistan::where([
            'category' => 'culture',
            'lang' => $lang
        ])->take(5)->get();
        $kitchen  = Uzbekistan::where([
            'category' => 'kitchen',
            'lang' => $lang
        ])->take(5)->get();
        $tradition  = Uzbekistan::where([
            'category' => 'tradition',
            'lang' => $lang
        ])->take(5)->get();
        $art  = Uzbekistan::where([
            'category' => 'art',
            'lang' => $lang
        ])->take(5)->get();
        return view('uzbekistan', compact('cities', 'geo', 'history', 'peoplesm', 'art', 'fashion', 'painting', 'culture', 'kitchen', 'tradition'));
    }

    public function category($category) {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $items  = Uzbekistan::where([
            'category' => $category,
            'lang' => $lang
        ])->get();
        $geo  = Uzbekistan::where([
            'category' => 'geo',
            'lang' => $lang
        ])->take(5)->get();
        $history  = Uzbekistan::where([
            'category' => 'history',
            'lang' => $lang
        ])->take(5)->get();
        $peoplesm  = Uzbekistan::where([
            'category' => 'peoples',
            'lang' => $lang
        ])->take(5)->get();
        $fashion  = Uzbekistan::where([
            'category' => 'fashion',
            'lang' => $lang
        ])->take(5)->get();
        $painting  = Uzbekistan::where([
            'category' => 'painting',
            'lang' => $lang
        ])->take(5)->get();
        $culture  = Uzbekistan::where([
            'category' => 'culture',
            'lang' => $lang
        ])->take(5)->get();
        $kitchen  = Uzbekistan::where([
            'category' => 'kitchen',
            'lang' => $lang
        ])->take(5)->get();
        $tradition  = Uzbekistan::where([
            'category' => 'tradition',
            'lang' => $lang
        ])->take(5)->get();
        $art  = Uzbekistan::where([
            'category' => 'art',
            'lang' => $lang
        ])->take(5)->get();
        return view('uzbekistan-category', compact('cities', 'items', 'geo', 'history', 'peoplesm', 'art', 'fashion', 'painting', 'culture', 'kitchen', 'tradition'));
    }

    public function show($category ,$uzb) {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $item  = Uzbekistan::where('slug', $uzb)->firstOrFail();
        $geo  = Uzbekistan::where([
            'category' => 'geo',
            'lang' => $lang
        ])->take(5)->get();
        $history  = Uzbekistan::where([
            'category' => 'history',
            'lang' => $lang
        ])->take(5)->get();
        $peoplesm  = Uzbekistan::where([
            'category' => 'peoples',
            'lang' => $lang
        ])->take(5)->get();
        $fashion  = Uzbekistan::where([
            'category' => 'fashion',
            'lang' => $lang
        ])->take(5)->get();
        $painting  = Uzbekistan::where([
            'category' => 'painting',
            'lang' => $lang
        ])->take(5)->get();
        $culture  = Uzbekistan::where([
            'category' => 'culture',
            'lang' => $lang
        ])->take(5)->get();
        $kitchen  = Uzbekistan::where([
            'category' => 'kitchen',
            'lang' => $lang
        ])->take(5)->get();
        $tradition  = Uzbekistan::where([
            'category' => 'tradition',
            'lang' => $lang
        ])->take(5)->get();
        $art  = Uzbekistan::where([
            'category' => 'art',
            'lang' => $lang
        ])->take(5)->get();
        return view('uzbekistan-show', compact('cities', 'item', 'geo', 'history',  'peoplesm', 'art', 'fashion', 'painting', 'culture', 'kitchen', 'tradition'));
    }
}
