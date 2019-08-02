<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\People;

use App\Header;

use App\City;

use App\Blog as Posts;

class Blog extends Controller
{
    public function create() {
        return view('home');    
    }

    public function indexBlog() {
        $cities         = City::all();
        $header = Header::dataHeader();
        $posts = Posts::paginate(5);
        $lastPosts = $this->lastPosts();
        $category = "all";
        return view('blog', compact('header', 'posts', 'lastPosts', 'category', 'cities'));
    }

    public function indexBlogCategory($category) {
        $cities         = City::all();
        $header = Header::dataHeader();
        $posts = Posts::where('category', $category)->paginate(5);
        $lastPosts = $this->lastPosts();
        return view('blog', compact('header', 'posts', 'lastPosts', 'category', 'cities'));
    }

    public function showPost($category, $slug) {
        $cities         = City::all();
        $post = Posts::where('slug', $slug)->firstOrFail();
        $header = Header::dataHeader();
        $lastPosts = $this->lastPosts();
        $recPosts = Posts::orderBy('created_at','desc')->take(3)->get();
        return view('blog-show', compact('header', 'post', 'lastPosts', 'recPosts', 'cities'));
    }

    public function store() {
        return request()->all();
    }

    // Peoples blog

    public function indexPeople() {
        $people = People::paginate(5);
        $cities         = City::all();
        $lastPeople = $this->lastPeople();
        $header = Header::dataHeader();
        $category = "all";

        return view('blog-people', compact('people', 'lastPeople', 'cities', 'category'));
    }

    public function indexPeopleCategory($category) {
        $people = People::where('category', $category)->paginate(5);
        $cities         = City::all();
        $lastPeople = $this->lastPeople();
        $header = Header::dataHeader();

        return view('blog-people', compact('people', 'lastPeople', 'cities', 'category'));
    }


    public function showPeople($category, $slug) {
        $people = People::where('slug', $slug)->firstOrFail();
        $cities         = City::all();
        $header = Header::dataHeader();
        $lastPeople = $this->lastPeople();
        $recPosts = Posts::orderBy('created_at','desc')->take(3)->get();
        return view('blog-post-people', compact('people', 'cities', 'lastPeople', 'recPosts'));
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
