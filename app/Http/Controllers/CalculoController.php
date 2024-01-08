<?php

namespace App\Http\Controllers;

use App\Models\calculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CalculoController extends Controller
{
    
    public function index(){
        $vts = DB::table('ventas')
        ->join('productos', 'id_producto', '=', 'productos.id')
        ->select('ventas.*', 'productos.nombre')
        ->get();
        return view('ventas', compact('vts'));
    }
}
