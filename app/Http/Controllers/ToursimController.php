<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\toursim;
use App\City;

class ToursimController extends Controller
{

    public function index() {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        return view('tourism', compact('cities'));
    }

    public function view() {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        return view('admin.toursim', compact('cities'));
    }

    public function create() {
        return view('admin.toursim');
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
