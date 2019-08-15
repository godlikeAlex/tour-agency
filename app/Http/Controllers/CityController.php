<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\City;
use App\CityItem;

class CityController extends Controller
{
    public function index() {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        return view('cities', compact('cities'));
    }

    public function showCity($city) {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $content        = City::where('name',$city)->firstOrFail();
        $historys       = $this->getRecordsByCategory($content->id, 'history');
        $whatToSee       = $this->getRecordsByCategory($content->id, 'what-to-see');
        $whatToDo       = $this->getRecordsByCategory($content->id, 'things-to-do');
        $whereToBuy       = $this->getRecordsByCategory($content->id, 'where-to-buy');
        $restaurants    = $this->getRecordsByCategory($content->id, 'where-to-eat');
        $hotels         = $this->getRecordsByCategory($content->id, 'where-to-stay');
        $howToGet         = $this->getRecordsByCategory($content->id, 'how-to-get');
        $usefulInformation         = $this->getRecordsByCategory($content->id, 'useful-information');
        return view('city-show', compact('content', 'historys', 'restaurants', 'hotels', 'whereToBuy', 'howToGet', 'whatToDo', 'usefulInformation', 'whatToSee', 'cities'));
    }

    public function showItem($city, $category, $slug) {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $content        = City::where('name',$city)->firstOrFail();
        $cityId = City::where('name',$city)->firstOrFail()->id;
        $item = CityItem::where([
            'city_id' => $cityId,
            'category' => $category,
            'slug' => $slug,
        ])->firstOrFail();
        // get previous CityItem id
        $previous = CityItem::where([
            'city_id' => $cityId,
            'category' => $category
        ])->where('id', '<', $item->id)->max('id');
        // get next CityItem id
        $next = CityItem::where([
            'city_id' => $cityId,
            'category' => $category
        ])->where('id', '>', $item->id)->min('id');

        return view('city-item', compact('item', 'cities', 'previous', 'next', 'city', 'category', 'content', 'city'));
    }

    public function showCategory($city, $category) {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $content        = City::where('name',$city)->firstOrFail();
        $cityId = City::where('name',$city)->firstOrFail()->id;
        $items = CityItem::where([
            'city_id' => $cityId,
            'category' => $category,
            'lang' => $lang,
        ])->paginate(10);
        return view('city-category', compact('cities', 'items', 'content'));   
    }

    private function getRecordsByCategory($cityId, $category) {
        $lang = app()->getLocale();
        return CityItem::where([
            'city_id' => $cityId,
            'category' => $category,
            'lang' => $lang,
        ])->take(8)->get();
    }
}
