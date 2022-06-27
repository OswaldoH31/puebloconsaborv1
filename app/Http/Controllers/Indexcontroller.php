<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Pie;
use Illuminate\Http\Request;
use App\Models\Slider;

class Indexcontroller extends Controller
{
    public function index()
    {
        $datos['pies']=Pie::paginate(1);
        $sliders = Slider::all();
        $logos = logo::all();
        return view('Index',$datos, ['sliders' => $sliders, 'logos'=>$logos ]);
    }


   
    
    
}
