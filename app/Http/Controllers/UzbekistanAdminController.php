<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Uzbekistan;

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
        $obj = Uzbekistan::create($this->validData());
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
            'sub-category' => 'required',
            'lang' => 'required',
            'image' => 'required',
            'about' => 'required',
        ]);
    }
}
