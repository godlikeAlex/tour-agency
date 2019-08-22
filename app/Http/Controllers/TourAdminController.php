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

class TourAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create () {
        $tour = Tour::with('includes')->where('id', 45)->get();
        return view('admin.create-tour', compact('tour'));
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
        $this->setTourId('includes', $includes,['include_title', 'include_desc'], $tourId);
        $this->setTourId('notincludes', $notIncludes, ['dont_include_title', 'dont_include_desc'], $tourId);
        $this->setTourId('tourdatesabout', $aboutDays, ['day_title', 'day_desc'], $tourId);
        $this->setTourIdFeature($tourId);
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
            'age_from' => 'required',
            'age_to' => 'required',
            'physical_rating' => 'required',
            'about' => 'required',
            'image' => 'required',
            'map' => 'required',
            'pdf' => 'required',
        ]);
        return $validData;
    } 

    private function validateInludes($included) { 
        if($included) {
            $validData = request()->validate([
                "include_title.*" => 'required',
                "include_desc.*" => 'required'
            ]);
        } else {
            $validData = request()->validate([
                "dont_include_title.*" => 'required',
                "dont_include_desc.*" => 'required'
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
        foreach(request() -> galery as $img) {
            $data = array(
                'tour_id' => $tourId,
                'path' => $img->store('tour-galery', 'public'),
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
