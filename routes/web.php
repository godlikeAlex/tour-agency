<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\City;


Auth::routes();

Route::redirect('/', '/en');

Route::group(['prefix' => '{language}'], function () {
    Route::get('/', 'MainPage@index')->name('index');

    Route::prefix('galery')->group(function () {
        Route::get('/', 'GaleryController@home')->name('index.galery');
        Route::get('/{century}', 'GaleryController@show')->name('show.galery');
    });
    
    Route::prefix('tours')->group(function () {
        Route::get('/', 'TourController@index')->name('index.tour');
        Route::get('/{tourname}/show', 'TourController@show')->name('tour.show');
        Route::get('/category/{category}', 'TourController@showCategory')->name('tour.category');
    });
    
    Route::prefix('blog')->group(function() {
        Route::get('/', 'Blog@indexBlog')->name('index.blog');
        Route::get('/{category}', 'Blog@indexBlogCategory')->name('blog.category');
        Route::get('/{category}/{slug}', 'Blog@showPost')->name('blog.show');
    });
    
    Route::prefix('people')->group(function() {
        Route::get('/', 'Blog@indexPeople')->name('index.people');
        Route::get('/{category}', 'Blog@indexPeopleCategory')->name('people.category');
        Route::get('/{category}/{slug}', 'Blog@showPeople')->name('people.show');
    });
    
    Route::prefix('city')->group(function() {
        Route::get('/', 'CityController@index')->name('index.city');
        Route::get('/{city}', 'CityController@showCity')->name('city.show');
        Route::get('/{city}/{category}/{slug}', 'CityController@showItem')->name('city.item');
        Route::get('/{city}/{category}', 'CityController@showCategory')->name('city.category');
    });
    
    Route::prefix('uzbekistan')->group(function() {
        Route::get('/', 'UzbekistanController@index')->name('index.uzbekistan');
        Route::get('/{category}', 'UzbekistanController@category')->name('uzb.category');
        Route::get('/{category}/{uzb}', 'UzbekistanController@show')->name('uzb.show');
    });

    Route::prefix('about')->group(function() {
        Route::get('/', function() {
            $cities = City::all();
            return view('about', compact('cities'));
        })->name('about');
        Route::get('faq', function() {    $cities = City::all();
            return view('faq', compact('cities'));
        })->name('faq');
        Route::get('team', function() {    $cities = City::all();
            return view('team', compact('cities'));
        })->name('team');
    });
});

Route::prefix('admin/uzbekistans')->group(function() {
    Route::get('/create', 'UzbekistanAdminController@create')->name('uzbekistan.create');
    Route::post('/create', 'UzbekistanAdminController@store');
});



Route::get('/tourism', 'ToursimController@index');
Route::get('/tourism/{slug}', 'ToursimController@view');
Route::get('/admin/tourism/create', 'ToursimController@create');
Route::post('/admin/tourism/create', 'ToursimController@store');

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin/news')->group(function() {
    Route::get('/create', 'BlogAdminController@createRender')->name('blog.create');
    Route::get('/list', 'BlogAdminController@blogList')->name('blog.list');
    Route::get('/list/update/{id}', 'BlogAdminController@blogUpdate')->name('blog.update');
    Route::post('/list/update/{id}', 'BlogAdminController@blogUpdatePost')->name('blog.update.store');
    Route::post('/create', 'BlogAdminController@create')->name('blog.store');
});

Route::prefix('admin/galery')->group(function() {
    Route::get('/create', 'GaleryController@create');
    Route::post('/create', 'GaleryController@store')->name('galery.store');
});


Route::prefix('admin/tour')->group(function () {
    Route::get('/create', 'TourAdminController@create')->name('tour.index');
    Route::post('/create', 'TourAdminController@store')->name('tour.create');
    Route::get('/list', 'TourAdminController@list')->name('tour.list');
    Route::get('/update/{id}', 'TourAdminController@update')->name('tour.update');
    Route::post('/update/{id}', 'TourAdminController@updateOrCreate')->name('tour.update.store');
});

Route::prefix('admin/tour/dates')->group(function () {
    Route::get('/create', 'DatesAndPriceController@create')->name('date.index');
    Route::post('/create', 'DatesAndPriceController@store')->name('date.create');
    Route::get('/all', 'DatesAndPriceController@all')->name('date.list');
    Route::get('/edit/{id}', 'DatesAndPriceController@edit');
    Route::post('/edit/{id}', 'DatesAndPriceController@update')->name('date.update');
});

Route::prefix('admin/citys')->group(function () {
    Route::get('/create', 'CityAdminController@index')->name('city.index');
    Route::post('/create', 'CityAdminController@store');
    Route::get('/items/create', 'CityAdminController@createItemsForCity')->name('city.item');
    Route::post('/items/create', 'CityAdminController@cityItemsStore');
});



Route::prefix('admin/peoples')->group(function() {
    Route::get('/create', 'PeopleAdminController@createRender')->name('people.create');
    Route::get('/list', 'PeopleAdminController@peopleList')->name('people.list');
    Route::get('/list/update/{id}', 'PeopleAdminController@peopleUpdate')->name('people.update');
    Route::post('/list/update/{id}', 'PeopleAdminController@peopleUpdatePost')->name('people.update.store');
    Route::post('/create', 'PeopleAdminController@create')->name('people.store');
});