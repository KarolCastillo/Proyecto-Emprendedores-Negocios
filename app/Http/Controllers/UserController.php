<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //VISTA DE LISTA USUARIO
    public function usuario(){
        $customers = User::paginate(5);
        return view('auth.listUsuario', compact('customers'));
    }
}
