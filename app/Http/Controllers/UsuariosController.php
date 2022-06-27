<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Logo;
use App\Models\Pie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
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
        $usuarios = User::all();


        $texto=trim($request->get('texto'));
        //$Usuarios=DB::table('users')
                    //->select('id','name','firstname','lastname','gender','birthday','phone','email','user','Rol_Id')
                    //->where('firstname','LIKE','%'.$texto.'%')
                    //->orWhere('name','LIKE','%'.$texto.'%')
                    //->orderBy('id','asc')
                    //->paginate(1);
              
        $Usuarios = User::with('image')
                    ->select('id','Nombre','Apellido_paterno','Apellido_materno','Genero','Fecha_nacimiento','Telefono','email','Usuario','Rol_Id')
                    ->paginate(1);
        

        $perfiles = Image::join('users','users.id', '=' , 'images.imageable_id')
        ->select('images.path', 'images.imageable_id')
        ->paginate(1);

        return view('Administrador.listausuarios',$datos, compact('Usuarios','texto','logos','usuarios','perfiles'));
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
