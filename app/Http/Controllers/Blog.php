<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\People;

use App\Header;

use App\Blog as Posts;

class Blog extends Controller
{
    public function create() {
        return view('home');    
    }

    public function indexBlog() {
        $header = Header::dataHeader();
        $posts = Posts::paginate(5);
        $lastPosts = $this->lastPosts();
        $category = "all";
        return view('blog', compact('header', 'posts', 'lastPosts', 'category'));
    }

    public function indexBlogCategory($category) {
        $header = Header::dataHeader();
        $posts = Posts::where('category', $category)->paginate(5);
        $lastPosts = $this->lastPosts();
        return view('blog', compact('header', 'posts', 'lastPosts', 'category'));
    }

    public function showPost($slug) {
        $post = Posts::where('slug', $slug)->firstOrFail();
        $header = Header::dataHeader();
        $lastPosts = $this->lastPosts();
        $recPosts = Posts::orderBy('created_at','desc')->take(3)->get();
        return view('blog-show', compact('header', 'post', 'lastPosts', 'recPosts'));
    }

    public function store() {
        return request()->all();
    }

    // Peoples blog

    public function indexPeople() {
        $people = People::paginate(5);
        $lastPeople = $this->lastPeople();
        $header = Header::dataHeader();
        $category = "all";

        return view('blog-people', compact('people', 'lastPeople', 'header', 'category'));
    }

    public function indexPeopleCategory($category) {
        $people = People::where('category', $category)->paginate(5);
        $lastPeople = $this->lastPeople();
        $header = Header::dataHeader();

        return view('blog-people', compact('people', 'lastPeople', 'header', 'category'));
    }


    public function showPeople($slug) {
        $people = People::where('slug', $slug)->firstOrFail();
        $header = Header::dataHeader();
        $lastPeople = $this->lastPeople();
        $recPosts = Posts::orderBy('created_at','desc')->take(3)->get();
        return view('blog-post-people', compact('people', 'header', 'lastPeople', 'recPosts'));
    }

    private function lastPeople() 
    {
        $lastPeople = People::orderBy('created_at','desc')->take(5)->get();
        return $lastPeople;
    }

    private function lastPosts() 
    {
        $lastPosts = Posts::orderBy('created_at','desc')->take(5)->get();
        return $lastPosts;
    }
}
