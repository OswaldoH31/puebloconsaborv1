<?php

namespace App\Http\Controllers;

use App\Models\Bebidas;
use App\Models\Local;
use App\Models\Logo;
use App\Models\Pie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BebidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        
        $request->validate(
            [
            
                'B_Nombre' => ['required', 'string','regex:/^[^$%&|<>#="*]+$/'],
                'B_Costo' => ['required','numeric','regex:/^[\d]{0,11}(\.[\d]{1,2})?$/'],
                'B_Imagen'=>['required','mimes:jpg,jpeg,png'],

            ],
            [
                'B_Nombre.required' =>'El campo es obligatorio',
                'B_Costo.required' =>'El campo es obligatorio',
                'B_Costo.numeric' =>'El campo debe ser númerico',
                'B_Imagen.required' =>'El campo es obligatorio',
                'B_Imagen.mimes' =>'El campo debe ser un archivo de tipo: jpg, jpeg, png',
            ]
        );
        
        $imagenes = $request->file('B_Imagen')->store('public/menu');
        $file = Storage::url($imagenes);

        $local_id= $request->local_id;


        Bebidas::create([

            'Nombre' => $request->B_Nombre,
            'Costo' => $request->B_Costo,
            'Imagen' => $file,
            'local_id' => $request->local_id,


        ]);


        return redirect('/Menu/'.$local_id)->with('success','Bebida');
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
        $Bebidas = Local::join('bebidas','locals.id', '=' , 'bebidas.local_id') 
        ->select('bebidas.local_id','bebidas.Nombre','bebidas.Costo','bebidas.Imagen')
        ->where('bebidas.local_id','=',$id)
        ->paginate(2);

        echo $Bebidas;
        exit();

        return view('Proveedor.listabebidas',$datos,compact('logos','Listabebidas','Bebidas'));
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
        $bebida = Bebidas::findOrFail($id);
    
        return view('Proveedor.editarbebida',$datos,compact('logos','bebida'));
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
        $request->validate(
            [
            
                'B_Nombre' => ['required', 'string'],
                'B_Costo' => ['required','numeric','regex:/^[\d]{0,11}(\.[\d]{1,2})?$/'],
                'B_Imagen'=>['mimes:jpg,jpeg,png'],

            ],
            [
                'B_Nombre.required' =>'El campo es obligatorio',
                'B_Costo.required' =>'El campo es obligatorio',
                'B_Costo.numeric' =>'El campo debe ser númerico',
                'B_Imagen.required' =>'El campo es obligatorio',
                'B_Imagen.mimes' =>'El campo debe ser un archivo de tipo: jpg, jpeg, png',
            ]
        );
        
        $ids =  $request->local_id;
        
        $bebida= Bebidas::findOrFail($id);
        
        $bebida->Nombre = $request->B_Nombre;
        $bebida->Costo = $request->B_Costo;

        if($request->hasFile('B_Imagen')){

            $foto=Bebidas::findOrFail($id);
            Storage::delete($foto->Imagen);

            $imagenes = $request->file('B_Imagen')->store('public/menu');
            $file = Storage::url($imagenes);

            $bebida->Imagen = $file;
            

        }

        $bebida->save();

        return redirect('/Menu/'.$ids)->with('success','actualizarpb');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bebida= Bebidas::findOrFail($id);
        
        $ids = $bebida->local_id;

        Bebidas::destroy($id);

        return redirect('/Menu/'.$ids)->with('success','elimino-bebida');
    }
}
