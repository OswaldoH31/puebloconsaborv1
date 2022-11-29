<?php

namespace App\Http\Controllers;

use App\Models\Bebidas;
use App\Models\Local;
use App\Models\Logo;
use App\Models\Menu;
use App\Models\Pie;
use App\Models\Platillos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Proveedor');
    }
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
        return view('Proveedor.Agregarmenu',$datos,['logos'=>$logos , 'local'=>$local]);
    }


    public function Menu(Request $request)
    {
        /*
        $LocalP=Local::Search($request->id);
        $LocalP->each(function($LocalP){
          $LocalP->id;
        });*/


        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $Locales =Local::all();

        /*$Comentarios = Local::join('comentarios','locals.id', '=' , 'comentarios.local_id') 
        ->select('comentarios.local_id','comentarios.Titulo','comentarios.Descripcion','comentarios.Fecha','comentarios.Fecha_Visita')
        ->where('comentarios.local_id','=',17)
        ->paginate(2);*/

        return view('Proveedor.Menu',$datos,['logos'=>$logos , 'Locales'=>$Locales ]);
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


        $Platillos = Local::join('platillos','locals.id', '=' , 'platillos.local_id') 
        ->select('platillos.id','platillos.local_id','platillos.Nombre','platillos.Costo','platillos.Imagen')
        ->where('platillos.local_id','=',$id)
        ->orderBy('id','DESC')
        ->paginate(5);

        $Bebidas = Local::join('bebidas','locals.id', '=' , 'bebidas.local_id') 
        ->select('bebidas.id','bebidas.local_id','bebidas.Nombre','bebidas.Costo','bebidas.Imagen')
        ->where('bebidas.local_id','=',$id)
        ->orderBy('id','DESC')
        ->paginate(5);

        $Comentarios = Local::join('comentarios','locals.id', '=' , 'comentarios.local_id') 
        ->select('comentarios.local_id','comentarios.Titulo','comentarios.Descripcion','comentarios.Fecha','comentarios.Fecha_Visita')
        ->where('comentarios.local_id','=',$id)
        ->paginate(2);

        

        /*echo $Bebidas, $Platillos;
        exit();
        */

        $local_ids=DB::table('platillos')
        ->select('local_id')
        ->orderBy('id','asc')
        ->get();

        /*echo $local_ids;
        exit();*/

        /*$Menus=DB::table('platillos')
        ->select('Nombre','Descripcion','Costo','Imagen','local_id')
        ->orderBy('id','asc')
        ->paginate(2);
        

        $Bebidas=DB::table('bebidas')
        ->select('Nombre','Costo','Imagen','local_id')
        ->orderBy('id','asc')
        ->paginate(2);
        */

        return view('Proveedor.Menu', $datos,['logos'=>$logos , 'local'=>$local, 'Platillos'=>$Platillos,'Bebidas'=>$Bebidas, 'local_ids' => $local_ids, 'Comentarios'=>$Comentarios ]);
   
    }


    public function mostrarbebida($id){

        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $local = Local::findOrFail($id);

        $Listabebidas=DB::table('bebidas')
        ->select('bebidas.id','bebidas.local_id','bebidas.Nombre','bebidas.Costo','bebidas.Imagen')
        ->where('bebidas.local_id','=',$id)
        ->get();

        $bebidas=DB::table('bebidas')
        ->select('bebidas.local_id')
        ->where('bebidas.local_id','=',$id)
        ->get();


        return view('Proveedor.listabebidas',$datos,compact('logos','Listabebidas','bebidas'));

   
    }


    public function bebida($id)
    {
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $Bebidas = Local::join('bebidas','locals.id', '=' , 'bebidas.local_id') 
        ->select('bebidas.local_id','bebidas.Nombre','bebidas.Costo','bebidas.Imagen')
        ->where('bebidas.local_id','=',$id)
        ->paginate(2);

        echo $Bebidas;
        exit();

        return view('Proveedor.listabebidas',$datos,compact('logos','Listabebidas','Bebidas'));
    }


    public function mostrarplatillo($id)
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


        return view('Proveedor.listaplatillos',$datos,compact('logos','Listaplatillos','platillos'));
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

    public function search(Request $request){
        
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $busqueda = $request['buscar'];
        
        $Consultas=DB::table('locals') 
                    ->select('id','Descripcion','Nombre','Municipio','Colonia','Comidas','Destacado','Tipo_servicio','Tipo_establecimiento','File','estado')
                    ->where('nombre','like', '%'.$busqueda.'%')
                    ->orwhere('colonia','LIKE','%'.$busqueda.'%')
                    ->orwhere('Destacado','LIKE','%'.$busqueda.'%')
                    ->orwhere('Comidas','LIKE','%'.$busqueda.'%')
                    ->orwhere('Tipo_servicio','LIKE','%'.$busqueda.'%')
                    ->paginate(4);
        $Consultas->appends(['buscar'=>$busqueda]);

        return view('busquedas.show',$datos,compact('Consultas','logos','busqueda'));

    }


}
