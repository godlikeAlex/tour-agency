<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Galery;
use App\GaleryCategory;

class GaleryAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        $categories = GaleryCategory::all();
        return view('admin.create-galery', compact('categories'));
    }

    public function categoryCreate() {
        return view('admin.create-category-galery');
    }

    public function categoryStore() {
        $validateData = request() -> validate([
            'name' => 'required',
            'lang' => 'required',
            'keywords' => 'required',
            'seo_desc' => 'required',
            'image' => 'required|image'
        ]);
        $validateData['slug'] = Str::slug(request()->name);

        $category = GaleryCategory::create($validateData);

        $category->update([
            'image' => request()->image->store('galery', 'public'),
        ]);

        return back();
    }

    public function store() {
        $validData = $this->validRquest();
        $validData['slug'] = request()->title;
        $img = Galery::create($validData);
        $this->storeImage($img);
        return back();
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
