<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\People;

use App\SEO;

use App\City;

use App\Blog as Posts;

class Blog extends Controller
{
    public function create() {
        return view('home');    
    }

    public function indexBlog($lang) {
        $uzbnews = Posts::where(['lang' => $lang, 'category' => 'uzbekistan'])->orderBy('created_at','desc')->limit(5)->get();
        $arch = Posts::where(['lang' => $lang, 'category' => 'archeology'])->orderBy('created_at','desc')->limit(5)->get();
        $tourism = Posts::where(['lang' => $lang, 'category' => 'tourism'])->orderBy('created_at','desc')->limit(5)->get();
        $notes = Posts::where(['lang' => $lang, 'category' => 'notes'])->orderBy('created_at','desc')->limit(5)->get();
   
        $cities         = City::where('lang', $lang)->get();
        $posts = Posts::where('lang', $lang)->orderBy('created_at','desc')->paginate(6);
        $lastPosts = $this->lastPosts();
        $category = "all";
        return view('blog', compact('posts', 'lastPosts', 'category', 'cities', 'uzbnews', 'arch', 'tourism', 'notes'));
    }

    public function indexBlogCategory($lang, $category) {
        $uzbnews = Posts::where(['lang' => $lang, 'category' => 'uzbekistan'])->orderBy('created_at','desc')->limit(5)->get();
        $arch = Posts::where(['lang' => $lang, 'category' => 'archeology'])->orderBy('created_at','desc')->limit(5)->get();
        $tourism = Posts::where(['lang' => $lang, 'category' => 'tourism'])->orderBy('created_at','desc')->limit(5)->get();
        $notes = Posts::where(['lang' => $lang, 'category' => 'notes'])->orderBy('created_at','desc')->limit(5)->get();

        $cities         = City::where('lang', $lang)->get();
        $posts = Posts::where(['category' => $category, 'lang' => $lang])->orderBy('created_at','desc')->paginate(6);
        $lastPosts = $this->lastPosts();
        return view('blog', compact('posts', 'lastPosts', 'category', 'cities', 'uzbnews', 'arch', 'tourism', 'notes'));
    }

    public function showPost($lang, $category, $slug) {
        $uzbnews = Posts::where(['lang' => $lang, 'category' => 'uzbekistan'])->orderBy('created_at','desc')->limit(5)->get();
        $arch = Posts::where(['lang' => $lang, 'category' => 'archeology'])->orderBy('created_at','desc')->limit(5)->get();
        $tourism = Posts::where(['lang' => $lang, 'category' => 'tourism'])->orderBy('created_at','desc')->limit(5)->get();
        $notes = Posts::where(['lang' => $lang, 'category' => 'notes'])->orderBy('created_at','desc')->limit(5)->get();

        $cities         = City::where('lang', $lang)->get();
        $post = Posts::where('slug', $slug)->firstOrFail();
        SEO::defaultSeoParams($post->title, $post->keywords, $post->seo_desc, $post->image);
        $lastPosts = $this->lastPosts();
        $recPosts = Posts::orderBy('created_at','desc')->take(3)->get();
        return view('blog-show', compact('post', 'lastPosts', 'recPosts', 'cities', 'uzbnews', 'arch', 'tourism', 'notes'));
    }

    public function store() {
        return request()->all();
    }

    // Peoples blog

    public function indexPeople($lang) {
        $lang = app()->getLocale();
        $drmir = People::where(['lang' => $lang, 'category' => 'drevniy-mir'])->orderBy('created_at','desc')->limit(5)->get();
        $sredveka = People::where(['lang' => $lang, 'category' => 'srednie-veka'])->orderBy('created_at','desc')->limit(5)->get();
        $novoevremya = People::where(['lang' => $lang, 'category' => 'novoe-vremya'])->orderBy('created_at','desc')->limit(5)->get();
        $sovremenost = People::where(['lang' => $lang, 'category' => 'sovremenost'])->orderBy('created_at','desc')->limit(5)->get();
   
        $cities         = City::where('lang', $lang)->get();
        $peoples = People::where('lang', $lang)->orderBy('created_at','desc')->paginate(6);
        $lastPeople = $this->lastPeople();
        $category = "all";

        return view('blog-people', compact('peoples', 'lastPeople', 'cities', 'category', 'drmir', 'sredveka', 'novoevremya', 'sovremenost'));
    }

    public function indexPeopleCategory($lang, $category) {
        $drmir = People::where(['lang' => $lang, 'category' => 'drevniy-mir'])->orderBy('created_at','desc')->limit(5)->get();
        $sredveka = People::where(['lang' => $lang, 'category' => 'srednie-veka'])->orderBy('created_at','desc')->limit(5)->get();
        $novoevremya = People::where(['lang' => $lang, 'category' => 'novoe-vremya'])->orderBy('created_at','desc')->limit(5)->get();
        $sovremenost = People::where(['lang' => $lang, 'category' => 'sovremenost'])->orderBy('created_at','desc')->limit(5)->get();
   
        $cities         = City::where('lang', $lang)->get();
        $peoples = People::where(['category' => $category, 'lang' => $lang])->orderBy('created_at','desc')->paginate(6);
        $lastPeople = $this->lastPeople();

        return view('blog-people', compact('peoples', 'lastPeople', 'cities', 'category', 'drmir', 'sredveka', 'novoevremya', 'sovremenost'));
    }


    public function showPeople($lang, $category, $slug) {
        $people = People::where('slug', $slug)->firstOrFail();
        $drmir = People::where(['lang' => $lang, 'category' => 'drevniy-mir'])->orderBy('created_at','desc')->limit(5)->get();
        $sredveka = People::where(['lang' => $lang, 'category' => 'srednie-veka'])->orderBy('created_at','desc')->limit(5)->get();
        $novoevremya = People::where(['lang' => $lang, 'category' => 'novoe-vremya'])->orderBy('created_at','desc')->limit(5)->get();
        $sovremenost = People::where(['lang' => $lang, 'category' => 'sovremenost'])->orderBy('created_at','desc')->limit(5)->get();
   
        $cities         = City::where('lang', $lang)->get();
        $lastPeople = $this->lastPeople();
        $recPosts = Posts::orderBy('created_at','desc')->take(3)->get();
        SEO::defaultSeoParams($people->name, $people->keywords, $people->seo_desc,  $people->image);
        return view('blog-post-people', compact('people', 'cities', 'lastPeople', 'recPosts', 'drmir', 'sredveka', 'novoevremya', 'sovremenost'));
    }

    private function lastPeople() 
    {
        $lang = app()->getLocale();
        $lastPeople = People::where('lang', $lang)->orderBy('created_at','desc')->take(3)->get();
        return $lastPeople;
    }

    private function lastPosts() 
    {
        $lang = app()->getLocale();
        $lastPosts = Posts::where('lang', $lang)->orderBy('created_at','desc')->take(3)->get();
        return $lastPosts;
    }
}
