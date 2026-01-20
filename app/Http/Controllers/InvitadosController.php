<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvitadosController extends Controller
{
    public function Invitados(){

        $invitados = DB::table('invitados')
        ->where('confirmacion','=',null)
        ->get();

        return $invitados;
    }

    public function NumeroContemplados($id){

        $invitados = DB::table('invitados')
        ->where('id',$id)
        ->get('miembros_contemplados')
        ->first();

        return $invitados;
    }

    public function Confirmacion($id = 0,Request $request){

        $invitados = DB::table('invitados')
        ->where('id',$id)
        ->update(['confirmacion' => $request->confirmacion,'miembros_confirmados' => $request->miembros_confirmados]);
    }

    public function NoAsistencia($id = 0,Request $request){

        $invitados = DB::table('invitados')
        ->where('id',$id)
        ->update(['confirmacion' => $request->confirmacion,'miembros_confirmados' => $request->miembros_confirmados]);
    }
}
