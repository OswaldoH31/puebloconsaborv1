<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Pie;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderPrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['pies']=Pie::paginate(1);
        $datos['sliders']=Slider::paginate(1);
        $logos = Logo::all();
        $sliders = Slider::all();

        return view('Administrador.slider.index',$datos,compact('logos','sliders'));
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
     * @param  \App\Models\SliderPrincipal  $sliderPrincipal
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SliderPrincipal  $sliderPrincipal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $logos = Logo::all();
        $datos['pies']=Pie::paginate(1);

        $slider=Slider::findOrFail($id);
        return view('Administrador.slider.edit',$datos, compact('slider','logos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SliderPrincipal  $sliderPrincipal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //

        $datos['sliders']=Slider::paginate(1);
        $datosslider = request()->except(['_token', '_method']);

        if($request->hasFile('nombre')){

            $slider=Slider::findOrFail($id);
            Storage::delete('public/'.$slider->nombre);
            $datosslider['nombre']=$request->file('nombre')->store('uploads','public');

        }

        Slider::where('id','=',$id)->update($datosslider);

        $slider=Slider::findOrFail($id);
        return redirect('slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SliderPrincipal  $sliderPrincipal
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
