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
use App\CityItem;
use App\UzbekistanCategory;
use App\People;
use App\GaleryCategory;
use App\TourCategory;
use App\toursim;
use App\Blog;


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

    Route::prefix('tourism')->group(function () {
        Route::get('/', 'ToursimController@index')->name('index.tourism');
        Route::get('/{slug}/show', 'ToursimController@show')->name('tourism.show');
    });
    
    Route::prefix('uzbekistan')->group(function() {
        Route::get('/', 'UzbekistanController@index')->name('index.uzbekistan');
        Route::get('/{category}', 'UzbekistanController@category')->name('uzb.category');
        Route::get('/{category}/{subcategory}', 'UzbekistanController@sub')->name('uzb.sub');
        Route::get('/{category}/{subcategory}/{uzb}', 'UzbekistanController@show')->name('uzb.show');
    });

    
Route::post('/contact', 'EmailController@sendEmail')->name('send.mail');
Route::post('/toursend', 'EmailController@sendTourRequest')->name('book.tour');

    Route::prefix('about')->group(function($lang) {
        Route::get('/', function($lang) {
            $cities = City::where('lang', $lang)->get();
            return view('about', compact('cities'));
        })->name('about');
        Route::get('faq', function($lang) {    
            $cities = City::where('lang', $lang)->get();
            return view('faq', compact('cities'));
        })->name('faq');
        Route::get('team', function($lang) {    
            $cities = City::where('lang', $lang)->get();
            return view('team', compact('cities'));
        })->name('team');

        Route::get('offer', function() {
            return view('offers');
        })->name('offers');

        Route::get('sitemap', function($lang) {
            $geoCategories = UzbekistanCategory::where([
                'category' => 'geo',
                'lang' => $lang
            ])->get();

            $historyCategories = UzbekistanCategory::where([
                'category' => 'history',
                'lang' => $lang
            ])->get();

            $peoplesCategories = UzbekistanCategory::where([
                'category' => 'peoples',
                'lang' => $lang
            ])->get();

            $artCategories = UzbekistanCategory::where([
                'category' => 'art',
                'lang' => $lang
            ])->get();
            
            $fashionCategories = UzbekistanCategory::where([
                'category' => 'fashion',
                'lang' => $lang
            ])->get();

            $paintingCategories = UzbekistanCategory::where([
                'category' => 'painting',
                'lang' => $lang
            ])->get();

            $cultureCategories = UzbekistanCategory::where([
                'category' => 'culture',
                'lang' => $lang
            ])->get();

            $kitchenCategories = UzbekistanCategory::where([
                'category' => 'kitchen',
                'lang' => $lang
            ])->get();

            $traditionCategories = UzbekistanCategory::where([
                'category' => 'tradition',
                'lang' => $lang
            ])->get();

            $drevniy = People::where([
                'lang'=> $lang,
                'category' => 'drevniy-mir'
            ])->get();

            $sredniy = People::where([
                'lang'=> $lang,
                'category' => 'srednie-veka'
            ])->get();

            $novie = People::where([
                'lang'=> $lang,
                'category' => 'novoe-vremya'
            ])->get();

            $sovremenost = People::where([
                'lang'=> $lang,
                'category' => 'sovremenost'
            ])->get();

            $uzbBlog = Blog::where([
                'lang' => $lang,
                'category' => 'uzbekistan'
            ])->get();

            $archBlog = Blog::where([
                'lang' => $lang,
                'category' => 'archeology'
            ])->get();

            $tourBlog = Blog::where([
                'lang' => $lang,
                'category' => 'tourism'
            ])->get();

            $notesBlog = Blog::where([
                'lang' => $lang,
                'category' => 'notes'
            ])->get();

            
            $cities = City::where('lang', $lang)->get();

            $city_items = CityItem::where('lang', $lang)->get();

            $galleryCategories = GaleryCategory::where('lang', $lang)->get();
            
            $tourCategories = TourCategory::where('lang', $lang)->get();

            $tourism = toursim::where(['lang' => $lang])->get();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              

            return view('sitemap', compact('notesBlog', 'tourBlog', 'archBlog', 'uzbBlog', 'tourism', 'tourCategories', 'galleryCategories', 'sovremenost', 'novie' ,'sredniy', 'drevniy', 'geoCategories', 'historyCategories', 'peoplesCategories', 'artCategories', 'fashionCategories', 'paintingCategories', 'cultureCategories', 'kitchenCategories', 'traditionCategories', 'cities', 'city_items'));
        })->name('sitemap');

        Route::get('contact', function($lang) {    
            $cities = City::where('lang', $lang)->get();
            return view('contact', compact('cities'));
        })->name('contacts');
    });
});



