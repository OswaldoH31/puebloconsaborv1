<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\Logo;
use App\Models\Pie;
use App\Models\Platillo;
use App\Models\Platillos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $ListaPlatillos =Platillos::all();

        return view('Proveedor.listaplatillos',$datos,compact('logos','ListaPlatillos'));
        
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
        
        $imagenes = $request->file('Imagen')->store('public/menu');
        $file = Storage::url($imagenes);

        $local_id= $request->local_id;


        Platillos::create([

            'Nombre' => $request->Nombre,
            'Descripcion' => $request->Descripcion,
            'Costo' => $request->Costo,
            'Imagen' => $file,
            'local_id' => $request->local_id,


        ]);


        return redirect('/Menu/'.$local_id);

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

        

        $Listaplatillos=DB::table('platillos')
        ->select('platillos.id','platillos.descripcion','platillos.local_id','platillos.Nombre','platillos.Costo','platillos.Imagen')
        ->where('platillos.local_id','=',$id)
        ->get();

       

        return view('Proveedor.listaplatillos',$datos,compact('logos','Listaplatillos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $platillo = Platillos::findOrFail($id);
    
        return view('Proveedor.editarplatillo',$datos,compact('logos','platillo'));
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
        $ids =  $request->local_id;
        
        $platillo= Platillos::findOrFail($id);
        
        $platillo->Nombre = $request->Nombre;
        $platillo->Descripcion = $request->Descripcion;
        $platillo->Costo = $request->Costo;

        if($request->hasFile('Imagen')){

            $foto=Platillos::findOrFail($id);
            Storage::delete($foto->Imagen);

            $imagenes = $request->file('Imagen')->store('public/menu');
            $file = Storage::url($imagenes);

            $platillo->Imagen = $file;
            

        }

        $platillo->save();

        return redirect('/Listaplatillos/'.$ids);


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $platillo= Platillos::findOrFail($id);
        
       $ids = $platillo->local_id;

        Platillos::destroy($id);

        return redirect('/Listaplatillos/'.$ids);
    }
}
