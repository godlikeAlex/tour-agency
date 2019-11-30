<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\toursim;
use App\City;
use App\SEO;


class ToursimController extends Controller
{

    public function index($lang) {
        $obwiy_info = toursim::where(['lang' => $lang, 'category' => 'full_info'])->get();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        $visa = toursim::where(['lang' => $lang, 'category' => 'visa'])->get();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        $kak_dobratsya = toursim::where(['lang' => $lang, 'category' => 'kak_dobratsya'])->get();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        $dengi = toursim::where(['lang' => $lang, 'category' => 'dengi'])->get();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        $svyaz = toursim::where(['lang' => $lang, 'category' => 'svyaz'])->get();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        $miropriyatiya = toursim::where(['lang' => $lang, 'category' => 'miropriyatiya'])->get();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        return view('tourism', compact('obwiy_info', 'visa', 'kak_dobratsya', 'dengi', 'svyaz', 'miropriyatiya'));
    }

    public function show($lang, $slug) {
        $item = toursim::where('slug', $slug)->firstOrFail();
        SEO::defaultSeoParams($item->title, $item->keywords, $item->seo_desc);
        return view('tourism-show', compact('item'));
    }

    public function create() {
        return view('admin.toursim');
    }

    public function list() {
        $items = toursim::all();
        return view('admin.tourists-list', compact('items'));
    }

    public function update($id) {
        $item = toursim::where('id', $id)->firstOrFail();
        return view('admin.update-tourism', compact('item'));
    }

    public function updateStore($id) {
        $validateData = request() -> validate([
            'title' => 'required',
            'lang' => 'required',
            'keywords' => 'required',
            'seo_desc' => 'required',
            'category' => 'required',
            'desc' => 'required',
            'post' => 'required|min:25',
        ]);

        $currentItem =  toursim::where('id', $id)->firstOrFail();
        $currentItem->update($validateData);
        $this->storeImage($currentItem);
        return back();
    }

    public function delete($id) {
        toursim::where('id', $id)->firstOrFail()->delete();
        return back();
    }


    public function store() {
        $validData = $this->validRequest();
        $validData['slug'] = Str::slug(request()->title);
        $post = toursim::create($validData);
        $this->storeImage($post);
        return back();
    }

    private function validRequest() 
    {
        $validateData = request() -> validate([
            'title' => 'required',
            'lang' => 'required',
            'keywords' => 'required',
            'seo_desc' => 'required',
            'category' => 'required',
            'desc' => 'required',
            'post' => 'required|min:25',
            'image' => 'required|image'
        ]);

        return $validateData;
    }

    private function storeImage($post)
    {
        if(request()->has('image'))
        {    
            $post->update([
                'image' => request()->image->store('tourism', 'public'),
            ]);
        }
    }
}
