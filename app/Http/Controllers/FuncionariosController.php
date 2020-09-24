<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function funcionarios(){
        $sub = 'Lista de funcionários';
        $funcionarios = ['Eduardo','Gabriel','Pereira','Wellington'];
        return view('funcionarios',compact('sub','funcionarios'));
    }
}
