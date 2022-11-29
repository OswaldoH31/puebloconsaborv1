<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Pie;
use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\Rol;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreguntaController extends Controller
{
    public function index()
    {
        
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $preguntas = Pregunta::where('id','>', 0)->get();
        return view('Pregunta.index',$datos, compact('preguntas','logos'));

        
        
    }

    public function store(Request $request)
    {
    


        $pregunta = Respuesta::create([

            'respuesta' => $request->respuesta,
            'pregunta_id' => $request->pregunta_id,
            'user_id' => Auth::user()->id,
        ]);
        
        return redirect('/Usuario');
    }
}
