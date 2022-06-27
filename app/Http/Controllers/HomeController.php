<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Pie;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('User',['only'=>['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $datos['pies']=Pie::paginate(1);
        $sliders = Slider::all();
        $logos = Logo::all();
        return view('Usuario.home',$datos, compact('sliders','logos'));
        
    }
}
