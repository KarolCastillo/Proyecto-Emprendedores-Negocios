<?php

namespace App\Http\Controllers;

use App\Models\parking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParkingController extends Controller
{
    public function index(Request $request)
    {

        $fecha = ($request->fecha != '') ? $request->fecha : now();
       $customers = parking::where('fecha', '=', $fecha)->paginate(14);
       // return view('parking.listpark', compact('customers'));
        //$customers = DB::table('parking')
          //  -> where('fecha','=',  'utc_date()')
          //  ->get();

       // $sql = 'SELECT * FROM parking where fecha = utc_date();';
        //$customers = DB::select($sql);

        return view('parking.listpark', compact('customers','fecha'));
    }

    //formulario para ingresar un camion al predio
    public function register(){
        return view('parking.createpark');
    }

    //guardar en la bd nuevo registro
    public function save(Request $request){

        $validator=$this->validate($request,[
            //el id es la placa del cabezal
            'placa'=>'required|unique:parking',
            'nombre'=>'required',
            'fecha'=>'required',
            'hora'=>'required',
            'sector'=>'required',
            'servicio'=> 'required',
        ]);

        $userdata = request()->except('_token');
        parking::insert($userdata);
        return back() ->with('parqueoguardado', 'Parqueo guardado con exito');
    }
}
