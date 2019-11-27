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
        return back();
    }

    public function peopleList() {
        $posts = People ::all();
        return view('admin.blog-list', compact('posts'));
    }

    public function peopleUpdate($id) {
        $people = People::where('id', $id)->firstOrFail();
        return view('admin.people-update', compact('people'));
    }

    public function peopleUpdatePost($id) {
        $post = $this->validateUpdate();
        $updatedPeople = People::where('id', $id)->update($post);        
        if(request()->image !== null) {
            $this->storeImage(People::where('id', $id)->firstOrFail());
        }
        return back();
    }

    public function deletePeople($id) {
        People::where('id', $id)->firstOrFail()->delete();
        return back();
    }

    private function validateUpdate() 
    {
        $validateData = request() -> validate([
            'name' => 'required|min:6',
            'body' => 'required|min:25',
            'lang' => 'required',
            'keywords' => 'required',
            'seo_desc' => 'required',
            'desc' => 'required|min:25',
            'category' => 'required'
        ]);

        return $validateData;
    }

    private function validRequest() 
    {
        $validateData = request() -> validate([
            'name' => 'required|min:6',
            'body' => 'required|min:25',
            'lang' => 'required',
            'keywords' => 'required',
            'seo_desc' => 'required',
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
