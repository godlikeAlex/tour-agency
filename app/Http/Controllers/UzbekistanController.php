<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Header;
use App\Uzbekistan;


class UzbekistanController extends Controller
{
    public function index() {
        $header = Header::dataHeader();
        return view('uzbekistan', compact('header'));
    }

    public function category($category) {
        $header = Header::dataHeader();
        $items  = Uzbekistan::where('category', $category)->get();
        return view('uzbekistan-category', compact('header', 'items'));
    }

    public function show($uzb) {
        $header = Header::dataHeader();
        $item  = Uzbekistan::where('slug', $uzb)->firstOrFail();
        return view('uzbekistan-show', compact('header', 'item'));
    }
}
