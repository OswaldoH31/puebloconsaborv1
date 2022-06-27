<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Image;
use App\Models\Local;
use App\Models\Logo;
use App\Models\Opinion;
use App\Models\Pie;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DirectorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();

        $Consultas=DB::table('locals') 
                    ->select('id','Descripcion','Nombre','Municipio','Colonia','Comidas','Destacado','Tipo_servicio','Tipo_establecimiento','File','estado')
                    ->orderBy('id','asc')
                    ->paginate();
        

        return view('Usuario.Directorio',$datos, compact('Consultas','logos'));
    }


    public function buscar(Request $request){

        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
       
       
        $Tipo_establecimiento = $request->get('Tipo_establecimiento'); 
        $Tipo_servicio = $request->get('Tipo_servicio');
        $Comidas = $request->get('Comidas');
        $Precio = $request->get('Precio');


        $Consultas= Local::orderBy('id','DESC')
        ->select('id','Descripcion','Nombre','Municipio','Colonia','Comidas','Destacado','Tipo_servicio','Tipo_establecimiento','File','estado')
        ->Tipo_establecimiento($Tipo_establecimiento)
        ->Tipo_servicio($Tipo_servicio)
        ->Comidas($Comidas)
        ->Precio($Precio)  
        ->paginate(10);  

        return view('Usuario.busqueda',$datos, compact('Consultas','logos'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $datos['pies']=Pie::paginate(1);   
        $logos = Logo::all();
        $local = Local::findOrFail($id);
        

        $Comentarios = User::with(['image'])
        ->join('opinions','opinions.user_id', '=' , 'users.id')
        ->where('opinions.local_id','=',$id)
        ->limit(10)
        ->get();

        

        $Platillos = Local::join('platillos','locals.id', '=' , 'platillos.local_id') 
        ->select('platillos.local_id','platillos.Nombre','platillos.Costo','platillos.Imagen')
        ->where('platillos.local_id','=',$id)
        ->paginate(2);

        
        $Bebidas = Local::join('bebidas','locals.id', '=' , 'bebidas.local_id') 
        ->select('bebidas.local_id','bebidas.Nombre','bebidas.Costo','bebidas.Imagen')
        ->where('bebidas.local_id','=',$id)
        ->paginate(2);
        

        $local_ids=DB::table('platillos')
        ->select('local_id')
        ->orderBy('id','asc')
        ->get();

        return view('Usuario.Menu',$datos,compact('logos','local','Platillos','Bebidas','local_ids','Comentarios') );
    }



    public function listabebidas($id)
    {
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $Listabebidas=DB::table('bebidas')
        ->select('bebidas.id','bebidas.local_id','bebidas.Nombre','bebidas.Costo','bebidas.Imagen')
        ->where('bebidas.local_id','=',$id)
        ->get();

        $bebidas=DB::table('bebidas')
        ->select('bebidas.local_id')
        ->where('bebidas.local_id','=',$id)
        ->get();

        return view('Usuario.listabebidas',$datos,compact('logos','bebidas','Listabebidas'));
    }


    public function listaplatillos($id)
    {
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $local = Local::findOrFail($id);


        $Listaplatillos=DB::table('platillos')
        ->select('platillos.id','platillos.Descripcion','platillos.local_id','platillos.Nombre','platillos.Costo','platillos.Imagen')
        ->where('platillos.local_id','=',$id)
        ->get();

        $platillos=DB::table('platillos')
        ->select('platillos.local_id')
        ->where('platillos.local_id','=',$id)
        ->get();

        return view('Usuario.listaplatillos',$datos,compact('logos','Listaplatillos','platillos'));
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
