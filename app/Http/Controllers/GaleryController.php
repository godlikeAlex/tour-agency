<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Galery;

use App\Header;

use App\City;
use App\SEO;

use App\GaleryCategory;

class GaleryController extends Controller
{
    public function home($lang) {
        $categories = GaleryCategory::where('lang', $lang)->get();
        return view('galery', compact('categories'));
    }

    public function show($lang, $century) {
        $images = Galery::where(['lang' => $lang,'category' => $century])->paginate(20);
        $century = GaleryCategory::where('slug', $century)->firstOrFail();
        SEO::defaultSeoParams($century->name, $century->keywords, $century->seo_desc);
        return view('show-galery', compact('century', 'images'));
    }
}
