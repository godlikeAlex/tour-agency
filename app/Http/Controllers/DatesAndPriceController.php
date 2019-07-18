<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tour;

use App\PriceDate;

class DatesAndPriceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create() {
        $tours = Tour::all();
        return view('admin.create-dates', compact('tours'));
    }

    public function all() {
        $tours = Tour::all();
        return view('admin.all-dates', compact('tours'));
    }

    public function edit($id) {
        $dates = PriceDate::where('tour_id', $id)->get();
        return view('admin.edit-dates', compact('dates'));
    }

    public function update($id) {
        PriceDate::find($id)->update([
            'status'    => request() -> status,
            'price'     => request() -> price, 
            'places'    => request() -> places,
        ]);
        return back();
    }

    public function store() {
        $starts = request()->starts;
        $ends   = request()->ends;
        $status = request()->status;
        $lang   = request()->lang;
        $price  = request()->price;
        $place  = request()->places;
        for($i = 0; count($starts) > $i; $i++) {
            $data = array(
                'tour_id'=> request()->tour_id,
                'starts'=> $starts[$i],
                'price' => $price[$i],
                'ends'=> $ends[$i],
                'places' => $place[$i],
                'status'=> $status[$i],
                'lang' => $lang[$i]
            );
            $insert_data[] = $data;
        }
        PriceDate::insert($insert_data);
        return back();
    }
}
