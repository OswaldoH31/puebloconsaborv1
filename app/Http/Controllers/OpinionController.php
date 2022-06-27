<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\Logo;
use App\Models\Opinion;
use App\Models\Pie;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $datos['pies']=Pie::paginate(1);
        $local = Local::findOrFail($id);
        $logos = Logo::all();

        
       

        $Comentarios = User::with(['image'])
        ->join('opinions','opinions.user_id', '=' , 'users.id')
        ->where('opinions.local_id','=',$id)
        ->limit(10)
        ->get();

        //$calificacion = $Comentarios['Calificacion_General'];

        //echo $calificacion;
        //exit();


        return view('Usuario.Escribir-Opinion',$datos, ['logos'=>$logos , 'local'=>$local, 'Comentarios' => $Comentarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $imagenes = $request->file('Foto')->store('public/comentario');
        $file = Storage::url($imagenes);
        
        $local_id= $request->Local_id;
        $fecha = Carbon::now();
        
        //$local_id= $request->local_id;
        //echo $local_id;
        //dd($request->all());
        //exit();
        
        Opinion::create([

            'Calificacion_General' => $request->CalificacionGeneral,
            'Titulo_Opinion' => $request->Titulo_Opinion,
            'Fecha'=> $fecha->format('y-m-d'),
            'Opinion' => $request->Opinion,
            'Tipo_Visita' => $request->Tipo_Visita,
            'Razon_Visita' => $request->Razon_Visita,
        
            'Fecha_Visita' => $request->Fecha_Visita,
            'Cal_Comida' => $request->Cal_Comida,
            'Cal_Servicio' => $request->Cal_Servicio,
            'Cal_Calidad' => $request->Cal_Calidad,
            'Cal_Ambiente' => $request->Cal_Ambiente,
            'Precio' => $request->Precio,
            'Recomendacion' => $request->Recomendacion,
            'Foto' => $file,
            'Certifico' => $request->Certifico,

            'local_id' => $request->Local_id,
            'user_id' => Auth::user()->id,

        ]);

        return redirect('/Directorio/'.$local_id);
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
