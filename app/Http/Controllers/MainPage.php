<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\People;
use App\Header;

class MainPage extends Controller
{
    public function index() {
        $header = Header::dataHeader();
        $people = $header["people"];
        return view('welcome', compact('header'));
    }
}
