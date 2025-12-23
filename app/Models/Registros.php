<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Registros {

    public static function getRegistros($userId): array{
        $listaRegistros = [];
        $registros = DB::table('registros_ofx')->where('idUsuario', $userId);
        foreach($registros as $registro){
            $listaRegistros[$registro->id] = [
                'Caminho' => $registro->caminho, 
                'Data Inclusao' => $registro->Data];
        }

        return $listaRegistros;
    } 
}