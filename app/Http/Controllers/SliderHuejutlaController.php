<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Pie;
use App\Models\SliderHuejutla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderHuejutlaController extends Controller
{
    public function index()
    {
        //
        $datos['pies']=Pie::paginate(1);
        $datos['slider_huejutlas']=SliderHuejutla::paginate(1);
        $logos = Logo::all();
        $slider_huejutlas = SliderHuejutla::all();

        return view('Administrador.sliderHuejutla.index',$datos,compact('logos'));
    }

    public function edit($id)
    {
        //
        $logos = Logo::all();
        $datos['pies']=Pie::paginate(1);

        $slider_huejutla=SliderHuejutla::findOrFail($id);
        return view('Administrador.sliderHuejutla.edit',$datos, compact('slider_huejutla','logos'));
    }

    public function update(Request $request,$id)
    {
        //
        $datos['slider_huejutlas']=SliderHuejutla::paginate(1);
        $datossliderHuejutla = request()->except(['_token', '_method']);

        if($request->hasFile('nombre')){

            $sliderHuejutla=SliderHuejutla::findOrFail($id);
            Storage::delete('public/'.$sliderHuejutla->nombre);
            $datossliderHuejutla['nombre']=$request->file('nombre')->store('uploads','public');

        }

        SliderHuejutla::where('id','=',$id)->update($datossliderHuejutla);
        $sliderHuejutla=SliderHuejutla::findOrFail($id);
        return redirect('sliderHuejutla');
    }


}
