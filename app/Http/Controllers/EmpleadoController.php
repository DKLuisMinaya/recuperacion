<?php

namespace App\Http\Controllers;
use App\Models\Tarea;
use App\Models\empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $datos->id_tarea = $request->id_tarea;
        $datos->save();
        return back();
    }

    public function filtrar(Request $request){
        $tarea = Tarea::where('estado', 1)->get();
        $empleados = DB::table('empleados')
        ->join('tareas', 'id_tarea', '=', 'tareas.id')
        ->where('empleados.estado', 0)
        ->where('tareas.id', '=', $request->datoFiltrado)
        ->select('empleados.*', 'tareas.tarea')
        ->get();
        return view('welcome',compact('empleados', 'tarea'));
    }

    public function mostrar(){
        $tarea = Tarea::where('estado', 1)->get();
        $empleados = DB::table('empleados')
        ->join('tareas', 'id_tarea', '=', 'tareas.id')
        ->where('empleados.estado', 0)
        ->select('empleados.*', 'tareas.tarea')
        ->get();
         return view('welcome',compact('empleados', 'tarea'));
    }
    
}
