<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UzbekistanCategory extends Model
{
    protected $guarded = [];

    public function items(){
        return $this->hasMany('App\uzbekistan', 'category', 'slug')->latest()->get();
    }    
}
