<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Pie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PieController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = Logo::all();
        $datos['pies']=Pie::paginate(1);
        return view('Administrador.pie.index',$datos,compact('logos'));
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
        $logos = Logo::all();
        $datos['pies']=Pie::paginate(1);
        
        $pie=Pie::findOrFail($id);
        return view('Administrador.pie.edit',$datos, compact('pie','logos'));
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
        $datos['pies']=Pie::paginate(1);
        $datospie = request()->except(['_token', '_method']);

        if($request->hasFile('Logo')){

            $pie=Pie::findOrFail($id);
            Storage::delete('public/'.$pie->Logo);
            $datospie['Logo']=$request->file('Logo')->store('uploads','public');

        }

        Pie::where('id','=',$id)->update($datospie);

        $pie=Pie::findOrFail($id);
        return redirect('pie');
        //return view('pie.inde',$datos, compact('pie'));
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
