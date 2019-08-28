<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\City;

use App\CityItem;

class CityAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.create-city');
    }

    public function store() {
        $city = City::create($this->validateCity());
        if(request()->has('image'))
        {    
            $city->update([
                'image' => request()->image->store('city', 'public'),
            ]);
        }
        return back();
    }

    public function createItemsForCity() {
        $citys = City::all();
        return view('admin.city-items-create', compact('citys'));
    }

    public function cityItemsStore() {
        $validDate = request()->validate([
            'name'=>'required',
            'city_id'=>'required',
            'lang' => 'required',
            'category_price' => '',
            'desc' => 'required',
            'category'=>'required',
            'about'=>'required',
            'image'=>'required|image',
        ]);
        $validDate['slug'] = Str::slug(request()->name).'-'.request()->lang;

        $item = CityItem::create($validDate);

        $this->storeItemImage($item);

        return back();
    }

    private function storeItemImage($item) {
        if(request()->has('image'))
        {    
            $item->update([
                'image' => request()->image->store('items-city', 'public'),
            ]);
        }
    }

    private function validateCity() {
        return request()->validate([
            'name' => 'required',
            'lang' => 'required',
            'desc' => 'required',
            'about' => 'required',
            'image' => 'required'
        ]);
    }
}
