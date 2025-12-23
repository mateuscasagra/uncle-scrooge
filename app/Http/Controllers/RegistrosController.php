<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\Registros;
class RegistrosController extends Controller{

 
    public function index(Request $request){
        $value = $request->session()->get('key');
        $user = $request->user(); 

        $listaRegistros = Registros::getRegistros($user->id);
        
        return Inertia::render('registros', $listaRegistros);
    }


    

}