<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $validData = $this->validRequest();
        $validData['slug'] = Str::slug(request()->title);
        $post = Blog::create($validData);
        $this->storeImage($post);
        return back();
    }

    public function blogList() {
        $posts = Blog::all();
        return view('admin.blog-list', compact('posts'));
    }

    public function blogUpdate($id) {
        $post = Blog::where('id', $id)->firstOrFail();
        return view('admin.blog-update', compact('post'));
    }

    public function blogDelete($id) {
        Blog::where('id', $id)->firstOrFail()->delete();
        return back();
    }

    public function blogUpdatePost($id) {
        $post = $this->validateUpdate();
        $updatedPost = Blog::where('id', $id)->update($post);
        if(request()->image !== null) {
            $this->storeImage(Blog::where('id', $id)->firstOrFail());
        }
        return back();
    }

    private function validRequest() 
    {
        $validateData = request() -> validate([
            'title' => 'required|min:6',
            'author' => 'required',
            'lang' => 'required',
            'category' => 'required',
            'desc' => 'required|min:25',
            'keywords' => 'required',
            'seo_desc' => 'required',
            'post' => 'required|min:25',
            'image' => 'required|image'
        ]);

        return $validateData;
    }

    private function validateUpdate() 
    {
        $validateData = request() -> validate([
            'title' => 'required|min:6',
            'author' => 'required',
            'lang' => 'required',
            'keywords' => 'required',
            'seo_desc' => 'required',
            'category' => 'required',
            'desc' => 'required|min:25',
            'post' => 'required|min:25',
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
