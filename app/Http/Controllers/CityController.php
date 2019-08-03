<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\City;
use App\CityItem;

class CityController extends Controller
{
    public function index() {
        $header = Header::dataHeader();
        $cities = City::all();
        return view('cities', compact('header', 'cities'));
    }

    public function showCity($city) {
        $header         = Header::dataHeader();
        $content        = City::where('name',$city)->firstOrFail();
        $cities         = City::all();
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
        $header = Header::dataHeader();
        $cities = City::all();
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

        return view('city-item', compact('header', 'item', 'cities', 'previous', 'next', 'city', 'category', 'content', 'city'));
    }

    public function showCategory($city, $category) {
        $header = Header::dataHeader();
        $cities = City::all();
        $content        = City::where('name',$city)->firstOrFail();
        $cityId = City::where('name',$city)->firstOrFail()->id;
        $items = CityItem::where([
            'city_id' => $cityId,
            'category' => $category,
        ])->paginate(10);
        return view('city-category', compact('header', 'cities', 'items', 'content'));   
    }

    private function getRecordsByCategory($cityId, $category) {
        return CityItem::where([
            'city_id' => $cityId,
            'category' => $category,
        ])->take(8)->get();
    }
}
