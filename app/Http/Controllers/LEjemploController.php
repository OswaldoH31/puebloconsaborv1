<?php

namespace App\Http\Controllers;

use App\Post;
use App\Models\Comidas;
use App\Models\Local;
use App\Models\Logo;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $logos = Logo::all();
        //$comidas = Comidas::all();
        return view('Proveedor.agregarlocal',['logos'=>$logos ])->with([
            'users' => $request->user(),
            
        ]);

        //$logos = Logo::all();
        //return view('Proveedor.agregarlocal', ['logos'=>$logos ]);
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
        //dd($request->all());

       /* $input = $request->all();
        $input['categoria'] = $request->input('categoria');
        $input['comidas'] = $request->input('comidas');
        $input['destacado'] = $request->input('destacado');
        $input['tipo_servicio'] = $request->input('tipo_servicio');
        
        Local::create($input);
        */

        /*
        $categoria = implode(",", $request->get('categoria'));
        $comidas = implode(",", $request->get('comidas'));
        $destacado = implode(",", $request->get('destacado'));
        $tipo_servicio = implode(",", $request->get('tipo_servicio'));
        $precio = implode(",", $request->get('precio'));
        
        

        $this->Local->create([

            'nombre' => $request->get('nombre'),
            'Direccion' => $request->get('Direccion'),
            'CP' => $request->get('CP'),
            'Telefono' => $request->get('Telefono'),
            'sitioweb' => $request->get('sitioweb'),
            'email' => $request->get('email'),

            'tipo_establecimiento' => $request->get('tipo_establecimiento'),
            'propina' => $request->get('propina'),
            'IVA' => $request->get('IVA'),
            'facturacion' => $request->get('facturacion'),
            'montofactura' => $request->get('montofactura'),
            'file' => $request->get('file'),
            'status' => $request->get('status'),
            'user_id' => $request->get('user_id'),

            'categoria' =>$categoria,
            'comidas' =>$comidas,
            'destacado' =>$destacado,
            'tipo_servicio' =>$tipo_servicio,
            'precio' => $precio,
        ]);*/

       

        /*$local = new Local();

        $local->nombre = $request->nombre;
        $local->Direccion = $request->Direccion;
        $local->CP = $request->CP;
        $local->Telefono = $request->Telefono;
        $local->sitioweb = $request->sitioweb;
        $local->email = $request->email;
        $local->categoria = implode(',',$request->categoria);
        $local->comidas = implode(',',$request->comidas);
        $local->destacado = implode(',',$request->destacado);
        $local->tipo_servicio = implode(',',$request->tipo_servicio);
        $local->precio = $request->precio;
        //$local->tipo_establecimiento = implode(',',$request->tipo_establecimiento);
        $local->propina = $request->propina;
        $local->IVA = $request->IVA;
        $local->facturacion = $request->facturacion;
        $local->montofactura = $request->montofactura;
        $local->file = $request->file;
        $local->status = $request->status;
        $local->user_id = $request->user_id;

        $local->save();*/

        /*
        $categoria = implode(',',$request->input('categoria')); 
        $comidas = implode(',',$request->input('comidas')); 
        $destacado = implode(',',$request->input('destacado')); 
        $tipo_servicio = implode(',',$request->input('tipo_servicio')); 
        */
        
        
        /*
        Local::create([

           


            'nombre' => $request->nombre,
            'Direccion' => $request->Direccion,
            'CP' => $request->CP,
            'Telefono' => $request->Telefono,
            'sitioweb' => $request->sitioweb,
            'email' => $request->email,


            /*'categoria' => implode(',',$request->categoria),
            'comidas' =>implode(',',$request->comidas),
            'destacado' => implode(',',$request->destacado),
            'tipo_servicio' => implode(',',$request->tipo_servicio),
            'precio' => $request->precio,

            'categoria' => implode(',',$request->input('categoria')),
            'comidas' => implode(',',$request->input('comidas')) ,
            'destacado' => implode(',',$request->input('destacado')),
            'tipo_servicio' =>  implode(',',$request->input('tipo_servicio')),
            

            'categoria' => $request->$categoria,
            'comidas' => $request->$comidas ,
            'destacado' => $request->$destacado,
            'tipo_servicio' =>  $request->$tipo_servicio,


            'precio' => $request->precio,
            'tipo_establecimiento' => $request->tipo_establecimiento,
            'propina' => $request->propina,
            'IVA' => $request->IVA,
            'facturacion' => $request->facturacion,
            'montofactura' => $request->montofactura,
            'file' => $request->file,
            'status' => $request->status,
            'user_id' => $request->user_id,


        ]);
        */


        /*$services = $request->input('services');
        foreach($services as $service){
        orders::create($service);
        }*/


        //$Locales=DB::table('locales')->
        
        /*$data = new Local;
        if(isset($_POST["save"])){
            $names = $_POST["names"];
            $sports =$_POST["sports"];
            $array = implode(', ', $sports);
            $data->name = $names;
            $data->sport = $array;
            $data->save();
            $ids = Local::all();
            return view('data', ['ids'=>$ids]);
            return view('Proveedor.index');
        }*/


        /*$inputValue = $request->all();
        $arrayTostring = implode(',',$request->input('comida'));

        $inputValue['comida'] = $arrayTostring;
        Local::create($inputValue);
        

        $categoria = implode(',',$request->input('categoria')); 
        $comidas = implode(',',$request->input('comidas')); 
        $destacado = implode(',',$request->input('destacado')); 
        $tipo_servicio = implode(',',$request->input('tipo_servicio')); 
        
        
        $input = $request->all();
        $input['categoria'] = implode(',',$request->input('categoria'));
        //$input['comidas'] = $comidas;
        //$input['destacado'] = $destacado ;
        //$input['tipo_servicio'] = $tipo_servicio;
        
        
        
        echo $input;
        exit();

        /*
        $local = new Local();

        $local->nombre = $request->nombre;
        $local->Direccion = $request->Direccion;
        $local->CP = $request->CP;
        $local->Telefono = $request->Telefono;
        $local->sitioweb = $request->sitioweb;
        $local->email = $request->email;

        $local->categoria = implode(',',$request->input('categoria')); 
        $local->comidas = implode(',',$request->input('comidas')); 
        $local->destacado = implode(',',$request->input('destacado')); 
        $local->tipo_servicio = implode(',',$request->input('tipo_servicio')); 

        $local->precio = implode($request->input('precio'));
        $local->tipo_establecimiento = implode($request->input('tipo_establecimiento'));
        $local->propina = $request->propina;
        $local->IVA = $request->IVA;
        $local->facturacion = $request->facturacion;
        $local->montofactura = $request->montofactura;
        $local->file = $request->file;
        $local->status = $request->status;
        $local->user_id = $request->user_id;
        */

        //echo $local;
        //exit();

        //$local->save();

        /*Local::create($input);*/
        

        return view('Proveedor.index');
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
