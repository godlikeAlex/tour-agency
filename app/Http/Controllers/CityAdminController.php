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

    public function list() {
        $items = City::all();
        return view('admin.list-city', compact('items'));
    }

    public function delete($id) {
        City::where('id', $id)->firstOrFail()->delete();
        return back();
    }

    public function update($id) {
        $item = City::where('id', $id)->firstOrFail();
        return view('admin.city-update', compact('item'));
    }

    public function updateStore($id) {
        $validData = request()->validate([
            'name'=>'required',
            'lang' => 'required',
            'keywords'=>'required',
            'seo_desc'=>'required',
            'desc' => 'required',
            'about'=>'required',
        ]);
        // $validData['slug'] = Str::slug(request()->name);

        $city = City::where('id', $id)->firstOrFail();
        $city->update($validData);
        if(request() -> image){
            $this->storeTourImage($city);
        }
        return back();
    }

    public function deleteItem($id) {
        CityItem::where('id', $id)->firstOrFail()->delete();
        return back();
    }

    public function updateItemView($id) {
        $item = CityItem::where('id', $id)->firstOrFail();
        $citys = City::all();
        return view('admin.update-item-city', compact('item', 'citys'));
    }

    public function updateItem($id) {
        $validData = request()->validate([
            'name'=>'required',
            'lang' => 'required',
            'keywords'=>'required',
            'seo_desc'=>'required',
            'desc' => 'required',
            'about'=>'required',
        ]);
        // $validData['slug'] = Str::slug(request()->name);

        $city = CityItem::where('id', $id)->firstOrFail();
        $city->update($validData);
        if(request() -> image){
            $this->storeTourImage($city);
        }
        return back();
    }

    public function cityItemsList() {
        $items = CityItem::all();
        return view('admin.items-city-list', compact('items'));
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
            'keywords'=>'required',
            'seo_desc'=>'required',
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
            'keywords'=>'required',
            'desc' => 'required',
            'keywords'=>'required',
            'seo_desc'=>'required',
            'about' => 'required',
            'image' => 'required'
        ]);
    }
}
