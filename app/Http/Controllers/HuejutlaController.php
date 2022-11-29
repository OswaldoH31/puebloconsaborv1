<?php

namespace App\Http\Controllers;

use App\Models\Huejutla;
use App\Models\Logo;
use App\Models\Pie;
use App\Models\SliderHuejutla;
use Illuminate\Http\Request;

class HuejutlaController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('Admin',['only'=>['Huejutla','edit','update']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['pies']=Pie::paginate(1);
        $Huejutlasliders = SliderHuejutla::all();
        $Huejutlas = Huejutla::all();
        $logos = Logo::all();
        return view('Huejutla',$datos, ['Huejutlasliders' => $Huejutlasliders, 'Huejutlas'=>$Huejutlas, 'logos'=>$logos]);
   
    }


    public function Huejutla()
    {
        $datos['pies']=Pie::paginate(1);
        $Huejutlasliders = SliderHuejutla::all();
        $Huejutlas = Huejutla::all();
        $logos = Logo::all();
        return view('Administrador.huejutla.index',$datos, compact('Huejutlasliders','Huejutlas','logos'));
   
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
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $Huejutla=Huejutla::findOrFail($id);
        return view('Administrador.huejutla.edit',$datos, compact('Huejutla','logos'));
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
       // $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        $datosHuejutla = request()->except(['_token', '_method']);

        Huejutla::where('id','=',$id)->update($datosHuejutla);
        $Huejutla=Huejutla::findOrFail($id);

        return redirect('/HuejutlaA');
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
