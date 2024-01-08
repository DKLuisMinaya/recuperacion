<?php

namespace App\Http\Controllers;

use App\Models\tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function principal(){
        return view('home');
    }
    public function index()
    {
        $tarea = Tarea::where('estado', 1)->get();
        return view("tarea", compact('tarea'));
    }

    public function registrar(Request $request){
        $autor = new Tarea();
        $autor->tarea = $request->tarea;
        $autor->tiempoI = $request->tiempoI;
        $autor->save();
        return back();
}
}
