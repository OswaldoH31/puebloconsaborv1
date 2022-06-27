<?php

namespace App\Http\Controllers;
use App\Models\Pie;
use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use App\Models\Logo;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    //
    public function index(){
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        return view('Contactanos.index', $datos,compact('logos'));
    }
    public function store(Request $request){
        $request->validate([
            'names'=>'required',
            'telefono'=>'required|digits:10',
            'email'=>'required|email',
            'mensaje'=>'required',
        ]);
        $correo=new ContactoMailable($request->all());
        Mail::to('soporte.puebloconsaboruthh@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info','Mensaje Enviado');
    }
}
