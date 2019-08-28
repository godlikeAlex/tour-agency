<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Uzbekistan;
use Illuminate\Support\Str;

class UzbekistanAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() 
    {
        return view('admin/uzbekistan-create');
    }

    public function store()
    {
        $validData = $this->validData();
        $validData['slug'] = Str::slug(request()->name).'-'.request()->lang;
        $obj = Uzbekistan::create($validData);
        $this->storeImage($obj);
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
            'about' => 'required',
        ]);
    }
}
