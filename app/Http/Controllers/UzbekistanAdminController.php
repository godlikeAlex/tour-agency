<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Uzbekistan;
use App\UzbekistanCategory;
use Illuminate\Support\Str;

class UzbekistanAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() 
    {
        $categories = UzbekistanCategory::all();
        return view('admin/uzbekistan-create', compact('categories'));
    }

    public function list() 
    {
        $items = Uzbekistan::all();
        return view('admin.uzbekistan-list', compact('items'));
    }

    public function delete($id) {
        Uzbekistan::where('id', $id)->firstOrFail()->delete();
        return back();
    }

    public function update($id) {
        $item = Uzbekistan::where('id', $id)->firstOrFail();
        $categories = UzbekistanCategory::all();
        return view('admin.uzbekistan-update', compact('item', 'categories'));
    }

    public function store()
    {
        $validData = $this->validData();
        $validData['slug'] = Str::slug(request()->name).'-'.request()->lang;
        $obj = Uzbekistan::create($validData);
        $this->storeImage($obj);
        return back();        
    }

    public function updateStore($id)
    {
        $validData = request()->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required',
            'lang' => 'required',
            'keywords'=>'required',
            'seo_desc'=>'required',
            'about' => 'required',
        ]);

        $validData['slug'] = Str::slug(request()->name).'-'.request()->lang;

        $item = Uzbekistan::where('id', $id);

        $item->update($validData);

        if(request()->has('image')) {
            $this->storeImage($item);
        }

        return back();
    }

    private function storeImage($obj) 
    {
        if(request()->has('image'))
        {    
            $obj->update([
                'image' => request()->image->store('uzbekistan', 'public'),
            ]);
        }
    }

    private function validData() 
    {
        return request()->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required',
            'lang' => 'required',
            'image' => 'required',
            'keywords'=>'required',
            'seo_desc'=>'required',
            'about' => 'required',
        ]);
    }
}
