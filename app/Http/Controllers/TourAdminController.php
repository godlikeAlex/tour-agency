<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Tour;
use App\TourDates;
use App\TourDatesAbout;
use App\Includes;
use App\NotIncludes;
use App\Image;
use App\Feature;
use App\TourCategory;

class TourAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Category controllers
    public function crateCategory() {
        return view('admin.create-category');
    }

    public function storeCategory() {
        $validData = request()->validate([
            'name' => 'required',
            'lang' => 'required',
            'keywords' => 'required',
            'seo_desc' => 'required',
        ]);
        $validData['slug'] = Str::slug(request()->name);
        TourCategory::create($validData);
        return back();
    }
    
    public function listCategory() {
        $categories = TourCategory::all();
        return view('admin.tours-list-category', compact('categories'));    
    }

    public function deleteCategory($id) {
        TourCategory::where('id', $id)->first()->delete();
        return back();
    }

    public function updateCategory ($id) {
        $category = TourCategory::where('id', $id)->first();
        return view('admin.update-category', compact('category'));
    }

    public function storeUpdateCategory($id) {
        $validData = request()->validate([
            'name' => 'required',
            'lang' => 'required',
            'keywords' => 'required',
            'seo_desc' => 'required',
        ]);
        $validData['slug'] = Str::slug(request()->name);
        TourCategory::where('id', $id)->firstOrFail()->update($validData);
        return back();
    }

    // Tours controller
    public function create () {
        $categories = TourCategory::all();
        return view('admin.create-tour', compact('categories'));
    }

    public function list () {
        $tours = Tour::all();
        return view('admin.tours-list', compact('tours'));
    }

    public function update ($id) {
        $tour = Tour::where('id', $id)->firstOrFail();
        $categories = TourCategory::all();
        return view('admin.tour-update', compact('tour', 'categories'));
    }

    public function updateOrCreate($id) {
        $tourToUpdate = Tour::where('id',$id)->firstOrFail();
        $tourID = $tourToUpdate->id;
        $tourToUpdate->update($this->validateTourUpdate());
        Includes::where('tour_id', $tourID)->delete();
        NotIncludes::where('tour_id', $tourID)->delete();
        TourDatesAbout::where('tour_id', $tourID)->delete();
        if(request() -> image){
            $this->storeTourImage($tourToUpdate);
        }

        if(request() -> galery) {
            Image::where('tour_id', $tourID)->delete();
            $this->storeImages($tourID);
        }

        $includes       = $this->validateInludes(true);
        $notIncludes    = $this->validateInludes(false);
        $aboutDays      = $this->validateDates();
        $feature        = $this->validFeature();

        $this->setTourId('includes', $includes,['include_title'], $tourID);
        $this->setTourId('notincludes', $notIncludes, ['dont_include_title'], $tourID);
        $this->setTourId('tourdatesabout', $aboutDays, ['day_title', 'day_desc'], $tourID);
        return back();
    }

    public function store (Request $request) {
        $validData = $this->validateTour();
        $validData['slug'] = Str::slug(request()->name)."-".request()->days."-days";
        $tour = Tour::create($validData);
        $tourId = $tour->id;
        // Store Images 
        $this->storeTourImage($tour);
        $this->storeImages($tourId);

        $includes       = $this->validateInludes(true);
        $notIncludes    = $this->validateInludes(false);
        $aboutDays      = $this->validateDates();
        $feature        = $this->validFeature();
        
        // Set tour_id all
        $this->setTourId('includes', $includes,['include_title'], $tourId);
        $this->setTourId('notincludes', $notIncludes, ['dont_include_title'], $tourId);
        $this->setTourId('tourdatesabout', $aboutDays, ['day_title', 'day_desc'], $tourId);
        return back();

    }

    public function deleteTour($id) {
        Tour::where('id', $id)->first()->delete();
        return back();
    }

    private function validateTour() {
        $validData = request()->validate([
            'name' => 'required',
            'lang' => 'required',
            'price' => 'required',
            'category' => 'required',
            'days' => 'required',
            'starts' => 'required',
            'video' => 'required',
            'ends' => 'required',
            'desc' => 'required',
            'about' => 'required',
            'image' => 'required',
            'keywords' => 'required',
            'seo_desc' => 'required',
            'map' => 'required',
            'pdf' => 'required',
        ]);
        return $validData;
    }

    private function validateTourUpdate() {
        $validData = request()->validate([
            'name' => 'required',
            'lang' => 'required',
            'price' => 'required',
            'category' => 'required',
            'days' => 'required',
            'starts' => 'required',
            'video' => 'required',
            'ends' => 'required',
            'desc' => 'required',
            'about' => 'required',
            'keywords' => 'required',
            'seo_desc' => 'required',
            'map' => 'required',
            'pdf' => 'required',
        ]);
        return $validData;
    }

    private function validateInludes($included) { 
        if($included) {
            $validData = request()->validate([
                "include_title.*" => 'required'
            ]);
        } else {
            $validData = request()->validate([
                "dont_include_title.*" => 'required'
            ]);
        }
        return $validData;
    } 

    private function validateDates() { 
        $validData = request()->validate([
            "day_title.*" => 'required',
            "day_desc.*" => 'required'
        ]);
        return $validData;
    } 

    private function validFeature() {
        $validData = request()->validate([
            'feature.*' => 'required'
        ]);

        return $validData;
    }

    private function storeTourImage($tour)
    {
        if(request()->has('image'))
        {    
            $tour->update([
                'image' => request()->image->store('tour', 'public'),
            ]);
        }
    }

    private function storeImages($tourId) {
        foreach(request() -> galery as $key=>$img) {
            $data = array(
                'tour_id' => $tourId,
                'path' => $img->store('tour-galery', 'public'),
                'galery_title' => request()->galery_title[$key],
            );
            $allImages[] = $data;
        }
        Image::insert($allImages);
    }

    private function setTourIdFeature($tourId) {
        foreach(request() -> feature as $f) {
            $data = array(
                'tour_id' => $tourId,
                'title' => $f,
            );
            $allFeature[] = $data;
        }
        Feature::insert($allFeature);
    }

    private function setTourId($class, $element, $fields, $tourId) {
        if(count($fields) == 1) {
            $firstEl = $element[$fields[0]];
            for($i = 0; $i < count($firstEl); $i++) {
                $data = array(
                    'tour_id' => $tourId,
                    $fields[0] => $firstEl[$i],
                );
                $insert_data[] = $data;
            }
        } else {
            $firstEl = $element[$fields[0]];
            $secondEl = $element[$fields[1]];
            for($i = 0; $i < count($firstEl); $i++) {
                $data = array(
                    'tour_id' => $tourId,
                    $fields[0] => $firstEl[$i],
                    $fields[1] => $secondEl[$i],
                );
                $insert_data[] = $data;
            }
        }
        
        switch($class) {
            case 'includes':
                Includes::insert($insert_data);
                break;
            case 'notincludes':
                NotIncludes::insert($insert_data);
                break;
            case 'tourdatesabout':
                TourDatesAbout::insert($insert_data);
                break;
            case 'tourdates':
                TourDates::insert($insert_data);
                break;
        }
    }
}
