<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    //
    public function showHabitaciones(){
        $habitaciones = DB::table('habitacion')
                        ->join('precio','precioId','=','precio.id')
                        ->get();
        return view('servicios.habitaciones',['habitaciones'=>$habitaciones]);
    }
}
