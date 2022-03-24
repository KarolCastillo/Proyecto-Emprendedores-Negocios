<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    //FORMULARIO PARA REGISTRAR NUEVO PROVEEDOR
    public function register(){
        return view('providers.createp');
    }

    //GUARDAR PROVEEDOR EN LA BD
    public function save(Request $request){

        $validator=$this->validate($request,[
            'id'=>'required|unique:providers',
            'nombre'=>'required',
            'direccion'=>'required',
            'correo'=>'required|email|unique:providers',
            'numero'=>'required',
            //'mercaderia'=> 'nullable',
        ]);

        $userdata = request()->except('_token');
        Provider::insert($userdata);
        return back() ->with('proveedorguardado', 'Proveedor guardado con exito');
    }
}
