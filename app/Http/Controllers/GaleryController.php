<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Galery;

use App\Header;

use App\City;

class GaleryController extends Controller
{
    public function create() {
        return view('admin.create-galery');
    }

    public function home() {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        return view('galery', compact('cities'));
    }

    public function show($century) {
        $lang = app()->getLocale();
        $cities = City::where('lang', $lang)->get();
        $images = Galery::where(['lang' => $lang,'category' => $century])->paginate(20);
        return view('show-galery', compact('century', 'images', 'cities'));
    }

    public function store() {
        $validData = $this->validRquest();
        $validData['slug'] = request()->title;
        $img = Galery::create($validData);
        $this->storeImage($img);
        dd(request() -> all());
    }

    private function validRquest() {
        $validateData = request() -> validate([
            'title' => 'required|min:4',
            'category' => 'required',
            'lang' => 'required',
            'desc' => 'required|min:10',
            'image' => 'required|image'
        ]);

        return $validateData;
    }

    private function storeImage($img) {
        if(request()->has('image'))
        {    
            $img->update([
                'image' => request()->image->store('galery', 'public'),
            ]);
        }
    }
}
