<?php

namespace App\Http\Controllers;
use App\Models\Tarea;
use App\Models\empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $tarea= Tarea::where('estado', 1)->get();
        return view('empleado', compact('tarea'));   
    }

    public function saveP(Request $request){
        $datos = new Empleado();
        $datos->nombre = $request->nombre;
        $datos->fecha = $request->fecha;
        $datos->salario = $request->salario;
        $datos->horas = $request->horas;
        $datos->departamento = $request->departamento;
        $datos->estado = false;
        $datos->save();
        return back();
    }
    
}
