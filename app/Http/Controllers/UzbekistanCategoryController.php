<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UzbekistanCategory;
use Illuminate\Support\Str;

class UzbekistanCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        return view('admin.uzb-category-create');
    }

    public function list() {
        $categories = UzbekistanCategory::all();
        return view('admin.uzb-category-list', compact('categories'));
    }

    public function update($id) {
        $category = UzbekistanCategory::where('id', $id)->firstOrFail();
        return view('admin.uzb-category-update', compact('category'));
    }

    public function updateStore($id) {
        $validData = request()->validate([
            'name' => 'required',
            'lang' => 'required',
            'category' => 'required',
            'keywords' => 'required',
            'seo_desc' => 'required',
            'desc' => 'required',
        ]);
        $validData['slug'] = Str::slug(request()->name);

        $category = UzbekistanCategory::where('id', $id)->firstOrFail();

        $category->update($validData);

        if(request()->has('image'))
        {    
            $category->update([
                'image' => request()->image->store('uzb', 'public'),
            ]);
        }

        return back();
    }

    public function delete($id) {
        UzbekistanCategory::where('id', $id)->firstOrFail()->delete();
        return back();
    }

    public function store() {
        $validData = request()->validate([
            'name' => 'required',
            'lang' => 'required',
            'category' => 'required',
            'keywords' => 'required',
            'seo_desc' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);
        $validData['slug'] = Str::slug(request()->name);

        $category = UzbekistanCategory::create($validData);

        $category->update([
            'image' => request()->image->store('category', 'public'),
        ]);

        return back();
    }
}
