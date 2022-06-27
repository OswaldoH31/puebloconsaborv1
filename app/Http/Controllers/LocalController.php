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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        //$comidas = Comidas::all();
        return view('Proveedor.agregarlocal',$datos,['logos'=>$logos ])->with([
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
    
        $request->validate([
            
            'nombre' => ['required', 'regex:/^(?=.{8,50}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/','unique:locals'],
            'Telefono' => ['required','digits:10'],
            'sitioweb' => ['required','url'],
            'descripcion' => ['required','string','max:255'],
            'CP' => ['required','regex:/^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:locals'],
            'Municipio'  => ['required','string'],
            'Colonia'  => ['required','string'],
            'Calle'  => ['required','string'],
            'Numerolocal' => ['required','numeric'],
            //'rangoprecio.*'=> ['required','numeric'],
            //'destacado.*'=> ['in:Bar con musica,Grupos grandes,Comida local,Pueblo con sabor,Reuniones de negocios,Ocaciones especiales'],
            
            'Distintivo' => ['required'],
            'IVA' => ['required'],
            'propina' => ['required'],
            'facturacion' => ['required'],
            'tipo_establecimiento' => ['required'],
            'precio' => ['required'],
            'file'=>['required','mimes:jpg,jpeg,png'],


        ]);
        


        $imagenes = $request->file('file')->store('public/local');
        $file = Storage::url($imagenes);

        //$estado='1';
        //$imagenes = $request->file('file')->store('local','images');
        //$file = Storage::url($imagenes);
        

        $locales1 = Local::create([

            'nombre' => $request->nombre,
            'Municipio' => $request->Municipio,
            'Colonia' => $request->Colonia,
            'Calle' => $request->Calle,
            'Numerolocal' => $request->Numerolocal,
        
            'descripcion' => $request->descripcion,
            'Distintivo' => $request->Distintivo,
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

        echo $locales1;
        exit();
        
        return redirect('Locales');
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

        

        return view('Proveedor.editarlocal',$datos,compact('local','logos','destacado','comidas','dietas_especiales','tipo_establecimiento','precio','tipo_servicio','rangoprecio','rangoprecio1','rangoprecio2'));
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
    
        $local=Local::findOrFail($id);
        
        $local->nombre = $request->nombre;
        $local->Municipio = $request->Municipio;
        $local->Colonia = $request->Colonia;
        $local->Calle = $request->Calle;
        $local->Numerolocal = $request->Numerolocal;
        $local->descripcion = $request->descripcion;
        $local->Distintivo = $request->Distintivo;
        $local->CP = $request->CP;
        $local->Telefono = $request->Telefono;
        $local->sitioweb = $request->sitioweb;
        $local->email = $request->email;

        $local->rangoprecio = implode('-',$request->rangoprecio);
        $local->dietas_especiales = implode(',',$request->dietas_especiales);
        $local->comidas = implode(',',$request->comidas);
        $local->destacado = implode(',',$request->destacado);
        $local->tipo_servicio = implode(',',$request->tipo_servicio);
        $local->precio = implode(',',$request->precio);
        $local->tipo_establecimiento = implode(',',$request->tipo_establecimiento);
        
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

        return redirect('/Locales');
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
        return redirect('/Locales');
    }
}
