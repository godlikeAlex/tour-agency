<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\People;

use Illuminate\Support\Str;

class PeopleAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createRender()
    {
        return view('/admin/create-people');
    }

    public function create()
    {
        $validData = $this->validRequest();
        $validData['slug'] = Str::slug(request() -> name);
        $people = People::create($validData);
        $this->storeImage($people);
        return redirect('/admin/people/create');
    }

    private function validRequest() 
    {
        $validateData = request() -> validate([
            'name' => 'required|min:6',
            'body' => 'required|min:25',
            'desc' => 'required|min:25',
            'category' => 'required',
            'image' => 'required|image'
        ]);

        return $validateData;
    }

    private function storeImage($people)
    {
        if(request()->has('image'))
        {    
            $people->update([
                'image' => request()->image->store('people', 'public'),
            ]);
        }
    }
}
