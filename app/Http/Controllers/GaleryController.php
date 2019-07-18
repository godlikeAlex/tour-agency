<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Galery;

use App\Header;

class GaleryController extends Controller
{
    public function create() {
        return view('admin.create-galery');
    }

    public function home() {
        $header = Header::dataHeader();
        return view('galery', compact('header'));
    }

    public function show($century) {
        $header = Header::dataHeader();
        $images = Galery::where('category', $century)->get();
        return view('show-galery', compact('header', 'century', 'images'));
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
