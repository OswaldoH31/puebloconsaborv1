<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\Logo;
use App\Models\Pie;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
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
        $Solicitudes=Local::orderBy('id','DESC')
                    ->get();
        
        return view('Administrador.Solicitudes',$datos,compact('Solicitudes','logos'));
        
    }


    public function UpdateStatusSoli(Request $request){
        $SoliUpdate = Local::findOrFail($request->id)->update(['estado' => $request->Estado]); 
    
        if($request->Estado == 1)  {
            $newStatus ='<h4 class="ti-lo">Estatus</h4>
            <div class="lineas"><div class="diamond"></div></div>
            <div class="bnes"><button type="button" class="btn  btn-lg  btn-success" >Aceptado</button></div>';
            
        }else{
            $newStatus = '<h4 class="ti-lo">Estatus</h4>
            <div class="lineas"><div class="diamond"></div></div>
            <div class="bnes"><button type="button" class="btn btn-lg btn-danger">Rechazado</button></div>';
        }
        
    
        return response()->json(['var'=>''.$newStatus.'']);

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
