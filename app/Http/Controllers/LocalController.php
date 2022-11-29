<?php

namespace App\Http\Controllers;

use App\Post;
use App\Models\Comidas;
use App\Models\Local;
use App\Models\Logo;
use App\Models\Pie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class LocalController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Proveedor');
        $this->middleware('Admin',['only'=>['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        
        $caracteristicas=DB::table('tbl_caracteristicas')
                ->orderBy('id','asc')
                ->get();

        $tiposcomidas=DB::table('tbl_tiposcomida')
                ->orderBy('id','asc')
                ->get();

        $dietasespeciales=DB::table('tbl_dietasespeciaeles')
                ->orderBy('id','asc')
                ->get();

        $establecimietos=DB::table('tbl_tipoestablecimiento')
                ->orderBy('id','asc')
                ->get();

        $precios=DB::table('tbl_categorialocal')
                ->orderBy('id','asc')
                ->get();

        $servicios=DB::table('tbl_servicios')
                ->orderBy('id','asc')
                ->get();
        
     
        
        return view('Proveedor.agregarlocal',$datos,compact('logos','caracteristicas','tiposcomidas','dietasespeciales','establecimietos','precios','servicios'))->with([
            'users' => $request->user(),
        ]);

        //$logos = Logo::all();
        //return view('Proveedor.agregarlocal', ['logos'=>$logos ]);
    }

    public function locales(Request $request)
    {
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $id = auth()->id();
        $Locales = Local::where('locals.user_id', 'LIKE', '%' . $id . '%')->limit(25)->get();
    
        return view('Proveedor.locales',$datos,['logos'=>$logos, 'Locales'=>$Locales])->with([
            'users' => $request->user(),
        ]);



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
        //return $request;
        
        $request->validate([
            
            'nombre' => ['required', 'regex:/^[^$%&|<>#="*]+$/','unique:locals'],
            'Telefono' => ['required','digits:10','numeric'],
            'sitioweb' => ['required','url'],
            'descripcion' => ['required','string','regex:/^[^$%&|<>#="*]+$/','max:255'],
            'CP' => ['required','regex:/^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:locals'],
            'Municipio'  => ['required','string','regex:/^[^$%&|<>#="*]+$/'],
            'Colonia'  => ['required','string','regex:/^[^$%&|<>#="*]+$/'],
            'Calle'  => ['required','string','regex:/^[^$%&|<>#="*]+$/'],
            'Numerolocal' => ['required','numeric'],
            //'rangoprecio.*' => ['required','numeric','regex:/^[\d]{0,11}(\.[\d]{1,2})?$/'],
            'rangoprecio.0' => ['required','numeric','regex:/^[\d]{0,11}(\.[\d]{1,2})?$/'],
            'rangoprecio.1' => ['required','numeric','regex:/^[\d]{0,11}(\.[\d]{1,2})?$/','gt:rangoprecio.0'],
            'destacado'=>['required'],
            'comidas'=>['required'],
            'dietas_especiales'=>['required'],
            'tipo_servicio'=>['required'],
            
            'Distintivo' => ['required'],
            'inicio_vigencia' => ['exclude_if:Distintivo,NO','required','date'],
            'termina_vigencia' => ['exclude_if:Distintivo,NO','required','date','after:inicio_vigencia'],
            
            'facturacion' => ['required'],
            'montofactura' => ['numeric'],
            'propina' => ['exclude_if:facturacion,NO','required'],
            'IVA' => ['exclude_if:facturacion,NO','required'],
            'tipo_establecimiento' => ['required'],
            'precio' => ['required'],
            'file'=>['required','mimes:jpg,jpeg,png'],


        ],
        [
            'rangoprecio.0.required' =>'El campo rango minimo es obligatorio',
            'rangoprecio.1.required' =>'El campo rango maximo es obligatorio',
            
            'rangoprecio.0.numeric' =>'El campo debe ser un numero',
            'rangoprecio.1.numeric' =>'El campo debe ser un numero',
            'rangoprecio.0.regex' =>'El formato del campo es invalido',
            'rangoprecio.1.regex' =>'El formato del campo es invalido',
            'rangoprecio.1.gt' =>'El campo rango maximo debe ser mayor al rango minimo',
            
            
        ]
            );
        

        
       
        $imagenes = $request->file('file')->store('public/local');
        $file = Storage::url($imagenes);

        //$estado='1';
        //$imagenes = $request->file('file')->store('local','images');
        //$file = Storage::url($imagenes);
        
        
        if($request->montofactura == ''){
            echo $request-> montofactura = 0;
            
        }else{
            echo "Si trae datos";
            
        }
        
        
        if($request->inicio_vigencia == ''){
            $request-> inicio_vigencia = null;
            $request-> termina_vigencia = null;
        }else{
            echo "Trae datos";
        }
            

        $locales1 = Local::create([

            'nombre' => $request->nombre,
            'Municipio' => $request->Municipio,
            'Colonia' => $request->Colonia,
            'Calle' => $request->Calle,
            'Numerolocal' => $request->Numerolocal,
        
            'descripcion' => $request->descripcion,
            'Distintivo' => $request->Distintivo,
            'inicio_vigencia' => $request->inicio_vigencia,
            'termina_vigencia' => $request->termina_vigencia,
            'CP' => $request->CP,
            'Telefono' => $request->Telefono,
            'sitioweb' => $request->sitioweb,
            'email' => $request->email,

            'rangoprecio' => implode('-',$request->input('rangoprecio')),
            'dietas_especiales' => implode(',',$request->input('dietas_especiales')),
            'comidas' => implode(',',$request->input('comidas')) ,
            'destacado' => implode(',',$request->input('destacado')),
            'tipo_servicio' =>  implode(',',$request->input('tipo_servicio')),
            
            'precio' => $request->precio,
            'tipo_establecimiento' => $request->tipo_establecimiento,
            'propina' => $request->propina,
            'IVA' => $request->IVA,
            'facturacion' => $request->facturacion,
            'montofactura' => $request->montofactura,
            'file' => $file,

            'estado' => '0',
            'user_id' => Auth::user()->id,
        ]);

        
        
        return redirect('Locales')->with('agregar','ok');;
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $texto=trim($request->get('texto'));
        $Locales=DB::table('locals')
                    ->select('id','user_id','Nombre','Numerolocal','Municipio','Colonia','Calle','CP','Telefono','Sitioweb','Email','Descripcion','Distintivo','Estado','file')
                    ->where('Nombre','LIKE','%'.$texto.'%')
                    ->orderBy('id','asc')
                    ->paginate(1);

        $propietarios = User::join('locals','users.id', '=' , 'locals.user_id')
       ->select('users.Nombre','users.Apellido_paterno','users.Apellido_materno')
        ->paginate(1);

        return view('Administrador.listadolocales',$datos , compact('Locales','texto','logos','propietarios'));
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
        $local=Local::findOrFail($id);
        
        $caracteristicas=DB::table('tbl_caracteristicas')
                ->orderBy('id','asc')
                ->get();

        $tiposcomidas=DB::table('tbl_tiposcomida')
                ->orderBy('id','asc')
                ->get();

        $dietas=DB::table('tbl_dietasespeciaeles')
                ->orderBy('id','asc')
                ->get();

        $establecimietos=DB::table('tbl_tipoestablecimiento')
                ->orderBy('id','asc')
                ->get();

        $categorialocal=DB::table('tbl_categorialocal')
                ->orderBy('id','asc')
                ->get();

        $servicios=DB::table('tbl_servicios')
                ->orderBy('id','asc')
                ->get();
                

        $rangoprecio = explode('-' , $local['rangoprecio']);
        $rangoprecio1 = $rangoprecio[0];
        $rangoprecio2 = $rangoprecio[1];
        $destacado = explode(',' , $local['destacado']);
        $comidas = explode(',' , $local['comidas']);
        $dietas_especiales = explode(',' , $local['dietas_especiales']);
        $tipo_establecimiento = explode(',' , $local['tipo_establecimiento']);
        $precio = explode(',' , $local['precio']);
        $tipo_servicio = explode(',' , $local['tipo_servicio']);
        
        
      
        //var_dump($destacado);
       

        

        return view('Proveedor.editarlocal',$datos,compact('caracteristicas','tiposcomidas','dietas','establecimietos','categorialocal','servicios','local','logos','destacado','comidas','dietas_especiales','tipo_establecimiento','precio','tipo_servicio','rangoprecio','rangoprecio1','rangoprecio2'));
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
        
       
        $request->validate([
            
            'nombre' => ['required', 'regex:/^[^$%&|<>#="*]+$/'],
            'Telefono' => ['required','digits:10','numeric'],
            'sitioweb' => ['required','url'],
            'descripcion' => ['required','string','max:255'],
            'CP' => ['required','regex:/^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'Municipio'  => ['required','string'],
            'Colonia'  => ['required','string'],
            'Calle'  => ['required','string'],
            'Numerolocal' => ['required','string'],
            'rangoprecio.*' => ['required','numeric','regex:/^[\d]{0,11}(\.[\d]{1,2})?$/'],
            'destacado'=>['required_without_all'],
            'comidas'=>['required_without_all'],
            'dietas_especiales'=>['required_without_all'],
            'tipo_servicio'=>['required_without_all'],
            'file'=>['mimes:jpg,jpeg,png'],
            'Distintivo' => ['required'],
            'inicio_vigencia' => ['exclude_if:Distintivo,NO','required','date'],
            'termina_vigencia' => ['exclude_if:Distintivo,NO','required','date','after:inicio_vigencia'],
            'montofactura' => ['numeric'],
            'tipo_establecimiento' => ['required'],
            'precio' => ['required'],


        ],
        [
            'rangoprecio.0.numeric' =>'El campo debe ser un numero',
            'rangoprecio.1.numeric' =>'El campo debe ser un numero',
            'rangoprecio.0.regex' =>'El formato del campo es invalido',
            'rangoprecio.1.regex' =>'El formato del campo es invalido',
        ]
            );
        


        if($request->montofactura == ''){
            echo $request-> montofactura = 0;
            
        }else{
            echo "Si trae datos";
            
        }
       
        
    
        $local=Local::findOrFail($id);
        
        $local->nombre = $request->nombre;
        $local->Municipio = $request->Municipio;
        $local->Colonia = $request->Colonia;
        $local->Calle = $request->Calle;
        $local->Numerolocal = $request->Numerolocal;
        $local->descripcion = $request->descripcion;
        $local->Distintivo = $request->Distintivo;
        $local->inicio_vigencia = $request->inicio_vigencia;
        $local->termina_vigencia = $request->termina_vigencia;
        $local->CP = $request->CP;
        $local->Telefono = $request->Telefono;
        $local->sitioweb = $request->sitioweb;
        $local->email = $request->email;

        $local->rangoprecio = implode('-',$request->rangoprecio);
        $local->dietas_especiales = implode(',',$request->dietas_especiales);
        $local->comidas = implode(',',$request->comidas);
        $local->destacado = implode(',',$request->destacado);
        $local->tipo_servicio = implode(',',$request->tipo_servicio);
        $local->precio = $request->precio;
        $local->tipo_establecimiento = $request->tipo_establecimiento;
        
        $local->propina = $request->propina;
        $local->IVA = $request->IVA;
        $local->facturacion = $request->facturacion;
        $local->montofactura = $request->montofactura;

        
        
        if($request->hasFile('file')){

            $foto=Local::findOrFail($id);
            Storage::delete($foto->file);

            $imagenes = $request->file('file')->store('public/local');
            $file = Storage::url($imagenes);

            $local->file = $file;
            

        }

        $local->save();

        return redirect('/Locales')->with('actualizar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Local::destroy($id);
        return redirect('/Locales')->with('eliminar','ok');
    }
    
    
    public function cancelar($id)
    {

        $local=Local::findOrFail($id);
        
        if($local->estado == 2){
            $local->estado = 1;
        }else{
            $local->estado = 2;
        }
        
    

        $local->save();

        return redirect('/Locales')->with('cancelar','ok');

    }
}
