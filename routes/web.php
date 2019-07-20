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

Route::get('/', 'MainPage@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin/blog')->group(function() {
    Route::get('/create', 'BlogAdminController@createRender');
    Route::post('/create', 'BlogAdminController@create');
});

Route::prefix('admin/galery')->group(function() {
    Route::get('/create', 'GaleryController@create');
    Route::post('/create', 'GaleryController@store')->name('galery.store');
});

Route::prefix('galery')->group(function () {
    Route::get('/', 'GaleryController@home');
    Route::get('/{century}', 'GaleryController@show');
});

Route::prefix('admin/tour')->group(function () {
    Route::get('/create', 'TourAdminController@create');
    Route::post('/create', 'TourAdminController@store')->name('tour.create');
});

Route::prefix('admin/tour/dates')->group(function () {
    Route::get('/create', 'DatesAndPriceController@create');
    Route::post('/create', 'DatesAndPriceController@store')->name('date.create');
    Route::get('/all', 'DatesAndPriceController@all');
    Route::get('/edit/{id}', 'DatesAndPriceController@edit');
    Route::post('/edit/{id}', 'DatesAndPriceController@update')->name('date.update');
});

Route::prefix('admin/city')->group(function () {
    Route::get('/create', 'CityAdminController@index');
    Route::post('/create', 'CityAdminController@store');
    Route::get('/items/create', 'CityAdminController@createItemsForCity');
    Route::post('/items/create', 'CityAdminController@cityItemsStore');
});


Route::prefix('tours')->group(function () {
    Route::get('/', 'TourController@index');
    Route::get('/{tour}/show', 'TourController@show')->name('tour.show');
    Route::get('/category/{category}', 'TourController@showCategory')->name('tour.category');
});

Route::prefix('admin/people')->group(function() {
    Route::get('/create', 'PeopleAdminController@createRender');
    Route::post('/create', 'PeopleAdminController@create');
});

Route::prefix('blog')->group(function() {
    Route::get('/', 'Blog@indexBlog');
    Route::get('/category/{category}', 'Blog@indexBlogCategory');
    Route::get('/post/{id}', 'Blog@showPost');
});

Route::prefix('people')->group(function() {
    Route::get('/', 'Blog@indexPeople');
    Route::get('/category/{category}', 'Blog@indexPeopleCategory');
    Route::get('/{id}', 'Blog@showPeople');
});

Route::prefix('city')->group(function() {
    Route::get('/', 'CityController@index');
    Route::get('/{city}', 'CityController@showCity');
    Route::get('/{city}/{category}/{slug}', 'CityController@showItem')->name('city.item');
    Route::get('/{city}/{category}', 'CityController@showCategory')->name('city.category');
});