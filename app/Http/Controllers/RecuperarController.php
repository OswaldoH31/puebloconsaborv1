<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Usuario;
use App\Models\Logo;
use App\Models\Pie;
use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RecuperarController extends Controller
{
    public function index()
    {
        
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $preguntas = Pregunta::where('id','>', 0)->get();
        return view('auth.recuperar.usuario',$datos, compact('preguntas','logos'));
 
    }

    public function buscar(Request $request)
    {

        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $usuario = $request->Usuario;


        $Consultas = Respuesta::join('users','respuestas.user_id', '=' , 'users.id') 
                        ->join('preguntas','respuestas.pregunta_id', '=' , 'preguntas.id')
                        ->where('users.Usuario','=',$usuario)   
                        ->get();
        
       
        
        $preguntas = Pregunta::where('id','>', 0)->get();
        return view('auth.recuperar.mostrar',$datos, compact('preguntas','Consultas','logos'));
 
    }


    public function update(Request $request)
    {

        
        $respuesta = $request->respuesta;
        $id = $request->user_id;

        DB::table('users')
                    ->select('id','Usuario','password')
                    ->where('users.id','=',$id)
                    ->update(['password'=>Hash::make($respuesta)]);
                    

        

        return redirect('/ContraseniaModificada');


    }


    public function mostrar()
    {
        
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $preguntas = Pregunta::where('id','>', 0)->get();
        return view('Usuario.ContraseniaModificada',$datos, compact('preguntas','logos'));
 
    }

}
