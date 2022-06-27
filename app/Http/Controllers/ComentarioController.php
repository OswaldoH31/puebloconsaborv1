<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'puedes comentar';
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
        $ids =  $request->local_id;
        $fecha = Carbon::now();

        Comentario::create([

            'Titulo' => $request->Titulo,
            'Descripcion' => $request->Descripcion,
            //'Fecha'=>strftime("%d de %B de %Y", strtotime($fecha)),
            'Fecha'=> $fecha->format('y-m-d'),
            'Fecha_Visita'=>$request->FechaVisita,
            'Foto' => $request->Foto,
            'local_id' => $request->local_id,
            'user_id' => Auth::user()->id,
        ]);
        

        return redirect('Directorio/'.$ids);

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
