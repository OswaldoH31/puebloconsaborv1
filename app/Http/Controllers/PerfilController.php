<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Logo;
use App\Models\Pie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class PerfilController extends Controller
{

    public function login(Request $request)
    {
       
        auth()->user()->generateCode();

        return redirect()->route('2fa.index');

        //return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function verificarAdmin(Request $request)
    {
       
        auth()->user()->generateCode();

        return redirect()->route('2fa.indexAdmin');

        //return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function verificarUsuario(Request $request)
    {
       
        auth()->user()->generateCode();

        return redirect()->route('2fa.indexUsuario');

        //return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    
    public function edit(Request $request){

        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        return view('perfil',$datos,['logos'=>$logos ])->with([
            'users' => $request->user(),
            
        ]);

    }

    public function editAdmin(Request $request){
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();
        return view('Administrador.perfil',$datos,['logos'=>$logos ])->with([
            'users' => $request->user(),
            
        ]);

    }

    
    public function editProveedor(Request $request){
        $datos['pies']=Pie::paginate(1);
        $logos = Logo::all();

        return view('Proveedor.perfil',$datos,['logos'=>$logos ])->with([
            'users' => $request->user(),
        ]);

    }

    public function update(ProfileRequest $request ){

        return DB::transaction(function () use ($request){

            $user = $request->user();

            $user->fill(array_filter($request->validated()));

            $user->save();

            if ($request->hasFile('image')) {
                if ($user->image != null) {
                    Storage::disk('images')->delete($user->image->path);
                    $user->image->delete();
                }

                $user->image()->create([
                    'path' => $request->image->store('users', 'images'),
                ]);
            }
        
            return redirect()
                    ->route('profile.edit')
                    ->withSuccess('Profile edited');

        });


    }


    public function updateProveedor(ProfileRequest $request ){

        return DB::transaction(function () use ($request){

            $user = $request->user();

            $user->fill(array_filter($request->validated()));

            $user->save();

            if ($request->hasFile('image')) {
                if ($user->image != null) {
                    Storage::disk('images')->delete($user->image->path);
                    $user->image->delete();
                }

                $user->image()->create([
                    'path' => $request->image->store('users', 'images'),
                ]);
            }
        
            return redirect()
                    ->route('profile.editProveedor')
                    ->withSuccess('Profile edited');

        });


    }



    public function updateAdmin(ProfileRequest $request ){

        return DB::transaction(function () use ($request){

            $user = $request->user();

            $user->fill(array_filter($request->validated()));

            $user->save();

            if ($request->hasFile('image')) {
                if ($user->image != null) {
                    Storage::disk('images')->delete($user->image->path);
                    $user->image->delete();
                }

                $user->image()->create([
                    'path' => $request->image->store('users', 'images'),
                ]);
            }
        
            return redirect()
                    ->route('profile.editAdmin')
                    ->withSuccess('Profile edited');

        });


    }
}
