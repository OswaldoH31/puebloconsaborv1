<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Pie;
use App\Models\UserCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        return view('2fa' ,$datos, ['logos'=>$logos ]);
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
            'codigo'=>'required',
        ]);

        $find = UserCode::where('user_id', auth()->id())
            ->where('codigo', $request->codigo)
            ->where('updated_at', '>=', now()->subMinutes(2))
            ->first();

        if (!is_null($find)) {
            Session::put('user_2fa', auth()->id());
            return redirect()->route('home');
        }

        return back()->with('error', 'Ingresaste un codigo incorrecto.');
    }

    public function resend()
    {
        auth()->user()->generateCode();

        return back()->with('success', 'Le enviamos un codigo a su correo.');
    }
}
