<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createRender()
    {
        return view('/admin/create');
    }

    public function create()
    {
        $post = Blog::create($this->validRequest());
        $this->storeImage($post);
        dd(request()->all());
    }

    private function validRequest() 
    {
        $validateData = request() -> validate([
            'title' => 'required|min:6',
            'author' => 'required',
            'category' => 'required',
            'desc' => 'required|min:25',
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
                'image' => request()->image->store('blog', 'public'),
            ]);
        }
    }
}
