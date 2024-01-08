<?php

namespace App\Http\Controllers;

use App\Models\calculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CalculoController extends Controller
{
    
    public function index(){
        $vts = DB::table('calculos')
        ->join('empleados', 'id_empleado', '=', 'empleados.id')
        ->select('calculos.*', 'empleados.nombre')
        ->get();
        return view('Salarios', compact('vts'));
    }
}
