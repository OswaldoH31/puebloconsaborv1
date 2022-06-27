<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Slider;

class Slidercontroller extends Controller
{
    public function slider(){

        $sliders = slider::all();
        dd($sliders);
        return view('Index');
    }
}
