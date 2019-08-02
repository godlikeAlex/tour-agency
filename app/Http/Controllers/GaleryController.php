<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Galery;

use App\Header;

use App\City;

class GaleryController extends Controller
{
    public function create() {
        $cities         = City::all();
        return view('admin.create-galery');
    }

    public function home() {
        $cities         = City::all();
        return view('galery', compact('cities'));
    }

    public function show($century) {
        $cities         = City::all();
        $images = Galery::where('category', $century)->get();
        return view('show-galery', compact('century', 'images', 'cities'));
    }

    public function store() {
        $img = Galery::create($this->validRquest());
        $this->storeImage($img);
        dd(request() -> all());
    }

    private function validRquest() {
        $validateData = request() -> validate([
            'title' => 'required|min:4',
            'category' => 'required',
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
