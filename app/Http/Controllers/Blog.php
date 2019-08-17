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
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $posts = Posts::where('lang', $lang)->orderBy('created_at','desc')->paginate(5);
        $lastPosts = $this->lastPosts();
        $category = "all";
        return view('blog', compact('posts', 'lastPosts', 'category', 'cities'));
    }

    public function indexBlogCategory($category) {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $posts = Posts::where(['category' => $category, 'lang' => $lang])->orderBy('created_at','desc')->paginate(5);
        $lastPosts = $this->lastPosts();
        return view('blog', compact('posts', 'lastPosts', 'category', 'cities'));
    }

    public function showPost($category, $slug) {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $post = Posts::where('slug', $slug)->firstOrFail();
        $header = Header::dataHeader();
        $lastPosts = $this->lastPosts();
        $recPosts = Posts::orderBy('created_at','desc')->take(3)->get();
        return view('blog-show', compact('post', 'lastPosts', 'recPosts', 'cities'));
    }

    public function store() {
        return request()->all();
    }

    // Peoples blog

    public function indexPeople() {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $people = People::where('lang', $lang)->orderBy('created_at','desc')->paginate(5);
        $lastPeople = $this->lastPeople();
        $header = Header::dataHeader();
        $category = "all";

        return view('blog-people', compact('people', 'lastPeople', 'cities', 'category'));
    }

    public function indexPeopleCategory($category) {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $people = People::where(['category' => $category, 'lang' => $lang])->orderBy('created_at','desc')->paginate(5);
        $lastPeople = $this->lastPeople();

        return view('blog-people', compact('people', 'lastPeople', 'cities', 'category'));
    }


    public function showPeople($category, $slug) {
        $people = People::where('slug', $slug)->firstOrFail();
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $lastPeople = $this->lastPeople();
        $recPosts = Posts::orderBy('created_at','desc')->take(3)->get();
        return view('blog-post-people', compact('people', 'cities', 'lastPeople', 'recPosts'));
    }

    private function lastPeople() 
    {
        $lang = app()->getLocale();
        $lastPeople = People::where('lang', $lang)->orderBy('created_at','desc')->take(5)->get();
        return $lastPeople;
    }

    private function lastPosts() 
    {
        $lang = app()->getLocale();
        $lastPosts = Posts::where('lang', $lang)->orderBy('created_at','desc')->take(5)->get();
        return $lastPosts;
    }
}
