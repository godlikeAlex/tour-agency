<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SEO;
use App\City;
use App\CityItem;

class CityController extends Controller
{
    public function index() {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        return view('cities', compact('cities'));
    }

    public function showCity($lang, $city) {
        $cities         = City::where('lang', $lang)->get();
        $content        = City::where('lang', $lang)->where('name',$city)->firstOrFail();
        $historys       = $this->getRecordsByCategory($content->id, 'history');
        $whatToSee       = $this->getRecordsByCategory($content->id, 'what-to-see');
        $whatToDo       = $this->getRecordsByCategory($content->id, 'things-to-do');
        $whereToBuy       = $this->getRecordsByCategory($content->id, 'where-to-buy');
        $restaurants    = $this->getRecordsByCategory($content->id, 'where-to-eat');
        $hotels         = $this->getRecordsByCategory($content->id, 'where-to-stay');
        $howToGet         = $this->getRecordsByCategory($content->id, 'how-to-get');
        $usefulInformation         = $this->getRecordsByCategory($content->id, 'useful-information');
        SEO::defaultSeoParams($content->name, $content->keywords, $content->seo_desc);
        return view('city-show', compact('content', 'historys', 'restaurants', 'hotels', 'whereToBuy', 'howToGet', 'whatToDo', 'usefulInformation', 'whatToSee', 'cities'));
    }

    public function showItem($lang, $city, $category, $slug) {
        $cities         = City::where('lang', $lang)->get();
        $content        = City::where('name',$city)->firstOrFail();
        $count = CityItem::where('lang', $lang)->get()->count() - 1;
        if($count >= 4) {
            $randomFromCategory = CityItem::where('slug', '!=', $slug)->where('lang', $lang)->get()->random(3);
        } else {
            $randomFromCategory = CityItem::where('slug', '!=', $slug)->where('lang', $lang)->get()->random($count);
        }
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
        SEO::defaultSeoParams($item->name, $item->keywords, $item->seo_desc, $item->image);

        return view('city-item', compact('item', 'randomFromCategory', 'cities', 'previous', 'next', 'city', 'category', 'content', 'city'));
    }

    public function showCategory($lang, $city, $category) {
        $lang = app()->getLocale();
        $cities         = City::where('lang', $lang)->get();
        $content        = City::where('name',$city)->firstOrFail();
        $cityId = City::where('name',$city)->firstOrFail()->id;
        $items = CityItem::where([
            'city_id' => $cityId,
            'category' => $category,
            'lang' => $lang,
        ])->paginate(10);
        return view('city-category', compact('cities', 'items', 'content', 'category', 'city'));   
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
