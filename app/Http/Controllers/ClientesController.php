<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
class ClientesController extends Controller
{
    //
    public function showClientes(){
        $cli = DB::table('cliente')->get();
        return view('clientes.visualizar',['cli'=> $cli]);
    }
}
