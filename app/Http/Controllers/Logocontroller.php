<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;

class Logocontroller extends Controller
{
    public function logo()
    {
        $logos = logo::all();
        dd($logos);
        return view('layouts/app');
    }
}
