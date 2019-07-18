<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\TourDatesAbout;
use App\Includes;
use App\Image;
use App\NotIncludes;
use App\TourDates;

class Tour extends Model
{
    protected $guarded = [];

    public function tourDatesAbout(){
        return $this->hasMany('App\TourDatesAbout');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }

    public function Includes(){
        return $this->hasMany('App\Includes');
    }

    public function notIncludes(){
        return $this->hasMany('App\NotIncludes');
    }

    public function faeturs(){
        return $this->hasMany('App\Feature');
    }

    public function tourDates(){
        return $this->hasMany('App\PriceDate');
    }

    public function feature(){
        return $this->hasMany('App\Feature');
    }
}