Route::prefix('admin/uzbekistans')->group(function() {
    Route::get('/create', 'UzbekistanAdminController@create')->name('uzbekistan.create');
    Route::post('/create', 'UzbekistanAdminController@store');
    Route::get('/list', 'UzbekistanAdminController@list')->name('uzbekistan.list');
    Route::get('/delete/{id}', 'UzbekistanAdminController@delete')->name('uzbekistan.delete');
    Route::get('/updae/{id}', 'UzbekistanAdminController@update')->name('uzbekistan.update');
    Route::post('/updae/{id}', 'UzbekistanAdminController@updateStore')->name('uzbekistan.updateStore');

    Route::get('/category/create', 'UzbekistanCategoryController@create')->name('create.uzb.category');
    Route::post('/category/create', 'UzbekistanCategoryController@store');
    Route::get('/category/list', 'UzbekistanCategoryController@list')->name('list.uzb.category');
    Route::get('/category/update/{id}', 'UzbekistanCategoryController@update')->name('uzb.category.update');
    Route::post('/category/update/{id}', 'UzbekistanCategoryController@updateStore');
    Route::get('/category/delete/{id}', 'UzbekistanCategoryController@delete')->name('uzb.category.delete');    
});



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
    Route::get('/list/delete/{id}', 'BlogAdminController@blogDelete')->name('blog.delete');
    Route::post('/create', 'BlogAdminController@create')->name('blog.store');
});

Route::prefix('admin/gallery')->group(function() {
    Route::get('/create', 'GaleryAdminController@create')->name('galery.create');
    Route::get('/category/create', 'GaleryAdminController@categoryCreate')->name('galery.category.create');
    Route::post('/category/create', 'GaleryAdminController@categoryStore')->name('galery.category.store');
    Route::post('/create', 'GaleryAdminController@store')->name('galery.store');
});

Route::prefix('admin/tourism')->group(function () {
    Route::get('create', 'ToursimController@create')->name('tourism-create');
    Route::get('list', 'ToursimController@list')->name('tourism-list');
    Route::get('update/{id}', 'ToursimController@update')->name('tourism.update');
    Route::post('update/{id}', 'ToursimController@updateStore');
    Route::get('delete/{id}', 'ToursimController@delete')->name('tourism.delete');
});


Route::prefix('admin/tour')->group(function () {
    Route::get('/create', 'TourAdminController@create')->name('tour.index');
    Route::post('/create', 'TourAdminController@store')->name('tour.create');
    Route::get('/list', 'TourAdminController@list')->name('tour.list');
    Route::get('/update/{id}', 'TourAdminController@update')->name('tour.update');
    Route::post('/update/{id}', 'TourAdminController@updateOrCreate')->name('tour.update.store');
    Route::get('/delete/{id}', 'TourAdminController@deleteTour')->name('tour.delete');


    Route::get('/category/create', 'TourAdminController@crateCategory')->name('tour.create.category');
    Route::post('/category/create', 'TourAdminController@storeCategory')->name('tour.stores.category');
    Route::get('/category/all', 'TourAdminController@listCategory')->name('tour.list.category');
    Route::get('/category/delete/{id}', 'TourAdminController@deleteCategory')->name('delete.tour.category');
    Route::get('/category/upddate/{id}', 'TourAdminController@updateCategory')->name('update.tour.category');
    Route::post('/category/upddate/{id}', 'TourAdminController@storeUpdateCategory')->name('update.store.tour.category');
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
    Route::get('/list', 'CityAdminController@list')->name('city.list');
    Route::get('/list/delete/{id}', 'CityAdminController@delete')->name('city.delete');
    Route::get('/list/update/{id}', 'CityAdminController@update')->name('city.update');
    Route::post('/list/update/{id}', 'CityAdminController@updateStore')->name('city.update.store');
    Route::get('/items/create', 'CityAdminController@createItemsForCity')->name('city.item.admin');
    Route::post('/items/create', 'CityAdminController@cityItemsStore');
    Route::get('/items/list', 'CityAdminController@cityItemsList')->name('items.list');
    Route::get('/items/delete/{id}', 'CityAdminController@deleteItem')->name('city.item.delete');
    Route::get('/items/update/{id}', 'CityAdminController@updateItemView')->name('city.item.update');
    Route::post('/items/update/{id}', 'CityAdminController@updateItem')->name('city.item.update.store');
});



Route::prefix('admin/peoples')->group(function() {
    Route::get('/create', 'PeopleAdminController@createRender')->name('people.create');
    Route::get('/list', 'PeopleAdminController@peopleList')->name('people.list');
    Route::get('/list/update/{id}', 'PeopleAdminController@peopleUpdate')->name('people.update');
    Route::post('/list/update/{id}', 'PeopleAdminController@peopleUpdatePost')->name('people.update.store');
    Route::get('/list/delete/{id}', 'PeopleAdminController@deletePeople')->name('people.delete');
    Route::post('/create', 'PeopleAdminController@create')->name('people.store');
});
